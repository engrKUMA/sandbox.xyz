<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php $this->load->view('frontend_view/includes/header'); ?>
    </head>
    <body>

        <!-- navbar -->
        <?php $this->load->view('frontend_view/includes/navbar'); ?>
        <!-- navbar -->


        <section class="row container">

            <div class="card center col l6 m8 s12 push-l3 push-m2">
                <div class="card-content container">
                    <!--buttons-->
                    <div class="row center">
                        <form>
                            <div class="row form-group input-field">
                                <input type="text" name="email" id="email" required/>
                                <label for="email">Please enter your Email Address*</label>
                            </div>

                            <div class="row form-group input-field">
                                <input type="password" name="password" id="password" required />
                                <label for="password">Please enter your Password*</label>
                            </div>

                            <div class="row form-group">
                                <a href="profile.php" type="submit" class="waves-effect waves-light btn orange col s12">Log in / Register</a>
                            </div>

                            <p class="row">
                            <hr class="col s5">
                            <span class="col s2">OR</span>
                            <hr class="col s5">
                            </p>
                            <br>
                            <br>
                            <!--register button-->
                            <div class="row">
                                <a  onclick="triggerLogin();" class="waves-effect waves-light btn blue darken-4 col s12"><i class="fa fa-facebook-official" aria-hidden="true"></i> Continue with Facebook</a>

                            </div>


                        </form>

                    </div>

                </div>

            </div>
        </section>


        <script src="<?= base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>

        <script>
                                    // Initiate Facebook JS SDK
                                    window.fbAsyncInit = function () {
                                        FB.init({
                                            appId: '<?php echo $this->config->item('facebook_app_id'); ?>', // Your app id
                                            cookie: true, // enable cookies to allow the server to access the session
                                            xfbml: false, // disable xfbml improves the page load time
                                            version: 'v2.10',
                                            status: true // Check for user login status right away
                                        });

                                        FB.getLoginStatus(function (response) {
                                            console.log('getLoginStatus', response);
                                            // loginCheck(response);
                                        });
                                    };

                                    // Check login status
                                    function statusCheck(response) {
                                        console.log('statusCheck', response.status);
                                        if (response.status === 'connected')
                                        {
                                            //build user info then login..
                                            buildInfo();

                                        } else if (response.status === 'not_authorized')
                                        {
                                            // User logged into facebook, but not to our app.
                                        } else {
                                            // User not logged into Facebook.
                                        }
                                    }

                                    // Get login status
                                    function loginCheck()
                                    {
                                        FB.getLoginStatus(function (response) {
                                            console.log('loginCheck', response);
                                            statusCheck(response);
                                        });
                                    }

                                    function buildInfo() {
                                        FB.api('/me', 'GET', {fields: 'id,first_name,last_name,email'}, function (response) {

                                            var postData = {
                                                "fbid": response.id,
                                                "first_name": response.first_name,
                                                "last_name": response.last_name,
                                                "email": response.email
                                            };

                                            var url = "/user/login";

                                            $.post(
                                                    url,
                                                    postData,
                                                    function (o) {
                                                        if (o.result == 1) {
                                                            window.location.href = "<?= base_url('account') ?>";
                                                            alert('welcome back user');
                                                        } else {
                                                            window.location.href = "<?= base_url('account') ?>";
                                                            alert('welcome new user');
                                                        }
                                                    },
                                                    'json'
                                                    );
                                        }
                                        );
                                    }


                                    function triggerLogin() {
                                        // Trigger login
                                        FB.login(function () {
                                            loginCheck();
                                        }, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
                                    }

                                    (function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) {
                                            return;
                                        }
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/en_US/sdk.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));

        </script>

        <?php $this->load->view('frontend_view/includes/footer'); ?>

    </body>
</html>
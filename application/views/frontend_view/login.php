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
        FB.api('/me', 'GET', {fields: 'id,first_name,last_name,email, picture'}, function (response) {

            var url = "/user/login",
                    type = "post",
                    data = {
                        "userFBID": response.id,
                        "userFirstName": response.first_name,
                        "userLastName": response.last_name,
                        "userEmail": response.email,
                        "userPicture": response.picture.data.url
                    };

            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function (response) {
                    if (response == 1) {
                        window.location.href = "<?= base_url('account') ?>";
                        alert('welcome back user');
                    } else {
                        window.location.href = "<?= base_url('account') ?>";
                        alert('welcome new user');
                    }
                }
            });
        });
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

<section class="row container">

    <div class="card center col l6 m8 s12 push-l3 push-m2">
        <div class="card-content container">
            <!--buttons-->
            <div class="row center">
                <form action="" method="post" class="loginUserForm">
                    <div class="row">
                        <a onclick="triggerLogin();" class="waves-effect waves-light btn blue darken-4 col s12"><i class="fa fa-facebook-official" aria-hidden="true"></i> Continue with Facebook</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
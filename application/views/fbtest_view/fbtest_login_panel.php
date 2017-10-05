
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title; ?></title>
    </head>
    <body>
        <!-- <div id="fb-root"></div> -->

        <h1><?= $heading; ?></h1>
        <h3><?= $message; ?></h3>

        <!-- <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true">	
        </div> -->

        <input type="button" name="login" onclick="test();" value="Login" />

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
            function statusCheck(response)
            {
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

                    //      	FB.login(function(response){
                    //      		buildInfo();
                    // });
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
                FB.api('/me', 'GET', {fields: 'id, first_name, last_name, email'}, function (response) {

                    var fbid = response.id;
                    var fname = response.first_name;
                    var lname = response.last_name;
                    var email = response.email;

                    var postData = {'fbid': fbid, 'fname': fname, 'lname': lname, 'email': email};

                    var url = "/fbtest_user/login";

                    $.post(url, postData, function (o) {
                        if (o.result == 1) {
                            window.location.href = "userdash";
                            alert('welcome back user');
                        } else {
                            var insertUrl = "/fbtest_user/test_insert";

                            $.post(insertUrl, postData, function (o) {

                            }, 'json');
                            window.location.href = "userdash";
                            alert('welcome new user');
                        }
                    }, 'json');
                });
            }


            function test() {
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

    </body>
</html>
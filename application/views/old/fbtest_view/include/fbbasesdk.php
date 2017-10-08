<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>wait wut?</title>
    </head>
    <body>

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

                FB.getAuthResponse();

                FB.getLoginStatus(function (response) {
                    console.log('getLoginStatus', response);
                    loginCheck(response);
                });
            };

// Check login status
            function statusCheck(response)
            {
                console.log('statusCheck', response.status);
                if (response.status === 'connected')
                {
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

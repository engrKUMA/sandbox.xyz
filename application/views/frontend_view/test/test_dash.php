
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title; ?></title>
    </head>
    <body>

        <h1><?= $heading; ?></h1>
        <h3><?= $message; ?></h3>

        <div id="fbid">FB ID:<?= $fbid; ?></div>
        <div id="fname">First name:<?= $first_name; ?></div>
        <div id="lname">Last name:<?= $last_name; ?></div>
        <div id="email">Email:<?= $email; ?></div>
        <div id="usertype">User type:<?= $usertype; ?></div>


        <input type="button" name="" onclick="logoutUser();" value="logout" />

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
            };

            function logoutUser() {
                FB.logout(function (response) {
                    window.location.href = "home/logout";
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
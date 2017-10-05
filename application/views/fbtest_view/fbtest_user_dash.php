
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title; ?></title>
    </head>
    <body>

        <h1><?= $heading; ?></h1>
        <h3><?= $message; ?></h3>
        <h3>User Token: <?= $usertoken; ?></h3>

        <div id="fbid">for fbid</div>
        <div id="fname">for fname</div>
        <div id="lname">for lname</div>
        <div id="email">for email</div>


        <input type="button" name="" onclick="logMeout();" value="logout" />

        <script type="text/javascript">

            function logMeout() {
                logoutUser();
                window.location.href = "<?= base_url('fbtest_home/logout'); ?>";
            }
        </script>

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
                    loginCheck(response);
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

                    document.getElementById("fbid").innerHTML = fbid;
                    document.getElementById("fname").innerHTML = fname;
                    document.getElementById("lname").innerHTML = lname;
                    document.getElementById("email").innerHTML = email;
                });
            }

            function logoutUser() {
                FB.logout(function (response) {
                    // user is now logged out
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
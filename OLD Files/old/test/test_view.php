<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
    </head>

    <body>
        <div>

    <h1><?= $heading; ?></h1>
    <h3><?= $message; ?></h3>

    <div class="login">
        <input id="loginCheck" type="button" value="loginCheck" onclick="loginCheck();" />
    </div>

    <div class="logout">
        <input id="logout" type="button" value="logout" onclick="logout();" />
    </div>

    

</div>
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
            logMeIn();
            // User not logged into Facebook.
        }
    }

    function logMeIn() {
                FB.login(function () {
                    loginCheck();
                }, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
            }

    // Get login status
    function loginCheck()
    {
        FB.getLoginStatus(function (response) {
            console.log('loginCheck', response);
            statusCheck(response);
        });
    }

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    /*
     function getUser()
     {
     FB.api('/me', function (response) {
     console.log('getUser', response);
     });
     }
     */

     var url, postData;
    function buildInfo() {
        FB.api('/me', 'GET', {fields: 'id, first_name, last_name'}, function (response) {

//            console.log('buildUser', response);
            var fbid = response.id;
            var fname = response.first_name;
            var lname = response.last_name;

            postData = {'fbid': fbid, 'fname': fname, 'lname': lname};

            console.log(postData, url);
//        var postData = {'fbid': fbid, 'fname': fname, 'lname': lname};

            // checkUserinDB();
            insertUsertoDB();

            /*
             var postData = {"fbid": fbid, "fname": fname, "lname": lname};
             
             var url = "<?= base_url('home/toDash'); ?>";
             
             $.post(url, postData, function (o) {
             
             }, 'json');
             
             working ajax
             $.ajax({
             type: "POST",
             url: "user/login",
             data: JSON.stringify(postData),
             success: function (response) {
             console.log(response);
             alert("Data Saved: " + response);
             },
             error: function () {
             alert("Data Saved FAIL: " + response);
             }
             });
             */
        });
    }

    function checkUserinDB(){

        var url = "/user/login";

        console.log(postData, url);

        $.post(url, postData, function (o) {
                if (o.result == 1) {
//                window.location.href = "home/toDash";
                    alert('welcome back user');
                } else {
//                window.location.href = "home/toDash";
                    alert('welcome new user');
                }
            }, 'json');


        // $.ajax({
        //      type: "POST",
        //      url: "user/login",
        //      data: JSON.stringify(postData),
        //      success: function (response) {
        //      console.log(response);
        //      alert("Data Saved: " + response);
        //      },
        //      error: function () {
        //      alert("Data Saved FAIL: " + response);
        //      }
        //      });
    }

        function insertUsertoDB(){

        var url = "/user/test_insert";

        console.log(postData, url);

        $.post(url, postData, function (o) {
                if (o.result == 1) {
//                window.location.href = "home/toDash";
                    alert('user inserted to DB');
                } else {
//                window.location.href = "home/toDash";
                    alert('user inserted to DB');
                }
            }, 'json');


        // $.ajax({
        //      type: "POST",
        //      url: "user/login",
        //      data: JSON.stringify(postData),
        //      success: function (response) {
        //      console.log(response);
        //      alert("Data Saved: " + response);
        //      },
        //      error: function () {
        //      alert("Data Saved FAIL: " + response);
        //      }
        //      });
    }


    //---- logout the user to the app.
    function logout(){

        console.log('function for logout button');
        FB.logout(function(response) {

            window.location.href = "<?php echo base_url('home'); ?>";
        });
    }

//     $(function () {
//         // Trigger login
//         $('.login').on('click', 'button', function () {
//             FB.login(function () {
// //                loginCheck();
//             }, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
//         });
//     });

//    $(function () {
//        $('.login').click(function () {
//            FB.login(function () {
////                loginCheck();
////                buildInfo();
//            }, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
//        });
//    });


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

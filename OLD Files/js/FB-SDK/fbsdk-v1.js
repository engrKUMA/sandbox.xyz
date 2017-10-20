/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php>
// Initiate Facebook JS SDK
    window.fbAsyncInit = function () {
        FB.init({
            appId: '<?php echo $this->config->item('facebook_app_id'); ?>', // Your app id
            cookie: true, // enable cookies to allow the server to access the session
            xfbml: false, // disable xfbml improves the page load time
            version: 'v2.10', // use version 2.4
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
            buildInfo();

        } else if (response.status === 'not_authorized')
        {
            // User logged into facebook, but not to our app.
        } else
        {
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

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function getUser()
    {
        FB.api('/me', function (response) {
            console.log('getUser', response);
        });
    }

    function buildInfo() {
        FB.api('/me', 'GET', {fields: 'id, first_name, last_name'}, function (response) {

//            console.log('buildUser', response);
            var fbid = response.id;
            var fname = response.first_name;
            var lname = response.last_name;

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

            var url = "/user/login";
            var postData = {'fbid': fbid, 'fname': fname, 'lname': lname};

            $.post(url, postData, function (o) {
                if (o.result == 1) {
                    window.location.href = "home/toDash";
                    alert('welcome back user');
                } else {
                    window.location.href = "home/toDash";
                    alert('welcome new user');
                }
            }, 'json');

        });
    }

    $(function () {
        // Trigger login
        $('.login').on('click', 'button', function () {
            FB.login(function () {
                loginCheck();
            }, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
        });
    });
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

<?php>

<div class="wrapper">

    <h1>Facebook PHP SDK for CodeIgniter</h1>
    <h3>Javascript SDK login example</h3>

    <div class="login">
        <button>Login</button>
    </div>

    <!--<div class="form" >-->
    <form id="userinfo" mothod="post" action="<?= site_url('user/login') ?>">
        ID: <input type="text" name="fbid" id="fbid" value=""><br>
        First name: <input type="text" name="fname" id="fname" value=""><br>
        Last name: <input type="text" name="lname" id="lname" value=""><br>
        <input type="submit" value="login" />
    </form>
    <!--</div>-->

</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
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
            document.getElementById("fbid").value = fbid;
            document.getElementById("fname").value = fname;
            document.getElementById("lname").value = lname;

//            var postData = {"fbid": fbid, "fname": fname, "lname": lname};

//            var url = "<?= base_url('home/toDash'); ?>";
//            
//            $.post(url, postData, function (o) {
//
//            }, 'json');

//            working ajax
//            $.ajax({
//                type: "POST",
//                url: "user/login",
//                data: JSON.stringify(postData),
//                success: function (response) {
//                    console.log(response);
//                    alert("Data Saved: " + response);
//                },
//                error: function () {
//                    alert("Data Saved FAIL: " + response);
//                }
//            });

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
//        $('.form').on('submit', '.post-to-wall', function (e) {
//            e.preventDefault();
//            var formdata = $(this).serialize();
//            $.ajax({
//                url: '/example/post',
//                data: formdata,
//                type: 'POST',
//                dataType: 'json',
//                success: function (response) {
//                    console.log(response);
//                    if (response.id)
//                    {
//                        $('.form').html('<p>Post submitted successfully.</p>');
//                    } else
//                    {
//                        $('.form').html('<p>Something happened, please try again!.</p>');
//                    }
//                }
//
//            })
//        });
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


//
//    $(function () {
//        $("#userinfo").submit(function (evt) {
//            evt.preventDefault();
//            var url = $(this).attr('action');
//            var postData = $(this).serialize();
//            
//            $.post(url, postData, function(o){
//                
//            }, 'json');
//        })
//    })
</script>

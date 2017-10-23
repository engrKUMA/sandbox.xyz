<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<section class="row">
    <div class="col l2 m3 s4">
        <!-- start: dashboard Side nav -->
        <ul class="collection sticky">
            <li class="collection-item center">
                <img src=<?= $userPicture; ?> class="circle center" width="80px" height="80px">
                     <p><?= $userFirstName; ?> <?= $userLastName; ?><br> <?= $userType; ?></p>

                <a id="offer-property-btn" onclick="toRegisterAgency();" class="center collection-item waves-effect waves-light">Register Agency</a>
                <a id="offer-property-btn" onclick="toLogout();" class="center collection-item waves-effect waves-light">Logout</a>
        </ul>
        <!-- end:  dashboard Side nav -->
    </div>
    <div class="col l8 m6 s8">
        <div class="row card">
            <div class="card-content">
                <h3 class="dashboard-header" >Admin Dashboard</h3>
                <p>Make changes to site</p>

                <button onclick="showUserRequest();">
                    showUserRequest();
                </button>
                <br />
                <button onclick="postProperty();">
                    Post Property
                </button>
            </div>
        </div>
</section>

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

    // call logout function on account controller
    function toLogout() {

        FB.logout(function (response) {
            // Person is now logged out
            window.location.href = "account/logout";
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

<!--redirects--> 
<script type="text/javascript" >
    function showUserRequest() {
        //load controller
        window.location.href = "/adminController/showUserRequest";
    }
    function showUserRequest() {

        //load controller
        window.location.href = "/adminController/showUserRequest";
    }
    function toRegisterAgency() {
        //load controller
        window.location.href = "/adminController/newAgencyForm";
    }
</script>
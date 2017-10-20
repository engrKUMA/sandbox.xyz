<script type="text/javascript">
</script>

<!-- nav tag represents the nav menu -->
<!-- the side nav id represents the side nav menu -->

<!-- nav menu -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">

            <!-- side nav trigger button -->
            <!-- hidden in large screens -->
            <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only right"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>

            <!-- nav bar menu -->
            <a href="<?= base_url(''); ?>" class="brand-logo"><img src="" width="220px" style="margin-top: 0px">HAPPY Logo</a>

            <ul class="right hide-on-med-and-down">
                <li>
                    <a id="buy-dropdown" class="dropdown-button waves-effect waves-light center" data-activates="buyMenu" onclick="chevBuy()">Buy <i id="chevBuy" class="fa fa-chevron-down" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a id="pre-sell-dropdown" class="dropdown-button waves-effect waves-light center" data-activates="presellingMenu" onclick="chevPreSell()">Pre-Selling <i id="chevPreSell" class="fa fa-chevron-down" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a id="rent-dropdown" class="dropdown-button waves-effect waves-light center" data-activates="rentMenu" onclick="chevRent()">For Rent <i id="chevRent" class="fa fa-chevron-down" aria-hidden="true"></i></a>
                </li>
                <li><a href="search_results.php">Request</a></li>
                <li><a href="search_results.php">Ask</a></li>
                <li><a href="search_results.php">Post</a></li>
                <li>
                    <a name="login" id="login-register-btn" onclick="triggerLogin();" class="waves-effect waves-light center"><i class="fa fa-user" aria-hidden="true"></i> Login W/ FB</a>
                </li>
            </ul>
        </div>

        <!-- Buy Menu -->
        <ul id="buyMenu" class="dropdown-content">
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Houses</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Lots</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Condos</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Town Houses</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Farms</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Ware Houses</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Commercial Building</a></li>
        </ul>

        <!--  Pre selling Menu -->
        <ul id="presellingMenu" class="dropdown-content">
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Houses</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Condos</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Town Houses</a></li>
        </ul>

        <!--  For Rent Menu -->
        <ul id="rentMenu" class="dropdown-content">
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Houses</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Condos</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Apartments</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Bed Spaces</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Rooms</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Offices</a></li>
            <li class="divider"></li>
            <li><a href="search_results.php" class="center">Lots</a></li>
        </ul>

        <!--  Account Menu Side -->
        <ul id="accountMenu" class="dropdown-content">
            <li><a href="#loginmodal" class="center">Log In</a></li>
            <li class="divider"></li>
            <li><a href="#signupmodal" class="center">Sign Up</a></li>
        </ul>

    </nav>
</div>
<!-- Side nav menu -->
<ul id="slide-out" class="side-nav">

    <li><a id="logo-sidenav-menu" href="index.php" class="waves-effect waves-light center">Happy Logo</a></li>

    <li>
        <a id="login-register-btn" onclick="toLogin();" class="waves-effect waves-light"> Login / Register<i class="fa fa-user-circle-o fa-2x" aria-hidden="true" ></i></a>
    </li>
    <li>
        <a class="dropdown-button waves-effect waves-light" data-activates="buyMenuSide" onclick="chevBuy()">Buy <i id="chevBuySide" class="fa fa-chevron-down" aria-hidden="true"></i></a>
    </li>
    <li>
        <a class="dropdown-button waves-effect waves-light" data-activates="presellingMenuSide" onclick="chevPreSell()">Pre-Selling <i id="chevPreSellSide" class="fa fa-chevron-down" aria-hidden="true"></i></a>
    </li>
    <li>
        <a class="dropdown-button waves-effect waves-light" data-activates="rentMenuSide" onclick="chevRent()">For Rent <i id="chevRentSide" class="fa fa-chevron-down" aria-hidden="true"></i></a>
    </li>
    <li><a href="search_results.php">Request</a></li>
    <li><a href="search_results.php">Ask</a></li>
    <li><a href="search_results.php">Post</a></li>

</ul>

<!-- Side nav Menus -->

<!-- Buy Menu Side-->
<ul id="buyMenuSide" class="dropdown-content">
    <li><a href="search_results.php" class="center">Houses</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Lots</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Condos</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Town Houses</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Farms</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Ware Houses</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Commercial Building</a></li>
</ul>

<!--  Pre selling Menu Side-->
<ul id="presellingMenuSide" class="dropdown-content">
    <li><a href="search_results.php" class="center">Houses</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Condos</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Town Houses</a></li>
</ul>

<!--  For Rent Menu Side -->
<ul id="rentMenuSide" class="dropdown-content">
    <li><a href="search_results.php" class="center">Houses</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Condos</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Apartments</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Bed Spaces</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Rooms</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Offices</a></li>
    <li class="divider"></li>
    <li><a href="search_results.php" class="center">Lots</a></li>
</ul>

<!--  Account Menu Side -->
<ul id="accountMenuSide" class="dropdown-content">
    <li><a href="#loginmodal" class="center">Log In</a></li>
    <li class="divider"></li>
    <li><a href="#signupmodal" class="center">Sign Up</a></li>
</ul>


<script type="text/javascript">

    //call home controller then login function
    function toLogin() {

        window.location.href = "account/login";
    }

//change something using sessions and codeigniter calls
//    if(<?= $this->session->userdata('usersFBID'); ?> != null){
//       document.getElementById("login-register-btn").innerHTML = "test change"; 
//    } else{
//        toLogin();
//    }
</script>

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

            console.log(url);
            console.log(type);
            console.log(data);


            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function (response) {
                    if (response == "previous user") {
                        console.log(response);
                        window.location.href = "<?= base_url('account') ?>";
                        alert('welcome back user');
                    } else {
                        console.log(response);
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

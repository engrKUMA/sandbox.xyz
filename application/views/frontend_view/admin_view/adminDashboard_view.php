<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="img/favicon.ico" rel="icon">

        <!-- Materialize CSS File -->
        <link href="<?= base_url('libs/materialize/css/materialize.min.css') ?>" rel="stylesheet">

        <!-- Font awesome CSS Files -->
        <link href="<?= base_url('libs/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="<?= base_url('css/customcss.css') ?>" rel="stylesheet">

        <!-- Light box css -->
        <link href="<?= base_url('libs/lightbox/dist/css/lightbox.min.css') ?>" rel="stylesheet">

        <!-- slick css -->
        <link href="<?= base_url('libs/slick/slick.css') ?>" rel="stylesheet">
        <link href="<?= base_url('libs/slick/slick-theme.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#newAgency-dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#newAgency-dialog" ).dialog( "open" );
    });
  } );
  </script>

    </head>
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend_view/includes/navbar'); ?>
        <!-- navbar -->

<section class="row">
    <div class="col l2 m3 s4">
        <!-- start: dashboard Side nav -->
        <ul class="collection sticky">
            <li class="collection-item center">
                <img src=<?= $userPicture; ?> class="circle center" width="80px" height="80px">
                     <p><?= $userFirstName; ?> <?= $userLastName; ?><br> <?= $userType; ?></p>

                <a id="offer-property-btn" onclick="toRegisterAgency();" class="center collection-item waves-effect waves-light">Register Agency</a>

<button id="opener">Open Dialog</button>

  <div id="newAgency-dialog" title="Basic dialog">
    <?php $this->view('frontend_view/admin_view/form/newAgencyEntryForm'); ?>
  </div>

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

<!--
  ////////////////////////////////////////////////////////////////////////////////////////
  // start: page footer
  //////////////////////////////////////////////////////////////////////////////////////// 
-->
<div class="row">
    <a class="scrolltop" href="#"><i class="fa fa-angle-up"></i></a> 
</div>

<footer class="page-footer" id="footer">
    <div class="footer-copyright">
        <div class="container">
            &copy; <?php echo date("Y"); ?> House And Promos Professional Realty
            <a class="grey-text text-lighten-4 right" href="#!">Powered by: CWSSTSI</a>
        </div>
    </div>
</footer>
<!-- 
  ////////////////////////////////////////////////////////////////////////////////////////
  // end: page footer
  //////////////////////////////////////////////////////////////////////////////////////// 
-->

<!-- 
  ////////////////////////////////////////////////////////////////////////////////////////
  // start: Libraries
  //////////////////////////////////////////////////////////////////////////////////////// 
-->
<!-- JQuery lib -->
<!-- <script src="<?= base_url('libs/jquery/jquery.min.js') ?>"></script> -->

<!-- Materialize Js -->
<script src="<?= base_url('libs/materialize/js/materialize.min.js') ?>"></script>

<!-- Light box js -->
<script src="<?= base_url('libs/lightbox/dist/js/lightbox.js') ?>"></script>

<!-- materialize custom Js -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({
            indicators: true
        });
        // Next slide
        $('.carousel').carousel('next');
        $('.carousel').carousel('next', 3); // Move next n times.

        // Previous slide
        $('.carousel').carousel('prev');
        $('.carousel').carousel('prev', 4); // Move prev n times.

        // Set to nth slide
        $('.carousel').carousel('set', 1);

        // Destroy carousel
        // $('.carousel').carousel('remove');

        $(".dropdown-button").dropdown({
            belowOrigin: true
        });
        $('ul.tabs').tabs({
            swipeable: false, // tabs to be swippable
        });
        $('ul.tabs').tabs('select_tab', 'tab_id');
        $('.modal').modal();
        $('select').material_select();
        $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            draggable: true, // Choose whether you can drag to open on touch screens,
        });
    });
</script>

<!-- Lightbox custom Js -->
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>
<!-- 
  ////////////////////////////////////////////////////////////////////////////////////////
  // end: Libraries
  //////////////////////////////////////////////////////////////////////////////////////// 
-->


<!-- 
  ////////////////////////////////////////////////////////////////////////////////////////
  // start: Custom made JS
  //////////////////////////////////////////////////////////////////////////////////////// 
-->

<script type="text/javascript">
    $("#agentForm").hide();
    $("#keyInfoBtn").css({"background-color": "#5c6bc0", "color": "#fff"});


    ////////////////////////////////////////////////////////////////////////////////////////
    // start: offer page jquery
    ////////////////////////////////////////////////////////////////////////////////////////
    function activeInfo() {
        $("#keyInfoBtn").css({"background-color": "#5c6bc0", "color": "#fff"});
        $("#locationBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#photosBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#detailsBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#contactBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
    }
    function activeLocation() {
        $("#keyInfoBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#locationBtn").css({"background-color": "#5c6bc0", "color": "#fff"});
        $("#photosBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#detailsBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#contactBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
    }
    function activePhotos() {
        $("#keyInfoBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#locationBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#photosBtn").css({"background-color": "#5c6bc0", "color": "#fff"});
        $("#detailsBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#contactBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
    }
    function activeDetails() {
        $("#keyInfoBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#locationBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#photosBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#detailsBtn").css({"background-color": "#5c6bc0", "color": "#fff"});
        $("#contactBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
    }
    function activeContact() {
        $("#keyInfoBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#locationBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#photosBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#detailsBtn").css({"background-color": "#fff", "color": "#5c6bc0"});
        $("#contactBtn").css({"background-color": "#5c6bc0", "color": "#fff"});
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    // end: offer page jquery
    ////////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////////
    // start: nav bar JQuery  
    ////////////////////////////////////////////////////////////////////////////////////////
    function chevBuy() {
        document.getElementById("chevBuy").className = "fa fa-chevron-up";
        document.getElementById("chevBuySide").className = "fa fa-chevron-up";
        document.getElementById("chevPreSell").className = "fa fa-chevron-down";
        document.getElementById("chevPreSellSide").className = "fa fa-chevron-down";
        document.getElementById("chevRent").className = "fa fa-chevron-down";
        document.getElementById("chevRentSide").className = "fa fa-chevron-down";
    }
    function chevPreSell() {
        document.getElementById("chevBuy").className = "fa fa-chevron-down";
        document.getElementById("chevBuySide").className = "fa fa-chevron-down";
        document.getElementById("chevPreSell").className = "fa fa-chevron-up";
        document.getElementById("chevPreSellSide").className = "fa fa-chevron-up";
        document.getElementById("chevRent").className = "fa fa-chevron-down";
        document.getElementById("chevRentSide").className = "fa fa-chevron-down";
    }
    function chevRent() {
        document.getElementById("chevBuy").className = "fa fa-chevron-down";
        document.getElementById("chevBuySide").className = "fa fa-chevron-down";
        document.getElementById("chevPreSell").className = "fa fa-chevron-down";
        document.getElementById("chevPreSellSide").className = "fa fa-chevron-down";
        document.getElementById("chevRent").className = "fa fa-chevron-up";
        document.getElementById("chevRentSide").className = "fa fa-chevron-up";
    }
    function chevAccount() {
        document.getElementById("chevBuy").className = "fa fa-chevron-down";
        document.getElementById("chevBuySide").className = "fa fa-chevron-down";
        document.getElementById("chevPreSell").className = "fa fa-chevron-down";
        document.getElementById("chevPreSellSide").className = "fa fa-chevron-down";
        document.getElementById("chevRent").className = "fa fa-chevron-down";
        document.getElementById("chevRentSide").className = "fa fa-chevron-down";
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    // end: nav bar JQuery  
    ////////////////////////////////////////////////////////////////////////////////////////

</script>

<!-- 
  ////////////////////////////////////////////////////////////////////////////////////////
  // end: Custom made JS
  //////////////////////////////////////////////////////////////////////////////////////// 
-->
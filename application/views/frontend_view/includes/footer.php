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
<script src="<?= base_url('libs/jquery/jquery.min.js') ?>"></script>

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
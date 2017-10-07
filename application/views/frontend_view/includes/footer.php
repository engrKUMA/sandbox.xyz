<div class="row">
    <a class="scrolltop" href="#"><i class="fa fa-angle-up"></i></a> 
</div>

<footer id="footer">
    &copy; <?php echo date("Y"); ?>
</footer>

<!-- JQuery lib -->
<script src="<?= base_url('libs/jquery/jquery.min.js') ?>"></script>
<!--<script src="libs/jquery/jquery.min.js"></script>-->

<!-- Materialize Js -->
<script src="<?= base_url('libs/materialize/js/materialize.min.js') ?>"></script>
<!--<script src="libs/materialize/js/materialize.min.js"></script>-->

<!-- Light box js -->
<script src="<?= base_url('libs/lightbox/dist/js/lightbox.js') ?>"></script>
<!--<script src="libs/lightbox/dist/js/lightbox.js"></script>-->

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

<!-- Nav custom js -->
<script type="text/javascript">
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
</script>
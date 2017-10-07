<!-- nav tag represents the nav menu -->
<!-- the side nav id represents the side nav menu -->

<!-- nav menu -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">

            <!-- side nav trigger button -->
            <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>

            <!-- nav bar menu -->
            <a href="index.php" class="brand-logo"><img src="" width="220px" style="margin-top: 0px">Logo Here</a>

            <ul class="right hide-on-med-and-down">
                <!-- <li><a href="indexsearch_results.php">Home</a></li> -->
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
                <li><a class="dropdown-button waves-effect waves-light" data-activates="accountMenu" onclick="chevAccount()"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a></li>
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
    <li><a id="account_menu" class="dropdown-button waves-effect waves-light" data-activates="accountMenuSide" onclick="chevAccount()"><i class="fa fa-user-circle-o fa-4x white-text" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Account</a></li>
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


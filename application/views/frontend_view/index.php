<!-- Hero -->
<section class="hero">
    <div class="container row text-center">
        <div class="col l12 m12 s12">
            <h3 class="home-header">Buy, sell, and rent property online.</h3>
            <!-- tabs -->
            <ul id="tabs-swipe-demo" class="tabs ">
                <li class="tab col s3"><a class="active" href="#Buy_option">Buy</a></li>
                <li class="tab col s5"><a href="#Preselling_option">Pre-Selling</a></li>
                <li class="tab col s4"><a href="#For_rent_option">For Rent</a></li>
            </ul>
            <!-- tabs -->

            <!-- buy panel -->
            <div id="Buy_option" class="col s12 theme-color-blend">
                <form>
                    <br>
                    <div  class="row">

                        <!-- Location -->
                        <div class="col l5 push-l1 s10 m8 push-m2 push-s1 input-field">
                            <i class="fa fa-map-marker prefix color-theme" aria-hidden="true"></i>
                            <input type="text" name="location" placeholder="Ex. Lucena City" id="location">
                            <label for="location">Location</label>
                        </div>
                        <!-- location -->

                        <!-- looking for -->
                        <div class="col l5 push-l1 s10 m8 push-m2 push-s1 input-field">

                            <select id="Type_of_realty" name="Type_of_realty">
                                <option value="house">House</option>
                                <option value="lots">Lots</option>
                                <option value="condos">Condos</option>
                                <option value="townhouses">Town Houses</option>
                                <option value="farms">Farms</option>
                                <option value="warehouse">Ware House</option>
                                <option value="commercialbuildings">Commercial Buildings</option>
                            </select>

                        </div>
                        <!-- looking for -->
                    </div>

                    <div class="row center">
                        <button class="btn btn-large circle-btn" onclick="search();" >Search</button>
                    </div>
                    <br>
                </form>
            </div>
            <!-- buy panel -->

            <!-- pre selling panel -->
            <div id="Preselling_option" class="col s12 theme-color-blend">
                <form>
                    <br>
                    <div  class="row">

                        <!-- Location -->
                        <div class="col l5 push-l1 s10 m8 push-m2 push-s1 input-field">
                            <i class="fa fa-map-marker prefix color-theme" aria-hidden="true"></i>
                            <input type="text" name="location" placeholder="Ex. Lucena City" id="location">
                            <label for="location">Location</label>
                        </div>
                        <!-- location -->

                        <!-- looking for -->
                        <div class="col l5 push-l1 s10 m8 push-m2 push-s1 input-field">

                            <select id="Type_of_realty" name="Type_of_realty">
                                <option value="house">House</option>
                                <option value="condos">Condos</option>
                                <option value="townhouses">Town Houses</option>
                            </select>

                        </div>
                        <!-- looking for -->
                    </div>

                    <div class="row center">
                        <button class="btn btn-large circle-btn" href="search_results.php" >Search</button>
                    </div>
                    <br>
                </form>
            </div>
            <!-- pre selling panel -->

            <!-- for rent panel -->
            <div id="For_rent_option" class="col s12 theme-color-blend">
                <form>
                    <br>
                    <div  class="row">

                        <!-- Location -->
                        <div class="col l5 push-l1 s10 m8 push-m2 push-s1 input-field">
                            <i class="fa fa-map-marker prefix color-theme" aria-hidden="true"></i>
                            <input type="text" name="location" placeholder="Ex. Lucena City" id="location">
                            <label for="location">Location</label>
                        </div>
                        <!-- location -->

                        <!-- looking for -->
                        <div class="col l5 push-l1 s10 m8 push-m2 push-s1 input-field">

                            <select id="Type_of_realty" name="Type_of_realty">
                                <option value="house">House</option>
                                <option value="condos">Condos</option>
                                <option value="apartments">Apartments</option>
                                <option value="bedspaces">Bed Spaces</option>
                                <option value="rooms">Rooms</option>
                                <option value="offices">Offices</option>
                                <option value="lots">Lots</option>
                            </select>

                        </div>
                        <!-- looking for -->
                    </div>

                    <div class="row center">
                        <a class="btn btn-large circle-btn" href="search_results.php" >Search</a>
                    </div>
                    <br>
                </form>
            </div>
            <!-- for rent panel -->
        </div>
    </div>
</section>
<!-- /Hero -->

<section class="container">

    <div class="row">
        <hr class="col s4" style="margin-top: 35px">
        <span class="col s4"><h4 class="dashboard-header center">Top Offers</h4></span>
        <hr class="col s4" style="margin-top: 35px">
    </div>

    <!-- <h4 class="dashboard-header center">Top Offers</h4> -->

    <!-- result#1 -->
    <div class="row">
        <div class="col l4 m4 s12">
            <div class="card hoverable">
                <div class="card-image">
                    <a href="view.php">
                        <img src="img/sample/sample.jpg" height="228px" style="padding: 11.250px 0px;">
                    </a>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <a href="view.php" class="title">
                            Amora Model At Natania Homes
                        </a>
                        <p class="location">
                            <i class="fa fa-map-marker prefix color-theme" aria-hidden="true"></i>
                            Gen. Trias, Cavite
                        </p>
                        <p class="price">
                            ₱ 939,293
                        </p>
                        <p class="details">
                            Brand New Classification
                            <br>
                            3 bedrooms
                            <br>
                            2 bathrooms

                        </p>

                    </div>
                    <div class="card-action link center-align">
                        <a class="btn detail-btn" href="view.php" >More Details</a>

                        <a class="btn detail-btn" href="search_results.php"><i class="fa fa-phone" aria-hidden="true"></i></a>

                        <a class="btn detail-btn" href="search_results.php" ><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- result#1 -->

        <!-- result#2 -->
        <div class="col l4 m4 s12">
            <div class="card hoverable">
                <div class="card-image">
                    <a href="view.php">
                        <img src="img/sample/sample2.jpg" height="228px" style="padding: 11.250px 0px;">
                    </a>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <a href="view.php" class="title">
                            Amora Model At Natania Homes
                        </a>
                        <p class="location">
                            <i class="fa fa-map-marker prefix color-theme" aria-hidden="true"></i>
                            Gen. Trias, Cavite
                        </p>
                        <p class="price">
                            ₱ 939,293
                        </p>
                        <p class="details">
                            Brand New Classification
                            <br>
                            3 bedrooms
                            <br>
                            2 bathrooms

                        </p>

                    </div>
                    <div class="card-action link center-align">
                        <a class="btn detail-btn" href="view.php" >More Details</a>

                        <a class="btn detail-btn" href="search_results.php"><i class="fa fa-phone" aria-hidden="true"></i></a>

                        <a class="btn detail-btn" href="search_results.php" ><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- result#2 -->

        <!-- result#3 -->
        <div class="col l4 m4 s12">
            <div class="card hoverable">
                <div class="card-image">
                    <a href="view.php">
                        <img src="img/sample/sample3.jpg" height="228px" style="padding: 11.250px 0px;">
                    </a>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <a href="view.php" class="title">
                            Amora Model At Natania Homes
                        </a>
                        <p class="location">
                            <i class="fa fa-map-marker prefix color-theme" aria-hidden="true"></i>
                            Gen. Trias, Cavite
                        </p>
                        <p class="price">
                            ₱ 939,293
                        </p>
                        <p class="details">
                            Brand New Classification
                            <br>
                            3 bedrooms
                            <br>
                            2 bathrooms

                        </p>

                    </div>
                    <div class="card-action link center-align">
                        <a class="btn detail-btn" href="view.php" >More Details</a>

                        <button class="btn detail-btn" href="search_results.php"><i class="fa fa-phone" aria-hidden="true"></i></button>

                        <button class="btn detail-btn" href="search_results.php" ><i class="fa fa-envelope" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- result#3 -->


    <div class="row center">
        <button class="btn circle-btn" href="search_results.php" >See All</button>
    </div>
    <br>
</section>

<!-- description -->
<section class="row color-theme-background center">
    <div class="container">
        <br>
        <div class="col l4 m4 s12">
            <img src="img/home/sample1.jpg" class="circle" width="225px" height="225px">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col l4 m4 s12">
            <img src="img/home/sample2.jpg" class="circle" width="225px" height="225px">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col l4 m4 s12">
            <img src="img/home/sample3.jpg" class="circle" width="225px" height="225px">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</section>
<!-- description -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function search() {
        window.location.href = "search_results.php";
    }
</script>
<section class="row">
    <div class="col l2 m3 s4">
        <!-- start: dashboard Side nav -->
        <ul class="collection sticky">
            <li class="collection-item center">
                <img src=<?= $userPicture; ?> class="circle center" width="80px" height="80px">
                     <p><?= $userFirstName; ?> <?= $userLastName; ?><br> <?= $userType; ?></p>
            </li>
            <a id="login-register-btn" href="profile.php" class="center collection-item collection-active waves-effect waves-light">Edit Profile</a>
            <a id="offer-property-btn" href="properties.php" class="center collection-item waves-effect waves-light">Properties</a>
            <a id="offer-property-btn" href="messages.php" class="center collection-item waves-effect waves-light">Messages</a>
            <a id="offer-property-btn" onclick="toLogout();" class="center collection-item waves-effect waves-light">Logout</a>
        </ul>
        <!-- end:  dashboard Side nav -->
    </div>
    <div class="col l8 m6 s8">
        <div class="row card">
            <div class="card-content">
                <h3 class="dashboard-header" >Edit Profile</h3>
                <p>Make sure your profile is updated so that our users can contact you easily.</p>

                <!--action link to the page-->
                <form action="/user/update" method="post" class="updateUserForm">

                    <div id="userType" name="userType">Private user</div>

                    <div class="row">

                        <!-- mobile number -->
                        <div class="input-field col l6 m6 s12">
                            <input id="mobileNumber" type="number" name="mobileNumber" />
                            <label for="mobileNumber">Mobile Number*</label>
                        </div>

                        <!-- telephone Number -->
                        <div class="input-field col l6 m6 s12">
                            <input id="telephoneNumber" type="number" name="telephoneNumber" />
                            <label for="telephoneNumber">Telephone Number</label>
                        </div>

                        <p id="agentBtn">Are you a Agent? <a onclick="showAgentForm()">Change Account</a></p>
                        <div id="agentForm">
                            <hr>
                            <br>
                            <!-- agency name -->
                            <div class="input-field col l6 m6 s12">
                                <input id="agencyName" type="text" name="agencyName" />
                                <label for="agencyName">Agency Name*</label>
                            </div>

                            <!-- website -->
                            <div class="input-field col l6 m6 s12">
                                <input id="agencyWebsite" type="text" name="agencyWebsite" />
                                <label for="agencyWebsite">Agency Website</label>
                            </div>

                            <!-- agency city -->
                            <div class="input-field col l6 m6 s12">
                                <input id="agencyNumber" type="text" name="agencyNumber" />
                                <label for="agencyNumber">Agency Number*</label>
                            </div>

                            <!-- agency Address -->
                            <div class="input-field col l6 m6 s12">
                                <input id="agencyAddress" type="text" name="agencyAddress" />
                                <label for="agencyAddress">Agency Address*</label>
                            </div>

                            <p id="privateBtn">Are you a Private User? <a onclick="hideAgentForm()">Change Account</a></p>
                        </div>
                        <br>

                        <div class="center">
                            <button onclick="updateUser();" class="btn waves-light waves-effect circle-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>

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

<script type="text/javascript">
    function showAgentForm() {

        document.getElementById("userType").innerHTML = "Agent";
        document.getElementById("userType").value = "agent";

        console.log("btn pressed");

        $("#agentForm").show();
        $("#agentBtn").hide();
    }
    function hideAgentForm() {

        document.getElementById("userType").innerHTML = "Private";
        document.getElementById("userType").value = "private";

        console.log("btn pressed");

        $("#agentForm").hide();
        $("#agentBtn").show();
    }
</script>

<script type="text/javascript">
    function updateUser() {

        $('form.updateUserForm').one('submit', function () {

            var that = $(this),
                    url = that.attr('action'),
                    type = that.attr('method'),
                    data = {};

            that.find('[name]').each(function (index, value) {
                var that = $(this),
                        name = that.attr('name'),
                        value = that.val();

                data[name] = value;
            });

            console.log(data);

            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function (response) {
                    console.log(response);
                }
            });

            return false;
        });
//
//        var usertype = document.getElementById("test").value;
//        console.log(usertype);
//        if (usertype === "isAgent") {
//
//            console.log(document.getElementById("mobileNumber").value);
//            console.log(document.getElementById("telephoneNumber").value);
////            var postData = {
////                "mobilenumber": document.getElementById("mobileNumber").value,
////                "telephonenumber": document.getElementById("telephoneNumber").value
////            };
////            var url = "/user/update";
////            $.post(url, postData, function (o) {
////                if (o.result == 1) {
////                    alert('data saved');
////                } else {
////                }
////            },
////                    'json'
////                    );
//        } else if (usertype === "isNotAgent") {
//            document.getElementById("test1").innerHTML = "btn clicked isNotAgent";
//
//            console.log(document.getElementById("mobileNumber").value);
//            console.log(document.getElementById("telephoneNumber").value);
//        } else {
//            document.getElementById("test1").innerHTML = "btn clicked isAgent";
//
//            console.log(document.getElementById("mobileNumber").value);
//            console.log(document.getElementById("telephoneNumber").value);
//        }
    }
</script>

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
                <form action="/user/updateContactInfo" method="post" class="updateUserForm">
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

                        <p id="userTypeChangeRequest">Request for user Type Change? <a onclick="sendChangeRequest();">Send Request</a></p>
                        
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
    }
    
    function sendChangeRequest(){
        var url = "user/sendChangeUserType",
                data = {
                        "userFBID": <?= $this->session->userdata('userFBID'); ?>,
                        "userChangeTypeRequest": "true"
                    };
        $.ajax({
                url: url,
                type: "post",
                data: data,
                success: function (response) {
                    console.log(response);
                    alert(response);
                }
            });
            return false;
        alert('for sending request');
    }
</script>

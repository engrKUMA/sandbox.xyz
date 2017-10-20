<section class="row">
    <div class="col l2 m3 s4">
        <!-- start: dashboard Side nav -->
        <ul class="collection sticky">
            <li class="collection-item center">
<!--                <img src=<?= $userPicture; ?> class="circle center" width="80px" height="80px">
                     <p><?= $userFirstName; ?> <?= $userLastName; ?><br> <?= $userType; ?></p>-->

                <button id="offer-property-btn" onclick="toLogout();" class="center collection-item waves-effect waves-light">Logout</button>
        </ul>
        <!-- end:  dashboard Side nav -->
    </div>
    <div class="col l8 m6 s8">
        <div class="row card">
            <div class="card-content">
                <h3 class="dashboard-header" >Admin show all user</h3>
                <p>Make changes to site</p>

                <table border="1">  
                    <tbody>  
                        <tr>                              
                            <td>userFBID</td>  
                            <td>userFirstName</td> 
                            <td>userLastName</td> 
                            <td>userEmail</td>
                            <td>userType</td>                             
                            <td>userChangeTypeRequest</td> 

                            <td>change user type</td>
                        </tr>  
                        <?php
                        foreach ($h->result() as $row) {
                            ?><tr>  
                                <td><?php echo $row->userFBID; ?></td>  
                                <td><?php echo $row->userFirstName; ?></td>  
                                <td><?php echo $row->userLastName; ?></td>  
                                <td><?php echo $row->userEmail; ?></td> 
                                <td><?php echo $row->userType; ?></td>
                                <td><?php echo $row->userChangeTypeRequest; ?></td>
                                <td><input id="userTypeSwitcher"
                                           type="button" 
                                           value="switch user Type" 
                                           name="changeUserType" 
                                           onclick="switchUserType('<?php echo $row->userFBID; ?>', '<?php echo $row->userType; ?>');"/>
                                </td>
                            </tr>  
                        <?php }
                        ?>  
                    </tbody>  
                </table>

            </div>
        </div>
</section>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                                                   window.location.href = "<?= base_url('account/logout'); ?>";
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
                                           }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" >
    function switchUserType($userFBID, $userType) {

        if ($userType === "agent") {
            changeTypeToClient($userFBID);
            alert("user Type Changed to Client");
        } else {
            changeTypeToAgent($userFBID);
            alert("user Type Changed to Agent");
        }
    }

    function changeTypeToAgent($data) {

        var url = "<?= base_url('adminController/changeType'); ?>",
                type = "post",
                data = {
                    "userFBID": $data,
                    "userType": "agent",
                    "userChangeTypeRequest": null
                };
        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    }
    function changeTypeToClient($data) {

        var url = "<?= base_url('adminController/changeType'); ?>",
                type = "post",
                data = {
                    "userFBID": $data,
                    "userType": "client",
                    "userChangeTypeRequest": null
                };
        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    }
</script>
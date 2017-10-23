<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<section class="row">
    <div class="col l2 m3 s4">
        <!-- start: dashboard Side nav -->
        <ul class="collection sticky">
            <li class="collection-item center">
                <img src=<?= $userPicture; ?> class="circle center" width="80px" height="80px">
                     <p><?= $userFirstName; ?> <?= $userLastName; ?><br> <?= $userType; ?></p>

                <a id="offer-property-btn" onclick="toRegisterAgency();" class="center collection-item waves-effect waves-light">Register Agency</a>
                <a id="offer-property-btn" href="<?php echo base_url('home/test'); ?>" class="center collection-item waves-effect waves-light">test modal</a>
                <a href="#" class=".openModal">view</a>
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
                    showUserRequest
                </button>
                <div></div>
                <button onclick="postProperty();">
                    Post Property
                </button>
                <div>
                    <button name="category_modal" id="category_modal">
                        test BTN
                    </button>

                    <button name="btnShowModal" id="btnShowModal">
                        test BTN
                    </button>
                </div>
            </div>
        </div>
</section>

<div class="modal fade" id="selected_note" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog">
    <div class="modal-content">
        Random Content!
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">View Location Note</h4>
        </div>
        <div class="modal-body"></div>
    </div>
</div>

<script>
    $('#category_modal').on('show.bs.modal', function(e) {
    var url = $(this).data('url');
    alert(url);
    jQuery.ajax({
       url: url,
       data:{data_id:$(this).attr('data_id')}, 
       success: function(response)
       {
              alert(response);
            jQuery('#categoryModal .modal-content').html(response);

          }
        });
  });
    </script>

    <script type="text/javascript">
        <script type="text/javascript">

   $(document).ready(function ()
   {

      $("#btnShowModal").click(function (e)
      {
         ShowDialog();
         e.preventDefault();
      });

      $("#btnClose").click(function (e)
      {
         HideDialog();
         e.preventDefault();
      });

      $("#btnSubmit").click(function (e)
      {
         //submit logic
         HideDialog();
         e.preventDefault();
      });

   });

   function ShowDialog()
   {
      $("#overlay").show();
      $("#dialog").fadeIn(300);
      $("#overlay").unbind("click");        
   }

   function HideDialog()
   {
      $("#overlay").hide();
      $("#dialog").fadeOut(300);
   } 

</script>
    </script>

    <script type="text/javascript">
 function notes_modal() {
    $.ajax({
        type: "POST",
        url: "../load_notes_modal",
        success: function ( html ) { 
            $("#selected_note").modal('show');
        },
        error: function() {
            alert('ajax did not succeed');
        }
    });
}

function clickListener() {
    $('.openModal').unbind();
    $('.openModal').click(function (e) {
        e.preventDefault();
        notes_modal();
    });
}
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

<script type="text/javascript">
    $("#btn_preview").click(function () {
        console.log('test btn pressed');
        var name = $('#txtName').val();
        var message = $('#txtMessageRequired').val();
        var tag = $("<div></div>");
        $(tag).attr("title", "Preview - Newsletter");
        $.ajax({
            type: "POST",
            data: {message: message, name: name},
            url: "<?= base_url('home/test'); ?>", //Important: base_url is defined in the header section
            success: function (result) {
                console.log(result);
//                $(tag).dialog({
//                    autoOpen: false,
//                    show: {
//                        effect: "blind",
//                        duration: 1000
//                    },
//                    hide: {
//                        effect: "explode",
//                        duration: 1000
//                    }
//                });
//                $(tag).dialog("option", "width", 670);
//                $(tag).html(result).dialog().dialog('open');
            }
        });
    });
</script>
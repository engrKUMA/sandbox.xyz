<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newAgencyFormModal">Open Modal</button>

  <!-- start new agency Modal -->
  <div class="modal fade" id="newAgencyFormModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Agency Form</h4>
        </div>
        <div class="modal-body">
          <?php $this->view('frontend_view/admin_view/form/newAgencyEntryForm'); ?>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end new agency modal -->
  <button onclick="showTestTable();">test btn</button>
</div>

<script type="text/javascript">
  
  function showTestTable(){
        var url = "/home/testtest",
                data = {};
        $.ajax({
                url: url,
                type: "post",
                data: data,
                success: function (response) {
                    alert(response);
                }
            });
            return false;
    }
</script>

</body>
</html>

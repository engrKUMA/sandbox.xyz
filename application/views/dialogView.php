<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    	<!-- test modal
            <div class="modal show" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h3>Login to MyWebsite.com</h3>
        </div>
        <div class="modal-body">
             <form method="post" action='' name="login_form">
                 <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
                <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
                <p><button type="submit" class="btn btn-primary">Sign in</button>
                <a href="#">Forgot Password?</a>
                </p>
             </form>
        </div>
        <div class="modal-footer">
            New To MyWebsite.com?
        <a href="#" class="btn btn-primary">Register</a>
        </div>
</div> -->

<form action="#" method="post" name="form" style="margin-top: -200px;width: 100%;height: 100%" class="z-depth-4">
<div class="card-panel">
<div class="card-panel cyan lighten-3">
<h4 style="text-align: center">Update Category - <strong><?=$cat_name?></strong></h4>
  </div>
  <div class="row">

    <div class="col l6 s12">
    <label for="subcat_name">Category Name</label>
      <div class="input-field">
        <input id="cat_names" name="cat_name" type="text" class="validate" value="<?=$cat_name?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col l4 s12">
      <button class="btn" type="button" name="action" onclick="update_cat()">Update</button>
    </div>
  </div>
</div>

</form>
    </body>
</html>

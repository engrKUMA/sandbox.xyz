<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>new home test</title>
    </head>
    <body>
        <script type="text/javascript" src="<?= base_url('src/fb.js'); ?>" ></script>
        <div id="content" style="width: 70%; float: left;">
            <h2>Welcome</h2>
        </div>

        <div id="sidebar" style="width: 20%; float: right;">
                <div class="fb-login-button" data-scope="public_profile, email" onlogin="checkLoginState();"></div>
        </div>
    </body>
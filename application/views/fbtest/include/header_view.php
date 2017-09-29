<!doctype html>
<html>  
    <head>
        <title>FB Test</title>
        <link rel="stylesheet" href="">
    </head>

    <body>
        <!-- FB Button Codes -->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1941839762808240";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- FB SDK Essentials -->
        <script src="<?= base_url() ?>public/js/FB-SDK/fbsdk.js"></script>
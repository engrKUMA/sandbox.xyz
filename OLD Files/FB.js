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
window.fbAsyncInit = function () {
    FB.init({
        appId: '1799822213611659',
        cookie: true,
        xfbml: true,
        version: 'v2.10'
    });
    FB.AppEvents.logPageView();
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

function statusChangeCallback(response) {
    if (response.status === 'connected') {
        console.log('Logged in and authenticated');
        testAPI();
    } else {
        console.log('Not authenticated');
    }
}

function checkLoginState() {
    FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
    });
}

function testAPI() {
//    FB.api('/me?fields= id, cover, name, first_name, last_name, age_range, link, gender, locale, picture, timezone, updated_time, verified', function (response) {
    FB.api('/me?fields= id, first_name, last_name', function (response) {
        if (response && !response.error) {
            console.log(response);
//            buildProfile(response);
            buildInfo(response);
        }
    });
}

function buildInfo() {
    FB.api('/me', 'GET', {fields: 'id, first_name, last_name'}, function (response) {

        var userInfo = [response.id, response.first_name, response.last_name];

//        var userInfo = [response.id, response.first_name, response.last_name];
//        alert(userInfo);
//        window.location.href = "home/toDash/" + userInfo;
    });

    $.ajax({
        url: "<?= base_url() ?>home/toDash",
        method: 'POST',
        data:
                {
                    families_selection: families_selection
                }
    });
}

function logout() {
    FB.logout(function (response) {

    });
}
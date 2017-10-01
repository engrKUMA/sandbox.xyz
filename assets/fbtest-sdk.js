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
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1941839762808240";
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
    FB.api('/me?fields= id, cover, name, first_name, last_name, age_range, link, gender, locale, picture, timezone, updated_time, verified', function (response) {
        if (response && !response.error) {
            console.log(response);
//            buildProfile(response);
            buildUser(response);
        }
    });
}

function buildUser(data) {
    

}

function logout() {
    FB.logout(function (response) {
    });
}
// initialize and setup facebook js sdk
window.fbAsyncInit = function () {
    FB.init({
        appId: '1941839762808240',
        xfbml: true,
        version: 'v2.10'
    });
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            document.getElementById('status').innerHTML = 'We are connected.';
            document.getElementById('login').style.visibility = 'hidden';
        } else if (response.status === 'not_authorized') {
            document.getElementById('status').innerHTML = 'We are not logged in.'
        } else {
            document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
        }
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

// login with facebook with extra permissions
function login() {
    FB.login(function (response) {
        if (response.status === 'connected') {
            document.getElementById('status').innerHTML = 'We are connected.';
            document.getElementById('login').style.visibility = 'hidden';
            
        } else if (response.status === 'not_authorized') {
            document.getElementById('status').innerHTML = 'We are not logged in.'
        } else {
            document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
        }
    }, {scope: 'email'});
}

// getting basic user info
function getInfo() {
    FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email'}, function (response) {
        var fName = response.first_name;
        lName = response.last_name;
        usrId = response.id;
        usrEmail = response.email;

        document.getElementById('txtUsrID').innerHTML = 'User ID : ' + usrId;
        document.getElementById('txtFName').innerHTML = 'First Name : ' + fName;
        document.getElementById('txtLName').innerHTML = 'Last Name : ' + lName;
        document.getElementById('txtEmail').innerHTML = 'Email : ' + usrEmail;
    });
}
function saveInfo() {
    FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email'}, function (response) {
        var fName = response.first_name;
        lName = response.last_name;
        usrId = response.id;
        usrEmail = response.email;

        document.getElementById('txtUsrID').innerHTML = 'User ID : ' + usrId;
        document.getElementById('txtFName').innerHTML = 'First Name : ' + fName;
        document.getElementById('txtLName').innerHTML = 'Last Name : ' + lName;
        document.getElementById('txtEmail').innerHTML = 'Email : ' + usrEmail;
    });
}
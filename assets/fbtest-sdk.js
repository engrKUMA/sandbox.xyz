  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1799822213611659',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
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
    FB.api('/me?fields= id, first_name, last_name, gender', function (response) {
        if (response && !response.error) {
            console.log(response);
            //buildProfile(response);
            
        }

        FB.api('/me/feed', function (response) {
            if (response && !response.error) {
            }
        });
    })
}

function buildProfile(user) {
    let profile = `
<h3>Welcome back, ${user.name}</h3>
<ul class="list-group">
    <li class="list-group-item">User ID: ${user.id}</li>
    <li class="list-group-item">First name: ${user.first_name}</li>
    <li class="list-group-item">Last name: ${user.last_name}</li>
    <li class="list-group-item">Gender: ${user.gender}</li>
</ul>
    `;
    document.getElementById('profile').innerHTML = profile;
}

function logout() {
    FB.logout(function (response) {
        setElements(false);
    });
}
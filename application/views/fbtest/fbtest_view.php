<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SocialAuth</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a id="logout" href="#" onclick="logout()">Logout</a></li>
                
                <div 
                    id="fb-btn" 
                    scope="public_profile,email,user_birthday"
                    onlogin="checkLoginState();" 
                    class="fb-login-button" 
                    data-max-rows="1" 
                    data-size="large" 
                    data-button-type="continue_with" 
                    data-show-faces="false" 
                    data-auto-logout-link="false" 
                    data-use-continue-as="true">
                </div>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <h3 id="heading">Log in to view your profile</h3>
    <div id="profile"></div>
</div>

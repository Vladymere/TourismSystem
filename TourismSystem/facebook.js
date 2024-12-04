window.fbAsyncInit = function() {
    FB.init({
        appId      : '806554084802757', // Replace 'YOUR_APP_ID' with your actual Facebook App ID
        cookie     : true,
        xfbml      : true,
        version    : 'v12.0'
    });

    FB.AppEvents.logPageView();   
};

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

function statusChangeCallback(response) {
    if (response.status === 'connected') {
        // Logged into your webpage and Facebook.
        console.log('Successfully logged in with Facebook');
        FB.api('/me?fields=name,email', function(response) {
            console.log('Successful login for: ' + response.name);
            console.log('Email: ' + response.email);
            // You can redirect the user or perform other actions here
        });
    } else {
        // Not logged into your webpage or we are unable to tell.
        console.log('User not authenticated');
        FB.login(function(response) {
            if (response.authResponse) {
                statusChangeCallback(response);
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        }, {scope: 'public_profile,email'});
    }
}
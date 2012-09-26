/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* -----------------------------------------------------------------------------
 *                              Facebook
 * ---------------------------------------------------------------------------*/
window.fbAsyncInit = function() {
    FB.init({
        appId      : '528131467203710', // App ID
//                    channelUrl : '//localhost.com/GSP/clients/thorn/production/facebook/channel.html', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
    });
    FB.ui({ method: 'feed', message: 'Facebook for Websites is super-cool'});
};

// Load the SDK Asynchronously
(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));

$('#share').on('click', function(evt) {
    evt.preventDefault();

    fbAsyncInit();
});
            
/* -----------------------------------------------------------------------------
 *                              Twitter
 * ---------------------------------------------------------------------------*/

$('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;

    window.open(url, 'twitter', opts);

    return false;
});
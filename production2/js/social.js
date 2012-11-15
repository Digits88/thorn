/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* -----------------------------------------------------------------------------
 *                              Facebook
 * ---------------------------------------------------------------------------*/
window.fbAsyncInit = function() {
    
    console.log("starting popup");
    FB.init({
        appId      : '528131467203710', // App ID
//                    channelUrl : '//localhost.com/GSP/clients/thorn/production/facebook/channel.html', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
    });
    
    FB.ui({
        method: 'feed',
        name: 'Thorn',
        link: 'http://wearethorn.org',
        picture: 'https://s3.amazonaws.com/GSP/thorn/images/thorn-thumb.png',
        caption: 'Thorn: Digital Defenders of Children',
        description: 'We invest in and deploy new technology to make the web a hostile environment for child predators.'
    });
    
};

// Load the SDK Asynchronously

$('#share').on('click', function(evt) {
    evt.preventDefault();
    
    if($('#facebook-jssdk').length != 0) {
        fbAsyncInit();
    } else {
        (function(d){
            console.log("starting facebook script");
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
    }
    
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

var twitterUI = {
    picture: 'https://s3.amazonaws.com/GSP/thorn/images/thorn-thumb.png',
    text: 'Support Thorn: Digital Defenders of Children, working to make the web a hostile environment for child predators.',
    url: 'http://wearethorn.org'
};

$('#twitter a').attr({
    'href' : 'https://twitter.com/share?url=' + encodeURIComponent(twitterUI.url) + '&text=' + encodeURIComponent(twitterUI.text)
});

// TODO: write some sort of script that replaces twitter url with formatted url to post photos
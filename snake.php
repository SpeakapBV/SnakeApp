<?php

require 'vendor/autoload.php';

$speakapSignedRequest = new \Speakap\SDK\SignedRequest(
    '000a000000000006',
    'legless lizards'
);

if ( ! $speakapSignedRequest->isValid()) {
    die(
        "I'm sorry, but the request seems invalid. Please try again!" .
        "Note that this application can only be started from within Speakap."
    );
}

?>
<!doctype html>
<html>
<head>
    <title>Snake</title>
    <script type="text/javascript">
        var Speakap = {

            // The app identifier, note that this identifier is case-sensitive.
            appId: "000a000000000006",

            // Sign our payload using our own secret and define it for the Speakap proxy.
            signedRequest: "<?php echo $speakapSignedRequest; ?>"
        };
    </script>

    <!-- Include our JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/speakap.js"></script>
    <script type="text/javascript" src="js/snake.js"></script>

    <!-- Load our custom CSS -->
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="css/snake.css" type="text/css">

</head>
<body>
<div class="placeholder"></div>
<div id="snake-pit" tabindex="0"></div>

<script type="text/javascript">

    // The element we're loading content in
    var placeholderEl = $('div.placeholder');

    /**
     * Here bootstrapping begins. We'll be listening for our handshake to be complete, this is a bit similar to the
     * usual "dom ready" event. After the handshake is complete, all information you need will be available or is in
     * a state so that it can get the information.
     *
     * @see
     */

    // Wait until we've completed our handshake
    Speakap.doHandshake.then(function() {

        // Let's figure out who we are and show SOME information about the logged in user.
        // @see http://developer.speakap.io/portal/user.html (Note: Not everything shown here is available.)
        Speakap.getLoggedInUser().then(function(user) {

            placeholderEl.append('<div class="profile"><div class="profilePhoto"></div><div class="profileText"><p>Hello '+ user.fullName +'!</p></div></div>');

            // The avatar thumbnail is always defined, either by the default Speakap image or by a custom avatar.
            if (typeof(user.avatarThumbnailUrl) !== 'undefined') {
                $('div.profilePhoto').append('<img src="'+ user.avatarThumbnailUrl +'" alt="user avatar">');
            }

            // Starting the game
            new SNAKE.Board({
                boardContainer: "snake-pit",
                fullScreen: false,
                width: 780,
                height: 550
            });
        });
    });

</script>
</body>
</html>

<?php

require '../src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '506055276153924',
  'secret' => '0c5b1423fd34eb3d8d920a54343ade48',
));

// See if there is a user from a cookie
$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
    $user = null;
  }
}

?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<meta charset='utf-8'>
  <body>
    <?php if ($user) { ?>
      Your user profile is
      <pre>
        <?php print_r($user_profile) ?>
      </pre>
    <?php } else { ?>
      <fb:login-button></fb:login-button>
    <?php } ?>
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: '<?php echo $facebook->getAppID() ?>',
          cookie: true,
          xfbml: true,
          oauth: true
        });
        FB.Event.subscribe('auth.login', function(response) {
          window.location.reload();
        });
        FB.Event.subscribe('auth.logout', function(response) {
          window.location.reload();
        });
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>

<pre>
  <?php
    $friends = $facebook->api('/me/friends');
    echo $friends[15];
    foreach ($friends as $friend) {
    $name = $friend[0];
    echo $name;
    }
  ?>
</pre>
  </body>
</html>

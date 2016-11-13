<?php

$fb = new Facebook\Facebook([
    'app_id' => '161436620989091', // Replace {app-id} with your app id
    'app_secret' => '13721385c9cd6c9961091fd6707fdbbe',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://www.brad.tw/myfbcallback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
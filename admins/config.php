<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("389210830237");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Vicode Media Login");
$gClient->setRedirectUri("http://localhost/RealEstate/index.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>
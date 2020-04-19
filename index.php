<?php
session_start();
require_once  'vendor/autoload.php'; 
$fb = new Facebook\Facebook([
  'app_id' => 'id de la app de facebook',
  'app_secret' => 'clave secreta',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$redirectURL = "https://".$_SERVER['SERVER_NAME']."/fb-callback.php";
$loginUrl = $helper->getLoginUrl($redirectURL, $permissions);
echo '<a href="' . $loginUrl . '">Log in con Facebook!</a>';

 ?>

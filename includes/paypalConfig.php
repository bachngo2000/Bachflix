<?php
require_once("PayPal-PHP-SDK-1.14.0/PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Aan_5E4JUDPA__fSJ50KESgTIR0txOOkBSaT594PB7yX91DtA7m4DHHKqMmh1aNX9B9eTt1u5IGYAOed',     // ClientID
        'EJzrH9kvsPf3V6GPFkm5SpgwHIuVlrmgl2efwLTxBYC_YiYFGcwoin9utUIzrEYsxg1JUo5gzmy_maPl'      // ClientSecret
    )
    );
?>
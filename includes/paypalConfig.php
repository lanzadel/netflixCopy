<?php

require_once ("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AXeDocaioc03_VK_ggU6hMpHAC2ycHEQb3TdMIRK4wuwIER-gceB8PzCL4lPJk1EfAh0k2Q4-bNahZud',     // ClientID
        'ELjs-T4jfGK1rs2JlG3dXxxwnMkw71sWRxcrEoPojZiDi_jPBx2mf-RR_p64x5zLmq6_GaY9j6FhGE6_'      // ClientSecret
    )
);
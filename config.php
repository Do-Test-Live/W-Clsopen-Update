<?php

// Product Details
// Minimum amount is $0.50 US
$productName = "1小時30分鐘租場服務";
$productID = "DP12345";
$productPrice = 190;
$currency = "hkd";

/*
 * Stripe API configuration
 * Remember to switch to your live publishable and secret key in production!
 * See your keys here: https://dashboard.stripe.com/account/apikeys
 */
define('STRIPE_API_KEY', '');
define('STRIPE_PUBLISHABLE_KEY', '');
define('STRIPE_SUCCESS_URL', 'https://clsopen.ngt.hk/payment-success.php'); //Payment success URL
define('STRIPE_CANCEL_URL', 'https://clsopen.ngt.hk/payment-cancel.php'); //Payment cancel URL

// Database configuration
/*define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'clsopenbox');*/


define('DB_HOST', 'localhost');
define('DB_USERNAME', 'ucvdugdxvu2mk');
define('DB_PASSWORD', 's11j&4{1u#11');
define('DB_NAME', 'dboxsgvavgdgn2');


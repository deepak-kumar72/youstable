<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://youstable.com/manage/includes/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'action' => 'GetTLDPricing',
    // See https://developers.whmcs.com/api/authentication
    'username' => 'bjGBGd0q7iIBWO0I04U4Nxh77Wh2qLKE',
    'password' => '34rhAgTNBO6DOahi3DWVkTS3dyMUQDSV',
    'currencyid' => '1',
    'responsetype' => 'json',
)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the cURL request
$response = curl_exec($ch);
// var_dump($response);
// Check for errors
if (curl_errno($ch)) {
    // If there's an error, you can handle it here
    $error_message = curl_error($ch);
    // For example, you could log the error, display an error message, etc.
    echo "cURL Error: " . $error_message;
} else {
    // Decode the JSON response
    $decoded_response = json_decode($response, true); // Set true to get an associative array

    // Check if decoding was successful
    if ($decoded_response !== null && isset($decoded_response['result']) && $decoded_response['result'] === 'success') {
        // Access the currency information
        $currency = $decoded_response['currency'];
        
        // Output the currency details
        echo "Currency ID: " . $currency['id'] . "<br>";
        echo "Currency Code: " . $currency['code'] . "<br>";
        echo "Currency Prefix: " . $currency['prefix'] . "<br>";
        echo "Currency Suffix: " . $currency['suffix'] . "<br>";
        echo "Currency Format: " . $currency['format'] . "<br>";
        echo "Currency Rate: " . $currency['rate'] . "<br>";
    } else {
        echo "Error: Invalid or unsuccessful response.";
    }
}

// Close cURL resource
curl_close($ch);
?>

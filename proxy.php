
<?php
// Get the URL parameter from the request
$url = $_GET['url'];

if (!empty($url)) {
    // Initialize a cURL session
    $ch = curl_init();

    // Set the cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    
    // Execute the cURL request and fetch the response content
    $response = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Send appropriate headers to the client
    header('Content-Type: text/html');
    header('Content-Length: ' . strlen($response));

    // Output the proxied HTML content
    echo $response;
} else {
    echo "No URL specified.";
}
?>


<?php
// Define the ResponseHandler class with a method to handle the response
class ResponseHandler {
    public function getResponse($input) {
        return htmlspecialchars($input); // Sanitize input
    }
}

// Use the ResponseHandler class to process the input and return a response
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $handler = new ResponseHandler();
    $response = $handler->getResponse($_POST['name']);
    header('Content-Type: application/json'); // Set response type to JSON
    echo json_encode(['response' => $response]); // Return the response as JSON
}
?>
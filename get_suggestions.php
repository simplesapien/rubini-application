<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['keyword'])) {

    require 'PerplexitySuggester.php';

    // Sanitize and validate the 'keyword' input
    $keyword = $_POST['keyword'];

    // Step 1: Trim whitespace
    $keyword = trim($keyword);

    // Step 2: Strip HTML and PHP tags
    $keyword = strip_tags($keyword);

    // Step 3: Limit input length (e.g., max 100 characters)
    $maxLength = 100;
    if (mb_strlen($keyword, 'UTF-8') > $maxLength) {
        $keyword = mb_substr($keyword, 0, $maxLength, 'UTF-8');
    }

    // Step 4: Validate content (e.g., allow only letters, numbers, and basic punctuation)
    if (!preg_match('/^[\p{L}\p{N}\s.,!?\'"-]+$/u', $keyword)) {
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'Invalid keyword provided.']);
        exit();
    }

    $suggester = new PerplexitySuggester();

    $suggestions = $suggester->getSuggestions($keyword);

    // Check if the response is an error message
    if (is_string($suggestions)) {
        header('HTTP/1.1 500 Internal Server Error');
        echo json_encode(['error' => $suggestions]);
        exit();
    }

    header('Content-Type: application/json');
    echo json_encode($suggestions);
} else {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'Keyword not provided.']);
}

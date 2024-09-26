<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['keyword'])) {

    require 'PerplexitySuggester.php';

    // No need to pass $perp_api_key since it's loaded from the environment
    $suggester = new PerplexitySuggester();

    $keyword = $_POST['keyword'];

    $suggestions = $suggester->getSuggestions($keyword);

    header('Content-Type: application/json');

    echo json_encode($suggestions);
} else {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'Keyword not provided']);
}

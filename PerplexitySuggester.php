<?php
class PerplexitySuggester
{
    private $api_key;

    public function __construct()
    {
        require_once '../config/config.php';
        $this->api_key = PERPLEXITY_API_KEY;

        // When testing locally
        // $api = getenv('PERPLEXITY_API_KEY');
        // $this->api_key = $api;
    }

    public function getSuggestions($keyword)
    {

        $data = [
            'model' => 'llama-3.1-sonar-small-128k-online',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Create an array of 5 social media comments about the user-provided keyword, focusing exclusively on comments from real people on social media platforms. These comments should reflect the users feelings or emotions towards the trend keyword.

Each comment should be in the following JSON format:
json
{
    "username": "username_here",
    "comment": "comment_here",
    "url": "link_to_original_post"
}

Output only the suggestions in valid JSON format without any additional text or explanations.
The JSON should strictly follow this structure:
json
{
    "suggestions": [
        {
            "username": "username_here",
            "comment": "comment_here",
            "url": "link_to_original_post"
        },
        // 4 more comments
    ]
}

Ensure the JSON is properly formatted and does not include any comments or additional text.'

                ],
                [
                    'role' => 'user',
                    'content' => 'Your trend keyword is: ' . $keyword
                ]
            ],
            'temperature' => 0.2,
            'top_p' => 0.9,
            'return_citations' => false,
            'search_domain_filter' => [],
            'return_images' => false,
            'return_related_questions' => false,
            'search_recency_filter' => 'month',
            'top_k' => 0,
            'stream' => false,
            'presence_penalty' => 0,
            'frequency_penalty' => 1
        ];

        $ch = curl_init('https://api.perplexity.ai/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->api_key,
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            return 'Request Error: ' . $error;
        }

        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $result = json_decode($response, true);

        if ($http_status !== 200) {
            return "API Error: HTTP Status $http_status - " . json_encode($result);
        }
        if (isset($result['choices'][0]['message']['content'])) {

            $content = $result['choices'][0]['message']['content'];

            $suggestions = json_decode($content, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                return $suggestions;
            } else {
                // Handle cases where the AI did not return valid JSON
                return "Error parsing JSON: " . json_last_error_msg();
            }
        } else {
            return "Error: " . json_encode($result);
        }
    }
}

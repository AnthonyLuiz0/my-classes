<?php
namespace API;

class Gemini{

public $apiKey;
public $url;

public function __construct($apiKey){
    $this->apiKey = $apiKey;
    $this->url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey";
}

public function generatePrompt($prompt){
    $dados = ["contents" => [["parts" => [[ "text" => $prompt ]]]]];
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/json\r\n",
            'content' => json_encode($dados),
            'ignore_errors' => true,
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ]
    ];
    $context  = stream_context_create($options);
    
    $result = file_get_contents($this->url, false, $context);

    if ($result === FALSE) {
        die("Erro na requisição.");
    }

    $response = json_decode($result, true);
    return $response['candidates'][0]['content']['parts'][0]['text'];
}

}
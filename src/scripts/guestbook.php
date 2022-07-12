<?php

ini_set('display_errors', '0');
ini_set('log_errors', '0');

header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);

    exit('405 Method Not Allowed.');
}

$filters = [
    'name' => FILTER_SANITIZE_SPECIAL_CHARS,
    'website' => FILTER_SANITIZE_URL | FILTER_VALIDATE_DOMAIN,
    'message' => FILTER_SANITIZE_SPECIAL_CHARS,
    'captcha' => [
        'filter' => FILTER_CALLBACK,
        'options' => fn($value) => strtolower($value) === 'abracadabra',
    ],
];

$form = filter_input_array(INPUT_POST, $filters) ?? [];
$form = array_map(
    fn($value) => is_string($value) ? trim($value) : $value,
    $form,
);

if (!$form['captcha']) {
    http_response_code(400);

    exit('400 Bad Request. Captcha is wrong. Seems like you\'re a robot -_-');
}

if (!$form['name'] || !$form['message']) {
    http_response_code(400);

    exit('400 Bad Request. Please fill in all required fields');
}

$now = gmdate('Y-m-d H:i:s e', time());
$website = $form['website'] ?: '-';

$message_info = <<<INFO
Time: {$now}
Name: {$form['name']}
Website: {$website}
Message:
{$form['message']}

INFO;

$file = fopen('pending_guestbook_messages.txt', 'a+');
fwrite($file, $message_info . PHP_EOL);
fclose($file);

mail(
    'sergei+guestbook@kolesnikov.se',
    'New Message in Your Guestbook',
    $message_info,
    "MIME-Version: 1.0\r\nContent-type: text/plain;charset=UTF-8\r\n",
);

http_response_code(201);
echo 'Thank you! Your message is pending approval. You may close this window and return back exploring my webpage :-)';

<?php

ini_set('display_errors', '0');
ini_set('log_errors', '0');

header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(405);

	exit('405 Method Not Allowed.');
}

$filters = [
	'article' => FILTER_DEFAULT,
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

$time = time();
$now = gmdate('Y-m-d H:i:s e', $time);
$time_rfc3339 = gmdate('c', $time);
$time_formatted = gmdate('j F Y, H:i', $time);

$website = $form['website'] ?: '-';

$nickname = $form['website']
	? "<a href=\"{$website}\" target=\"_blank\" rel=\"noindex nofollow ugc\">{$form['name']}</a>"
	: $form['name'];

$message_html = str_replace(
	['&#13;&#10;&#13;&#10;', '&#13;&#10;'],
	['</p><p>', '<br />'],
	$form['message']
);

$message_info = <<<INFO
Article: {$form['article']}
Time: {$now}
Name: {$form['name']}
Website: {$website}
Message:
{$form['message']}

HTML Snippet:
<li>
	<div>
		<strong>{$nickname}</strong>
		wrote on <small><time datetime="{$time_rfc3339}">{$time_formatted}</time></small>
	</div>
	<div>
		<!-- Don't forget to format code below -->
		<p>{$message_html}</p>
	</div>
</li>
INFO;

$file = fopen('pending_comments.txt', 'a+');
fwrite($file, $message_info . "\n\n---\n\n");
fclose($file);

mail(
	'sergei+comments@kolesnikov.se',
	'Re: ' . $form['article'],
	$message_info,
	"MIME-Version: 1.0\r\nContent-type: text/plain;charset=UTF-8\r\n",
);

http_response_code(201);
echo "Thank you! Your message is pending approval.\nYou may close this window and return back exploring my website :-)";

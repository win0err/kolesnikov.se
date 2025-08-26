<?php

ini_set('display_errors', '0');
ini_set('log_errors', '0');

header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(405);

	exit('405 Method Not Allowed.');
}

if (!function_exists('array_any')) {
	function array_any(array $arr, callable $predicate): bool {
		foreach ($arr as $k => $v) {
			if ($predicate($v, $k)) return true;
		}
		return false;
	}
}

$filters = [
	'name' => FILTER_SANITIZE_SPECIAL_CHARS,
	'website' => FILTER_VALIDATE_DOMAIN | FILTER_SANITIZE_URL,
	'email' => [
		'filter' => FILTER_VALIDATE_EMAIL | FILTER_SANITIZE_EMAIL,
		'options' => FILTER_FLAG_EMAIL_UNICODE,
	],
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

$website = $form['website'] ?: '-';
$email = $form['email'] ?: '-';

$content_to_check = implode(' ', [$form['name'], $website, $form['message']]);
$blocked_words = file('blocked_words.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (array_any($blocked_words, fn($word) => str_contains($content_to_check, $word))) {
	http_response_code(400);

	exit('400 Bad Request. Seems like you\'re a spammer (⩺_⩹)');
}

$nickname = $form['website']
	? "<a href=\"{$website}\" target=\"_blank\" rel=\"noindex nofollow ugc\">{$form['name']}</a>"
	: $form['name'];

$message_html = str_replace(
	['&#13;&#10;&#13;&#10;', '&#13;&#10;'],
	['</p><p>', '<br />'],
	$form['message']
);

$message_info = <<<INFO
Time: {$now}
Name: {$form['name']}
Website: {$website}
Email: {$email}
Message:
{$form['message']}

HTML Snippet:
<li>
	<div>
		<strong>{$nickname}</strong>
		wrote on <small><?php echo get_time_tag("{$time_rfc3339}"); ?></small>
	</div>
	<div>
		<!-- Don't forget to format the code below -->
		<p>{$message_html}</p>
	</div>
</li>
INFO;

$file = fopen('pending_guestbook_messages.txt', 'a+');
fwrite($file, $message_info . "\n\n---\n\n");
fclose($file);

mail(
	'sergei+guestbook@kolesnikov.se',
	'New Message in Your Guestbook',
	$message_info,
	[
		'MIME-Version' => '1.0',
		'Content-Type' => 'text/plain;charset=UTF-8',
		'X-Mailer' => 'PHP/' . phpversion(),
	],
);

http_response_code(201);
echo "Thank you! Your message is pending approval.\nYou may close this window and return back exploring my website :-)";

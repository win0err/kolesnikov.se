<?php

const SRI_ALGO = 'sha512';

function generate_sri(string $path) {
	$contents = file_get_contents($path);

	$hash = hash(SRI_ALGO, $contents, true);
	$base64Hash = base64_encode($hash);

	return SRI_ALGO . '-' . $base64Hash;
}

// Generate subresource integrity for styles
$stylesCssSri = generate_sri(__DIR__ . '/../../../dist/styles.css');

echo <<<HEAD
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, viewport-fit=cover" />
	<link crossorigin="anonymous" media="all" integrity="{$stylesCssSri}" rel="stylesheet" href="/styles.css?{$stylesCssSri}" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="author" type="text/plain" href="/humans.txt" />
	<link rel="pgpkey" href="/win0err.asc" />

HEAD;

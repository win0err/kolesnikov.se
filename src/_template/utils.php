<?php

function get_image_html(string $orig_src_path, string $alt_text = ''): string {
	$retina_path = str_replace('.jpg', '@2x.jpg', $orig_src_path);

	return <<<IMG
	<a href="/images/full/${orig_src_path}">
		<img src="/images/thumbs/${orig_src_path}"
			srcset="/images/thumbs/${retina_path} 2x"
			alt="${alt_text}" />
	</a>

	IMG;
}

function get_time_tag($datetime, $format = 'j F Y, H:i') {
	$time = strtotime($datetime);

	return '<time datetime="' . date('c', $time) . '">' . date($format, $time) . '</time>';
}
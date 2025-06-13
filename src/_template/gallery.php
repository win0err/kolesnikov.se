<?php

function render_gallery(object $gallery): string {
	$count = count($gallery->images);

	if ($count > 10 || $count < 1) {
		throw new \RangeException('Gallery must contain from 1 to 10 images');
	}

	$rendered_images = array_reduce(
		$gallery->images,
		fn ($html, $image) => $html . get_image_html('photography/' . $image->path, $image->alt ?? ''),
		'',
	);

	$gridModifier = $gallery->{'grid-modifier'} ?? '';

	return <<< GALLERY
	<section>
		<div class="gallery gallery--{$count}{$gridModifier}">
			{$rendered_images}
		</div>
	</section>

	GALLERY;
}

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'template/blocks/meta.php'; ?>
		<title>Photos by Sergei Kolesnikov</title>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php include 'template/blocks/header.php'; ?>

			<main class="photography">
				<h1>Photography</h1>

				<?php

				function render_gallery(object $gallery): string {
					$count = count($gallery->images);

					if ($count > 10 || $count < 1) {
						throw new \RangeException('Gallery must contain from 1 to 10 images');
					}

					$rendered_images = array_reduce(
						$gallery->images,
						fn ($html, $image) => $html . '
							<a href="/photography/full/' . $image->path . '">
								<img src="/photography/thumbs/' . $image->path . '"
									srcset="/photography/thumbs/' . str_replace('.jpg', '@2x.jpg', $image->path) . ' 2x"
									alt="' . $image->alt . '" />
							</a>',
						'',
					);

					return <<< GALLERY
					<article>
						<div class="gallery gallery--{$count}">
							{$rendered_images}
						</div>
					</article>

					GALLERY;
				}

				$photos = json_decode(
					file_get_contents(__DIR__ . '/photos.json'),
					flags: \JSON_THROW_ON_ERROR,
				);
				$galleries = array_map('render_gallery', $photos);

				echo implode('<hr />' . PHP_EOL, $galleries);

				?>
			</main>

			<hr class="styled styled--forest" />

			<?php include 'template/blocks/footer.php'; ?>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>Photos by Sergei Kolesnikov</title>
	</head>

	<body id="top">
		<div class="container">
			<?php require '_template/header.php'; ?>
			<?php require '_template/utils.php'; ?>
			<?php require '_template/gallery.php'; ?>

			<main class="photography">
				<h1>Photography</h1>

				<?php

				$photos = json_decode(
					file_get_contents(__DIR__ . '/photography/meta.json'),
					flags: \JSON_THROW_ON_ERROR,
				);
				$galleries = array_map('render_gallery', $photos);

				echo implode('<hr />' . PHP_EOL, $galleries);

				?>
			</main>

			<hr class="styled styled--forest" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

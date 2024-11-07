<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require __DIR__ . '/../_template/meta.php'; ?>
		<title>Summer and Autumn 2023 — Sergei Kolesnikov's Blog</title>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php require __DIR__ . '/../_template/header.php'; ?>
			<?php require __DIR__ . '/../_template/utils.php'; ?>

			<main>
				<article class="blog-article">
					<h1 class="blog-article__title">Summer and Autumn 2023</h1>

					<time class="blog-article__time" datetime="2024-01-04T04:00:00+03:00">Thu, 4 January 2024</time>

					<p>
						Hello Internet!<br />
						Today, I will show you photos taken in Moscow and Saint Petersburg during the summer and fall of 2023.
					</p>

					<h2>Kodak Gold 200</h2>
					<p>Shot on Nikon L35AF and Kodak Gold 200 film.</p>

					<p><?php echo get_image_html('blog/summer-and-autumn-2023/01-izmaylovsky-park.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/02-cat.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/03-lipki-alekseevskoye.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/04-geometry.jpg'); ?></p>

					<h2>Fujifilm Eterna 250D</h2>
					<p>Shot on Nikon L35AF and Fujifilm Eterna 250D film.</p>

					<p><?php echo get_image_html('blog/summer-and-autumn-2023/05-bicycle.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/06-lindulovskaya-roshcha.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/07-lindulovskaya-roshcha.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/08-vw-kafer.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/09-birds.jpg'); ?></p>

					<h2>Agfa Vista 400</h2>
					<p>Shot on Nikon F6 camera, Nikon 35/1.4G + Nikon 14-24/2.8G lenses, and Agfa Vista 400 (expired, shot as ISO 100) film.</p>

					<p><?php echo get_image_html('blog/summer-and-autumn-2023/10-police-cars.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/11-tree.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/12-krymsky-bridge.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/13-fishers.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/14-flags.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/15-sunset.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/16-geometry.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/17-ficus-binnendijkii.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/18-overpass.jpg'); ?></p>
					<p><?php echo get_image_html('blog/summer-and-autumn-2023/19-moscow-city.jpg'); ?></p>
				</article>

				<hr />

				<?php
					require_once __DIR__ . '/../_template/tz.php';
					require_once __DIR__ . '/../_template/utils.php';
				?>


				<div class="comment-section">
					<h2>Comments <small>(2)</small></h2>

					<ol>
						<li>
							<div>
								<strong>Jaja</strong>
								wrote on <small><?php echo get_time_tag("2024-11-07T17:35:02+00:00"); ?></small>
							</div>
							<div>
								<p>Very nice pictures</p>
							</div>
						</li>

						<li>
							<div>
								<strong>ivan</strong>
								wrote on <small><?php echo get_time_tag("2024-10-22T22:05:06+00:00"); ?></small>
							</div>
							<div>
								<p>beautiful pictures</p>
							</div>
						</li>
					</ol>

					<hr class="dashed" />

					<?php require __DIR__ . '/../_template/comment-form.php'; ?>
				</div>

				<div class="back-button-holder">
					<a href="/blog.html"><img src="/assets/backanim.gif" alt="Go back" width="50" /></a>
				</div>
			</main>

			<hr />

			<?php require __DIR__ . '/../_template/footer.php'; ?>
		</div>
	</body>
</html>

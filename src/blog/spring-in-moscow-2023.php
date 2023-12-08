<!DOCTYPE html>
<html lang="en">

<head>
	<?php require __DIR__ . '/../_template/meta.php'; ?>
	<title>Spring in Moscow — Sergei Kolesnikov's Blog</title>
</head>

<body id="top" class="_theme--black">
	<div class="container">
		<?php require __DIR__ . '/../_template/header.php'; ?>
		<?php require __DIR__ . '/../_template/utils.php'; ?>

		<main>
			<article class="blog-article">
				<h1 class="blog-article__title">Spring in Moscow</h1>

				<time class="blog-article__time" datetime="2023-12-08T03:15:00+03:00">Fri, 9 December 2023</time>

				<h2>March</h2>

				<p>On March 2, 2023, I bought a delightful camera, Nikon L35AF, loaded it with Kodak Vision 3 250D film, and went for a&nbsp;walk in spring Moscow.</p>

				<p><?php echo get_image_html('blog/spring-in-moscow-2023/01-mirror-and-workers.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/02-shade-from-indoor-plants.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/03-dmitrovsky-park.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/04-ducks-on-angara-ponds.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/05-long-shadow.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/06-street-sweepers.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/08-a-tree.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/09-сoncert-stage-at-bauman-garden.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/10-selfie.jpg'); ?></p>

				<h2>April</h2>

				<p>In April, I bought a roll of LomoChrome Purple XR 100–400 film and shot it on a Nikon L35AF at ISO 200. </p>

				<p><?php echo get_image_html('blog/spring-in-moscow-2023/11-goose.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/12-selfie.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/13-vvedenskaya-church.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/14-buldings-at-dmitrovskaya.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/15-birds-on-a-tree.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/16-vorontsovo-pole-street.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/17-pigeon.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/18-street-signs.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/19-tree-shadow.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/20-painters.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/21-anton-and-sasha-dancing.jpg'); ?></p>
				<p><?php echo get_image_html('blog/spring-in-moscow-2023/22-cat.jpg'); ?></p>

				<h2>May</h2>
				<p>
					If April in Moscow can be described by the Japanese word hashiri, which means the beginning of the season, then May is sakari, the season peak.
					This is the month when cherry trees and lilac bushes bloom, and yellow dandelions cover the ground.
				</p>

				<figure>
					<?php echo get_image_html('blog/spring-in-moscow-2023/23-the-spring-has-come.jpg'); ?>
					<figcaption>Mamiya RZ67 + Mamiya 65/4 + Kodak Gold 200 (120)</figcaption>
				</figure>
			</article>

			<hr />

			<div class="comment-section">
				<h2>Comments</h2>

				<p>No comments yet. Be the first!</p>

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

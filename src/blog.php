<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>Sergei Kolesnikov's Blog</title>
		<link rel="alternate" title="Blog Posts Atom Feed" type="application/atom+xml" href="/feed.atom" />
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php require '_template/header.php'; ?>

			<main>
				<h1>Blog</h1>

				<p>
					I like blogs. It's about sharing thoughts, opinions, and feelings on the web about anything.<br />
					If I could bring one thing back to the internet, it would be blogs. Let's start from this one.
				</p>

				<p class="va-middle">
					<span>I blog here on topics like engineering, photography, and travel.</span>
					<a href="/blog.atom"><img src="/assets/rss.gif" alt="RSS (Atom Feed)" style="vertical-align: middle;" /></a>
				</p>

				<hr />

				<section class="blog-posts-by-year">
					<h2>2022</h2>

					<ul class="blog-posts-by-year__list">
						<li>
							<time datetime="2022-09-23">23/09</time>
							<a href="/blog/there-is-life-here.html">There Is Life Here!</a>
							<img height=14 src="/assets/attention/star-small.gif" alt="Hot!">
						</li>
						<li><time datetime="2022-07-12">12/07</time> <a href="/blog/hello-world.html">Hello World!</a></li>
					</ul>
				</section>
			</main>

			<hr class="styled styled--island" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

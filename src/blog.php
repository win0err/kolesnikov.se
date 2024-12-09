<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>Sergei Kolesnikov's Blog</title>
		<link rel="alternate" title="RSS (Atom Feed) — Blog posts" type="application/atom+xml" href="/blog.atom" />

		<link rel="preload" as="image" href="/assets/camera-flash-static.gif" />
		<link rel="preload" as="image" href="/assets/camera-flash-animated.gif" />

		<style type="text/css">
			.blog-posts-by-year__list img {
				max-height: 16px;
				vertical-align: middle;
				padding-bottom: 3px;
			}

			.blog-posts-by-year__list li:hover .photography-post-icon {
				content: url("/assets/camera-flash-animated.gif");
			}
		</style>
	</head>

	<body id="top">
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
					<a href="/blog.atom"><img src="/assets/rss.gif" alt="RSS (Atom Feed)" title="RSS (Atom Feed) — Blog posts" style="vertical-align: middle;" /></a>
				</p>

				<hr />

				<section class="blog-posts-by-year">
					<h2>2024</h2>

					<ul class="blog-posts-by-year__list">
						<li>
							<time datetime="2024-01-04">04/01</time>
							<a href="/blog/summer-and-autumn-2023.html">Summer and Autumn 2023</a>
							<img src="/assets/camera-flash-static.gif" class="photography-post-icon image-smooth"
								 alt="Camera icon" title="Photography" />
						</li>
					</ul>

					<h2>2023</h2>

					<ul class="blog-posts-by-year__list">
						<li>
							<time datetime="2023-12-09">09/12</time>
							<a href="/blog/spring-in-moscow-2023.html">Spring in Moscow</a>
							<img src="/assets/camera-flash-static.gif" class="photography-post-icon image-smooth"
								 alt="Camera icon" title="Photography" />
						</li>
						<li>
							<time datetime="2023-10-16">16/10</time>
							<a href="/blog/moscow-jan-feb-2023.html">Moscow in January and February</a>
							<img src="/assets/camera-flash-static.gif" class="photography-post-icon image-smooth"
								 alt="Camera icon" title="Photography" />
						</li>
					</ul>

					<h2>2022</h2>

					<ul class="blog-posts-by-year__list">
						<li>
							<time datetime="2022-09-23">23/09</time>
							<a href="/blog/there-is-life-here.html">There Is Life Here!</a>
							<img src="/assets/attention/star-small.gif" alt="Hot!" />
						</li>

						<li>
							<time datetime="2022-07-12">12/07</time>
							<a href="/blog/hello-world.html">Hello World!</a>
						</li>
					</ul>
				</section>
			</main>

			<hr class="styled styled--island" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

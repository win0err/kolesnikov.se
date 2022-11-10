<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include __DIR__ . '/../template/blocks/meta.php'; ?>
		<title>Hello World! — Sergei Kolesnikov's Blog</title>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php include __DIR__ . '/../template/blocks/header.php'; ?>

			<main>
				<article class="blog-article">
					<h1 class="blog-article__title">Hello World!</h1>

					<time class="blog-article__time" datetime="2022-07-12T03:09:00+03:00">Tue, 12 July 2022</time>

					<p>
						Let's be honest: this is not my first attempt at writing a blog.
						I like <a href="https://justinjackson.ca/words.html">words</a>.
					</p>

					<p>
						I like to spend time reading blogs and exploring <i>personal</i> home pages.
						Of course, I'm talking about sites with stories, helpful articles, or just interesting stuff.
						Typical websites that promote a "personal brand"; sites full of trackers or ads; sites that don't
						work without javascript for no reason – they all suck.
					</p>

					<p>
						A site with homemade recipes? Interesting! A blog of a developer who creates compilers? Definitely interesting!
						A site about bears? A website with a digitized collection of film photos from the 20th century that were found on eBay?
						The blog of a man who decided to visit every country in the world? A collection of gifs that were popular in 2003?
						Reviews of old hardware from the early 2000s, written by a guy from Sweden? I'd love to read it!
						That's what the internet was created for.
					</p>

					<p>
						I wish there were more websites on the Internet like above. I hope this will be one of them.
						Wish me luck with this.
					</p>
				</article>

				<hr />

				<div class="comment-section">
					<h2>Comments</h2>

					<p>No comments yet. Be the first!</p>

					<hr class="dashed" />

					<?php include __DIR__ . '/../template/blocks/comment-leave.php'; ?>
				</div>

				<div class="back-button-holder">
					<a href="/blog.html"><img src="/assets/backanim.gif" alt="Go back" width="50" /></a>
				</div>
			</main>

			<hr />

			<?php include __DIR__ . '/../template/blocks/footer.php'; ?>
		</div>
	</body>
</html>

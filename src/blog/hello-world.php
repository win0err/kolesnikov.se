<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require __DIR__ . '/../_template/meta.php'; ?>
		<title>Hello World! — Sergei Kolesnikov's Blog</title>
	</head>

	<body id="top">
		<div class="container">
			<?php require __DIR__ . '/../_template/header.php'; ?>

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

				<?php
					require_once __DIR__ . '/../_template/tz.php';
					require_once __DIR__ . '/../_template/utils.php';
				?>

				<div class="comment-section">
					<h2>Comments <small>(1)</small></h2>

					<!--p>No comments yet. Be the first!</p-->

					<ol>
						<li>
							<div>
								<strong>Some Guy</strong>
								wrote on <small><?php echo get_time_tag("2023-08-29T14:39:55+00:00"); ?></small>
							</div>
							<div>
								<p>Wow, that&#39;s very cool.</p>
							</div>
						</li>

						<li>
							<div>
								<strong><a href="https://ari.lt/" target="_blank" rel="noindex nofollow ugc">ari</a></strong>
								wrote on <small><?php echo get_time_tag("2024-11-13T20:02:32+00:00"); ?></small>
							</div>
							<div>
								<p>hi ! glad to hear your nice perspective on blogs, glad to see the blog culture still alive somewhat</p>
							</div>
						</li>

						<li>
							<div>
								<strong>DONOFOX!</strong>
								wrote on <small><?php echo get_time_tag("2025-04-21T16:03:05+00:00"); ?></small>
							</div>
							<div>
								<p>The old internet, its comming back, while listening to virtual insanity, frizk and snuffles. si, un furro español estuvo aqui. (lmao) typing this on a Nokia 7230 with OperaMini lol</p>
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

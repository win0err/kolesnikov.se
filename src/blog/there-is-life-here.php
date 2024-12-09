<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require __DIR__ . '/../_template/meta.php'; ?>
		<title>There Is Life Here! — Sergei Kolesnikov's Blog</title>
		<style type="text/css">
			#game_of_life {
				user-select: none;
				-webkit-user-select: none;

				width: 800px;
				image-rendering: pixelated;

				cursor: pointer;
			}
		</style>
	</head>

	<body id="top">
		<div class="container">
			<?php require __DIR__ . '/../_template/header.php'; ?>

			<main>
				<article class="blog-article">
					<h1 class="blog-article__title">There Is Life Here!</h1>

					<time class="blog-article__time" datetime="2022-09-23T17:42:00+03:00">Fri, 23 September 2022</time>

					<p>
						I've created my implementation of Conway's Game of Life. Well, there's life on my blog now :-) <br />
						Click on the image or refresh the page to see the next generation.
					</p>

					<p>
						<img id="game_of_life" src="/scripts/game_of_life.php"
							alt="Conway's game of life"
							title="Click on the image or refresh the page to see the next generation" />
					</p>

					<script defer>
						const img = document.getElementById('game_of_life')
						const imgSrc = img.src

						img.onclick = (e) => {
							const urlParams = new URLSearchParams({
								t: new Date().getTime(),
								// to make a cell alive, you need to send the coordinates:
								// x: Math.floor(event.offsetX / 2),
								// y: Math.floor(event.offsetY / 2),
							})

							e.target.src = `${imgSrc}?${urlParams}`
						}
					</script>
				</article>

				<hr />

				<?php
					require_once __DIR__ . '/../_template/tz.php';
					require_once __DIR__ . '/../_template/utils.php';
				?>

				<div class="comment-section">
					<h2>Comments <small>(3)</small></h2>

					<ol>
						<li>
							<div>
								<strong>Shinyanskiy, Roman</strong>
								wrote on <small><?php echo get_time_tag("2022-09-23T15:10:37+00:00"); ?></small>
							</div>
							<div>
								<p>Great work!</p>
							</div>
						</li>

						<li>
							<div>
								<strong><a href="https://maxl.neocities.org" target="_blank" rel="noindex nofollow ugc">KOCATKA</a></strong>
								wrote on <small><?php echo get_time_tag("2023-01-03T09:15:15+00:00"); ?></small>
							</div>
							<div>
								<p>Very cool!</p>
							</div>
						</li>

						<li>
							<div>
								<strong>Parallax</strong>
								wrote on <small><?php echo get_time_tag("2023-11-14T22:50:05+00:00"); ?></small>
							</div>
							<div>
								<p>I like it!</p>
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

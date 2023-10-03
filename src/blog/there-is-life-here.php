<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include __DIR__ . '/../template/blocks/meta.php'; ?>
		<title>There Is Life Here! — Sergei Kolesnikov's Blog</title>
		<style type="text/css">
			#game_of_life {
				user-select: none;
				-webkit-user-select: none;

				image-rendering: pixelated;

				cursor: pointer;

				width: 800px;
				height: 620px;
			}
		</style>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php include __DIR__ . '/../template/blocks/header.php'; ?>

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

				<div class="comment-section">
					<h2>Comments <small>(2)</small></h2>

					<ol>
						<li>
							<div>
								<strong>Shinyanskiy, Roman</strong>
								wrote on <small><time datetime="2022-09-23T15:10:37+00:00">23 September 2022, 15:10</time></small>
							</div>
							<div>
								<p>Great work!</p>
							</div>
						</li>

						<li>
							<div>
								<strong><a href="https://maxl.neocities.org" target="_blank" rel="noindex nofollow ugc">KOCATKA</a></strong>
								wrote on <small><time datetime="2023-01-03T09:15:15+00:00">3 January 2023, 09:15</time></small>
							</div>
							<div>
								<p>Very cool!</p>
							</div>
						</li>
					</ol>

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

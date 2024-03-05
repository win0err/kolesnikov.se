<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>What I’m doing now</title>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php require '_template/header.php'; ?>
			<?php require_once '_template/tz.php'; ?>

			<main class="now-page">
				<h1>What I’m doing now</h1>

				<div class="now-page__disclaimer">
					This is a “<a href="https://nownownow.com/about" target="_blank" rel="noopener noreferrer nofollow">now</a>” page.
					Last update: <time datetime="<?php echo date(DATE_RFC3339, filemtime(__FILE__)); ?>">
					<?php echo date("j F Y", filemtime(__FILE__)); ?></time>.
				</div>

				<ul>
					<li>
						Since the end of January, I was looking for a new job.
						Starting in March, I’ll be working at VK.com. Wish me luck!
					</li>

					<li>
						I finally got the motivation to finish and defend my PhD dissertation. <br />
						I plan to start by publishing several scientific articles.
					</li>

					<li>I’m pleased with myself because I’ve started shooting more portraits.</li>

					<li>
						I am reading too many books in parallel:
						<ul>
							<li>
								<details>
									<summary>
										A collection of short stories by Ryūnosuke Akutagawa — finished.
									</summary>

									<p>My recommendations are:</p>

									<ol>
										<li>Hell Screen</li>
										<li>The Story of a Head That Fell Off</li>
										<li>Mori Sensei</li>
										<li>In a Grove</li>
										<li>Otomi’s Virginity</li>
										<li>A Clod of Earth</li>
										<li>Spinning Gears</li>
									</ol>
								</details>
							</li>
							<li>“Theater of the World: The Maps that Made History” by Thomas Reinertsen Berg</li>
							<li>“Bullshit Jobs. A Theory” by David Graeber</li>
							<li>“For Whom the Bell Tolls” by Ernest Hemingway</li>
							<li>Re-reading <abbr title="Introduction to Algorithms by Cormen, Leiserson, Rivest, Stein">CLRS</abbr></li>
						</ul>
					</li>

					<li>I’ve learned how to play <i>Cage The Elephant — Trouble</i> on guitar.</li>


					<li>I (still) play Skyrim on my PlayStation 5 and Xonotic on my laptop (you can find me on Jeff’s Deadmatch server). I recently bought a 19-inch Lacie Electron Blue IV CRT monitor to play classic games. I really enjoyed playing Fahrenheit: Indigo Prophecy Remastered on this monitor. Started playing Heavy Rain.</li>

					<li>I just finished watching the fourth season of True Detective, and I think the final episodes are just terrible. I’m currently watching season four of The Sopranos, season three of We Bare Bears, and occasionally the third season of Sex and the City. I’m going to continue watching the second season of Twin Peaks and the third season of The Wire later on.</li>
				</ul>

			</main>

			<hr class="styled styled--dynamite" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

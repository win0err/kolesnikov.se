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
						I am reading too many books in parallel:
						<ul>
							<li>“Theater of the World: The Maps that Made History” by Thomas Reinertsen Berg</li>
							<li>“Bullshit Jobs. A Theory” by David Graeber</li>
							<li>“For Whom the Bell Tolls” by Ernest Hemingway — <img src="/assets/attention/finished.gif" alt="finished" />, it was incredible</li>
							<li>Re-reading <abbr title="Introduction to Algorithms by Cormen, Leiserson, Rivest, Stein">CLRS</abbr></li>
						</ul>
					</li>

					<li>I received a wonderful postcard and painting from Bodø, Norway. D.S., if you are reading this, thanks a lot!</li>

					<li>
						I just finished playing <i>GTA: San Andreas</i> and <i>GTA: Vice City</i> on my <a href="/about.html#uses" title="Uses">19-inch Lacie Electron Blue IV</a> CRT monitor.

						My next game will be <i>GTA III</i> as I want to complete the original trilogy.
						After that I'd like to play <i>GTA: Liberty City Stories</i> and <i>GTA: Vice City Stories</i>, but I'll have to get a PlayStation Portable for that.
					</li>

					<li>
						I’m finishing the fourth season of <i>The Wire</i> and occasionally the fourth season of <i>Sex and the City</i>.
						I’m planning to catch up on the second season of <i>Twin Peaks</i> and the fourth season of <i>The Sopranos</i> later on.
					</li>

					<li>
						I’ve bought an AE prism finder for my Mamiya RZ67, waiting for sunny days to test it out!
					</li>

					<li>
						This month I have plans for the release of a new version of <a href="https://github.com/win0err/gnome-runcat/" target="_blank" rel="noopener noreferrer nofollow">GNOME RunCat</a> with a number of new features.
					</li>

					<li>
						I’m still <del>procrastinating</del> writing a research paper on my PhD research.
					</li>

					<li>
						Finally, I’m currently working as a software engineer at VK.com.
					</li>
				</ul>

			</main>

			<hr class="styled styled--dynamite" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

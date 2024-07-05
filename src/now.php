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

				<h2>Reading Books</h2>

				<p>
					I am reading too many books in parallel:
					“Theater of the World: The Maps that Made History” by Thomas Reinertsen Berg,
					“Bullshit Jobs. A Theory” by David Graeber,
					and re-reading <abbr title="Introduction to Algorithms by Cormen, Leiserson, Rivest, Stein">CLRS</abbr>.
				</p>


				<h2>Playing Games</h2>

				<h3>PC</h3>

				<p>
					From time to time, I play <i>NFS: Most Wanted</i> on my <a href="/about.html#uses" title="Uses">19-inch Lacie Electron Blue IV</a> CRT monitor,
					but I still have plans to play <i>GTA III</i>, as I want to complete the original trilogy of the GTA series.
				</p>


				<h3>Consoles</h3>

				<p>
					I finished playing <i>Heavy Rain</i> on PlayStation 3. It’s okayish, but in my opinion, <i>Fahrenheit: Indigo Prophecy</i> is a lot better than the more famous <i>Heavy Rain</i>.
				</p>

				<p>
					My PlayStation collection has grown: I bought a <i>PlayStation Vita</i>. So now I have a PlayStation 3, 4, 5, and Vita.
					I must admit, I got hooked on <i>Persona 4 Golden</i> on Vita.
					I also started <i>Final Fantasy HD</i>, but decided not to play it for now because I don’t even have enough time for Persona 4.
					Since my Vita has a <i>PlayStation Portable</i> emulator, I would also like to play <i>GTA: Liberty City Stories</i> and <i>GTA: Vice City Stories</i>.
				</p>


				<h2>Watching Movies & TV Series</h2>

				<p>
					I was recommended to watch “Jojo Rabbit”, and I was expecting it to be an average movie, but it turned out to be surprisingly good.
					I’m finishing the fifth season of <i>The Wire</i> and also the fifth season of <i>Sex and the City</i>, but I’ve also started watching <i>Tokyo Vice</i>.
					I plan to catch up on the second season of <i>Twin Peaks</i> and the fourth season of <i>The Sopranos</i> later on.
				</p>


				<h2>Taking Photos</h2>

				<p>
					I had a great photoshoot in June, and the model turned out to be an incredibly interesting person. I’m eagerly waiting for the next photoshoot.
					I’m considering posting the photos from these photoshoots on the website.
					After a lot of searching, I finally found a great deal on a Nikon 24/1.4G lens and bought it.
				</p>


				<h2>Programming</h2>

				<p>This month I <del>still</del> have plans for the release of a new version of <a href="https://github.com/win0err/gnome-runcat/" target="_blank" rel="noopener noreferrer nofollow">GNOME RunCat</a> with a number of new features.</p>


				<h2>Doing Science</h2>

				<p>I’m still <del>writing a research paper on my PhD research</del> procrastinating.</p>


				<h2>Traveling</h2>

				<p>I’ve visited Saint Petersburg this month.</p>


				<h2>Working</h2>

				<p>Finally, I’m currently working as a software engineer at VK.com.</p>
			</main>

			<hr class="styled styled--dynamite" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

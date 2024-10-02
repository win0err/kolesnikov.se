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
				</p>

				<ul>
					<li>“One Hundred Years of Solitude” by Gabriel García Márquez,</li>
					<li>“Bullshit Jobs. A Theory” by David Graeber,</li>
					<li>“Discipline and Punish: The Birth of the Prison” by Michel Foucault.</li>
				</ul>

				<p>
					I’ve finally finished reading “Theater of the World: The Maps that Made History” by Thomas Reinertsen Berg.
					This book tells the history of mapmaking from ancient times to the present. It looks fantastic and is well written, but in my opinion, it lacks many of the maps referenced in the text. Whenever I read about a map, I had to go on the internet to see what it looks like.
				</p>

				<p>
					I’ve also finished “The Old Man and the Sea” by Ernest Hemingway. I admire the simplicity and style of Hemingway’s writing.
				</p>


				<h2>Playing Games</h2>

				<h3>PC</h3>

				<p>
					From time to time, I play <i>GTA III</i> and <i>NFS: Most Wanted</i> on my <a href="/about.html#uses" title="Uses">19-inch LaCie Electron Blue IV</a> CRT monitor.
				</p>


				<h3>Consoles</h3>

				<p>
					I’ve spent 74 hours playing <i>Persona 4 Golden</i> on my <i>PlayStation Vita</i>.
					Since my Vita has a <i>PlayStation Portable</i> emulator, I also play <i>GTA: Vice City Stories</i> from time to time.
				</p>


				<h2>Watching Movies & TV Series</h2>

				<ul>
					<li><i>The Wire</i> <img src="/assets/attention/finished.gif" alt="finished" /> — one of the best TV series I have ever seen;</li>
					<li><i>The Sopranos</i> — I’m currently in the middle of the sixth season;</li>
					<li><i>Tokyo Vice</i> — I started watching the second season; I really like the visuals of that series;</li>
					<li><i>Gravity Falls</i> — just started;</li>
					<li><i>Sex and the City</i> — the sixth season has finally become cringe comedy. Absolutely awful.</li>
				</ul>

				<p>
					I plan to catch up on the second season of <i>Twin Peaks</i> later on.
				</p>


				<h2>Taking Photos</h2>

				<p>
					I bought a Nikon 28Ti film camera!
				</p>


				<h2>Programming</h2>

				<p>This month I <del>still</del> have plans for the release of a new version of <a href="https://github.com/win0err/gnome-runcat/" target="_blank" rel="noopener noreferrer nofollow">GNOME RunCat</a> with a number of new features.</p>

				<p>I started developing Quite Simple Image Editor as a demonstration of how linear algebra can be used for image processing.</p>

				<p>
					There are some plans for this blog.
					First of all, I’m going to publish a photo post with summer photos.
					Secondly, I’m thinking about posting photos of the cool gadgets I use on the <a href="/about.html#uses">Uses</a> page.
				</p>


				<h2>Doing Science</h2>

				<p>I’m still <del>writing a research paper on my PhD research</del> procrastinating.</p>


				<h2>Working</h2>

				<p>Finally, I’m currently working as a software engineer at VK.com.</p>
			</main>

			<hr class="styled styled--dynamite" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

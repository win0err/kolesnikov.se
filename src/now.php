<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>What I’m doing now</title>
	</head>

	<body id="top">
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
					I am reading a bunch of books in parallel:
				</p>

				<ul>
					<li>“One Hundred Years of Solitude” by Gabriel García Márquez <img src="/assets/attention/finished.gif" alt="finished" />,</li>
					<li>“Points and Lines” by Seichō Matsumoto <img src="/assets/attention/finished.gif" alt="finished" /></li>
					<li>“The Sound of Waves” by Yukio Mishima.</li>
				</ul>

				<h2>Playing Games</h2>

				<h3>PC</h3>

				<p>I wanted to play my 20-year-old games smoothly (LOL), so I upgraded my gaming setup with an <i>NVIDIA GTX 1080 Ti</i> e-GPU.</p>

				<p>
					Since the last update of this page, I have finished  <i>GTA III</i>.
					From time to time, I play <i>Half-Life</i> and <i>Counter-Strike: Source</i>
					on my <a href="/about.html#uses" title="Uses">19-inch LaCie Electron Blue IV</a> CRT monitor.
				</p>


				<h3>Consoles</h3>

				<p>
					I’ve spent 74 hours playing <i>Persona 4 Golden</i> on my <i>PlayStation Vita</i>, but I haven’t played this game in 2025.<br />
					Sometimes in the evenings, I play <i>TES: Skyrim</i> on my <i>PlayStation 5</i>.
				</p>


				<h2>Watching Movies & TV Series</h2>

				<p>From time to time, I watch random movies and TV series in the evenings.</p>

				<h2>Taking Photos</h2>

				<p>
					I mainly shoot everyday life with my <i>Nikon 28Ti</i>.
					To snap some pics of the houseplants my girlfriend grows, I picked up a <i>Nikon 60mm f/2.8G</i> macro lens,
					along with a <i>Nikon 85mm f/1.8D</i> just to add to my collection of D-series lenses.
				</p>

				<p>
					I also had a cool nude photoshoot in February, and you can check out the results
					on my <a href="/photography.html">photography page</a>!
				</p>

				<h2>Playing Guitar</h2>

				<p>
					For my anniversary, I decided to update my guitar gear.
					I began by purchasing an <i>Epiphone Thunderbird 60s Bass</i> in Tobacco Sunburst, which I absolutely love.
					Three months later, I added a <i>Fender Player II Stratocaster</i> in 3-Color Sunburst to my collection,
					complementing my <i>Epiphone Les Paul Special II</i> in Heritage Cherry Sunburst.
				</p>

				<p>
					I replaced the strings on my bass with <i>Dunlop Stainless Steel Flatwound Bass Strings (50-110)</i>,
					which have given it a more vintage sound.
				</p>

				<p>
					To complete my setup, I also invested in an <i>Orange Crush Bass 25</i> combo amplifier for my bass guitar,
					a <i>VOX VT20X</i> for my electric guitars, and a super cute <i>Orange Crush Mini</i>.
				</p>

				<p>
					Additionally, I got my first pedals:
					a <i>VOX WAH V847-A</i>,
					a germanium <i>Dunlop JDF2 Fuzz Face Distortion</i> (which sounds great with my Strat!),
					and an <i>Electro-Harmonix Nano Looper 360</i>.
				</p>

				<p>	With these additions, my gear is now better than ever!</p>


				<h2>Programming</h2>

				<p>This month, I plan to release a new version of <a href="https://github.com/win0err/gnome-runcat/" target="_blank" rel="noopener noreferrer nofollow">GNOME RunCat</a> with several new features.</p>

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

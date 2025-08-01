<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require '_template/meta.php'; ?>
		<?php require '_template/is_winter.php'; ?>

		<?php
			$contacts = file_get_contents(__DIR__ . '/contacts.txt');
			$matches = [];

			preg_match_all('/\w+\:\/\/.+/m', $contacts, $matches, \PREG_SET_ORDER);

			foreach ($matches as $m) {
				echo '<link rel="me" href="' . $m[0] . '" />' . PHP_EOL;
			}
		?>

		<title>Sergei Kolesnikov's home page</title>

		<link rel="alternate" title="RSS (Atom Feed) — Website news and updates"
			type="application/atom+xml" href="/news.atom" />

		<link rel="alternate" title="RSS (Atom Feed) — Blog posts"
			type="application/atom+xml" href="/blog.atom" />
	</head>

	<body id="top">
		<div class="container">
			<?php require '_template/header.php'; ?>

			<main>
				<p>
					I'm Sergei Kolesnikov (a.k.a. win0err): software engineer, photographer, and professional procrastinator. <br />
					I write computer programs and create websites.
				</p>

				<p>
					This is my personal corner of the web. I blog here on topics like engineering, photography, and travel.
				</p>

				<h2>What's new
					<a href="/news.atom"><img alt="RSS (Atom Feed)"
											  title="RSS (Atom Feed) — Website news and updates"
											  style="vertical-align: middle;margin-bottom: 1px;"
											  src="/assets/rss_mini.gif"></a>
				</h2>

				<ul>
					<li>
						I've just updated my “<a href="/photography.html">Photography</a>” page
						with a fresh collection of photos, including stunning portraits!
					</li>

					<li>
						The website is covered in snow because the winter update is here!
						Enjoy the “<a href="/?_theme=winter-2025">Winter 2025</a>” theme :-)
						<br />
						Happy upcoming holidays! Update: Removed until December 2025 ;-)
					</li>

					<li>Now I have a “<a href="/now.html">now</a>” page!</li>

					<li>
						I've posted 19 photos taken in
						<a href="/blog/summer-and-autumn-2023.html">the summer and autumn 2023</a>.
					</li>

					<li>
						I've published <a href="/blog/spring-in-moscow-2023.html">a new post with photos</a>
						of spring 2023 in Moscow.
					</li>

					<li>
						Winter is here! This means the website has been <a href="/#themes">decorated</a>
						for the New Year<br />
						Update: Removed until December 2024 ;-)
					</li>
				</ul>

				<p><a href="/news.html">Older news…</a></p>


				<h2>How to reach me</h2>
				<p class="how-to-reach-links">
					<a href="mailto:sergei@kolesnikov.se" rel="me">sergei@kolesnikov.se</a>

					<span>
						<a href="https://t.me/win0err" rel="noopener noreferrer nofollow me">Telegram</a> +
						<a href="https://t.me/kolesnikovlive" rel="noopener noreferrer nofollow">Kolesnikov Live Photography Channel</a><!--
						--><img height=14 src="/assets/attention/flag.gif" alt="Important">
					</span>

					<a href="https://instagram.com/win0err" rel="noopener noreferrer nofollow me">Instagram</a>
					<a href="https://pixelfed.social/win0err" rel="noopener noreferrer nofollow me">Pixelfed</a>

					<br />

					<a href="https://mastodon.online/@win0err" rel="noopener noreferrer nofollow me">Mastodon</a>

					<a href="https://github.com/win0err" rel="noopener noreferrer nofollow me">GitHub</a>

					<a href="https://matrix.to/#/@win0err:matrix.org" rel="noopener noreferrer nofollow">[matrix]</a><noscript>: @win0err:matrix.org</noscript>
					<span>
						<a href="/twtxt.txt">twtxt.txt file</a>
						<img height=14 src="/assets/attention/new.gif" alt="New!">
					</span>
				</p>

				<p>
					PGP-signed contacts are available at <a href="/contacts.html">contacts</a> page.
					If you want to ask something, just <a href="mailto:sergei@kolesnikov.se">drop me an email</a>. I will usually reply in less than a week.
				</p>

				<p>
					Please use <a href="https://useplaintext.email/" rel="noopener noreferrer nofollow">plaintext instead of HTML in emails</a>.

					If possible, encrypt emails using GnuPG/PGP (see <a href="/contacts.html">contacts</a> page for details about using it),
					attach your public key to the email or a way to get it.
				</p>

				<h2>About this website</h2>

				<p>
					I’m happy to see people are accessing my page from all over the world!
				</p>

				<p>
					I try to follow Tim Berners-Lee’s “<a href="https://www.w3.org/Provider/Style/URI.html" target="_blank" rel="noopener noreferrer nofollow">Cool URIs don’t change</a>” rule.
					If you’ve found a broken link, typo, or grammatical inaccuracy on my website, please <a href="/contacts.html">contact me</a> in any convenient way.
				</p>

				<p>
					This website is intended to work on older computers, some of which cannot support the HTTPS protocol,
					either due to new algorithms or CPU/RAM limitations.
					Therefore, <i>both HTTP and HTTPS are supported</i>. Feel free to use any of them.
				</p>

				<p>
					This website is designed not to be bloated. It’s a static HTML/CSS site that uses system fonts.
					Additionally, all images are compressed before publishing.
					There are some small client-side scripts, but this website works perfectly with JavaScript turned off.
					There are no advertisements here. This website is 100% cookie-free.
				</p>

				<p>
					This site is always under construction.
					Browse it with your favorite browser or terminal program!
				</p>

				<h4 id="themes">Website appearance</h4>

				<p>
					This website is presented in different color schemes.
					<noscript>You need to have JavaScript enabled to use this feature.</noscript>

					<br />

					<span class="theme-switchers theme-switchers--hidden">
						Choose the color scheme that you like:
						<a href="/?_theme=black" class="_dotted">Black</a> (default),
						<a href="/?_theme=tonsky" class="_dotted">Tonsky</a>,
						<a href="/?_theme=panther" class="_dotted">Panther</a>,
						<a href="/?_theme=sky" class="_dotted">Sky</a>, or
						<a href="/?_theme=space" class="_dotted">Space</a>.
					</span>
				</p>

				<?php
					if ($IS_WINTER) {
						echo <<<HTML
						<p class="theme-switchers theme-switchers--hidden">
						<img class="special-themes-attention" src="/assets/attention/newarrow.gif" alt="New!">
						Special seasonal themes:&nbsp;
HTML;

						$html = array_map(
							function ($year) use ($WINTER_CURRENT_YEAR) {
								$html = "<a href=\"/?_theme=winter-{$year}\" class=\"_dotted\">Winter&nbsp;${year}</a>";

								if ($year === $WINTER_CURRENT_YEAR) {
									$html = <<<HTML
									<span>{$html}<img height=14 src="/assets/attention/new3.gif" alt="New!"></span>
HTML;
								}

								return $html;
							},
							$WINTER_YEARS,
						);

						$last = array_pop($html);

						echo implode(', ' . PHP_EOL, $html);
						echo ", and {$last}</p>";
					}
				?>

				<h2>Webrings I've joined</h2>

				<p>
					Webring is one of the simplest and most efficient ways to find content on the Internet.
					Everyone in webring gets a chance to have their personal site discovered.
				</p>

				<span>This site is a part of the following webrings:&nbsp;</span>
				<ul class="webrings _no-visited">
					<li>
						<a href="https://fediring.net/previous?host=kolesnikov.se" target="_blank" rel="nofollow">←</a>
						<a href="https://fediring.net/">Fediring</a>
						<a href="https://fediring.net/next?host=kolesnikov.se" target="_blank" rel="nofollow">→</a>
					</li>
					<!--
						 <li>
						 <a href="https://webring.xxiivv.com/#win0err" target="_blank" rel="nofollow"><svg viewBox="0 0 300 300" fill="none" stroke="currentColor" stroke-linecap="square" stroke-width="20" class="xxiivv-icon" xmlns="http://www.w3.org/2000/svg"><path d="M201.962 210a60 60 0 10-103.924-60l-50 86.603"/><path d="M98.038 210a60 60 0 10103.924-60l-50-86.603"/><path d="M150 120a60 60 0 100 120h100"/></svg>XXIIVV</a>
						 </li>
					-->
					<li>
						<a href="https://hotlinewebring.club/kolesnikov-se/previous" target="_blank" rel="nofollow">←</a>
						<a href="https://hotlinewebring.club/" target="_blank" rel="nofollow">Hotline</a>
						<a href="https://hotlinewebring.club/kolesnikov-se/next" target="_blank" rel="nofollow">→</a>
					</li>
					<li>
						<a href="https://geekring.net/site/197/previous" target="_blank" rel="nofollow">←</a>
						<a href="https://geekring.net/" target="_blank" rel="nofollow">geekring</a>
						<small>(<a href="https://geekring.net/site/197/random" title="Visit random website" target="_blank" rel="nofollow">?</a>)</small>
						<a href="https://geekring.net/site/197/next" target="_blank" rel="nofollow">→</a>
					</li>
					<li>
						<a href="https://webring.dinhe.net/prev/https://kolesnikov.se" target="_blank" rel="nofollow">←</a>
						<a href="http://webring.dinhe.net" target="_blank" rel="nofollow">retronaut</a>
						<a href="https://webring.dinhe.net/next/https://kolesnikov.se" target="_blank" rel="nofollow">→</a>
					</li>
				</ul>
			</main>

			<hr class="<?php echo $IS_WINTER ? 'styled styled--winter' : 'unstyled' ?>" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

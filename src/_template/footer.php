<?php if (!defined('IS_WINTER')) require __DIR__ . '/is_winter.php'; ?>
<?php require_once __DIR__ . '/tz.php'; ?>

<footer class="footer _no-visited">
	<div class="footer__buttons">
		<img src="/assets/buttons/linux-powered.gif" alt="Linux Powered" />
		<img src="/assets/buttons/emacs.gif" alt="Created with Emacs" />
		<img src="/assets/buttons/800x600.gif" alt="Best viewed with 800×600 screens" />
		<img src="/assets/buttons/nocookie.gif" alt="This site is cookie-free" />
		<img src="/assets/buttons/internetprivacy.gif" id="easter-egg" alt="Internet Privacy" />
		<a href="https://github.com/win0err/ohmystats" target="_blank" rel="nofollow"><img src="/assets/buttons/ohmystats.png" alt="Visitors & Views Count" title="Visitors & Views Count" /></a>
		<a href="https://wiby.me/about/" target="_blank" rel="nofollow"><img src="/assets/buttons/wiby.gif" alt="Wiby — Old Web Search Engine" /></a>
		<a href="https://duckduckgo.com/" target="_blank" rel="nofollow"><img src="/assets/buttons/duckduckgo.png" alt="DuckDuckGo" /></a>
	</div>

	<div class="footer__text">
		This website is coded with valid vanilla
		<a href="https://validator.w3.org/check?uri=referer" target="_blank" referrerpolicy="unsafe-url" rel="nofollow">HTML</a>
		&amp;
		<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fkolesnikov.se%2Fstyles.css" target="_blank" rel="nofollow">CSS</a>.
		This website is under construction.
		Last update:
		<time datetime="<?php echo date(DATE_RFC3339, filemtime(get_included_files()[0])); ?>">
			<?php echo date("D, j F Y", filemtime(get_included_files()[0])); ?>
		</time>
	</div>

	<div class="footer__image">
		<?php
			echo IS_WINTER
			? '<img src="/assets/winter/christmas-tree.gif" alt="Christmas tree" />'
			   : '<img src="/assets/cat.gif" alt="White cat" />';
		?>
	</div>
</footer>


<script>
	<?php
		if (IS_WINTER) echo <<<JS
		window.addEventListener('DOMContentLoaded', () => {
			document.body.classList.remove('_theme--black')
			document.body.classList.add('_theme--winter')
		})
		JS;
	?>

	const AVAILABLE_THEMES = ['black', 'sky', 'space', 'panther', 'tonsky']
	<?php if (IS_WINTER) echo 'AVAILABLE_THEMES.push(\'winter\')'; ?>

	const saveTheme = (newTheme) => {
		if (!AVAILABLE_THEMES.includes(newTheme)) return

		localStorage.setItem('theme', newTheme)
	}

	const applyCurrentTheme = () => {
		const theme = localStorage.getItem('theme')

		if (theme && AVAILABLE_THEMES.includes(theme)) {
			document.body.classList.remove(...AVAILABLE_THEMES.map(name => `_theme--${name}`))
			document.body.classList.add(`_theme--${theme}`)
		}
	}

	const getThemeFromURL = href => new URL(href, 'https://kolesnikov.se').searchParams.get('_theme')

	window.addEventListener('DOMContentLoaded', () => {
		const themeSwitcherElement = document.querySelector('.theme-switchers')
		if (themeSwitcherElement) {
			themeSwitcherElement.classList.remove('theme-switchers--hidden')

			themeSwitcherElement.querySelectorAll('a[href*="?_theme="]').forEach((el) => {
				el.addEventListener('click', (e) => {
					saveTheme(getThemeFromURL(e.target.href))
					applyCurrentTheme()

					e.preventDefault()
					return false
				})
			})
		}

		const newTheme = getThemeFromURL(window.location)
		if (newTheme) saveTheme(newTheme)

		applyCurrentTheme()
	})

	window.addEventListener('DOMContentLoaded', () => {
		const newGifSrc = '/assets/buttons/kate.gif'
		const targetChance = 98

		if (Math.random() * 100 < targetChance) return

		document.querySelector('#easter-egg')
				.setAttribute('src', newGifSrc)
	})
</script>

<?php if (!isset($IS_WINTER)) require __DIR__ . '/is_winter.php'; ?>
<script>
	<?php
		if ($IS_WINTER) echo <<<JS

		window.addEventListener('DOMContentLoaded', () => {
			document.documentElement.classList.remove('_theme--black')
			document.documentElement.classList.add('_theme--winter-{$WINTER_CURRENT_YEAR}')
		})
		JS;
	?>

	const AVAILABLE_THEMES = ['black', 'sky', 'space', 'panther', 'tonsky']
	<?php
		if ($IS_WINTER) {
			echo "AVAILABLE_THEMES.push("
			   . implode(", ", array_map(fn ($year) => "'winter-{$year}'", $WINTER_YEARS))
			   . ")" . PHP_EOL;
		}
	?>

	const saveTheme = (newTheme) => {
		if (!AVAILABLE_THEMES.includes(newTheme)) return

		localStorage.setItem('theme', newTheme)
	}

	const applyCurrentTheme = () => {
		const theme = localStorage.getItem('theme')

		if (theme && AVAILABLE_THEMES.includes(theme)) {
			document.documentElement.classList.remove(...AVAILABLE_THEMES.map(name => `_theme--${name}`))
			document.documentElement.classList.add(`_theme--${theme}`)
		}
	}

	const getThemeFromURL = href => new URL(href, 'https://kolesnikov.se').searchParams.get('_theme')

	window.addEventListener('DOMContentLoaded', () => {
		const themeSwitcherElements = document.querySelectorAll('.theme-switchers')
		for (const themeSwitcherElement of themeSwitcherElements) {
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
</script>

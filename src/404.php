<!doctype html>
<html lang="en">
	<head>
		<?php require '_template/meta.php'; ?>
		<meta name="robots" content="noindex, follow" />
		<title>404 — Not Found</title>
	</head>

	<body class="_theme--black">
		<img class="flying-avatar" src="/assets/avatar.jpg" alt="Sergei Kolesnikov's avatar" draggable="false" />
		<div class="container">
			<div class="not-found">
				<h1 class="not-found__title">404</h1>
				<span class="not-found__subtitle">
					Page not found.
					<a href="/">Go back home?</a>
				</span>
			</div>
		</div>

		<script>
			window.addEventListener('DOMContentLoaded', () => {
				const avatar = document.querySelector('.flying-avatar')
				const targetElement = document.querySelector('.not-found__subtitle')

				const originalContent = targetElement.innerHTML

				let counter = 0
				let delayedReset

				const catchHandler = (e) => {
					e.preventDefault()
					e.stopPropagation()

					counter++
					targetElement.innerText = counter > 1
						? `You caught me ${counter} times!`
						: 'You caught me!'

					clearTimeout(delayedReset)

					delayedReset = setTimeout(() => {
						targetElement.innerHTML = originalContent
					}, 2500)
				}

				avatar.addEventListener('touchstart', catchHandler, false)
				avatar.addEventListener('mousedown', catchHandler, false)
			})
		</script>
	</body>
</html>

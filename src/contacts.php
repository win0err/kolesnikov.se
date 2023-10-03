<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>Sergei Kolesnikov's contacts</title>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php require '_template/header.php'; ?>

			<main>
				<h1>Contacts</h1>
				<p>
					<img style="float: left; margin: 0 1em 1em 0;" src="/assets/email-clear.gif" alt="E-mail" />
					Hello, web stranger! This is a list of my web contacts that I want to share. <br />
					When you write to me, please use plaintext instead of HTML. I will usually replay in less than a week.
				</p>

				<details>
					<summary>
						My public key is &lsaquo;<a href="/win0err.asc" rel="pgpkey" class="monospace">2606 2BDB E8E6 6DA9 AB3E  780C BAC6 8A79 0D8A D1F2</a>&rsaquo;.
					</summary>

					<p>You can download and import the key any way you prefer:</p>
					<ul class="styled styled--gold-star">
						<li>
							Download it directly: <br />
							<code>$ curl https://kolesnikov.se/win0err.asc | gpg --import</code>
						</li>
						<li>
							Receive it from a key server (pgp.mit.edu, keyserver.ubuntu.com, or keys.openpgp.org): <br />
							<code>$ gpg --keyserver pgp.mit.edu --recv-keys 26062BDBE8E66DA9AB3E780CBAC68A790D8AD1F2</code>
						</li>
						<li>
							Locate it using Web Key Directory: <br />
							<code>$ gpg --locate-external-key sergei@kolesnikov.se</code>
							<br />

							For old GPG versions: <br />
							<code>$ gpg --auto-key-locate clear,nodefault,wkd --locate-key sergei@kolesnikov.se</code>
						</li>
					</ul>
				</details>

				<?php

				$patterns = [
					'/[^\s]+@[^\s]\.[^\s]+/m' => '<a href="mailto:$0" rel="noopener noreferrer nofollow">$0</a>',
					'/\w+\:\/\/.+/m' => '<a href="$0" rel="noopener noreferrer nofollow me">$0</a>',
				];

				$signed_contacts = file_get_contents(__DIR__ . '/../dist/contacts.asc');

				if ($signed_contacts === false) die(1);

				$signed_contacts_with_links = preg_replace(
					array_keys($patterns),
					array_values($patterns),
					$signed_contacts,
				);
				echo '<pre class="pgp-signed-contacts _no-visited">' . $signed_contacts_with_links . '</pre>';

				?>
				<p>(the same information as in <a href="/contacts.asc">the clearsig file</a>)</p>
			</main>

			<hr class="styled styled--tap" />

			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

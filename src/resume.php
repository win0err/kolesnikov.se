<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '_template/meta.php'; ?>
	<title>Sergei Kolesnikov's Blog</title>
	<link rel="alternate" hreflang="en" type="application/pdf" href="/resume/sergei-kolesnikov-en.pdf" />
	<link rel="alternate" hreflang="ru" type="application/pdf" href="/resume/sergei-kolesnikov-ru.pdf" />
</head>

<body id="top" class="_theme--black resume">
	<div class="container">
		<?php include '_template/header.php'; ?>

		<main>
			<h1>Sergei Kolesnikov’s Résumé</h1>

			<ul class="resume-contacts">
				<li><a href="mailto:sergei@kolesnikov.se">sergei@kolesnikov.se</a></li>
				<li>@win0err</li>
				<li><a href="/contacts.html">kolesnikov.se/contacts.html</a></li>
			</ul>

			<aside class="other-formats">
				<h3 class="other-formats__title">Other formats</h3>
				<div class="other-formats__links">
					<a href="/resume/sergei-kolesnikov-en.pdf"><img src="/assets/pdf.png" alt="">sergei-kolesnikov-en.pdf</a> in English, <br />
					<a href="/resume/sergei-kolesnikov-ru.pdf"><img src="/assets/pdf.png" alt="">sergei-kolesnikov-ru.pdf</a> in Russian
				</div>
				<small class="other-formats__date">
					Last update:
					<?php
						require_once __DIR__ . '/_template/tz.php';

						$latest_date = max(
							filemtime(__DIR__ . '/resume/sergei-kolesnikov-en.tex'),
							filemtime(__DIR__ . '/resume/sergei-kolesnikov-ru.tex'),
						);

						echo '<time datetime="' . date(DATE_RFC3339, $latest_date) . '">' . date("D, j F Y", $latest_date) . '</time>';
					?>
				</small>
			</aside>

			<p>
				I'm a software engineer from Moscow, Russia. I develop web applications and services.
				I started my career as a backend developer, but then focused on frontend development because I'm passionate about creating user interfaces.
				I am a follower of the UNIX philosophy: I prefer to create simple things and add complexity only where it is necessary.
				I learn quickly, care about detail, and love computer science.
			</p>

			<h2>Experience</h2>

			<ul>
				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">AnyCut</strong>
						<i class="resume-record__dates"><time datetime="2022-10">October 2022</time>&ndash;present</i>
					</div>

					<div class="resume-record__position">Sr. Software Engineer</div>

					<div class="resume-record__description">
						<p>Launched an online service for calculating laser cutting costs.</p>

						<ul>
							<li>Designed and developed a client SPA, embeddable widget, and UI component library;</li>
							<li>Participated in system design and code reviews of backend parts.</li>
						</ul>

						<p><b>Technologies:</b> JavaScript/TypeScript, Vue 3, Pinia</p>
					</div>
				</li>

				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">
							<a href="https://connect.cloudblue.com/" target="_blank"
								rel="noopener noreferrer nofollow">Ingram Micro Cloud (CloudBlue)</a>
						</strong>
						<i class="resume-record__dates"><time datetime="2019-02">February 2019</time>&ndash;<time datetime="2022-10">October 2022</time></i>
					</div>

					<div class="resume-record__position">Software Engineer → Sr. Software Engineer</div>

					<div class="resume-record__description">
						<p>
							Designed, planned and developed features for
							<a href="https://connect.cloudblue.com/community/" target="_blank"
								rel="noopener noreferrer nofollow">CloudBlue Connect</a>,
							a SaaS platform for the distribution of cloud services.
						</p>

						<ul>
							<li>
								Led the frontend development of notification, branding, and validation services.
								Introduced a highly customizable email system as a part of the notification service and implemented automatic testing of email templates;
							</li>

							<li>Implemented core components of the UI library, stabilised and speeded up end-to-end test runs, and contributed to other parts of the product;</li>

							<li>Wrote guidelines for frontend developers, onboarded newcomers, and reviewed code.</li>
						</ul>

						<p><b>Technologies:</b> JavaScript, Vue 2, Vuex; Python, Django, Jinja</p>
					</div>
				</li>

				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">Tendertech</strong>
						<i class="resume-record__dates"><time datetime="2017-11">November 2019</time>&ndash;<time datetime="2019-02">February 2019</time></i>
					</div>

					<div class="resume-record__position">Software Engineer</div>

					<div class="resume-record__description">
						<p>Designed and developed an internal CRM system for the bank guarantee issuing service.</p>

						<ul>
							<li>Designed and implemented core parts of the CRM system, integrated with email services;</li>
							<li>Implemented an algorithm to distribute incoming requests between salespeople;</li>
							<li>Migrated frontend from jQuery to React stack.</li>
						</ul>

						<p><b>Technologies:</b> PHP, Slim, Go, MySQL, PostgreSQL; JavaScript, React, Redux</p>
					</div>
				</li>
			</ul>


			<h2>Education</h2>

			<ul>
				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">
							<a href="https://english.mirea.ru/" target="_blank"
								rel="noopener noreferrer nofollow">MIREA — Russian Technological University</a>
						</strong>
						<i class="resume-record__dates"><time datetime="2019">2019</time>&ndash;<time datetime="2023">2023</time></i>
					</div>
					<div class="resume-record__position">Lecturer/Researcher qualification</div>
				</li>

				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">
							<a href="https://english.mirea.ru/" target="_blank"
								rel="noopener noreferrer nofollow">MIREA — Russian Technological University</a>
						</strong>
						<i class="resume-record__dates"><time datetime="2017">2017</time>&ndash;<time datetime="2019">2019</time></i>
					</div>
					<div class="resume-record__position">Master of Science in Computer Science, <i>with honours</i></div>
				</li>

				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">
							<a href="https://english.mirea.ru/" target="_blank"
								rel="noopener noreferrer nofollow">MIREA — Russian Technological University</a>
						</strong>
						<i class="resume-record__dates"><time datetime="2013">2013</time>&ndash;<time datetime="2017">2017</time></i><br />
					</div>
					<div class="resume-record__position">Bachelor of Science in Computer Science</div>
				</li>
			</ul>

			<h2>Teaching</h2>

			<ul>
				<li class="resume-record">
					<div class="resume-record__heading">
						<strong class="resume-record__title">
							<a href="https://english.mirea.ru/" target="_blank"
								rel="noopener noreferrer nofollow">MIREA — Russian Technological University</a>
						</strong>
						<i class="resume-record__dates">
							<time datetime="2019">2019</time>&ndash;<time datetime="2020">2020</time>,
							<time datetime="2021">2021</time>
						</i>
					</div>

					<div class="resume-record__position">Teaching Assistant</div>

					<div class="resume-record__description">
						<p>Led practical and laboratory classes for undergraduate students, and prepared materials and assignments for the classes and exams.</p>

						<ul>
							<li><i>Object-Oriented Programming.</i> Teaching the basics of Java and OOP.</li>
							<li><i>Software Development Technologies.</i> Teaching collaborative SPA development in JavaScript + React, building applications with Webpack, unit testing, and applying CI/CD practices using GitHub Actions integration as an example (testing and deploying the application to Heroku).</li>
						</ul>
					</div>
				</li>
			</ul>

			<h2>Projects</h2>

			<ul>
				<li>
					<strong><a href="/">kolesnikov.se</a></strong>.
					Personal website with a blog and photos inspired by 90s web design
				</li>

				<li>
					<strong><a href="https://github.com/win0err/gnome-runcat" rel="noopener noreferrer nofollow">RunCat</a></strong>.

					A GNOME Shell extension that shows CPU usage by the cat's running speed
				</li>

				<li>
					<strong><a href="https://github.com/win0err/twtwt" rel="noopener noreferrer nofollow">twtwt — a twtxt CLI client</a></strong>.

					A CLI client for twtxt: decentralized, minimalist microblogging service for hackers
				</li>

				<li>
					<strong><a href="https://github.com/win0err/aphrodite-terminal-theme" rel="noopener noreferrer nofollow">Aphrodite Terminal Theme</a></strong>.

					A minimalistic terminal theme (prompt) that does not have any visual noise. Looks great both with dark and white terminals. Bash, fish and zsh are supported.
				</li>

				<li>
					<strong><a href="https://github.com/win0err/material-svg" rel="noopener noreferrer nofollow">Material SVG</a></strong>.

					Automatically updated Material Design icon set available as an NPM package
				</li>
			</ul>

			<h2>Professional skills</h2>

			<ul>
				<li><b>Programming Languages:</b> JavaScript/TypeScript &mdash; main languages, also write in Go, Python, PHP and C</li>
				<li><b>Web Development:</b> HTML, CSS (SASS, PostCSS), Vue and React frameworks</li>
				<li><b>DBMS:</b> MySQL/MariaDB, PostgreSQL, SQLite, Redis</li>
				<li><b>Tools:</b> UNIX-like ОС (Linux/BDS/macOS), Git, LaTeX, make, Vite, Webpack, Podman/Docker</li>
			</ul>

			<h2>Languages</h2>

			<p>English &mdash; B1, Russian &mdash; native.</p>

			<h2>Hobbies</h2>

			<p>Programming, photography, gadgets and travel.</p>

			<h2>References</h2>

			<p>Available on request.</p>
		</main>

		<hr class="styled styled--warp-speed" />

		<?php include '_template/footer.php'; ?>
	</div>
</body>

</html>

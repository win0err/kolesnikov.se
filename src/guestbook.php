<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>Guestbook</title>
	</head>

	<body id="top" class="_theme--black">
		<div class="container">
			<?php require '_template/header.php'; ?>

			<main>
				<h1>Guestbook</h1>

				<p>
					<img style="float: left; margin: 0 1em 1em 0; height: 2em;" src="assets/guestbook.gif" alt="Guestbook" />
					Privet, websurfer! <br />
					Since you've visited my website, please sign the&nbsp;guestbook!
				</p>

				<div class="guestbook-form-holder">
					<form action="/scripts/guestbook.php"
						method="post"
						target="_blank"
						accept-charset="utf-8"
						class="comment-form">
						<div>
							<label for="name">Your name:</label>
							<input maxlength="50" id="name" name="name" size="30" type="text" required />
						</div>

						<div>
							<label for="website">Your website (optional):</label>
							<input maxlength="50" id="website" name="website" size="30" />
						</div>

						<div>
							<label for="message">Your message:</label>
							<textarea cols="30" maxlength="1000" id="message" name="message" rows="5" required></textarea>
						</div>

						<div>
							<label for="captcha">Spam protection:</label>
							<span>
								<input maxlength="11" id="captcha" name="captcha" size="30" type="text" required /><br />
								<small>Type <b>abracadabra</b> in the field above ↑</small>
							</span>
						</div>

						<div>
							<div></div>
							<div><input type="submit" value="Submit" /></div>
						</div>
					</form>
				</div>

				<h2>Messages</h2>

				<ol reversed>
					<li>
						<div>
							<strong>a</strong>
							wrote on <small><time datetime="2023-10-08T02:53:44+00:00">8 October 2023, 02:53</time></small>
						</div>
						<div>
							<p>heh</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://seraphix.neocities.org/" target="_blank" rel="noindex nofollow ugc">seraph</a></strong>
							wrote on <small><time datetime="2023-09-17T04:32:13+00:00">17 September 2023, 04:32</time></small>
						</div>
						<div>
							<p>your site is so neat!!</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Sarkhan</strong>
							wrote on <small><time datetime="2023-09-10T17:10:12+00:00">10 September 2023, 17:10</time></small>
						</div>
						<div>
							<p>What an awesome oldschool website!<br />Amazed at life game and beautiful photos]</p>
						</div>
					</li>

					<li>
						<div>
							<strong>val</strong>
							wrote on <small><time datetime="2023-07-29T15:49:53+00:00">29 July 2023, 15:49</time></small>
						</div>
						<div>
							<p>Hi! Just found this place, you have some incredible photos and I wish you the absolute best from Michigan, US! &#60;3</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://lu.tiny-universes.net" target="_blank" rel="noindex nofollow ugc">Lu</a></strong>
							wrote on <small><time datetime="2023-07-09T14:50:04+00:00">9 July 2023, 14:50</time></small>
						</div>
						<div>
							<p>hello sergei!! your photographs are incredible, I love the city shots &#38; the composition of the plane.</p>
							<p>keeping the space background as an option was a clever workaround, I&#39;m glad you didn&#39;t remove them! it&#39;s the official background of the world wide web after all :)</p>
						</div>

						<div class="guestbook-reply">
							<strong>Sergei Kolesnikov</strong> replied:

							<p>ฅ^⇀ﻌ↼^ฅ</p>
						</div>
					</li>

					<li>
						<div>
							<strong>bee</strong>
							wrote on <small><time datetime="2023-05-26T22:32:22+00:00">26 May 2023, 22:32</time></small>
						</div>
						<div>
							<p>^-^</p>
						</div>
					</li>

					<li>
						<div>
							<strong>bex</strong>
							wrote on <small><time datetime="2023-03-10T02:35:45+00:00">10 March 2023, 02:35</time></small>
						</div>
						<div>
							<p>Your photos are gorgeous, keep it up! :)</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://alotfunstuff.net" target="_blank" rel="noindex nofollow ugc">Alex</a></strong>
							wrote on <small><time datetime="2023-03-05T11:36:39+00:00">5 March 2023, 11:36</time></small>
						</div>
						<div>
							<p>well what a nice website!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://chengdulittlea.com" target="_blank" rel="noindex nofollow ugc">yiming</a></strong>
							wrote on <small><time datetime="2023-01-17T16:41:28+00:00">17 January 2023, 16:41</time></small>
						</div>
						<div>
							<p>Hi! Your pictures looks awesome!! And the entire website is so classic, love it!</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Ms. Sassy</strong>
							wrote on <small><time datetime="2023-01-07T08:30:08+00:00">7 January 2023, 08:30</time></small>
						</div>

						<div>
							<p>Hello! I am typing on an old laptop from 2005 using puppy linux. Still works! :)</p>
						</div>

						<div class="guestbook-reply">
							<strong>Sergei Kolesnikov</strong> replied:

							<p>I'm glad to hear that!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://maxl.neocities.org" target="_blank" rel="noindex nofollow ugc">KOCATKA</a></strong>
							wrote on <small><time datetime="2023-01-03T09:17:01+00:00">3 January 2023, 09:17</time></small>
						</div>
						<div>
							<p>Your photos are amazing, and site is beautiful!</p>
						</div>
					</li>
					<li>
						<div>
							<strong>Lyse</strong>
							wrote on <small><time datetime="2022-12-20T09:35:28+00:00">20 December 2022, 09:35</time></small>
						</div>
						<div>
							<p>Hey mate,</p>
							<p>you have some absolutely amazing photos, I love them! I just had to block the background GIFs, they hurt my eyes very badly.</p>
							<p>I&#39;m looking forward to more pictures and a writeup on the technical side of how your site is generated. :-)</p>
							<p>Cheers<br />Lyse</p>
						</div>

						<div class="guestbook-reply">
							<strong>Sergei Kolesnikov</strong> replied:

							<p>Thank you! That's very nice to hear!</p>

							<p>
								That's the reason why those background GIFs were added to the website :D
								<br /> I'll remove them in mid-January.
							</p>
						</div>
					</li>
					<li>
						<div>
							<strong>Denis</strong>
							wrote on <small><time datetime="2022-11-10T11:28:54+00:00">10 November 2022, 11:28</time></small>
						</div>
						<div>
							<p>With Best Regards!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://zachmanson.com" target="_blank" rel="noindex nofollow ugc">Zach</a></strong>
							wrote on <small><time datetime="2022-10-11T02:32:34+00:00">11 October 2022, 02:32</time></small>
						</div>
						<div>
							<p>I thought the game of life post was a really interesting collaborative process!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://lolcat.ca" target="_blank" rel="noindex nofollow ugc">will</a></strong>
							wrote on <small><time datetime="2022-08-18T02:03:28+00:00">18 August 2022, 02:03</time></small>
						</div>
						<div>
							<p>Really liking that &#34;alternative&#34; look for your site. love you xoxo</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Neri</strong>
							wrote on <small><time datetime="2022-07-22T09:03:57+00:00">22 July 2022, 09:03</time></small>
						</div>
						<div>
							<p>I love your pics! :-)</p>
						</div>
					</li>

					<li>
						<div>
							<strong>AlexK</strong>
							wrote on <small><time datetime="2022-07-13T08:49:51+00:00">13 July 2022, 08:49</time></small>
						</div>
						<div>
							<p>Just 5.85KB transferred!</p>

							<p>We definitely need more websites like this in the World Wide Web.</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://twtxt.net/~screem" target="_blank" rel="noindex nofollow ugc">Screem</a></strong>
							wrote on <small><time datetime="2022-07-13T06:07:58+00:00">13 July 2022, 06:07</time></small>
						</div>
						<div>
							<p>Loving the aesthetic of your site! Haven&#39;t seen a guestbook for a very long time either, a very familiar and welcome edition :D</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://mckinley.cc" target="_blank" rel="noindex nofollow ugc">McKinley</a></strong>
							wrote on <small><time datetime="2022-07-12T20:38:27+00:00">12 July 2022, 20:38</time></small>
						</div>
						<div>
							<p>
								Found your site from twtxt, I like the (new) design. Looks kind of familiar, though... ;)
							</p>

							<p>
								When will we get the obligatory blog post about how the blog works?
								I would be interested to read it. Also, would you consider adding an RSS feed?
							</p>

							<div class="guestbook-reply">
								<strong>Sergei Kolesnikov</strong> replied:

								<p>I will definitely write an article on how this site works (spoiler: makefile) soon!</p>

								<p>
									I plan to add an RSS when the Photography and Blog sections of the site will be finished.
									I think there will be two or three RSS feeds available: blog, photos, and (maybe) news from the home page.
								</p>
							</div>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="http://altavista.digital.com" target="_blank" rel="noindex nofollow ugc">Nirfse</a></strong>
							wrote on <small><time datetime="2022-07-12T11:32:52+00:00">12 July 2022, 11:32</time></small>
						</div>
						<div>
							<p>Hey, Sergei!</p>

							<p>
								I have really enjoyed your webpage. That&#39;s how we did it back in late 1990&#39;s!
								Today&#39;s webmasters still have a lot to learn in terms of performance and architectural clarity.
								If these principles were pursued, the internet would be a much better place.
							</p>

							<p>
								Unfortunately, photo files in the photo gallery are of tremendous size—up to 1.86MB each 😱, hence I couldn&#39;t load any of them with my modem connection.
								Hope you&#39;ll be able to optimize image files in no time (check the jpegoptim utility from a fellow webmaster Timo Kokkonen at <a href="https://www.kokkonen.net/tjko/projects.html" target="_blank" rel="noindex nofollow ugc">https://www.kokkonen.net/tjko/projects.html</a>).
							</p>

							<p>
								Keep up the great work! Looking forward to your private Telnet server next.
							</p>

							<p>
								Best regards,<br />
								Nirfse
							</p>
						</div>
					</li>
				</ol>
			</main>

			<hr class="styled styled--bow" />
			<?php require '_template/footer.php'; ?>
		</div>
	</body>
</html>

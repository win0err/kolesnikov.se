<!DOCTYPE html>
<html lang="en" class="_theme--black">
	<head>
		<?php require '_template/meta.php'; ?>
		<title>Guestbook</title>
	</head>

	<body id="top">
		<div class="container">
			<?php require '_template/header.php'; ?>

			<main>
				<h1>Guestbook</h1>

				<p>
					<img class="image-smooth" style="float: left; margin: 0 1em 1em 0; height: 2em;" src="assets/guestbook.gif" alt="Guestbook" />
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
							<label for="website">Your website <small>(optional)</small>:</label>
							<input maxlength="50" id="website" name="website" size="30" />
						</div>

						<div>
							<label for="email">Your email <small>(optional, won't be published)</small>:</label>
							<input maxlength="100" id="email" name="email" size="30" />
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

				<?php
					require_once '_template/tz.php';
					require_once '_template/utils.php';
				?>

				<ol reversed>
					<li>
						<div>
							<strong>Per</strong>
							wrote on <small><?php echo get_time_tag("2025-06-10T06:23:33+00:00"); ?></small>
						</div>
						<div>
							<p>RunCat is fantastic and so is this page. It&#39;s a breath of fresh air to see and old school vanilla homepage with a guestbook!</p>
						</div>
					</li>

					<li>
						<div>
							<strong>terr4ance`</strong>
							wrote on <small><?php echo get_time_tag("2025-05-05T16:08:37+00:00"); ?></small>
						</div>
						<div>
							<p>Awesome website - planning on making my own soon and this is good inspiration! Sending well wishes from the UK.</p>
						</div>

						<div class="guestbook-reply">
							<strong>Sergei Kolesnikov</strong> replied:

							<p>Thanks! I'll be happy to take a look at your website when it's ready!</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Sandy</strong>
							wrote on <small><?php echo get_time_tag("2025-04-01T11:37:52+00:00"); ?></small>
						</div>
						<div>
							<p>
								And you dont want me here anymore<br />
								so i&#39;m just saying <br />
								i want a chance <br />
								i dont know if i can do that<br />
								or if you can just do that<br />
								i&#39;m just not going anywhere<br />
								i just dont want <br />
								you guys going nowhere
							</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://herz.moe/" target="_blank" rel="noindex nofollow ugc">herz</a></strong>
							wrote on <small><?php echo get_time_tag("2025-01-13T13:05:54+00:00"); ?></small>
						</div>
						<div>
							<p>Привет, спасибо, что заглянул на мой сайт, у тебя тоже классный сайт. Было интересно покликать по всем темам. Твои фотки тоже зашли — я когда-то унаследовал от деда «Зенит E» с логотипом московской олимпиады 1980 года и таскал его по всей Германии и Италии, но потом закрутился и всё забросил. Надо бы снова взяться за это дело!</p>

							<div class="guestbook-reply">
								<i>Translated message:</i>

								<p>Hi, thanks for visiting my website, you have a great site too. It was interesting to click through all the topics. I also liked your photos — I once inherited a 'Zenit E' from my grandfather with the logo of the 1980 Moscow Olympics and took it all over Germany and Italy, but then I got busy and abandoned it. I should get back to it!</p>
							</div>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://nyght.neocities.org/" target="_blank" rel="noindex nofollow ugc">Nyght</a></strong>
							wrote on <small><?php echo get_time_tag("2024-12-17T23:31:09+00:00"); ?></small>
						</div>
						<div>
							<p>what a good job, i really liked the photos. the &#34;morning-in-istra&#34; one gave me some very specific vibes :)</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://iwakura.rip" target="_blank" rel="noindex nofollow ugc">hex</a></strong>
							wrote on <small><?php echo get_time_tag("2024-12-17T13:32:52+00:00"); ?></small>
						</div>
						<div>
							<p>i love this. the vibe is amazing</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://bano.dev" target="_blank" rel="noindex nofollow ugc">bano</a></strong>
							wrote on <small><?php echo get_time_tag("2024-12-11T14:39:14+00:00"); ?></small>
						</div>
						<div>
							<p>What a blast from the past!</p>
						</div>
					</li>
					<li>
						<div>
							<strong><a href="https://ari.lt/" target="_blank" rel="noindex nofollow ugc">ari</a></strong>
							wrote on <small><?php echo get_time_tag("2024-12-08T21:11:20+00:00"); ?></small>
						</div>
						<div>
							<p>love the vibes of the website</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Привет</strong>
							wrote on <small><?php echo get_time_tag("2024-06-06T07:38:00+00:00"); ?></small>
						</div>
						<div>
							<p>Люби котов.</p>

							<div class="guestbook-reply">
								<i>Translated message:</i>

								<p>Love cats.</p>
							</div>
						</div>
					</li>

					<li>
						<div>
							<strong>Chud</strong>
							wrote on <small><?php echo get_time_tag("2024-05-23T00:12:21+00:00"); ?></small>
						</div>
						<div>
							<p>Is Cobson a gem?</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://tonsky.me" target="_blank" rel="noindex nofollow ugc">Tonsky</a></strong>
							wrote on <small><?php echo get_time_tag("2024-04-18T13:08:19+00:00"); ?></small>
						</div>
						<div>
							<p>ha-ha, make it yellow</p>
						</div>

						<div class="guestbook-reply">
							<strong>Sergei Kolesnikov</strong> replied:

							<p>Done! Feel free to apply the <a href="/?_theme=tonsky">Tonsky</a> color scheme ;-)</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Юрий</strong>
							wrote on <small><?php echo get_time_tag("2024-01-21T11:34:34+00:00"); ?></small>
						</div>
						<div>
							<p>Как я сюда попал и что я здесь делаю я не понимаю</p>

							<div class="guestbook-reply">
								<i>Translated message:</i>

								<p>I don't understand how I got here and what I'm doing here.</p>
							</div>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://euaaaio.ru" target="_blank" rel="noindex nofollow ugc">Ed</a></strong>
							wrote on <small><?php echo get_time_tag("2024-01-18T15:47:18+00:00"); ?></small>
						</div>
						<div>
							<p>Came here by invitation. Didn&#39;t expect anything, but absolutely fell in love with this holiday, New Year&#39;s Eve vibes.</p><p>🫶🏻</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Asmodeus</strong>
							wrote on <small><?php echo get_time_tag("2023-10-19T04:25:18+00:00"); ?></small>
						</div>
						<div>
							<p>:)</p>
						</div>
					</li>

					<li>
						<div>
							<strong>a</strong>
							wrote on <small><?php echo get_time_tag("2023-10-08T02:53:44+00:00"); ?></small>
						</div>
						<div>
							<p>heh</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://seraphix.neocities.org/" target="_blank" rel="noindex nofollow ugc">seraph</a></strong>
							wrote on <small><?php echo get_time_tag("2023-09-17T04:32:13+00:00"); ?></small>
						</div>
						<div>
							<p>your site is so neat!!</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Sarkhan</strong>
							wrote on <small><?php echo get_time_tag("2023-09-10T17:10:12+00:00"); ?></small>
						</div>
						<div>
							<p>What an awesome oldschool website!<br />Amazed at life game and beautiful photos]</p>
						</div>
					</li>

					<li>
						<div>
							<strong>val</strong>
							wrote on <small><?php echo get_time_tag("2023-07-29T15:49:53+00:00"); ?></small>
						</div>
						<div>
							<p>Hi! Just found this place, you have some incredible photos and I wish you the absolute best from Michigan, US! &#60;3</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://lu.tiny-universes.net" target="_blank" rel="noindex nofollow ugc">Lu</a></strong>
							wrote on <small><?php echo get_time_tag("2023-07-09T14:50:04+00:00"); ?></small>
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
							wrote on <small><?php echo get_time_tag("2023-05-26T22:32:22+00:00"); ?></small>
						</div>
						<div>
							<p>^-^</p>
						</div>
					</li>

					<li>
						<div>
							<strong>bex</strong>
							wrote on <small><?php echo get_time_tag("2023-03-10T02:35:45+00:00"); ?></small>
						</div>
						<div>
							<p>Your photos are gorgeous, keep it up! :)</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://alotfunstuff.net" target="_blank" rel="noindex nofollow ugc">Alex</a></strong>
							wrote on <small><?php echo get_time_tag("2023-03-05T11:36:39+00:00"); ?></small>
						</div>
						<div>
							<p>well what a nice website!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://chengdulittlea.com" target="_blank" rel="noindex nofollow ugc">yiming</a></strong>
							wrote on <small><?php echo get_time_tag("2023-01-17T16:41:28+00:00"); ?></small>
						</div>
						<div>
							<p>Hi! Your pictures looks awesome!! And the entire website is so classic, love it!</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Ms. Sassy</strong>
							wrote on <small><?php echo get_time_tag("2023-01-07T08:30:08+00:00"); ?></small>
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
							wrote on <small><?php echo get_time_tag("2023-01-03T09:17:01+00:00"); ?></small>
						</div>
						<div>
							<p>Your photos are amazing, and site is beautiful!</p>
						</div>
					</li>
					<li>
						<div>
							<strong>Lyse</strong>
							wrote on <small><?php echo get_time_tag("2022-12-20T09:35:28+00:00"); ?></small>
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
							wrote on <small><?php echo get_time_tag("2022-11-10T11:28:54+00:00"); ?></small>
						</div>
						<div>
							<p>With Best Regards!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://zachmanson.com" target="_blank" rel="noindex nofollow ugc">Zach</a></strong>
							wrote on <small><?php echo get_time_tag("2022-10-11T02:32:34+00:00"); ?></small>
						</div>
						<div>
							<p>I thought the game of life post was a really interesting collaborative process!</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://lolcat.ca" target="_blank" rel="noindex nofollow ugc">will</a></strong>
							wrote on <small><?php echo get_time_tag("2022-08-18T02:03:28+00:00"); ?></small>
						</div>
						<div>
							<p>Really liking that &#34;alternative&#34; look for your site. love you xoxo</p>
						</div>
					</li>

					<li>
						<div>
							<strong>Neri</strong>
							wrote on <small><?php echo get_time_tag("2022-07-22T09:03:57+00:00"); ?></small>
						</div>
						<div>
							<p>I love your pics! :-)</p>
						</div>
					</li>

					<li>
						<div>
							<strong>AlexK</strong>
							wrote on <small><?php echo get_time_tag("2022-07-13T08:49:51+00:00"); ?></small>
						</div>
						<div>
							<p>Just 5.85KB transferred!</p>

							<p>We definitely need more websites like this in the World Wide Web.</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://twtxt.net/~screem" target="_blank" rel="noindex nofollow ugc">Screem</a></strong>
							wrote on <small><?php echo get_time_tag("2022-07-13T06:07:58+00:00"); ?></small>
						</div>
						<div>
							<p>Loving the aesthetic of your site! Haven&#39;t seen a guestbook for a very long time either, a very familiar and welcome edition :D</p>
						</div>
					</li>

					<li>
						<div>
							<strong><a href="https://mckinley.cc" target="_blank" rel="noindex nofollow ugc">McKinley</a></strong>
							wrote on <small><?php echo get_time_tag("2022-07-12T20:38:27+00:00"); ?></small>
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
							wrote on <small><?php echo get_time_tag("2022-07-12T11:32:52+00:00"); ?></small>
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

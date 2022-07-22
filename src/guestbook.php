<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'template/blocks/meta.php'; ?>
        <title>Guestbook</title>
    </head>

    <body id="top" class="_theme--black">
        <div class="container">
            <?php include 'template/blocks/header.php'; ?>

            <main>
                <h1>Guestbook</h1>

                <p>
                    <img style="float: left; margin: 0 1em 1em 0; height: 2em;" src="assets/guestbook.gif" alt="Guestbook" />
                    Privet, websurfer! <br />
                    Since you've visited my website, please sign the guestbook!
                </p>

                <div class="guestbook-form">
                    <form action="/scripts/guestbook.php"
                        method="post"
                        target="_blank"
                        accept-charset="utf-8">
                        <table class="guestbook-form__table">
                            <tbody>
                                <tr>
                                    <td>Your name:</td>
                                    <td><input maxlength="50" name="name" size="30" type="text" required /></td>
                                </tr>
                                <tr>
                                    <td>Your website (optional)</td>
                                    <td><input maxlength="50" name="website" size="30" /></td>
                                </tr>
                                <tr>
                                    <td>Your message:</td>
                                    <td><textarea cols="30" maxlength="1000" name="message" rows="5" required></textarea></td>
                                </tr>
                                <tr>
                                    <td>Spam protection:</td>
                                    <td>
                                        <input maxlength="11" name="captcha" size="30" type="text" required /><br />
                                        <small>Type <b>abracadabra</b> in the field above ↑</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Submit" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

                <h2>Messages</h2>

                <ol reversed>
                    <li>
                        <div>
                            <strong>Neri</strong>
                            wrote on <small><time datetime="2022-07-22T09:03:57+0000">22 July 2022, 09:03</time></small>
                        </div>
                        <div>
                            <p>I love your pics! :-)</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <strong>AlexK</strong>
                            wrote on <small><time datetime="2022-07-13T08:49:51+0000">13 July 2022, 08:49</time></small>
                        </div>
                        <div>
                            <p>Just 5.85KB transferred!</p>

                            <p>We definitely need more websites like this in the World Wide Web.</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <strong><a href="https://twtxt.net/~screem" target="_blank" rel="noindex nofollow ugc">Screem</a></strong>
                            wrote on <small><time datetime="2022-07-13T06:07:58+0000">13 July 2022, 06:07</time></small>
                        </div>
                        <div>
                            <p>Loving the aesthetic of your site! Haven&#39;t seen a guestbook for a very long time either, a very familiar and welcome edition :D</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <strong><a href="https://mckinley.cc" target="_blank" rel="noindex nofollow ugc">McKinley</a></strong>
                            wrote on <small><time datetime="2022-07-12T20:38:27+0000">12 July 2022, 20:38</time></small>
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
                            wrote on <small><time datetime="2022-07-12T11:32:52+0000">12 July 2022, 11:32</time></small>
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
            <?php include 'template/blocks/footer.php'; ?>
        </div>
    </body>
</html>

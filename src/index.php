<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'template/blocks/meta.php'; ?>
        <title>Sergei Kolesnikov's home page</title>
    </head>

    <body id="top" class="_theme--black">
        <div class="container">
            <?php include 'template/blocks/header.php'; ?>

            <main>
                <p>
                    I'm Sergei Kolesnikov (a.k.a. win0err): software engineer, photographer, and professional procrastinator. <br />
                    I write computer programs and create websites.
                </p>

                <p>
                    This is my personal corner of the web. I blog here on topics like engineering, photography, and travel.<br />
                </p>

                <h2>News</h2>

                <ul>
                    <li>
                        Hello, world! I finished with a new version of the site. It took about 3 months for me. <br />
                        If you find typos or grammatical inaccuracies on my website, please <a href="/contacts.html">contact me</a>.
                    </li>
                </ul>


                <h2>How to reach me</h2>
                <p class="how-to-reach-links">
                    <a href="mailto:sergei@kolesnikov.se" rel="me">sergei@kolesnikov.se</a>

                    <span>
                        <a href="https://t.me/win0err" rel="noopener noreferrer nofollow me">Telegram</a> +
                        <a href="https://t.me/kolesnikovlive" rel="noopener noreferrer nofollow">Kolesnikov Live Photography Channel</a><!--
                        --><img height=14 src="assets/attention/flag.gif" alt="Important">
                    </span>

                    <a href="https://instagram.com/win0err" rel="noopener noreferrer nofollow me">Instagram</a>

                    <a href="https://twitter.com/win0err" rel="noopener noreferrer nofollow me">Twitter</a>
                    <a href="https://www.facebook.com/win0err" rel="noopener noreferrer nofollow me">Facebook</a>

                    <a href="https://github.com/win0err" rel="noopener noreferrer nofollow me">GitHub</a>
                    <a href="https://www.linkedin.com/in/sergei-kolesnikov/" rel="noopener noreferrer nofollow me">LinkedIn</a>

                    <a href="https://matrix.to/#/@win0err:matrix.org" rel="noopener noreferrer nofollow">[matrix]</a><noscript>: @win0err:matrix.org</noscript>
                    <span>
                        <a href="/twtxt.txt">twtxt.txt file</a>
                        <img height=14 src="assets/attention/new.gif" alt="New!">
                    </span>
                </p>

                <p>
                    PGP-signed contacts are available at <a href="/contacts.html">contacts</a> page.
                    If you want to ask something, just <a href="mailto:sergei@kolesnikov.se">drop me an email</a>. I will usually replay in less than a week.
                </p>

                <p>
                    Please use <a href="https://useplaintext.email/" rel="noopener noreferrer nofollow">plaintext instead of HTML in emails</a>.

                    If possible, encrypt emails using GnuPG/PGP (see <a href="/contacts.html">contacts</a> page for details about using it),
                    attach your public key to the email or a way to get it.
                </p>

                <h2>About this website</h2>

                <p>
                    This website is intended to work on older computers, some of which cannot support the HTTPS protocol, either due to new algorithms or CPU/RAM limitations.
                    Therefore, both HTTP and HTTPS are supported. Feel free to use any of them.
                </p>

                <p>
                    This website is 100% cookie-free. There are some small client-side scripts, but this website works perfect with JavaScript turned off.
                    There are no advertisements on this site. This site is always under construction.
                </p>

                <p>
                    This website is presented in different color schemes.
                    <noscript>You need to have JavaScript enebled to use this feature.</noscript>

                    <span class="theme-switchers" style="display: none;">
                        Choose the color scheme that you like:
                        <a href="#" data-theme="black" class="_dotted">Black</a> (default),
                        <a href="#" data-theme="sky" class="_dotted">Sky</a>, or
                        <a href="#" data-theme="space" class="_dotted">Space</a>.
                    </span>
                </p>

                <h2>Webrings I've joined</h2>

                <p>
                    Webring is one of the simplest and most efficient ways to find content on the Internet.
                    Everyone in webring gets a chance to have their personal site discovered.
                </p>

                <span>This site is a part of the following webrings:&nbsp;</span>
                <ul class="webrings _no-visited">
                    <!-- <li><a href="#">←</a>&nbsp;<a href="https://fediring.net">Fediring</a>&nbsp;<a href="#">→</a></li> -->
                    <!-- <li><a href="#">←</a>&nbsp;<a href="https://webring.xxiivv.com/">XXIIVV</a>&nbsp;<a href="#">→</a></li> -->
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
                    <!-- <li><a href="#">←</a>&nbsp;<a href="https://yesterweb.org/webring/">Yesterweb</a>&nbsp;<a href="#">→</a></li> -->
                </ul>
            </main>

            <hr />
            <?php include 'template/blocks/footer.php'; ?>
        </div>
    </body>
</html>

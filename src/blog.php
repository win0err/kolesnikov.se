<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'template/blocks/meta.php'; ?>
        <title>Sergei Kolesnikov's Blog</title>
    </head>

    <body id="top" class="_theme--black">
        <div class="container">
            <?php include 'template/blocks/header.php'; ?>

            <main>
                <h1>Blog</h1>

                <p>
                    I like blogs. It's about sharing thoughts, opinions, and feelings on the web about anything.<br />
                    If I could bring one thing back to the internet, it would be blogs. Let's start from this one.
                </p>

                <p class="va-middle">
                    <span>I blog here on topics like engineering, photography, and travel.</span>
                    <!-- &nbsp;<img src="/assets/rss.gif" alt="RSS" /> -->
                </p>

                <hr />

                <h2>2022</h2>

                <ul style="list-style-type: none; padding-left: 2rem;">
					<!--
                        - Setting PGP's Web Key Directory on your domain
					    - How to start use PGP encryption
					    - Building static site generator with make util
                    -->
					<li><time datetime="2022-07-12">12/07</time> <a href="/blog/hello-world.html">Hello World!</a></li>
				</ul>
            </main>

            <hr class="styled styled--island" />

            <?php include 'template/blocks/footer.php'; ?>
        </div>
    </body>
</html>

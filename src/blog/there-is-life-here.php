<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include __DIR__ . '/../template/blocks/meta.php'; ?>
        <title>There Is Life Here! — Sergei Kolesnikov's Blog</title>
    </head>

    <body id="top" class="_theme--black">
        <div class="container">
            <?php include __DIR__ . '/../template/blocks/header.php'; ?>

            <main>
                <article class="blog-article">
                    <h1 class="blog-article__title">There Is Life Here!</h1>

                    <time class="blog-article__time" datetime="2022-09-23T17:42:00+03:00">Fri, 23 September 2022</time>

                    <p>
                        I've created my implementation of Conway's Game of Life. Well, there's life on my blog now :-) <br />
                        Click on the image or refresh the page to see the next generation.
                    </p>

                    <p style="user-select: none;">
                        <img id="game_of_life" src="/scripts/game_of_life.php"
                            style="image-rendering: pixelated; cursor: pointer; width: 800px; height: 620px;"
                            alt="Conway's game of life"
                            title="Click on the image or refresh the page to see the next generation" />
                    </p>

                    <script defer>
                        const img = document.getElementById('game_of_life')
                        const imgSrc = img.src

                        img.onclick = (e) => {
                            const urlParams = new URLSearchParams({
                                t: new Date().getTime(),
                                x: Math.floor(event.offsetX / 2),
                                y: Math.floor(event.offsetY / 2),
                            })

                            e.target.src = `${imgSrc}?${urlParams}`
                        }
                    </script>
                </article>


                <hr />

                <h2>Leave a comment</h2>
                <p>
                    To make a comment, please send an email using the button below.
                </p>
                <p>
                    Your e-mail address <strong>won't be shared</strong>.
                    If you don't want your real name to be  published, sign the e-mail with the name you would like to use.
                    If you would like your name to link to a specific URL, please share that as well.
                </p>

                <p><a target="_blank" href="mailto:sergei+comments@kolesnikov.se?subject=<?php echo rawurlencode('RE: There Is Life Here!'); ?>">Comment via email</a></p>

                <p><small>Formatting options: <strong>bold</strong>, <i>italics</i> and plain text lists are allowed.</small></p>

                <h2>Comments</h2>

                <p>No comments yet. Be the first!</p>

                <div style="text-align: center; margin: 2rem 0;">
                    <a href="/blog.html"><img src="/assets/backanim.gif" alt="Go back" width="50" /></a>
                </div>
            </main>

            <hr />

            <?php include __DIR__ . '/../template/blocks/footer.php'; ?>
        </div>
    </body>
</html>

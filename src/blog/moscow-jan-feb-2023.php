<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/../_template/meta.php'; ?>
        <title>Moscow in January and February — Sergei Kolesnikov's Blog</title>
    </head>

    <body id="top" class="_theme--black">
        <div class="container">
            <?php require __DIR__ . '/../_template/header.php'; ?>
			<?php require __DIR__ . '/../_template/utils.php'; ?>

            <main>
                <article class="blog-article">
					<h1 class="blog-article__title">Moscow in January and February</h1>

					<time class="blog-article__time" datetime="2023-10-16T15:51:00+03:00">Mon, 16 October 2023</time>

                    <p>
                        Hello Internet!
                        I take many pictures on both film and digital cameras.
                        The best shots are published on my <a href="/photography.html">photography page</a>.
                        However, a lot of the photos I take remain unpublished or scattered across various social networks.
                        I decided to publish these shots on my blog. You may consider them as sketches of my life.
                    </p>

                    <p>Shot on Nikon F3, Nikon 35/2D and Fomapan 200 film.</p>

                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/frunzenskaya.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/andreevsky-bridge.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/frunzenskaya-embankment.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/moscow-river.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/trubnaya.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/me.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/bears.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/drainpipe.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/yard.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/bus-stop.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/workers.jpg'); ?></p>
                    <p><?php echo get_image_html('blog/moscow-jan-feb-2023/tree.jpg'); ?></p>
                </article>


                <hr />

                <div class="comment-section">
                    <h2>Comments</h2>

                    <p>No comments yet. Be the first!</p>

					<hr class="dashed" />

					<?php require __DIR__ . '/../_template/comment-form.php'; ?>
				</div>

                <div class="back-button-holder">
					<a href="/blog.html"><img src="/assets/backanim.gif" alt="Go back" width="50" /></a>
				</div>
            </main>

            <hr />

            <?php require __DIR__ . '/../_template/footer.php'; ?>
        </div>
    </body>
</html>

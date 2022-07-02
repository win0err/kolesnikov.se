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

                <p>No messages yet. Be the first!</p>
            </main>

            <hr class="styled styled--bow" />
            <?php include 'template/blocks/footer.php'; ?>
        </div>
    </body>
</html>

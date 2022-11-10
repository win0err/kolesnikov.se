<div>
	<h2>Leave a comment <img src="/assets/comment.gif" style="vertical-align: top; margin-top: 3px;" /></h2>

	<form action="/scripts/comment.php"
		method="post"
		target="_blank"
		accept-charset="utf-8"
		class="comment-form">

		<input type="hidden" name="article" value="<?php echo basename(get_included_files()[0], '.php'); ?>" />

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

<!-- Calling the FORM PROCESS php --> 
<?php include('form_process.php'); ?>

<!-- Request Info Pop Up Form -->
<div class="request-container">
	<form id="contact" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
		<div class="close">+</div>
		<h3>Connect with us!</h3>
		<fieldset>
			<input placeholder ="Name" type="text" tabindex="1"  name="name" value="<?php $name?>" required autofocus>
			<span class="error"><?php echo $name_error ?></span>
		</fieldset>
		<fieldset>
			<input placeholder="Email" type="text" tabindex="2" name="email" value="<?php $email?>" required>
			<span class="error"><?php echo $email_error ?></span>
		</fieldset>
		<fieldset>
			<input placeholder="Phone" type="text" tabindex="3" name="phone" value="<?php $phone?>" required>
			<span class="error"><?php echo $phone_error ?></span>
		</fieldset>
		<p>Why would you like to connect with Bloomsbury Beginnings?</p>
		<fieldset>
			<div class="radio-box">
				<input type="radio" name="connect" tabindex="4">
				<p class="radio-text">I'm interested in attending a Bloomsbury Beginnings course or event</p>
			</div>
		</fieldset>
		<fieldset>
			<div class="radio-box">
				<input type="radio" name="connect" tabindex="5">
				<p class="radio-text">I'm interested in supporting or partnering with Boomsbury Beginnings</p>
			</div>
		</fieldset>
		<fieldset>
			<div class="radio-box">
				<input type="radio" name="connect" tabindex="6">
				<p class="radio-text">I have another reason for connecting</p>
			</div>
		</fieldset>
		<p>Is there anything we can help you with today?</p>
		<fieldset>
		<textarea placeholder="Type your message here" tabindex="8" name="message" value="<?php $name?>" type="text" required></textarea>
		</fieldset>
		<fieldset>
			<button class="btn" id="submit-form" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
			</script>
			<span class="success"><?php echo $success; ?></span>
		</fieldset>
	</form>
</div>
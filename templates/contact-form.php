<form id="church-testimonial-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="field-container">
		<input type="text" class="field-input" placeholder="<?php esc_attr_e( 'Your Name', 'k7')?>" id="name" name="name" required>
		<small class="field-msg error" data-error="invalidName"><?php esc_html_e( 'Your Name is Required', 'k7')?></small>
	</div>

	<div class="field-container">
		<input type="email" class="field-input" placeholder="<?php esc_attr_e( 'Your Email', 'k7')?>" id="email" name="email" required>
		<small class="field-msg error" data-error="invalidEmail"><?php esc_html_e( 'The Email address is not valid', 'k7')?></small>
	</div>

	<div class="field-container">
		<textarea name="message" id="message" class="field-input" placeholder="<?php esc_attr_e( 'Your Message', 'k7')?>" required></textarea>
		<small class="field-msg error" data-error="invalidMessage"><?php esc_html_e( 'A Message is Required', 'k7')?></small>
	</div>
	
	<div class="field-container">
		<div>
            <button type="stubmit" class="btn btn-default btn-lg btn-sunset-form">Submit</button>
        </div>
		<small class="field-msg js-form-submission"><?php esc_html_e( 'Submission in process, please wait&hellip;', 'k7')?></small>
		<small class="field-msg success js-form-success"><?php esc_html_e( 'Message Successfully submitted, thank you!', 'k7')?></small>
		<small class="field-msg error js-form-error"><?php esc_html_e( 'There was a problem with the Contact Form, please try again!', 'k7')?></small>
	</div>

	<input type="hidden" name="action" value="submit_testimonial">
	<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("testimonial-nonce") ?>">

</form>
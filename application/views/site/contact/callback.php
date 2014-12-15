<h1 class="section-title-h">Заказать обратный звонок</h1><script type="text/javascript">
	$(document).ready(function(){ 
		$('input[name="phone"]').attr('placeholder','8 (---) --- -- --');
	});
</script>
<?php echo View::factory('site/contact/callbackform', array('captcha' => $captcha))->render(); ?>
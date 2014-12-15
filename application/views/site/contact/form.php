<script type="text/javascript">
	$(document).ready(function(){ 
		$('input[name=phone]').attr('placeholder','8 (---) --- -- --');
		
		$('.btn-s').click(function(e) {
			e.preventDefault();
		
			var name = $('input[name=name]').val();
			var email = $('input[name=email]').val();
			var phone = $('input[name=phone]').val();
			var captcha = $('input[name=captcha]').val();
			var text = $('textarea[name=text]').val();
		
			$('.error').removeClass('error');
		
			$.ajax({
				url: '/feedback/ajax',
				dataType: 'json',
				type: "post",
				data: {name:name, email:email,phone:phone,captcha:captcha,text:text},
				success: function(data) {
					if (!data.captcha) {
						$('input[name=captcha]').addClass('error');
					}
					if (!data.email) {
						$('input[name=email]').addClass('error');
					}
					if (!data.name) {
						$('input[name=name]').addClass('error');
					}
					if (!data.text) {
						$('textarea[name=text]').addClass('error');
					}
					
					if (data.captcha && data.name && data.text && data.email) {
						$('article form').html('Ваша заявка успешно отправлена!');
					}
				}
			});
		});
	});
</script>
<form action="#" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
					Имя<span class="req">*</span>
				</td>
				<td>
					<input type="text" style="width: 340px;" name="name" value="" /></td>
			</tr><tr>
				<td>
					Email<span class="req">*</span>
				</td>
				<td>
					<input type="text" style="width: 340px;" name="email" value="" /></td>
			</tr><tr>
				<td>
					Телефон
				</td>
				<td>
					<input type="text" style="width: 340px;" name="phone" value="" /></td>
			</tr><tr>
				<td>
					Текст сообщения<span class="req">*</span>
				</td>
				<td>
					<textarea style="width: 340px; height: 50px;" name="text"></textarea></td>
			</tr>
			<tr>
				<td>
					Защита от автоматических сообщений
				</td>
				<td>
					<?php
						echo $captcha->render();
					?>
				</td>
			</tr>
			<tr>
				<td>
					Введите слово на картинке<span class="req">*</span>
				</td>
				<td>
					<input type="text" name="captcha" size="30" maxlength="50" value="">
				</td>
			</tr><tr>
			<td colspan="2">
				<input type="submit" name="submit" class="btn1 btn-send btn-s" value="Отправить">
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	$(document).ready(function(){ 
		$('input[name=phone]').attr('placeholder','8 (---) --- -- --');
		
		$('.btn-s').click(function(e) {
			e.preventDefault();
		
			var name = $('input[name=name]').val();
			var phone = $('input[name=phone]').val();
			var captcha = $('input[name=captcha]').val();
		
			$('.error').removeClass('error');
		
			$.ajax({
				url: '/feedback/callback/ajax',
				dataType: 'json',
				type: "post",
				data: {name:name,phone:phone,captcha:captcha},
				success: function(data) {
					if (!data.captcha) {
						$('input[name=captcha]').addClass('error');
					}
					if (!data.name) {
						$('input[name=name]').addClass('error');
					}
					if (!data.phone) {
						$('input[name=phone]').addClass('error');
					}
					if (data.captcha && data.name && data.phone) {
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
					Телефон<span class="req">*</span>
				</td>
				<td>
					<input type="text" style="width: 340px;" name="phone" value="" /></td>
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
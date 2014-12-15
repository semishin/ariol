<script>
    var term52='';
    for (i=26;i<53;i+=13) term52+='<option value="'+i+'">'+i+'</option>';
    var term65='';
    for (i=26;i<66;i+=13) term65+='<option value="'+i+'">'+i+'</option>';

    var amount30='';
    for (i=10000;i<30000;i+=5000) amount30+='<option value="'+i+'">'+i+'</option>';

    var amount50='';
    for (i=10000;i<50001;i+=5000) amount50+='<option value="'+i+'">'+i+'</option>';


    var slider1_50='<div class="lbl">10000<\/div><div class="lbl lbl-mini">20000<\/div><div class="lbl">30000</div><div class="lbl lbl-mini">40000<\/div><div class="lbl">50000<\/div>';
    var slider1_30='<div class="lbl">10000<\/div><div class="lbl lbl-mini">15000<\/div><div class="lbl">20000</div><div class="lbl lbl-mini">25000<\/div><div class="lbl">30000<\/div>';


    var slider2_65='<div class="lbl">26<\/div><div class="slider2-info">ЗАЁМ в размере более 30 000 рублей выдается только на срок 52 и более недель<\/div><div class="lbl">39<\/div><div class="lbl">52<\/div><div class="lbl"><\/div><div class="lbl">65<\/div>';
    var slider2_52='<div class="lbl">26<\/div><div class="slider2-info">ЗАЁМ в размере более 30 000 рублей выдается только на срок 52 и более недель<\/div><div class="lbl"><\/div><div class="lbl"><\/div><div class="lbl"><\/div><div class="lbl">52<\/div>';

</script>
<form class="" method="post" id="calc-form">
<div class="calc-wrap calc-mini calculate">
	<input type="hidden" name="input_amount" class="input_amount" value="0">
	<input type="hidden" name="input_term" class="input_term" value="0">
    <input type="hidden" name="PROPERTY[48][0]" value="www.efin.ru">
	<input type="hidden" name="input_payment" class="input_payment" value="0">
	<h1>Какую сумму денег Вы хотели бы получить?
		<div style="display: inline-block;"><div class="new-select-wrap select-amount">
			<select id="amount">	
                <script> document.write(amount30); </script>
			</select>
		</div>руб.</div>
	</h1>
	<!--<div class="sum">
		
	</div>-->
	<div id="slider1">
        <div class="labels">
        <script> document.write(slider1_30); </script>
        </div>
	</div>
	<div id="slider2">
        <div class="labels">
        <script> document.write(slider2_52); </script>
        </div>
	</div>
	<div class="info-fields">
		<div>
			<span class="lbl-img">Вы берете</span>
			<span id="amount-txt">0</span>&nbsp;руб.
		</div>
		<div>
			<span class="lbl-img">На срок</span>
				<div style="display: inline-block;"><div class="new-select-wrap select-time">

					<select id="time" class="select-new select-new-time">
                        <script> document.write(term52); </script>
					</select>
				</div><span class="select-text-m">недели</span></div>
		
		</div>
		<div>
			<span class="lbl-img">Еженедельный платеж</span>
			<span id="amount-w-txt"></span>&nbsp;руб.
		</div>
	</div>
    <div>
        Вы берете займ впервые в нашей компании? :
        <label><input type="radio"  class="ft" checked id="first" value="1" name="first_time"/>Да</label>
        <label><input type="radio"  class="ft" id="second" value="2" name="first_time"/>Нет</label>
    </div>
	<script>
		$(document).ready(function() {

            $('#first').change(function(){
                $('#slider1 .labels').html(slider1_30);
                $('#amount').html(amount30);
                $('#slider1').slider('option','max',30000);

                $('#slider2 .labels').html(slider2_52);
                $('#time').html(term52);
                $('#slider2').slider('option','max',52);
                correctTA(20000,52);

            });
            $('#second').change(function(){
                $('#slider1 .labels').html(slider1_50);
                $('#amount').html(amount50);
                $('#slider1').slider('option','max',50000)

                $('#slider2 .labels').html(slider2_65);
                $('#time').html(term65);
                $('#slider2').slider('option','max',65);
                //coorectTA(20000,52);
            });

            //Массив значений выплат
			var price_nice = [10000,15000,20000,25000,30000,35000,40000,45000,50000];
			var time_nice = [26,39,52,65];
			
			var pay = [];

            pay['10000-26'] = 680;
            pay['15000-26'] = 1020;
            pay['20000-26'] = 1360;
            pay['25000-26'] = 1700;

            pay['10000-39'] = 554;
            pay['15000-39'] = 831;
            pay['20000-39'] = 1108;
            pay['25000-39'] = 1384;


            pay['10000-52'] = 491;
            pay['15000-52'] = 736;
            pay['20000-52'] = 981;
            pay['25000-52'] = 1226;
            pay['30000-52'] = 1471;
            pay['35000-52'] = 1716;
            pay['40000-52'] = 1961;
            pay['45000-52'] = 2206;
            pay['50000-52'] = 2452;

			pay['30000-65'] = 1585;
            pay['35000-65'] = 1425;
            pay['40000-65'] = 1812;
            pay['45000-65'] = 2038;
            pay['50000-65'] = 2264;
			
			//Значения по умолчанию
			$("#amount").val(20000);
			$('input.input_amount').val(20000);
			$('input.input_term').val(39);
			$('input.input_payment').val(1021);
			$('#amount-w-txt').text(1021);

            var max_amount=30000;
            var max_term=52;
            function correctTA(amount,time){

                time=Math.floor(time/13)*13;
                if (amount>29000 && time<52){
                    time=max_term;
                }

                if (time==max_amount && amount<30000){
                    amount=30000;
                }

                $('#slider1').slider( "value", amount );
                $('#slider2').slider( "value", time );
                $( "#time" ).val(time);
                $('#amount-txt').html(amount);
                $( "#amount" ).val(amount);

                var key = amount+'-'+time;
                console.log(key);
                if(pay[key]>0)
                {
                    $('#amount-w-txt').text(pay[key]);

                    $('input.input_amount').val(amount);
                    $('input.input_term').val(time);
                    $('input.input_payment').val(pay[key]);
                }
            }
			
			var slider1=$( "#slider1" ).slider({
				range: "min",
				value:20000,
				min: 10000,
				max: 30000,
				step: 1000,
				slide: function( event, ui ) {
					
					var price = 20000;
                    price = Math.floor(ui.value/5000)*5000;
					ui.value = price;
					//console.log(ui.value+'##'+price);
					
					if(contains(price_nice,ui.value))
					{
						$( "#amount" ).val(price);
						$( "#amount-txt" ).text(ui.value);
		
						if(ui.value>29000 && $("#time" ).val()<52)
						{
							$('div.slider2-info').show();
							$("#slider2").slider("value",52);
							$( "#time" ).val(52);
						}
						else
						{
							$('div.slider2-info').hide();
						}
                        correctTA(ui.value,$( "#time" ).val());
					}
				},
				change: function( event, ui ){
					
				}
			});
			$( "#amount" ).val($( "#amount" ).val());
			$( "#amount-txt" ).text($( "#amount" ).val());
			$( "body").on('change', '#amount', function(){
                correctTA($(this).val(),$( "#time" ).val());
			});
	
			var slider2=$( "#slider2" ).slider({
				range: "min",
				value:39,
				min: 26,
				max: 52,
				step: 1,
				slide: function( event, ui ) {
                    correctTA($( "#amount" ).val(),ui.value);
				}
			});
			$( "#time" ).val( $( "#slider2" ).slider( "value" ) );
			$( "body").on('change', '#time', function(){//alert()
				var v = $(this).val();
                correctTA($( "#amount" ).val(),v);
			})

            $('.btn1').click(function(e){
                if (!$('input[name="agree"]').prop('checked')){
                    showMessage('Требуется согласие на обработку персональных данных');
                    e.preventDefault();
                    return false;
                }
                if ($('[name=region] :selected').val() == ''){
                    showMessage('Выберите регион');
                    e.preventDefault();
                    return false;
                }
                if ($('#name').val()==''){
                    showMessage('Введите имя');
                    e.preventDefault();
                    return false;
                }
                if ($('#name2').val()==''){
                    showMessage('Введите отчество');
                    e.preventDefault();
                    return false;
                }
                if ($('#surname').val()==''){
                    showMessage('Введите фамилию');
                    e.preventDefault();
                    return false;
                }
                if ($('#bd').val()==''){
                    showMessage('Введите дату рождения');
                    e.preventDefault();
                    return false;
                }
                if ($('#phone').val()==''){
                    showMessage('Введите телефон');
                    e.preventDefault();
                    return false;
                }
				
				$.ajax({
					type: "post",
					url: "/application/add",
					dataType: "json",
					data: $('form').serialize(),
					success: function(data) {
					console.log(data);
						if (data.exists) {
							showMessage('Заявка с данным номером телефона уже отправлена');
						} else if (data.bad_region) {
							showMessage('Извините, но в данный моменты мы не обслуживаем Ваш регион проживания');
						} else {
							window.location.href = '/thanks/';
							/*showMessage('УВАЖАЕМЫЙ ' + data.username +
								' БЛАГОДАРИМ ВАС ЗА ОСТАВЛЕННУЮ ЗАЯВКУ. В БЛИЖАЙЩЕЕ ВРЕМЯ МЫ СВЯЖЕМСЯ С ВАМИ ДЛЯ УТОЧНЕНИЯ ДЕТАЛЕЙ.');*/
						}
					}
				});

				return false;
            });
			
		});

		function contains(a, obj) {
			for (var i = 0; i < a.length; i++) {
				if (a[i] === obj) {
					return true;
				}
			}
			return false;
		}
	</script>

</div>
<br/>
<input type="hidden" name="secret_key2" value="">
<input type="hidden" name="PROPERTY[12][0]" value="" class="input_amount">
<input type="hidden" name="PROPERTY[13][0]" value="" class="input_term">
<input type="hidden" name="PROPERTY[14][0]" value="" class="input_payment">

<input type="hidden" name="PROPERTY[48][0]" value="www.efin.ru" >
<input type="hidden" name="PROPERTY[49][0]" value="">
<input type="hidden" name="PROPERTY[50][0]" value="" >

<div class="string-form">
    <div class="cell-form"><label for="surname">Фамилия <span class="starrequired">*</span></label></div>
    <div class="cell-form"><input type="text" name="PROPERTY[7][0]" id="surname" value=""></div>
</div>
<div class="string-form">
    <div class="cell-form"><label for="name">Имя <span class="starrequired">*</span></label></div>
    <div class="cell-form"><input type="text" name="PROPERTY[8][0]" id="name" value=""></div>
</div>
<div class="string-form">
    <div class="cell-form"><label for="name2">Отчество <span class="starrequired">*</span></label></div>
    <div class="cell-form"><input type="text" name="PROPERTY[9][0]" id="name2" value=""></div>
</div>

<div class="string-form">
    <div class="cell-form"><label for="bd">Дата рождения <span class="starrequired">*</span></label></div>
    <div class="cell-form"><input type="text" id="bd" name="PROPERTY[25][0]" value="" class="inp-date"></div>
</div>
<div class="string-form">
    <div class="cell-form"><label for="phone">Телефон <span class="starrequired">*</span></label></div>
    <div class="cell-form"><input type="text" id="phone" name="PROPERTY[10][0]" value="" class="inp-phone" placeholder="8 (---) --- -- --"></div>
</div>

<div class="string-form">
    <div class="cell-form"><label for="surname">Регион Вашего фактического проживания<span class="starrequired">*</span></label></div>
    <div class="cell-form">

        <select style="width: 100%" data-placeholder="-- Выбрать регион --" class="chosen-select" tabindex="2" name="region">
			<option value=""></option>
			<option value="6100000000000">Ростов на Дону и область</option>
			<option value="5200000000000">Н. Новгород и область</option>
			<option value="4800000000000">Липецк и область</option>
			<option value="3600000000000">Воронеж</option>
			<option value="7100000000000">Тула и область</option>
			<option value="6200000000000">Рязань и область</option>
			<optgroup label="Другой регион">
				<option value="0100000000000">Республика Адыгея </option>
				<option value="0200000000000">Республика Башкортостан</option>
				<option value="0300000000000">Республика Бурятия</option>
				<option value="0400000000000">Республика Алтай</option>
				<option value="0500000000000">Республика Дагестан</option>
				<option value="0600000000000">Республика Ингушетия</option>
				<option value="0700000000000">Кабардино-Балкарская Республика</option>
				<option value="0800000000000">Республика Калмыкия</option>
				<option value="0900000000000">Карачаево-Черкесская Республика</option>
				<option value="1000000000000">Республика Карелия</option>
				<option value="1100000000000">Республика Коми</option>
				<option value="1200000000000">Республика Марий Эл</option>
				<option value="1300000000000">Республика Мордовия</option>
				<option value="1400000000000">Республика Саха (Якутия)</option>
				<option value="1500000000000">Республика Северная Осетия-Алания</option>
				<option value="1600000000000">Республика Татарстан</option>
				<option value="1700000000000">Республика Тыва</option>
				<option value="1800000000000">Удмуртская Республика</option>
				<option value="1900000000000">Республика Хакасия</option>
				<option value="2000000000000">Чеченская Республика</option>
				<option value="2100000000000">Чувашская Республика</option>
				<option value="2200000000000">Алтайский край</option>
				<option value="2300000000000">Краснодарский край</option>
				<option value="2400000000000">Красноярский край</option>
				<option value="2500000000000">Приморский край</option>
				<option value="2600000000000">Ставропольский край</option>
				<option value="2700000000000">Хабаровский край</option>
				<option value="2800000000000">Амурская область</option>
				<option value="2900000000000">Архангельская область и Ненецкий ао</option>
				<option value="3000000000000">Астраханская область</option>
				<option value="3100000000000">Белгородская область</option>
				<option value="3200000000000">Брянская область</option>
				<option value="3300000000000">Владимирская область</option>
				<option value="3400000000000">Волгоградская область</option>
				<option value="3500000000000">Вологодская область</option>
				<option value="3700000000000">Ивановская область</option>
				<option value="3800000000000">Иркутская область</option>
				<option value="3900000000000">Калининградская область</option>
				<option value="4000000000000">Калужская область</option>
				<option value="4100000000000">Камчатский край</option>
				<option value="4200000000000">Кемеровская область</option>
				<option value="4300000000000">Кировская область</option>
				<option value="4400000000000">Костромская область</option>
				<option value="4500000000000">Курганская область</option>
				<option value="4600000000000">Курская область</option>
				<option value="4700000000000">Ленинградская область</option>
				<option value="4900000000000">Магаданская область</option>
				<option value="5000000000000">Московская область</option>
				<option value="5100000000000">Мурманская область</option>
				<option value="5300000000000">Новгородская область</option>
				<option value="5400000000000">Новосибирская область</option>
				<option value="5500000000000">Омская область</option>
				<option value="5600000000000">Оренбургская область</option>
				<option value="5700000000000">Орловская область</option>
				<option value="5800000000000">Пензенская область</option>
				<option value="5900000000000">Пермский край</option>
				<option value="6000000000000">Псковская область</option>
				<option value="6300000000000">Самарская область</option>
				<option value="6400000000000">Саратовская область</option>
				<option value="6500000000000">Сахалинская область</option>
				<option value="6600000000000">Свердловская область</option>
				<option value="6700000000000">Смоленская область</option>
				<option value="6800000000000">Тамбовская область</option>
				<option value="6900000000000">Тверская область</option>
				<option value="7000000000000">Томская область</option>
				<option value="7200000000000">Тюменская область</option>
				<option value="7300000000000">Ульяновская область</option>
				<option value="7400000000000">Челябинская область</option>
				<option value="7500000000000">Забайкальский край</option>
				<option value="7600000000000">Ярославская область</option>
				<option value="7700000000000">город Москва</option>
				<option value="7800000000000">Санкт-Петербург</option>
				<option value="7900000000000">Еврейская автономная область</option>
				<option value="8600000000000">Ханты-Мансийский автономный округ-Югра</option>
				<option value="8700000000000">Чукотский АО</option>
				<option value="8900000000000">Ямало-Ненецкий автономный округ</option>
				<option value="9100000000000">Республика Крым</option>
				<option value="9200000000000">город Севастополь</option>
			</optgroup>
		</select>

    </div>
</div>

<div class="string-form">
    <div class="cell-form"><label for="email">E-mail (не обязательно)</label></div>
    <div class="cell-form">
        <input type="text" id="email" name="PROPERTY[11][0]" value="" class="inp-email">
        <small style="font-size: 11px; color: #606060;">Будем вам очень признательны, если Вы заполните строку e-mail. Это позволит Вам будь в курсе событий и одним из первых узнавать о новых тарифах и акциях Ё-FINANCE.</small>
    </div>
</div>

<div class="string-form">
    <input type="checkbox" id="agree" name="agree" value="1">&nbsp;Выражаю свое согласие на обработку в соответствии с Федеральным законом «О персональных данных» любых имеющихся в распоряжении ООО «ЕМР») моих персональных данных (в том числе: ФИО, адрес, паспортные данные), а также информации обо мне, о моих заемных обязательствах перед ООО «ЕМР» и об их исполнении, а также на передачу третьим лицам - в Бюро кредитных историй в соответствии с Федеральным законом «О кредитных историях», а также лицу, которому ООО «ЕМР» может уступить права требования из договора займа или поручить взыскание просроченной задолженности (в том числе коллекторам - в случае нарушения мною условий договора займа).
</div>

<button type="submit" class="btn1 " style="width: auto; max-width: auto; padding: 3px 15px; font-size: 27px; margin-top: 20px !important;">Отправить заявку</button>
</form>
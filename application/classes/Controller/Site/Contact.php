<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Contact extends Controller_Site
{
    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');
		
		$this->template->captcha = Captcha::instance();
		
		$this->template->s_title = 'Контакты';
		$this->template->s_keywords = 'Россия, Центральная Россия, Поволжье, пфо, приволжье, кредиты в приволжье, кредиты в поволжье, кредиты в россии,  кредиты Тула, кредит Пенза, займы Саратов, займы нижний, займы нижний новгород, кредит липецк, кредит воронеж.';
    }
	
	public function action_callback()
	{
		$this->set_metatags_and_content('', 'page');
		
		$this->template->captcha = Captcha::instance();
		
		$this->template->s_keywords = 'позвонить в мфо, закзать деньги, заказать наличные, наличные с доставкой на дом';
		$this->template->s_title = 'Заказать обратный звонок';
	}
	
	public function action_ajax()
    {
		$captcha = $this->request->post('captcha');
		$captcha_valid = Captcha::valid($captcha);
		
		$name = $this->request->post('name');
		$name_valid = !!$name;
		
		$text = $this->request->post('text');
		$text_valid = !!$text;
			
		$phone = $this->request->post('phone');
		
		$email = $this->request->post('email');
		$email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
		
		if ($email_valid && $name_valid && $captcha_valid && $text_valid) {
			$feedback = ORM::factory('Feedback');
			$feedback->name = $name;
			$feedback->email = $email;
			$feedback->phone = $phone;
			$feedback->text = $text;
			$feedback->save();
		}
		
		exit(
			json_encode(array(
				'captcha' => $captcha_valid,
				'email' => $email_valid,
				'text' => $text_valid,
				'name' => $name_valid
			))
		);
    }
	
	public function action_callbackajax()
    {
		$captcha = $this->request->post('captcha');
		$captcha_valid = Captcha::valid($captcha);
		
		$name = $this->request->post('name');
		$name_valid = !!$name;
		
		$phone = $this->request->post('phone');
		$phone_valid = !!$phone;
		
		if ($phone_valid && $name_valid && $captcha_valid) {
			$callback = ORM::factory('Callback');
			$callback->name = $name;
			$callback->phone = $phone;
			$callback->save();
		}
		
		exit(
			json_encode(array(
				'captcha' => $captcha_valid,
				'phone' => $phone_valid,
				'name' => $name_valid
			))
		);
    }
}

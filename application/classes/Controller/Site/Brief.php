<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Brief extends Controller_Site
{
    public function action_add()
    {
        $this->set_metatags_and_content('', 'page');
        $this->template->set_layout('site/global_inner');
        if ($this->request->is_ajax()) {
            $email = $this->request->post('email');
            $name = $this->request->post('name');
            $phone = $this->request->post('phone');
            $text = $this->request->post('text');

            $brief = ORM::factory('Brief');
            $brief->email = $email;
            $brief->name = $name;
            $brief->phone = $phone;
            $brief->text = $text;
            $brief->save();

 /* ?> $admin_message = View::factory('site/review/message', array(
                'prod' => ORM::factory('Product')->fetchProdById($prod_id),
                'name' => $name,
                'email' => $email,
                'content' => $content
            ))->render();
 */

     //       Email::send('tripshopby@gmail.com','info@trip-shop.by', 'Новый отзыв', $admin_message, true);

            exit(json_encode(array()));
        }
        $this->forward_404();
    }
}
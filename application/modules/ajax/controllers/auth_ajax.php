<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_ajax extends Ajax_Controller {

    function dialog_login()
    {
        $this->response->dialog(array(
            'title' => 'Login',
            'body' => Modules::run('auth/_pagelet_login')
        ));
        $this->response->send();
    }
}

/* End of file auth_ajax.php */
/* Location: ./application/modules/ajax/controllers/auth_ajax.php */
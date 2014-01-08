<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_ajax extends Ajax_Controller {

    /**
     * Launch dialog that contains a specific Ion auth page content
     */
    function ion_auth_dialog($page)
    {
        if (in_array($page, array(
            'login',
            'change_password',
            'forgot_password'
        )))
        {
            $this->response->dialog(array(
                'body' => Modules::run('auth/' . $page)
            ));
        }
        $this->response->send();
    }
}

/* End of file auth_ajax.php */
/* Location: ./application/modules/ajax/controllers/auth_ajax.php */
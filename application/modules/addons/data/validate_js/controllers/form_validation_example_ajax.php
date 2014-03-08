<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_validation_example_ajax extends Ajax_Controller {

    /**
     * Display form validation example in dialog
     */
    function dialog_example()
    {
        $this->response->dialog(array(
            'title' => 'Form validation example',
            'body' => Modules::run('form_validation_example/_pagelet_example_form')
        ));
        $this->response->send();
    }

    /**
     * Fake submit handler
     * Show error if email is admin@admin.com
     * Otherwise show success message
     */
    function submit()
    {
        if ($this->input->post('email') == 'admin@admin.com')
        {
            $this->response->script('CIS.Form.showMessage($(this), "Email already used!", true)');
        }
        else
        {
            $this->response->script('CIS.Form.showMessage($(this), "Submit successfully!")');
        }
        $this->response->send();
    }
}

/* End of file form_validation_example_ajax.php */
/* Location: ./application/modules/form_validation_example/controllers/form_validation_example_ajax.php */
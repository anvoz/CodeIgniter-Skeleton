<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_validation_example extends MY_Controller {

    public function index()
    {
        $this->load->library('template');

        $this->template->set_title('Form validation example');

        $this->template->load_view('form_validation_example/example_form', array(
            'pagelet_example_form' => Modules::run('form_validation_example/_pagelet_example_form')
        ));
    }

    public function _pagelet_example_form()
    {
        $this->load->helper('form');

        $data['form_name'] = 'example_form';

        // List all fields of the example form
        $data['form_fields'] = array(
            array(
                'id' => 'name',
                'name' => 'name',
                'display' => 'Name',
                'type' => 'text',
                'rules' => 'required|max_length[10]',
            ),
            array(
                'id' => 'email',
                'name' => 'email',
                'display' => 'Email',
                'type' => 'text',
                'rules' => 'required|valid_email',
            ),
            array(
                'id' => 'password',
                'name' => 'password',
                'display' => 'Password',
                'type' => 'password',
                'rules' => 'required|min_length[6]|max_length[10]',
            ),
            array(
                'id' => 'password_confirm',
                'name' => 'password_confirm',
                'display' => 'Password confirm',
                'type' => 'password',
                'rules' => 'required|matches[password]',
            ),
        );
        // Example form HTML
        $this->load->view('form_validation_example/pagelet_example_form', $data);

        // Form validation rules
        $rules = array();
        foreach ($data['form_fields'] as $form_field)
        {
            $rules[] = array(
                'name' => $form_field['name'],
                'display' => $form_field['display'],
                'rules' => $form_field['rules'],
            );
        }

        // Load script to setup form validation plugin
        $form_validation_js = assets_url('js/formvalidation.js');
        $json_rules = json_encode($rules);
        $script = <<< JS
$(function() {
    CIS.Script.require('{$form_validation_js}', function() {
        CIS.Form.validation('{$data['form_name']}', {$json_rules});
    });
});
JS;
        $this->_load_script($script);
    }
}

/* End of file form_validation_example.php */
/* Location: ./application/modules/form_validation_example/controllers/form_validation_example.php */
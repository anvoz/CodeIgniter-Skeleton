<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skeleton extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/skeleton
     *	- or -
     * 		http://example.com/index.php/skeleton/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/skeleton/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->library('template');

        $this->template->set_title('Welcome');
        $this->template->add_js('modules/skeleton.js');
        $this->template->add_css('modules/skeleton.css');

        $this->template->load_view('welcome_message');
    }

    public function _pagelet_sidebar()
    {
        $this->load->view('pagelet_sidebar');
    }

    public function _pagelet_theme()
    {
        $this->load->view('pagelet_theme');

        $script = <<< JS
$(function() {
    $('a[href="#"]:not([data-toggle], [rel="async"])').click(function() {
        return false;
    });
    $('form:not([action])').submit(function() {
        return false;
    });
});
JS;
        $this->_load_script($script);
    }

    public function _pagelet_javascript()
    {
        $this->load->view('pagelet_javascript');
    }

    public function _pagelet_ajax()
    {
        $test_message = 'Script executed!';
        $this->load->view('pagelet_ajax', array(
            'test_message' => $test_message,
        ));

        $script = <<< JS
$(function() {
    console.log('$test_message');
});
JS;
        $this->_load_script($script);
    }
}

/* End of file skeleton.php */
/* Location: ./application/modules/skeleton/controllers/skeleton.php */
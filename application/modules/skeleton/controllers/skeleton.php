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

        $this->load->helper('file');
        $skeleton_data = array();
        if ($skeleton_json = read_file(APPPATH . 'modules/skeleton/skeleton.json'))
        {
            $skeleton_data = json_decode($skeleton_json, TRUE);
        }
        if (empty($skeleton_data))
        {
            show_error('Failed to load skeleton.json');
        }

        $this->template->load_view('index', array(
            'pagelet_sidebar' => Modules::run('skeleton/_pagelet_sidebar', $skeleton_data),
            'skeleton_data' => $skeleton_data
        ));
    }

    public function _pagelet_sidebar($skeleton_data)
    {
        $this->load->view('pagelet_sidebar', array(
            'skeleton_data' => $skeleton_data,
        ));
    }
}

/* End of file skeleton.php */
/* Location: ./application/modules/skeleton/controllers/skeleton.php */
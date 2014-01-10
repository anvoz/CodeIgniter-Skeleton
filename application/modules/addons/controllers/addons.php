<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addons extends MY_Controller {

    public function index()
    {
        $this->load->library('template');

        $this->template->set_title('Add-ons');
        $this->template->add_js('modules/skeleton.js');
        $this->template->add_css('modules/skeleton.css');

        $addons = $this->load->config('addons/addons', TRUE);
        $data = array(
            'addons' => $addons,
            'pagelet_sidebar' => Modules::run('addons/_pagelet_sidebar', $addons),
        );
        foreach ($addons['list'] as $addon_key => $addon_name)
        {
            $addon = $this->load->config('addons/addon_' . $addon_key, TRUE, TRUE);
            $data['pagelet_content'][$addon_key] = $this->load->view('addons/pagelet_addon', array(
                'addon_key' => $addon_key,
                'addon' => $addon,
                'pagelet_copy_files' => (empty($addon['files'])) ? '' : Modules::run('addons/_pagelet_files', $addon['files']),
            ), TRUE);
        }

        $this->template->load_view('index', $data);
    }

    public function _pagelet_files($files)
    {
        $this->load->view('pagelet_files', array(
            'files' => $files,
        ));
    }

    public function _pagelet_sidebar($addons)
    {
        $this->load->view('pagelet_sidebar', array(
            'addons' => $addons,
        ));
    }
}

/* End of file addons.php */
/* Location: ./application/modules/addons/controllers/addons.php */
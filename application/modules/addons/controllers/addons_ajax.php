<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addons_ajax extends Ajax_Controller {

    function action($action, $addon_key)
    {
        $addon = $this->load->config('addons/addon_' . $addon_key, TRUE, TRUE);
        if ( ! empty($addon['files']))
        {
            switch ($action)
            {
                case 'copy':
                    $title = 'Copied files';
                    break;
                case 'delete':
                    $title = 'Deleted files';
                    break;
            }
            foreach ($addon['files'] as $file => &$file_data)
            {
                $status = FALSE;
                switch ($action)
                {
                    case 'copy':
                        $status = @copy(
                            APPPATH . 'modules/addons/data/' . $addon_key . '/' . $file,
                            $file_data['dest'] . '/' . $file
                        );
                        break;
                    case 'delete':
                        $status = @unlink($file_data['dest'] . '/' . $file);
                        break;
                }
                $file_data['status'] = $status;
            }
            $this->response->alert(
                $title,
                Modules::run('addons/_pagelet_files', $addon['files'])
            );
        }
        $this->response->send();
    }
}

/* End of file addons_ajax.php */
/* Location: ./application/modules/addons/controllers/addons_ajax.php */
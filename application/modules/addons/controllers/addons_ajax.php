<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addons_ajax extends Ajax_Controller {

    function action($action, $addon_key)
    {
        $addon = $this->load->config('addons/addon_' . $addon_key, TRUE, TRUE);
        if ( ! empty($addon['files']))
        {
            foreach ($addon['files'] as $file => &$file_data)
            {
                $status = FALSE;

                $file_parts = explode('/', $file);
                $file_name = (count($file_parts) > 1) ?
                    end($file_parts) : $file_parts[0];

                switch ($action)
                {
                    case 'copy':
                        $status = copy(
                            APPPATH . 'modules/addons/data/' . $addon_key . '/' . $file,
                            $file_data['dest'] . '/' . $file_name
                        );
                        break;
                    case 'delete':
                        $status = @unlink($file_data['dest'] . '/' . $file_name);
                        break;
                }
                $file_data['status'] = $status;
            }

            switch ($action)
            {
                case 'copy':
                    $title = 'Copied files';
                    break;
                case 'delete':
                    $title = 'Deleted files';
                    break;
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
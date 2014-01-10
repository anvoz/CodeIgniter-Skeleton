<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addons_ajax extends Ajax_Controller {

    function action($action, $addon_key)
    {
        $addon = $this->load->config('addons/addon_' . $addon_key, TRUE, TRUE);
        if ( ! empty($addon['files']))
        {
            // Copy / delete files
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

            // Add / remove skeleton
            if ( ! empty($addon['skeleton']))
            {
                $skeleton_json_path = APPPATH . 'modules/skeleton/skeleton.json';
                if ($skeleton_json = @file_get_contents($skeleton_json_path))
                {
                    $skeleton_data = json_decode($skeleton_json, TRUE);
                }
                if ( ! empty($skeleton_data))
                {
                    switch ($action)
                    {
                        case 'copy':
                            $skeleton_data = array_merge($skeleton_data, $addon['skeleton']);
                            break;
                        case 'delete':
                            $parent = key($addon['skeleton']);
                            $child = key($addon['skeleton'][$parent]);
                            unset($skeleton_data[$parent][$child]);
                            if (empty($skeleton_data[$parent]))
                            {
                                unset($skeleton_data[$parent]);
                            }
                            break;
                    }
                    $skeleton_json = json_encode($skeleton_data);
                    file_put_contents($skeleton_json_path, $skeleton_json);
                }
            }

            // Set dialog title
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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addons_ajax extends Ajax_Controller {

    function action($action, $addon_key)
    {
        $addon = $this->load->config('addons/addon_' . $addon_key, TRUE, TRUE);
        if ( ! empty($addon['files']))
        {
            $this->load->helper('file');

            // Copy / delete files
            foreach ($addon['files'] as $file => &$file_data)
            {
                $file_data['status'] = $this->_file_action($action, $addon_key . '/' . $file, $file_data);
            }

            // Add / remove skeleton
            if ( ! empty($addon['skeleton']))
            {
                $skeleton_json_path = APPPATH . 'modules/skeleton/skeleton.json';
                if ($skeleton_json = read_file($skeleton_json_path))
                {
                    $skeleton_data = json_decode($skeleton_json, TRUE);
                }
                if ( ! empty($skeleton_data))
                {
                    $skeleton_data = $this->_skeleton_action($action, $addon['skeleton'], $skeleton_data);
                    $skeleton_json = json_encode($skeleton_data);
                    write_file($skeleton_json_path, $skeleton_json);
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

    function _file_action($action, $file, $file_data)
    {
        $status = FALSE;

        $file_parts = explode('/', $file);
        $file_name = (count($file_parts) > 1) ?
            end($file_parts) : $file_parts[0];

        $file_dest_path = $file_data['dest'] . '/' . $file_name;

        switch ($action)
        {
            case 'copy':
                // Make dir if not existed
                if ( ! file_exists($file_data['dest']))
                {
                    mkdir($file_data['dest'], 0777, TRUE);
                }
                // Not overwrite existed file
                if ( ! file_exists($file_dest_path))
                {
                    $status = copy(
                        APPPATH . 'modules/addons/data/' . $file,
                        $file_dest_path
                    );
                }
                break;
            case 'delete':
                if ($status = @unlink($file_dest_path))
                {
                    // Delete empty directories
                    $delete_path = rtrim($file_data['dest'], '/');
                    while (@rmdir($delete_path))
                    {
                        $delete_path = substr($delete_path, 0, strrpos($delete_path, '/'));
                    }
                }
                break;
        }

        return $status;
    }

    function _skeleton_action($action, $skeleton, $skeleton_data)
    {
        $key = key($skeleton);
        switch ($action)
        {
            case 'copy':
                $skeleton_data[$key] = array_merge(
                    (isset($skeleton_data[$key])) ? $skeleton_data[$key] : array(),
                    $skeleton[$key]
                );
                break;
            case 'delete':
                $sub_key = key($skeleton[$key]);
                unset($skeleton_data[$key][$sub_key]);
                if (empty($skeleton_data[$key]))
                {
                    unset($skeleton_data[$key]);
                }
                break;
        }
        return $skeleton_data;
    }
}

/* End of file addons_ajax.php */
/* Location: ./application/modules/addons/controllers/addons_ajax.php */
<?php

class Mock_MY_Controller extends MY_Controller {

    public function _load_script($script)
    {
        ob_start();
        parent::_load_script($script);
        return ob_get_clean();
    }
}
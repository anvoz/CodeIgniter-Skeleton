<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class JS {

    private $_js = array();

    /**
     * Add js file path
     *
     * @access  public
     * @param   string  $js
     * @return  void
     */
    public function add($js) {
        $this->_js[$js] = $js;
    }
    
    public function get() {
        $js = array();
        foreach ($this->_js as $js_file) {
            $js[] = '<script src="' . assets_url('js/' . $js_file) . '"></script>';
        }
        return implode('', $js);
    }
}

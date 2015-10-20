<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class CSS {

    protected $_css = array();

    /**
     * Add css file path
     *
     * @access  public
     * @param   string  $css
     * @return  void
     */
    public function add($css) {
        $this->_css[$css] = $css;
    }
    
    public function get() {
        $css = array();
        foreach ($this->_css as $css_file) {
            $css[] = '<link rel="stylesheet" href="' . assets_url('css/' . $css_file) . '">';
        }
        return implode('', $css);
    }
}

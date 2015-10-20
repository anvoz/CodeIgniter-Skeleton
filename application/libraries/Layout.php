<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Layout {

    protected $_layout;

    /**
     * Set page layout view (1 column, 2 column...)
     *
     * @access  public
     * @param   string  $layout
     * @return  void
     */
    public function set($_layout) {
        $this->_layout = $_layout;
    }
    
    public function get() {
        if (empty($this->_layout)) {
            $this->_layout = 'default';
        }
        return $this->_layout;
    }
}

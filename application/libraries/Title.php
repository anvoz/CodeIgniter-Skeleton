<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Title {

    protected $_brand_name = 'CodeIgniter Skeleton';
    protected $_title_separator = ' - ';
    protected $_title = FALSE;

    /**
     * Set page title
     *
     * @access  public
     * @param   string  $title
     * @return  void
     */
    public function set($title) {
        $this->_title = $title;
    }

    public function get() {
        if (empty($this->_title)) {
            $this->_title = $this->_brand_name;
            ;
        } else {
            $this->_title = $this->_title . $this->_title_separator . $this->_brand_name;
        }
        return $this->_title;
    }

}

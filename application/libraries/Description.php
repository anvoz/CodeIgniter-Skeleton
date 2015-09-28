<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Description {

    protected $_description = FALSE;

    /**
     * Set page description
     *
     * @access  public
     * @param   string  $description
     * @return  void
     */
    public function set($description) {
        $this->_description = $description;
    }

    public function get() {
        if (empty($this->_description)) {
            $this->_description = '';
        }
        return $this->_description;
    }

}

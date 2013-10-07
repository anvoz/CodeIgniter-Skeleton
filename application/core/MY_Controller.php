<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

// Load the MX_Controller class
require APPPATH . 'third_party/MX/Controller.php';

class MY_Controller extends MX_Controller {

    private $_ci;

    public function __construct()
    {
        parent::__construct();

        $this->_ci =& get_instance();

        // Set an alias of ion_auth library
        $this->_ci->auth =& $this->_ci->ion_auth;
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Handle ajax request from CIS.Ajax.request() from client
 */
class Response {

    private $_data;

    /**
	 * Add callback Javascript
	 *
	 * @access	public
	 * @param	string	$script
	 * @return	void
	 */
    public function script($script)
    {
        $this->_data['scripts'][] = $script;
    }

    /**
	 * Send response to CIS.Ajax.response()
	 *
	 * @access	public
	 * @return	void
	 */
    public function send()
    {
        echo json_encode($this->_data);
        exit;
    }
}

/* End of file Response.php */
/* Location: ./application/libraries/Response.php */
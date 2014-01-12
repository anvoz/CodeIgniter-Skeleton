<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Dialog Library
 * Generate HTML for Bootstrap's Modal dialog
 *
 * https://github.com/anvoz/CodeIgniter-Skeleton
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

class Dialog {

    private $_ci;
    private $_data;

    function __construct()
    {
        $this->_ci =& get_instance();
    }

    /**
     * Set dialog id
     *
     * @access  public
     * @param   string  $id
     * @return  void
     */
    public function set_id($id) 
    {
        $this->_data['id'] = $id;
    }

    /**
     * Set dialog title
     *
     * @access  public
     * @param   string  $title
     * @return  void
     */
    public function set_title($title) 
    {
        $this->_data['title'] = $title;
    }

    /**
     * Set dialog body
     *
     * @access  public
     * @param   string  $body
     * @return  void
     */
    public function set_body($body) 
    {
        $this->_data['body'] = $body;
    }

    /**
     * Set dialog content
     *
     * @access  public
     * @param   string  $content
     * @return  void
     */
    public function set_content($content) 
    {
        $this->_data['content'] = $content;
    }

    /**
     * Add dialog button
     *
     * @access  public
     * @param   string  $button
     * @param   string  $label
     * @return  void
     */
    public function add_button($type, $label = '')
    {
        $button = '';
        switch ($type)
        {
            case 'ok':
                $label = ( ! empty($label)) ? $label : 'OK';
                $button = '<button class="btn btn-primary" type="button" data-dismiss="modal">' . $label . '</button>';
                break;
            case 'close':
                $label = ( ! empty($label)) ? $label : 'Close';
                $button = '<button class="btn btn-default" type="button" data-dismiss="modal">' . $label . '</button>';
                break;
            case 'submit':
                $label = ( ! empty($label)) ? $label : 'Submit';
                $button = '<button class="btn btn-primary" type="submit">' . $label . '</button>';
                break;
        }

        if ( ! empty($button))
        {
            $this->_data['buttons'][] = $button;
        }
    }

    /**
     * Set dialog footer
     *
     * @access  public
     * @param   string  $footer
     * @return  void
     */
    public function set_footer($footer) 
    {
        $this->_data['footer'] = $footer;
    }

    /**
     * Get dialog HTML
     *
     * @access  public
     * @return  string
     */
    public function html()
    {
        if (empty($this->_data['id']))
        {
            $this->_data['id'] = 'dialog-' . mt_rand(1000000, 9999999);
        }
        return $this->_ci->load->view('dialog', $this->_data, TRUE);
    }
}

/* End of file Dialog.php */
/* Location: ./application/libraries/Dialog.php */
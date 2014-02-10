<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Dialog Library
 * Generate HTML for Bootstrap's Modal dialog
 */

class Dialog {

    private $_ci;
    protected $data;

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
        $this->data['id'] = $id;
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
        $this->data['title'] = $title;
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
        $this->data['body'] = $body;
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
        $this->data['content'] = $content;
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
            $this->data['buttons'][] = $button;
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
        $this->data['footer'] = $footer;
    }

    /**
     * Set dialog size
     *
     * @access  public
     * @param   string  $size
     * @return  void
     */
    public function set_size($size)
    {
        switch ($size)
        {
            case 'small':
                $this->data['size'] = 'modal-sm';
                break;
            case 'large':
                $this->data['size'] = 'modal-lg';
                break;
        }
    }

    /**
     * Get dialog HTML
     *
     * @access  public
     * @return  string
     */
    public function html()
    {
        if (empty($this->data['id']))
        {
            $this->data['id'] = 'dialog-' . mt_rand(1000000, 9999999);
        }
        return $this->_ci->load->view('dialog', $this->data, TRUE);
    }
}

/* End of file Dialog.php */
/* Location: ./application/libraries/Dialog.php */
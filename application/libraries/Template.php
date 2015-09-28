<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Template Library
 * Handle masterview and views within masterview
 */

class Template {

    private $_ci;

    
    protected $ga_id = FALSE; // UA-XXXXX-X

    public $layout;
    public $title;
    public $description;
    public $metadata;
    public $js;
    public $css;

    function __construct()
    {
        $this->_ci =& get_instance();

        $this->layout = new Layout();
        $this->css = new CSS();
        $this->js = new JS();
        $this->title = new Title();
        $this->description = new Description();
        $this->metadata = new MetaData();
    }

    /**
     * Load view
     *
     * @access  public
     * @param   string  $view
     * @param   mixed   $data
     * @param   boolean $return
     * @return  void
     */
    public function load_view($view, $data = array(), $return = FALSE)
    {
        // Not include master view on ajax request
        if ($this->_ci->input->is_ajax_request())
        {
            $this->_ci->load->view($view, $data);
            return;
        }

        // Title
        $title = $this->title->get();

        // Description
        $description = $this->description->get();

        // Metadata
        $metadata = $this->metadata->get();

        // Javascript
        $js = $this->css->get();

        // CSS
        $css = $this->js->get();

        // Layout        
        $layout = $this->layout->get();
        
        $header = $this->_ci->load->view('header', array(), TRUE);
        $footer = $this->_ci->load->view('footer', array(), TRUE);
        $main_content = $this->_ci->load->view($view, $data, TRUE);

        $body = $this->_ci->load->view('layout/' . $layout, array(
            'header' => $header,
            'footer' => $footer,
            'main_content' => $main_content,
        ), TRUE);

        return $this->_ci->load->view('base_view', array(
            'title' => $title,
            'description' => $description,
            'metadata' => $metadata,
            'js' => $js,
            'css' => $css,
            'body' => $body,
            'ga_id' => $this->ga_id,
        ), $return);
    }
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
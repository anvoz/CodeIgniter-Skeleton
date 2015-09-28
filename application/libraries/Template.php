<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Template Library
 * Handle masterview and views within masterview
 */

class Template {

    private $_ci;

    protected $brand_name = 'CodeIgniter Skeleton';
    protected $title_separator = ' - ';
    protected $ga_id = FALSE; // UA-XXXXX-X

    protected $layout;

    protected $title = FALSE;
    protected $description = FALSE;

    protected $metadata = array();

    protected $js = array();
    protected $css = array();

    function __construct()
    {
        $this->_ci =& get_instance();
    }

    /**
     * Set page layout view (1 column, 2 column...)
     *
     * @access  public
     * @param   string  $layout
     * @return  void
     */
    public function set_layout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * Set page title
     *
     * @access  public
     * @param   string  $title
     * @return  void
     */
    public function set_title($title)
    {
        $this->title = $title;
    }

    /**
     * Set page description
     *
     * @access  public
     * @param   string  $description
     * @return  void
     */
    public function set_description($description)
    {
        $this->description = $description;
    }

    /**
     * Add metadata
     *
     * @access  public
     * @param   string  $name
     * @param   string  $content
     * @return  void
     */
    public function add_metadata($name, $content)
    {
        $name = htmlspecialchars(strip_tags($name));
        $content = htmlspecialchars(strip_tags($content));

        $this->metadata[$name] = $content;
    }

    /**
     * Add js file path
     *
     * @access  public
     * @param   string  $js
     * @return  void
     */
    public function add_js($js)
    {
        $this->js[$js] = $js;
    }

    /**
     * Add css file path
     *
     * @access  public
     * @param   string  $css
     * @return  void
     */
    public function add_css($css)
    {
        $this->css[$css] = $css;
    }
    
    public function get_title() 
    {
        if (empty($this->title)) {
            $this->title = $this->brand_name;;
        } else {
            $this->title = $this->title . $this->title_separator . $this->brand_name;
        }
        return $this->title;
    }
    
    public function get_description() 
    {
        if (empty($this->description)) {
            $this->description = '';
        }
        return $this->description;
    }

    public function get_metadata()
    {
        $metadata = array();
        foreach ($this->metadata as $name => $content) {
            if (strpos($name, 'og:') === 0) {
                $metadata[] = '<meta property="' . $name . '" content="' . $content . '">';
            } else {
                $metadata[] = '<meta name="' . $name . '" content="' . $content . '">';
            }
        }
        return implode('', $metadata);
    }
    
    public function get_js()
    {
        $js = array();
        foreach ($this->js as $js_file) {
            $js[] = '<script src="' . assets_url('js/' . $js_file) . '"></script>';
        }
        return implode('', $js);
    }
    
    public function get_css()
    {
        $css = array();
        foreach ($this->css as $css_file) {
            $css[] = '<link rel="stylesheet" href="' . assets_url('css/' . $css_file) . '">';
        }
        return implode('', $css);
    }

    public function get_layout() 
    {
        if(empty($this->layout)) {
            $this->layout = 'default';
        }
        return $this->layout;
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
        $title = $this->get_title();

        // Description
        $description = $this->get_description();

        // Metadata
        $metadata = $this->get_metadata();

        // Javascript
        $js = $this->get_js();

        // CSS
        $css = $this->get_css();

        // Layout        
        $layout = $this->get_layout();
        
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
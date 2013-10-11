<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Template Library
 * Render base view including metadata, Javascript and CSS files
 *
 * https://github.com/anvoz/CodeIgniter-Skeleton
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

class Template {

    private $_ci;

    private $_brand_name = 'CodeIgniter Skeleton';
    private $_title_separator = ' - ';
    private $_ga_id = FALSE; // UA-XXXXX-X

    private $_layout = 'default';

    private $_title = FALSE;
    private $_description = FALSE;

    private $_metadata = array();

    private $_js = array();
    private $_css = array();

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
        $this->_layout = $layout;
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
        $this->_title = $title;
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
        $this->_description = $description;
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

        $this->_metadata[$name] = $content;
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
        $this->_js[$js] = $js;
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
        $this->_css[$css] = $css;
    }

    /**
     * Load view
     *
     * @access  public
     * @param   string  $view
     * @param   mixed   $data
     * @return  void
     */
    public function load_view($view, $data = array())
    {
        // Title
        if (empty($this->_title))
        {
            $title = $this->_brand_name;
        }
        else
        {
            $title = $this->_title . $this->_title_separator . $this->_brand_name;
        }

        // Description
        $description = $this->_description;

        // Metadata
        $metadata = array();
        foreach ($this->_metadata as $name => $content)
        {
            if (strpos($name, 'og:') === 0)
            {
                $metadata[] = '<meta property="' . $name . '" content="' . $content . '">';
            }
            else
            {
                $metadata[] = '<meta name="' . $name . '" content="' . $content . '">';
            }
        }
        $metadata = implode('', $metadata);

        // Javascript
        $js = array();
        foreach ($this->_js as $js_file)
        {
            $js[] = '<script src="' . assets_url('js/' . $js_file) . '"></script>';
        }
        $js = implode('', $js);

        // CSS
        $css = array();
        foreach ($this->_css as $css_file)
        {
            $css[] = '<link rel="stylesheet" href="' . assets_url('css/' . $css_file) . '">';
        }
        $css = implode('', $css);

        $header = $this->_ci->load->view('header', array(), TRUE);
        $main_content = $this->_ci->load->view($view, $data, TRUE);

        $body = $this->_ci->load->view('layout/' . $this->_layout, array(
            'header' => $header,
            'main_content' => $main_content,
        ), TRUE);

        $this->_ci->load->view('base_view', array(
            'title' => $title,
            'description' => $description,
            'metadata' => $metadata,
            'js' => $js,
            'css' => $css,
            'body' => $body,
            'ga_id' => $this->_ga_id,
        ));
    }
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
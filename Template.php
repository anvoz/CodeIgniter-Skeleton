<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Template Library
 * Handle masterview and views within masterview
 */

class Template {

    private $_ci;

    protected $brand_name = 'Syahroni Wahyu';
    protected $title_separator = ' | ';
    protected $ga_id = FALSE; // UA-XXXXX-X

    protected $layout = 'default';

    protected $title = FALSE;
    protected $description = FALSE;

    protected $metadata = array();

    protected $js = array();
    protected $css = array();

    // Minutes that cache will be alive for
    private $cache_lifetime = 0;
    
    private $script="";
    private $defer="";
    private $type="";
    private $csstheme="bootstrap.min.css";
    
    private $baseview="base_view";

    function __construct()
    {
        $this->_ci =& get_instance();
    }

    /**
     * updated by Syahroni Wahyu - roniwahyu@gmail.com - 04042014
     * Set Base View (HTML Structure of View)
     *
     * @access  public
     * @param   string  $layout
     * @return  void
     * 
     */
    public function set_baseview($baseview)
    {
        $this->baseview = $baseview;
    }
    /**
     * updated by Syahroni Wahyu - roniwahyu@gmail.com - 04042014
     * Set CSS Theme (Based on BootstrapSwatch Theme)
     *
     * @access  public
     * @param   string  $layout
     * @return  void
     * 
     */
    public function set_csstheme($csstheme)
    {
        $this->csstheme = $csstheme;
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
     * Add Script file path
     * updated by Syahroni Wahyu - roniwahyu@gmail.com - 25/05/2014
     * @access  public
     * @param   string  $script
     * @return  void
     */
    public function add_script($script)
    {
        $this->script[$script] = $script;
    }
    /**
     * Add JavaScript code
     *
     * @access  public
     * @param   string  $js
     * @return  void
     */
    public function add_js($script,$type='import',$defer=FALSE)
    {
        // $this->_ci->load->helper('url');
        // $this->js['js']=$script;
        $this->js[]=array('script'=>$script,'type'=>$type,'defer'=>$defer);

          
    }

    /**
     * Add css file path
     *
     * @access  public
     * @param   string  $css
     * @return  void
     */
    public function add_css($css,$type="link",$media=FALSE)
    {
        // $this->_ci->load->helper('url');    
        // $this->css[$css] = $css;
        $this->css[]=array('css'=>$css,'type'=>$type,'media'=>$media);

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
    public function load_view($view, $data = array(), $return = FALSE){
        $this->_ci->load->helper('url'); 
        
        // Not include master view on ajax request
        if ($this->_ci->input->is_ajax_request())
        {
            $this->_ci->load->view($view, $data);
            return;
        }

        // Title
        if (empty($this->title))
        {
            $title = $this->brand_name;
        }
        else
        {
            $title = $this->title . $this->title_separator . $this->brand_name;
        }

        // Description
        $description = $this->description;

        // Metadata
        $metadata = array();
        foreach ($this->metadata as $name => $content)
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
        /*
            Increase flexibility using javascript
            updated by Syahroni Wahyu - roniwahyu@gmail.com - 28/05/2014
        */
        $js = array();
        $javascript = array();
        $i=0;
        // echo var_dump($this->js);
        foreach($this->js as $item){
            $type=$item['type'];
            $script=$item['script'];
            $defer=$item['defer'];
            switch($type){
                case 'import':
                    $filepath =assets_url('js/'.$script);
                    $js= '<script type="text/javascript" src="'. $filepath .'"';
                    if ($defer)
                    {
                       $js .= ' defer="defer"';
                    }
                    $js .= "></script>";
                    $javascript[]=$js;
                    break;
                 
                    case 'embed':
                    $js= '<script type="text/javascript"';
                    if ($defer)
                    {
                       $js .= ' defer="defer"';
                    }
                    $js .= ">";
                    $js .= $script;
                    $js .= '</script>';
                    $javascript[]=$js;
                    break;
            }
            // $javascript[]=$js;
            // $i++;
        }
        
        $javascript=implode('',$javascript);
        

        // CSS
        /*
            Increase flexibility using CSS has linked, imported, or embedded
            updated by Syahroni Wahyu - roniwahyu@gmail.com - 28/05/2014
        */
        $style = array();
        foreach ($this->css as $css_item){
            $type=$css_item['type'];
            $css=$css_item['css'];
            $media=$css_item['media'];
            $filepath =assets_url('css/'.$css);
            switch ($type){
                 case 'link':
                    $css = '<link type="text/css" rel="stylesheet" href="'. $filepath .'"';
                    if ($media)
                    {
                       $css .= ' media="'. $media .'"';
                    }
                    $css .= ' />';
                    $style[]=$css;
                    break;
                 
                 case 'import':
                    $css = '<style type="text/css">@import url('. $filepath .');</style>';
                    $css[]=$css;
                    break;
                 
                 case 'embed':
                    $css = '<style type="text/css">';
                    $css .= $css;
                    $css .= '</style>';
                    $style[]=$css;
                    break;
                }
            // $css[] = '<link rel="stylesheet" href="' . assets_url('css/' . $css_file) . '">';
        }
        $style = implode('', $style);

        $header = $this->_ci->load->view('header', array(), TRUE);
        $footer = $this->_ci->load->view('footer', array(), TRUE);
        $main_content = $this->_ci->load->view($view, $data, TRUE);

        $body = $this->_ci->load->view('layout/' . $this->layout, array(
            'header' => $header,
            'footer' => $footer,
            'main_content' => $main_content,
        ), TRUE);
        $this->_ci->output->set_header('Expires: Sat, 01 Jan 2000 00:00:01 GMT');
        $this->_ci->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->_ci->output->set_header('Cache-Control: post-check=0, pre-check=0, max-age=0');
        $this->_ci->output->set_header('Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
        $this->_ci->output->set_header('Pragma: no-cache');

        // Let CI do the caching instead of the browser
        $this->_ci->output->cache($this->cache_lifetime);

        // return $this->_ci->load->view('base_view', array(
        return $this->_ci->load->view($this->baseview, array(
            'title' => $title,
            'description' => $description,
            'metadata' => $metadata,
            'js' => $javascript,
            // 'scripts' => $scripts,
            'css' => $style,
            'body' => $body,
            'ga_id' => $this->ga_id,
        ), $return);
    }
    public function load_template(){

    }
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */

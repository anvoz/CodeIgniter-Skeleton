<?php

class Template_test extends CI_TestCase {

    public function set_up()
    {
        $this->ci_vfs_clone('application/libraries/Template.php');
        include_once(APPPATH . 'libraries/Template.php');

        $this->template = new Mock_Libraries_Template();
    }

    public function test_set_layout()
    {
        $template_layout = 'layout';
        $this->template->set_layout($template_layout);
        $this->assertEquals($template_layout, $this->template->layout);
    }

    public function test_set_title()
    {
        $page_title = 'Page Title';
        $this->template->set_title($page_title);
        $this->assertEquals($page_title, $this->template->title);
    }

    public function test_set_description()
    {
        $page_desc = 'Page Description';
        $this->template->set_description($page_desc);
        $this->assertEquals($page_desc, $this->template->description);
    }

    public function test_add_metadata()
    {
        $name = 'og:title';
        $content = 'Page Title';
        $this->template->add_metadata($name, $content);
        $this->assertEquals($content, $this->template->metadata[$name]);

        $name = 'og:description';
        $content = 'og:title => Page Title<br> og:description => Page Description';
        $parsed_content = 'og:title =&gt; Page Title og:description =&gt; Page Description';
        $this->template->add_metadata($name, $content);
        $this->assertEquals($parsed_content, $this->template->metadata[$name]);

        $this->assertTrue(count($this->template->metadata) == 2);
    }

    public function test_add_js()
    {
        $js = 'file1.js';
        $this->template->add_js($js);
        $this->assertEquals($js, $this->template->js[$js]);

        $js = 'file2.js';
        $this->template->add_js($js);
        $this->assertEquals($js, $this->template->js[$js]);

        $this->assertTrue(count($this->template->js) == 2);
    }

    public function test_add_css()
    {
        $css = 'file1.css';
        $this->template->add_css($css);
        $this->assertEquals($css, $this->template->css[$css]);

        $css = 'file2.css';
        $this->template->add_css($css);
        $this->assertEquals($css, $this->template->css[$css]);

        $this->assertTrue(count($this->template->css) == 2);
    }

    public function test_load_view()
    {
        // Establish necessary support classes
        // Input with Security and UTF8
        $security = new Mock_Core_Security();
        $utf8 = new Mock_Core_Utf8();
        $input_cls = $this->ci_core_class('input');
        $this->ci_instance_var('input', new Mock_Core_Input($security, $utf8));
        // Loader
        $loader_cls = $this->ci_core_class('load');
		$this->ci_instance_var('load', new $loader_cls);

        // Clone base_view and default layout
        $this->ci_vfs_clone('application/views/base_view.php');
        $this->ci_vfs_clone('application/views/layout/default.php');

        // Create views in VFS to render page's body
        // Header view
        $header_view = 'header.php';
        $header_content = '{$header}';
        $this->ci_vfs_create($header_view, $header_content, $this->ci_app_root, 'views');
        // Footer view
        $footer_view = 'footer.php';
        $footer_content = '{$footer}';
        $this->ci_vfs_create($footer_view, $footer_content, $this->ci_app_root, 'views');
        // Main view
        $main_content_view = 'main_content.php';
        $foo = 'foo';
        $bar = 'bar';
        $main_content = '{$main_content}: ';
        $this->ci_vfs_create($main_content_view, $main_content . '<?php echo $' . $foo . ';', $this->ci_app_root, 'views');

        // Load url helper
        // Use a simpler assets_url function to prevent loading Config class
        $this->ci_vfs_create('MY_url_helper.php', '<?php function assets_url($uri) { return $uri; }', $this->ci_app_root, 'helpers');
        require_once(APPPATH . 'helpers/MY_url_helper.php');

        $brand_name = 'CIS';
        $title_separator = ' --';
        $title = '{$title}';
        $description = '{$description}';
        $metadata = array(
            'keywords' => '{$keywords}',
            'og:title' => '{$og_title}',
        );
        $js_files = array('file1.js', 'file2.js');
        $css_files = array('file1.css', 'file2.css');
        $ga_id = 'UA-XXXXX-X';

        // Generate page HTML
        $this->template->brand_name = $brand_name;
        $this->template->title_separator = ' --';
        $this->template->set_title($title);
        $this->template->set_description($description);
        foreach ($metadata as $name => $content)
        {
            $this->template->add_metadata($name, $content);
        }
        foreach ($js_files as $js)
        {
            $this->template->add_js($js);
        }
        foreach ($css_files as $css)
        {
            $this->template->add_css($css);
        }
        $this->template->ga_id = $ga_id;
        $html = $this->template->load_view($main_content_view, array( $foo => $bar ), TRUE);

        // Check all content that should be appeared in the generated HTML
        // Also follow some HTML standards from the HTML5 Boilerplate project
        // <head>
        if (preg_match('/(?:<head[^>]*>)(.*)<\/head>/isU', $html, $matches))
        {
            $head = $matches[1];
        }
        $this->assertTrue(strpos($head, '<title>' . $title . $title_separator . $brand_name . '</title>') !== FALSE);
        $this->assertTrue(strpos($head, '<meta name="description" content="' . $description . '">') !== FALSE);
        foreach ($metadata as $name => $content)
        {
            if (strpos($name, 'og:') === 0)
            {
                $this->assertTrue(strpos($head, '<meta property="' . $name . '" content="' . $content . '">') !== FALSE);
            }
            else
            {
                $this->assertTrue(strpos($head, '<meta name="' . $name . '" content="' . $content . '">') !== FALSE);
            }
        }
        foreach ($css_files as $css_file)
        {
            $this->assertTrue(strpos($head, '<link rel="stylesheet" href="' . assets_url('css/' . $css_file) . '">') !== FALSE);
        }
        // <body>
        if (preg_match('/(?:<body[^>]*>)(.*)<\/body>/isU', $html, $matches))
        {
            $body = $matches[1];
        }
        $this->assertTrue(strpos($body, $header_content) !== FALSE);
        $this->assertTrue(strpos($body, $footer_content) !== FALSE);
        $this->assertTrue(strpos($body, $main_content . $bar) !== FALSE);
        foreach ($js_files as $js_file)
        {
            $this->assertTrue(strpos($body, '<script src="' . assets_url('js/' . $js_file) . '"></script>') !== FALSE);
        }
        $this->assertTrue(strpos($body, $ga_id) !== FALSE);
    }
}
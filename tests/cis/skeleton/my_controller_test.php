<?php

class MY_Controller_test extends CI_TestCase {

    public function set_up()
    {
        // The test will not cover core functions of CI & MX controllers
        $this->ci_vfs_create(
            'Controller.php',
            '<?php class MX_Controller { public function __construct() { } }',
            $this->ci_app_root,
            'third_party/MX'
        );

        $this->ci_vfs_clone('application/core/MY_Controller.php');
        include_once(APPPATH . 'core/MY_Controller.php');

        include_once(PROJECT_BASE . 'tests/mocks/core/my_controller.php');
        $this->controller = new Mock_MY_Controller();
    }

    public function test_load_script()
    {
        $script = 'console.log("Script");';

        // By default, the script will only be wrapped by <script> tag
        $this->assertTrue('<script>' . $script . '</script>' === $this->controller->_load_script($script));

        // If the Template library is loaded, the script will be queued
        // by the CIS.Script Javascript object
        $this->ci_instance_var('template', new stdClass());
        $output_script = $this->controller->_load_script($script);
        $this->assertFalse('<script>' . $script . '</script>' === $output_script);
        $this->assertTrue(strpos($output_script, 'CIS.Script.queue') !== FALSE);
    }
}
<?php

/*
 * Only check core methods which collect scripts (Javascript)
 * then send them to somewhere in JSON format.
 * The main task will be handled by the CIS.Ajax Javascript object.
 */
class Response_test extends CI_TestCase {

    public function set_up()
    {
        $this->ci_vfs_clone('application/libraries/Response.php');
        include_once(APPPATH . 'libraries/Response.php');

        $this->response = new Mock_Libraries_Response();
    }

    public function test_script()
    {
        $script = 'console.log("Script 1");';
        $this->response->script($script);
        $this->assertEquals($script, $this->response->scripts[0]);

        $script = 'console.log("Script 2");';
        $this->response->script($script);
        $this->assertEquals($script, $this->response->scripts[1]);

        $this->assertTrue(count($this->response->scripts) == 2);
    }

    public function test_send()
    {
        // Establish necessary support classes
        $security = new Mock_Core_Security();
        $utf8 = new Mock_Core_Utf8();
        $input_cls = $this->ci_core_class('input');
        $this->ci_instance_var('input', new Mock_Core_Input($security, $utf8));

        $script = 'console.log("Script");';
        $this->response->script($script);

        // Only allow ajax request
        $response = $this->response->send(TRUE);
        $this->assertTrue(empty($response));
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';
        $response = $this->response->send(TRUE);
        $this->assertEquals($response, '{"scripts":[' . json_encode($script) . ']}', TRUE);
    }
}
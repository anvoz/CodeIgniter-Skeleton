<?php

class Dialog_test extends CI_TestCase {

    public function set_up()
    {
        $this->ci_vfs_clone('application/libraries/Dialog.php');
        include_once(APPPATH . 'libraries/Dialog.php');

        $this->dialog = new Mock_Libraries_Dialog();
    }

    public function test_set_id()
    {
        $dialog_id = 'dialog-' . mt_rand(1000000, 9999999);
        $this->dialog->set_id($dialog_id);
        $this->assertEquals($dialog_id, $this->dialog->id);
    }

    public function test_set_title()
    {
        $dialog_title = 'Dialog Title';
        $this->dialog->set_title($dialog_title);
        $this->assertEquals($dialog_title, $this->dialog->title);
    }

    public function test_set_body()
    {
        $dialog_body = 'Dialog Body';
        $this->dialog->set_body($dialog_body);
        $this->assertEquals($dialog_body, $this->dialog->body);
    }

    public function test_set_content()
    {
        $dialog_content = 'Dialog Content';
        $this->dialog->set_content($dialog_content);
        $this->assertEquals($dialog_content, $this->dialog->content);
    }

    public function test_add_button()
    {
        // OK button
        $this->dialog->add_button('ok');
        $this->assertTrue(count($this->dialog->buttons) === 1);
        $this->assertTrue(preg_match('/^<button(.)*type="button"(.)*OK/', $this->dialog->buttons[0]) === 1);

        // Close button with custom label
        $this->dialog->add_button('close', 'Dismiss');
        $this->assertTrue(count($this->dialog->buttons) === 2);
        $this->assertTrue(preg_match('/^<button(.)*type="button"(.)*Dismiss/', $this->dialog->buttons[1]) === 1);

        // Submit button
        $this->dialog->add_button('submit');
        $this->assertTrue(count($this->dialog->buttons) === 3);
        $this->assertTrue(preg_match('/^<button(.)*type="submit"(.)*Submit/', $this->dialog->buttons[2]) === 1);

        // Invalid button
        $this->dialog->add_button('foo');
        $this->assertTrue(count($this->dialog->buttons) === 3);
    }

    public function test_set_footer()
    {
        $dialog_footer = 'Dialog Footer';
        $this->dialog->set_footer($dialog_footer);
        $this->assertEquals($dialog_footer, $this->dialog->footer);
    }

    public function test_set_size()
    {
        $this->dialog->set_size('small');
        $this->assertEquals('modal-sm', $this->dialog->size);
        $this->dialog->set_size('large');
        $this->assertEquals('modal-lg', $this->dialog->size);
    }

    public function test_html()
    {
        // Clone dialog template file
        $this->ci_vfs_clone('application/views/dialog.php');

        // Establish necessary support classes
        $loader_cls = $this->ci_core_class('load');
		$this->ci_instance_var('load', new $loader_cls);

        $dialog_data = array(
            'id' => '{$dialog}',
            'title' => '{$title}',
            'body' => '{$body}',
            'content' => '{$content}',
            'footer' => '{$footer}',
            'size' => 'small',
        );

        // Generate dialog HTML
        foreach ($dialog_data as $key => $value)
        {
            call_user_func_array(array($this->dialog, 'set_' . $key), array($value));
        }
        $html = $this->dialog->html();

        // The generated dialog HTML should contain all dialog data
        $dialog_data['size'] = '"modal-dialog modal-sm"';
        foreach ($dialog_data as $value)
        {
            $this->assertTrue(strpos($html, $value) !== FALSE);
        }
    }
}
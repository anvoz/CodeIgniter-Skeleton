<?php

class Addons_ajax_test extends CI_TestCase {

    public function set_up()
    {
        $this->ci_vfs_create(
            'Mock_Ajax_Controller.php',
            '<?php class Mock_Ajax_Controller { public function __construct() { } }',
            $this->ci_app_root,
            'core'
        );
        include_once(APPPATH . 'core/Mock_Ajax_Controller.php');

        // Ugly hack to let the Addons_ajax extends Mock_Ajax_Controller
        $addons_ajax_content = file_get_contents(PROJECT_BASE . 'application/modules/addons/controllers/addons_ajax.php');
        $this->ci_vfs_create(
            'addons_ajax.php',
            str_replace(
                'class Addons_ajax extends Ajax_Controller',
                'class Addons_ajax extends Mock_Ajax_Controller',
                $addons_ajax_content
            ),
            $this->ci_app_root,
            'modules/addons/controllers'
        );
        include_once(APPPATH . 'modules/addons/controllers/addons_ajax.php');
        $this->addons_ajax = new Addons_ajax();
    }

    public function test_file_copy()
    {
        // Create test file
        $addon_key = 'test_copy';
        mkdir(APPPATH . $addon_key, 0777, TRUE);
        $this->ci_vfs_create('file01.php', 'bar', $this->ci_app_root, 'modules/addons/data/' . $addon_key);

        // Copy file to an existed directory
        $this->assertTrue($this->addons_ajax->_file_action(
            'copy', $addon_key . '/file01.php', array('dest' => APPPATH . $addon_key)
        ));
        // Check copied file content
        $this->assertEquals('bar', file_get_contents(APPPATH . $addon_key . '/file01.php'));
        // Not allow to overwrite existed file
        $this->assertFalse($this->addons_ajax->_file_action(
            'copy', $addon_key . '/file01.php', array('dest' => APPPATH . $addon_key)
        ));

        // Copy file to non-existed directory
        $this->assertTrue($this->addons_ajax->_file_action(
            'copy', $addon_key . '/file01.php', array('dest' => APPPATH . $addon_key . '/subdir')
        ));
        $this->assertTrue($this->addons_ajax->_file_action(
            'copy', $addon_key . '/file01.php', array('dest' => APPPATH . $addon_key . '/subdir/subdir')
        ));

        // Create more source files in sub directory
        $this->ci_vfs_create('file02.php', 'bar2', $this->ci_app_root, 'modules/addons/data/' . $addon_key . '/subdir');
        $this->ci_vfs_create('file03.php', 'bar3', $this->ci_app_root, 'modules/addons/data/' . $addon_key . '/subdir/subdir');
        // Copy files
        $this->assertTrue($this->addons_ajax->_file_action(
            'copy', $addon_key . '/subdir/file02.php', array('dest' => APPPATH . $addon_key)
        ));
        $this->assertTrue($this->addons_ajax->_file_action(
            'copy', $addon_key . '/subdir/subdir/file03.php', array('dest' => APPPATH . $addon_key)
        ));
        // Check content of copied files
        $this->assertEquals('bar2', file_get_contents(APPPATH . $addon_key . '/file02.php'));
        $this->assertEquals('bar3', file_get_contents(APPPATH . $addon_key . '/file03.php'));
    }

    public function test_file_delete()
    {
        // Create test files
        $addon_key = 'test_delete';
        mkdir(APPPATH . $addon_key, 0777, TRUE);
        $this->ci_vfs_create('file01.php', 'bar', $this->ci_app_root, $addon_key);
        $this->ci_vfs_create('file02a.php', 'bar', $this->ci_app_root, $addon_key . '/subdir');
        $this->ci_vfs_create('file02b.php', 'bar', $this->ci_app_root, $addon_key . '/subdir');
        $this->ci_vfs_create('file03a.php', 'bar', $this->ci_app_root, $addon_key . '/subdir/subdir1');
        $this->ci_vfs_create('file03b.php', 'bar', $this->ci_app_root, $addon_key . '/subdir/subdir1');
        $this->ci_vfs_create('file04a.php', 'bar', $this->ci_app_root, $addon_key . '/subdir/subdir2');
        $this->ci_vfs_create('file04b.php', 'bar', $this->ci_app_root, $addon_key . '/subdir/subdir2');

        // Delete an existed file
        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file04a.php', array('dest' => APPPATH . $addon_key . '/subdir/subdir2')
        ));
        $this->assertTrue(file_exists(APPPATH . $addon_key . '/subdir/subdir2'));
        // Delete a non-existed file
        $this->assertFalse($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file04c.php', array('dest' => APPPATH . $addon_key . '/subdir/subdir2')
        ));
        // Delete file then delete empty directory
        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file04b.php', array('dest' => APPPATH . $addon_key . '/subdir/subdir2')
        ));
        $this->assertFalse(file_exists(APPPATH . $addon_key . '/subdir/subdir2'));

        // Delete all files in directory but still keep the directory
        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file02a.php', array('dest' => APPPATH . $addon_key . '/subdir')
        ));
        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file02b.php', array('dest' => APPPATH . $addon_key . '/subdir')
        ));
        $this->assertTrue(file_exists(APPPATH . $addon_key . '/subdir'));

        // Delete file then delete empty directories (both current and parent directories)
        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file03a.php', array('dest' => APPPATH . $addon_key . '/subdir/subdir1')
        ));
        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file03b.php', array('dest' => APPPATH . $addon_key . '/subdir/subdir1')
        ));
        $this->assertFalse(file_exists(APPPATH . $addon_key . '/subdir/subdir1'));
        $this->assertFalse(file_exists(APPPATH . $addon_key . '/subdir'));

        $this->assertTrue($this->addons_ajax->_file_action(
            'delete', $addon_key . '/file01.php', array('dest' => APPPATH . $addon_key)
        ));
        $this->assertFalse(file_exists(APPPATH . $addon_key));
    }

    public function test_skeleton_action()
    {
        $skeleton_data = array(
            'foo1' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
            'foo2' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2'),
        );
        $skeleton1 = array(
            'foo3' => array('bar1' => 'Bar 1'),
        );
        $skeleton2 = array(
            'foo2' => array('bar3' => 'Bar 3'),
        );

        $skeleton_data = $this->addons_ajax->_skeleton_action('copy', $skeleton1, $skeleton_data);
        $this->assertEquals(array(
            'foo1' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
            'foo2' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2'),
            'foo3' => array('bar1' => 'Bar 1'),
        ), $skeleton_data);
        $skeleton_data = $this->addons_ajax->_skeleton_action('copy', $skeleton2, $skeleton_data);
        $this->assertEquals(array(
            'foo1' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
            'foo2' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
            'foo3' => array('bar1' => 'Bar 1'),
        ), $skeleton_data);

        $skeleton_data = $this->addons_ajax->_skeleton_action('delete', $skeleton1, $skeleton_data);
        $this->assertEquals(array(
            'foo1' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
            'foo2' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
        ), $skeleton_data);
        $skeleton_data = $this->addons_ajax->_skeleton_action('delete', $skeleton2, $skeleton_data);
        $this->assertEquals(array(
            'foo1' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2', 'bar3' => 'Bar 3'),
            'foo2' => array('bar1' => 'Bar 1', 'bar2' => 'Bar 2'),
        ), $skeleton_data);
    }
}
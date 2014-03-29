<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends MY_Controller {

    /**
     * Example page
     */
    public function index()
    {
        $this->load->library('template');

        // Use custom layout (application/views/layout/pagelet.php)
        $this->template->set_layout('pagelet');
        $this->template->set_title('Todo example');

        $this->template->load_view('todo/index', array(
            // Load todo pagelet with some fake items
            'pagelet_todo' => Modules::run('todo/_pagelet_todo', array(
                array(
                    'title' => 'Read the CI documentation',
                    'completed' => TRUE,
                ),
                array(
                    'title' => 'Learn how to use Modular Extensions - HMVC',
                    'completed' => FALSE,
                ),
            )),
        ));
    }

    /**
     * Render all todo items
     * and an ajax form to submit new item
     */
    public function _pagelet_todo($items = array())
    {
        $this->load->helper('form');

        $items_left = 0;
        foreach ($items as $item)
        {
            if ( ! $item['completed'])
            {
                $items_left++;
            }
        }
        $this->load->view('todo/pagelet_todo', array(
            'items' => $items,
            'items_left' => $items_left,
        ));
    }

    /**
     * Render todo item
     */
    public function _pagelet_item($item)
    {
        $this->load->view('todo/pagelet_item', $item);
    }
}

/* End of file todo.php */
/* Location: ./application/modules/todo/controllers/todo.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends MY_Controller {

    /**
     * An example page which loads todo pagelet
     */
    public function index()
    {
        $this->load->library('template');

        $this->template->set_layout('pagelet');
        $this->template->set_title('Todo example');

        $this->template->load_view('todo/index', array(
            'pagelet_todo' => Modules::run('todo/_pagelet_todo'),
        ));
    }

    /**
     * Render a todo pagelet which contains
     * an ajax form to submit new item
     * and some fake todo items
     */
    public function _pagelet_todo()
    {
        $this->load->helper('form');

        $items = array(
            array(
                'title' => 'Read the CI documentation',
                'completed' => TRUE,
            ),
            array(
                'title' => 'Learn how to use Modular Extensions - HMVC',
                'completed' => FALSE,
            ),
        );
        $items_left = 1;
        $this->load->view('todo/pagelet_todo', array(
            'items' => $items,
            'items_left' => $items_left,
        ));
    }

    /**
     * Render 1 todo item
     */
    public function _pagelet_item($item)
    {
        $this->load->view('todo/pagelet_item', $item);
    }
}

/* End of file todo.php */
/* Location: ./application/modules/todo/controllers/todo.php */
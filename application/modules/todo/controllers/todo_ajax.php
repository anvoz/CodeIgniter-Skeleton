<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * These functions are quick implements to help the todo example works
 * without using any extra JS and CSS files.
 * Do not consider this as good way to handle your todo app.
 *
 * All JS code here should be placed inside JS file if possible.
 * For example, the "create" function should be:
 *      1 - Insert $item into DB
 *      2 - $html_item = Modules::run('todo/_pagelet_item' $item)
 *      3 - $this->response->script('TodoApp.create(' . json_encode($html_item) . ')')
 */
class Todo_ajax extends Ajax_Controller {

    public function create()
    {
        $title = $this->input->post('title', TRUE);
        $thumbnail = $this->input->post('thumbnail', TRUE);

        $html_item = Modules::run('todo/_pagelet_item', array(
            'title' => $title,
            'completed' => FALSE,
            'thumbnail' => $thumbnail,
        ));

        $this->response->script('
            var $list = $(this).closest(".todo-control").find(".todo-list"),
                $newItem = $(' . json_encode($html_item) . ');
            if ($list.attr("data-filter") == "completed") {
                $newItem.hide();
            }
            $list.append($newItem);
        ');
        $this->response->script('
            var $control = $(this).closest(".todo-control");
            $control
                .find(".todo-toggle-all").prop("checked", false).end()
                .find(".todo-input").val("").end()
                .find(".todo-count").text($control.find(".todo-item:not(.completed)").length);
        ');
        if ( ! empty($thumbnail))
        {
            $this->response->script('
                $uploadControl = $(this).closest(".todo-control")
                    .find(".upload-control .holder").remove();
            ');
        }

        $this->response->send();
    }

    public function toggle()
    {
        $this->response->script('
            var $item = $(this).closest(".todo-item"),
                $toggle = $item.find(".todo-toggle"),
                $list = $(this).closest(".todo-control").find(".todo-list"),
                isChecked = ! $toggle.is(":checked");

            $item.toggleClass("completed", isChecked)
                .find(".todo-title").toggleClass("text-muted", isChecked).end()
                .toggle($list.attr("data-filter") != (isChecked ? "active" : "completed"));
            $toggle.prop("checked", isChecked);
        ');
        $this->response->script('
            var $control = $(this).closest(".todo-control");
            $control.find(".todo-count").text($control.find(".todo-item:not(.completed)").length);
        ');
        $this->_render_toggle_all();

        $this->response->send();
    }

    public function toggle_all()
    {
        $this->response->script('
            var $control = $(this).closest(".todo-control"),
                $list = $control.find(".todo-list"),
                isChecked = ! $control.find(".todo-toggle-all").is(":checked");

            $list.find(".todo-item").each(function() {
                $(this).toggleClass("completed", isChecked)
                    .find(".todo-toggle").prop("checked", isChecked).end()
                    .find(".todo-title").toggleClass("text-muted", isChecked).end()
                    .toggle($list.attr("data-filter") != (isChecked ? "active" : "completed"));
            });

            $control.find(".todo-count").text($control.find(".todo-item:not(.completed)").length);
        ');
        $this->_render_toggle_all();

        $this->response->send();
    }

    public function filter($filter)
    {
        switch ($filter)
        {
            case 'all':
                $this->response->script('
                    $(this).closest(".todo-control")
                        .find(".todo-list").attr("data-filter", "all")
                            .find(".todo-item").show();
                ');
                break;
            case 'active':
                $this->response->script('
                    $(this).closest(".todo-control")
                        .find(".todo-list").attr("data-filter", "active")
                            .find(".todo-item").each(function() {
                                $(this).toggle( ! $(this).hasClass("completed"));
                            });
                ');
                break;
            case 'completed':
                $this->response->script('
                    $(this).closest(".todo-control")
                        .find(".todo-list").attr("data-filter", "completed")
                            .find(".todo-item").each(function() {
                                $(this).toggle($(this).hasClass("completed"));
                            });
                ');
                break;
        }
        $this->response->script('
            $(this).removeClass("text-muted")
                .parent().siblings().find("a").addClass("text-muted");
        ');
        $this->_render_toggle_all();

        $this->response->send();
    }

    public function _render_toggle_all()
    {
        $this->response->script('
            var $control = $(this).closest(".todo-control"),
                $list = $control.find(".todo-list"),
                $visibleItems = $list.find(".todo-item:visible");
            $control.find(".todo-toggle-all")
                .prop("checked", $visibleItems.length == $visibleItems.filter(".completed").length)
                .toggle($visibleItems.length > 0);
        ');
    }
}

/* End of file todo_ajax.php */
/* Location: ./application/modules/todo/controllers/todo_ajax.php */
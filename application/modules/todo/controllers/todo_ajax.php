<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_ajax extends Ajax_Controller {

    function create()
    {
        $title = $this->input->post('title', TRUE);
        $html_item = Modules::run('todo/_pagelet_item', array(
            'title' => $title,
            'completed' => FALSE,
        ));

        $this->response->script('
            var $list = $(this).closest(".todo-control").find(".todo-list"),
                $item = $(' . json_encode($html_item) . ');
            if ($list.attr("data-filter") == "completed") {
                $item.hide();
            }
            $list.append($item);
        ');
        $this->response->script('
            var $control = $(this).closest(".todo-control");
            $control
                .find(".todo-toggle-all").prop("checked", false).end()
                .find(".todo-input").val("").end()
                .find(".todo-count").text($control.find(".todo-item:not(.completed)").length);
        ');

        $this->response->send();
    }

    function toggle()
    {
        $this->response->script('
            var $item = $(this).closest(".todo-item"),
                $toggle = $item.find(".todo-toggle"),
                $title = $item.find(".todo-title"),
                $list = $(this).closest(".todo-control").find(".todo-list"),
                isChecked = $toggle.is(":checked");

            if (isChecked) {
                $item.removeClass("completed");
                $title.removeClass("text-muted");
                if ($list.attr("data-filter") == "completed") {
                    $item.hide();
                }
            } else {
                $item.addClass("completed");
                $title.addClass("text-muted");
                if ($list.attr("data-filter") == "active") {
                    $item.hide();
                }
            }
            $toggle.prop("checked", ! isChecked);
        ');
        $this->response->script('
            var $control = $(this).closest(".todo-control");
            $control.find(".todo-toggle-all").prop("checked", false);
            $control.find(".todo-count").text($control.find(".todo-item:not(.completed)").length);
        ');

        $this->response->send();
    }

    function toggle_all()
    {
        $this->response->script('
            var $control = $(this).closest(".todo-control"),
                $toggleAll = $control.find(".todo-toggle-all"),
                $list = $control.find(".todo-list"),
                isChecked = $toggleAll.is(":checked");

            if (isChecked) {
                $list.find(".todo-item").each(function() {
                    var $item = $(this);
                    $item.removeClass("completed");
                    $item.find(".todo-toggle").prop("checked", false);
                    $item.find(".todo-title").removeClass("text-muted");
                    if ($list.attr("data-filter") == "completed") {
                        $item.hide();
                    }
                });
            } else {
                $list.find(".todo-item").each(function() {
                    var $item = $(this);
                    $item.addClass("completed");
                    $item.find(".todo-toggle").prop("checked", true);
                    $item.find(".todo-title").addClass("text-muted");
                    if ($list.attr("data-filter") == "active") {
                        $item.hide();
                    }
                });
            }
            $toggleAll.prop("checked", ! isChecked);

            $control.find(".todo-count").text($control.find(".todo-item:not(.completed)").length);
        ');

        $this->response->send();
    }

    function filter($filter)
    {
        $this->response->script('
            var $control = $(this).closest(".todo-control"),
                $toggleAll = $control.find(".todo-toggle-all"),
                $list = $control.find(".todo-list");
            switch("' . $filter . '") {
                case "all":
                    $toggleAll.prop("checked", false);
                    $list.find(".todo-item").show();
                    $list.attr("data-filter", "all");
                    break;
                case "active":
                    $toggleAll.prop("checked", false);
                    $list.find(".todo-item").each(function() {
                        if ($(this).hasClass("completed")) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                    $list.attr("data-filter", "active");
                    break;
                case "completed":
                    $toggleAll.prop("checked", true);
                    $list.find(".todo-item").each(function() {
                        if ($(this).hasClass("completed")) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                    $list.attr("data-filter", "completed");
                    break;
            }
        ');
        $this->response->script('$(this).closest(".todo-filter").find("a").addClass("text-muted");');
        $this->response->script('$(this).removeClass("text-muted");');

        $this->response->send();
    }
}

/* End of file todo_ajax.php */
/* Location: ./application/modules/todo/controllers/todo_ajax.php */
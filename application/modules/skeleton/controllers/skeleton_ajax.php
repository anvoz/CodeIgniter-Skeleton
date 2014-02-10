<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skeleton_ajax extends Ajax_Controller {

    function test_ajaxify()
    {
        switch ($this->input->get_post('type'))
        {
            case 'a':
                $script = <<< JS
var count = parseInt($(this).find('.badge').text());
$(this).find('.badge').text(count + 1);
JS;
                $this->response->script($script);
                break;
            case 'form':
                $title = $this->input->get_post('title');
                $content = $this->input->get_post('content');

                $content = nl2br($content);

                $html = "<p><strong>Title: </strong>{$title}</p><p><strong>Content: </strong>{$content}</p>";
                $json_html = json_encode($html);

                $this->response->script("$($(this).data('target')).html({$json_html})");
                break;
            case 'alert':
                $this->response->alert('$title', '$body');
                break;
            case 'confirm':
                if ($this->response->confirm('$title', '$body'))
                {
                    $this->response->script('$(this).data("caller").after("<div>Confirmed!</div>");');
                }
                break;
            case 'dialog':
                $this->response->dialog(array(
                    'title' => '$title',
                    'content' => '$content',
                    'body' => '$body',
                    'footer' => '$footer',
                ));
                break;
            case 'dialog_small':
                $this->response->dialog(array(
                    'title' => '$title',
                    'content' => '$content',
                    'body' => '$body',
                    'footer' => '$footer',
                    'size' => 'small',
                ));
                break;
            case 'dialog_large':
                $this->response->dialog(array(
                    'title' => '$title',
                    'content' => '$content',
                    'body' => '$body',
                    'footer' => '$footer',
                    'size' => 'large',
                ));
                break;
        }
        $this->response->send();
    }
}

/* End of file skeleton_ajax.php */
/* Location: ./application/modules/skeleton/controllers/skeleton_ajax.php */
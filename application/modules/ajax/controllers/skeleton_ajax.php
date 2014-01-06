<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skeleton_ajax extends Ajax_Controller {

    function test_ajaxify()
    {
        switch ($this->input->get_post('type'))
        {
            case 'a':
                $script = <<< JS
$(this).parent().toggleClass('text-right');
if ($(this).parent().hasClass('text-right')) {
    $(this).text('Left');
} else {
    $(this).text('Right');
}
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
                $this->response->alert('Alert title', 'Alert body');
                break;
            case 'confirm':
                if ($this->response->confirm('Confirm title', 'Confirm body'))
                {
                    $this->response->script('$(this).data("caller").after("<div>Confirmed!</div>");');
                }
                break;
            case 'dialog':
                $this->response->dialog(array(
                    'body' => Modules::run('skeleton/_pagelet_ajax')
                ));
                break;
        }
        $this->response->send();
    }
}

/* End of file skeleton_ajax.php */
/* Location: ./application/modules/ajax/controllers/skeleton_ajax.php */
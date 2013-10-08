<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_ajax extends Ajax_Controller {

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
                $target = $this->input->get_post('target');
                $title = $this->input->get_post('title');
                $content = $this->input->get_post('content');

                $content = nl2br($content);

                $html = "<p><strong>Title: </strong>{$title}</p><p><strong>Content: </strong>{$content}</p>";
                $json_html = json_encode($html);

                $script = <<< JS
$(this).find('input[type=text], textarea').val('');
$(this).parent().siblings('div').html({$json_html});
JS;
                $this->response->script($script);
                break;
            case 'alert':
                $this->response->alert('Alert title', 'Alert body');
                break;
            case 'confirm':
                if ($this->response->confirm('Confirm title', 'Confirm body'))
                {
                    $this->response->script('alert("Confirmed!");');
                }
                break;
        }
        $this->response->send();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
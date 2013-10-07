<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_ajax extends Ajax_Controller {

    function test_ajaxify()
    {
        switch ($this->input->get_post('type', TRUE))
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
                $this->script($script);
                break;
            case 'form':
                $target = $this->input->get_post('target', TRUE);
                $title = $this->input->get_post('title', TRUE);
                $content = $this->input->get_post('content', TRUE);

                $content = nl2br($content);

                $html = "<p><strong>Title: </strong>{$title}</p><p><strong>Content: </strong>{$content}</p>";
                $json_html = json_encode($html);

                $script = <<< JS
$(this).find('input[type=text], textarea').val('');
$('#{$target}').html({$json_html});
JS;
                $this->script($script);
                break;
        }
        $this->send();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
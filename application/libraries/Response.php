<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Handle ajax request from CIS.Ajax.request() from client
 */
class Response {

    private $_ci;
    private $_data;

    function __construct()
    {
        $this->_ci =& get_instance();
    }

    /**
     * Add callback Javascript
     *
     * @access  public
     * @param   string  $script
     * @return  void
     */
    public function script($script)
    {
        $this->_data['scripts'][] = $script;
    }

    /**
     * Show alert dialog
     *
     * @access  public
     * @param   string  $title
     * @param   string  $body
     * @param   string  $ok_label
     * @return  void
     */
    public function alert($title, $body, $ok_label = 'OK')
    {
        $this->dialog(array(
            'title' => $title,
            'body' => $body,
            'buttons' => array('ok' => $ok_label)
        ));
    }

    /**
     * Show confirm dialog
     *
     * @access  public
     * @param   string  $title
     * @param   string  $body
     * @param   string  $ok_label
     * @param   string  $close_label
     * @return  bool
     */
    public function confirm($title, $body, $ok_label = 'OK', $close_label = 'Close')
    {
        if ( ! $this->_ci->input->get_post('_dialog_confirmed'))
        {
            $this->_ci->load->helper('form');

            $dialog_id = 'dialog-' . mt_rand(1000000, 9999999);

            $url = $this->_ci->uri->uri_string();
            if ( ! empty($_SERVER['QUERY_STRING']))
            {
                $url .= '?' . $_SERVER['QUERY_STRING'];
            }

            // Contain a form which will be submitted the same request url with _dialog_confirmed = TRUE
            $content = implode('', array(
                form_open($url, 'rel="async"'),
                    form_hidden('_dialog_confirmed', 1),
                    form_hidden('_dialog_id', $dialog_id),
                    '<div class="modal-body">', $body, '</div>'
            ));

            $this->dialog(array(
                'id' => $dialog_id,
                'title' => $title,
                'content' => $content,
                'buttons' => array(
                    'close' => $close_label,
                    'submit' => $ok_label,
                ),
                'footer' => form_close()
            ));
            return FALSE;
        }

        // Destroy dialog
        $dialog_id = $this->_ci->input->get_post('_dialog_id');
        $this->script("$('#{$dialog_id}').modal('hide').on('hidden.bs.modal', function(e) { $(e.target).remove(); });");
        return TRUE;
    }

    /**
     * Generate Dialog script
     *
     * @access  private
     * @param   array   $data
     * @return  void
     */
    public function dialog($data)
    {
        $this->_ci->load->library('dialog');

        $dialog_id = (empty($data['id'])) ?
                'dialog-' . mt_rand(1000000, 9999999) :
                $data['id'];
        $this->_ci->dialog->set_id($dialog_id);

        if ( ! empty($data['title']))
        {
            $this->_ci->dialog->set_title($data['title']);
        }

        if ( ! empty($data['body']))
        {
            $this->_ci->dialog->set_body($data['body']);
        }

        if ( ! empty($data['content']))
        {
            $this->_ci->dialog->set_content($data['content']);
        }

        if ( ! empty($data['buttons']))
        {
            foreach ($data['buttons'] as $type => $label)
            {
                $this->_ci->dialog->add_button($type, $label);
            }
        }

        if ( ! empty($data['footer']))
        {
            $this->_ci->dialog->set_footer($data['footer']);
        }

        $html = $this->_ci->dialog->html();
        $json_html = json_encode($html);

        // Append dialog to body and show
        // Destroy dialog after it was closed
        $code = <<< JS
$('body').append({$json_html});
$('#{$dialog_id}').modal().on('hidden.bs.modal', function(e) {
    $(e.target).remove();
});
JS;
        $this->script($code);
    }

    /**
     * Send response to CIS.Ajax.response()
     *
     * @access  public
     * @return  void
     */
    public function send()
    {
        if ( ! empty($this->_data))
        {
            echo json_encode($this->_data);
            exit;
        }
    }
}

/* End of file Response.php */
/* Location: ./application/libraries/Response.php */
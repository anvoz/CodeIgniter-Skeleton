<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Response Library
 * Handle response for ajax request which is sent
 * by the CIS.Ajax.request() Javascript function
 */

class Response {

    private $_ci;
    protected $data;

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
        $this->data['scripts'][] = $script;
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
        $this->script("$('#{$dialog_id}').modal('hide');");
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

        if ( ! empty($data['size']))
        {
            $this->_ci->dialog->set_size($data['size']);
        }

        $html = $this->_ci->dialog->html();
        $json_html = json_encode($html);

        /*
         * - Append dialog HTML to <body>.
         * - Store reference of the button that toggles this dialog (caller)
         * on every async forms of the dialog.
         * - Launch the dialog.
         * - Register an event to destroy the dialog after it was closed
         * (must use setTimeout to prevent the dialog from being completely removed
         * before other scripts, which retrieve dialog's data, are executed,
         * especially for dialogs that have no hidden effect or for IE).
         */
        $code = <<< JS
$('body').append({$json_html});
$('#{$dialog_id}')
    .find('form[rel="async"]').data('caller', $(this)).end()
    .modal().on('hidden.bs.modal', function(e) {
        setTimeout(function() {
            $(e.target).remove();
        }, 1);
    });
JS;
        $this->script($code);
    }

    /**
     * Send response to CIS.Ajax.response() Javascript function
     *
     * @access  public
     * @param   boolean $data
     * @return  void
     */
    public function send($return = FALSE)
    {
        if ( ! empty($this->data))
        {
            if ($this->_ci->input->is_ajax_request())
            {
                $json_data = json_encode($this->data);
                if ($return)
                {
                    return $json_data;
                }
                else
                {
                    echo $json_data;
                    exit;
                }
            }
        }
    }
}

/* End of file Response.php */
/* Location: ./application/libraries/Response.php */
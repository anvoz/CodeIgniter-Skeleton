<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('bs_form_input'))
{
    function bs_form_input($data = '', $value = '', $extra = '')
    {
        $extra = _insert_form_attribute_value($data, $extra, 'class', 'form-control');
        return form_input($data, $value, $extra);
    }
}

if ( ! function_exists('bs_form_password'))
{
    function bs_form_password($data = '', $value = '', $extra = '')
    {
        $extra = _insert_form_attribute_value($data, $extra, 'class', 'form-control');
        return form_password($data, $value, $extra);
    }
}

if ( ! function_exists('bs_form_textarea'))
{
    function bs_form_textarea($data = '', $value = '', $extra = '')
    {
        $extra = _insert_form_attribute_value($data, $extra, 'class', 'form-control');
        return form_textarea($data, $value, $extra);
    }
}

if ( ! function_exists('bs_form_multiselect'))
{
    function bs_form_multiselect($name = '', $options = array(), $selected = array(), $extra = array())
    {
        $extra['class'] = ( ! empty($extra['class'])) ?
            'form-control ' . $extra['class'] : 'form-control';
        $extra = _parse_form_attributes($extra, array());

        return form_multiselect($name, $options, $selected, $extra);
    }
}

if ( ! function_exists('bs_form_dropdown'))
{
    function bs_form_dropdown($name = '', $options = array(), $selected = array(), $extra = array())
    {
        $extra['class'] = ( ! empty($extra['class'])) ?
            'form-control ' . $extra['class'] : 'form-control';
        $extra = _parse_form_attributes($extra, array());

        return form_dropdown($name, $options, $selected, $extra);
    }
}

if ( ! function_exists('bs_form_submit'))
{
    function bs_form_submit($data = '', $value = '', $extra = '')
    {
        $extra = _insert_form_attribute_value($data, $extra, 'class', 'btn btn-primary');
        return form_submit($data, $value, $extra);
    }
}

if ( ! function_exists('bs_form_reset'))
{
    function bs_form_reset($data = '', $value = '', $extra = '')
    {
        $extra = _insert_form_attribute_value($data, $extra, 'class', 'btn btn-default');
        return form_reset($data, $value, $extra);
    }
}

if ( ! function_exists('bs_form_button'))
{
    function bs_form_button($data = '', $content = '', $extra = '')
    {
        $extra = _insert_form_attribute_value($data, $extra, 'class', 'btn btn-default');
        return form_button($data, $content, $extra);
    }
}

/**
 * Insert form attribute value
 * Used by some form helpers to insert attribute value (without duplicated)
 * to $extra param and return its new value
 */
if ( ! function_exists('_insert_form_attribute_value'))
{
    function _insert_form_attribute_value(&$data, $extra, $attribute, $value)
    {
        $value = (is_array($value)) ?
            implode(' ', $value) : $value;

        if (is_array($data) && ( ! empty($data[$attribute])))
        {
            // Remove the attribute from $data to avoid duplication
            // because it will be added to $extra later
            $value .= ' ' . $data[$attribute];
            unset($data[$attribute]);
        }

        if ( ! empty($extra))
        {
            preg_match('/' . $attribute. '=[\'"]/i', $extra, $matches, PREG_OFFSET_CAPTURE);
            // Check if the attribute has been already existed or not
            if (( ! empty($matches[0])) && isset($matches[0][1]))
            {
                $insert_to = $matches[0][1] + strlen($attribute . '="');
                $extra = substr_replace($extra, $value . ' ', $insert_to, 0);
            }
            else
            {
                $extra = $attribute . '="' . $value . '" ' . $extra;
            }
        }
        else
        {
            $extra = $attribute . '="' . $value . '"';
        }

        return $extra;
    }
}

/* End of file MY_form_helper.php */
/* Location: ./application/helpers/MY_form_helper.php */

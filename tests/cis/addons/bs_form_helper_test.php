<?php

class BS_form_helper_test extends CI_TestCase
{
    public function set_up()
    {
        $this->helper('form');

        if (file_exists(PROJECT_BASE . 'application/helpers/MY_form_helper.php'))
        {
            $this->ci_vfs_clone('application/helpers/MY_form_helper.php');
            include_once(APPPATH . 'helpers/MY_form_helper.php');
        }
        else
        {
            $this->ci_vfs_clone('application/modules/addons/data/bs_form_helpers/MY_form_helper.php');
            include_once(APPPATH . 'modules/addons/data/bs_form_helpers/MY_form_helper.php');
        }
    }

    public function test_form_input()
    {
        $bs_class = 'form-control';

        $this->assertEquals(
            '<input type="text" name="cis" value="" class="' . $bs_class . '" />',
            bs_form_input('cis')
        );

        // Detect class attribute in $extra param
        $this->assertEquals(
            '<input type="text" name="cis" value="" class="' . $bs_class . ' extra" />',
            bs_form_input('cis', '', 'class="extra"')
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" class=\'' . $bs_class . ' extra\' />',
            bs_form_input('cis', '', "class='extra'")
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" CLASS="' . $bs_class . ' extra" />',
            bs_form_input('cis', '', 'CLASS="extra"')
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" onclick="return false;" class="' . $bs_class . ' extra" />',
            bs_form_input('cis', '', 'onclick="return false;" class="extra"')
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" class=\'' . $bs_class . ' extra\' onclick=\'return false;\' />',
            bs_form_input('cis', '', "class='extra' onclick='return false;'")
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" class="' . $bs_class . '" onclick="return false;" />',
            bs_form_input('cis', '', 'onclick="return false;"')
        );

        // Has class attribute in $data param
        $this->assertEquals(
            '<input type="text" name="cis" value="" class="' . $bs_class . ' data" />',
            bs_form_input(array('name' => 'cis', 'class' => 'data'))
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" class="' . $bs_class . ' data extra" />',
            bs_form_input(array('name' => 'cis', 'class' => 'data'), '', 'class="extra"')
        );
        $this->assertEquals(
            '<input type="text" name="cis" value="" class=\'' . $bs_class . ' data extra\' />',
            bs_form_input(array('name' => 'cis', 'class' => 'data'), '', "class='extra'")
        );
    }

    public function test_form_password()
    {
        $this->assertEquals(
            '<input type="password" name="cis" value="" class="form-control" />',
            bs_form_password('cis')
        );
    }

    public function test_form_textarea()
    {
        $this->assertEquals(
            '<textarea name="cis" cols="40" rows="10" class="form-control">CIS</textarea>',
            bs_form_textarea('cis', 'CIS')
        );
    }

    public function test_form_submit()
    {
        $this->assertEquals(
            '<input type="submit" name="cis" value="Submit" class="btn btn-primary" />',
            bs_form_submit('cis', 'Submit')
        );
    }

    public function test_form_reset()
    {
        $this->assertEquals(
            '<input type="reset" name="cis" value="Reset" class="btn btn-default" />',
            bs_form_reset('cis', 'Reset')
        );
    }

    public function test_form_button()
    {
        $this->assertEquals(
            '<button name="cis" type="button" class="btn btn-default">Button</button>',
            bs_form_button('cis', 'Button')
        );
    }

    public function test_form_dropdown()
    {
        $expected = '<select name="shirts">
<option value="small">Small Shirt</option>
<option value="med">Medium Shirt</option>
<option value="large" selected="selected">Large Shirt</option>
<option value="xlarge">Extra Large Shirt</option>
</select>';

        $options = array(
            'small'        => 'Small Shirt',
            'med'        => 'Medium Shirt',
            'large'        => 'Large Shirt',
            'xlarge'    => 'Extra Large Shirt',
        );

        $this->assertEquals($expected, form_dropdown('shirts', $options, 'large'));

        $expected = '<select name="shirts" multiple="multiple">
<option value="small" selected="selected">Small Shirt</option>
<option value="med">Medium Shirt</option>
<option value="large" selected="selected">Large Shirt</option>
<option value="xlarge">Extra Large Shirt</option>
</select>';

        $shirts_on_sale = array('small', 'large');

        $this->assertEquals($expected, form_dropdown('shirts', $options, $shirts_on_sale));

        $options = array(
            'Swedish Cars' => array(
                'volvo'    => 'Volvo',
                'saab'    => 'Saab'
            ),
            'German Cars' => array(
                'mercedes'    => 'Mercedes',
                'audi'        => 'Audi'
            )
        );

        $expected = '<select name="cars" multiple="multiple">
<optgroup label="Swedish Cars">
<option value="volvo" selected="selected">Volvo</option>
<option value="saab">Saab</option>
</optgroup>
<optgroup label="German Cars">
<option value="mercedes">Mercedes</option>
<option value="audi" selected="selected">Audi</option>
</optgroup>
</select>';

        $this->assertEquals($expected, form_dropdown('cars', $options, array('volvo', 'audi')));
    }

    public function test_form_multiselect()
    {
        $expected = '<select name="shirts[]"  multiple="multiple">
<option value="small">Small Shirt</option>
<option value="med" selected="selected">Medium Shirt</option>
<option value="large" selected="selected">Large Shirt</option>
<option value="xlarge">Extra Large Shirt</option>
</select>';

        $options = array(
            'small'        => 'Small Shirt',
            'med'        => 'Medium Shirt',
            'large'        => 'Large Shirt',
            'xlarge'    => 'Extra Large Shirt',
        );

        $this->assertEquals($expected, form_multiselect('shirts[]', $options, array('med', 'large')));
    }
}
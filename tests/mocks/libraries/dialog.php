<?php

class Mock_Libraries_Dialog extends Dialog {

    /**
     * Dialog library getter mockup
     * Mainly use to access the protected $data property
     */
    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
        else if (isset($this->data[$property]))
        {
            return $this->data[$property];
        }
    }
}
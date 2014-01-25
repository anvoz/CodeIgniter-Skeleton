<?php

class Mock_Libraries_Template extends Template {

    /**
     * Template library getter mockup
     * Use to access protected properties
     */
    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }

        return $this;
    }
}
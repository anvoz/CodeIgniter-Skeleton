<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class MetaData {

    protected $_metadata = array();

    /**
     * Add metadata
     *
     * @access  public
     * @param   string  $name
     * @param   string  $content
     * @return  void
     */
    public function add($name, $content) {
        $name = htmlspecialchars(strip_tags($name));
        $content = htmlspecialchars(strip_tags($content));

        $this->_metadata[$name] = $content;
    }

    public function get() {
        $metadata = array();
        foreach ($this->_metadata as $name => $content) {
            if (strpos($name, 'og:') === 0) {
                $metadata[] = '<meta property="' . $name . '" content="' . $content . '">';
            } else {
                $metadata[] = '<meta name="' . $name . '" content="' . $content . '">';
            }
        }
        return implode('', $metadata);
    }

}

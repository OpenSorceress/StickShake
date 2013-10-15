<?php

class Shaker {

    public $stick;
    public static $shook;
    protected $_things;

    public function __construct($stick = null) {
        if (isset($stick) && $stick != null) {
            $this->stick = $stick;
        } else {
            $this->stick = "stick";
        }
        $this->_things = new StdClass;
    }

    public static function shake($things = "everything") {
        if(is_array($things)) {
            foreach($things as $key=>$val) {
                $this->_things[$key] = $val;
            }
        } elseif ($things !== false && $things != null) {
            $this->_things[] = $things;
        }

        if (!isset(self::$shook) || empty(self::$shook)) {
            self::$shook = array();
        }
        foreach ($this->_things as $thing) {
            echo "shaking " + $this->stick + "at $thing!\n";
            array_push(self::$shook, $thing);                 
        }
        return self;
    }

}


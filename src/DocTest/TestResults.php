<?php

class TestResults
{
    public $failed;
    public $attempted;
    
    public function __construct($failed, $attempted)
    {
        $this->$failed = $failed;
        $this->$attempted = $attempted;
    }
}
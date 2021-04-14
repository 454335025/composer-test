<?php
namespace ComposerTest;

class Test
{
    private $str;
    public function __construct($str='')
    {
        $this->str = $str;
    }

    public function getStr()
    {
        return $this->str;
    }
}
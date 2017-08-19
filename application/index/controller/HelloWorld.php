<?php
namespace app\index\controller;

class HelloWorld
{
    public function index($name = 'wong')
    {
		return 'Hi, '.$name;
    }
}

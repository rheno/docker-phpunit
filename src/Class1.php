<?php

namespace namespace1;

class Class1
{

	public function __construct()
	{

	}

	public function sayHi($name)
	{
		if ($name == "rheno")
		{
			return "Hi Bos";
		}
	
		return "Hi ".$name;
	}
	
	public function square($x)
	{
		return $x * $x;
	}

}

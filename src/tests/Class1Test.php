<?php

require_once('src/Class1.php');

use namespace1\Class1;

use PHPUnit\Framework\TestCase;


class Class1Test extends TestCase
{
	protected $c1;

	public function setUp(): void
	{
		$this->c1 = new Class1();
	}

	public function testSayHi()
	{
		$this->assertEquals("Hi Bos", $this->c1->sayHi("rheno"));
		$this->assertEquals("Hi Budi", $this->c1->sayHi("Budi"));
	}

	public function testSquare()
	{
		$this->assertEquals(4, $this->c1->square(2));
	}
}

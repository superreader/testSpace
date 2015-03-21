<?php

require_once "../tmp.php";

class StackTest extends PHPUnit_Framework_TestCase
{

  public function testPushAndPop()
  {

    $test = new SimpleClass();
    $out = $test->displayVar();
    $test2 = new SimpleClass();

    $this->assertSame('a default value',$out);

  }
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StackTest
 *
 * @author jonmilsom
 */
class StackTest extends PHPUnit_Framework_TestCase 
{
    public function testArraySum()
    {
		$stack = new Stack();
		$this->assertEquals(6, $stack->arraySum(array(1,2,3)));
    }
}

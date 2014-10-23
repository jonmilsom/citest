<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stack
 *
 * @author jonmilsom
 */
class Stack 
{

	/**
	 * 
	 * @param array $array
	 * @return int
	 */
	public function arraySum(array $array=array()) {
		$total=0;
		foreach($array as $value) {
			$total = $total + intval($value);
		}
		return $total;
	}
	
}

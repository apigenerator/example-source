<?php

/**
 * ApiGenerator.org
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    apigenerator
 * @license    LGPL-3.0+
 * @filesource
 */

/**
 * This is an example class.
 */
class Example
{
	/**
	 * Return the input value $bar.
	 *
	 * @param string $bar
	 *
	 * @return string
	 */
	public function foo($bar = 'zap')
	{
		return $bar;
	}
	
	/**
	 * Return the opposite of bar.
	 *
	 * @return string
	 */
	protected function bar()
	{
		return 'foo';
	}
	
	/**
	 * Give you a "Hello world!".
	 *
	 * @param string $return
	 */
	private function zap(&$return)
	{
		$return = 'Hello world!';
	}
	
	/**
	 * This is an internal method!
	 *
	 * @internal
	 */
	public function internal()
	{
		throw new Exception('I\'m internal!');
	}
	
	/**
	 * This is a deprecated method!
	 *
	 * @deprecated
	 */
	public function deprecated()
	{
		throw new Exception('I\'m deprecated!');
	}
	
	/**
	 * This is a incomplete method!
	 *
	 * @todo I'm incomplete
	 * @incomplete
	 */
	public function incomplete()
	{
		// TODO I'm incomplete
	}
}

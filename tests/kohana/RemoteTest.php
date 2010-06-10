<?php

/**
 * Tests Kohana remote class
 *
 * @group kohana
 * @group kohana.remote
 *
 * @package    Unittest
 * @author     Kohana Team
 * @author     Jeremy Bush <contractfrombelow@gmail.com>
 * @copyright  (c) 2008-2010 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class Kohana_RemoteTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Provides test data for testGet()
	 * 
	 * @return array
	 */
	function providerGet()
	{
		return array(
			// $value, $result
			array('', TRUE),
			array('cat', FALSE),
		);
	}

	/**
	 * Tests Remote::get
	 *
	 * @test
	 * @dataProvider providerGet
	 * @param boolean $input  Input for File::mime
	 * @param boolean $expected Output for File::mime
	 */
	function testGet($input, $expected)
	{
		#$this->assertSame($expected, Remote::get($input));
	}

	/**
	 * Provides test data for testStatus()
	 * 
	 * @return array
	 */
	function providerStatus()
	{
		return array(
			// $value, $result
			array('http://www.google.com/', 200),
			array('http://www.google.com', 200),
			array('http://www.google.com/404', 404),
		);
	}

	/**
	 * Tests Remote::status
	 *
	 * @test
	 * @dataProvider providerStatus
	 * @param boolean $input  Input for File::mime
	 * @param boolean $expected Output for File::mime
	 */
	function testStatus($input, $expected)
	{
		$this->assertSame($expected, Remote::status($input));
	}
}
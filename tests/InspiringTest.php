<?php

namespace Gmsantosxl\Inspiring\Tests;

use Gmsantosxl\Inspiring\Inspiring;

class InspiringTest extends \PHPUnit_Framework_TestCase
{
	protected $quote;
	
	public function setUp(){
		$this->quote = Inspiring::quote();
	}
	
	public function test_quote_is_a_string(){
		$this->assertInternalType('string', $this->quote);
	}
	
	public function test_quote_follows_a_format(){
		$this->assertStringMatchesFormat('%a - %a', $this->quote);
	}
}

<?php

namespace Psecio\Jwt\Claim;

class AudienceTest extends \PHPUnit_Framework_TestCase
{
	private $claim;

	public function setUp()
	{
		$this->claim = new Audience('test');
	}

	public function tearDown()
	{
		unset($this->claim);
	}

	public function testGetType()
	{
		$type = $this->claim->getType();
		$this->assertEquals('aud', $type);
	}
}
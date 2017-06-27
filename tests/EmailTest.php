<?php
require_once (dirname(__FILE__) . "/../src/Email.php");

/**
 * Created by PhpStorm.
 * User: msav
 * Date: 28.06.2017
 * Time: 0:15
 */

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase {
	public function testCanBeCreatedFromValidEmailAddress()
	{
		$this->assertInstanceOf(
			Email::class,
			Email::fromString('user@example.com')
		);
	}

	public function testCannotBeCreatedFromInvalidEmailAddress()
	{
		$this->expectException(InvalidArgumentException::class);

		Email::fromString('invalid');
	}

	public function testCanBeUsedAsString()
	{
		$this->assertEquals(
			'user@example.com',
			Email::fromString('user@example.com')
		);
	}
}

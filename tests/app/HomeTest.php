<?php

namespace App;

use App\Controllers\Home;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;

class HomeTest extends CIUnitTestCase
{

	use ControllerTestTrait;

	public function testIndex()
	{
		$result = $this->withUri('http://l2d.loc')
					   ->controller(Home::class)
					   ->execute('index');

		$result->

		$this->assertTrue($result->isOK());
	}
}
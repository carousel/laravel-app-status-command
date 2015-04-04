<?php

class AppStatusCommandTestextends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testAppStatusCommand()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}

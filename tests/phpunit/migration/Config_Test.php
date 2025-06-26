/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

use Action_Scheduler\Migration\Config;

/**
 * Class Config_Test
 * @group migration
 */
class Config_Test extends ActionScheduler_UnitTestCase {
	public function test_source_store_required() {
		$config = new Config();
		$this->expectException( \RuntimeException::class );
		$config->get_source_store();
	}

	public function test_source_logger_required() {
		$config = new Config();
		$this->expectException( \RuntimeException::class );
		$config->get_source_logger();
	}

	public function test_destination_store_required() {
		$config = new Config();
		$this->expectException( \RuntimeException::class );
		$config->get_destination_store();
	}

	public function test_destination_logger_required() {
		$config = new Config();
		$this->expectException( \RuntimeException::class );
		$config->get_destination_logger();
	}
}
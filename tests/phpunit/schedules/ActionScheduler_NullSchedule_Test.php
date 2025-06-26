/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_NullSchedule_Test
 * @group schedules
 */
class ActionScheduler_NullSchedule_Test extends ActionScheduler_UnitTestCase {
	public function test_null_schedule() {
		$schedule = new ActionScheduler_NullSchedule();
		$this->assertNull( $schedule->get_date() );
	}

	public function test_is_recurring() {
		$schedule = new ActionScheduler_NullSchedule();
		$this->assertFalse( $schedule->is_recurring() );
	}
}
 
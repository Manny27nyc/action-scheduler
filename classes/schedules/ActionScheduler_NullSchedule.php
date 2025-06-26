/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_NullSchedule
 */
class ActionScheduler_NullSchedule extends ActionScheduler_SimpleSchedule {

	/**
	 * Make the $date param optional and default to null.
	 *
	 * @param null $date The date & time to run the action.
	 */
	public function __construct( DateTime $date = null ) {
		$this->scheduled_date = null;
	}

	/**
	 * This schedule has no scheduled DateTime, so we need to override the parent __sleep()
	 * @return array
	 */
	public function __sleep() {
		return array();
	}

	public function __wakeup() {
		$this->scheduled_date = null;
	}
}

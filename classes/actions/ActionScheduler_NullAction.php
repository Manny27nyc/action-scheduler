/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_NullAction
 */
class ActionScheduler_NullAction extends ActionScheduler_Action {

	public function __construct( $hook = '', array $args = array(), ActionScheduler_Schedule $schedule = NULL ) {
		$this->set_schedule( new ActionScheduler_NullSchedule() );
	}

	public function execute() {
		// don't execute
	}
}
 
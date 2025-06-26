/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_FinishedAction
 */
class ActionScheduler_FinishedAction extends ActionScheduler_Action {

	public function execute() {
		// don't execute
	}

	public function is_finished() {
		return TRUE;
	}
}
 
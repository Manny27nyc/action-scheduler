/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * ActionScheduler_Mock_AsyncRequest_QueueRunner
 */

defined( 'ABSPATH' ) || exit;

/**
 * ActionScheduler_Mock_AsyncRequest_QueueRunner class.
 */
class ActionScheduler_Mock_AsyncRequest_QueueRunner extends ActionScheduler_AsyncRequest_QueueRunner {

	/**
	 * Do not run queues via async requests.
	 */
	protected function allow() {
		return false;
	}
}

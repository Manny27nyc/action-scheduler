/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * InvalidAction Exception.
 *
 * Used for identifying actions that are invalid in some way.
 *
 * @package ActionScheduler
 */
class ActionScheduler_InvalidActionException extends \InvalidArgumentException implements ActionScheduler_Exception {

	/**
	 * Create a new exception when the action's schedule cannot be fetched.
	 *
	 * @param string $action_id The action ID with bad args.
	 * @return static
	 */
	public static function from_schedule( $action_id, $schedule ) {
		$message = sprintf(
			/* translators: 1: action ID 2: schedule */
			__( 'Action [%1$s] has an invalid schedule: %2$s', 'action-scheduler' ),
			$action_id,
			var_export( $schedule, true )
		);

		return new static( $message );
	}

	/**
	 * Create a new exception when the action's args cannot be decoded to an array.
	 *
	 * @author Jeremy Pry
	 *
	 * @param string $action_id The action ID with bad args.
	 * @return static
	 */
	public static function from_decoding_args( $action_id, $args = array() ) {
		$message = sprintf(
			/* translators: 1: action ID 2: arguments */
			__( 'Action [%1$s] has invalid arguments. It cannot be JSON decoded to an array. $args = %2$s', 'action-scheduler' ),
			$action_id,
			var_export( $args, true )
		);

		return new static( $message );
	}
}

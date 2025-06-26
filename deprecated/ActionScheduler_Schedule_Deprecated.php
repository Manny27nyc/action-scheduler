/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_Abstract_Schedule
 */
abstract class ActionScheduler_Schedule_Deprecated implements ActionScheduler_Schedule {

	/**
	 * Get the date & time this schedule was created to run, or calculate when it should be run
	 * after a given date & time.
	 *
	 * @param DateTime $after DateTime to calculate against.
	 *
	 * @return DateTime|null
	 */
	public function next( DateTime $after = null ) {
		if ( empty( $after ) ) {
			$return_value       = $this->get_date();
			$replacement_method = 'get_date()';
		} else {
			$return_value       = $this->get_next( $after );
			$replacement_method = 'get_next( $after )';
		}

		_deprecated_function( __METHOD__, '3.0.0', __CLASS__ . '::' . $replacement_method ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		return $return_value;
	}
}

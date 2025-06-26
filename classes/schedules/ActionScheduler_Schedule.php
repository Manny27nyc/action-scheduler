/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_Schedule
 */
interface ActionScheduler_Schedule {
	/**
	 * @param DateTime $after
	 * @return DateTime|null
	 */
	public function next( DateTime $after = NULL );

	/**
	 * @return bool
	 */
	public function is_recurring();
}
 
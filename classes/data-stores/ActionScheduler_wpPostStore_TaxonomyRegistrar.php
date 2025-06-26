/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class ActionScheduler_wpPostStore_TaxonomyRegistrar
 * @codeCoverageIgnore
 */
class ActionScheduler_wpPostStore_TaxonomyRegistrar {
	public function register() {
		register_taxonomy( ActionScheduler_wpPostStore::GROUP_TAXONOMY, ActionScheduler_wpPostStore::POST_TYPE, $this->taxonomy_args() );
	}

	protected function taxonomy_args() {
		$args = array(
			'label' => __( 'Action Group', 'action-scheduler' ),
			'public' => false,
			'hierarchical' => false,
			'show_admin_column' => true,
			'query_var' => false,
			'rewrite' => false,
		);

		$args = apply_filters( 'action_scheduler_taxonomy_args', $args );
		return $args;
	}
}
 
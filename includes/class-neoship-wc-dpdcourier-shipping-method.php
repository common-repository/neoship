<?php
/**
 * File define 123 kurier shipping method.
 *
 * @link  https://neoship.sk
 * @since 2.0.0
 *
 * @package    Neoship
 * @subpackage Neoship/includes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/class-neoship-wc-shipipng-class.php';

/**
 * This is used to define DPD kurier shipping method.
 *
 * @since      2.0.0
 * @package    Neoship
 * @subpackage Neoship/includes
 * @author     IT <it@neoship.sk>
 */
class Neoship_WC_DpdCourier_Shipping_Method extends Neoship_WC_Shipping {

	/**
	 * Constructor.
	 *
	 * @param int $instance_id Instance id.
	 */
	public function __construct( $instance_id = 0 ) {
		parent::__construct( $instance_id );
		$this->id           = 'neoship_dpdcourier';
		$this->method_title = __( 'DPD kuriér', 'neoship' );
		$this->title        = __( 'DPD kuriér', 'neoship' );
		$this->init();
	}

}

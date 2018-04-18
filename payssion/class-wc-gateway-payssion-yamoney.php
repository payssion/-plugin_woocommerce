<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( 'class-wc-gateway-payssion.php' );

/**
 * Payssion 
 *
 * @class 		WC_Gateway_Payssion_Yamoney
 * @extends		WC_Payment_Gateway
 * @version		1.0.1
 * @author 		Payssion
 */
class WC_Gateway_Payssion_Yamoney extends WC_Gateway_Payssion {
	protected $pm_id = 'yamoney';
	public $title = 'Yandex.Money';
}
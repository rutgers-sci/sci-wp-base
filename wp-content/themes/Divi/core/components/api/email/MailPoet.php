<?php

/**
 * Wrapper for MailPoet's API.
 *
 * @since   3.0.76
 *
 * @package ET\Core\API\Email
 */
class ET_Core_API_Email_MailPoet extends ET_Core_API_Email_Provider {

	/**
	 * @var ET_Core_API_Email_Provider
	 */
	private $_MP;

	public static $PLUGIN_REQUIRED;

	/**
	 * @inheritDoc
	 */
	public $name = 'MailPoet';

	/**
	 * @inheritDoc
	 */
	public $slug = 'mailpoet';

	public function __construct( $owner = '', $account_name = '', $api_key = '' ) {
		parent::__construct( $owner, $account_name, $api_key );

		if ( null === self::$PLUGIN_REQUIRED ) {
			self::$PLUGIN_REQUIRED = esc_html__( 'MailPoet plugin is either not installed or not activated.', 'et_core' );
		}

		$has_php53 = version_compare( PHP_VERSION, '5.3', '>=' );

		if ( $has_php53 && class_exists( '\MailPoet\API\API' ) ) {
			require_once( ET_CORE_PATH . 'components/api/email/_MailPoet3.php' );
			$this->_init_provider_class( '3', $owner, $account_name, $api_key );

		} else if ( class_exists( 'WYSIJA' ) ) {
			require_once( ET_CORE_PATH . 'components/api/email/_MailPoet2.php' );
			$this->_init_provider_class( '2', $owner, $account_name, $api_key );
		}
	}

	protected function _init_provider_class( $version = '2', $owner, $account_name, $api_key ) {
		if ( '3' === $version ) {
			$this->_MP = new ET_Core_API_Email_MailPoet3( $owner, $account_name, $api_key );
		} else {
			$this->_MP = new ET_Core_API_Email_MailPoet2( $owner, $account_name, $api_key );
		}
	}

	/**
	 * @inheritDoc
	 */
	public function get_account_fields() {
		return array();
	}

	/**
	 * @inheritDoc
	 */
	public function get_data_keymap( $keymap = array(), $custom_fields_key = '' ) {
		if ( $this->_MP ) {
			return $this->_MP->get_data_keymap( $keymap, $custom_fields_key );
		}

		$keymap = array(
			'list'       => array(
				'list_id' => 'id',
				'name'    => 'name',
			),
			'subscriber' => array(
				'name'      => 'first_name',
				'last_name' => 'last_name',
				'email'     => 'email',
			),
		);

		return parent::get_data_keymap( $keymap, $custom_fields_key );
	}

	/**
	 * @inheritDoc
	 */
	public function fetch_subscriber_lists() {
		return $this->_MP ? $this->_MP->fetch_subscriber_lists() : self::$PLUGIN_REQUIRED;
	}

	/**
	 * @inheritDoc
	 */
	public function subscribe( $args, $url = '' ) {
		return $this->_MP ? $this->_MP->subscribe( $args, $url ) : self::$PLUGIN_REQUIRED;
	}
}

<?php
/**
 * Abstract send email
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Network\Email;

/**
 * Abstract transport for sending email
 *
 */
abstract class AbstractTransport {

/**
 * Configurations
 *
 * @var array
 */
	protected $_config = array();

/**
 * Send mail
 *
 * @param \Cake\Network\Email\Email $email
 * @return array
 */
	abstract public function send(Email $email);

/**
 * Constructor
 *
 * @param array $config The configuration data for the transport.
 */
	public function __construct($config = null) {
		$this->config($config);
	}

/**
 * Set the config
 *
 * @param array $config
 * @return array Returns configs
 */
	public function config($config = null) {
		if (is_array($config)) {
			$this->_config = $config + $this->_config;
		}
		return $this->_config;
	}

/**
 * Help to convert headers in string
 *
 * @param array $headers Headers in format key => value
 * @param string $eol
 * @return string
 */
	protected function _headersToString($headers, $eol = "\r\n") {
		$out = '';
		foreach ($headers as $key => $value) {
			if ($value === false || $value === null || $value === '') {
				continue;
			}
			$out .= $key . ': ' . $value . $eol;
		}
		if (!empty($out)) {
			$out = substr($out, 0, -1 * strlen($eol));
		}
		return $out;
	}

}
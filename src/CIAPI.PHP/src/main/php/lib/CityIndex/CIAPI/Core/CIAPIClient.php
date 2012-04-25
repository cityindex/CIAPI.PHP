<?php

namespace CityIndex\CIAPI\Core;

require_once 'lib/CityIndex/CIAPI/Core/CIAPI.php';
require_once 'lib/CityIndex/CIAPI/DTO/DTO.php';

use CityIndex\CIAPI\DTO\ApiLogOnResponseDTO;


/**
 * City Index Trading API (CIAPI) client.
 */
class CIAPIClient implements CIAPI {
	private $userName;
	private $session;
	
	/**
	 * Log In
	 *
	 * @param string $userName
	 * @param string $password
	 * @return ApiLogOnResponseDTO $response
	 */
	public function logIn($userName, $password) {
		$this->userName = $userName;
		
		return null;
	}

	/**
	 * Log Out
	 *
	 * @return bool $result
	 */
	public function logOut() {
		$this->session = null;
		
		return true;
	}

	/**
	 * Change Password
	 *
	 * @param string $userName
	 * @param string $password
	 * @return ApiLogOnResponseDTO $response
	 */
	public function changePassword($userName, $password) {
		// @todo: strangely the following chokes with PHPUnit currently:
		// throw new RuntimeException("Not implemented!");
		return null;
	}
	
	/**
	 * Get UserName
	 *
	 * @return string $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * Get Session
	 *
	 * @return string $session
	 */
	public function getSession() {
		return $this->session;
	}
}
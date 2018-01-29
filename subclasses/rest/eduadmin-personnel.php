<?php

class EduAdmin_REST_Personnel extends EduAdminRESTClient {
	protected $api_url = "/v1/Personnel";

	public function Login( EduAdmin_Data_PersonnelLogin $login ) {
		return parent::POST( "Login",
			$login,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $personnelId
	 * @param string $password
	 *
	 * @return mixed
	 */
	public function LoginById( $personnelId, $password ) {
		return parent::POST( "/$personnelId/Login",
			array(
				'password' => $password
			),
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $personnelId
	 *
	 * @return mixed
	 */
	public function SendResetPasswordEmailById( $personnelId ) {
		return parent::POST( "/$personnelId/SendResetPasswordEmail",
			array(),
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param string $email
	 *
	 * @return mixed
	 */
	public function SendResetPasswordEmail( $email ) {
		return parent::POST( "/SendResetPasswordEmail",
			array(
				'email' => $email
			),
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

class EduAdmin_Data_PersonnelLogin {
	/** @var string|null $Email */
	public $Email = null;
	/** @var string|null $Password */
	public $Password = null;
}
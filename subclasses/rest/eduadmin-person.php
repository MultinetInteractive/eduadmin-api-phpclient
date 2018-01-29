<?php

class EduAdmin_REST_Person extends EduAdminRESTClient {
	protected $api_url = "/v1/Person";

	public function Create( EduAdmin_Data_Person $person, $skipDuplicateMatch = false ) {
		$query = array();
		if ( $skipDuplicateMatch ) {
			$query["skipDuplicateMatch"] = "true";
		}

		return parent::POST( "?" . http_build_query( $query ),
			$person,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	public function Update( EduAdmin_Data_Person $person ) {
		return parent::PATCH( "",
			$person,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	public function Login( EduAdmin_Data_PersonLogin $login ) {
		return parent::POST( "Login",
			$login,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $personId
	 * @param string $password
	 *
	 * @return mixed
	 */
	public function LoginById( $personId, $password ) {
		return parent::POST( "/$personId/Login",
			array(
				'password' => $password
			),
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $personId
	 *
	 * @return mixed
	 */
	public function SendResetPasswordEmailById( $personId ) {
		return parent::POST( "/$personId/SendResetPasswordEmail",
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


class EduAdmin_Data_PersonLogin {
	/** @var string|null $Email */
	public $Email = null;
	/** @var string|null $Password */
	public $Password = null;
}

class EduAdmin_Data_Person {
	/** @var string|null $FirstName */
	public $FirstName = null;
	/** @var string|null $LastName */
	public $LastName = null;
	/** @var string|null $Address */
	public $Address = null;
	/** @var string|null $Address2 */
	public $Address2 = null;
	/** @var string|null $Zip */
	public $Zip = null;
	/** @var string|null $City */
	public $City = null;
	/** @var string|null $Mobile */
	public $Mobile = null;
	/** @var string|null $Phone */
	public $Phone = null;
	/** @var string|null $Email */
	public $Email = null;
	/** @var string|null $CivicRegistrationNumber */
	public $CivicRegistrationNumber = null;
	/** @var string|null $EmployeeNumber */
	public $EmployeeNumber = null;
	/** @var string|null $JobTitle */
	public $JobTitle = null;
	/** @var string|null $Country */
	public $Country = null;
	/** @var string|null $Password */
	public $Password = null;
	/** @var integer|null $CustomerId */
	public $CustomerId = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var EADP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
}

class EADP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}
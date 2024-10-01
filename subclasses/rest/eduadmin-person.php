<?php

/**
 * Class EduAdmin_REST_Person
 */
class EduAdmin_REST_Person extends EduAdminRESTClient {
	protected $api_url = '/v1/Person';

	/**
	 * @param EduAdmin_Data_Person|stdClass|object $person
	 * @param bool                                 $skip_duplicate_match
	 *
	 * @return mixed
	 */
	public function Create( $person, $skip_duplicate_match = false ) {
		$query = array();
		if ( $skip_duplicate_match ) {
			$query['skipDuplicateMatch'] = 'true';
		}

		return parent::POST( '?' . http_build_query( $query ),
		                     $person,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param integer                              $person_id
	 * @param EduAdmin_Data_Person|stdClass|object $person
	 *
	 * @return mixed
	 */
	public function Update( $person_id, $person ) {
		return parent::PATCH( "/$person_id",
		                      $person,
		                      get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_Login|stdClass|object $login
	 *
	 * @return mixed
	 */
	public function Login( $login ) {
		return parent::POST( '/Login',
		                     $login,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param integer $person_id
	 * @param string  $password
	 *
	 * @return mixed
	 */
	public function LoginById( $person_id, $password ) {
		return parent::POST( "/$person_id/Login",
		                     $password,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param integer $person_id
	 *
	 * @return mixed
	 */
	public function SendResetPasswordEmailById( $person_id ) {
		return parent::POST( "/$person_id/SendResetPasswordEmail",
		                     array(),
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param string $email
	 *
	 * @return mixed
	 */
	public function SendResetPasswordEmail( $email ) {
		return parent::POST( '/SendResetPasswordEmail',
		                     array(
			                     'email' => $email,
		                     ),
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param integer      $person_id
	 * @param integer      $customer_id
	 * @param boolean|null $remove_from_old_customer
	 * @param string|null  $remove_date
	 * @param boolean|null $merge_duplicates
	 *
	 * @return array|mixed
	 */
	public function ConnectToOtherCustomer( $person_id, $customer_id, $remove_from_old_customer = true, $remove_date = null, $merge_duplicates = true ) {
		return parent::POST( "/$person_id/ConnectToOtherCustomer",
		                     array(
			                     'CustomerId'            => $customer_id,
			                     'RemoveFromOldCustomer' => $remove_from_old_customer,
			                     'RemoveDate'            => $remove_date,
			                     'MergeDuplicates'       => $merge_duplicates,
		                     ),
		                     get_called_class() . '|' . __FUNCTION__
		);
	}
}

<?php

/**
 * Class EduAdmin_REST_Consent
 */
class EduAdmin_REST_Consent extends EduAdminRESTClient {
	protected $api_url = '/v1/Consent';

	/**
	 * @param string $civic_registration_number
	 * @param string $country_code
	 *
	 * @return bool|mixed
	 */
	public function ID06( $civic_registration_number, $country_code ) {
		return parent::POST(
			'/IsValid',
			array(
				'CivicRegistrationNumber' => $civic_registration_number,
				'CountryCode'             => $country_code,
			),
			get_called_class() . '|' . __FUNCTION__
		);
	}
}

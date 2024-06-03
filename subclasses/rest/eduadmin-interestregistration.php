<?php

/**
 * Class EduAdmin_REST_InterestRegistration
 */
class EduAdmin_REST_InterestRegistration extends EduAdminRESTClient {
	protected $api_url = '/v1/InterestRegistration';

	/**
	 * @param EduAdmin_Data_InterestRegistrationBasic|stdClass|object $basic
	 *
	 * @return mixed
	 */
	public function CreateBasic( $basic ) {
		return parent::POST( '/CreateBasic',
		                     $basic,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_ProgrammeInterestRegistrationBasic|stdClass|object $basic
	 *
	 * @return mixed
	 */
	public function CreateBasicProgramme( $basic ) {
		return parent::POST( '/CreateBasicProgramme',
		                     $basic,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_InterestRegistrationComplete|stdClass|object $complete
	 *
	 * @return mixed
	 */
	public function CreateComplete( $complete ) {
		return parent::POST( '/CreateComplete',
		                     $complete,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_ProgrammeInterestRegistrationComplete|stdClass|object $complete
	 *
	 * @return mixed
	 */
	public function CreateCompleteProgrammeBooking( $complete ) {
		return parent::POST( '/CreateCompleteProgrammeBooking',
		                     $complete,
		                     get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param integer $interest_registration_id
	 *
	 * @return array|mixed
	 */
	public function DeleteInterestRegistration( $interest_registration_id ) {
		return parent::DELETE( "/$interest_registration_id",
		                       array(),
		                       get_called_class() . '|' . __FUNCTION__
		);
	}
}

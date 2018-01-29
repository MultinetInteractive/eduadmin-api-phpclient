<?php

class EduAdmin_REST_ProgrammeBooking extends EduAdminRESTClient {
	protected $api_url = "/v1/ProgrammeBooking";

	public function Book( EduAdmin_Data_ProgrammeBooking $programmeBooking ) {
		return parent::POST(
			"",
			$programmeBooking,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	public function SendEmail( $programmeBookingId, EduAdmin_Data_Mail $pbEmail ) {
		return parent::POST(
			"/$programmeBookingId/Email/Send",
			$pbEmail,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	public function SendEmailAdvanced( $programmeBookingId, EduAdmin_Data_MailAdvanced $pbEmail ) {
		return parent::POST(
			"/$programmeBookingId/Email/SendAdvanced",
			$pbEmail,
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

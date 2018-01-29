<?php

class EduAdmin_REST_Organisation extends EduAdminRESTClient {
	protected $api_url = "/v1/Organisation";

	public function GetOrganisation() {
		return parent::GET( "", array(), get_called_class() . "|" . __FUNCTION__ );
	}
}
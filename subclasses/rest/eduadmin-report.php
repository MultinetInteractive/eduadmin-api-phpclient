<?php

class EduAdmin_REST_Report extends EduAdminRESTClient {
	protected $api_url = "/v1/Report";

	/**
	 * @param integer $reportId
	 * @param EduAdmin_REST_ReportOptions $options
	 *
	 * @return mixed
	 */
	public function CreateUrl( $reportId, EduAdmin_REST_ReportOptions $options ) {
		return parent::POST( "/$reportId/CreateUrl", $options, get_called_class() . "|" . __FUNCTION__ );
	}
}

class EduAdmin_REST_ReportOptions {
	/** @var string */
	public $ReportName = null;
	/** @var EduAdmin_REST_ReportOptionParameter[] */
	public $Parameters = null;
}

class EduAdmin_REST_ReportOptionParameter {
	/** @var string */
	public $Name = null;
	/** @var string */
	public $Value = null;
}
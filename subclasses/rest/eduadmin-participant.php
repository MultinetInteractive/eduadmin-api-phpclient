<?php

class EduAdmin_REST_Participant extends EduAdminRESTClient {
	protected $api_url = "/v1/Participant";

	/**
	 * @param integer $participantId
	 *
	 * @return mixed
	 */
	public function CancelParticipant( $participantId ) {
		return parent::POST(
			"/$participantId/Cancel",
			array(),
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $participantId
	 * @param EduAdmin_Data_AddParticipantSession[] ...$sessions
	 *
	 * @return mixed
	 */
	public function AddToSessions( $participantId, EduAdmin_Data_AddParticipantSession... $sessions ) {
		return parent::POST(
			"/$participantId/AddToSessions",
			$sessions,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $participantId
	 * @param integer[] $sessionIds
	 *
	 * @return mixed
	 */
	public function RemoveSessions( $participantId, $sessionIds ) {
		return parent::POST( "/$participantId/RemoveFromSessions",
			$sessionIds,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_ArrivalStatus[] ...$arrival_status
	 *
	 * @return mixed
	 */
	public function MarkAsArrived( EduAdmin_Data_ArrivalStatus... $arrival_status ) {
		return parent::POST( "/Arrived",
			$arrival_status,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_ArrivalStatus[] ...$arrival_status
	 *
	 * @return mixed
	 */
	public function MarkAsNotArrived( EduAdmin_Data_ArrivalStatus... $arrival_status ) {
		return parent::POST( "/NotArrived",
			$arrival_status,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_GradeData $grade_data
	 *
	 * @return mixed
	 */
	public function Grade( EduAdmin_Data_GradeData $grade_data ) {
		return parent::POST( "/Grade",
			$grade_data,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $participantId
	 * @param EduAdmin_Data_ParticipantData $participant_data
	 *
	 * @return mixed
	 */
	public function Update( $participantId, EduAdmin_Data_ParticipantData $participant_data ) {
		return parent::PATCH( "/$participantId",
			$participant_data,
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

class EduAdmin_Data_AddParticipantSession {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}

class EduAdmin_Data_ArrivalStatus {
	/** @var integer|null $EventDateId */
	public $EventDateId = null;
	/** @var integer|null $ParticipantId */
	public $ParticipantId = null;
	/** @var string|null $Comment */
	public $Comment = null;
}

class EduAdmin_Data_GradeData {
	/** @var integer[]|null $ParticipantIds */
	public $ParticipantIds = null;
	/** @var integer|null $GradeId */
	public $GradeId = null;
}

class EduAdmin_Data_ParticipantData {
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
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var string|null $Password */
	public $Password = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var EADPD_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
}

class EADPD_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}
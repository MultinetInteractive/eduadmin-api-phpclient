<?php

/**
 * Class EduAdminToken
 */
class EduAdminToken {
	/**
	 * @var string|null
	 */
	public $AccessToken = null;
	/**
	 * @var string|null
	 */
	public $TokenType = null;
	/**
	 * @var integer|null
	 */
	public $ExpiresIn = null;
	public $UserName = null;
	public $Issued = null;
	public $Expires = null;

	/**
	 * EduAdminToken constructor.
	 *
	 * @param $obj
	 */
	public function __construct( $obj ) {
		if ( null === $obj ) {
			die( "Could not deserialize the token" );
		}

		$this->AccessToken = $obj["access_token"];
		$this->TokenType   = $obj["token_type"];
		$this->ExpiresIn   = $obj["expires_in"];
		$this->UserName    = $obj["userName"];
		$this->Issued      = strtotime( $obj[".issued"] );
		$this->Expires     = strtotime( $obj[".expires"] );
	}

	/**
	 * Checks if token is valid
	 * @return bool
	 */
	public function IsValid() {
		return strtotime( "now" ) < $this->Expires;
	}
}

/**
 * Class EduAdmin_ODataHolder
 */
class EduAdmin_ODataHolder {
	/** @var EduAdmin_OData_Bookings|null */
	public $Bookings = null;
	/** @var EduAdmin_OData_Categories|null */
	public $Categories = null;
	/** @var EduAdmin_OData_CourseLevels|null */
	public $CourseLevels = null;
	/** @var EduAdmin_OData_CourseTemplates|null */
	public $CourseTemplates = null;
	/** @var EduAdmin_OData_CustomerGroups|null */
	public $CustomerGroups = null;
	/** @var EduAdmin_OData_Customers|null */
	public $Customers = null;
	/** @var EduAdmin_OData_Events|null */
	public $Events = null;
	/** @var EduAdmin_OData_Grades|null */
	public $Grades = null;
	/** @var EduAdmin_OData_InterestRegistrations|null */
	public $InterestRegistrations = null;
	/** @var EduAdmin_OData_Locations|null */
	public $Locations = null;
	/** @var EduAdmin_OData_Personnel|null */
	public $Personnel = null;
	/** @var EduAdmin_OData_Persons|null */
	public $Persons = null;
	/** @var EduAdmin_OData_ProgrammeBookings|null */
	public $ProgrammeBookings = null;
	/** @var EduAdmin_OData_Programmes|null */
	public $Programmes = null;
	/** @var EduAdmin_OData_ProgrammeStarts|null */
	public $ProgrammeStarts = null;
	/** @var EduAdmin_OData_Regions|null */
	public $Regions = null;
	/** @var EduAdmin_OData_Reports|null */
	public $Reports = null;
}

/**
 * Class EduAdmin_RESTHolder
 */
class EduAdmin_RESTHolder {
	/** @var EduAdmin_REST_Booking|null */
	public $Booking = null;
	/** @var EduAdmin_REST_Coupon|null */
	public $Coupon = null;
	/** @var EduAdmin_REST_Customer|null */
	public $Customer = null;
	/** @var EduAdmin_REST_Event|null */
	public $Event = null;
	/** @var EduAdmin_REST_InterestRegistration|null */
	public $InterestRegistration = null;
	/** @var EduAdmin_REST_Organisation|null */
	public $Organisation = null;
	/** @var EduAdmin_REST_Participant|null */
	public $Participant = null;
	/** @var EduAdmin_REST_Person|null */
	public $Person = null;
	/** @var EduAdmin_REST_Personnel|null */
	public $Personnel = null;
	/** @var EduAdmin_REST_ProgrammeBooking|null */
	public $ProgrammeBooking = null;
	/** @var EduAdmin_REST_Report|null */
	public $Report = null;
}
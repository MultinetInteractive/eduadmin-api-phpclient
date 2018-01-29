<?php

class EduAdmin_REST_InterestRegistration extends EduAdminRESTClient {
	protected $api_url = "/v1/InterestRegistration";

	/**
	 * @param EduAdmin_Data_InterestRegistrationBasic $basic
	 *
	 * @return mixed
	 */
	public function CreateBasic( EduAdmin_Data_InterestRegistrationBasic $basic ) {
		return parent::POST( "CreateBasic",
			$basic,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_InterestRegistrationComplete $complete
	 *
	 * @return mixed
	 */
	public function CreateComplete( EduAdmin_Data_InterestRegistrationComplete $complete ) {
		return parent::POST( "CreateComplete",
			$complete,
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

class EduAdmin_Data_InterestRegistrationBasic {
	/** @var integer|null $CourseTemplateId */
	public $CourseTemplateId = null;
	/** @var integer|null $EventId */
	public $EventId = null;
	/** @var integer|null $NumberOfParticipants */
	public $NumberOfParticipants = null;
	/** @var string|null $CompanyName */
	public $CompanyName = null;
	/** @var string|null $FirstName */
	public $FirstName = null;
	/** @var string|null $LastName */
	public $LastName = null;
	/** @var string|null $Email */
	public $Email = null;
	/** @var string|null $Phone */
	public $Phone = null;
	/** @var string|null $Mobile */
	public $Mobile = null;
	/** @var string|null $Notes */
	public $Notes = null;
}

class EduAdmin_Data_InterestRegistrationComplete {
	/** @var integer|null $EventId */
	public $EventId = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var integer|null $PaymentMethodId */
	public $PaymentMethodId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var string|null $Notes */
	public $Notes = null;
	/** @var string|null $PurchaseOrderNumber */
	public $PurchaseOrderNumber = null;
	/** @var string|null $CouponCode */
	public $CouponCode = null;
	/** @var string|null $PostponedBillingDate */
	public $PostponedBillingDate = null;
	/** @var EADIRC_Options|null $Options */
	public $Options = null;
	/** @var EADIRC_Customer|null $Customer */
	public $Customer = null;
	/** @var EADIRC_ContactPerson|null $ContactPerson */
	public $ContactPerson = null;
	/** @var EADIRC_SendConfirmationEmail|null $SendConfirmationEmail */
	public $SendConfirmationEmail = null;
	/** @var EADIRC_Participants[]|null $Participants */
	public $Participants = null;
	/** @var EADIRC_UnnamedParticipants[]|null $UnnamedParticipants */
	public $UnnamedParticipants = null;
	/** @var EADIRC_Answers[]|null $Answers */
	public $Answers = null;
	/** @var EADIRC_Accessories[]|null $Accessories */
	public $Accessories = null;
}

class EADIRC_Options {
	/** @var boolean|null $SkipDuplicateMatchOnCustomer */
	public $SkipDuplicateMatchOnCustomer = null;
	/** @var boolean|null $SkipDuplicateMatchOnPersons */
	public $SkipDuplicateMatchOnPersons = null;
	/** @var boolean|null $IgnoreIfPersonAlreadyBooked */
	public $IgnoreIfPersonAlreadyBooked = null;
	/** @var boolean|null $IgnoreMandatoryQuestions */
	public $IgnoreMandatoryQuestions = null;
}


class EADIRC_Customer {
	/** @var integer|null $CustomerId */
	public $CustomerId = null;
	/** @var boolean|null $UpdateCustomerInformation */
	public $UpdateCustomerInformation = null;
	/** @var string|null $CustomerName */
	public $CustomerName = null;
	/** @var string|null $CustomerNumber */
	public $CustomerNumber = null;
	/** @var string|null $Address */
	public $Address = null;
	/** @var string|null $Address2 */
	public $Address2 = null;
	/** @var string|null $Zip */
	public $Zip = null;
	/** @var string|null $City */
	public $City = null;
	/** @var string|null $Country */
	public $Country = null;
	/** @var string|null $OrganisationNumber */
	public $OrganisationNumber = null;
	/** @var string|null $Email */
	public $Email = null;
	/** @var string|null $Phone */
	public $Phone = null;
	/** @var string|null $Mobile */
	public $Mobile = null;
	/** @var string|null $Notes */
	public $Notes = null;
	/** @var string|null $Web */
	public $Web = null;
	/** @var integer|null $CustomerGroupId */
	public $CustomerGroupId = null;
	/** @var string|null $CustomerGroupName */
	public $CustomerGroupName = null;
	/** @var EADIRCC_BillingInfo|null $BillingInfo */
	public $BillingInfo = null;
	/** @var EADIRCC_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
}

class EADIRCC_BillingInfo {
	/** @var integer|null $OptionalBillingCustomerId */
	public $OptionalBillingCustomerId = null;
	/** @var string|null $CustomerName */
	public $CustomerName = null;
	/** @var string|null $Address */
	public $Address = null;
	/** @var string|null $Address2 */
	public $Address2 = null;
	/** @var string|null $Zip */
	public $Zip = null;
	/** @var string|null $City */
	public $City = null;
	/** @var string|null $Country */
	public $Country = null;
	/** @var string|null $OrganisationNumber */
	public $OrganisationNumber = null;
	/** @var string|null $VatNumber */
	public $VatNumber = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var string|null $OurReference */
	public $OurReference = null;
	/** @var string|null $EdiReference */
	public $EdiReference = null;
	/** @var string|null $Email */
	public $Email = null;
	/** @var boolean|null $NoVat */
	public $NoVat = null;
	/** @var integer|null $InvoiceDeliveryMethodId */
	public $InvoiceDeliveryMethodId = null;
}


class EADIRCC_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADIRC_ContactPerson {
	/** @var boolean|null $AddAsParticipant */
	public $AddAsParticipant = null;
	/** @var integer|null $PersonId */
	public $PersonId = null;
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
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var integer|null $SeatId */
	public $SeatId = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var EADIRCCP_Sessions[]|null $Sessions */
	public $Sessions = null;
	/** @var EADIRCCP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADIRCCP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADIRCCP_Sessions {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}


class EADIRCCP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADIRCCP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADIRC_SendConfirmationEmail {
	/** @var boolean|null $SendToParticipants */
	public $SendToParticipants = null;
	/** @var boolean|null $SendToCustomer */
	public $SendToCustomer = null;
	/** @var boolean|null $SendToCustomerContact */
	public $SendToCustomerContact = null;
	/** @var string[]|null $SendEmailCopyTo */
	public $SendEmailCopyTo = null;
}


class EADIRC_Participants {
	/** @var integer|null $PersonId */
	public $PersonId = null;
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
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var integer|null $SeatId */
	public $SeatId = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var EADIRCP_Sessions[]|null $Sessions */
	public $Sessions = null;
	/** @var EADIRCP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADIRCP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADIRCP_Sessions {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}


class EADIRCP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADIRCP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADIRC_UnnamedParticipants {
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var integer|null $Quantity */
	public $Quantity = null;
}


class EADIRC_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADIRC_Accessories {
	/** @var integer|null $AccessoryId */
	public $AccessoryId = null;
	/** @var integer|null $Quantity */
	public $Quantity = null;
}


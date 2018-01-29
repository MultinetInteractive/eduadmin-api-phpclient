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

	public function SendEmail( $programmeBookingId, EduAdmin_Data_ProgrammeBooking_Email $pbEmail ) {
		return parent::POST(
			"/$programmeBookingId/Email/Send",
			$pbEmail,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	public function SendEmailAdvanced( $programmeBookingId, EduAdmin_Data_ProgrammeBooking_EmailAdvanced $pbEmail ) {
		return parent::POST(
			"/$programmeBookingId/Email/SendAdvanced",
			$pbEmail,
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

class EduAdmin_Data_ProgrammeBooking {
	/** @var integer|null $ProgrammeStartId */
	public $ProgrammeStartId = null;
	/** @var boolean|null $Preliminary */
	public $Preliminary = null;
	/** @var integer|null $PaymentMethodId */
	public $PaymentMethodId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var string|null $Notes */
	public $Notes = null;
	/** @var EADPB_Customer|null $Customer */
	public $Customer = null;
	/** @var EADPB_ContactPerson|null $ContactPerson */
	public $ContactPerson = null;
	/** @var EADPB_Options|null $Options */
	public $Options = null;
	/** @var EADPB_SendConfirmationEmail|null $SendConfirmationEmail */
	public $SendConfirmationEmail = null;
	/** @var EADPB_Participants[]|null $Participants */
	public $Participants = null;
	/** @var EADPB_PriceRows[]|null $PriceRows */
	public $PriceRows = null;
	/** @var EADPB_Answers[]|null $Answers */
	public $Answers = null;
}

class EADPB_Customer {
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
	/** @var EADPBC_BillingInfo|null $BillingInfo */
	public $BillingInfo = null;
	/** @var EADPBC_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
}

class EADPBC_BillingInfo {
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

class EADPBC_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADPB_ContactPerson {
	/** @var boolean|null $AddAsParticipant */
	public $AddAsParticipant = null;
	/** @var integer|null $PersonId */
	public $PersonId = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var string|null $Password */
	public $Password = null;
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
	/** @var EADPBCP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADPBCP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADPBCP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADPBCP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADPB_Options {
	/** @var boolean|null $SkipDuplicateMatchOnCustomer */
	public $SkipDuplicateMatchOnCustomer = null;
	/** @var boolean|null $IgnoreRemainingSpots */
	public $IgnoreRemainingSpots = null;
	/** @var boolean|null $SkipDuplicateMatchOnPersons */
	public $SkipDuplicateMatchOnPersons = null;
	/** @var boolean|null $IgnoreIfPersonAlreadyBooked */
	public $IgnoreIfPersonAlreadyBooked = null;
	/** @var boolean|null $IgnoreMandatoryQuestions */
	public $IgnoreMandatoryQuestions = null;
}

class EADPB_SendConfirmationEmail {
	/** @var boolean|null $SendToParticipants */
	public $SendToParticipants = null;
	/** @var boolean|null $SendToCustomer */
	public $SendToCustomer = null;
	/** @var boolean|null $SendToCustomerContact */
	public $SendToCustomerContact = null;
	/** @var string[]|null $SendEmailCopyTo */
	public $SendEmailCopyTo = null;
}

class EADPB_Participants {
	/** @var integer|null $PersonId */
	public $PersonId = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var string|null $Password */
	public $Password = null;
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
	/** @var EADPBP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADPBP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADPBP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADPBP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADPB_PriceRows {
	/** @var integer|null $PricePerUnit */
	public $PricePerUnit = null;
	/** @var integer|null $Quantity */
	public $Quantity = null;
	/** @var string|null $InvoiceDate */
	public $InvoiceDate = null;
	/** @var string|null $Description */
	public $Description = null;
	/** @var integer|null $VatPercent */
	public $VatPercent = null;
	/** @var string|null $ItemNr */
	public $ItemNr = null;
}


class EADPB_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EduAdmin_Data_ProgrammeBooking_Email {
	/** @var boolean|null $SendToParticipants */
	public $SendToParticipants = null;
	/** @var boolean|null $SendToCustomer */
	public $SendToCustomer = null;
	/** @var boolean|null $SendToCustomerContact */
	public $SendToCustomerContact = null;
	/** @var string[]|null $SendEmailCopyTo */
	public $SendEmailCopyTo = null;
}

class EduAdmin_Data_ProgrammeBooking_EmailAdvanced {
	/** @var integer|null $EmailTemplateId */
	public $EmailTemplateId = null;
	/** @var string|null $FromEmailAddress */
	public $FromEmailAddress = null;
	/** @var string[]|null $ToEmailAddresses */
	public $ToEmailAddresses = null;
	/** @var string[]|null $CopyToEmailAddresses */
	public $CopyToEmailAddresses = null;
}
<?php

class EduAdmin_REST_Booking extends EduAdminRESTClient {
	protected $api_url = "/v1/Booking";

	/**
	 * @param integer $bookingId
	 *
	 * @return mixed
	 */
	public function DeleteBooking( $bookingId ) {
		return parent::DELETE(
			"/$bookingId",
			array(),
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $bookingId
	 * @param EduAdmin_Data_BookingMailAdvanced $mail
	 *
	 * @return mixed
	 */
	public function SendAdvancedEmail( $bookingId, EduAdmin_Data_BookingMailAdvanced $mail ) {
		return parent::POST(
			"/$bookingId/Email/SendAdvanced",
			$mail,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $bookingId
	 * @param EduAdmin_Data_BookingMail $mail
	 *
	 * @return mixed
	 */
	public function SendEmail( $bookingId, EduAdmin_Data_BookingMail $mail ) {
		return parent::POST(
			"/$bookingId/Email/Send",
			$mail,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $bookingId
	 * @param EduAdmin_Data_UnnamedParticipants[] ...$unnamed_participants
	 *
	 * @return mixed
	 */
	public function CreateUnnamedParticipants( $bookingId, EduAdmin_Data_UnnamedParticipants... $unnamed_participants ) {
		return parent::POST(
			"/$bookingId/UnnamedParticipants",
			$unnamed_participants,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $bookingId
	 * @param EduAdmin_Data_PatchBooking $patch_booking
	 *
	 * @return mixed
	 */
	public function PatchBooking( $bookingId, EduAdmin_Data_PatchBooking $patch_booking ) {
		return parent::PATCH(
			"/$bookingId",
			$patch_booking,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_BookingData $booking_data
	 *
	 * @return mixed
	 */
	public function Create( EduAdmin_Data_BookingData $booking_data ) {
		return parent::POST(
			"",
			$booking_data,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param EduAdmin_Data_BookingData $booking_data
	 *
	 * @return mixed
	 */
	public function CheckPrice( EduAdmin_Data_BookingData $booking_data ) {
		return parent::POST(
			"/CheckPrice",
			$booking_data,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $bookingId
	 * @param EduAdmin_Data_BookingParticipants $booking_participants
	 *
	 * @return mixed
	 */
	public function AddParticipantsToBooking( $bookingId, EduAdmin_Data_BookingParticipants $booking_participants ) {
		return parent::POST(
			"/$bookingId/Participants",
			$booking_participants,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $bookingId
	 * @param EduAdmin_Data_ConvertUnnamedParticipants $unnamed_participants
	 *
	 * @return mixed
	 */
	public function ConvertUnnamedToParticipant( $bookingId, EduAdmin_Data_ConvertUnnamedParticipants $unnamed_participants ) {
		return parent::POST(
			"/$bookingId/NameUnnamedParticipants",
			$unnamed_participants,
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

class EduAdmin_Data_BookingMailAdvanced {
	/** @var integer|null $EmailTemplateId */
	public $EmailTemplateId = null;
	/** @var string|null $FromEmailAddress */
	public $FromEmailAddress = null;
	/** @var string[]|null $ToEmailAddresses */
	public $ToEmailAddresses = null;
	/** @var string[]|null $CopyToEmailAddresses */
	public $CopyToEmailAddresses = null;
}

class EduAdmin_Data_BookingMail {
	/** @var boolean|null $SendToParticipants */
	public $SendToParticipants = null;
	/** @var boolean|null $SendToCustomer */
	public $SendToCustomer = null;
	/** @var boolean|null $SendToCustomerContact */
	public $SendToCustomerContact = null;
	/** @var string[]|null $SendEmailCopyTo */
	public $SendEmailCopyTo = null;
}

class EduAdmin_Data_UnnamedParticipants {
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var integer|null $Quantity */
	public $Quantity = null;
}

class EduAdmin_Data_PatchBooking {
	/** @var boolean|null $Preliminary */
	public $Preliminary = null;
	/** @var boolean|null $MarkedAsInvoiced */
	public $MarkedAsInvoiced = null;
	/** @var boolean|null $Paid */
	public $Paid = null;
	/** @var string|null $Notes */
	public $Notes = null;
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var string|null $PurchaseOrderNumber */
	public $PurchaseOrderNumber = null;
	/** @var string|null $PostponedBillingDate */
	public $PostponedBillingDate = null;
}

class EduAdmin_Data_BookingData {
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
	/** @var integer|null $VoucherId */
	public $VoucherId = null;
	/** @var boolean|null $Preliminary */
	public $Preliminary = null;
	/** @var EADBD_Options|null $Options */
	public $Options = null;
	/** @var EADBD_Customer|null $Customer */
	public $Customer = null;
	/** @var EADBD_ContactPerson|null $ContactPerson */
	public $ContactPerson = null;
	/** @var EADBD_SendConfirmationEmail|null $SendConfirmationEmail */
	public $SendConfirmationEmail = null;
	/** @var EADBD_Participants[]|null $Participants */
	public $Participants = null;
	/** @var EADBD_UnnamedParticipants[]|null $UnnamedParticipants */
	public $UnnamedParticipants = null;
	/** @var EADBD_Answers[]|null $Answers */
	public $Answers = null;
	/** @var EADBD_Accessories[]|null $Accessories */
	public $Accessories = null;
}

class EADBD_Options {
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

class EADBD_Customer {
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
	/** @var EADBDC_BillingInfo|null $BillingInfo */
	public $BillingInfo = null;
	/** @var EADBDC_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
}

class EADBDC_BillingInfo {
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

class EADBDC_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADBD_ContactPerson {
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
	/** @var EADBDCP_Sessions[]|null $Sessions */
	public $Sessions = null;
	/** @var EADBDCP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADBDCP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADBDCP_Sessions {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}

class EADBDCP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADBDCP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADBD_SendConfirmationEmail {
	/** @var boolean|null $SendToParticipants */
	public $SendToParticipants = null;
	/** @var boolean|null $SendToCustomer */
	public $SendToCustomer = null;
	/** @var boolean|null $SendToCustomerContact */
	public $SendToCustomerContact = null;
	/** @var string[]|null $SendEmailCopyTo */
	public $SendEmailCopyTo = null;
}

class EADBD_Participants {
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
	/** @var EADBDP_Sessions[]|null $Sessions */
	public $Sessions = null;
	/** @var EADBDP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADBDP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADBDP_Sessions {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}

class EADBDP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADBDP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADBD_UnnamedParticipants {
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
	/** @var integer|null $Quantity */
	public $Quantity = null;
}

class EADBD_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EADBD_Accessories {
	/** @var integer|null $AccessoryId */
	public $AccessoryId = null;
	/** @var integer|null $Quantity */
	public $Quantity = null;
}

class EduAdmin_Data_BookingParticipants {
	/** @var EADBP_Options|null $Options */
	public $Options = null;
	/** @var EADBP_Participants[]|null $Participants */
	public $Participants = null;
}

class EADBP_Options {
	/** @var boolean|null $IgnoreRemainingSpots */
	public $IgnoreRemainingSpots = null;
	/** @var boolean|null $SkipDuplicateMatchOnPersons */
	public $SkipDuplicateMatchOnPersons = null;
	/** @var boolean|null $IgnoreIfPersonAlreadyBooked */
	public $IgnoreIfPersonAlreadyBooked = null;
	/** @var boolean|null $IgnoreMandatoryQuestions */
	public $IgnoreMandatoryQuestions = null;
}

class EADBP_Participants {
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
	/** @var EADBPP_Sessions[]|null $Sessions */
	public $Sessions = null;
	/** @var EADBPP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADBPP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADBPP_Sessions {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}

class EADBPP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADBPP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}

class EduAdmin_Data_ConvertUnnamedParticipants {
	/** @var EADCUP_Options|null $Options */
	public $Options = null;
	/** @var EADCUP_NamedUnnamedParticipants[]|null $NamedUnnamedParticipants */
	public $NamedUnnamedParticipants = null;
}

class EADCUP_Options {
	/** @var boolean|null $SkipDuplicateMatchOnPersons */
	public $SkipDuplicateMatchOnPersons = null;
	/** @var boolean|null $IgnoreIfPersonAlreadyBooked */
	public $IgnoreIfPersonAlreadyBooked = null;
	/** @var boolean|null $IgnoreMandatoryQuestions */
	public $IgnoreMandatoryQuestions = null;
}

class EADCUP_NamedUnnamedParticipants {
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
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
	/** @var string|null $Reference */
	public $Reference = null;
	/** @var integer|null $SeatId */
	public $SeatId = null;
	/** @var boolean|null $CanLogin */
	public $CanLogin = null;
	/** @var EADCUPNUP_Sessions[]|null $Sessions */
	public $Sessions = null;
	/** @var EADCUPNUP_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
	/** @var EADCUPNUP_Answers[]|null $Answers */
	public $Answers = null;
}

class EADCUPNUP_Sessions {
	/** @var integer|null $SessionId */
	public $SessionId = null;
	/** @var integer|null $PriceNameId */
	public $PriceNameId = null;
}

class EADCUPNUP_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

class EADCUPNUP_Answers {
	/** @var integer|null $AnswerId */
	public $AnswerId = null;
	/** @var object|null $AnswerValue */
	public $AnswerValue = null;
	/** @var integer|null $AnswerNumber */
	public $AnswerNumber = null;
	/** @var string|null $AnswerTime */
	public $AnswerTime = null;
}
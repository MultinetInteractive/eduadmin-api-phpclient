<?php

class EduAdmin_REST_Customer extends EduAdminRESTClient {
	protected $api_url = "/v1/Customer";

	/**
	 * @param EduAdmin_Data_Customer $customer
	 *
	 * @return mixed
	 */
	public function Create( EduAdmin_Data_Customer $customer ) {
		return parent::POST( "",
			$customer,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $customerId
	 * @param EduAdmin_Data_Customer $customer
	 *
	 * @return mixed
	 */
	public function Update( $customerId, EduAdmin_Data_Customer $customer ) {
		return parent::PATCH( "$customerId",
			$customer,
			get_called_class() . "|" . __FUNCTION__
		);
	}

	/**
	 * @param integer $customerId
	 * @param integer $eventId
	 * @param integer|null $contactPersonId
	 *
	 * @return mixed
	 */
	public function GetValidVouchers( $customerId, $eventId, $contactPersonId = null ) {
		$params = array();
		if ( isset( $contactPersonId ) ) {
			$params["contactPersonId"] = $contactPersonId;
		}

		return parent::GET(
			"/$customerId/ValidVouchers/$eventId",
			$params,
			get_called_class() . "|" . __FUNCTION__
		);
	}
}

class EduAdmin_Data_Customer {
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
	/** @var EADC_BillingInfo|null $BillingInfo */
	public $BillingInfo = null;
	/** @var EADC_CustomFields[]|null $CustomFields */
	public $CustomFields = null;
}

class EADC_BillingInfo {
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


class EADC_CustomFields {
	/** @var integer|null $CustomFieldId */
	public $CustomFieldId = null;
	/** @var object|null $CustomFieldValue */
	public $CustomFieldValue = null;
}

<?php

/**
 * Class EduAdmin_REST_Voucher
 */
class EduAdmin_REST_Voucher extends EduAdminRESTClient {
	protected $api_url = '/v1/Voucher';

	/**
	 * @param EduAdmin_Data_CreateVoucher|stdClass|object $voucherInfo
	 *
	 * @return mixed
	 */
	public function Create( $voucherInfo ) {
		return parent::POST(
			'/',
			$voucherInfo,
			get_called_class() . '|' . __FUNCTION__
		);
	}

	/**
	 * @param integer                                $voucher_id
	 * @param EduAdmin_Data_PatchVoucher|stdClass|object $voucherInfo
	 *
	 * @return mixed
	 */
	public function Update( $voucher_id, $voucherInfo ) {
		return parent::PATCH(
			"/$voucher_id",
			$voucherInfo,
			get_called_class() . '|' . __FUNCTION__
		);
	}
}
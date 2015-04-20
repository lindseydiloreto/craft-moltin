<?php
namespace Craft;

class Moltin_PaymentService extends Moltin_BaseService
{

	public $apiService = 'Payment';

	/**
	 * Authorize an amount on the customer's card.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function authorize($order, $data = array())
	{
		return $this->_apiCall(['Authorize', $order, $data]);
	}

	/**
	 * Handle return from off-site gateways after authorization.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function completeAuthorize($order, $data = array())
	{
		return $this->_apiCall(['CompleteAuthorize', $order, $data]);
	}

	/**
	 * Capture an amount you have previously authorized.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function capture($order, $data = array())
	{
		return $this->_apiCall(['Capture', $order, $data]);
	}

	/**
	 * Authorize and immediately capture an amount on the customer's card.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function purchase($order, $data = array())
	{
		return $this->_apiCall(['Purchase', $order, $data]);
	}

	/**
	 * Handle return from off-site gateways after purchase.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function completePurchase($order, $data = array())
	{
		return $this->_apiCall(['CompletePurchase', $order, $data]);
	}

	/**
	 * Refund an already processed transaction.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function refund($order, $data = array())
	{
		return $this->_apiCall(['Refund', $order, $data]);
	}

	/**
	 * Generally can only be called up to 24 hours after submitting a transaction.
	 *
	 * @param int    $order  ID of the order being processed.
	 * @param int    $data   Data relevant to processing.
	 *
	 * @return array|null    Results of API call
	 */
	public function void($order, $data = array())
	{
		return $this->_apiCall(['Void', $order, $data]);
	}

}

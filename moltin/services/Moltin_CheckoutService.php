<?php
namespace Craft;

class Moltin_CheckoutService extends Moltin_BaseService
{

	public $apiService = 'Checkout';

	/**
	 * Initiate a payment.
	 *
	 * @param string  $method  Payment method. (http://docs.moltin.com/1.0/checkout/php)
	 * @param int     $order   Order ID number.
	 * @param array   $data    Data required by the payment gateway. (ie: credit card info)
	 *
	 * @return array|null    Results of API call
	 */
	public function payment($method, $order, $data = array())
	{
		return $this->_apiCall(['Payment', $method, $order, $data]);
	}

}

<?php
namespace Craft;

class Moltin_BaseService extends BaseApplicationComponent
{

	public $apiService;

	protected function _apiCall($params)
	{
		// Callable
		$api    = $this->_getApiService();
		$method = array_shift($params);
		// Response
		$callback = array($api, $method);
		$response = call_user_func_array($callback, $params);
		// Return
		return $this->_handleResponse($response);
	}

	protected function _getApiService()
	{
		if ($this->apiService) {
			return '\\'.$this->apiService;
		} else {
			return null;
		}
	}

	protected function _handleResponse($response, $expectsArray = false)
	{

		if (!$response) {
			return false;
		} else if (is_array($response)) {
			if (array_key_exists('result', $response)) {

				if ($response['status']) {
					return $response['result'];
				} else {

					// TEMP
					Craft::dd($response['error']);
					// How to properly handle errors?

					return null;
				}

			} else {
				if ($response['status']) {
					$output = $response['message'];
				} else {
					$output = $response['error'];
				}
				return $output;
			}
		} else {

			return $response;

			// TEMP
			// Craft::dd($response);
			// How to properly handle errors?

		}

	}

}

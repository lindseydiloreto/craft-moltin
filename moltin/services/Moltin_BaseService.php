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
		if ($response['status']) {
			return $response['result'];
		} else {

			// TEMP
			Craft::dd($response['error']);
			// How to properly handle errors?

			return null;
		}
	}

}

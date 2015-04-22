<?php
namespace Craft;

class Moltin_StatisticsService extends Moltin_BaseService
{

	public $apiService = 'Stats';

	/**
	 * Store stats.
	 *
	 * @param ???  $timeframe  ???
	 * @param ???  $to         ???
	 *
	 * @return array|null    Results of API call
	 */
	public function store($timeframe = null, $to = null)
	{
		return $this->_apiCall(['Store', $timeframe, $to]);
	}

	/**
	 * Revenue stats.
	 *
	 * @param ???  $timeframe  ???
	 * @param ???  $to         ???
	 *
	 * @return array|null    Results of API call
	 */
	public function revenue($timeframe = null, $to = null)
	{
		return $this->_apiCall(['Revenue', $timeframe, $to]);
	}

	/**
	 * Orders stats.
	 *
	 * @param ???  $timeframe  ???
	 * @param ???  $to         ???
	 *
	 * @return array|null    Results of API call
	 */
	public function orders($timeframe = null, $to = null)
	{
		return $this->_apiCall(['Orders', $timeframe, $to]);
	}

	/**
	 * Customers stats.
	 *
	 * @param ???  $timeframe  ???
	 * @param ???  $to         ???
	 *
	 * @return array|null    Results of API call
	 */
	public function customers($timeframe = null, $to = null)
	{
		return $this->_apiCall(['Customers', $timeframe, $to]);
	}

}

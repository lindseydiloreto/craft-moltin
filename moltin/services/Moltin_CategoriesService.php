<?php
namespace Craft;

class Moltin_CategoriesService extends Moltin_BaseComponentService
{

	public $apiService = 'Category';

	/**
	 * ???
	 *
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function tree($terms = array())
	{
		return $this->_apiCall(['Tree', $terms]);
	}

	/**
	 * ???
	 *
	 * @param array  $data   ???
	 *
	 * @return array|null    Results of API call
	 */
	public function order($data)
	{
		return $this->_apiCall(['Order', $data]);
	}

}

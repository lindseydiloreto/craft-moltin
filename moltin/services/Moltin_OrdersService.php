<?php
namespace Craft;

class Moltin_OrdersService extends Moltin_BaseComponentService
{

	public $apiService = 'Order';

	/**
	 * Get a list of items in an order.
	 *
	 * @param int    $order  ID of the order.
	 *
	 * @return array|null    Results of API call
	 */
	public function items($id)
	{
		return $this->_apiCall(['Items', $id]);
	}

	/**
	 * Add an item to an order.
	 *
	 * @param int    $order  ID of the order.
	 * @param array  $data   New item for order.
	 *
	 * @return array|null    Results of API call
	 */
	public function addItem($order, $data)
	{
		return $this->_apiCall(['AddItem', $order, $data]);
	}

	/**
	 * Update an order item.
	 *
	 * @param int    $order  ID of the order.
	 * @param array  $data   Modified item information.
	 *
	 * @return array|null    Results of API call
	 */
	public function updateItem($order, $data)
	{
		return $this->_apiCall(['UpdateItem', $order, $data]);
	}

	/**
	 * Delete an order item.
	 *
	 * @param int    $order  ID of the order.
	 * @param int    $id     ID of the item being removed.
	 *
	 * @return array|null    Results of API call
	 */
	public function removeItem($order, $id)
	{
		return $this->_apiCall(['RemoveItem', $order, $id]);
	}

}

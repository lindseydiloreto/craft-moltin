<?php
namespace Craft;

class Moltin_CartService extends Moltin_BaseService
{

	public $apiService = 'Cart';

	/**
	 * Get cart identifier.
	 *
	 * @return array|null    Results of API call
	 */
	public function identifier()
	{
		return $this->_apiCall(['Identifier']);
	}

	/**
	 * Get cart contents.
	 *
	 * @return array|null    Results of API call
	 */
	public function contents()
	{
		return $this->_apiCall(['Contents']);
	}

	/**
	 * Add product to cart.
	 *
	 * @param int    $id     ID of product to add to cart.
	 * @param int    $qty    Number of products to add to cart.
	 * @param array  $mods   Array of product modifiers.
	 *
	 * @return array|null    Results of API call
	 */
	public function insert($id, $qty = 1, $mods = null)
	{
		return $this->_apiCall(['Insert', $id, $qty, $mods]);
	}

	/**
	 * Update cart with new data about product
	 *
	 * @param int    $id     ID of product to add to update.
	 * @param array  $data   Data related to specified product.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($id, $data)
	{
		return $this->_apiCall(['Update', $id, $data]);
	}

	/**
	 * Delete entire cart.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete()
	{
		return $this->_apiCall(['Delete']);
	}

	/**
	 * Remove product from cart.
	 *
	 * @param int    $id     ID of product to remove from cart.
	 *
	 * @return array|null    Results of API call
	 */
	public function remove($id)
	{
		return $this->_apiCall(['Remove', $id]);
	}

	/**
	 * Get item from cart by identifier
	 *
	 * You can retrieve a specific item from the cart
	 * by calling this endpoint with the cart identifier
	 * and item identifier.
	 *
	 * @param int    $id     ID of product to retrieve.
	 *
	 * @return array|null    Results of API call
	 */
	public function item($id)
	{
		return $this->_apiCall(['Item', $id]);
	}

	/**
	 * Check if a product exists in the cart.
	 *
	 * @param int    $id     ID of product to check if it exists in cart.
	 *
	 * @return array|null    Results of API call
	 */
	public function inCart($id)
	{
		return $this->_apiCall(['InCart', $id]);
	}

	/**
	 * Get the available checkout options
	 *
	 * When you are ready to take a cart to checkout, you can
	 * make a call to the checkout endpoint to see what shipping methods,
	 * addresses and payment gateways are available for the contents
	 * of the specified cart.
	 *
	 * @return array|null    Results of API call
	 */
	public function checkout()
	{
		return $this->_apiCall(['Checkout']);
	}

	/**
	 * Pass a cart to checkout
	 *
	 * When you have collected the data required to process the checkout,
	 * you can post it to this endpoint for processing, you can also use
	 * the specific endpoints for addresses, orders and order items if
	 * you want to process these sections individually. This endpoint
	 * will create the addresses, the order and add all the order items.
	 * You can then pass this order to the payment endpoint.
	 *
	 * @param array  $data   Data covering how the checkout should be handled.
	 *
	 * @return array|null    Results of API call
	 */
	public function order($data = array())
	{
		return $this->_apiCall(['Order', $data]);
	}

	/**
	 * Apply a discount to the cart.
	 *
	 * @param int    $code   Discount code.
	 *
	 * @return array|null    Results of API call
	 */
	public function discount($code = false)
	{
		return $this->_apiCall(['Discount', $code]);
	}

}

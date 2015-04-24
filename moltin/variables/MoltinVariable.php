<?php
namespace Craft;

class MoltinVariable
{

	private $_jsIncluded = false;

	public function js($outputHere = false)
	{
		if (!$this->_jsIncluded) {
			$this->_jsIncluded = true;
			$api = 'https://js.moltin.com/v1';
			$settings = craft()->plugins->getPlugin('moltin')->getSettings();
			$authenticate = 'var moltin = new Moltin({publicId: "'.$settings->clientId.'"});';
			if ($outputHere) {
				return TemplateHelper::getRaw('
<script type="text/javascript" src="'.$api.'"></script>
<script type="text/javascript">'.$authenticate.'</script>');
			} else {
				craft()->templates->includeJsFile($api);
				craft()->templates->includeJs($authenticate);
			}
		}
	}

	public function test()
	{

		$matches = craft()->moltin_products->find(['slug' => 'peers-conference']);
		$product = $matches[0];

		craft()->moltin_cart->insert($product['id'], 1);


		return craft()->moltin_cart->contents();

		die();

		$order = craft()->moltin_cart->order([
			'gateway' => 'stripe',
			'bill_to' => [
				'first_name' => 'John',
				'last_name'  => 'Smith',
				'address_1'  => '123 Main St.',
				'address_2'  => '',
				'city'       => 'Detroit',
				'county'     => 'MI',
				'postcode'   => '30003',
				'country'    => 'US',
			],
			'ship_to' => 'bill_to',
		]);
		
		Craft::dd($order);
		

		$checkout = craft()->moltin_checkout->payment('purchase', $order['id'], [
			'data' => [ 
				'number'       => '4242424242424242',
				'expiry_month' => '02',
				'expiry_year'  => '2017',
				'cvv'          => '123'
			]
		]);
		
		Craft::dd($checkout);

		return;

		// ===========================================================

		// Update product
		craft()->moltin_products->update(964964820061258459, [
			'title' => 'TEST-'.time(),
			'tax_band' => 0,
		]);

		// Get all products
		$products = craft()->moltin_products->listing();

		Craft::dd($products[0]);


		// Get all products
		// $products = craft()->moltin_products->find(['slug' => 'peanut-butter']);
		Craft::dd($products[0]);

		// Add first product to cart
		craft()->moltin_cart->insert($products[0]['id']);

		// See contents of cart
		$cart = craft()->moltin_cart->contents();

		// Dummy data
		//return $cart['contents']['91042be0d1493fb219dc346d4443eb01']['description'];
		return $cart['currency'];

	}

}

<?php
namespace Craft;

class MoltinService extends BaseApplicationComponent
{

	// public $products;
	// public $cart;
	// public $currencies;

	public function init()
	{
		parent::init();
		// $this->products   = craft()->moltin_products;
		// $this->cart       = craft()->moltin_cart;
		// $this->currencies = craft()->moltin_currencies;
	}

	public function handleError($e)
	{
		$message = $e->getMessage();
		MoltinPlugin::log($message, LogLevel::Error);
		
		if (craft()->request->isCpRequest()) {
			craft()->userSession->setError("Moltin error: $message");
		} else {

			// TEMP
			throw $e;
			// How to properly handle errors?

		}
	}

}

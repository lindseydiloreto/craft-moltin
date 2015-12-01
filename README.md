Moltin plugin for Craft CMS
======================================

_A slick wrapper for the Moltin API_

## What is Moltin?

Moltin is a cutting-edge eCommerce solution. While relatively young, it's built upon a single, brilliant concept: **a comprehensive eCommerce API**. All of the front-end components are left for you to design at will.

[Learn more about Moltin...](https://moltin.com/)

## How does this plugin work?

This plugin gives you full access to the Moltin API, all through the familiar interface that Craft plugins already provide. Which means it's a breeze to interact with the Moltin API by writing your own simple plugin!

## Example

**Get a product**

There are a few ways to get product information. Here's one method...

    $matches = craft()->moltin_products->find(['slug' => 'awesome-product']);
    $product = $matches[0];

**Add product to cart**

If you don't specify a quantity, it will default to `1`...

    craft()->moltin_cart->insert($product['id'], 1);

**Convert cart to order**

You'll need to convert your _cart_ to an _order_ to complete the checkout process...

    $order = craft()->moltin_cart->order(['gateway' => 'stripe']);

**Process payment**

Provide the information required by your payment gateway...

    $checkout = craft()->moltin_checkout->payment('purchase', $order['id'], [
        'data' => [
            'number'       => '4242424242424242',
            'expiry_month' => '02',
            'expiry_year'  => '2017',
            'cvv'          => '123'
        ]
    ]);

**Congratulations!** You've just completed a purchase!

## Authenticating

Your authentication info is stored in the plugin's settings, so you'll never need to authenticate. Every call will be authenticated for you.

Simply add your authentication info when you first install the plugin!

## Features

### Existing
 - Full PHP-based API endpoints

### Coming Soon
 - Twig accessibility for some API responses

## Minimum Requirements

 - Craft 2.0
 - PHP 5.4

## Change Log

### v0.9.0
 - Compatible with Craft 2.5
 - Updated PHP SDK (v1.0.2)

### v0.8.5
 - Updated PHP SDK

### v0.8.4
 - Switched to `dist` SDK

### v0.8.1
 - Added JS API support
 - Added remaining services
 - Updated PHP SDK

### v0.8.0
 - Initial beta release

## Questions or Feedback

Feel free to reach out with any questions, bugs, or feature requests! You can either open an issue here on Github, or email support@doublesecretagency.com

Keep in mind, this API wrapper is designed as a _starting point_... You're expected to build upon this API to create your own unique implementation of your eCommerce services in a separate plugin.

Happy coding!

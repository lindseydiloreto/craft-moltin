<?php
namespace Craft;

use Moltin\SDK\Facade\Moltin as Moltin;

class MoltinPlugin extends BasePlugin
{

	public function init()
	{
		parent::init();
		$this->_loadSdk();
	}

	public function getName()
	{
		return 'Moltin';
	}

	public function getVersion()
	{
		return '0.8.2';
	}

	public function getDeveloper()
	{
		return 'Double Secret Agency';
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-moltin';
		// return 'http://doublesecretagency.com';
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('moltin/settings', array(
			'settings' => $this->getSettings()
		));
	}

	protected function defineSettings()
	{
		return array(
			'clientId'     => array(AttributeType::String, 'label' => 'Client ID'),
			'clientSecret' => array(AttributeType::String, 'label' => 'Client Secret'),
		);
	}

	private function _clientCredentials()
	{
		return array(
			'client_id'     => $this->getSettings()->clientId,
			'client_secret' => $this->getSettings()->clientSecret
		);
	}

	private function _loadSdk()
	{
		try
		{
			require craft()->path->getPluginsPath().'/moltin/vendor/autoload.php';
			Moltin::Authenticate('ClientCredentials', $this->_clientCredentials());
		}
		catch (\Exception $e)
		{
			if (craft()->request->isCpRequest()) {
				$message = 'Moltin - '.$e->getMessage();
				Craft::log($message, LogLevel::Warning);
				craft()->userSession->setError($message);
			} else {

				// TEMP
				throw $e;
				// How to properly handle errors?

			}
		}
	}

}

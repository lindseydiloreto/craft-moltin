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

	public function getDescription()
	{
		return 'A wrapper for the Moltin API.';
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-moltin';
	}

	public function getVersion()
	{
		return '0.9.0';
	}

	public function getSchemaVersion()
	{
		return null;
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

	public function onAfterInstall()
	{
		craft()->request->redirect(UrlHelper::getCpUrl('settings/plugins/moltin'));
	}

	private function _clientCredentials()
	{
		if ($this->getSettings()->clientId || $this->getSettings()->clientSecret) {
			return array(
				'client_id'     => $this->getSettings()->clientId,
				'client_secret' => $this->getSettings()->clientSecret
			);
		} else {
			return false;
		}
	}

	private function _loadSdk()
	{
		if ($this->_clientCredentials()) {
			try
			{
				require craft()->path->getPluginsPath().'/moltin/vendor/autoload.php';
				Moltin::Authenticate('ClientCredentials', $this->_clientCredentials());
			}
			catch (\Exception $e)
			{
				craft()->moltin->handleError($e);
			}
		}
	}

}

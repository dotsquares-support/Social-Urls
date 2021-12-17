<?php
namespace ds\socialurls;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use ds\socialurls\models\Settings;
use ds\socialurls\services\SocialUrlService;
use craft\web\twig\variables\CraftVariable;
use ds\socialurls\variables\socialurlsVariable;


use yii\base\Event;



class Socialurls extends Plugin 

{
    public $hasCpSettings = true;
	public static $plugin;

    public function init()

    {
        parent::init();
        self::$plugin = $this;
          // Register our service

          $this->setComponents([
            'SocialUrlService' =>  services\SocialUrlService::class,
        ]);

        
        // Register our variable
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                //handle name                             //classname
                $variable->set('socialurls', variables\socialurlsVariable::class);
            }
        );

        

    }

    protected function createSettingsModel()
    {
        return new Settings();
    }


        // Get the settings that are being defined by template

    protected function settingsHtml()
    {
        return \Craft::$app->getView()->renderTemplate(
            'socialurls/settings',
            [ 'settings' => $this->getSettings() ]
        );

    } 
}
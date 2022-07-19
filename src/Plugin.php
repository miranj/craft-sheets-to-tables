<?php
/**
 * Sheets to Tables plugin for Craft CMS 3.x, 4.x
 *
 * @link      https://miranj.in/
 * @copyright Copyright (c) Miranj Design LLP
 */

namespace miranj\sheetstotables;

use miranj\sheetstotables\twigextensions\SheetsToTablesTwigExtension;

use Craft;
use craft\base\Plugin as BasePlugin;
use craft\elements\Asset;
use craft\events\RegisterAssetFileKindsEvent;
use craft\helpers\Assets;
use yii\base\Event;

/**
 * Class Plugin
 *
 */
class Plugin extends BasePlugin
{
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        // Add CSV as an accepted Excel File Kind
        Event::on(
          Assets::class,
          Assets::EVENT_REGISTER_FILE_KINDS,
          function(RegisterAssetFileKindsEvent $event) {
            $event->fileKinds[Asset::KIND_EXCEL]['extensions'][] = 'csv';
            return $event;
          }
        );
        
        // Add in our Twig extension
        Craft::$app->view->registerTwigExtension(new SheetsToTablesTwigExtension());
        
        Craft::info(
            Craft::t(
                'sheets-to-tables',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}

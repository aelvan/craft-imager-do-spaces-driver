<?php
/**
 * Imager Filter Pack plugin for Craft CMS 3.x
 *
 * Filters for Imager
 *
 * @link      https://www.vaersaagod.no/
 * @copyright Copyright (c) 2018 André Elvan
 */

namespace aelvan\imagerdospacesdriver;

use aelvan\imagerdospacesdriver\externalstorage\DOSpacesStorage;
use aelvan\imager\services\ImagerService;
use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * @author    André Elvan
 * @package   ImagerDOSpacesDriver
 * @since     1.0.0
 *
 */
class ImagerDOSpacesDriver extends Plugin
{
    public static $plugin;
    public $schemaVersion = '1.0.0';
    
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        ImagerService::registerExternalStorage('dospaces', DOSpacesStorage::class);
    }
}

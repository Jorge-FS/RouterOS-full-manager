<?php


declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';
use Ubnt\UcrmPluginSdk\Service\PluginLogManager;



class Administration
{

    private $pluginLogManager;

    function __construct()
    {
        $this->pluginLogManager = PluginLogManager::create();
        $this->pluginLogManager->appendLog(sprintf('%s/','este plugin si funciona'));
    }


}

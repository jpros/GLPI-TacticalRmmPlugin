<?php
/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/


function plugin_tacticalrmm_install()
{
    Config::setConfigurationValues('plugin:tacticalrmm', ['url' => '', 'field' => 'serial']);
    return true;
}

function plugin_tacticalrmm_uninstall()
{
    $config = new Config();
    $config->deleteConfigurationValues('plugin:tacticalrmm', ['url']);
    $config->deleteConfigurationValues('plugin:tacticalrmm', ['field']);
    return true;
}
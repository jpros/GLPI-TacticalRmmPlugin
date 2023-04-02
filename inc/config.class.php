<?php
/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/

class PluginTacticalrmmConfig
{
    static public function getUrl()
    {
        return Config::getConfigurationValues('plugin:tacticalrmm')["url"];
    }

    static public function setUrl($value)
    {
        Config::setConfigurationValues('plugin:tacticalrmm', ["url" => $value]);
    }
    static public function getField()
    {
        return Config::getConfigurationValues('plugin:tacticalrmm')["field"];
    }

    static public function setField($value)
    {
        Config::setConfigurationValues('plugin:tacticalrmm', ["field" => $value]);
    }

}

?>
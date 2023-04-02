<?php
/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/

define('PLUGIN_TACTICALRMM_VERSION', '1.0.0');


function plugin_init_tacticalrmm()
{
    global $PLUGIN_HOOKS;
    $PLUGIN_HOOKS['csrf_compliant']['tacticalrmm'] = true;

    $PLUGIN_HOOKS['config_page']['tacticalrmm'] = 'front/config.form.php';

    $PLUGIN_HOOKS['pre_item_form']['tacticalrmm'] = ['PluginTacticalrmmController', 'button_open'];

}

function plugin_version_tacticalrmm()
{
    return array(
        'name' => "TacticalRMM",
        'version' => PLUGIN_TACTICALRMM_VERSION,
        'author' => 'JP Ros',
        'license' => 'GPLv2+',
        'minGlpiVersion' => '9.1.2'
    );
}

function plugin_tacticalrmm_check_prerequisites()
{
    if (version_compare(GLPI_VERSION, '9.1.2', 'lt')) {
        if (method_exists('Plugin', 'messageIncompatible')) {
            echo Plugin::messageIncompatible('core', '9.1.2');
        } else {
            echo "This plugin requires GLPI >= 9.1.2";
        }
        return false;
    }

    return true;
}

function plugin_tacticalrmm_check_config($verbose = false)
{
    return true;
}

?>
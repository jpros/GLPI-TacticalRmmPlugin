<?php
/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/

class PluginTacticalrmmController
{
    static public function button_open($params)
    {
        $url = PluginTacticalrmmConfig::getUrl();
        $field = PluginTacticalrmmConfig::getField();
        $item = $params['item'];

        if (empty($url) || empty($field) || $item::getType() != Computer::class)
            return;

        $name = $item->fields[$field];
        $encode = urlencode($name);
        $out = "<div class='container right'>
                    <div class='btn btn-primary'>
                        <a href='$url/?search=$encode' target='_blank'>
                        Open in TacticalRMM
                        </a>
                    </div>
                </div>";
        echo $out;
    }

}

?>
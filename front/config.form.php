<?php
/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/

include('../../../inc/includes.php');

if (!empty($_POST['update'])) {
    PluginTacticalrmmConfig::setUrl($_POST['url']);
    PluginTacticalrmmConfig::setField($_POST['field']);
    Html::back();
}

function isSelected($field, $current) {
    if ($field == $current) {
        return "selected='selected'";
    }
    return "";
}

function getOption($selectedField, $name, $label) {
    return "<option value='$name' " . isSelected($selectedField, $name) .">$label</option>";
}

if (Config::canView()) {
    $url = PluginTacticalrmmConfig::getUrl();
    $field = PluginTacticalrmmConfig::getField();

    Html::header("TacticalRMM", $_SERVER['PHP_SELF'], "config", "plugintacticalrmm", "");
    echo Html::displayTitle('', '', __('TacticalRMM Settings', 'plugintacticalrmm'));

    echo '<div>';
    echo isset($success) && $success ? '<p><h3>Atualização realizada com sucesso</hr></p>' : '';
    echo '<form method=\'post\' action=\'config.form.php\'>';


    echo "<table style='width:100%;'>";
    echo "<tr class='tab_bg_2'>";
    echo "<td> " . __('URL') . "</td>";
    echo "<td><input type='text' name='url' value='" . $url . "' style='width: 100%'></td>";
    echo "</tr>";

    echo "<tr class='tab_bg_2'><td>&nbsp;</td></tr>";

    echo "<tr class='tab_bg_2'>";
    echo "<td> " . __('Relation field') . "</td><td>";
    echo "<select name='field' style='width:100%'>";

    echo getOption($field, "name", "Name");
    echo getOption($field, "serial", "Serial number");
    echo getOption($field, "otherserial", "Inventory number");
    echo getOption($field, "uuid", "UUID");

    echo "</select>";
    echo "</td></tr>";
    echo "<tr class='tab_bg_2'><td>&nbsp;</td></tr>";


    echo "<tr><td colspan='2'>";
    if (Config::canUpdate()) {
        echo Html::hidden('id', ['value' => $object->fields['id']]);
        echo Html::hidden('update', ['value' => 'now']);
        echo Html::submit(__('Save', 'livecall'));
    }

    echo "</td></tr></table>";
    Html::closeform();
    echo '</div>';
    Html::footer();
} else {
    Html::displayRightError();
}

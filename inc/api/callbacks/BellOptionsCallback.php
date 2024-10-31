<?php

/**
 * @package PusheWebpush
 */

namespace Inc\api\callbacks;

class BellOptionsCallback extends BaseCallbacks
{

    public function pusheBellOptionsPage()
    {
        return require_once($this->plugin_path . "templates/bellOptions.php");
    }

    public function pusheBellOptionsSection()
    {
        $output1 = esc_html__('Bell settings can be configured here.', 'pushe-webpush');

        $output = '<p>' . $output1 . '</p>';

        echo $output;
    }

    public function inputSanitize($input)
    {
        return $input;
    }

    public function handleSettingsInput($args)
    {
        parent::handleSettingsInput($args);
    }
}

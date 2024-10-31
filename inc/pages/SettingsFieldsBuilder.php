<?php

/**
 * @package PusheWebpush
 */

namespace Inc\pages;

use Inc\api\callbacks\SettingsCallbacks;
use Inc\api\callbacks\ModalOptionsCallback;
use Inc\api\callbacks\BellOptionsCallback;

class SettingsFieldsBuilder
{
    public static $settings_group = 'pushe_webpush_settings';
    public static $modal_options_group = 'pushe_webpush_modal_options';
    public static $bell_options_group = 'pushe_webpush_bell_options';

    public static function build()
    {
        $settingsCallbacks = new SettingsCallbacks();
        $modalOptionsCallback = new ModalOptionsCallback();
        $bellOptionsCallback = new BellOptionsCallback();


        $items = array(
            'app_id' => array(
                'title' => __('App Id', 'pushe-webpush'),
                'placeholder' => 'app id',
                'option_group' => self::$settings_group,
                'sanitizeCallback' => array($settingsCallbacks, 'inputSanitize'),
                'inputCallback' => array($settingsCallbacks, 'handleSettingsInput'),
                'page' => 'pushe_settings',
                'section' => 'pushe_settings_section',
            ),
            'webpush_enabled' => array(
                'title' => __('Enable Webpush', 'pushe-webpush'),
                'placeholder' => 'enable webpush',
                'option_group' => self::$settings_group,
                'sanitizeCallback' => array($settingsCallbacks, 'inputSanitize'),
                'inputCallback' => array($settingsCallbacks, 'handleSettingsInput'),
                'page' => 'pushe_settings',
                'inputType' => 'checkbox',
                'section' => 'pushe_settings_section',
            ),
            'pages_not_to_show' => array(
                'title' => __('Do not show in these pages', 'pushe-webpush'),
                'placeholder' => '1,2,3,4',
                'option_group' => self::$settings_group,
                'sanitizeCallback' => array($settingsCallbacks, 'inputSanitize'),
                'inputCallback' => array($settingsCallbacks, 'handleSettingsInput'),
                'page' => 'pushe_settings',
                'section' => 'pushe_settings_section',
            ),
            'pages_to_show' => array(
                'title' => __('Only show in these pages', 'pushe-webpush'),
                'placeholder' => '1,2,3,4',
                'option_group' => self::$settings_group,
                'sanitizeCallback' => array($settingsCallbacks, 'inputSanitize'),
                'inputCallback' => array($settingsCallbacks, 'handleSettingsInput'),
                'page' => 'pushe_settings',
                'section' => 'pushe_settings_section',
            ),


            'displayBell' => array(
                'title' => __('Display Bell', 'pushe-webpush'),
                'option_group' => self::$bell_options_group,
                'sanitizeCallback' => array($bellOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($bellOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_bell_options',
                'inputType' => 'checkbox',
                'section' => 'pushe_bell_options_section',
            ),

            'bellPosition' => array(
                'title' => __('Bell Position', 'pushe-webpush'),
                'option_group' => self::$bell_options_group,
                'sanitizeCallback' => array($bellOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($bellOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_bell_options',
                'inputType' => 'select',
                'section' => 'pushe_bell_options_section',
                'options' => array('right', 'left')
            ),
            'bellDisplayInDesktop' => array(
                'title' => __('Visible In Desktop', 'pushe-webpush'),
                'option_group' => self::$bell_options_group,
                'sanitizeCallback' => array($bellOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($bellOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_bell_options',
                'inputType' => 'checkbox',
                'section' => 'pushe_bell_options_section',
            ),
            'bellDisplayInMobile' => array(
                'title' => __('Visible In Mobile', 'pushe-webpush'),
                'option_group' => self::$bell_options_group,
                'sanitizeCallback' => array($bellOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($bellOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_bell_options',
                'inputType' => 'checkbox',
                'section' => 'pushe_bell_options_section',
            ),
            'bellColor' => array(
                'title' => __('Bell Color', 'pushe-webpush'),
                'placeholder' => 'black,   #fff,   rgba(255,200,200,1) ...',
                'option_group' => self::$bell_options_group,
                'sanitizeCallback' => array($bellOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($bellOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_bell_options',
                'section' => 'pushe_bell_options_section',
            ),
            'bellBackgroundColor' => array(
                'title' => __('Bell Background Color', 'pushe-webpush'),
                'placeholder' => 'black,   #fff,   rgba(255,200,200,1) ...',
                'option_group' => self::$bell_options_group,
                'sanitizeCallback' => array($bellOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($bellOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_bell_options',
                'section' => 'pushe_bell_options_section',
            ),



            'showDialog' => array(
                'title' => __('Show Dialog', 'pushe-webpush'),
                'placeholder' => 'show dialog',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'inputType' => 'checkbox',
                'section' => 'pushe_modal_options_section',
            ),
            'title' => array(
                'title' => __('Title', 'pushe-webpush'),
                'placeholder' => 'title',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'content' => array(
                'title' => __('Content', 'pushe-webpush'),
                'placeholder' => 'content',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'acceptText' => array(
                'title' => __('Accept Text', 'pushe-webpush'),
                'placeholder' => 'accept text',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'rejectText' => array(
                'title' => __('Reject Text', 'pushe-webpush'),
                'placeholder' => 'reject text',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'icon' => array(
                'title' => __('Icon', 'pushe-webpush'),
                'placeholder' => 'icon link',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'position' => array(
                'title' => __('Dialog Position', 'pushe-webpush'),
                'placeholder' => 'dialog position',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
                'inputType' => 'select',
                'options' => array(
                    'top-left', 'top-center', 'top-right', 'bottom-left', 'bottom-center', 'bottom-right',
                ),
            ),
            'mobilePosition' => array(
                'title' => __('Dialog Position In Mobile', 'pushe-webpush'),
                'placeholder' => 'dialog position in mobile',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
                'inputType' => 'select',
                'options' => array(
                    'top', 'bottom',
                ),
            ),
            'dialogDirection' => array(
                'title' => __('Dialog Direction', 'pushe-webpush'),
                'placeholder' => 'dialog direction',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
                'inputType' => 'select',
                'options' => array(
                    'rtl', 'ltr',
                ),
            ),
            'promptTheme' => array(
                'title' => __('Modal Theme', 'pushe-webpush'),
                'placeholder' => 'modal theme',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
                'inputType' => 'select',
                'options' => array(
                    'Theme-1', 'Theme-2',
                ),
            ),
            'dialogRetryRate' => array(
                'title' => __('Dialog Retry Rate', 'pushe-webpush'),
                'placeholder' => 'dialog retry time',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'delayingPrompt' => array(
                'title' => __('Delayed Modal Display', 'pushe-webpush'),
                'placeholder' => 'delay displaying modal',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'inputType' => 'checkbox',
                'section' => 'pushe_modal_options_section',
            ),
            'surfedPages' => array(
                'title' => __('Delay Until Pages Surfed', 'pushe-webpush'),
                'placeholder' => 'how many pages to surf',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'timeSpent' => array(
                'title' => __('Delay Until Time Spent', 'pushe-webpush'),
                'placeholder' => 'how many seconds to pass',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
            'percentileScrolled' => array(
                'title' => __('Delay Until Page Scroll', 'pushe-webpush'),
                'placeholder' => 'how many percent of a page to scroll',
                'option_group' => self::$modal_options_group,
                'sanitizeCallback' => array($modalOptionsCallback, 'inputSanitize'),
                'inputCallback' => array($modalOptionsCallback, 'handleSettingsInput'),
                'page' => 'pushe_modal_options',
                'section' => 'pushe_modal_options_section',
            ),
        );

        return $items;
    }
}

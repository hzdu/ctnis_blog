<?php

/**
 * This file creates an Icon custom element using powerful Iconify API.
 * 
 * @category Oxygen Elements
 * @package  OxyProps
 * @author   @cbontems
 * @license  https://www.gnu.org/licenses/gpl-2.0.html  GPL v2 or later
 * @link     https://oxyprops.com                       OxyProps Website
 * @since    1.5.2
 */

use OxyProps\Inc\HTTPRequest;

class O_Oxy_Icon extends OxyEl
{

    function init()
    {
        // Do some initial things here.
    }

    function afterInit()
    {
        // Do things after init, like remove apply params button and remove the add button.
        $this->removeApplyParamsButton();
        // $this->removeAddButton();
    }

    function name()
    {
        return __('Unlimited Icon', 'oxyprops-oxygen');
    }

    function slug()
    {
        return "op-icon";
    }

    function icon()
    {
        return str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__) . '/' . basename(__FILE__, '.php') . '.svg';
    }

    function button_place()
    {
        return "oxyprops::visual";
    }

    function button_priority()
    {
        return 9;
    }


    function render($options, $defaults, $content)
    {
        if (isset($options['oIconSetName'])) {
            // create a array by splitting the string by the colon
            $icon_def = explode(':', $options['oIconSetName']);
            // get the first element of the array
            $icon_set = $icon_def[0];
            $icon_name = $icon_def[1];
        } else {
            $icon_set = 'heroicons';
            $icon_name = 'beaker';
        }
        $icon_color = isset($options['oIconColor']) ? $options['oIconColor'] : '';
        $icon_color = str_replace(' ', '', $icon_color);
        $icon_color = 'var(--o_icon-color, ' . $icon_color . ')';
        $icon_width = '100%';
        $icon_height = isset($options['oIconHeight']) ? $options['oIconHeight'] : '';
        $icon_rotate = isset($options['oIconRotate']) ? $options['oIconRotate'] : '';
        $icon_flip = isset($options['oIconFlip']) ? $options['oIconFlip'] : '';
        $protocol = 'https';
        $fetched_icon = '';
        $output = '';
        $url = "://api.iconify.design/{$icon_set}/{$icon_name}.svg?color={$icon_color}&width={$icon_width}&height={$icon_height}&rotate={$icon_rotate}&flip={$icon_flip}";
        $request = new HTTPRequest($protocol . $url);
        $fetched_icon = $request->DownloadToString();
        if ('' === $fetched_icon) {
            $protocol = 'http';
            $fetched_icon = '';
            $request = new HTTPRequest($protocol . $url);
            $fetched_icon .= $request->DownloadToString();
        }
        if ('' === $fetched_icon) {
            $fetched_icon .= '<svg width="100%" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><text x="0" y="20" style="font: 18px sans-serif;fill: red;">Error</text><text x="0" y="40" style="font: 17px sans-serif;fill: red;">fetching</text><text x="0" y="60" style="font: 18px sans-serif;fill: red;">icon</text></svg>';
        }
        $this->load_libraries();
        $sanitizer = new \enshrined\svgSanitize\Sanitizer();
        $cleanSVG = $sanitizer->sanitize($fetched_icon);

        $output = $cleanSVG;

        echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }

    public function load_libraries()
    {
        require_once WP_PLUGIN_DIR . '/oxyprops/includes/integrations/svg-sanitizer/vendor/autoload.php';
    }

    function controls()
    {
        $this->addOptionControl(
            array(
                "type" => 'textfield',
                "name" => __('Search for icons on <a>https://icones.js.org</a>', 'oxyprops'),
                "slug" => 'oIconSetName',
                "default" => "heroicons:beaker"
            )
        )->rebuildElementOnChange();

        $this->addStyleControl(
            array(
                "name" => __('Color', 'oxyprops'),
                "slug" => 'oIconColor',
                "control_type" => "colorpicker",
                "selector" => "",
                "property" => '--o_icon-color-rest'
            )
        )->rebuildElementOnChange();

        $this->addStyleControl(
            array(
                "name" => __('Color on hover', 'oxyprops'),
                "slug" => 'oIconColorHover',
                "control_type" => "colorpicker",
                "selector" => "",
                "property" => '--o_icon-color-hover'
            )
        )->rebuildElementOnChange();

        $this->addStyleControl(
            array(
                "name" => __('Size', 'oxyprops'),
                "selector" => "",
                "property" => 'inline-size',
                "control_type" => "measurebox",
                "unit" => "",
                "slug" => 'oIconWidth',
                "default" => "var(--o-size-7)"
            )
        )->rebuildElementOnChange();

        $this->addOptionControl(
            array(
                "name" => __('Rotate', 'oxyprops'),
                "slug" => 'oIconRotate',
                "type" => 'dropdown',
                "default" => ""
            )
        )->setValue(
            array(
                "90deg",
                "180deg",
                "270deg",
                ""
            )
        )->whitelist()->rebuildElementOnChange();

        $this->addOptionControl(
            array(
                "name" => __('Flip', 'oxyprops'),
                "slug" => 'oIconFlip',
                "type" => 'dropdown',
                "default" => ""
            )
        )->setValue(
            array(
                "horizontal",
                "vertical",
                "horizontal,vertical",
                ""
            )
        )->whitelist()->rebuildElementOnChange();
    }

    function defaultCSS()
    {
        return file_get_contents(__DIR__ . '/' . basename(__FILE__, '.php') . '.css');
    }
}

new O_Oxy_Icon();

<?php

class O_Oxy_Custom_Light_Dark_Toggle extends OxyEl
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
        return __('Light/Dark Custom', 'oxyprops-oxygen');
    }

    function slug()
    {
        return "op-custom-light-dark-toggle";
    }

    function icon()
    {
        return str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__) . '/' . basename(__FILE__, '.php') . '.svg';
    }

    function button_place()
    {
        return "oxyprops::colors";
    }

    function button_priority()
    {
        return 9;
    }


    function render($options, $defaults, $content)
    {

        $iconLight = isset($options['icon_light']) ? esc_attr($options['icon_light']) : "";
        $iconDark = isset($options['icon_dark']) ? esc_attr($options['icon_dark']) : "";

        global $oxygen_svg_icons_to_load;
        $oxygen_svg_icons_to_load[] = $iconLight;
        $oxygen_svg_icons_to_load[] = $iconDark;

        // Output here.
?>
        <button class="o-theme-toggle" id="theme-toggle" title="Toggles light & dark" aria-label="auto" aria-live="polite">
            <svg id="op-toggle-icon-light" class="o-theme-toggle__icon" viewbox="0 0 25 28">
                <use xlink:href="#<?php echo $iconLight; ?>"></use>
            </svg>
            <svg id="op-toggle-icon-dark" class="o-theme-toggle__icon o-theme-toggle__icon--dark" viewbox="0 0 25 28">
                <use xlink:href="#<?php echo $iconDark; ?>"></use>
            </svg>
        </button>
<?php

        $this->El->inlineJS(
            "
      jQuery(document).ready( function() {
        if( !window.angular ) { return; }
          jQuery('#op-toggle-icon-light').addClass('active');
          jQuery('#op-toggle-icon-dark').addClass('active');
          jQuery('#op-toggle-icon-dark').addClass('move');
      })

      var storageKey = 'theme-preference'

      var onClick = () => {
          // flip current value
          theme.value = theme.value === 'light'
            ? 'dark'
            : 'light'
        
          setPreference()
        }
      
      var getColorPreference = () => {
        if (localStorage.getItem(storageKey))
          return localStorage.getItem(storageKey)
        else
          return window.matchMedia('(prefers-color-scheme: dark)').matches
            ? 'dark'
            : 'light'
      }
      
      var setPreference = () => {
        localStorage.setItem(storageKey, theme.value)
        reflectPreference()
      }
      
      var reflectPreference = () => {
        document.firstElementChild
          .setAttribute('color-scheme', theme.value)
      
        document
          .querySelector('#theme-toggle')
          ?.setAttribute('aria-label', theme.value)
        
        var myScheme = theme.value
        var activeIcon = '#op-toggle-icon-' + myScheme

        document
          .querySelector('#op-toggle-icon-light')
          ?.classList.remove('active')

          document
          .querySelector('#op-toggle-icon-dark')
          ?.classList.remove('active');

          document
          .querySelector(activeIcon)
          ?.classList.add('active');

        document
          .querySelector('#theme-toggle')
          ?.setAttribute('aria-label', theme.value)
      }
      
      var theme = {
        value: getColorPreference(),
      }
      
      // set early so no page flashes / CSS is made aware
      reflectPreference()
      
      window.onload = () => {
        // set on load so screen readers can see latest value on the button
        reflectPreference()
      
        // now this script can find and listen for clicks on the control
        document
          .querySelector('#theme-toggle')
          .addEventListener('click', onClick)
      }
      
      // sync with system changes
      window
        .matchMedia('(prefers-color-scheme: dark)')
        .addEventListener('change', ({matches:isDark}) => {
          theme.value = isDark ? 'dark' : 'light'
          setPreference()
        })"
        );
    }

    function controls()
    {
        $iconLightSection = $this->addControlSection("icon_light_section", __("Light Icon"), "public/icon.png", $this);
        $iconDarkSection = $this->addControlSection("icon_dark_section", __("Dark Icon"), "public/icon.png", $this);

        $this->addStyleControl(
            array(
                "name" => __('Width'),
                "selector" => ".o-theme-toggle",
                "property" => 'width',
                "control_type" => "measurebox",
                "unit" => "px"
            )
        )->rebuildElementOnChange();

        $iconLightSection->addStyleControl(
            array(
                "name" => __('Color'),
                "selector" => ".o-theme-toggle__icon",
                "property" => 'fill',
                "control_type" => "colorpicker",
                // "unit" => "px" // We don't need to declare a unit since this field is a color picker, but it's useful to do so for measurebox fields
            )
        )->rebuildElementOnChange();

        $iconLightSection->addOptionControl(
            array(
                "type" => "icon_finder",
                "name" => __("Icon Light"),
                "slug" => "icon_light",
                "default" => "Lineariconsicon-sun"
            )
        )->rebuildElementOnChange();

        $iconDarkSection->addStyleControl(
            array(
                "name" => __('Color'),
                "selector" => ".o-theme-toggle__icon--dark",
                "property" => 'fill',
                "control_type" => "colorpicker",
                // "unit" => "px" // We don't need to declare a unit since this field is a color picker, but it's useful to do so for measurebox fields
            )
        )->rebuildElementOnChange();

        $iconDarkSection->addOptionControl(
            array(
                "type" => "icon_finder",
                "name" => __("Icon Dark"),
                "slug" => "icon_dark",
                "default" => "Lineariconsicon-moon"
            )
        )->rebuildElementOnChange();
    }

    function defaultCSS()
    {
        return file_get_contents(__DIR__ . '/' . basename(__FILE__, '.php') . '.css');
    }
}

new O_Oxy_Custom_Light_Dark_Toggle();

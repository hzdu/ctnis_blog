<?php

class O_Oxy_Light_Dark_Toggle extends OxyEl
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
        return __('Light/Dark Toggle', 'oxyprops-oxygen');
    }

    function slug()
    {
        return "op-light-dark-toggle";
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
        // Output here.
?>
        <button class="theme-toggle" id="theme-toggle" title="Toggles light & dark" aria-label="auto" aria-live="polite">
            <svg class="sun-and-moon" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24">
                <mask class="moon" id="moon-mask">
                    <rect x="0" y="0" width="100%" height="100%" fill="white" stroke="none" />
                    <circle cx="24" cy="10" r="6" fill="black" stroke="none" />
                </mask>
                <circle class="sun" cx="12" cy="12" r="6" mask="url(#moon-mask)" fill="currentColor" />
                <g class="sun-beams" stroke="currentColor">
                    <line x1="12" y1="1" x2="12" y2="3" />
                    <line x1="12" y1="21" x2="12" y2="23" />
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                    <line x1="1" y1="12" x2="3" y2="12" />
                    <line x1="21" y1="12" x2="23" y2="12" />
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                </g>
            </svg>
        </button>
<?php

        $this->El->inlineJS(
            "var storageKey = 'theme-preference'

      var onClick = () => {
        if(window.angular) return
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
        if(window.angular) return
        localStorage.setItem(storageKey, theme.value)
        reflectPreference()
      }
      
      var reflectPreference = () => {
        if(window.angular) return
        document.firstElementChild
          .setAttribute('color-scheme', theme.value)
      
        document
          .querySelector('#theme-toggle')
          ?.setAttribute('aria-label', theme.value)
      }
      
      var theme = {
        value: getColorPreference(),
      }
      
      // set early so no page flashes / CSS is made aware
      if(!window.angular) reflectPreference()
      
      window.onload = () => {
        if(window.angular) return
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
          if(window.angular) return
          theme.value = isDark ? 'dark' : 'light'
          setPreference()
        })"
        );
    }

    function controls()
    {
        // Default Icon Size.
        $this->addStyleControl(
            array(
                "name" => __('Size'),
                "selector" => "",
                "property" => '--o_size',
                "control_type" => "measurebox",
                "unit" => ""
            )
        )->setValue('var(--o-size-3)')->rebuildElementOnChange();

        // Icon Size on touch screens.
        $this->addStyleControl(
            array(
                "name" => __('Size on touch screens'),
                "selector" => "",
                "property" => '--o_size-touch-screens',
                "control_type" => "measurebox",
                "unit" => ""
            )
        )->setValue('var(--o-size-8)')->rebuildElementOnChange();

        $colors_styles = $this->addControlsection("colors_styles", __("Colors"), "assets/icon.png", $this);

        // Icon Color in Light Mode.
        $colors_styles->addStyleControl(
            array(
                "name" => __('Icon Color in Light Mode'),
                "selector" => "",
                "property" => '--o_fill-light',
                "control_type" => "colorpicker",
            )
        )->setValue('var(--o-surface-4)')->rebuildElementOnChange();

        // Icon Color in Light Mode Hover.
        $colors_styles->addStyleControl(
            array(
                "name" => __('Icon Color on Hover in Light Mode'),
                "selector" => "",
                "property" => '--o_fill-light-hover',
                "control_type" => "colorpicker",
            )
        )->setValue('var(--o-brand-hover)')->rebuildElementOnChange();

        // Icon Color in Dark Mode.
        $colors_styles->addStyleControl(
            array(
                "name" => __('Icon Color in Dark Mode'),
                "selector" => "",
                "property" => '--o_fill-dark',
                "control_type" => "colorpicker",
            )
        )->setValue('var(--o-surface-4)')->rebuildElementOnChange();

        // Icon Color in Dark Mode Hover.
        $colors_styles->addStyleControl(
            array(
                "name" => __('Icon Color on Hover in Dark Mode'),
                "selector" => "",
                "property" => '--o_fill-dark-hover',
                "control_type" => "colorpicker",
            )
        )->setValue('var(--o-brand-hover)')->rebuildElementOnChange();
    }

    function defaultCSS()
    {
        return file_get_contents(__DIR__ . '/' . basename(__FILE__, '.php') . '.css');
    }
}

new O_Oxy_Light_Dark_Toggle();

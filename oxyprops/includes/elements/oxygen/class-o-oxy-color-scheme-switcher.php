<?php

class O_Oxy_Color_Scheme_Switcher extends OxyEl
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
        return __('Scheme Switcher', 'oxyprops-oxygen');
    }

    function slug()
    {
        return "op-scheme-switcher";
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
        // return 9;
    }


    function render($options, $defaults, $content)
    {
        // Output here.
?>
        <button class="o-scheme-switcher" id="scheme-switcher" title="Switches in sequence between light, dark, dim and colorful schemes" aria-label="auto" aria-live="polite">
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

              switch (theme.value) {
                case 'dark': theme.value = 'dim'
                break
                case 'dim': theme.value = 'light'
                break
                case 'light': theme.value = 'colorful'
                  break
                case 'colorful': theme.value = 'dark'
                  break
                default: theme.value = 'dark'
              }
            
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
                .querySelector('#scheme-switcher')
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
                .querySelector('#scheme-switcher')
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

        // // We can create control sections:
        // $controlSection = $this->addControlSection("section_slug", __("Section Name"), "public/icon.png", $this);

        // // Later, we can reference $controlSection (or whatever you named your section) and add controls to it
        // // If you want to add controls to the primary tab directly, you can use $this instead of $controlSection

        // // Style controls are mapped directly to a selector and a property, so they're used for simple CSS controls
        $this->addStyleControl(
            array(
                "name" => __('Width'),
                "selector" => ".o-scheme-switcher",
                "property" => 'width',
                "control_type" => "measurebox",
                "unit" => "px"
            )
        )->rebuildElementOnChange();

        $this->addStyleControl(
            array(
                "name" => __('Icon Color'),
                "selector" => ".o-scheme-switcher",
                "property" => '--o-icon-fill',
                "control_type" => "colorpicker",
                // "unit" => "px" // We don't need to declare a unit since this field is a color picker, but it's useful to do so for measurebox fields
            )
        )->rebuildElementOnChange();

        $this->addStyleControl(
            array(
                "name" => __('Hover Color'),
                "selector" => ".o-scheme-switcher",
                "property" => '--o-icon-fill-hover',
                "control_type" => "colorpicker",
                // "unit" => "px" // We don't need to declare a unit since this field is a color picker, but it's useful to do so for measurebox fields
            )
        )->rebuildElementOnChange();

        // // Option controls can be accessed in the render() function via $options['field_slug']
        // $controlSection->addOptionControl(
        // 	array(
        //         "type" => 'textfield', // types: textfield, dropdown, checkbox, buttons-list, measurebox, slider-measurebox, colorpicker, icon_finder, mediaurl
        // 		"name" => 'Field Name',
        // 		"slug" => 'field_slug'
        //     )
        // );

        // // If we want to output some CSS based on the value of an Option control, we can do this instead:
        // $my_control = $controlSection->addOptionControl(
        //     array(
        //         "type" => 'buttons-list', // types: textfield, dropdown, checkbox, buttons-list, measurebox, slider-measurebox, colorpicker, icon_finder, mediaurl
        // 		"name" => 'Field Name Two',
        // 		"slug" => 'field_slug_two'
        //     )
        // );

        // // For controls with multiple values, like dropdowns or button lists, you can define them like this:
        // $my_control->setValue(
        //     array(
        //         'value' => 'Label',
        //         'value2' => 'Label2'
        //     )
        // );

        // // You can define the default:
        // $my_control->setDefaultValue('value');

        // // You can then conditionally output some CSS depending on the chosen value:
        // $my_control->setValueCSS(
        //     array(
        //         'value' => '.my-example-class { background-color: purple }',
        //         'value2' => '.my-example-class { background-color: red }'
        //     )
        // );

        // // It's also usually a good idea to whitelist these types of controls for breakpoints:
        // $my_control->whitelist();

        // // We can also make our element rebuild when a control's value is changed:
        // $my_control->rebuildElementOnChange();

        // // Instead of building out every control ourselves, there are also presets available for commonly needed controls:
        // $this->borderSection(
        //     __("Border Section Name"),
        //     '.selector',
        //     $this
        // );

        // $this->typographySection(
        //     __("Typography Section Name"),
        //     '.selector',
        //     $this
        // );

        // $this->boxShadowSection(
        //     __("Shadow Section Name"),
        //     '.selector',
        //     $this
        // );

        // // The flex preset can only be used in a section, and doesn't have accept a name argument
        // $controlSection->flex(
        //     '.selector',
        //     $this
        // );

    }

    function defaultCSS()
    {

        return file_get_contents(__DIR__ . '/' . basename(__FILE__, '.php') . '.css');
    }
}

new O_Oxy_Color_Scheme_Switcher();

<?php
/**
 * This file creates a light-dark toggle custom element.
 *
 * @category Bricks Elements
 * @package  OxyProps
 * @author   Cédric Bontems <dev@oxyprops.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html  GPL v2 or later
 * @link     https://oxyprops.com                       OxyProps Website
 * @since    1.4.0
 */

use OxyProps\Inc\Defaults;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The light Dark Toggle element
 */
class O_Brx_Light_Dark_Toggle extends \Bricks\Element {

	/**
	 * The category for the element
	 *
	 * @var string
	 */
	public $category = 'bricksprops';

	/**
	 * The name of the element
	 *
	 * @var string
	 */
	public $name = 'bricksprops-light-dark-toggle';

	/**
	 * The icon that will be used in the elements panel
	 *
	 * @var string
	 */
	public $icon = 'ti-shine';

	/**
	 * The main css selector for the element
	 *
	 * @var string
	 */
	public $css_selector = '.oxyprops-light-dark-toggle-wrapper';

	/**
	 * The registered scripts for this element
	 *
	 * @var array
	 */
	public $scripts = array( 'oxyprops-light-dark-toggle' );

	/**
	 * The element label in the elements panel
	 *
	 * @return string
	 */
	public function get_label() {
		return esc_html__( 'Light/Dark Toggle', 'oxyprops' );
	}

	/**
	 * Defines the controls for the element
	 *
	 * @return void
	 */
	public function set_controls() {
		$this->controls['toggleColor'] = array(
			'tab'   => 'content',
			'label' => esc_html__( 'Icon Color', 'oxyprops' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o-icon-fill',
					'selector' => '.theme-toggle',
				),
			),
		);

		$this->controls['toggleHoverColor'] = array(
			'tab'   => 'content',
			'label' => esc_html__( 'Icon Color Hover', 'oxyprops' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o-icon-fill-hover',
					'selector' => '.theme-toggle',
				),
			),
		);

		$this->controls['toggleSize'] = array(
			'tab'   => 'content',
			'label' => esc_html__( 'Size', 'oxyprops' ),
			'type'  => 'number',
			'units' => true,
			'css'   => array(
				array(
					'property' => '--o-size',
					'selector' => '.theme-toggle',
				),
			),
		);

		$this->controls['toggleTouchscreenSize'] = array(
			'tab'   => 'content',
			'label' => esc_html__( 'Size on TouchScreens', 'oxyprops' ),
			'type'  => 'number',
			'units' => true,
			'css'   => array(
				array(
					'property' => '--o-size-touchscreen',
					'selector' => '.theme-toggle',
				),
			),
		);
	}

	/**
	 * Load assets on frontend
	 */
	public function enqueue_scripts() {

		wp_enqueue_style( 'bricksprops-light-dark-toggle', plugin_dir_url( __DIR__ ) . 'assets/css/olightdarktoggle.css', array(), '1.0.0', 'all' );
		wp_enqueue_script( 'bricksprops-light-dark-toggle', plugin_dir_url( __DIR__ ) . 'assets/js/olightdarktoggle.js', '', '1.0.0', true );
	}

	/**
	 * Render element HTML on frontend
	 *
	 * If no 'render_builder' function is defined then this code is used to render element HTML in builder, too.
	 */
	public function render() {
		$output  = "<div {$this->render_attributes('_root')}>";
		$output .= '
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
		</button>';
		$output .= '</div>';

		// Output final element HTML.
        echo $output; // phpcs:ignore
	}
}

<?php
/**
 * This file creates an Icon custom element using powerful Iconify API.
 *
 * @category Bricks Elements
 * @package  OxyProps
 * @author   @cbontems
 * @license  https://www.gnu.org/licenses/gpl-2.0.html  GPL v2 or later
 * @link     https://oxyprops.com                       OxyProps Website
 * @since    1.6.0  Creation
 * @since    1.6.1  Add hover colors
 */

use OxyProps\Inc\HTTPRequest;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The Icon element
 */
class O_Brx_Icon extends \Bricks\Element {

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
	public $name = 'oicon';

	/**
	 * The icon that will be used in the elements panel
	 *
	 * @var string
	 */
	public $icon = 'ti-face-smile';

	/**
	 * The main css selector for the element
	 *
	 * @var string
	 */
	public $css_selector = '';

	/**
	 * The registered scripts for this element
	 *
	 * @var array
	 */
	public $scripts = array( 'oicon' );

	/**
	 * If the element  is nestable.
	 *
	 * @since 1.5.0 Describe changes.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var bool $nestable Description.
	 */
	public $nestable = false;

	/**
	 * The element label in the elements panel
	 *
	 * @return string
	 */
	public function get_label() {
		return esc_html__( 'Unlimited Icon', 'oxyprops' );
	}

	/**
	 * Defines the controls for the element
	 *
	 * @return void
	 */
	public function set_controls() {

		$this->controls['oIconSetName'] = array(
			'type'        => 'text',
			'placeholder' => 'heroicons:beaker',
			'description' => __( 'Search for icons on <a target="_blank" href="https://icones.js.org/">Icônes</a>.<br/><small>Powered by iconify.</small>', 'bricks' ),
		);

		$this->controls['oIconColor'] = array(
			'label' => esc_html__( 'Color', 'oxyprops' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_icon-color-rest',
				),
			),
		);

		$this->controls['oIconColorHover'] = array(
			'label' => esc_html__( 'Color on hover', 'oxyprops' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_icon-color-hover',
				),
			),
		);

		$this->controls['oIconWidth'] = array(
			'label'       => esc_html__( 'Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-8)',
			'css'         => array(
				array(
					'property' => 'inline-size',
				),
			),
		);

		$this->controls['oIconRotate'] = array(
			'label'       => esc_html__( 'Rotate', 'oxyprops' ),
			'type'        => 'select',
			'options'     => array(
				'90deg'  => '90°',
				'180deg' => '180°',
				'270deg' => '270°',
			),
			'inline'      => true,
			'placeholder' => '-',
		);

		$this->controls['oIconFlip'] = array(
			'label'       => esc_html__( 'Flip', 'oxyprops' ),
			'type'        => 'select',
			'options'     => array(
				'horizontal'          => 'Horizontal',
				'vertical'            => 'Vertical',
				'horizontal,vertical' => 'Both',
			),
			'inline'      => true,
			'placeholder' => '-',
		);

		$this->controls['link'] = array(
			'tab'   => 'content',
			'label' => esc_html__( 'Link', 'bricks' ),
			'type'  => 'link',
		);
	}


	/**
	 * Load assets on frontend
	 */
	public function enqueue_scripts() {

		wp_enqueue_style( 'bricksprops-icon', plugin_dir_url( __DIR__ ) . 'assets/css/oicon.css', array(), '1.0.0', 'all' );
		wp_enqueue_script( 'bricksprops-icon', plugin_dir_url( __DIR__ ) . 'assets/js/oicon.js', '', '1.0.0', true );
	}

	/**
	 * Render element HTML on frontend
	 *
	 * If no 'render_builder' function is defined then this code is used to render element HTML in builder, too.
	 */
	public function render() {
		$settings = $this->settings;
		$link     = ! empty( $settings['link'] ) ? $settings['link'] : false;

		if ( $link ) {
			$custom_attributes = $this->get_custom_attributes( $settings );

			if ( is_array( $custom_attributes ) ) {
				foreach ( $custom_attributes as $key => $value ) {
					if ( isset( $this->attributes['_root'][ $key ] ) ) {
						unset( $this->attributes['_root'][ $key ] );
					}
				}
			}
		}

		$this->set_attribute( '_root', 'class', array( 'o-icon' ) );

		if ( isset( $settings['oIconSetName'] ) ) {
			// get the content of the dynamic field.
			$content = $this->render_dynamic_data( $settings['oIconSetName'] );
			// create a array by splitting the string by the colon.
			$icon_def = explode( ':', $content );
			// get the first element of the array.
			$icon_set  = $icon_def[0];
			$icon_name = $icon_def[1];
		} else {
			$icon_set  = 'heroicons';
			$icon_name = 'beaker';
		}

		$icon_color = 'var(--o_icon-color)';

		$icon_width   = isset( $settings['oIconWidth'] ) ? $settings['oIconWidth'] : '100%';
		$icon_height  = isset( $settings['oIconHeight'] ) ? $settings['oIconHeight'] : '';
		$icon_rotate  = isset( $settings['oIconRotate'] ) ? $settings['oIconRotate'] : '';
		$icon_flip    = isset( $settings['oIconFlip'] ) ? $settings['oIconFlip'] : '';
		$protocol     = 'https';
		$fetched_icon = '';
		$output       = '';
		$url          = "://api.iconify.design/{$icon_set}/{$icon_name}.svg?color={$icon_color}&width={$icon_width}&height={$icon_height}&rotate={$icon_rotate}&flip={$icon_flip}";
		$request      = new HTTPRequest( $protocol . $url );
		$fetched_icon = $request->DownloadToString();
		if ( '' === $fetched_icon ) {
			$protocol      = 'http';
			$fetched_icon  = '';
			$request       = new HTTPRequest( $protocol . $url );
			$fetched_icon .= $request->DownloadToString();
		}
		if ( '' === $fetched_icon ) {
			$fetched_icon .= '<svg width="100%" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><text x="0" y="20" style="font: 18px sans-serif;fill: red;">Error</text><text x="0" y="40" style="font: 17px sans-serif;fill: red;">fetching</text><text x="0" y="60" style="font: 18px sans-serif;fill: red;">icon</text></svg>';
		}
		self::load_libraries();
		$sanitizer = new \enshrined\svgSanitize\Sanitizer();
		$clean_svg = $sanitizer->sanitize( $fetched_icon );
		$output   .= "<div {$this->render_attributes('_root')}>" . $clean_svg . '</div>';

		if ( $link ) {
			$this->set_link_attributes( 'link', $link );

			// ADD custom attributes to the link instead of the icon (@since 1.7).
			echo "<a {$this->render_attributes('link', true)}>"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo '</a>';
		} else {
			echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
	/**
	 * Load SVG sanitizer library.
	 */
	public static function load_libraries() {
		require_once WP_PLUGIN_DIR . '/oxyprops/includes/integrations/svg-sanitizer/vendor/autoload.php';
	}
}

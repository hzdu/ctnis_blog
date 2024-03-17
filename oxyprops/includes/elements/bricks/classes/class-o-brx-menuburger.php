<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * This file creates a menuburger custom element.
 *
 * @category Bricks Elements
 * @package  OxyProps
 * @author   Cédric Bontems <dev@oxyprops.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html  GPL v2 or later
 * @link     https://oxyprops.com                       OxyProps Website
 * @since    1.5.0                                      Creation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * OxyProps Menuburger Element for Bricks Builder.
 *
 * This class creates a menuburger element including accessibility focused
 * logic and visual features. It is based on the W3C WAI Authoring Practices
 * Guide for Menubutton Disclosure design pattern.
 *
 * @see https://www.w3.org/WAI/ARIA/apg/patterns/menu-button/
 *
 * @since 1.5.0 Creation.
 * @author Cédric Bontems <dev@oxyprops.com>
 */
class O_Brx_Menuburger extends \Bricks\Element {

	/**
	 * The category for the element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var string
	 */
	public $category = 'bricksprops';

	/**
	 * The name of the element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var string
	 */
	public $name = 'omenuburger';

	/**
	 * The icon that will be used in the elements panel.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var string
	 */
	public $icon = 'ti-menu';

	/**
	 * The main css selector for the element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var string
	 */
	public $css_selector = '';

	/**
	 * The registered scripts for this element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var array
	 */
	public $scripts = array( 'omenuburger' );

	/**
	 * Wether the element  is nestable or not.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var bool $nestable Description.
	 */
	public $nestable = true;

	/**
	 * Provides the element label in the elements panel.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return string
	 */
	public function get_label(): string {
		return esc_html__( 'Menu Burger', 'oxyprops' );
	}

	/**
	 * Sets the Menubar Element control groups.
	 *
	 * Creates 3 groups for popups, top items and sub items.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return void
	 */
	public function set_control_groups(): void {

		$this->control_groups['button']        = array(
			'title' => esc_html__( 'Button', 'oxyprops' ),
		);
		$this->control_groups['menuContainer'] = array(
			'title' => esc_html__( 'Popup Container', 'oxyprops' ),
		);
		$this->control_groups['backdrop']      = array(
			'title' => esc_html__( 'Backdrop', 'oxyprops' ),
		);
		$this->control_groups['menuItem']      = array(
			'title' => esc_html__( 'Menu Items', 'oxyprops' ),
		);
	}

	/**
	 * Sets the Menubutton Element controls for Bricks UI.
	 *
	 * Unlike usual Bricks Elements, Oxyprops elements extensively use CSS variable.
	 * This allows to create a very flexible and accessible element.
	 * The controls are used to set the CSS variables.
	 * The CSS variables are then used in the element template and in the
	 * element stylesheet.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return void
	 */
	public function set_controls(): void {

		// * Global settings

		$this->controls['showMenus'] = array(
			'label' => esc_html__( 'Show menu in editor', 'oxyprops' ),
			'type'  => 'checkbox',
			'css'   => array(
				array(
					'property' => '--o_menuburger-popup-display',
					'value'    => 'block',
				),
			),
		);

		$this->controls['font-size'] = array(
			'tab'         => 'content',
			'label'       => esc_html__( 'Font Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-fluid-font-1)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-global-font-size',
				),
			),
		);

		// * Button settings

		$this->controls['burgerType'] = array(
			'tab'         => 'content',
			'group'       => 'button',
			'label'       => esc_html__( 'Animation', 'bricks' ),
			'type'        => 'select',
			'options'     => array(
				'3dx'       => '3dx',
				'3dy'       => '3dy',
				'3dxy'      => '3dxy',
				'arrow'     => 'Arrow',
				'arrowalt'  => 'Arrow Alt',
				'arrowturn' => 'Arrow Turn',
				'boring'    => 'Boring',
				'collapse'  => 'Collapse',
				'elastic'   => 'Elastic',
				'emphatic'  => 'Emphatic',
				'minus'     => 'Minus',
				'slider'    => 'Slider',
				'spin'      => 'Spin',
				'spring'    => 'Spring',
				'stand'     => 'Stand',
				'squeeze'   => 'Squeeze',
				'vortex'    => 'Vortex',
			),
			'inline'      => true,
			'placeholder' => 'Squeeze',
		);

		$this->controls['reverseAnimation'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Reverse animation', 'oxyprops' ),
			'type'  => 'checkbox',
		);

		$this->controls['buttonFontColor'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Icon color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-button-color',
				),
			),
		);

		$this->controls['buttonScale'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Scale', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '1',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-scale',
				),
			),
		);

		$this->controls['buttonMarginInline'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Margin Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-margin-inline',
				),
			),
		);

		$this->controls['buttonMarginBlock'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Margin Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-margin-block',
				),
			),
		);

		$this->controls['buttonPaddingInline'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Padding', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-padding-inline',
				),
			),
		);

		$this->controls['buttonBorderColor'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-button-border-color',
				),
			),
		);

		$this->controls['op_border_radius_button'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-border-radius',
				),
			),
		);

		$this->controls['op_border_size_button'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-border-thickness',
				),
			),
		);

		$this->controls['buttonBackgroundColor'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-button-bg',
				),
			),
		);

		$this->controls['op_shadow_button'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Box Shadow', 'bricks' ),
			'type'        => 'number',
			'placeholder' => 'none',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-shadow',
				),
			),
		);

		// * Active state for the Button.

		$this->controls['buttonActiveSeparator'] = array(
			'group'      => 'button',
			'label'      => esc_html__( 'Active', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['buttonActiveFontColor'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Icon color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-button-color-active',
				),
			),
		);

		$this->controls['buttonActiveBorderColor'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-button-border-color-active',
				),
			),
		);

		$this->controls['op_border_size_buttonActive'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-border-thickness-active',
				),
			),
		);

		$this->controls['buttonActiveBackgroundColor'] = array(
			'group' => 'button',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-button-bg-active',
				),
			),
		);

		$this->controls['op_shadow_buttonActive'] = array(
			'group'       => 'button',
			'label'       => esc_html__( 'Box Shadow', 'bricks' ),
			'type'        => 'number',
			'placeholder' => 'none',
			'css'         => array(
				array(
					'property' => '--o_menuburger-button-shadow-active',
				),
			),
		);

		// * Submenu PopUp Container

		$this->controls['menuContainerPaddingInline'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-menu-padding-inline',
				),
			),
		);

		$this->controls['menuContainerPaddingBlock'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-menu-padding-block',
				),
			),
		);

		$this->controls['menuContainerBorderColor'] = array(
			'group' => 'menuContainer',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-menu-border-color',
				),
			),
		);

		$this->controls['op_border_radius'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menuburger-menu-border-radius',
				),
			),
		);

		$this->controls['op_border_size'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-menu-border-thickness',
				),
			),
		);

		$this->controls['menuContainerBackgroundColor'] = array(
			'group' => 'menuContainer',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-menu-bg',
				),
			),
		);

		$this->controls['op_shadow'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Box Shadow', 'bricks' ),
			'type'        => 'number',
			'placeholder' => 'none',
			'css'         => array(
				array(
					'property' => '--o_menuburger-menu-shadow',
				),
			),
		);

		// * Submenu PopUp Container - Separator.

		$this->controls['menuContainerSeparatorSeparator'] = array(
			'group'      => 'menuContainer',
			'label'      => esc_html__( 'Separator', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['menuContainerSeparatorColor'] = array(
			'group' => 'menuContainer',
			'label' => esc_html__( 'Separator color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-separator-color',
				),
			),
		);

		$this->controls['op_separator_thickness'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Separator Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-separator-height',
				),
			),
		);

		$this->controls['menuContainerSeparatorSpacing'] = array(
			'group'       => 'menuContainer',
			'label'       => esc_html__( 'Separator spacing', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-separator-margin',
				),
			),
		);

		// * Backdrop

		$this->controls['backdropColor'] = array(
			'group' => 'backdrop',
			'label' => esc_html__( 'Backdrop color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-backdrop-bg',
				),
			),
		);

		$this->controls['backdropBlur'] = array(
			'group'       => 'backdrop',
			'label'       => esc_html__( 'Blur value', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '5px',
			'css'         => array(
				array(
					'property' => '--o_menuburger-backdrop-blur',
				),
			),
		);

		// * Menu Item.

		$this->controls['op_font-size_item'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Font Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-fluid-font-1)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-font-size',
				),
			),
		);

		$this->controls['menuItemFontColor'] = array(
			'group' => 'menuItem',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-item-color',
				),
			),
		);

		$this->controls['menuItemMarginInline'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Margin Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-margin-inline',
				),
			),
		);

		$this->controls['menuItemMarginBlock'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Margin Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-margin-block',
				),
			),
		);

		$this->controls['menuItemPaddingInline'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-padding-inline',
				),
			),
		);

		$this->controls['menuItemPaddingBlock'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-1)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-padding-block',
				),
			),
		);

		$this->controls['menuItemBackgroundColor'] = array(
			'group' => 'menuItem',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-item-bg',
				),
			),
		);

		// * Active state for the Topmenu Item.

		$this->controls['menuItemActiveSeparator'] = array(
			'group'      => 'menuItem',
			'label'      => esc_html__( 'Active', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['menuItemFontColorHover'] = array(
			'group' => 'menuItem',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-item-color-hover',
				),
			),
		);

		$this->controls['menuItemActiveBackgroundColor'] = array(
			'group' => 'menuItem',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-item-active-bg',
				),
			),
		);

		$this->controls['menuItemBorderColor'] = array(
			'group' => 'menuItem',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menuburger-item-border-color',
				),
			),
		);

		$this->controls['op_border_radius_item'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-radius-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-border-radius',
				),
			),
		);

		$this->controls['op_border_size_item'] = array(
			'group'       => 'menuItem',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menuburger-item-border-thickness',
				),
			),
		);
	}

	/**
	 * Provides a Separator structure.
	 *
	 * A Separator consists of a single <li> element.
	 * It includes the appropriate attributes and classes. The <li> element
	 * is a Text Basic Bricks element with no text attribute.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return (string|(string|string[][]|string[])[])[] Description.
	 */
	private function get_separator() {
		return array(
			'name'     => 'text-basic',
			'label'    => esc_html__( '‹li› Separator', 'oxyprops' ),
			'settings' => array(
				'tag'         => 'li',
				'text'        => '',
				'_attributes' => array(
					array(
						'name'  => 'role',
						'value' => 'separator',
					),
				),
				'_hidden'     => array(
					'_cssClasses' => 'o-menu-burger__separator',
				),
			),
		);
	}

	private function get_backdrop() {
		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹div› Backdrop', 'oxyprops' ),
			'settings' => array(
				'tag'     => 'div',

				'_hidden' => array(
					'_cssClasses' => 'o-menu-burger__backdrop',
				),
			),
		);
	}

	public function get_button( $uid ) {

		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹button› Burger Trigger', 'oxyprops' ),
			'settings' => array(
				'tag'         => 'button',
				'_attributes' => array(
					array(
						'name'  => 'aria-haspopup',
						'value' => 'true',
					),
					array(
						'name'  => 'aria-controls',
						'value' => 'o-menu-' . $uid,
					),
				),
				'_cssId'      => 'o-menu-trigger-' . $uid,
				'_hidden'     => array(
					'_cssClasses' => 'o-menu-burger__hamburger o-menu-burger__hamburger--squeeze',
				),
			),
			'children' => array(
				array(
					'name'     => 'div',
					'label'    => esc_html__( '‹span› Hamburger Box', 'oxyprops' ),
					'settings' => array(
						'tag'     => 'span',
						'_hidden' => array(
							'_cssClasses' => 'o-menu-burger__hamburger-box',
						),
					),
					'children' => array(
						array(
							'name'     => 'text-basic',
							'label'    => esc_html__( '‹span› Hamburger Inner', 'oxyprops' ),
							'settings' => array(
								'tag'     => 'span',
								'text'    => '',
								'_hidden' => array(
									'_cssClasses' => 'o-menu-burger__hamburger-inner',
								),
							),
						),
					),
				),
			),
		);
	}

	private function get_nestable_li( $order ) {
		return array(
			'name'     => 'div',
			'label'    => '‹li› ' . esc_html__( 'Menu Item', 'oxyprops' ) . ' #' . $order,
			'settings' => array(
				'tag'         => 'li',
				'_attributes' => array(
					array(
						'name'  => 'role',
						'value' => 'none',
					),
				),
			),
			'children' => array(
				array(
					'name'     => 'text-basic',
					'label'    => esc_html__( '‹a› Menu Item Text', 'oxyprops' ) . ' #' . $order,
					'settings' => array(
						'tag'         => 'a',
						'text'        => esc_html__( 'Item', 'oxyprops' ) . ' #' . $order,
						'link'        => array(
							'type' => 'external',
							'url'  => '/page' . $order,
						),
						'_attributes' => array(
							array(
								'name'  => 'role',
								'value' => 'menuitem',
							),
						),
						'_hidden'     => array(
							'_cssClasses' => 'o-menu-burger__menu-item',
						),
					),
				),
			),
		);
	}

	public function get_ul_menu_children( $count, $offset = 0 ): array {
		$children = array();

		for ( $i = 0; $i < $count; $i++ ) {
			$item = $this->get_nestable_li( $offset + $i + 1 );

			// Replace {item_index} with $index.
			$item       = wp_json_encode( $item );
			$item       = str_replace( '{item_index}', $i + 1, $item );
			$item       = json_decode( $item, true );
			$children[] = $item;
		}

		return $children;
	}

	public function get_nestable_item() {

		$children   = $this->get_ul_menu_children( 2 );
		$children[] = $this->get_separator();
		$children   = array_merge( $children, $this->get_ul_menu_children( 3, 2 ) );

		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹ul› Menu', 'oxyprops' ),
			'settings' => array(
				'tag'         => 'ul',
				'_attributes' => array(
					array(
						'name'  => 'role',
						'value' => 'menu',
					),
					array(
						'name'  => 'aria-labelledby',
						'value' => 'o-menu-trigger-{item_uid}',
					),
				),
				'_cssId'      => 'o-menu-{item_uid}',
				'_hidden'     => array(
					'_cssClasses' => 'o-menu-burger__menu',
				),
			),
			'children' => $children,
		);
	}

	public function generate_hash( $string, $length = 6 ) {
		// Generate SHA1 hexadecimal string (40-characters)
		$sha1        = sha1( $string );
		$sha1_length = strlen( $sha1 );
		$hash        = '';

		// Generate random site hash based on SHA1 string
		for ( $i = 0; $i < $length; $i++ ) {
			$hash .= $sha1[ rand( 0, $sha1_length - 1 ) ];
		}

		// Convert site path to lowercase
		$hash = strtolower( $hash );

		return $hash;
	}

	public function generate_random_id( $echo = true ) {
		$hash = $this->generate_hash( md5( uniqid( rand(), true ) ) );

		if ( $echo ) {
			echo $hash;
		}

		return $hash;
	}

	public function get_nestable_children(): array {
		$children = array();
		$uid      = $this->generate_random_id( false );

		$children[] = $this->get_button( $uid );
		$children[] = $this->get_backdrop();
		for ( $i = 0; $i < 1; $i++ ) {
			$item = $this->get_nestable_item( $uid );

			// Replace {item_index} with $index.
			$item       = wp_json_encode( $item );
			$item       = str_replace( '{item_index}', $i + 1, $item );
			$item       = str_replace( '{item_uid}', $uid, $item );
			$item       = json_decode( $item, true );
			$children[] = $item;
		}

		return $children;
	}

	/**
	 * Loads element assets.
	 *
	 * Enqueues JS and CSS for the element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return void
	 */
	public function enqueue_scripts(): void {

		wp_enqueue_style( 'bricksprops-menuburger', plugin_dir_url( __DIR__ ) . 'assets/css/omenuburger.css', array(), '1.0.0', 'all' );
		wp_enqueue_script( 'bricksprops-menuburger', plugin_dir_url( __DIR__ ) . 'assets/js/omenuburger.js', '', '1.0.0', true );
	}

	/**
	 * Render element HTML on frontend
	 *
	 * If no 'render_builder' function is defined then this code is used to render element HTML in builder, too.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return void
	 */
	public function render() {
		$settings = $this->settings;

		if ( isset( $settings['burgerType'] ) ) {
			$burgertype = $settings['burgerType'];
			if (
				isset( $settings['reverseAnimation'] )
				&& ! in_array( $burgertype, array( 'boring', 'minus', 'squeeze' ), true )
			) {
				$burgertype .= '-r';
			}
			$this->set_attribute( '_root', 'data-burger-type', $burgertype );
		} else {
			$this->set_attribute( '_root', 'data-burger-type', 'boring' );
		}

		$this->set_attribute( '_root', 'class', 'o-menu-burger' );
		$output = "<div {$this->render_attributes('_root')}>";
		// Render children elements (= individual items).
		$output .= \Bricks\Frontend::render_children( $this );

		$output .= '</div>';

		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

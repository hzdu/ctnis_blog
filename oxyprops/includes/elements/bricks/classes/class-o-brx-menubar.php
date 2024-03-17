<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * This file creates a menubar custom element.
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
 * OxyProps Menubar Element for Bricks Builder.
 *
 * This class creates a menubar element including accessibility focused
 * logic and visual features. It is based on the W3C WAI Authoring Practices
 * Guide for Menubar design pattern.
 *
 * @see https://www.w3.org/WAI/ARIA/apg/patterns/menubar/
 *
 * @since 1.5.0 Creation.
 * @author Cédric Bontems <dev@oxyprops.com>
 */
class O_Brx_Menubar extends \Bricks\Element {

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
	public $name = 'omenubar';

	/**
	 * The icon that will be used in the elements panel.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var string
	 */
	public $icon = 'ti-layout-menu-separated';

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
	public $scripts = array( 'omenubar' );

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
		return esc_html__( 'Menu Bar', 'oxyprops' );
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

		$this->control_groups['submenuContainer'] = array(
			'title' => esc_html__( 'Popup Containers', 'oxyprops' ),
		);
		$this->control_groups['topMenuItem']      = array(
			'title' => esc_html__( 'Top Menu Items', 'oxyprops' ),
		);
		$this->control_groups['subMenuItem']      = array(
			'title' => esc_html__( 'Submenu Items', 'oxyprops' ),
		);
	}

	/**
	 * Sets the Menubar Element controls for Bricks UI.
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

		$this->controls['showSubMenus'] = array(
			'label' => esc_html__( 'Show submenus in editor', 'oxyprops' ),
			'type'  => 'checkbox',
			'css'   => array(
				array(
					'property' => '--o_menubar-popup-display',
					'value'    => 'block',
				),
			),
		);

		$this->controls['ariaLabel'] = array(
			'tab'         => 'content',
			'label'       => esc_html__( 'Menu Aria Label', 'oxyprops' ),
			'type'        => 'text',
			'inline'      => true,
			'placeholder' => 'Unique Name',
		);

		$this->controls['font-size'] = array(
			'tab'         => 'content',
			'label'       => esc_html__( 'Font Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-fluid-font-1)',
			'css'         => array(
				array(
					'property' => '--o_menubar-global-font-size',
				),
			),
		);

		$this->controls['menubarBackgroundColor'] = array(
			'tab'   => 'content',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-bg',
				),
			),
		);

		// * Nav Container.

		$this->controls['navMarginInline'] = array(
			'label'       => esc_html__( 'Margin Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-margin-inline',
					'selector' => '.o-menubar-navigation',
				),
			),
		);

		$this->controls['navMarginBlock'] = array(
			'label'       => esc_html__( 'Margin Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-margin-block',
					'selector' => '.o-menubar-navigation',
				),
			),
		);

		$this->controls['navPaddingInline'] = array(
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-padding-inline',
					'selector' => '.o-menubar-navigation',
				),
			),
		);

		$this->controls['navPaddingBlock'] = array(
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-padding-block',
					'selector' => '.o-menubar-navigation',
				),
			),
		);

		$this->controls['navGap'] = array(
			'label'       => esc_html__( 'Gap', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-1)',
			'css'         => array(
				array(
					'property' => '--o_menubar-gap',
				),
			),
		);

		$this->controls['navActiveSeparator'] = array(
			'label'      => esc_html__( 'Active', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['navActiveColor'] = array(
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-border-color',
				),
			),
		);

		$this->controls['op_border_radius_active'] = array(
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-radius-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-border-radius',
				),
			),
		);

		$this->controls['op_border_size_active'] = array(
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-border-thickness',
				),
			),
		);

		// * Submenu PopUp Container

		$this->controls['submenuContainerBackgroundColor'] = array(
			'group' => 'submenuContainer',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-submenu-bg',
				),
			),
		);

		$this->controls['op_shadow'] = array(
			'group' => 'submenuContainer',
			'label' => esc_html__( 'Box Shadow', 'bricks' ),
			'type'  => 'number',
			'css'   => array(
				array(
					'property' => '--o_menubar-submenu-shadow',
				),
			),
		);

		$this->controls['submenuContainerPaddingInline'] = array(
			'group'       => 'submenuContainer',
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-submenu-padding-inline',
				),
			),
		);

		$this->controls['submenuContainerPaddingBlock'] = array(
			'group'       => 'submenuContainer',
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-submenu-padding-block',
				),
			),
		);

		// * Submenu PopUp Container - Border.

		$this->controls['submenuContainerBorderSeparator'] = array(
			'group'      => 'submenuContainer',
			'label'      => esc_html__( 'Border', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['submenuContainerBorderColor'] = array(
			'group' => 'submenuContainer',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-submenu-border-color',
				),
			),
		);

		$this->controls['op_border_radius'] = array(
			'group'       => 'submenuContainer',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-radius-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-submenu-border-radius',
				),
			),
		);

		$this->controls['op_border_size'] = array(
			'group'       => 'submenuContainer',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-submenu-border-thickness',
				),
			),
		);

		// * Submenu PopUp Container - Separator.

		$this->controls['submenuContainerSeparatorSeparator'] = array(
			'group'      => 'submenuContainer',
			'label'      => esc_html__( 'Separator', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['submenuContainerSeparatorColor'] = array(
			'group' => 'submenuContainer',
			'label' => esc_html__( 'Separator color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-separator-color',
				),
			),
		);

		$this->controls['op_separator_thickness'] = array(
			'group'       => 'submenuContainer',
			'label'       => esc_html__( 'Separator Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-separator-height',
				),
			),
		);

		$this->controls['submenuContainerSeparatorSpacing'] = array(
			'group'       => 'submenuContainer',
			'label'       => esc_html__( 'Separator spacing', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-separator-margin',
				),
			),
		);

		// * Top Menu Item.

		$this->controls['op_font-size_topItem'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Font Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-fluid-font-1)',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-font-size',
				),
			),
		);

		$this->controls['topMenuItemFontColor'] = array(
			'group' => 'topMenuItem',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-topitem-color',
				),
			),
		);

		$this->controls['op_border_size_topMenuItemCaretSize'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Caret thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-top-caret-thickness',
				),
			),
		);

		$this->controls['topMenuItemMarginInline'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Margin Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-margin-inline',
				),
			),
		);

		$this->controls['topMenuItemMarginBlock'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Margin Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-margin-block',
				),
			),
		);

		$this->controls['topMenuItemPaddingInline'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-padding-inline',
				),
			),
		);

		$this->controls['topMenuItemPaddingBlock'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-padding-block',
				),
			),
		);

		$this->controls['topMenuItemBackgroundColor'] = array(
			'group' => 'topMenuItem',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-topitem-bg',
				),
			),
		);

		// * Active state for the Topmenu Item.

		$this->controls['topMenuItemActiveSeparator'] = array(
			'group'      => 'topMenuItem',
			'label'      => esc_html__( 'Active', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['topMenuItemFontColorHover'] = array(
			'group' => 'topMenuItem',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-topitem-color-hover',
				),
			),
		);

		$this->controls['topMenuItemActiveBackgroundColor'] = array(
			'group' => 'topMenuItem',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-topitem-active-bg',
				),
			),
		);

		$this->controls['topMenuItemBorderColor'] = array(
			'group' => 'topMenuItem',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-topitem-border-color',
				),
			),
		);

		$this->controls['op_border_radius_topItem'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-radius-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-border-radius',
				),
			),
		);

		$this->controls['op_border_size_topItem'] = array(
			'group'       => 'topMenuItem',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-topitem-border-thickness',
				),
			),
		);

		// * Sub Menu Item.

		$this->controls['op_font-size_subItem'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Font Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-fluid-font-1)',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-font-size',
				),
			),
		);

		$this->controls['subMenuItemFontColor'] = array(
			'group' => 'subMenuItem',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-subitem-color',
				),
			),
		);

		$this->controls['op_border_size_subMenuItemCaretSize'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Caret thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-sub-caret-thickness',
				),
			),
		);

		$this->controls['subMenuItemMarginInline'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Margin Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-margin-inline',
				),
			),
		);

		$this->controls['subMenuItemMarginBlock'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Margin Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-margin-block',
				),
			),
		);

		$this->controls['subMenuItemPaddingInline'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => '0',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-padding-inline',
				),
			),
		);

		$this->controls['subMenuItemPaddingBlock'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-padding-block',
				),
			),
		);

		$this->controls['subMenuItemBackgroundColor'] = array(
			'group' => 'subMenuItem',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-subitem-bg',
				),
			),
		);

		// * Active state for the Submenu Item.

		$this->controls['subMenuItemActiveSeparator'] = array(
			'group'      => 'subMenuItem',
			'label'      => esc_html__( 'Active', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['subMenuItemFontColorHover'] = array(
			'group' => 'subMenuItem',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-subitem-color-hover',
				),
			),
		);

		$this->controls['subMenuItemActiveBackgroundColor'] = array(
			'group' => 'subMenuItem',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-subitem-active-bg',
				),
			),
		);

		$this->controls['subMenuItemBorderColor'] = array(
			'group' => 'subMenuItem',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_menubar-subitem-border-color',
				),
			),
		);

		$this->controls['op_border_radius_subItem'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-radius-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-border-radius',
				),
			),
		);

		$this->controls['op_border_size_subItem'] = array(
			'group'       => 'subMenuItem',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_menubar-subitem-border-thickness',
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
					'_cssClasses' => 'o-menubar-navigation__separator',
				),
			),
		);
	}

	/**
	 * Provides a Top Item Structure.
	 *
	 * A Top Item consists of a <li> element with a <a> child element.
	 * They include the appropriate attributes and classes. The <li> element
	 * is a Div Bricks element. The <a> element is a Text Basic Bricks element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @param string $name Used as default text and hash url.
	 * @return (string|(string|string[][])[]|(string|(string|string[]|string[][])[])[][])[] Description.
	 */
	private function get_topmenu_item( $name = 'home' ) {
		return array(
			'name'     => 'div',
			'label'    => '‹li› ' . esc_html__( 'Top Item', 'oxyprops' ),
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
					'label'    => esc_html__( '‹a› Top Item Text', 'oxyprops' ),
					'settings' => array(
						'tag'         => 'a',
						'text'        => ucwords( $name ),
						'link'        => array(
							'type' => 'external',
							'url'  => '#' . strtolower( str_replace( ' ', '-', $name ) ),

						),
						'_attributes' => array(
							array(
								'name'  => 'role',
								'value' => 'menuitem',
							),
						),
						'_hidden'     => array(
							'_cssClasses' => 'o-menubar-navigation__top-menuitem',
						),
					),
				),
			),
		);
	}

	/**
	 * Provides a Sub Item Structure.
	 *
	 * A Sub Item consists of a <li> element with a <a> child element.
	 * They include the appropriate attributes and classes. The <li> element
	 * is a Div Bricks element. The <a> element is a Text Basic Bricks element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @param mixed $order A sequential number used to make attributes unique.
	 * @return (string|(string|string[][])[]|(string|(string|string[]|string[][])[])[][])[] Description.
	 */
	private function get_submenu_item( $order ) {
		return array(
			'name'     => 'div',
			'label'    => '‹li› ' . esc_html__( 'Submenu Item', 'oxyprops' ),
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
					'label'    => esc_html__( '‹a› Submenu Item Text', 'oxyprops' ),
					'settings' => array(
						'tag'         => 'a',
						'text'        => esc_html__( 'Submenu', 'oxyprops' ) . ' {item_index} ' . esc_html__( 'Item', 'oxyprops' ) . ' ' . $order,
						'link'        => array(
							'type' => 'external',
							'url'  => '#submenu-{item_index}-item-' . $order,
						),
						'_attributes' => array(
							array(
								'name'  => 'role',
								'value' => 'menuitem',
							),
						),
						'_hidden'     => array(
							'_cssClasses' => 'o-menubar-navigation__sub-menuitem',
						),
					),
				),
			),
		);
	}

	/**
	 * Provides an expandable Sub Item Structure.
	 *
	 * A Sub Item consists of a <li> element with a <a> child element and a <ul>
	 * child element.
	 * They include the appropriate attributes and classes. The <li> element
	 * is a Div Bricks element. The <a> element is a Text Basic Bricks element.
	 * The <ul> element is a Div Bricks element and is created in a separate function.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems
	 * @param mixed $order A sequential number used to make attributes unique.
	 * @return (string|(string|string[][])[]|(string|(string|string[]|string[][])[])[][])[] Description.
	 */
	private function get_submenu_expandable_item( $order ) {
		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹li› Expandable Item', 'oxyprops' ),
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
					'label'    => esc_html__( '‹a› Expandable Item Text', 'oxyprops' ),
					'settings' => array(
						'tag'         => 'a',
						'text'        => esc_html__( 'Expandable Item', 'oxyprops' ) . ' {item_index}',
						'link'        => array(
							'type' => 'external',
							'url'  => '#submenu-{item_index}-item-' . $order,
						),
						'_attributes' => array(
							array(
								'name'  => 'role',
								'value' => 'menuitem',
							),
							array(
								'name'  => 'aria-haspopup',
								'value' => 'true',
							),
							array(
								'name'  => 'aria-expanded',
								'value' => 'false',
							),
						),
						// NOTE: Bricks Undocumented (@since 1.5 to apply hard-coded hidden settings).
						'_hidden'     => array(
							'_cssClasses' => 'o-menubar-navigation__link--expandable o-menubar-navigation__sub-menuitem',
						),
					),
				),
				$this->get_nested_submenu( $order ),
			),
		);
	}

	/**
	 * Provides a nested Sub Menu Structure.
	 *
	 * A Nested Sub Menu consists of a <ul> element with a <li> child element.
	 * They include the appropriate attributes and classes. The <ul> element
	 * is a Div Bricks element. The <li> element is a Div Bricks element.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems
	 * @param mixed $order A sequential number used to make attributes unique.
	 * @return (string|(string|string[][])[]|(string|(string|string[]|string[][])[])[][])[] Description.
	 */
	private function get_nested_submenu( $order ) {
		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹ul› Submenu', 'oxyprops' ) . ' {item_index} ' . esc_html__( 'Item', 'oxyprops' ) . $order,
			'settings' => array(
				'tag'         => 'ul',
				'_attributes' => array(
					array(
						'name'  => 'role',
						'value' => 'menu',
					),
					array(
						'name'  => 'aria-label',
						'value' => esc_html__( 'Submenu', 'oxyprops' ) . ' {item_index} ' . esc_html__( 'Item', 'oxyprops' ) . ' ' . $order,
					),
				),
				'_hidden'     => array(
					'_cssClasses' => 'o-menubar-navigation__submenu',
				),
			),
			'children' => array(
				$this->get_submenu_item( '1' ),
				$this->get_submenu_item( '2' ),
				$this->get_separator(),
				$this->get_submenu_item( '3' ),
				$this->get_submenu_item( '4' ),
			),
		);
	}

	/**
	 * Provides a Sub Menu Structure.
	 *
	 * A Nested Sub Menu consists of a <ul> element with several <li> child elements.
	 * They include the appropriate attributes and classes. The <ul> element
	 * is a Div Bricks element. The <li> element is a Div Bricks element.
	 *
	 * @since 1.5.0 Describe changes.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return (string|array)[] Description.
	 */
	private function get_submenu() {
		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹ul› Submenu', 'oxyprops' ) . ' {item_index}',
			'settings' => array(
				'tag'         => 'ul',
				'text'        => esc_html__( 'Submenu', 'oxyprops' ) . ' {item_index}',
				'_attributes' => array(
					array(
						'name'  => 'role',
						'value' => 'menu',
					),
					array(
						'name'  => 'aria-label',
						'value' => 'Submenu {item_index}',
					),
				),
				'_hidden'     => array(
					'_cssClasses' => 'o-menubar-navigation__submenu',
				),
			),
			'children' => array(
				$this->get_submenu_item( '1' ),
				$this->get_submenu_item( '2' ),
				$this->get_submenu_expandable_item( '3' ),
				$this->get_separator(),
				$this->get_submenu_item( '4' ),
				$this->get_submenu_item( '5' ),
			),
		);
	}

	/**
	 * Provides a Nestable Item Structure.
	 *
	 * A Nestable Item consists of a <li> element with a <a> child element.
	 * They include the appropriate attributes and classes. The <li> element
	 * is a Div Bricks element. The <a> element is a Div Basic Text element.
	 *
	 * @since 1.5.0 Describe changes.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return (string|(string|string[][])[]|((string|(string|string[]|string[][])[])[]|(string|array)[])[])[] Description.
	 */
	public function get_nestable_item() {
		return array(
			'name'     => 'div',
			'label'    => esc_html__( '‹li› Top Item', 'oxyprops' ),
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
					'label'    => esc_html__( '‹a› Top Item Text', 'oxyprops' ),
					'settings' => array(
						'tag'         => 'a',
						'text'        => esc_html__( 'Top Item', 'oxyprops' ) . ' {item_index}',
						'link'        => array(
							'type' => 'external',
							'url'  => ', // top-item-{item_index}',
						),
						'_attributes' => array(
							array(
								'name'  => 'role',
								'value' => 'menuitem',
							),
							array(
								'name'  => 'aria-haspopup',
								'value' => 'true',
							),
							array(
								'name'  => 'aria-expanded',
								'value' => 'false',
							),
						),
						'_hidden'     => array(
							'_cssClasses' => 'o-menubar-navigation__top-link--expandable o-menubar-navigation__top-menuitem',
						),
					),
				),
				$this->get_submenu(),

			),
		);
	}

	/**
	 * Provides the default structure for the element.
	 *
	 * Creates a blueprint with simple top items and expandable items
	 * to demonstrate the element features.
	 *
	 * @since 1.5.0 Creation.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return array Default structure.
	 */
	public function get_nestable_children(): array {
		$children = array();

		$children[] = $this->get_topmenu_item();
		$children[] = $this->get_topmenu_item( 'About' );
		for ( $i = 0; $i < 2; $i++ ) {
			$item = $this->get_nestable_item();

			// Replace {item_index} with $index.
			$item       = wp_json_encode( $item );
			$item       = str_replace( '{item_index}', $i + 1, $item );
			$item       = json_decode( $item, true );
			$children[] = $item;
		}
		$children[] = $this->get_topmenu_item( 'Contact' );

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

		wp_enqueue_style( 'bricksprops-menubar', plugin_dir_url( __DIR__ ) . 'assets/css/omenubar.css', array(), '1.0.0', 'all' );
		wp_enqueue_script( 'bricksprops-menubar', plugin_dir_url( __DIR__ ) . 'assets/js/omenubar.js', '', '1.0.0', true );
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

		$root_label = isset( $settings['ariaLabel'] ) ? 'aria-label="' . $settings['ariaLabel'] . '"' : '';

		$output  = "<nav {$this->render_attributes('_root')} {$root_label}>";
		$output .= "<menu class='o-menubar-navigation' role='menubar' {$root_label}>";

		// Render children elements (= individual items).
		$output .= \Bricks\Frontend::render_children( $this );

		$output .= '</menu>';
		$output .= '</nav>';

		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

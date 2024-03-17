<?php
/**
 * This file creates a FAQ custom element using the W3C WAI Disclosure Pattern.
 *
 * @category Bricks Elements
 * @package  OxyProps
 * @author   Cédric Bontems <dev@oxyprops.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html  GPL v2 or later
 * @link     https://oxyprops.com                       OxyProps Website
 * @since    1.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The menubar element
 */
class O_Brx_Faq extends \Bricks\Element {

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
	public $name = 'ofaq';

	/**
	 * The icon that will be used in the elements panel
	 *
	 * @var string
	 */
	public $icon = 'ti-layout-accordion-list';

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
	public $scripts = array( 'ofaq' );

	/**
	 * If the element  is nestable.
	 *
	 * @since 1.5.0 Describe changes.
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @var bool $nestable Description.
	 */
	public $nestable = true;

	/**
	 * The element label in the elements panel
	 *
	 * @return string
	 */
	public function get_label() {
		return esc_html__( 'FAQ', 'oxyprops' );
	}

	/**
	 * Create control groups in Bricks
	 */
	public function set_control_groups() {
		$this->control_groups['question'] = array(
			'title' => esc_html__( 'Question', 'oxyprops' ),
		);
		$this->control_groups['answer']   = array(
			'title' => esc_html__( 'Answer', 'oxyprops' ),
		);
	}

	/**
	 * Defines the controls for the element
	 *
	 * @return void
	 */
	public function set_controls() {

		$this->controls['showAnswers'] = array(
			'label' => esc_html__( 'Show answers in editor', 'oxyprops' ),
			'type'  => 'checkbox',
			'css'   => array(
				array(
					'property' => '--o_faq-answer-display',
					'value'    => 'block',
				),
			),
		);

		$this->controls['op_border_size_faqCaretSize'] = array(
			'label'       => esc_html__( 'Caret thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-1)',
			'css'         => array(
				array(
					'property' => '--o_faq-caret-thickness',
				),
			),
		);

		$this->controls['answerSeparatorSpacing'] = array(
			'label'       => esc_html__( 'Separator Spacing', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-fluid-2)',
			'css'         => array(
				array(
					'property' => '--o_faq-answer-bottom-space',
				),
			),
		);

		$this->controls['op_border_size_answerSeparatorSize'] = array(
			'label'       => esc_html__( 'Separator thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_faq-answer-separator-size',
				),
			),
		);

		$this->controls['AnswerSeparatorColor'] = array(
			'label' => esc_html__( 'Separator color', 'oxyprops' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_faq-answer-separator-color',
				),
			),
		);

		$this->controls['questionPaddingBlock'] = array(
			'group'       => 'question',
			'label'       => esc_html__( 'Padding Block', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-1)',
			'css'         => array(
				array(
					'property' => '--o_faq-question-padding-block',
				),
			),
		);

		$this->controls['questionPaddingInline'] = array(
			'group'       => 'question',
			'label'       => esc_html__( 'Padding Inline', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-size-2)',
			'css'         => array(
				array(
					'property' => '--o_faq-question-padding-inline',
				),
			),
		);

		$this->controls['font-size'] = array(
			'group'       => 'question',
			'label'       => esc_html__( 'Font Size', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-fluid-font-1)',
			'css'         => array(
				array(
					'property' => '--o_faq-question-font-size',
				),
			),
		);

		$this->controls['op_border_radius'] = array(
			'group'       => 'question',
			'label'       => esc_html__( 'Border Radius', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-radius-2)',
			'css'         => array(
				array(
					'property' => '--o_faq-question-border-radius',
				),
			),
		);

		$this->controls['op_border_size'] = array(
			'group'       => 'question',
			'label'       => esc_html__( 'Border Thickness', 'oxyprops' ),
			'type'        => 'number',
			'placeholder' => 'var(--o-border-size-2)',
			'css'         => array(
				array(
					'property' => '--o_faq-question-border-size',
				),
			),
		);

		$this->controls['faqQuestionActiveSeparator'] = array(
			'group'      => 'question',
			'label'      => esc_html__( 'Active', 'bricks' ),
			'type'       => 'separator',
			'fullAccess' => true,
		);

		$this->controls['faqQuestionActiveBackgroundColor'] = array(
			'group' => 'question',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_faq-question-active-bg',
				),
			),
		);

		$this->controls['faqQuestionActiveColor'] = array(
			'group' => 'question',
			'label' => esc_html__( 'Text color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_faq-question-active-color',
				),
			),
		);

		$this->controls['faqQuestionActiveBorderColor'] = array(
			'group' => 'question',
			'label' => esc_html__( 'Border color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_faq-question-active-border-color',
				),
			),
		);

		// ANSWER.

		$this->controls['answerMargin'] = array(
			'group' => 'answer',
			'label' => esc_html__( 'Margin', 'bricks' ),
			'type'  => 'spacing',
			'css'   => array(
				array(
					'property' => 'margin',
					'selector' => '.o-faq__desc',
				),
			),
		);

		$this->controls['answerPadding'] = array(
			'group' => 'answer',
			'label' => esc_html__( 'Padding', 'bricks' ),
			'type'  => 'spacing',
			'css'   => array(
				array(
					'property' => 'padding',
					'selector' => '.o-faq__desc',
				),
			),
		);

		$this->controls['answerBackgroundColor'] = array(
			'group' => 'answer',
			'label' => esc_html__( 'Background color', 'bricks' ),
			'type'  => 'color',
			'css'   => array(
				array(
					'property' => '--o_faq-answer-bg',
				),
			),
		);

		$this->controls['_border'] = array(
			'group' => 'answer',
			'label' => esc_html__( 'Border', 'bricks' ),
			'type'  => 'border',
			'css'   => array(
				array(
					'property' => 'border',
					'selector' => '.o-faq__desc',
				),
			),
		);

		$this->controls['answerTypography'] = array(
			'group' => 'answer',
			'label' => esc_html__( 'Typography', 'bricks' ),
			'type'  => 'typography',
			'css'   => array(
				array(
					'property' => 'font',
					'selector' => '.o-faq__desc',
				),
				array(
					'property' => 'font',
					'selector' => '.o-faq__desc .brxe-heading',
				),
				array(
					'property' => 'font',
					'selector' => '.o-faq__desc .brxe-text-basic',
				),
			),
		);
	}

	/**
	 * Provides dummy question answer pairs
	 *
	 * @since 1.5.0
	 * @author Cédric Bontems <dev@oxyprops.com>
	 *
	 * @return array
	 */
	private function get_content(): array {
		return array(
			array(
				'question' => 'How to use this element?',
				'answer'   => 'You can insert a blueprint from your BricksProps Structure context menu. Don’t forget to adjust the aria-controls attribute of the button to match the id of the answer div. You can also insert the element from the BricksProps Elements tab.',
			),
			array(
				'question' => 'Why is this element semantic structure better for Accessibility and SEO?',
				'answer'   => 'The semantic structure of the FAQ is conveyed with native dl, dt and dd elements. To ensure the list structure is communicated to assistive technologies, instead of applying a button role to the dt element, a button element is contained within the dt element. Similarly, each div element containing answer content that can be shown or hidden by the button is a child of a dd element. Since all the dd elements are present in the DOM even if some answers are hidden, the dl structure is always complete.',
			),
			array(
				'question' => 'Are visual features included in this element?',
				'answer'   => 'To help people with visual impairments identify the disclosure as interactive and make it easier to perceive that clicking either the disclosure button or its label changes the expanded state, when a pointer hovers over the button or its label, the background color changes, a border appears, and the cursor changes to a pointer.',
			),
			array(
				'question' => 'How are borders handled?',
				'answer'   => 'Because transparent borders are visible on some systems with operating system high contrast settings enabled, transparency cannot be used to create a visual difference between the element that is focused an other elements. Instead of using transparency, the focused element has a thicker border and less padding. When an element receives focus, its border changes from 0 to --o-border-size-2 and padding is reduced by --o-border-size-2. When an element loses focus, its border changes from --o-border-size-2 to 0 and padding is increased by --o-border-size-2.',
			),
			array(
				'question' => 'What about the caret icon?',
				'answer'   => 'To ensure the arrow graphics (achieved using a pseudo element) in the CSS have sufficient contrast with the background when high contrast settings invert colors, the color of the arrows are synchronized with the color of the text content. For example, the color of the arrow is set to match the foreground color of high contrast mode text by specifying the CSS currentcolor value for the stroke and fill properties of the polygon elements used to draw the arrows. If specific colors were instead used to specify the color properties, those colors would remain the same in high contrast mode, which could lead to insufficient contrast between the arrows and the background or even make the arrows invisible if the color matched the high contrast mode background.',
			),
			array(
				'question' => 'How is keyboard supported?',
				'answer'   => 'Pressing <kbd>Tab</kbd> moves keyboard focus to the disclosure button. Pressing <kbd>Space</kbd> or <kbd>Enter</kbd> activates the disclosure button, which toggles the visibility of the answer to the question.',
			),
		);
	}

	/**
	 * Generates the nestable element structure
	 *
	 * @author Cédric Bontems <dev@oxyprops.com>
	 * @since 1.5.0 Creation.
	 *
	 * @return array
	 */
	public function get_nestable_item(): array {
		return array(

			// Description Title.

			array(
				'name'     => 'div',
				'label'    => '‹dt›' . esc_html__( 'Question', 'oxyprops' ) . ' {item_index} ' . esc_html__( 'Wrapper', 'oxyprops' ),
				'settings' => array(
					'tag' => 'dt',
				),
				'children' => array(
					array(
						'name'     => 'text-basic',
						'label'    => esc_html__( '‹button› Question', 'oxyprops' ) . ' {item_index}',
						'settings' => array(
							'tag'         => 'button',
							'text'        => '{item_question}',
							'_attributes' => array(
								array(
									'name'  => 'type',
									'value' => 'button',
								),
								array(
									'name'  => 'aria-controls',
									'value' => 'faq{item_index}_desc',
								),
								array(
									'name'  => 'aria-expanded',
									'value' => 'false',
								),
							),
						),
					),
				),
			),

			// Description Content.
			array(
				'name'     => 'div',
				'label'    => '‹dd›' . esc_html__( 'Answer', 'oxyprops' ) . ' {item_index} ' . esc_html__( 'Wrapper', 'oxyprops' ),
				'settings' => array(
					'tag' => 'dd',
				),
				'children' => array(
					array(
						'name'     => 'text-basic',
						'label'    => '‹div› ' . esc_html__( 'Answer', 'oxyprops' ) . ' {item_index} ' . esc_html__( 'Container', 'oxyprops' ),
						'settings' => array(
							'tag'     => 'div',
							'text'    => '{item_answer}',
							'_cssId'  => 'faq{item_index}_desc',
							'_hidden' => array(
								'_cssClasses' => 'o-faq__desc',
							),
						),
					),
				),
			),
		);
	}

	/**
	 * Generates the nestable element children
	 *
	 * @author Cédric Bontems <dev@oxyprops.com>
	 * @since 1.5.0 Creation.
	 *
	 * @return array
	 */
	public function get_nestable_children(): array {
		$children = array();

		for ( $i = 0; $i < 6; $i++ ) {
			$item = $this->get_nestable_item();

			// Replace {item_index} with $index.
			$item       = wp_json_encode( $item );
			$item       = str_replace( '{item_index}', $i + 1, $item );
			$question   = count( $this->get_content() ) > $i ? $this->get_content()[ $i ]['question'] : 'Another question?';
			$item       = str_replace( '{item_question}', $question, $item );
			$answer     = count( $this->get_content() ) > $i ? $this->get_content()[ $i ]['answer'] : 'Another answer.';
			$item       = str_replace( '{item_answer}', $answer, $item );
			$item       = json_decode( $item, true );
			$children[] = $item[0];
			$children[] = $item[1];
		}

		return $children;
	}


	/**
	 * Load assets on frontend
	 */
	public function enqueue_scripts() {

		wp_enqueue_style( 'bricksprops-faq', plugin_dir_url( __DIR__ ) . 'assets/css/ofaq.css', array(), '1.0.0', 'all' );
		wp_enqueue_script( 'bricksprops-faq', plugin_dir_url( __DIR__ ) . 'assets/js/ofaq.js', '', '1.0.0', true );
	}

	/**
	 * Render element HTML on frontend
	 *
	 * If no 'render_builder' function is defined then this code is used to render element HTML in builder, too.
	 */
	public function render() {
		$settings = $this->settings;

		$this->set_attribute( '_root', 'class', array( 'o-faq' ) );

		$output = "<dl {$this->render_attributes('_root')}>";

		// Render children elements (= individual items).
		$output .= \Bricks\Frontend::render_children( $this );

		$output .= '</dl>';

		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

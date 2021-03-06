<?php
/**
 * The textarea customize control extends the WP_Customize_Control class.  This class allows 
 * developers to create textarea settings within the WordPress theme customizer.
 *
 * @package Hybrid
 * @subpackage Classes
 * @author Justin Tadlock <justin@justintadlock.com>
 * @copyright Copyright (c) 2008 - 2012, Justin Tadlock
 * @link http://themehybrid.com/hybrid-core
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Textarea customize control class.
 *
 * @since 1.4.0
 */
class Hybrid_Customize_Control_Textarea extends WP_Customize_Control {

	public $type = 'textarea';

	public function __construct( $manager, $id, $args = array() ) {

		parent::__construct( $manager, $id, $args );
	}

	public function render_content() { ?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<div class="customize-control-content">
				<textarea cols="25" rows="5" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</div>
		</label>
	<?php }
}

?>
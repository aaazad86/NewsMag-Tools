<?php

/**
 * Plugin Name
 *
 * @package           Primary Release @1.0.1
 * @author            Al Amin Azad
 * @copyright         2022 Bondhon IT
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       News Magazine Tools
 * Plugin URI:        https://bondhon.net/plugin-name
 * Description:       Various tool for anyonline newspaper.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Al Amin Azad
 * Author URI:        https://bondhon.net
 * Text Domain:       News-Mag-Tools
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */


/**
 * Activate the plugin.
 */
function newsmagtools-bondhon_activate() { 
    
}
register_activation_hook( __FILE__, 'newsmagtools-bondhon_activate' );



/**
 * https://developer.wordpress.org/themes/functionality/widgets/
 */

/**
    * Adds Foo_Widget widget.
    * Simple Text Widget Start
 */
class Foo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			'Foo_Widget', // Name
			array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
        );
    }

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		}
		echo __( 'Hello, World!', 'text_domain' );
		echo $after_widget;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<p>
		    <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
    <?php
    }

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

/**
 *Simple Text Widget End
 */

/**
 *Simple Text Widget regester 
 */

// Register Foo_Widget widget
add_action( 'widgets_init', 'register_foo' );
    
function register_foo() { 
    register_widget( 'Foo_Widget' ); 
}



/**
 * Deactivation hook.
 */
function newsmagtools-bondhon_deactivate() {
    
}
register_deactivation_hook( __FILE__, 'newsmagtools-bondhon_deactivate' );


register_uninstall_hook(    __FILE__, 'newsmagtools-bondhon_function_to_run' );

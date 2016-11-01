<?php

/***** MH Affiliate Widget *****/

class mh_affiliate_widget extends WP_Widget {
    function __construct() {
		parent::__construct(
			'mh_affiliate', esc_html_x('MH Affiliate Widget', 'widget name', 'mh-magazine-lite'),
			array('classname' => 'mh_affiliate', 'description' => esc_html__('MH Affiliate Widget to earn money by promoting WordPress themes by MH Themes.', 'mh-magazine-lite'))
		);
	}
    function widget($args, $instance) {
	    $defaults = array('title' => '', 'mh_username' => 'MHthemes');
		$instance = wp_parse_args($instance, $defaults);
        echo $args['before_widget'];
        	if (!empty($instance['title'])) {
				echo $args['before_title'] . esc_html(apply_filters('widget_title', $instance['title'])) . $args['after_title'];
			} ?>
			<a href="https://creativemarket.com/MHthemes/?u=<?php echo esc_attr($instance['mh_username']); ?>" target="_blank" title="<?php esc_html_e('Premium Magazine WordPress Themes by MH Themes', 'mh-magazine-lite'); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri() . '/images/mh_magazine_300x250.png' ?>" alt="<?php esc_html_e('MH Magazine WordPress Theme', 'mh-magazine-lite'); ?>" /></a><?php
        echo $args['after_widget'];
    }
    function update($new_instance, $old_instance) {
	    $instance = array();
        if (!empty($new_instance['title'])) {
			$instance['title'] = sanitize_text_field($new_instance['title']);
		}
		if (!empty($new_instance['mh_username'])) {
			$instance['mh_username'] = sanitize_text_field($new_instance['mh_username']);
		}
        return $instance;
    }
    function form($instance) {
	    $defaults = array('title' => 'WordPress Magazine Theme', 'mh_username' => '');
        $instance = wp_parse_args($instance, $defaults); ?>
		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'mh-magazine-lite'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
        </p>
        <p>
        	<label for="<?php echo esc_attr($this->get_field_id('mh_username')); ?>"><?php esc_html_e('Creative Market Username:', 'mh-magazine-lite'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_attr($instance['mh_username']); ?>" name="<?php echo esc_attr($this->get_field_name('mh_username')); ?>" id="<?php echo esc_attr($this->get_field_id('mh_username')); ?>" />
        </p>
		<p><?php echo esc_html__('With this widget you can earn money by promoting WordPress themes by MH Themes. If you do not have a Creative Market Username yet, please visit our', 'mh-magazine-lite') . ' <a href="' . esc_url('http://www.mhthemes.com/affiliates/') . '" target="_blank">' . esc_html__('infopage for affiliates', 'mh-magazine-lite'). '</a>'; ?>.</p><?php
    }
}

?>
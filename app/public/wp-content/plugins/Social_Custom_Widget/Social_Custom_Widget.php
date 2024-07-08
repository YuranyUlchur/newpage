<?php
/*
Plugin Name: Social Widget
Plugin URI: http://example.com/widget-plugin
Description: A simple plugin to add social media profiles via a widget.
Author: Yurany Ulchur
Author URI: http://example.com
Version: 1.0
*/

class Social_Custom_Widget extends WP_Widget
{

    // Constructor
    function __construct()
    {
        parent::__construct(
            'social_custom_widget',
            'Social Widget',
            array(
                'classname' => 'social-custom-widget',
                'description' => 'Widget para redes sociales',
            )
        );
    }

    // Frontend display of widget
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>
        <aside id="social-custom-widget" class="widget social-custom-widget">
            <h3 class="widget-title">Social networks</h3>
            <ul class="social-links">
                <li><a href="<?php echo esc_attr($instance['facebook_url']); ?>" target="_blank"><i
                            class="fab fa-facebook"></i></a></li>
                <li><a href="<?php echo esc_attr($instance['twitter_url']); ?>" target="_blank"><i
                            class="fab fa-twitter"></i></a></li>
                <li><a href="<?php echo esc_attr($instance['instagram_url']); ?>" target="_blank"><i
                            class="fab fa-instagram"></i></a></li>
                <li><a href="<?php echo esc_attr($instance['tiktok_url']); ?>" target="_blank"><i class="fab fa-tiktok"></i></a>
                </li>
            </ul>
        </aside>
        <?php
        echo $args['after_widget'];
    }

    // Backend form of widget
    public function form($instance)
    {
        $facebook_url = !empty($instance['facebook_url']) ? $instance['facebook_url'] : '';
        $twitter_url = !empty($instance['twitter_url']) ? $instance['twitter_url'] : '';
        $instagram_url = !empty($instance['instagram_url']) ? $instance['instagram_url'] : '';
        $tiktok_url = !empty($instance['tiktok_url']) ? $instance['tiktok_url'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('facebook_url'); ?>">URL de Facebook:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook_url'); ?>"
                name="<?php echo $this->get_field_name('facebook_url'); ?>" type="text"
                value="<?php echo esc_attr($facebook_url); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('twitter_url'); ?>">URL de Twitter:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter_url'); ?>"
                name="<?php echo $this->get_field_name('twitter_url'); ?>" type="text"
                value="<?php echo esc_attr($twitter_url); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('instagram_url'); ?>">URL de Instagram:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('instagram_url'); ?>"
                name="<?php echo $this->get_field_name('instagram_url'); ?>" type="text"
                value="<?php echo esc_attr($instagram_url); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('tiktok_url'); ?>">URL de Tiktok:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('tiktok_url'); ?>"
                name="<?php echo $this->get_field_name('tiktok_url'); ?>" type="text"
                value="<?php echo esc_attr($tiktok_url); ?>">
        </p>
        <?php
    }

    // Update widget options
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['facebook_url'] = (!empty($new_instance['facebook_url'])) ? sanitize_text_field($new_instance['facebook_url']) : '';
        $instance['twitter_url'] = (!empty($new_instance['twitter_url'])) ? sanitize_text_field($new_instance['twitter_url']) : '';
        $instance['instagram_url'] = (!empty($new_instance['instagram_url'])) ? sanitize_text_field($new_instance['instagram_url']) : '';
        $instance['tiktok_url'] = (!empty($new_instance['tiktok_url'])) ? sanitize_text_field($new_instance['tiktok_url']) : '';
        return $instance;
    }
}

// Register widget
function register_social_custom_widget()
{
    register_widget('Social_Custom_Widget');
}
add_action('widgets_init', 'register_social_custom_widget');

// Enqueue FontAwesome
function load_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');
?>
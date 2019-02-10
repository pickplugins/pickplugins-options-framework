<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

    //---------------------------------------------------------------------------
    // About me widget
    //---------------------------------------------------------------------------

    class bug_blog_about_me_Widget extends WP_Widget{

        public function __construct() {
            parent::__construct(
                'bug_blog_about_me', // Base ID
                __('Bug blog - About me', 'bug-blog'), // Name
                array('description' => __('Displaying about me', 'bug-blog'),) // Args
            );
        }

        public function form($instance) {

            $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
	        $about_me_data      = isset($instance['about_me']) ? $instance['about_me'] : array();

	        $profile_name = isset($about_me_data['profile_name']) ? $about_me_data['profile_name']: '';


            ?>
            
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title :', 'bug-blog');
                    ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo sanitize_text_field($title); ?>" />
            </p>


            <p>
                <?php _e('Name:','bug-blog')?><br>
                <input type="text" placeholder="Jhon" value="<?php echo esc_attr($profile_name); ?>" name="<?php echo esc_attr($this->get_field_name('about_me')); ?>[profile_name]">
            </p>

        <?php
        }

        public function update($new_instance, $old_instance)
        {
            $instance                 = array();
            $instance['title'] = strip_tags($new_instance['title']);

	        $instance['about_me']      = (!empty($new_instance['about_me'])) ? $new_instance['about_me']: array();



            return $instance;
        }

        public function widget($args, $instance)
        {

            $title = apply_filters('widget_title', empty($instance['title']) ? __('About me', 'bug-blog') :
            $instance['title'], $instance, $this->id_base);


            $about_me_data = $instance['about_me'];

	        $profile_name = esc_attr($about_me_data['profile_name']);

            echo $args[ 'before_widget' ];
            if (!empty($title))
                echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];


            ?>

            <div class="about-me">

                <div class="name"><?php echo esc_attr($profile_name); ?></div>

            </div>




            <?php
            echo $args[ 'after_widget' ];
        }
    }


    // register widgets
    if (!function_exists('bug_blog_about_me_register')) {
        function bug_blog_about_me_register()
        {
            register_widget('bug_blog_about_me_Widget');
        }

       add_action('widgets_init', 'bug_blog_about_me_register');
    }


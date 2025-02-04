<?php

  $settings = $this->get_settings_for_display();
        $od_btn_text = $settings['od_btn_text'];
        $od_btn_link_type = $settings['od_btn_link_type'];
        $od_btn_link = $settings['od_btn_link'];
        $od_btn_page_link = $settings['od_btn_page_link'];
?>
        <?php
        // Link
        if ('2' == $od_btn_link_type) {
            $this->add_render_attribute('od-button-arg', 'href', get_permalink($od_btn_page_link));
            $this->add_render_attribute('od-button-arg', 'target', '_self');
            $this->add_render_attribute('od-button-arg', 'rel', 'nofollow');
            $this->add_render_attribute('od-button-arg', 'class', 'it-btn');
        } else {
            if (! empty($od_btn_link['url'])) {
                $this->add_link_attributes('od-button-arg', $od_btn_link);
                $this->add_render_attribute('od-button-arg', 'class', 'it-btn-red');
            }
        }
        ?>

        <a <?php echo $this->get_render_attribute_string('od-button-arg'); ?>>
            <?php echo esc_html($od_btn_text, 'ordainit-toolkit'); ?>
        </a>


        <script>
            jQuery(document).ready(function($) {

            });
        </script>
<?php
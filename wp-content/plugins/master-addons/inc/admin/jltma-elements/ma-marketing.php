<?php

namespace MasterAddons\Admin\Dashboard\Addons\Elements;


if (!class_exists('JLTMA_Addon_Marketing')) {
    class JLTMA_Addon_Marketing
    {

        private static $instance = null;
        public static $jltma_marketing;

        public function __construct()
        {
            self::$jltma_marketing = [
                'jltma-marketing'      => [
                    'title'     => esc_html__('Marketing Elements', JLTMA_TD),
                    'elements'      => [
                        [
                            'key'      => 'ma-mailchimp',
                            'class'    => 'MasterAddons\Addons\JLTMA_Mailchimp',
                            'title'    => esc_html__('Mailchimp', JLTMA_TD),
                            'demo_url' => 'https://master-addons.com/demos/mailchimp/',
                            'docs_url' => 'https://master-addons.com/docs/addons/mailchimp-element/',
                            'tuts_url' => 'https://www.youtube.com/watch?v=hST5tycqCsw',
                            'is_pro'   => false
                        ],
                    ]
                ]
            ];
        }

        public static function get_instance()
        {
            if (!self::$instance) {
                self::$instance = new self;
            }
            return self::$instance;
        }
    }
    JLTMA_Addon_Marketing::get_instance();
}

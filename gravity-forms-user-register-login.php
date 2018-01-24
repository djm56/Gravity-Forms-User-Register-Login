<?php

/**
 *
 * @link              https://wpza.co.za
 * @since             1.0.0
 * @package           gravity-forms-user-register-login
 *
 * @wordpress-plugin
 * Plugin Name:       Gravity Forms Register and Login
 * Plugin URI:        https://wpza.co.za/wpza-plugins
 * Description:       Gravity Forms User Register, Login, Forgot Password
 * Version:           1.0.0
 * Author:            Donovan Maidens
 * Author URI:        https://wpza.co.za
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
if(!class_exists("gravityformsuserregisterlogin"))
{
   
    class gravityformsuserregisterlogin
    {
       
        public function __construct()
        {

            require_once(sprintf("%s/includes/disable-auto-update.php", dirname(__FILE__)));

        } 

       
        public static function activate()
        {
            // Do something
        }

       
        public static function deactivate()
        {
            // Do something
        }
    } 
} 

if(class_exists('gravityformsuserregisterlogin'))
{    
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('gravityformsuserregisterlogin', 'activate'));
    register_deactivation_hook(__FILE__, array('gravityformsuserregisterlogin', 'deactivate'));
    
    
    $plugin = new gravityformsuserregisterlogin();
} 
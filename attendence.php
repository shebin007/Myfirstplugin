<?php
/**
 * @package attendence
 */
/*
  Plugin Name: Attendence
  Plugin URI :https://github.com/shebin007/Myfirstplugin
  Description: This is my first Plugin
  Version : 1.0.0
  Author : Shebin KP
  Author URI: https://github.com/shebin007/Myfirstplugin
  License: GPLv2 or later
  Text Domain: attendence
*/
defined('ABSPATH') or die('Hey,pee in your pant');

class AttendencePlugin
{
  function activate(){
    echo 'Plugin is activated';
  }

  function deactivate(){

  }

  function uninstall(){

  }

  
}
if (class_exists( 'AttendencePlugin' )){
  $attendencePlugin = new AttendencePlugin ();
}

//activate
register_activation_hook(__FILE__,array($attendencePlugin,'activate'));

//deactivate
register_deactivation_hook(__FILE__,array($attendencePlugin,'deactivate'));

//uninstall


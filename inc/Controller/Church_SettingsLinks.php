<?php
/**
 * @package  K7Church
 */
 

class Church_SettingsLinks extends Church_BaseController
{
	public function ch_register() 
	{
		add_filter( "plugin_action_links_$this->plugin", array( $this, 'ch_settings_link' ) );
	}

	public function ch_settings_link( $links ) 
	{
		$settings_link = '<a href="admin.php?page=church_plugin">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
	}
}
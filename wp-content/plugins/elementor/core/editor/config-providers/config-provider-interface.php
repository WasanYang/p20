<?php
namespace Elementor\Core\Editor\Config_Providers;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

interface Config_Provider_Interface {
	/**
	 * Return a list of the scripts to register.
	 *
	 * @return array
	 */
	public function get_scripts();

	/**
	 * Return a list of the scripts to enqueue (loaders for the apps).
	 *
	 * @return array
	 */
	public function get_loader_scripts();

	/**
	 * Return the path to the template body file.
	 *
	 * @return string
	 */
	public function get_template_body_file_path();
}

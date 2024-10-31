<?php
if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {

	// load vc templates
	$files = glob( POWER_ADDONS_DIR . 'admin/vc-template/templates/*.php' );
	foreach ( $files as $file ) {
		if ( __FILE__ != basename( $file ) ) {
			include_once $file;
		}
	}
}
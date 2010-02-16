<?php

########################################################################
# Extension Manager/Repository config file for ext "comments_recaptcha".
#
# Auto generated 30-12-2009 23:15
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'reCAPTCHA for EXT:comments',
	'description' => 'This extension extends EXT:comments to use reCAPTCHA (EXT:jm_recaptcha)',
	'category' => 'fe',
	'author' => 'Steffen Gebert',
	'author_email' => 'steffen@steffen-gebert.de',
	'shy' => '',
	'dependencies' => 'comments,jm_recaptcha',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.1',
	'constraints' => array(
		'depends' => array(
			'comments' => '',
			'jm_recaptcha' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:9:"ChangeLog";s:4:"e0d2";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"1bdc";s:19:"doc/wizard_form.dat";s:4:"807b";s:20:"doc/wizard_form.html";s:4:"696f";}',
);

?>

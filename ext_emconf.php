<?php

########################################################################
# Extension Manager/Repository config file for ext "comments_recaptcha".
#
# Auto generated 10-01-2010 20:19
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
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
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
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"1259";s:28:"class.ux_tx_comments_pi1.php";s:4:"5629";s:12:"ext_icon.gif";s:4:"2eee";s:17:"ext_localconf.php";s:4:"a797";s:19:"doc/wizard_form.dat";s:4:"807b";s:20:"doc/wizard_form.html";s:4:"696f";}',
	'suggests' => array(
	),
);

?>
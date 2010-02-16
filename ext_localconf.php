<?php

if (!defined ('TYPO3_MODE')) die('Access denied.');

//$TYPO3_CONF_VARS['FE']['XCLASS']['ext/comments/pi1/class.tx_comments_pi1.php'] = t3lib_extMgm::extPath($_EXTKEY) . 'class.ux_tx_comments_pi1.php';
$TYPO3_CONF_VARS['EXTCONF']['comments']['getCaptcha']['jm_recaptcha'] == 'EXT:comments_recaptcha/class.tx_commentsrecaptcha.php:tx_comments_recaptcha->getCaptcha';

?>

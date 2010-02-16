<?php

if (!defined ('TYPO3_MODE')) die('Access denied.');

$TYPO3_CONF_VARS['EXTCONF']['comments']['getCaptcha']['comments_recaptcha'] = 'EXT:comments_recaptcha/class.tx_commentsrecaptcha.php:tx_commentsrecaptcha->getCaptcha';
$TYPO3_CONF_VARS['EXTCONF']['comments']['processSubmission_validate']['comments_recaptcha']['captcha'] = 'EXT:comments_recaptcha/class.tx_commentsrecaptcha.php:tx_commentsrecaptcha->processSubmission_validate';
?>

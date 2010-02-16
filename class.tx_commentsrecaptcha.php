<?php

class tx_commentsrecaptcha {

	/**
	 * Adds captcha code if enabled.
	 *
	 * @return      string          Generated HTML
	 */
	function getCaptcha($params, &$pObj) {
		if (t3lib_extMgm::isLoaded('jm_recaptcha')) {
			require_once(t3lib_extMgm::extPath('jm_recaptcha') . 'class.tx_jmrecaptcha.php');

			/* @var $recaptcha tx_jmrecaptcha */
			$recaptcha = t3lib_div::makeInstance('tx_jmrecaptcha');
			$captchaCode = $recaptcha->getReCaptcha();

				// @todo get this code from a template file
			return '<label for="recaptcha_response_field"></label>' .
				$captchaCode .
				'###ERROR_CAPTCHA###';
		} else {
			return "Captcha extension jm_recaptcha was not loaded!";
		}
	}

	/**
	 * Validates submitted form. Errors are collected in <code>$this->formValidationErrors</code>
	 *
	 * @return      boolean         true, if form is ok.
	 */
	function processSubmission_validate($params, &$pObj) {

		if (t3lib_extMgm::isLoaded('jm_recaptcha')) {
			require_once(t3lib_extMgm::extPath('jm_recaptcha') . 'class.tx_jmrecaptcha.php');
 
			$recaptcha = t3lib_div::makeInstance('tx_jmrecaptcha');
			/* @var $recaptcha tx_jmrecaptcha */

			$status = $recaptcha->validateReCaptcha();
			if (!$status['verified']) {
				return $pObj->pi_getLL('error.wrong.captcha');
			}
		}
		return;
	}
}

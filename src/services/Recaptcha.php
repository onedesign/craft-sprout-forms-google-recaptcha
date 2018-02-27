<?php
/**
 * Sprout Google Recaptcha plugin for Craft CMS 3.x
 *
 * Google Recaptcha solution for Sprout Forms
 *
 * @link      https://www.barrelstrengthdesign.com/
 * @copyright Copyright (c) 2018 Barrel Strength
 */

namespace barrelstrength\sproutgooglerecaptcha\services;

use barrelstrength\sproutgooglerecaptcha\contracts\GoogleRecaptcha;
use Craft;
use craft\base\Component;

/**
 * @author    Barrel Strength
 * @package   SproutGoogleRecaptcha
 * @since     1.0.0
 */
class Recaptcha extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * @var GoogleRecaptcha
     */
    private $recaptcha = null;

    public function init()
    {
        if (is_null($this->recaptcha)) {
            $this->recaptcha = new GoogleRecaptcha();
        }

        parent::init();
    }

    /*
     * Validate Response from Google Recaptcha
     * @param string $response usually $_POST['g-recaptcha-response']
     * @return boolean
     */
    public function validateResponse($response)
    {
        return $this->recaptcha->isValid($response);
    }

    /**
     * Verify Submission
     *
     * @return boolean
     */
    public function verifySubmission() : bool
    {
        // Only do this on the front-end
        if (Craft::$app->getRequest()->getIsCpRequest()) {
            return true;
        }

        if (!isset($_POST['g-recaptcha-response'])){
            return false;
        }

        $response = $_POST['g-recaptcha-response'] ?? null;

        $isValid = $this->validateResponse($response.'as');

        return $isValid;
    }


    /*
     * HTML for Form
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->recaptcha->getHtml();
    }

    /*
     * JS script for Google Recaptcha
     *
     * @return string
     */
    public function getScript()
    {
        return $this->recaptcha->getScript();
    }
}

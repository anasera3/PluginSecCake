<?php
/**
 * OWASP Enterprise Security API (ESAPI)
 *
 * This file is part of the Open Web Application Security Project (OWASP)
 * Enterprise Security API (ESAPI) project.
 *
 * LICENSE: This source file is subject to the New BSD license.  You should read
 * and accept the LICENSE before you use, modify, and/or redistribute this
 * software.
 * 
 * PHP version 5.2
 *
 * @category  OWASP
 * @package   ESAPI_Reference_Validation
 * @author    Mike Boberski <boberski_michael@bah.com>
 * @copyright 2009-2010 The OWASP Foundation
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD license
 * @version   SVN: $Id$
 * @link      http://www.owasp.org/index.php/ESAPI
 */

/**
 * URLValidationRule requires the StringValidationRule.
 */
require_once dirname(__FILE__) . '/StringValidationRule.php';


/**
 * Reference extension of the StringValidationRule class.
 *
 * @category  OWASP
 * @package   ESAPI_Reference_Validation
 * @author    Mike Boberski <boberski_michael@bah.com>
 * @copyright 2009-2010 The OWASP Foundation
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD license
 * @version   Release: @package_version@
 * @link      http://www.owasp.org/index.php/ESAPI
 */
class HTMLPurifier_URLValidationRule extends HTMLPurifier_StringValidationRule
{
    private $_auditor   = null;
 
    /**
     * Constructor sets-up the validation rule with a descriptive name for this
     * validator, an optional Encoder instance (for canonicalization) and an
     * optional whitelist regex pattern to validate the input against prior to
     * email address purification.
     * An instance of the HTMLPurifier class is created and stored too.
     *
     * @param string $typeName         descriptive name for this validator.
     * @param object $encoder          providing canonicalize method.
     * @param string $whitelistPattern whitelist regex.
     * 
     * @return does not return a value.
     */
    public function __construct($typeName, $encoder = null, 
        $whitelistPattern = null
    ) {
        global $ESAPI;

        parent::__construct($typeName, $encoder);

        $this->_auditor = $ESAPI->getAuditor("URLValidationRule");
    }

    /**
     * Returns the canonicalized, valid input.
     * Throws ValidationException if the input is not valid or
     * IntrusionException if the input is an obvious attack.
     *
     * @param string $context A descriptive name of the parameter that you are
     *                        validating (e.g., ProfilePage_Signature). This value 
     *                        is used by any logging or error handling that is done 
     *                        with respect to the value passed in.
     * @param string $input   The actual string user input data to validate.
     *
     * @return string canonicalized, valid input.
     *
     * @throws ValidationException, IntrusionException
     */
    public function getValid($context, $input)
    {
        // Parent validator will sanity check.
        $canonical = parent::getValid($context, $input);

        $clean_url = filter_var($canonical, FILTER_SANITIZE_URL);
        if ($clean_url == false) {
            throw new ValidationException(
                'URL Input is not valid.',
                'Error attempting to sanitize URL: '. $input,
                $context
            );
        }

        if (strcmp($canonical, $clean_url) !== 0) {
            throw new ValidationException(
                'URL Input may not be valid.',
                'Resorted to string comparsion of canonicalized and purified'.
                ' URL input - result was Not Equal',
                $context
            );
        }

        return $clean_url;
    }


    /**
     * Simply attempt to purify the URL and return an empty string if that
     * fails.
     *
     * @param string $context A descriptive name of the parameter that you are
     *                        validating (e.g., ProfilePage_Signature). This value 
     *                        is used by any logging or error handling that is done 
     *                        with respect to the value passed in.
     * @param string $input   The actual user input data to validate.
     *
     * @return string purified URL or en empty string.
     */
    public function sanitize($context, $input)
    {
        $clean_url = filter_var($input, FILTER_SANITIZE_URL);
        if ($clean_url == false) {
            return "";
        } else {
            return $clean_url;
        }
    }

}

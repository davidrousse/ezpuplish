<?php
/**
 * File containing the ezpMail class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 */

/**
 * ezpMail extends ezcMail in order to override default values and limitations.
 */
class ezpMail extends ezcMail
{
    /**
     * Override of original {@link ezcMail::generateHeaders()}.
     * Allows headers customization
     *
     * @return string The mail headers
     */
    public function generateHeaders()
    {
        // Workaround for encoded email addresses.
        // When encoded, email addresses (at least the name param) have more characters
        // By default, line length is set to 76 characters, after what a new line is created with $lineBreak.
        // This operation is done during encoding via iconv (see ezcMailTools::composeEmailAddress()).
        // Problem is that this operation is done a 2nd time in ezcMailPart::generateHeaders().
        // Following code ensures that there is no double $lineBreak introduced
        // by this process because it potentially breaks headers
        $lineBreak = ezcMailTools::lineBreak();
        $headers = str_replace( "$lineBreak$lineBreak", $lineBreak, parent::generateHeaders() );
        return $headers;
    }
}
?>

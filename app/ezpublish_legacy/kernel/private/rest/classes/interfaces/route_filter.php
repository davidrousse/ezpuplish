<?php
/**
 * File containing the ezpRestRouteAuthInterface interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */
abstract class ezpRestRouteFilterInterface
{
    /**
     * Returns the routes for which do not require authentication.
     * @abstract
     * @return array
     */

    abstract public function shallDoActionWithRoute( ezcMvcRoutingInformation $routeInfo );

    /**
     * Returns the currently configured class for handling Route security.
     *
     * @static
     * @throws ezpRestRouteSecurityFilterNotFoundException
     * @return ezpRestRouteFilterInterface
     */
    public static function getRouteFilter()
    {
        $opt = new ezpExtensionOptions();
        $opt->iniFile = 'rest.ini';
        $opt->iniSection = 'RouteSettings';
        $opt->iniVariable = 'RouteSettingImpl';

        $routeSecurityFilterInstance = eZExtension::getHandlerClass( $opt );

        if ( ! $routeSecurityFilterInstance instanceof self )
        {
            throw new ezpRestRouteSecurityFilterNotFoundException();
        }

        return $routeSecurityFilterInstance;
    }
}

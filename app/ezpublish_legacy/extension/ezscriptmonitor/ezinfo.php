<?php
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Publish Community Project
// SOFTWARE RELEASE:  2012.9
// COPYRIGHT NOTICE: Copyright (C) 1999-2012 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
// 
//   This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
// 
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

/*! \file ezinfo.php
*/

/*!
  \class eZScriptMonitorInfo ezinfo.php
  \brief The class eZScriptMonitorInfo does

*/

class eZScriptMonitorInfo
{
    static function info()
    {
        return array(
            'Name' => "eZ Script Monitor",
            'Version' => '5.0.0-beta2',
            'Copyright' => "Copyright (C) 1999-2012 eZ Systems AS.",
            'Info_url' => "http://ez.no/",
            'License' => "GNU General Public License v2.0");
    }
}

?>
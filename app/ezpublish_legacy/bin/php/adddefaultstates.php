#!/usr/bin/env php
<?php
/**
 * File containing the adddefaultstates.php script.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */

require 'autoload.php';

$cli = eZCLI::instance();

$scriptSettings = array();
$scriptSettings['description'] = 'Adds default states to content objects';
$scriptSettings['use-session'] = true;
$scriptSettings['use-modules'] = false;
$scriptSettings['use-extensions'] = true;

$script = eZScript::instance( $scriptSettings );
$script->startup();

$config = '';
$argumentConfig = '';
$optionHelp = false;
$arguments = false;
$useStandardOptions = true;

$options = $script->getOptions( $config, $argumentConfig, $optionHelp, $arguments, $useStandardOptions );
$script->initialize();

$cli->output( 'Adding default states to content objects...' );

$db = eZDB::instance();

$db->begin();

$db->query(
"INSERT INTO ezcontentobject_state_link
SELECT o.id object_id, s0.id state_id
FROM ezcontentobject o, ezcontentobject_state s0, ezcontentobject_state_group g
WHERE g.id=s0.group_id
 AND s0.priority=0
 AND NOT EXISTS (
  SELECT contentobject_id
  FROM ezcontentobject_state_link l, ezcontentobject_state s
  WHERE l.contentobject_state_id=s.id
    AND l.contentobject_id=o.id
    AND s.group_id=g.id
)" );

$db->commit();

$cli->output( 'Finished!' );

$script->shutdown( 0 );

?>

<?php
/**
 * File containing the DeferredLegacy Type Update Handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Type\Update\Handler;
use eZ\Publish\Core\Persistence\Legacy\Content\Type\Update\Handler,
    eZ\Publish\Core\Persistence\Legacy\Content\Type\Gateway;

/**
 * DeferredLegacy based type update handler
 */
class DeferredLegacy extends Handler
{
    /**
     * eZ\Publish\Core\Persistence\Legacy\Content\Type\Gateway
     *
     * @var mixed
     */
    protected $contentTypeGateway;

    /**
     * Creates a new content type update handler
     *
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Type\Gateway $contentTypeGateway
     */
    public function __construct( Gateway $contentTypeGateway )
    {
        $this->contentTypeGateway = $contentTypeGateway;
    }

    /**
     * Updates existing content objects from $fromType to $toType
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type $fromType
     * @param \eZ\Publish\SPI\Persistence\Content\Type $toType
     * @return void
     */
    public function updateContentObjects( $fromType, $toType )
    {
    }

    /**
     * Deletes $fromType and all of its field definitions
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type $fromType
     * @return void
     */
    public function deleteOldType( $fromType )
    {
    }

    /**
     * Publishes $toType to $newStatus
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type $toType
     * @param int $newStatus
     * @return void
     */
    public function publishNewType( $toType, $newStatus )
    {
        $this->contentTypeGateway->publishTypeAndFields(
            $toType->id,
            $toType->status,
            Type::STATUS_MODIFIED
        );

        $script = eZScheduledScript::create(
            'syncobjectattributes.php',
            eZINI::instance( 'ezscriptmonitor.ini' )->variable( 'GeneralSettings', 'PhpCliCommand' ) .
            ' extension/ezscriptmonitor/bin/' . eZScheduledScript::SCRIPT_NAME_STRING .
            ' -s ' . eZScheduledScript::SITE_ACCESS_STRING . ' --classid=' . $toType->id
        );
        $script->store();
    }
}

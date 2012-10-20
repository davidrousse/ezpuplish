<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // eZTest
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test(?:/(?<contentId>\\d+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::testAction',  'contentId' => '102',)), array('_route' => 'eZTest'));
        }

        // eZTestWithLegacy
        if (0 === strpos($pathinfo, '/test/legacy') && preg_match('#^/test/legacy(?:/(?<contentId>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::testWithLegacyAction',  'contentId' => '102',)), array('_route' => 'eZTestWithLegacy'));
        }

        // eZHelloWorld
        if ($pathinfo === '/helloWorld') {
            return array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::helloWorldAction',  'name' => 'World',  '_route' => 'eZHelloWorld',);
        }

        // eZHelloWorldCached
        if ($pathinfo === '/helloWorldCached') {
            return array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::helloWorldCachedAction',  '_route' => 'eZHelloWorldCached',);
        }

        // eZHelloWorldTwig
        if ($pathinfo === '/helloWorldTwig') {
            return array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::helloWorldTwigAction',  '_route' => 'eZHelloWorldTwig',);
        }

        // eZHelloWorldTwigCached
        if ($pathinfo === '/helloWorldTwigCached') {
            return array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::helloWorldTwigCachedAction',  '_route' => 'eZHelloWorldTwigCached',);
        }

        // eZEditorial
        if (0 === strpos($pathinfo, '/Editorial') && preg_match('#^/Editorial/(?<contentId>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\DemoController::editorialAction',)), array('_route' => 'eZEditorial'));
        }

        // eZSetupLegacy
        if ($pathinfo === '/ezdemo_site_admin/setup/info') {
            return array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\SetupController::infoAction',  '_route' => 'eZSetupLegacy',);
        }

        // _ezpublishLocation
        if (0 === strpos($pathinfo, '/content/location') && preg_match('#^/content/location/(?<locationId>[^/]+)(?:/(?<viewType>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish.controller.content.view:viewLocation',  'viewType' => 'full',)), array('_route' => '_ezpublishLocation'));
        }

        // _ezpublishLegacyTreeMenu
        if (0 === strpos($pathinfo, '/content/treemenu') && preg_match('#^/content/treemenu/(?<nodeId>[^/]+)/(?<modified>[^/]+)/(?<expiry>[^/]+)/(?<perm>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_legacy.treemenu.controller:viewMenu',  '_format' => 'json',)), array('_route' => '_ezpublishLegacyTreeMenu'));
        }

        if (0 === strpos($pathinfo, '/api/ezp/v2')) {
            // ezpublish_rest_loadRootResource
            if (rtrim($pathinfo, '/') === '/api/ezp/v2') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRootResource;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ezpublish_rest_loadRootResource');
                }

                return array (  '_controller' => 'ezpublish_rest.controller.root:loadRootResource',  '_route' => 'ezpublish_rest_loadRootResource',);
            }
            not_ezpublish_rest_loadRootResource:

            // ezpublish_rest_listSections
            if ($pathinfo === '/api/ezp/v2/content/sections') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listSections;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.section:listSections',  '_route' => 'ezpublish_rest_listSections',);
            }
            not_ezpublish_rest_listSections:

            // ezpublish_rest_createSection
            if ($pathinfo === '/api/ezp/v2/content/sections') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createSection;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.section:createSection',  '_route' => 'ezpublish_rest_createSection',);
            }
            not_ezpublish_rest_createSection:

            // ezpublish_rest_loadSection
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections') && preg_match('#^/api/ezp/v2/content/sections/(?<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadSection;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.section:loadSection',)), array('_route' => 'ezpublish_rest_loadSection'));
            }
            not_ezpublish_rest_loadSection:

            // ezpublish_rest_updateSection
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections') && preg_match('#^/api/ezp/v2/content/sections/(?<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateSection;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.section:updateSection',)), array('_route' => 'ezpublish_rest_updateSection'));
            }
            not_ezpublish_rest_updateSection:

            // ezpublish_rest_deleteSection
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections') && preg_match('#^/api/ezp/v2/content/sections/(?<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteSection;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.section:deleteSection',)), array('_route' => 'ezpublish_rest_deleteSection'));
            }
            not_ezpublish_rest_deleteSection:

            // ezpublish_rest_listContent
            if ($pathinfo === '/api/ezp/v2/content/objects') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listContent;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.content:listContent',  '_route' => 'ezpublish_rest_listContent',);
            }
            not_ezpublish_rest_listContent:

            // ezpublish_rest_createContent
            if ($pathinfo === '/api/ezp/v2/content/objects') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createContent;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.content:createContent',  '_route' => 'ezpublish_rest_createContent',);
            }
            not_ezpublish_rest_createContent:

            // ezpublish_rest_updateContentMetadata
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateContentMetadata;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:updateContentMetadata',)), array('_route' => 'ezpublish_rest_updateContentMetadata'));
            }
            not_ezpublish_rest_updateContentMetadata:

            // ezpublish_rest_loadContent
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContent;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:loadContent',)), array('_route' => 'ezpublish_rest_loadContent'));
            }
            not_ezpublish_rest_loadContent:

            // ezpublish_rest_deleteContent
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteContent;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:deleteContent',)), array('_route' => 'ezpublish_rest_deleteContent'));
            }
            not_ezpublish_rest_deleteContent:

            // ezpublish_rest_copyContent
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'COPY') {
                    $allow[] = 'COPY';
                    goto not_ezpublish_rest_copyContent;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:copyContent',)), array('_route' => 'ezpublish_rest_copyContent'));
            }
            not_ezpublish_rest_copyContent:

            // ezpublish_rest_redirectCurrentVersionRelations
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/relations$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_redirectCurrentVersionRelations;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:redirectCurrentVersionRelations',)), array('_route' => 'ezpublish_rest_redirectCurrentVersionRelations'));
            }
            not_ezpublish_rest_redirectCurrentVersionRelations:

            // ezpublish_rest_loadContentVersions
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContentVersions;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:loadContentVersions',)), array('_route' => 'ezpublish_rest_loadContentVersions'));
            }
            not_ezpublish_rest_loadContentVersions:

            // ezpublish_rest_loadVersionRelations
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadVersionRelations;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:loadVersionRelations',)), array('_route' => 'ezpublish_rest_loadVersionRelations'));
            }
            not_ezpublish_rest_loadVersionRelations:

            // ezpublish_rest_createRelation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createRelation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:createRelation',)), array('_route' => 'ezpublish_rest_createRelation'));
            }
            not_ezpublish_rest_createRelation:

            // ezpublish_rest_loadVersionRelation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)/relations/(?<relationId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadVersionRelation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:loadVersionRelation',)), array('_route' => 'ezpublish_rest_loadVersionRelation'));
            }
            not_ezpublish_rest_loadVersionRelation:

            // ezpublish_rest_removeRelation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)/relations/(?<relationId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_removeRelation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:removeRelation',)), array('_route' => 'ezpublish_rest_removeRelation'));
            }
            not_ezpublish_rest_removeRelation:

            // ezpublish_rest_loadContentInVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContentInVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:loadContentInVersion',)), array('_route' => 'ezpublish_rest_loadContentInVersion'));
            }
            not_ezpublish_rest_loadContentInVersion:

            // ezpublish_rest_updateVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:updateVersion',)), array('_route' => 'ezpublish_rest_updateVersion'));
            }
            not_ezpublish_rest_updateVersion:

            // ezpublish_rest_deleteContentVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteContentVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:deleteContentVersion',)), array('_route' => 'ezpublish_rest_deleteContentVersion'));
            }
            not_ezpublish_rest_deleteContentVersion:

            // ezpublish_rest_createDraftFromVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'COPY') {
                    $allow[] = 'COPY';
                    goto not_ezpublish_rest_createDraftFromVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:createDraftFromVersion',)), array('_route' => 'ezpublish_rest_createDraftFromVersion'));
            }
            not_ezpublish_rest_createDraftFromVersion:

            // ezpublish_rest_publishVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/versions/(?<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUBLISH') {
                    $allow[] = 'PUBLISH';
                    goto not_ezpublish_rest_publishVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:publishVersion',)), array('_route' => 'ezpublish_rest_publishVersion'));
            }
            not_ezpublish_rest_publishVersion:

            // ezpublish_rest_redirectCurrentVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_redirectCurrentVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:redirectCurrentVersion',)), array('_route' => 'ezpublish_rest_redirectCurrentVersion'));
            }
            not_ezpublish_rest_redirectCurrentVersion:

            // ezpublish_rest_createDraftFromCurrentVersion
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'COPY') {
                    $allow[] = 'COPY';
                    goto not_ezpublish_rest_createDraftFromCurrentVersion;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:createDraftFromCurrentVersion',)), array('_route' => 'ezpublish_rest_createDraftFromCurrentVersion'));
            }
            not_ezpublish_rest_createDraftFromCurrentVersion:

            // ezpublish_rest_loadLocationsForContent
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadLocationsForContent;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:loadLocationsForContent',)), array('_route' => 'ezpublish_rest_loadLocationsForContent'));
            }
            not_ezpublish_rest_loadLocationsForContent:

            // ezpublish_rest_createLocation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createLocation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:createLocation',)), array('_route' => 'ezpublish_rest_createLocation'));
            }
            not_ezpublish_rest_createLocation:

            // ezpublish_rest_getObjectStatesForContent
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_getObjectStatesForContent;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:getObjectStatesForContent',)), array('_route' => 'ezpublish_rest_getObjectStatesForContent'));
            }
            not_ezpublish_rest_getObjectStatesForContent:

            // ezpublish_rest_setObjectStatesForContent
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_setObjectStatesForContent;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content:setObjectStatesForContent',)), array('_route' => 'ezpublish_rest_setObjectStatesForContent'));
            }
            not_ezpublish_rest_setObjectStatesForContent:

            // ezpublish_rest_createView
            if ($pathinfo === '/api/ezp/v2/content/views') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createView;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.content:createView',  '_route' => 'ezpublish_rest_createView',);
            }
            not_ezpublish_rest_createView:

            // ezpublish_rest_loadObjectStateGroups
            if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadObjectStateGroups;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStateGroups',  '_route' => 'ezpublish_rest_loadObjectStateGroups',);
            }
            not_ezpublish_rest_loadObjectStateGroups:

            // ezpublish_rest_createObjectStateGroup
            if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createObjectStateGroup;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.object_state:createObjectStateGroup',  '_route' => 'ezpublish_rest_createObjectStateGroup',);
            }
            not_ezpublish_rest_createObjectStateGroup:

            // ezpublish_rest_loadObjectStateGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadObjectStateGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStateGroup',)), array('_route' => 'ezpublish_rest_loadObjectStateGroup'));
            }
            not_ezpublish_rest_loadObjectStateGroup:

            // ezpublish_rest_updateObjectStateGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateObjectStateGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:updateObjectStateGroup',)), array('_route' => 'ezpublish_rest_updateObjectStateGroup'));
            }
            not_ezpublish_rest_updateObjectStateGroup:

            // ezpublish_rest_deleteObjectStateGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteObjectStateGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:deleteObjectStateGroup',)), array('_route' => 'ezpublish_rest_deleteObjectStateGroup'));
            }
            not_ezpublish_rest_deleteObjectStateGroup:

            // ezpublish_rest_loadObjectStates
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadObjectStates;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStates',)), array('_route' => 'ezpublish_rest_loadObjectStates'));
            }
            not_ezpublish_rest_loadObjectStates:

            // ezpublish_rest_createObjectState
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createObjectState;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:createObjectState',)), array('_route' => 'ezpublish_rest_createObjectState'));
            }
            not_ezpublish_rest_createObjectState:

            // ezpublish_rest_loadObjectState
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)/objectstates/(?<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadObjectState;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectState',)), array('_route' => 'ezpublish_rest_loadObjectState'));
            }
            not_ezpublish_rest_loadObjectState:

            // ezpublish_rest_updateObjectState
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)/objectstates/(?<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateObjectState;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:updateObjectState',)), array('_route' => 'ezpublish_rest_updateObjectState'));
            }
            not_ezpublish_rest_updateObjectState:

            // ezpublish_rest_deleteObjectState
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups') && preg_match('#^/api/ezp/v2/content/objectstategroups/(?<objectStateGroupId>\\d+)/objectstates/(?<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteObjectState;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.object_state:deleteObjectState',)), array('_route' => 'ezpublish_rest_deleteObjectState'));
            }
            not_ezpublish_rest_deleteObjectState:

            // ezpublish_rest_loadLocationByRemoteId
            if ($pathinfo === '/api/ezp/v2/content/locations') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadLocationByRemoteId;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.location:loadLocationByRemoteId',  '_route' => 'ezpublish_rest_loadLocationByRemoteId',);
            }
            not_ezpublish_rest_loadLocationByRemoteId:

            // ezpublish_rest_loadLocation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadLocation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:loadLocation',)), array('_route' => 'ezpublish_rest_loadLocation'));
            }
            not_ezpublish_rest_loadLocation:

            // ezpublish_rest_updateLocation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateLocation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:updateLocation',)), array('_route' => 'ezpublish_rest_updateLocation'));
            }
            not_ezpublish_rest_updateLocation:

            // ezpublish_rest_deleteSubtree
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteSubtree;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:deleteSubtree',)), array('_route' => 'ezpublish_rest_deleteSubtree'));
            }
            not_ezpublish_rest_deleteSubtree:

            // ezpublish_rest_copySubtree
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'COPY') {
                    $allow[] = 'COPY';
                    goto not_ezpublish_rest_copySubtree;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:copySubtree',)), array('_route' => 'ezpublish_rest_copySubtree'));
            }
            not_ezpublish_rest_copySubtree:

            // ezpublish_rest_moveSubtree
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'MOVE') {
                    $allow[] = 'MOVE';
                    goto not_ezpublish_rest_moveSubtree;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:moveSubtree',)), array('_route' => 'ezpublish_rest_moveSubtree'));
            }
            not_ezpublish_rest_moveSubtree:

            // ezpublish_rest_swapLocation
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'SWAP') {
                    $allow[] = 'SWAP';
                    goto not_ezpublish_rest_swapLocation;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:swapLocation',)), array('_route' => 'ezpublish_rest_swapLocation'));
            }
            not_ezpublish_rest_swapLocation:

            // ezpublish_rest_loadLocationChildren
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?<locationPath>[0-9/]+)/children$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadLocationChildren;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.location:loadLocationChildren',)), array('_route' => 'ezpublish_rest_loadLocationChildren'));
            }
            not_ezpublish_rest_loadLocationChildren:

            // ezpublish_rest_loadContentTypeGroupList
            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContentTypeGroupList;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeGroupList',  '_route' => 'ezpublish_rest_loadContentTypeGroupList',);
            }
            not_ezpublish_rest_loadContentTypeGroupList:

            // ezpublish_rest_createContentTypeGroup
            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createContentTypeGroup;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentTypeGroup',  '_route' => 'ezpublish_rest_createContentTypeGroup',);
            }
            not_ezpublish_rest_createContentTypeGroup:

            // ezpublish_rest_loadContentTypeGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups') && preg_match('#^/api/ezp/v2/content/typegroups/(?<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContentTypeGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeGroup',)), array('_route' => 'ezpublish_rest_loadContentTypeGroup'));
            }
            not_ezpublish_rest_loadContentTypeGroup:

            // ezpublish_rest_updateContentTypeGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups') && preg_match('#^/api/ezp/v2/content/typegroups/(?<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateContentTypeGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeGroup',)), array('_route' => 'ezpublish_rest_updateContentTypeGroup'));
            }
            not_ezpublish_rest_updateContentTypeGroup:

            // ezpublish_rest_deleteContentTypeGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups') && preg_match('#^/api/ezp/v2/content/typegroups/(?<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteContentTypeGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentTypeGroup',)), array('_route' => 'ezpublish_rest_deleteContentTypeGroup'));
            }
            not_ezpublish_rest_deleteContentTypeGroup:

            // ezpublish_rest_listContentTypesForGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups') && preg_match('#^/api/ezp/v2/content/typegroups/(?<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listContentTypesForGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:listContentTypesForGroup',)), array('_route' => 'ezpublish_rest_listContentTypesForGroup'));
            }
            not_ezpublish_rest_listContentTypesForGroup:

            // ezpublish_rest_createContentType
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups') && preg_match('#^/api/ezp/v2/content/typegroups/(?<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createContentType;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentType',)), array('_route' => 'ezpublish_rest_createContentType'));
            }
            not_ezpublish_rest_createContentType:

            // ezpublish_rest_listContentTypes
            if ($pathinfo === '/api/ezp/v2/content/types') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listContentTypes;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.content_type:listContentTypes',  '_route' => 'ezpublish_rest_listContentTypes',);
            }
            not_ezpublish_rest_listContentTypes:

            // ezpublish_rest_copyContentType
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'COPY') {
                    $allow[] = 'COPY';
                    goto not_ezpublish_rest_copyContentType;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:copyContentType',)), array('_route' => 'ezpublish_rest_copyContentType'));
            }
            not_ezpublish_rest_copyContentType:

            // ezpublish_rest_loadContentType
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContentType;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentType',)), array('_route' => 'ezpublish_rest_loadContentType'));
            }
            not_ezpublish_rest_loadContentType:

            // ezpublish_rest_createContentTypeDraft
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createContentTypeDraft;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentTypeDraft',)), array('_route' => 'ezpublish_rest_createContentTypeDraft'));
            }
            not_ezpublish_rest_createContentTypeDraft:

            // ezpublish_rest_deleteContentType
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteContentType;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentType',)), array('_route' => 'ezpublish_rest_deleteContentType'));
            }
            not_ezpublish_rest_deleteContentType:

            // ezpublish_rest_loadFieldDefinitionList
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/fieldDefinitions$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadFieldDefinitionList;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadFieldDefinitionList',)), array('_route' => 'ezpublish_rest_loadFieldDefinitionList'));
            }
            not_ezpublish_rest_loadFieldDefinitionList:

            // ezpublish_rest_loadFieldDefinition
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/fieldDefinitions/(?<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadFieldDefinition;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadFieldDefinition',)), array('_route' => 'ezpublish_rest_loadFieldDefinition'));
            }
            not_ezpublish_rest_loadFieldDefinition:

            // ezpublish_rest_loadContentTypeDraft
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadContentTypeDraft;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraft',)), array('_route' => 'ezpublish_rest_loadContentTypeDraft'));
            }
            not_ezpublish_rest_loadContentTypeDraft:

            // ezpublish_rest_updateContentTypeDraft
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateContentTypeDraft;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeDraft',)), array('_route' => 'ezpublish_rest_updateContentTypeDraft'));
            }
            not_ezpublish_rest_updateContentTypeDraft:

            // ezpublish_rest_publishContentTypeDraft
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUBLISH') {
                    $allow[] = 'PUBLISH';
                    goto not_ezpublish_rest_publishContentTypeDraft;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:publishContentTypeDraft',)), array('_route' => 'ezpublish_rest_publishContentTypeDraft'));
            }
            not_ezpublish_rest_publishContentTypeDraft:

            // ezpublish_rest_loadDraftFieldDefinitionList
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadDraftFieldDefinitionList;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadDraftFieldDefinitionList',)), array('_route' => 'ezpublish_rest_loadDraftFieldDefinitionList'));
            }
            not_ezpublish_rest_loadDraftFieldDefinitionList:

            // ezpublish_rest_addFieldDefinition
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_addFieldDefinition;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:addFieldDefinition',)), array('_route' => 'ezpublish_rest_addFieldDefinition'));
            }
            not_ezpublish_rest_addFieldDefinition:

            // ezpublish_rest_loadDraftFieldDefinition
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/draft/fieldDefinitions/(?<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadDraftFieldDefinition;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadDraftFieldDefinition',)), array('_route' => 'ezpublish_rest_loadDraftFieldDefinition'));
            }
            not_ezpublish_rest_loadDraftFieldDefinition:

            // ezpublish_rest_updateFieldDefinition
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/draft/fieldDefinitions/(?<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateFieldDefinition;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:updateFieldDefinition',)), array('_route' => 'ezpublish_rest_updateFieldDefinition'));
            }
            not_ezpublish_rest_updateFieldDefinition:

            // ezpublish_rest_removeFieldDefinition
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/draft/fieldDefinitions/(?<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_removeFieldDefinition;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:removeFieldDefinition',)), array('_route' => 'ezpublish_rest_removeFieldDefinition'));
            }
            not_ezpublish_rest_removeFieldDefinition:

            // ezpublish_rest_loadGroupsOfContentType
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadGroupsOfContentType;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:loadGroupsOfContentType',)), array('_route' => 'ezpublish_rest_loadGroupsOfContentType'));
            }
            not_ezpublish_rest_loadGroupsOfContentType:

            // ezpublish_rest_linkContentTypeToGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_linkContentTypeToGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:linkContentTypeToGroup',)), array('_route' => 'ezpublish_rest_linkContentTypeToGroup'));
            }
            not_ezpublish_rest_linkContentTypeToGroup:

            // ezpublish_rest_unlinkContentTypeFromGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/types') && preg_match('#^/api/ezp/v2/content/types/(?<contentTypeId>\\d+)/groups/(?<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_unlinkContentTypeFromGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.content_type:unlinkContentTypeFromGroup',)), array('_route' => 'ezpublish_rest_unlinkContentTypeFromGroup'));
            }
            not_ezpublish_rest_unlinkContentTypeFromGroup:

            // ezpublish_rest_loadTrashItems
            if ($pathinfo === '/api/ezp/v2/content/trash') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadTrashItems;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.trash:loadTrashItems',  '_route' => 'ezpublish_rest_loadTrashItems',);
            }
            not_ezpublish_rest_loadTrashItems:

            // ezpublish_rest_emptyTrash
            if ($pathinfo === '/api/ezp/v2/content/trash') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_emptyTrash;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.trash:emptyTrash',  '_route' => 'ezpublish_rest_emptyTrash',);
            }
            not_ezpublish_rest_emptyTrash:

            // ezpublish_rest_loadTrashItem
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash') && preg_match('#^/api/ezp/v2/content/trash/(?<trashId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadTrashItem;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.trash:loadTrashItem',)), array('_route' => 'ezpublish_rest_loadTrashItem'));
            }
            not_ezpublish_rest_loadTrashItem:

            // ezpublish_rest_deleteTrashItem
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash') && preg_match('#^/api/ezp/v2/content/trash/(?<trashId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteTrashItem;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.trash:deleteTrashItem',)), array('_route' => 'ezpublish_rest_deleteTrashItem'));
            }
            not_ezpublish_rest_deleteTrashItem:

            // ezpublish_rest_restoreTrashItem
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash') && preg_match('#^/api/ezp/v2/content/trash/(?<trashId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'MOVE') {
                    $allow[] = 'MOVE';
                    goto not_ezpublish_rest_restoreTrashItem;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.trash:restoreTrashItem',)), array('_route' => 'ezpublish_rest_restoreTrashItem'));
            }
            not_ezpublish_rest_restoreTrashItem:

            // ezpublish_rest_listURLWildcards
            if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listURLWildcards;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:listURLWildcards',  '_route' => 'ezpublish_rest_listURLWildcards',);
            }
            not_ezpublish_rest_listURLWildcards:

            // ezpublish_rest_createURLWildcard
            if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createURLWildcard;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:createURLWildcard',  '_route' => 'ezpublish_rest_createURLWildcard',);
            }
            not_ezpublish_rest_createURLWildcard:

            // ezpublish_rest_loadURLWildcard
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlwildcards') && preg_match('#^/api/ezp/v2/content/urlwildcards/(?<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadURLWildcard;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:loadURLWildcard',)), array('_route' => 'ezpublish_rest_loadURLWildcard'));
            }
            not_ezpublish_rest_loadURLWildcard:

            // ezpublish_rest_deleteURLWildcard
            if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlwildcards') && preg_match('#^/api/ezp/v2/content/urlwildcards/(?<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteURLWildcard;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:deleteURLWildcard',)), array('_route' => 'ezpublish_rest_deleteURLWildcard'));
            }
            not_ezpublish_rest_deleteURLWildcard:

            // ezpublish_rest_listPoliciesForUser
            if ($pathinfo === '/api/ezp/v2/user/policies') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listPoliciesForUser;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.role:listPoliciesForUser',  '_route' => 'ezpublish_rest_listPoliciesForUser',);
            }
            not_ezpublish_rest_listPoliciesForUser:

            // ezpublish_rest_listRoles
            if ($pathinfo === '/api/ezp/v2/user/roles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_listRoles;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.role:listRoles',  '_route' => 'ezpublish_rest_listRoles',);
            }
            not_ezpublish_rest_listRoles:

            // ezpublish_rest_createRole
            if ($pathinfo === '/api/ezp/v2/user/roles') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createRole;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.role:createRole',  '_route' => 'ezpublish_rest_createRole',);
            }
            not_ezpublish_rest_createRole:

            // ezpublish_rest_loadRole
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRole;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadRole',)), array('_route' => 'ezpublish_rest_loadRole'));
            }
            not_ezpublish_rest_loadRole:

            // ezpublish_rest_updateRole
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateRole;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:updateRole',)), array('_route' => 'ezpublish_rest_updateRole'));
            }
            not_ezpublish_rest_updateRole:

            // ezpublish_rest_deleteRole
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteRole;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:deleteRole',)), array('_route' => 'ezpublish_rest_deleteRole'));
            }
            not_ezpublish_rest_deleteRole:

            // ezpublish_rest_loadPolicies
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadPolicies;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadPolicies',)), array('_route' => 'ezpublish_rest_loadPolicies'));
            }
            not_ezpublish_rest_loadPolicies:

            // ezpublish_rest_addPolicy
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_addPolicy;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:addPolicy',)), array('_route' => 'ezpublish_rest_addPolicy'));
            }
            not_ezpublish_rest_addPolicy:

            // ezpublish_rest_deletePolicies
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deletePolicies;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:deletePolicies',)), array('_route' => 'ezpublish_rest_deletePolicies'));
            }
            not_ezpublish_rest_deletePolicies:

            // ezpublish_rest_loadPolicy
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)/policies/(?<policyId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadPolicy;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadPolicy',)), array('_route' => 'ezpublish_rest_loadPolicy'));
            }
            not_ezpublish_rest_loadPolicy:

            // ezpublish_rest_updatePolicy
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)/policies/(?<policyId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updatePolicy;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:updatePolicy',)), array('_route' => 'ezpublish_rest_updatePolicy'));
            }
            not_ezpublish_rest_updatePolicy:

            // ezpublish_rest_deletePolicy
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles') && preg_match('#^/api/ezp/v2/user/roles/(?<roleId>\\d+)/policies/(?<policyId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deletePolicy;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:deletePolicy',)), array('_route' => 'ezpublish_rest_deletePolicy'));
            }
            not_ezpublish_rest_deletePolicy:

            // ezpublish_rest_loadUsersAssignedToRole
            if ($pathinfo === '/api/ezp/v2/user/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUsersAssignedToRole;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.user:loadUsersAssignedToRole',  '_route' => 'ezpublish_rest_loadUsersAssignedToRole',);
            }
            not_ezpublish_rest_loadUsersAssignedToRole:

            // ezpublish_rest_loadUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:loadUser',)), array('_route' => 'ezpublish_rest_loadUser'));
            }
            not_ezpublish_rest_loadUser:

            // ezpublish_rest_updateUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:updateUser',)), array('_route' => 'ezpublish_rest_updateUser'));
            }
            not_ezpublish_rest_updateUser:

            // ezpublish_rest_deleteUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:deleteUser',)), array('_route' => 'ezpublish_rest_deleteUser'));
            }
            not_ezpublish_rest_deleteUser:

            // ezpublish_rest_loadUserGroupsOfUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUserGroupsOfUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroupsOfUser',)), array('_route' => 'ezpublish_rest_loadUserGroupsOfUser'));
            }
            not_ezpublish_rest_loadUserGroupsOfUser:

            // ezpublish_rest_assignUserToUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_assignUserToUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:assignUserToUserGroup',)), array('_route' => 'ezpublish_rest_assignUserToUserGroup'));
            }
            not_ezpublish_rest_assignUserToUserGroup:

            // ezpublish_rest_unassignUserFromUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/groups/(?<groupId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_unassignUserFromUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:unassignUserFromUserGroup',)), array('_route' => 'ezpublish_rest_unassignUserFromUserGroup'));
            }
            not_ezpublish_rest_unassignUserFromUserGroup:

            // ezpublish_rest_loadUserDrafts
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUserDrafts;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:loadUserDrafts',)), array('_route' => 'ezpublish_rest_loadUserDrafts'));
            }
            not_ezpublish_rest_loadUserDrafts:

            // ezpublish_rest_loadRoleAssignmentsForUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRoleAssignmentsForUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentsForUser',)), array('_route' => 'ezpublish_rest_loadRoleAssignmentsForUser'));
            }
            not_ezpublish_rest_loadRoleAssignmentsForUser:

            // ezpublish_rest_assignRoleToUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_assignRoleToUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:assignRoleToUser',)), array('_route' => 'ezpublish_rest_assignRoleToUser'));
            }
            not_ezpublish_rest_assignRoleToUser:

            // ezpublish_rest_loadRoleAssignmentForUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRoleAssignmentForUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentForUser',)), array('_route' => 'ezpublish_rest_loadRoleAssignmentForUser'));
            }
            not_ezpublish_rest_loadRoleAssignmentForUser:

            // ezpublish_rest_unassignRoleFromUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/users') && preg_match('#^/api/ezp/v2/user/users/(?<userId>\\d+)/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_unassignRoleFromUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:unassignRoleFromUser',)), array('_route' => 'ezpublish_rest_unassignRoleFromUser'));
            }
            not_ezpublish_rest_unassignRoleFromUser:

            // ezpublish_rest_loadUserGroupsAssignedToRole
            if ($pathinfo === '/api/ezp/v2/user/groups') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUserGroupsAssignedToRole;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroupsAssignedToRole',  '_route' => 'ezpublish_rest_loadUserGroupsAssignedToRole',);
            }
            not_ezpublish_rest_loadUserGroupsAssignedToRole:

            // ezpublish_rest_loadRootUserGroup
            if ($pathinfo === '/api/ezp/v2/user/groups/root') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRootUserGroup;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.user:loadRootUserGroup',  '_route' => 'ezpublish_rest_loadRootUserGroup',);
            }
            not_ezpublish_rest_loadRootUserGroup:

            // ezpublish_rest_createRootUserGroup
            if ($pathinfo === '/api/ezp/v2/user/groups/subgroups') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createRootUserGroup;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.user:createUserGroup',  '_route' => 'ezpublish_rest_createRootUserGroup',);
            }
            not_ezpublish_rest_createRootUserGroup:

            // ezpublish_rest_loadUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroup',)), array('_route' => 'ezpublish_rest_loadUserGroup'));
            }
            not_ezpublish_rest_loadUserGroup:

            // ezpublish_rest_updateUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_ezpublish_rest_updateUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:updateUserGroup',)), array('_route' => 'ezpublish_rest_updateUserGroup'));
            }
            not_ezpublish_rest_updateUserGroup:

            // ezpublish_rest_deleteUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_deleteUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:deleteUserGroup',)), array('_route' => 'ezpublish_rest_deleteUserGroup'));
            }
            not_ezpublish_rest_deleteUserGroup:

            // ezpublish_rest_moveUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'MOVE') {
                    $allow[] = 'MOVE';
                    goto not_ezpublish_rest_moveUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:moveUserGroup',)), array('_route' => 'ezpublish_rest_moveUserGroup'));
            }
            not_ezpublish_rest_moveUserGroup:

            // ezpublish_rest_loadSubUserGroups
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadSubUserGroups;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:loadSubUserGroups',)), array('_route' => 'ezpublish_rest_loadSubUserGroups'));
            }
            not_ezpublish_rest_loadSubUserGroups:

            // ezpublish_rest_createUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:createUserGroup',)), array('_route' => 'ezpublish_rest_createUserGroup'));
            }
            not_ezpublish_rest_createUserGroup:

            // ezpublish_rest_loadUsersFromGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadUsersFromGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:loadUsersFromGroup',)), array('_route' => 'ezpublish_rest_loadUsersFromGroup'));
            }
            not_ezpublish_rest_loadUsersFromGroup:

            // ezpublish_rest_createUser
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_createUser;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.user:createUser',)), array('_route' => 'ezpublish_rest_createUser'));
            }
            not_ezpublish_rest_createUser:

            // ezpublish_rest_loadRoleAssignmentsForUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRoleAssignmentsForUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentsForUserGroup',)), array('_route' => 'ezpublish_rest_loadRoleAssignmentsForUserGroup'));
            }
            not_ezpublish_rest_loadRoleAssignmentsForUserGroup:

            // ezpublish_rest_assignRoleToUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ezpublish_rest_assignRoleToUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:assignRoleToUserGroup',)), array('_route' => 'ezpublish_rest_assignRoleToUserGroup'));
            }
            not_ezpublish_rest_assignRoleToUserGroup:

            // ezpublish_rest_loadRoleAssignmentForUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRoleAssignmentForUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentForUserGroup',)), array('_route' => 'ezpublish_rest_loadRoleAssignmentForUserGroup'));
            }
            not_ezpublish_rest_loadRoleAssignmentForUserGroup:

            // ezpublish_rest_unassignRoleFromUserGroup
            if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups') && preg_match('#^/api/ezp/v2/user/groups/(?<groupId>[0-9/]+)/roles/(?<roleId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ezpublish_rest_unassignRoleFromUserGroup;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ezpublish_rest.controller.role:unassignRoleFromUserGroup',)), array('_route' => 'ezpublish_rest_unassignRoleFromUserGroup'));
            }
            not_ezpublish_rest_unassignRoleFromUserGroup:

        }

        if (0 === strpos($pathinfo, '/_internal')) {
            // _internal
            if (0 === strpos($pathinfo, '/_internal/secure') && preg_match('#^/_internal/secure/(?<controller>[^/]+)/(?<path>.+)\\.(?<_format>[^.]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',)), array('_route' => '_internal'));
            }

            // _internal_public
            if (preg_match('#^/_internal/(?<controller>[^/]+)/(?<path>.+)\\.(?<_format>[^.]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',)), array('_route' => '_internal_public'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

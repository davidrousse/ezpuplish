<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/var/www/ezpublish/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/var/www/ezpublish/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/var/www/ezpublish/app/Resources/FrameworkBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/var/www/ezpublish/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/var/www/ezpublish/app/Resources/SecurityBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/var/www/ezpublish/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/var/www/ezpublish/app/Resources/TwigBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/var/www/ezpublish/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/var/www/ezpublish/app/Resources/AsseticBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/var/www/ezpublish/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', '/var/www/ezpublish/app/Resources/SensioGeneratorBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', '/var/www/ezpublish/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EzPublishCoreBundle', '/var/www/ezpublish/app/Resources/EzPublishCoreBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EzPublishCoreBundle', '/var/www/ezpublish/vendor/ezsystems/ezpublish/eZ/Bundle/EzPublishCoreBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EzPublishLegacyBundle', '/var/www/ezpublish/app/Resources/EzPublishLegacyBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EzPublishLegacyBundle', '/var/www/ezpublish/vendor/ezsystems/ezpublish/eZ/Bundle/EzPublishLegacyBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'eZDemoBundle', '/var/www/ezpublish/app/Resources/eZDemoBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'eZDemoBundle', '/var/www/ezpublish/src/EzSystems/DemoBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EzPublishRestBundle', '/var/www/ezpublish/app/Resources/EzPublishRestBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EzPublishRestBundle', '/var/www/ezpublish/vendor/ezsystems/ezpublish/eZ/Bundle/EzPublishRestBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/var/www/ezpublish/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_LessService()
    {
        $this->services['assetic.filter.less'] = $instance = new \Assetic\Filter\LessFilter('/opt/local/bin/node', array(0 => '/opt/local/lib/node_modules'));
        $instance->setCompress(NULL);
        return $instance;
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('less' => 'assetic.filter.less'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/var/www/ezpublish/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('ezpublish.chain_router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c)));
    }
    protected function getEsiService()
    {
        return $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi();
    }
    protected function getEsiListenerService()
    {
        return $this->services['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\EsiListener($this->get('esi'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('kernel.request', array(0 => 'security.firewall', 1 => 'onKernelRequest'), 8);
        $instance->addListenerService('kernel.response', array(0 => 'security.rememberme.response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'ezpublish.siteaccess_match_listener', 1 => 'onKernelRequest'), 200);
        $instance->addListenerService('ezpublish.pre_content_view', array(0 => 'ezdemo.pre_content_view_listener', 1 => 'onPreContentView'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('esi_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\EsiListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('ezpublish.siteaccess_listener', 'eZ\\Bundle\\EzPublishCoreBundle\\EventListener\\SiteAccessListener');
        $instance->addSubscriberService('ezpublish.request_redirect_listener', 'eZ\\Bundle\\EzPublishCoreBundle\\EventListener\\RequestEventListener');
        $instance->addSubscriberService('ezpublish.session_set_dynamic_name_listener', 'eZ\\Bundle\\EzPublishCoreBundle\\EventListener\\SessionSetDynamicNameListener');
        $instance->addSubscriberService('ezpublish_legacy.siteaccess_mapper', 'eZ\\Bundle\\EzPublishLegacyBundle\\LegacyMapper\\SiteAccess');
        $instance->addSubscriberService('ezpublish_legacy.session_mapper', 'eZ\\Bundle\\EzPublishLegacyBundle\\LegacyMapper\\Session');
        $instance->addSubscriberService('ezpublish_legacy.content_exception_handler', 'eZ\\Publish\\Core\\MVC\\Legacy\\EventListener\\APIContentExceptionListener');
        $instance->addSubscriberService('ezpublish_rest.listener', 'eZ\\Bundle\\EzPublishRestBundle\\EventListener\\RestListener');
        return $instance;
    }
    protected function getEzdemo_PreContentViewListenerService()
    {
        return $this->services['ezdemo.pre_content_view_listener'] = new \EzSystems\DemoBundle\EventListener\PreContentViewListener();
    }
    protected function getEzpublish_Api_RepositoryService()
    {
        return $this->services['ezpublish.api.repository'] = $this->get('ezpublish.api.repository.factory')->buildRepository($this->get('ezpublish.api.storage_engine.factory')->buildStorageEngine('legacy'), new \eZ\Publish\Core\IO\InMemoryHandler());
    }
    protected function getEzpublish_Api_Repository_FactoryService()
    {
        $this->services['ezpublish.api.repository.factory'] = $instance = new \eZ\Bundle\EzPublishCoreBundle\ApiLoader\RepositoryFactory($this);
        $instance->registerFieldType('ezpublish.fieldtype.ezauthor', 'ezauthor');
        $instance->registerFieldType('ezpublish.fieldtype.ezbinaryfile', 'ezbinaryfile');
        $instance->registerFieldType('ezpublish.fieldtype.ezboolean', 'ezboolean');
        $instance->registerFieldType('ezpublish.fieldtype.ezcountry', 'ezcountry');
        $instance->registerFieldType('ezpublish.fieldtype.ezdatetime', 'ezdatetime');
        $instance->registerFieldType('ezpublish.fieldtype.ezemail', 'ezemail');
        $instance->registerFieldType('ezpublish.fieldtype.ezfloat', 'ezfloat');
        $instance->registerFieldType('ezpublish.fieldtype.ezinteger', 'ezinteger');
        $instance->registerFieldType('ezpublish.fieldtype.ezkeyword', 'ezkeyword');
        $instance->registerFieldType('ezpublish.fieldtype.ezmedia', 'ezmedia');
        $instance->registerFieldType('ezpublish.fieldtype.ezsrrating', 'ezsrrating');
        $instance->registerFieldType('ezpublish.fieldtype.ezselection', 'ezselection');
        $instance->registerFieldType('ezpublish.fieldtype.eztext', 'eztext');
        $instance->registerFieldType('ezpublish.fieldtype.ezstring', 'ezstring');
        $instance->registerFieldType('ezpublish.fieldtype.ezurl', 'ezurl');
        $instance->registerFieldType('ezpublish.fieldtype.ezxmltext', 'ezxmltext');
        $instance->registerFieldType('ezpublish.fieldtype.ezpage', 'ezpage');
        $instance->registerFieldType('ezpublish.fieldtype.ezimage', 'ezimage');
        $instance->registerFieldType('ezpublish.fieldtype.ezgmaplocation', 'ezgmaplocation');
        $instance->registerFieldType('ezpublish.fieldtype.ezcomcomments', 'ezcomcomments');
        $instance->registerFieldType('ezpublish.fieldtype.ezobjectrelationlist', 'ezobjectrelationlist');
        $instance->registerFieldType('ezpublish.fieldtype.ezuser', 'ezuser');
        $instance->registerExternalStorageHandler('ezpublish.fieldtype.ezbinaryfile.externalstorage', 'ezbinaryfile');
        $instance->registerExternalStorageHandler('ezpublish.fieldtype.ezkeyword.externalstorage', 'ezkeyword');
        $instance->registerExternalStorageHandler('ezpublish.fieldtype.ezmedia.externalstorage', 'ezmedia');
        $instance->registerExternalStorageHandler('ezpublish.fieldtype.ezurl.externalstorage', 'ezurl');
        $instance->registerExternalStorageHandler('ezpublish.fieldtype.ezgmaplocation.externalstorage', 'ezgmaplocation');
        $instance->registerExternalStorageHandler('ezpublish.fieldtype.ezuser.externalstorage', 'ezuser');
        $instance->registerLimitationType('Class', $this->get('ezpublish.api.role.limitation_type.content_type'));
        $instance->registerLimitationType('Language', $this->get('ezpublish.api.role.limitation_type.language'));
        $instance->registerLimitationType('Location', $this->get('ezpublish.api.role.limitation_type.location'));
        $instance->registerLimitationType('Owner', $this->get('ezpublish.api.role.limitation_type.owner'));
        $instance->registerLimitationType('ParentClass', $this->get('ezpublish.api.role.limitation_type.parent_content_type'));
        $instance->registerLimitationType('ParentDepth', $this->get('ezpublish.api.role.limitation_type.parent_depth'));
        $instance->registerLimitationType('ParentOwner', $this->get('ezpublish.api.role.limitation_type.parent_owner'));
        $instance->registerLimitationType('ParentGroup', $this->get('ezpublish.api.role.limitation_type.parent_group'));
        $instance->registerLimitationType('Section', $this->get('ezpublish.api.role.limitation_type.section'));
        $instance->registerLimitationType('NewSection', $this->get('ezpublish.api.role.limitation_type.new_section'));
        $instance->registerLimitationType('SiteAccess', $this->get('ezpublish.api.role.limitation_type.siteaccess'));
        $instance->registerLimitationType('State', $this->get('ezpublish.api.role.limitation_type.state'));
        $instance->registerLimitationType('Subtree', $this->get('ezpublish.api.role.limitation_type.subtree'));
        $instance->registerLimitationType('UserGroup', $this->get('ezpublish.api.role.limitation_type.user_group'));
        return $instance;
    }
    protected function getEzpublish_Api_Repository_LazyService()
    {
        return $this->services['ezpublish.api.repository.lazy'] = $this->get('ezpublish.api.repository.factory')->buildLazyRepository();
    }
    protected function getEzpublish_Api_Role_LimitationType_ContentTypeService()
    {
        return $this->services['ezpublish.api.role.limitation_type.content_type'] = new \eZ\Publish\Core\Limitation\ContentTypeLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_LanguageService()
    {
        return $this->services['ezpublish.api.role.limitation_type.language'] = new \eZ\Publish\Core\Limitation\LanguageLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_LocationService()
    {
        return $this->services['ezpublish.api.role.limitation_type.location'] = new \eZ\Publish\Core\Limitation\LocationLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_NewSectionService()
    {
        return $this->services['ezpublish.api.role.limitation_type.new_section'] = new \eZ\Publish\Core\Limitation\NewSectionLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_OwnerService()
    {
        return $this->services['ezpublish.api.role.limitation_type.owner'] = new \eZ\Publish\Core\Limitation\OwnerLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_ParentContentTypeService()
    {
        return $this->services['ezpublish.api.role.limitation_type.parent_content_type'] = new \eZ\Publish\Core\Limitation\ParentContentTypeLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_ParentDepthService()
    {
        return $this->services['ezpublish.api.role.limitation_type.parent_depth'] = new \eZ\Publish\Core\Limitation\ParentDepthLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_ParentGroupService()
    {
        return $this->services['ezpublish.api.role.limitation_type.parent_group'] = new \eZ\Publish\Core\Limitation\ParentUserGroupLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_ParentOwnerService()
    {
        return $this->services['ezpublish.api.role.limitation_type.parent_owner'] = new \eZ\Publish\Core\Limitation\ParentOwnerLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_SectionService()
    {
        return $this->services['ezpublish.api.role.limitation_type.section'] = new \eZ\Publish\Core\Limitation\SectionLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_SiteaccessService()
    {
        return $this->services['ezpublish.api.role.limitation_type.siteaccess'] = new \eZ\Publish\Core\Limitation\SiteAccessLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_StateService()
    {
        return $this->services['ezpublish.api.role.limitation_type.state'] = new \eZ\Publish\Core\Limitation\StateLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_SubtreeService()
    {
        return $this->services['ezpublish.api.role.limitation_type.subtree'] = new \eZ\Publish\Core\Limitation\SubtreeLimitationType();
    }
    protected function getEzpublish_Api_Role_LimitationType_UserGroupService()
    {
        return $this->services['ezpublish.api.role.limitation_type.user_group'] = new \eZ\Publish\Core\Limitation\UserGroupLimitationType();
    }
    protected function getEzpublish_Api_Service_ContentService()
    {
        return $this->services['ezpublish.api.service.content'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'Content');
    }
    protected function getEzpublish_Api_Service_ContentTypeService()
    {
        return $this->services['ezpublish.api.service.content_type'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'ContentType');
    }
    protected function getEzpublish_Api_Service_FieldTypeService()
    {
        return $this->services['ezpublish.api.service.field_type'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'FieldType');
    }
    protected function getEzpublish_Api_Service_IoService()
    {
        return $this->services['ezpublish.api.service.io'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'IO');
    }
    protected function getEzpublish_Api_Service_LocationService()
    {
        return $this->services['ezpublish.api.service.location'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'Location');
    }
    protected function getEzpublish_Api_Service_ObjectStateService()
    {
        return $this->services['ezpublish.api.service.object_state'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'ObjectState');
    }
    protected function getEzpublish_Api_Service_RoleService()
    {
        return $this->services['ezpublish.api.service.role'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'Role');
    }
    protected function getEzpublish_Api_Service_SearchService()
    {
        return $this->services['ezpublish.api.service.search'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'Search');
    }
    protected function getEzpublish_Api_Service_SectionService()
    {
        return $this->services['ezpublish.api.service.section'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'Section');
    }
    protected function getEzpublish_Api_Service_TrashService()
    {
        return $this->services['ezpublish.api.service.trash'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'Trash');
    }
    protected function getEzpublish_Api_Service_UrlAliasService()
    {
        return $this->services['ezpublish.api.service.url_alias'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'URLAlias');
    }
    protected function getEzpublish_Api_Service_UrlWildcardService()
    {
        return $this->services['ezpublish.api.service.url_wildcard'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'URLWildcard');
    }
    protected function getEzpublish_Api_Service_UserService()
    {
        return $this->services['ezpublish.api.service.user'] = $this->get('ezpublish.api.repository.factory')->buildService($this->get('ezpublish.api.repository'), 'User');
    }
    protected function getEzpublish_Api_StorageEngine_FactoryService()
    {
        $this->services['ezpublish.api.storage_engine.factory'] = $instance = new \eZ\Bundle\EzPublishCoreBundle\ApiLoader\StorageEngineFactory($this);
        $instance->registerStorageEngine('ezpublish.api.storage_engine.in_memory', 'inMemory');
        $instance->registerStorageEngine('ezpublish.api.storage_engine.legacy', 'legacy');
        return $instance;
    }
    protected function getEzpublish_Api_StorageEngine_InMemoryService()
    {
        return $this->services['ezpublish.api.storage_engine.in_memory'] = new \eZ\Publish\Core\Persistence\InMemory\Handler();
    }
    protected function getEzpublish_Api_StorageEngine_LegacyService()
    {
        return $this->services['ezpublish.api.storage_engine.legacy'] = $this->get('ezpublish.api.storage_engine.legacy.factory')->buildLegacyEngine(false);
    }
    protected function getEzpublish_Api_StorageEngine_Legacy_FactoryService()
    {
        $this->services['ezpublish.api.storage_engine.legacy.factory'] = $instance = new \eZ\Bundle\EzPublishCoreBundle\ApiLoader\LegacyStorageEngineFactory($this->get('ezpublish.config.resolver.chain'), $this);
        $instance->registerFieldTypeConverter('ezauthor', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Author::create');
        $instance->registerFieldTypeConverter('ezbinaryfile', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\BinaryFile::create');
        $instance->registerFieldTypeConverter('ezboolean', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Checkbox::create');
        $instance->registerFieldTypeConverter('ezcountry', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Country::create');
        $instance->registerFieldTypeConverter('ezdatetime', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\DateAndTime::create');
        $instance->registerFieldTypeConverter('ezfloat', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Float::create');
        $instance->registerFieldTypeConverter('ezinteger', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Integer::create');
        $instance->registerFieldTypeConverter('ezkeyword', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Keyword::create');
        $instance->registerFieldTypeConverter('ezmedia', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Media::create');
        $instance->registerFieldTypeConverter('ezselection', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Selection::create');
        $instance->registerFieldTypeConverter('ezstring', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine::create');
        $instance->registerFieldTypeConverter('eztext', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextBlock::create');
        $instance->registerFieldTypeConverter('ezxmltext', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\XmlText::create');
        $instance->registerFieldTypeConverter('ezsrrating', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Rating::create');
        $instance->registerFieldTypeConverter('ezuser', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Null::create');
        $instance->registerFieldTypeConverter('ezpage', $this->get('ezpublish.fieldtype.ezpage.converter'));
        $instance->registerFieldTypeConverter('ezemail', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\EmailAddress::create');
        $instance->registerFieldTypeConverter('ezimage', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine::create');
        $instance->registerFieldTypeConverter('ezgmaplocation', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine::create');
        $instance->registerFieldTypeConverter('ezcomcomments', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine::create');
        $instance->registerFieldTypeConverter('ezobjectrelationlist', 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine::create');
        return $instance;
    }
    protected function getEzpublish_Api_StorageEngine_Legacy_PcreCompilerService()
    {
        return $this->services['ezpublish.api.storage_engine.legacy.pcre_compiler'] = new \eZ\Publish\Core\Persistence\Legacy\Content\Search\TransformationPcreCompiler($this->get('ezpublish.api.storage_engine.legacy.transformation_converter'));
    }
    protected function getEzpublish_Api_StorageEngine_Legacy_TransformationConverterService()
    {
        return $this->services['ezpublish.api.storage_engine.legacy.transformation_converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\Search\Utf8Converter();
    }
    protected function getEzpublish_Api_StorageEngine_Legacy_TransformationParserService()
    {
        return $this->services['ezpublish.api.storage_engine.legacy.transformation_parser'] = new \eZ\Publish\Core\Persistence\Legacy\Content\Search\TransformationParser('/var/www/ezpublish/app');
    }
    protected function getEzpublish_Api_StorageEngine_Legacy_TransformationProcessorService()
    {
        return $this->services['ezpublish.api.storage_engine.legacy.transformation_processor'] = new \eZ\Publish\Core\Persistence\Legacy\Content\Search\TransformationProcessor($this->get('ezpublish.api.storage_engine.legacy.transformation_parser'), $this->get('ezpublish.api.storage_engine.legacy.pcre_compiler'), array(0 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/ascii.tr', 1 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/basic.tr', 2 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/cyrillic.tr', 3 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/greek.tr', 4 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/hebrew.tr', 5 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/latin.tr', 6 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/search.tr'));
    }
    protected function getEzpublish_ChainRouterService()
    {
        $a = $this->get('router.request_context');
        $this->services['ezpublish.chain_router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter(NULL);
        $instance->setContext($a);
        $instance->add(new \eZ\Bundle\EzPublishCoreBundle\Routing\DefaultRouter($this, '/var/www/ezpublish/app/config/routing.yml', array('cache_dir' => '/var/www/ezpublish/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appprodUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appprodUrlMatcher', 'strict_requirements' => true), $a, NULL), 255);
        $instance->add($this->get('ezpublish.urlalias_router'), 200);
        $instance->add($this->get('ezpublish_legacy.router'), -255);
        return $instance;
    }
    protected function getEzpublish_Config_Resolver_ChainService()
    {
        $this->services['ezpublish.config.resolver.chain'] = $instance = new \eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\ChainConfigResolver();
        $instance->addResolver($this->get('ezpublish.config.resolver.core'), 200);
        $instance->addResolver($this->get('ezpublish_legacy.config.resolver'), -255);
        return $instance;
    }
    protected function getEzpublish_Config_Resolver_CoreService()
    {
        return $this->services['ezpublish.config.resolver.core'] = new \eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\ConfigResolver($this->get('ezpublish.siteaccess'), array('ezdemo_site' => array(0 => 'ezdemo_group'), 'ezdemo_site_admin' => array(0 => 'ezdemo_group')), $this, 'ezsettings');
    }
    protected function getEzpublish_ContentViewProvider_ConfiguredService()
    {
        return $this->services['ezpublish.content_view_provider.configured'] = new \eZ\Bundle\EzPublishCoreBundle\View\Provider\Content\Configured($this->get('ezpublish.config.resolver.chain'), $this->get('ezpublish.api.repository'), $this);
    }
    protected function getEzpublish_Controller_Content_ViewService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ezpublish.controller.content.view', 'request');
        }
        $this->services['ezpublish.controller.content.view'] = $this->scopedServices['request']['ezpublish.controller.content.view'] = $instance = new \eZ\Publish\Core\MVC\Symfony\Controller\Content\ViewController($this->get('ezpublish.view_manager'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getEzpublish_Fieldtype_Externalstoragehandler_Ezgmaplocation_GatewayService()
    {
        return $this->services['ezpublish.fieldtype.externalstoragehandler.ezgmaplocation.gateway'] = new \eZ\Publish\Core\FieldType\MapLocation\MapLocationStorage\Gateway\LegacyStorage();
    }
    protected function getEzpublish_Fieldtype_EzauthorService()
    {
        return $this->services['ezpublish.fieldtype.ezauthor'] = new \eZ\Publish\Core\FieldType\Author\Type();
    }
    protected function getEzpublish_Fieldtype_Ezauthor_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezauthor.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Author();
    }
    protected function getEzpublish_Fieldtype_EzbinaryfileService()
    {
        return $this->services['ezpublish.fieldtype.ezbinaryfile'] = new \eZ\Publish\Core\FieldType\BinaryFile\Type($this->get('ezpublish.fieldtype.ezbinaryfile.fileservice'), $this->get('ezpublish.fieldtype.ezbinaryfile.mimetypedetector'));
    }
    protected function getEzpublish_Fieldtype_Ezbinaryfile_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezbinaryfile.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\BinaryFile();
    }
    protected function getEzpublish_Fieldtype_Ezbinaryfile_ExternalstorageService()
    {
        $this->services['ezpublish.fieldtype.ezbinaryfile.externalstorage'] = $instance = new \eZ\Publish\Core\FieldType\BinaryFile\BinaryFileStorage(array(), $this->get('ezpublish.fieldtype.ezbinaryfile.fileservice'), $this->get('ezpublish.fieldtype.ezbinaryfile.pathgenerator'));
        $instance->addGateway('LegacyStorage', $this->get('ezpublish.fieldtype.ezbinaryfile.storage_gateway'));
        return $instance;
    }
    protected function getEzpublish_Fieldtype_Ezbinaryfile_FileserviceService()
    {
        return $this->services['ezpublish.fieldtype.ezbinaryfile.fileservice'] = new \eZ\Publish\Core\MVC\Symfony\ConfiguredLocalFileService($this->get('ezpublish.config.resolver.chain'), '/var/www/ezpublish/app/../web', NULL);
    }
    protected function getEzpublish_Fieldtype_Ezbinaryfile_MimetypedetectorService()
    {
        return $this->services['ezpublish.fieldtype.ezbinaryfile.mimetypedetector'] = new \eZ\Publish\Core\FieldType\BinaryBase\MimeTypeDetector\FileInfoDetector();
    }
    protected function getEzpublish_Fieldtype_Ezbinaryfile_PathgeneratorService()
    {
        return $this->services['ezpublish.fieldtype.ezbinaryfile.pathgenerator'] = new \eZ\Publish\Core\FieldType\BinaryBase\PathGenerator\LegacyPathGenerator();
    }
    protected function getEzpublish_Fieldtype_Ezbinaryfile_StorageGatewayService()
    {
        return $this->services['ezpublish.fieldtype.ezbinaryfile.storage_gateway'] = new \eZ\Publish\Core\FieldType\BinaryFile\BinaryFileStorage\Gateway\LegacyStorage();
    }
    protected function getEzpublish_Fieldtype_EzbooleanService()
    {
        return $this->services['ezpublish.fieldtype.ezboolean'] = new \eZ\Publish\Core\FieldType\Checkbox\Type();
    }
    protected function getEzpublish_Fieldtype_Ezboolean_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezboolean.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Checkbox();
    }
    protected function getEzpublish_Fieldtype_EzcomcommentsService()
    {
        return $this->services['ezpublish.fieldtype.ezcomcomments'] = new \eZ\Publish\Core\FieldType\TextLine\Type();
    }
    protected function getEzpublish_Fieldtype_Ezcomcomments_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezcomcomments.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\TextLine();
    }
    protected function getEzpublish_Fieldtype_EzcountryService()
    {
        return $this->services['ezpublish.fieldtype.ezcountry'] = new \eZ\Publish\Core\FieldType\Country\Type(array(0 => array('AF' => array('Name' => 'Afghanistan', 'Alpha2' => 'AF', 'Alpha3' => 'AFG', 'IDC' => '93')), 1 => array('AX' => array('Name' => 'Åland', 'Alpha2' => 'AX', 'Alpha3' => 'ALA', 'IDC' => '358')), 2 => array('AL' => array('Name' => 'Albania', 'Alpha2' => 'AL', 'Alpha3' => 'ALB', 'IDC' => '355')), 3 => array('DZ' => array('Name' => 'Algeria', 'Alpha2' => 'DZ', 'Alpha3' => 'DZA', 'IDC' => '213')), 4 => array('AS' => array('Name' => 'American Samoa', 'Alpha2' => 'AS', 'Alpha3' => 'ASM', 'IDC' => '1684')), 5 => array('AD' => array('Name' => 'Andorra', 'Alpha2' => 'AD', 'Alpha3' => 'AND', 'IDC' => '376')), 6 => array('AO' => array('Name' => 'Angola', 'Alpha2' => 'AO', 'Alpha3' => 'AGO', 'IDC' => '244')), 7 => array('AI' => array('Name' => 'Anguilla', 'Alpha2' => 'AI', 'Alpha3' => 'AIA', 'IDC' => '1264')), 8 => array('AQ' => array('Name' => 'Antarctica', 'Alpha2' => 'AQ', 'Alpha3' => 'ATA', 'IDC' => '672')), 9 => array('AG' => array('Name' => 'Antigua and Barbuda', 'Alpha2' => 'AG', 'Alpha3' => 'ATG', 'IDC' => '1268')), 10 => array('AR' => array('Name' => 'Argentina', 'Alpha2' => 'AR', 'Alpha3' => 'ARG', 'IDC' => '54')), 11 => array('AM' => array('Name' => 'Armenia', 'Alpha2' => 'AM', 'Alpha3' => 'ARM', 'IDC' => '374')), 12 => array('AW' => array('Name' => 'Aruba', 'Alpha2' => 'AW', 'Alpha3' => 'ABW', 'IDC' => '297')), 13 => array('AU' => array('Name' => 'Australia', 'Alpha2' => 'AU', 'Alpha3' => 'AUS', 'IDC' => '61')), 14 => array('AT' => array('Name' => 'Austria', 'Alpha2' => 'AT', 'Alpha3' => 'AUT', 'IDC' => '43')), 15 => array('AZ' => array('Name' => 'Azerbaijan', 'Alpha2' => 'AZ', 'Alpha3' => 'AZE', 'IDC' => '994')), 16 => array('BS' => array('Name' => 'Bahamas', 'Alpha2' => 'BS', 'Alpha3' => 'BHS', 'IDC' => '1242')), 17 => array('BH' => array('Name' => 'Bahrain', 'Alpha2' => 'BH', 'Alpha3' => 'BHR', 'IDC' => '973')), 18 => array('BD' => array('Name' => 'Bangladesh', 'Alpha2' => 'BD', 'Alpha3' => 'BGD', 'IDC' => '880')), 19 => array('BB' => array('Name' => 'Barbados', 'Alpha2' => 'BB', 'Alpha3' => 'BRB', 'IDC' => '1246')), 20 => array('BY' => array('Name' => 'Belarus', 'Alpha2' => 'BY', 'Alpha3' => 'BLR', 'IDC' => '375')), 21 => array('BE' => array('Name' => 'Belgium', 'Alpha2' => 'BE', 'Alpha3' => 'BEL', 'IDC' => '32')), 22 => array('BZ' => array('Name' => 'Belize', 'Alpha2' => 'BZ', 'Alpha3' => 'BLZ', 'IDC' => '501')), 23 => array('BJ' => array('Name' => 'Benin', 'Alpha2' => 'BJ', 'Alpha3' => 'BEN', 'IDC' => '229')), 24 => array('BM' => array('Name' => 'Bermuda', 'Alpha2' => 'BM', 'Alpha3' => 'BMU', 'IDC' => '1441')), 25 => array('BT' => array('Name' => 'Bhutan', 'Alpha2' => 'BT', 'Alpha3' => 'BTN', 'IDC' => '975')), 26 => array('BO' => array('Name' => 'Bolivia', 'Alpha2' => 'BO', 'Alpha3' => 'BOL', 'IDC' => '591')), 27 => array('BA' => array('Name' => 'Bosnia and Herzegovina', 'Alpha2' => 'BA', 'Alpha3' => 'BIH', 'IDC' => '387')), 28 => array('BW' => array('Name' => 'Botswana', 'Alpha2' => 'BW', 'Alpha3' => 'BWA', 'IDC' => '267')), 29 => array('BV' => array('Name' => 'Bouvet Island', 'Alpha2' => 'BV', 'Alpha3' => 'BVT', 'IDC' => '47')), 30 => array('BR' => array('Name' => 'Brazil', 'Alpha2' => 'BR', 'Alpha3' => 'BRA', 'IDC' => '55')), 31 => array('IO' => array('Name' => 'British Indian Ocean Territory', 'Alpha2' => 'IO', 'Alpha3' => 'IOT', 'IDC' => '246')), 32 => array('BN' => array('Name' => 'Brunei Darussalam', 'Alpha2' => 'BN', 'Alpha3' => 'BRN', 'IDC' => '673')), 33 => array('BG' => array('Name' => 'Bulgaria', 'Alpha2' => 'BG', 'Alpha3' => 'BGR', 'IDC' => '359')), 34 => array('BF' => array('Name' => 'Burkina Faso', 'Alpha2' => 'BF', 'Alpha3' => 'BFA', 'IDC' => '226')), 35 => array('BI' => array('Name' => 'Burundi', 'Alpha2' => 'BI', 'Alpha3' => 'BDI', 'IDC' => '257')), 36 => array('KH' => array('Name' => 'Cambodia', 'Alpha2' => 'KH', 'Alpha3' => 'KHM', 'IDC' => '855')), 37 => array('CM' => array('Name' => 'Cameroon', 'Alpha2' => 'CM', 'Alpha3' => 'CMR', 'IDC' => '237')), 38 => array('CA' => array('Name' => 'Canada', 'Alpha2' => 'CA', 'Alpha3' => 'CAN', 'IDC' => '1')), 39 => array('CV' => array('Name' => 'Cape Verde', 'Alpha2' => 'CV', 'Alpha3' => 'CPV', 'IDC' => '238')), 40 => array('KY' => array('Name' => 'Cayman Islands', 'Alpha2' => 'KY', 'Alpha3' => 'CYM', 'IDC' => '1345')), 41 => array('CF' => array('Name' => 'Central African Republic', 'Alpha2' => 'CF', 'Alpha3' => 'CAF', 'IDC' => '236')), 42 => array('TD' => array('Name' => 'Chad', 'Alpha2' => 'TD', 'Alpha3' => 'TCD', 'IDC' => '235')), 43 => array('CL' => array('Name' => 'Chile', 'Alpha2' => 'CL', 'Alpha3' => 'CHL', 'IDC' => '56')), 44 => array('CN' => array('Name' => 'China', 'Alpha2' => 'CN', 'Alpha3' => 'CHN', 'IDC' => '86')), 45 => array('CX' => array('Name' => 'Christmas Island', 'Alpha2' => 'CX', 'Alpha3' => 'CXR', 'IDC' => '61')), 46 => array('CC' => array('Name' => 'Cocos (Keeling) Islands', 'Alpha2' => 'CC', 'Alpha3' => 'CCK', 'IDC' => '61')), 47 => array('CO' => array('Name' => 'Colombia', 'Alpha2' => 'CO', 'Alpha3' => 'COL', 'IDC' => '57')), 48 => array('KM' => array('Name' => 'Comoros', 'Alpha2' => 'KM', 'Alpha3' => 'COM', 'IDC' => '269')), 49 => array('CG' => array('Name' => 'Congo', 'Alpha2' => 'CG', 'Alpha3' => 'COG', 'IDC' => '242')), 50 => array('CD' => array('Name' => 'Congo, The Democratic Republic Of The', 'Alpha2' => 'CD', 'Alpha3' => 'COD', 'IDC' => '243')), 51 => array('CK' => array('Name' => 'Cook Islands', 'Alpha2' => 'CK', 'Alpha3' => 'COK', 'IDC' => '682')), 52 => array('CR' => array('Name' => 'Costa Rica', 'Alpha2' => 'CR', 'Alpha3' => 'CRI', 'IDC' => '506')), 53 => array('CI' => array('Name' => 'Côte d\'Ivoire', 'Alpha2' => 'CI', 'Alpha3' => 'CIV', 'IDC' => '225')), 54 => array('HR' => array('Name' => 'Croatia', 'Alpha2' => 'HR', 'Alpha3' => 'HRV', 'IDC' => '385')), 55 => array('CU' => array('Name' => 'Cuba', 'Alpha2' => 'CU', 'Alpha3' => 'CUB', 'IDC' => '53')), 56 => array('CY' => array('Name' => 'Cyprus', 'Alpha2' => 'CY', 'Alpha3' => 'CYP', 'IDC' => '357')), 57 => array('CZ' => array('Name' => 'Czech Republic', 'Alpha2' => 'CZ', 'Alpha3' => 'CZE', 'IDC' => '420')), 58 => array('DK' => array('Name' => 'Denmark', 'Alpha2' => 'DK', 'Alpha3' => 'DNK', 'IDC' => '45')), 59 => array('DJ' => array('Name' => 'Djibouti', 'Alpha2' => 'DJ', 'Alpha3' => 'DJI', 'IDC' => '253')), 60 => array('DM' => array('Name' => 'Dominica', 'Alpha2' => 'DM', 'Alpha3' => 'DMA', 'IDC' => '1767')), 61 => array('DO' => array('Name' => 'Dominican Republic', 'Alpha2' => 'DO', 'Alpha3' => 'DOM', 'IDC' => '1809')), 62 => array('EC' => array('Name' => 'Ecuador', 'Alpha2' => 'EC', 'Alpha3' => 'ECU', 'IDC' => '593')), 63 => array('EG' => array('Name' => 'Egypt', 'Alpha2' => 'EG', 'Alpha3' => 'EGY', 'IDC' => '20')), 64 => array('SV' => array('Name' => 'El Salvador', 'Alpha2' => 'SV', 'Alpha3' => 'SLV', 'IDC' => '503')), 65 => array('GQ' => array('Name' => 'Equatorial Guinea', 'Alpha2' => 'GQ', 'Alpha3' => 'GNQ', 'IDC' => '240')), 66 => array('ER' => array('Name' => 'Eritrea', 'Alpha2' => 'ER', 'Alpha3' => 'ERI', 'IDC' => '291')), 67 => array('EE' => array('Name' => 'Estonia', 'Alpha2' => 'EE', 'Alpha3' => 'EST', 'IDC' => '372')), 68 => array('ET' => array('Name' => 'Ethiopia', 'Alpha2' => 'ET', 'Alpha3' => 'ETH', 'IDC' => '251')), 69 => array('FK' => array('Name' => 'Falkland Islands (Malvinas)', 'Alpha2' => 'FK', 'Alpha3' => 'FLK', 'IDC' => '500')), 70 => array('FO' => array('Name' => 'Faroe Islands', 'Alpha2' => 'FO', 'Alpha3' => 'FRO', 'IDC' => '298')), 71 => array('FJ' => array('Name' => 'Fiji', 'Alpha2' => 'FJ', 'Alpha3' => 'FJI', 'IDC' => '679')), 72 => array('FI' => array('Name' => 'Finland', 'Alpha2' => 'FI', 'Alpha3' => 'FIN', 'IDC' => '358')), 73 => array('FR' => array('Name' => 'France', 'Alpha2' => 'FR', 'Alpha3' => 'FRA', 'IDC' => '33')), 74 => array('GF' => array('Name' => 'French Guiana', 'Alpha2' => 'GF', 'Alpha3' => 'GUF', 'IDC' => '594')), 75 => array('PF' => array('Name' => 'French Polynesia', 'Alpha2' => 'PF', 'Alpha3' => 'PYF', 'IDC' => '689')), 76 => array('TF' => array('Name' => 'French Southern Territories', 'Alpha2' => 'TF', 'Alpha3' => 'ATF', 'IDC' => '0')), 77 => array('GA' => array('Name' => 'Gabon', 'Alpha2' => 'GA', 'Alpha3' => 'GAB', 'IDC' => '241')), 78 => array('GM' => array('Name' => 'Gambia', 'Alpha2' => 'GM', 'Alpha3' => 'GMB', 'IDC' => '220')), 79 => array('GE' => array('Name' => 'Georgia', 'Alpha2' => 'GE', 'Alpha3' => 'GEO', 'IDC' => '995')), 80 => array('DE' => array('Name' => 'Germany', 'Alpha2' => 'DE', 'Alpha3' => 'DEU', 'IDC' => '49')), 81 => array('GH' => array('Name' => 'Ghana', 'Alpha2' => 'GH', 'Alpha3' => 'GHA', 'IDC' => '233')), 82 => array('GI' => array('Name' => 'Gibraltar', 'Alpha2' => 'GI', 'Alpha3' => 'GIB', 'IDC' => '350')), 83 => array('GR' => array('Name' => 'Greece', 'Alpha2' => 'GR', 'Alpha3' => 'GRC', 'IDC' => '30')), 84 => array('GL' => array('Name' => 'Greenland', 'Alpha2' => 'GL', 'Alpha3' => 'GRL', 'IDC' => '299')), 85 => array('GD' => array('Name' => 'Grenada', 'Alpha2' => 'GD', 'Alpha3' => 'GRD', 'IDC' => '1473')), 86 => array('GP' => array('Name' => 'Guadeloupe', 'Alpha2' => 'GP', 'Alpha3' => 'GLP', 'IDC' => '590')), 87 => array('GU' => array('Name' => 'Guam', 'Alpha2' => 'GU', 'Alpha3' => 'GUM', 'IDC' => '1671')), 88 => array('GT' => array('Name' => 'Guatemala', 'Alpha2' => 'GT', 'Alpha3' => 'GTM', 'IDC' => '502')), 89 => array('GG' => array('Name' => 'Guernsey', 'Alpha2' => 'GG', 'Alpha3' => 'GGY', 'IDC' => '44')), 90 => array('GN' => array('Name' => 'Guinea', 'Alpha2' => 'GN', 'Alpha3' => 'GIN', 'IDC' => '224')), 91 => array('GW' => array('Name' => 'Guinea-Bissau', 'Alpha2' => 'GW', 'Alpha3' => 'GNB', 'IDC' => '245')), 92 => array('GY' => array('Name' => 'Guyana', 'Alpha2' => 'GY', 'Alpha3' => 'GUY', 'IDC' => '592')), 93 => array('HT' => array('Name' => 'Haiti', 'Alpha2' => 'HT', 'Alpha3' => 'HTI', 'IDC' => '509')), 94 => array('HM' => array('Name' => 'Heard Island and McDonald Islands', 'Alpha2' => 'HM', 'Alpha3' => 'HMD', 'IDC' => '672')), 95 => array('HN' => array('Name' => 'Honduras', 'Alpha2' => 'HN', 'Alpha3' => 'HND', 'IDC' => '504')), 96 => array('HK' => array('Name' => 'Hong Kong', 'Alpha2' => 'HK', 'Alpha3' => 'HKG', 'IDC' => '852')), 97 => array('HU' => array('Name' => 'Hungary', 'Alpha2' => 'HU', 'Alpha3' => 'HUN', 'IDC' => '36')), 98 => array('IS' => array('Name' => 'Iceland', 'Alpha2' => 'IS', 'Alpha3' => 'ISL', 'IDC' => '354')), 99 => array('IN' => array('Name' => 'India', 'Alpha2' => 'IN', 'Alpha3' => 'IND', 'IDC' => '91')), 100 => array('ID' => array('Name' => 'Indonesia', 'Alpha2' => 'ID', 'Alpha3' => 'IDN', 'IDC' => '62')), 101 => array('IR' => array('Name' => 'Iran, Islamic Republic of', 'Alpha2' => 'IR', 'Alpha3' => 'IRN', 'IDC' => '98')), 102 => array('IQ' => array('Name' => 'Iraq', 'Alpha2' => 'IQ', 'Alpha3' => 'IRQ', 'IDC' => '964')), 103 => array('IE' => array('Name' => 'Ireland', 'Alpha2' => 'IE', 'Alpha3' => 'IRL', 'IDC' => '353')), 104 => array('IM' => array('Name' => 'Isle of Man', 'Alpha2' => 'IM', 'Alpha3' => 'IMN', 'IDC' => '44')), 105 => array('IL' => array('Name' => 'Israel', 'Alpha2' => 'IL', 'Alpha3' => 'ISR', 'IDC' => '972')), 106 => array('IT' => array('Name' => 'Italy', 'Alpha2' => 'IT', 'Alpha3' => 'ITA', 'IDC' => '39')), 107 => array('JM' => array('Name' => 'Jamaica', 'Alpha2' => 'JM', 'Alpha3' => 'JAM', 'IDC' => '1876')), 108 => array('JP' => array('Name' => 'Japan', 'Alpha2' => 'JP', 'Alpha3' => 'JPN', 'IDC' => '81')), 109 => array('JE' => array('Name' => 'Jersey', 'Alpha2' => 'JE', 'Alpha3' => 'JEY', 'IDC' => '44')), 110 => array('JO' => array('Name' => 'Jordan', 'Alpha2' => 'JO', 'Alpha3' => 'JOR', 'IDC' => '962')), 111 => array('KZ' => array('Name' => 'Kazakhstan', 'Alpha2' => 'KZ', 'Alpha3' => 'KAZ', 'IDC' => '7')), 112 => array('KE' => array('Name' => 'Kenya', 'Alpha2' => 'KE', 'Alpha3' => 'KEN', 'IDC' => '254')), 113 => array('KI' => array('Name' => 'Kiribati', 'Alpha2' => 'KI', 'Alpha3' => 'KIR', 'IDC' => '686')), 114 => array('KP' => array('Name' => 'Korea, Democratic People\'s Republic of', 'Alpha2' => 'KP', 'Alpha3' => 'PRK', 'IDC' => '850')), 115 => array('KR' => array('Name' => 'Korea, Republic of', 'Alpha2' => 'KR', 'Alpha3' => 'KOR', 'IDC' => '82')), 116 => array('KW' => array('Name' => 'Kuwait', 'Alpha2' => 'KW', 'Alpha3' => 'KWT', 'IDC' => '965')), 117 => array('KG' => array('Name' => 'Kyrgyzstan', 'Alpha2' => 'KG', 'Alpha3' => 'KGZ', 'IDC' => '996')), 118 => array('LA' => array('Name' => 'Lao People\'s Democratic Republic', 'Alpha2' => 'LA', 'Alpha3' => 'LAO', 'IDC' => '856')), 119 => array('LV' => array('Name' => 'Latvia', 'Alpha2' => 'LV', 'Alpha3' => 'LVA', 'IDC' => '371')), 120 => array('LB' => array('Name' => 'Lebanon', 'Alpha2' => 'LB', 'Alpha3' => 'LBN', 'IDC' => '961')), 121 => array('LS' => array('Name' => 'Lesotho', 'Alpha2' => 'LS', 'Alpha3' => 'LSO', 'IDC' => '266')), 122 => array('LR' => array('Name' => 'Liberia', 'Alpha2' => 'LR', 'Alpha3' => 'LBR', 'IDC' => '231')), 123 => array('LY' => array('Name' => 'Libyan Arab Jamahiriya', 'Alpha2' => 'LY', 'Alpha3' => 'LBY', 'IDC' => '218')), 124 => array('LI' => array('Name' => 'Liechtenstein', 'Alpha2' => 'LI', 'Alpha3' => 'LIE', 'IDC' => '423')), 125 => array('LT' => array('Name' => 'Lithuania', 'Alpha2' => 'LT', 'Alpha3' => 'LTU', 'IDC' => '370')), 126 => array('LU' => array('Name' => 'Luxembourg', 'Alpha2' => 'LU', 'Alpha3' => 'LUX', 'IDC' => '352')), 127 => array('MO' => array('Name' => 'Macau', 'Alpha2' => 'MO', 'Alpha3' => 'MAC', 'IDC' => '853')), 128 => array('MK' => array('Name' => 'Macedonia, The Former Yugoslav Republic of', 'Alpha2' => 'MK', 'Alpha3' => 'MKD', 'IDC' => '389')), 129 => array('MG' => array('Name' => 'Madagascar', 'Alpha2' => 'MG', 'Alpha3' => 'MDG', 'IDC' => '261')), 130 => array('MW' => array('Name' => 'Malawi', 'Alpha2' => 'MW', 'Alpha3' => 'MWI', 'IDC' => '265')), 131 => array('MY' => array('Name' => 'Malaysia', 'Alpha2' => 'MY', 'Alpha3' => 'MYS', 'IDC' => '60')), 132 => array('MV' => array('Name' => 'Maldives', 'Alpha2' => 'MV', 'Alpha3' => 'MDV', 'IDC' => '960')), 133 => array('ML' => array('Name' => 'Mali', 'Alpha2' => 'ML', 'Alpha3' => 'MLI', 'IDC' => '223')), 134 => array('MT' => array('Name' => 'Malta', 'Alpha2' => 'MT', 'Alpha3' => 'MLT', 'IDC' => '356')), 135 => array('MH' => array('Name' => 'Marshall Islands', 'Alpha2' => 'MH', 'Alpha3' => 'MHL', 'IDC' => '692')), 136 => array('MQ' => array('Name' => 'Martinique', 'Alpha2' => 'MQ', 'Alpha3' => 'MTQ', 'IDC' => '596')), 137 => array('MR' => array('Name' => 'Mauritania', 'Alpha2' => 'MR', 'Alpha3' => 'MRT', 'IDC' => '222')), 138 => array('MU' => array('Name' => 'Mauritius', 'Alpha2' => 'MU', 'Alpha3' => 'MUS', 'IDC' => '230')), 139 => array('YT' => array('Name' => 'Mayotte', 'Alpha2' => 'YT', 'Alpha3' => 'MYT', 'IDC' => '262')), 140 => array('MX' => array('Name' => 'Mexico', 'Alpha2' => 'MX', 'Alpha3' => 'MEX', 'IDC' => '52')), 141 => array('FM' => array('Name' => 'Micronesia, Federated States of', 'Alpha2' => 'FM', 'Alpha3' => 'FSM', 'IDC' => '691')), 142 => array('MD' => array('Name' => 'Moldova, Republic of', 'Alpha2' => 'MD', 'Alpha3' => 'MDA', 'IDC' => '373')), 143 => array('MC' => array('Name' => 'Monaco', 'Alpha2' => 'MC', 'Alpha3' => 'MCO', 'IDC' => '377')), 144 => array('MN' => array('Name' => 'Mongolia', 'Alpha2' => 'MN', 'Alpha3' => 'MNG', 'IDC' => '976')), 145 => array('ME' => array('Name' => 'Montenegro', 'Alpha2' => 'ME', 'Alpha3' => 'MNE', 'IDC' => '382')), 146 => array('MS' => array('Name' => 'Montserrat', 'Alpha2' => 'MS', 'Alpha3' => 'MSR', 'IDC' => '1664')), 147 => array('MA' => array('Name' => 'Morocco', 'Alpha2' => 'MA', 'Alpha3' => 'MAR', 'IDC' => '212')), 148 => array('MZ' => array('Name' => 'Mozambique', 'Alpha2' => 'MZ', 'Alpha3' => 'MOZ', 'IDC' => '258')), 149 => array('MM' => array('Name' => 'Myanmar', 'Alpha2' => 'MM', 'Alpha3' => 'MMR', 'IDC' => '95')), 150 => array('NA' => array('Name' => 'Namibia', 'Alpha2' => 'NA', 'Alpha3' => 'NAM', 'IDC' => '264')), 151 => array('NR' => array('Name' => 'Nauru', 'Alpha2' => 'NR', 'Alpha3' => 'NRU', 'IDC' => '674')), 152 => array('NP' => array('Name' => 'Nepal', 'Alpha2' => 'NP', 'Alpha3' => 'NPL', 'IDC' => '977')), 153 => array('NL' => array('Name' => 'Netherlands', 'Alpha2' => 'NL', 'Alpha3' => 'NLD', 'IDC' => '31')), 154 => array('AN' => array('Name' => 'Netherlands Antilles', 'Alpha2' => 'AN', 'Alpha3' => 'ANT', 'IDC' => '599')), 155 => array('NC' => array('Name' => 'New Caledonia', 'Alpha2' => 'NC', 'Alpha3' => 'NCL', 'IDC' => '687')), 156 => array('NZ' => array('Name' => 'New Zealand', 'Alpha2' => 'NZ', 'Alpha3' => 'NZL', 'IDC' => '64')), 157 => array('NI' => array('Name' => 'Nicaragua', 'Alpha2' => 'NI', 'Alpha3' => 'NIC', 'IDC' => '505')), 158 => array('NE' => array('Name' => 'Niger', 'Alpha2' => 'NE', 'Alpha3' => 'NER', 'IDC' => '227')), 159 => array('NG' => array('Name' => 'Nigeria', 'Alpha2' => 'NG', 'Alpha3' => 'NGA', 'IDC' => '234')), 160 => array('NU' => array('Name' => 'Niue', 'Alpha2' => 'NU', 'Alpha3' => 'NIU', 'IDC' => '683')), 161 => array('NF' => array('Name' => 'Norfolk Island', 'Alpha2' => 'NF', 'Alpha3' => 'NFK', 'IDC' => '6723')), 162 => array('MP' => array('Name' => 'Northern Mariana Islands', 'Alpha2' => 'MP', 'Alpha3' => 'MNP', 'IDC' => '1670')), 163 => array('NO' => array('Name' => 'Norway', 'Alpha2' => 'NO', 'Alpha3' => 'NOR', 'IDC' => '47')), 164 => array('OM' => array('Name' => 'Oman', 'Alpha2' => 'OM', 'Alpha3' => 'OMN', 'IDC' => '968')), 165 => array('PK' => array('Name' => 'Pakistan', 'Alpha2' => 'PK', 'Alpha3' => 'PAK', 'IDC' => '92')), 166 => array('PW' => array('Name' => 'Palau', 'Alpha2' => 'PW', 'Alpha3' => 'PLW', 'IDC' => '680')), 167 => array('PS' => array('Name' => 'Palestinian Territory, Occupied', 'Alpha2' => 'PS', 'Alpha3' => 'PSE', 'IDC' => '970')), 168 => array('PA' => array('Name' => 'Panama', 'Alpha2' => 'PA', 'Alpha3' => 'PAN', 'IDC' => '507')), 169 => array('PG' => array('Name' => 'Papua New Guinea', 'Alpha2' => 'PG', 'Alpha3' => 'PNG', 'IDC' => '675')), 170 => array('PY' => array('Name' => 'Paraguay', 'Alpha2' => 'PY', 'Alpha3' => 'PRY', 'IDC' => '595')), 171 => array('PE' => array('Name' => 'Peru', 'Alpha2' => 'PE', 'Alpha3' => 'PER', 'IDC' => '51')), 172 => array('PH' => array('Name' => 'Philippines', 'Alpha2' => 'PH', 'Alpha3' => 'PHL', 'IDC' => '63')), 173 => array('PN' => array('Name' => 'Pitcairn', 'Alpha2' => 'PN', 'Alpha3' => 'PCN', 'IDC' => '64')), 174 => array('PL' => array('Name' => 'Poland', 'Alpha2' => 'PL', 'Alpha3' => 'POL', 'IDC' => '48')), 175 => array('PT' => array('Name' => 'Portugal', 'Alpha2' => 'PT', 'Alpha3' => 'PRT', 'IDC' => '351')), 176 => array('PR' => array('Name' => 'Puerto Rico', 'Alpha2' => 'PR', 'Alpha3' => 'PRI', 'IDC' => '1787')), 177 => array('QA' => array('Name' => 'Qatar', 'Alpha2' => 'QA', 'Alpha3' => 'QAT', 'IDC' => '974')), 178 => array('RE' => array('Name' => 'Reunion', 'Alpha2' => 'RE', 'Alpha3' => 'REU', 'IDC' => '262')), 179 => array('RO' => array('Name' => 'Romania', 'Alpha2' => 'RO', 'Alpha3' => 'ROU', 'IDC' => '40')), 180 => array('RU' => array('Name' => 'Russian Federation', 'Alpha2' => 'RU', 'Alpha3' => 'RUS', 'IDC' => '7')), 181 => array('RW' => array('Name' => 'Rwanda', 'Alpha2' => 'RW', 'Alpha3' => 'RWA', 'IDC' => '250')), 182 => array('BL' => array('Name' => 'Saint Barthélemy', 'Alpha2' => 'BL', 'Alpha3' => 'BLM', 'IDC' => '590')), 183 => array('SH' => array('Name' => 'Saint Helena', 'Alpha2' => 'SH', 'Alpha3' => 'SHN', 'IDC' => '290')), 184 => array('KN' => array('Name' => 'Saint Kitts and Nevis', 'Alpha2' => 'KN', 'Alpha3' => 'KNA', 'IDC' => '1869')), 185 => array('LC' => array('Name' => 'Saint Lucia', 'Alpha2' => 'LC', 'Alpha3' => 'LCA', 'IDC' => '1758')), 186 => array('MF' => array('Name' => 'Saint Martin', 'Alpha2' => 'MF', 'Alpha3' => 'MAF', 'IDC' => '590')), 187 => array('PM' => array('Name' => 'Saint Pierre and Miquelon', 'Alpha2' => 'PM', 'Alpha3' => 'SPM', 'IDC' => '508')), 188 => array('VC' => array('Name' => 'Saint Vincent and The Grenadines', 'Alpha2' => 'VC', 'Alpha3' => 'VCT', 'IDC' => '1784')), 189 => array('WS' => array('Name' => 'Samoa', 'Alpha2' => 'WS', 'Alpha3' => 'WSM', 'IDC' => '685')), 190 => array('SM' => array('Name' => 'San Marino', 'Alpha2' => 'SM', 'Alpha3' => 'SMR', 'IDC' => '378')), 191 => array('ST' => array('Name' => 'Sao Tome and Principe', 'Alpha2' => 'ST', 'Alpha3' => 'STP', 'IDC' => '239')), 192 => array('SA' => array('Name' => 'Saudi Arabia', 'Alpha2' => 'SA', 'Alpha3' => 'SAU', 'IDC' => '966')), 193 => array('SN' => array('Name' => 'Senegal', 'Alpha2' => 'SN', 'Alpha3' => 'SEN', 'IDC' => '221')), 194 => array('RS' => array('Name' => 'Serbia', 'Alpha2' => 'RS', 'Alpha3' => 'SRB', 'IDC' => '381')), 195 => array('SC' => array('Name' => 'Seychelles', 'Alpha2' => 'SC', 'Alpha3' => 'SYC', 'IDC' => '248')), 196 => array('SL' => array('Name' => 'Sierra Leone', 'Alpha2' => 'SL', 'Alpha3' => 'SLE', 'IDC' => '232')), 197 => array('SG' => array('Name' => 'Singapore', 'Alpha2' => 'SG', 'Alpha3' => 'SGP', 'IDC' => '65')), 198 => array('SK' => array('Name' => 'Slovakia', 'Alpha2' => 'SK', 'Alpha3' => 'SVK', 'IDC' => '421')), 199 => array('SI' => array('Name' => 'Slovenia', 'Alpha2' => 'SI', 'Alpha3' => 'SVN', 'IDC' => '386')), 200 => array('SB' => array('Name' => 'Solomon Islands', 'Alpha2' => 'SB', 'Alpha3' => 'SLB', 'IDC' => '677')), 201 => array('SO' => array('Name' => 'Somalia', 'Alpha2' => 'SO', 'Alpha3' => 'SOM', 'IDC' => '252')), 202 => array('ZA' => array('Name' => 'South Africa', 'Alpha2' => 'ZA', 'Alpha3' => 'ZAF', 'IDC' => '27')), 203 => array('GS' => array('Name' => 'South Georgia and The South Sandwich Islands', 'Alpha2' => 'GS', 'Alpha3' => 'SGS', 'IDC' => '500')), 204 => array('ES' => array('Name' => 'Spain', 'Alpha2' => 'ES', 'Alpha3' => 'ESP', 'IDC' => '34')), 205 => array('LK' => array('Name' => 'Sri Lanka', 'Alpha2' => 'LK', 'Alpha3' => 'LKA', 'IDC' => '94')), 206 => array('SD' => array('Name' => 'Sudan', 'Alpha2' => 'SD', 'Alpha3' => 'SDN', 'IDC' => '249')), 207 => array('SR' => array('Name' => 'Suriname', 'Alpha2' => 'SR', 'Alpha3' => 'SUR', 'IDC' => '597')), 208 => array('SJ' => array('Name' => 'Svalbard and Jan Mayen', 'Alpha2' => 'SJ', 'Alpha3' => 'SJM', 'IDC' => '47')), 209 => array('SZ' => array('Name' => 'Swaziland', 'Alpha2' => 'SZ', 'Alpha3' => 'SWZ', 'IDC' => '268')), 210 => array('SE' => array('Name' => 'Sweden', 'Alpha2' => 'SE', 'Alpha3' => 'SWE', 'IDC' => '46')), 211 => array('CH' => array('Name' => 'Switzerland', 'Alpha2' => 'CH', 'Alpha3' => 'CHE', 'IDC' => '41')), 212 => array('SY' => array('Name' => 'Syrian Arab Republic', 'Alpha2' => 'SY', 'Alpha3' => 'SYR', 'IDC' => '963')), 213 => array('TW' => array('Name' => 'Taiwan', 'Alpha2' => 'TW', 'Alpha3' => 'TWN', 'IDC' => '886')), 214 => array('TJ' => array('Name' => 'Tajikistan', 'Alpha2' => 'TJ', 'Alpha3' => 'TJK', 'IDC' => '992')), 215 => array('TZ' => array('Name' => 'Tanzania, United Republic of', 'Alpha2' => 'TZ', 'Alpha3' => 'TZA', 'IDC' => '255')), 216 => array('TH' => array('Name' => 'Thailand', 'Alpha2' => 'TH', 'Alpha3' => 'THA', 'IDC' => '66')), 217 => array('TL' => array('Name' => 'Timor-Leste', 'Alpha2' => 'TL', 'Alpha3' => 'TLS', 'IDC' => '670')), 218 => array('TG' => array('Name' => 'Togo', 'Alpha2' => 'TG', 'Alpha3' => 'TGO', 'IDC' => '228')), 219 => array('TK' => array('Name' => 'Tokelau', 'Alpha2' => 'TK', 'Alpha3' => 'TKL', 'IDC' => '690')), 220 => array('TO' => array('Name' => 'Tonga', 'Alpha2' => 'TO', 'Alpha3' => 'TON', 'IDC' => '676')), 221 => array('TT' => array('Name' => 'Trinidad and Tobago', 'Alpha2' => 'TT', 'Alpha3' => 'TTO', 'IDC' => '1868')), 222 => array('TN' => array('Name' => 'Tunisia', 'Alpha2' => 'TN', 'Alpha3' => 'TUN', 'IDC' => '216')), 223 => array('TR' => array('Name' => 'Turkey', 'Alpha2' => 'TR', 'Alpha3' => 'TUR', 'IDC' => '90')), 224 => array('TM' => array('Name' => 'Turkmenistan', 'Alpha2' => 'TM', 'Alpha3' => 'TKM', 'IDC' => '993')), 225 => array('TC' => array('Name' => 'Turks and Caicos Islands', 'Alpha2' => 'TC', 'Alpha3' => 'TCA', 'IDC' => '1649')), 226 => array('TV' => array('Name' => 'Tuvalu', 'Alpha2' => 'TV', 'Alpha3' => 'TUV', 'IDC' => '688')), 227 => array('UG' => array('Name' => 'Uganda', 'Alpha2' => 'UG', 'Alpha3' => 'UGA', 'IDC' => '256')), 228 => array('UA' => array('Name' => 'Ukraine', 'Alpha2' => 'UA', 'Alpha3' => 'UKR', 'IDC' => '380')), 229 => array('AE' => array('Name' => 'United Arab Emirates', 'Alpha2' => 'AE', 'Alpha3' => 'ARE', 'IDC' => '971')), 230 => array('GB' => array('Name' => 'United Kingdom', 'Alpha2' => 'GB', 'Alpha3' => 'GBR', 'IDC' => '44')), 231 => array('UM' => array('Name' => 'United States Minor Outlying Islands', 'Alpha2' => 'UM', 'Alpha3' => 'UMI', 'IDC' => '1')), 232 => array('US' => array('Name' => 'United States of America', 'Alpha2' => 'US', 'Alpha3' => 'USA', 'IDC' => '1')), 233 => array('UY' => array('Name' => 'Uruguay', 'Alpha2' => 'UY', 'Alpha3' => 'URY', 'IDC' => '598')), 234 => array('UZ' => array('Name' => 'Uzbekistan', 'Alpha2' => 'UZ', 'Alpha3' => 'UZB', 'IDC' => '998')), 235 => array('VU' => array('Name' => 'Vanuatu', 'Alpha2' => 'VU', 'Alpha3' => 'VUT', 'IDC' => '678')), 236 => array('VA' => array('Name' => 'Holy See (Vatican City State)', 'Alpha2' => 'VA', 'Alpha3' => 'VAT', 'IDC' => '3906')), 237 => array('VE' => array('Name' => 'Venezuela', 'Alpha2' => 'VE', 'Alpha3' => 'VEN', 'IDC' => '58')), 238 => array('VN' => array('Name' => 'Viet Nam', 'Alpha2' => 'VN', 'Alpha3' => 'VNM', 'IDC' => '84')), 239 => array('VG' => array('Name' => 'Virgin Islands, British', 'Alpha2' => 'VG', 'Alpha3' => 'VGB', 'IDC' => '1284')), 240 => array('VI' => array('Name' => 'Virgin Islands, U.S.', 'Alpha2' => 'VI', 'Alpha3' => 'VIR', 'IDC' => '1340')), 241 => array('WF' => array('Name' => 'Wallis and Futuna', 'Alpha2' => 'WF', 'Alpha3' => 'WLF', 'IDC' => '681')), 242 => array('EH' => array('Name' => 'Western Sahara', 'Alpha2' => 'EH', 'Alpha3' => 'ESH', 'IDC' => '212')), 243 => array('YE' => array('Name' => 'Yemen', 'Alpha2' => 'YE', 'Alpha3' => 'YEM', 'IDC' => '967')), 244 => array('ZM' => array('Name' => 'Zambia', 'Alpha2' => 'ZM', 'Alpha3' => 'ZMB', 'IDC' => '260')), 245 => array('ZW' => array('Name' => 'Zimbabwe', 'Alpha2' => 'ZW', 'Alpha3' => 'ZWE', 'IDC' => '263'))));
    }
    protected function getEzpublish_Fieldtype_Ezcountry_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezcountry.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Country();
    }
    protected function getEzpublish_Fieldtype_EzdatetimeService()
    {
        return $this->services['ezpublish.fieldtype.ezdatetime'] = new \eZ\Publish\Core\FieldType\DateAndTime\Type();
    }
    protected function getEzpublish_Fieldtype_Ezdatetime_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezdatetime.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\DateAndTime();
    }
    protected function getEzpublish_Fieldtype_EzemailService()
    {
        return $this->services['ezpublish.fieldtype.ezemail'] = new \eZ\Publish\Core\FieldType\EmailAddress\Type();
    }
    protected function getEzpublish_Fieldtype_Ezemail_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezemail.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\EmailAddress();
    }
    protected function getEzpublish_Fieldtype_EzfloatService()
    {
        return $this->services['ezpublish.fieldtype.ezfloat'] = new \eZ\Publish\Core\FieldType\Float\Type();
    }
    protected function getEzpublish_Fieldtype_Ezfloat_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezfloat.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Float();
    }
    protected function getEzpublish_Fieldtype_EzgmaplocationService()
    {
        return $this->services['ezpublish.fieldtype.ezgmaplocation'] = new \eZ\Publish\Core\FieldType\MapLocation\Type();
    }
    protected function getEzpublish_Fieldtype_Ezgmaplocation_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezgmaplocation.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\TextLine();
    }
    protected function getEzpublish_Fieldtype_Ezgmaplocation_ExternalstorageService()
    {
        $this->services['ezpublish.fieldtype.ezgmaplocation.externalstorage'] = $instance = new \eZ\Publish\Core\FieldType\MapLocation\MapLocationStorage(array());
        $instance->addGateway('LegacyStorage', $this->get('ezpublish.fieldtype.externalstoragehandler.ezgmaplocation.gateway'));
        return $instance;
    }
    protected function getEzpublish_Fieldtype_EzimageService()
    {
        return $this->services['ezpublish.fieldtype.ezimage'] = new \eZ\Publish\Core\FieldType\TextLine\Type();
    }
    protected function getEzpublish_Fieldtype_Ezimage_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezimage.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\TextLine();
    }
    protected function getEzpublish_Fieldtype_EzintegerService()
    {
        return $this->services['ezpublish.fieldtype.ezinteger'] = new \eZ\Publish\Core\FieldType\Integer\Type();
    }
    protected function getEzpublish_Fieldtype_Ezinteger_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezinteger.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Integer();
    }
    protected function getEzpublish_Fieldtype_EzkeywordService()
    {
        return $this->services['ezpublish.fieldtype.ezkeyword'] = new \eZ\Publish\Core\FieldType\Keyword\Type();
    }
    protected function getEzpublish_Fieldtype_Ezkeyword_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezkeyword.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Keyword();
    }
    protected function getEzpublish_Fieldtype_Ezkeyword_ExternalstorageService()
    {
        $this->services['ezpublish.fieldtype.ezkeyword.externalstorage'] = $instance = new \eZ\Publish\Core\FieldType\Keyword\KeywordStorage(array());
        $instance->addGateway('LegacyStorage', $this->get('ezpublish.fieldtype.ezkeyword.storage_gateway'));
        return $instance;
    }
    protected function getEzpublish_Fieldtype_Ezkeyword_StorageGatewayService()
    {
        return $this->services['ezpublish.fieldtype.ezkeyword.storage_gateway'] = new \eZ\Publish\Core\FieldType\Keyword\KeywordStorage\Gateway\LegacyStorage();
    }
    protected function getEzpublish_Fieldtype_EzmediaService()
    {
        return $this->services['ezpublish.fieldtype.ezmedia'] = new \eZ\Publish\Core\FieldType\Media\Type();
    }
    protected function getEzpublish_Fieldtype_Ezmedia_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezmedia.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Media();
    }
    protected function getEzpublish_Fieldtype_Ezmedia_ExternalstorageService()
    {
        $this->services['ezpublish.fieldtype.ezmedia.externalstorage'] = $instance = new \eZ\Publish\Core\FieldType\Media\MediaStorage();
        $instance->addGateway('LegacyStorage', $this->get('ezpublish.fieldtype.ezmedia.storage_gateway'));
        return $instance;
    }
    protected function getEzpublish_Fieldtype_Ezmedia_StorageGatewayService()
    {
        return $this->services['ezpublish.fieldtype.ezmedia.storage_gateway'] = new \eZ\Publish\Core\FieldType\Media\MediaStorage\Gateway\LegacyStorage();
    }
    protected function getEzpublish_Fieldtype_EzobjectrelationlistService()
    {
        return $this->services['ezpublish.fieldtype.ezobjectrelationlist'] = new \eZ\Publish\Core\FieldType\TextLine\Type();
    }
    protected function getEzpublish_Fieldtype_Ezobjectrelationlist_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezobjectrelationlist.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\TextLine();
    }
    protected function getEzpublish_Fieldtype_EzpageService()
    {
        return $this->services['ezpublish.fieldtype.ezpage'] = new \eZ\Publish\Core\FieldType\Page\Type($this->get('ezpublish.fieldtype.ezpage.pageservice'));
    }
    protected function getEzpublish_Fieldtype_Ezpage_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezpage.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Page($this->get('ezpublish.fieldtype.ezpage.pageservice'));
    }
    protected function getEzpublish_Fieldtype_Ezpage_PageserviceService()
    {
        return $this->services['ezpublish.fieldtype.ezpage.pageservice'] = new \eZ\Publish\Core\FieldType\Page\Service(array('globalZoneLayout' => array('zoneTypeName' => 'Global zone layout', 'zones' => array('main' => array('name' => 'Global zone')), 'zoneThumbnail' => 'globalzone_layout.gif', 'template' => 'globalzonelayout.tpl', 'availableForClasses' => array(0 => 'global_layout')), '2zonesLayout1' => array('zoneTypeName' => '2 zones (layout 1)', 'zones' => array('left' => array('name' => 'Left zone'), 'right' => array('name' => 'Right zone')), 'zoneThumbnail' => '2zones_layout1.gif', 'template' => '2zoneslayout1.tpl', 'availableForClasses' => array(0 => 'frontpage')), '2zonesLayout2' => array('zoneTypeName' => '2 zones (layout 2)', 'zones' => array('left' => array('name' => 'Left zone'), 'right' => array('name' => 'Right zone')), 'zoneThumbnail' => '2zones_layout2.gif', 'template' => '2zoneslayout2.tpl', 'availableForClasses' => array(0 => 'frontpage')), '3zonesLayout1' => array('zoneTypeName' => '3 zones (layout 1)', 'zones' => array('left' => array('name' => 'Left zone'), 'right' => array('name' => 'Right zone'), 'bottom' => array('name' => 'Bottom zone')), 'zoneThumbnail' => '3zones_layout1.gif', 'template' => '3zoneslayout1.tpl', 'availableForClasses' => array(0 => 'frontpage')), '3zonesLayout2' => array('zoneTypeName' => '3 zones (layout 2)', 'zones' => array('left' => array('name' => 'Left zone'), 'right' => array('name' => 'Right zone'), 'bottom' => array('name' => 'Bottom zone')), 'zoneThumbnail' => '3zones_layout2.gif', 'template' => '3zoneslayout2.tpl', 'availableForClasses' => array(0 => 'frontpage')), '4zonesLayout1' => array('zoneTypeName' => '4 zones (layout 1)', 'zones' => array('left' => array('name' => 'Left zone'), 'right' => array('name' => 'Right zone'), 'bottomleft' => array('name' => 'Bottom left zone'), 'bottomright' => array('name' => 'Bottom right zone')), 'zoneThumbnail' => '4zones_layout1.gif', 'template' => '4zoneslayout1.tpl', 'availableForClasses' => array(0 => 'frontpage'))), array('campaign' => array('name' => 'Campaign', 'numberOfValidItems' => 5, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default'))), 'mainStory' => array('name' => 'Main story', 'numberOfValidItems' => 1, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default'), 'highligted' => array('name' => 'Highligted'))), 'contentGrid' => array('name' => 'Content Grid', 'numberOfValidItems' => 8, 'numberOfArchivedItems' => 8, 'nanualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default'), '1column4rows' => array('name' => '1 column 4 rows'), '2columns2rows' => array('name' => '2 columns 2 rows'), '3columns1row' => array('name' => '3 columns 1 row'), '3columns2rows' => array('name' => '3 columns 2 rows'), '4columns1row' => array('name' => '4 columns 1 row'), '4columns2rows' => array('name' => '4 columns 2 rows'))), 'gallery' => array('name' => 'Gallery', 'numberOfValidItems' => 8, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('Name' => 'Default'))), 'banner' => array('name' => 'Banner', 'numberOfValidItems' => 1, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'disabled', 'views' => array('default' => array('name' => 'URL'), 'code' => array('name' => 'Code'))), 'video' => array('name' => 'Video', 'numberOfValidItems' => 1, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default'))), 'tagCloud' => array('name' => 'Tag cloud', 'manualAddingOfItems' => 'disabled', 'customAttributes' => array('subtreeNodeId' => array('useBrowseMode' => true)), 'views' => array('default' => array('name' => 'Default'))), 'poll' => array('name' => 'Poll', 'manualAddingOfItems' => 'disabled', 'customAttributes' => array('pollNodeId' => array('useBrowseMode' => true)), 'views' => array('default' => array('name' => 'Default'))), 'itemList' => array('name' => 'Item list', 'numberOfValidItems' => 12, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default'))), 'feedReader' => array('Name' => 'Feed reader', 'manualAddingOfItems' => 'disabled', 'customAttributes' => array('source' => array(), 'limit' => array(), 'offset' => array()), 'views' => array('default' => array('name' => 'Default'))), 'feedbackForm' => array('Name' => 'Feedback Form', 'numberOfValidItems' => 1, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default'))), 'highlightedItem' => array('name' => 'Highlighted Item', 'numberOfValidItems' => 1, 'numberOfArchivedItems' => 5, 'manualAddingOfItems' => 'enabled', 'views' => array('default' => array('name' => 'Default')))));
    }
    protected function getEzpublish_Fieldtype_EzselectionService()
    {
        return $this->services['ezpublish.fieldtype.ezselection'] = new \eZ\Publish\Core\FieldType\Selection\Type();
    }
    protected function getEzpublish_Fieldtype_Ezselection_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezselection.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Selection();
    }
    protected function getEzpublish_Fieldtype_EzsrratingService()
    {
        return $this->services['ezpublish.fieldtype.ezsrrating'] = new \eZ\Publish\Core\FieldType\Rating\Type();
    }
    protected function getEzpublish_Fieldtype_Ezsrrating_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezsrrating.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating();
    }
    protected function getEzpublish_Fieldtype_EzstringService()
    {
        return $this->services['ezpublish.fieldtype.ezstring'] = new \eZ\Publish\Core\FieldType\TextLine\Type();
    }
    protected function getEzpublish_Fieldtype_Ezstring_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezstring.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\TextLine();
    }
    protected function getEzpublish_Fieldtype_EztextService()
    {
        return $this->services['ezpublish.fieldtype.eztext'] = new \eZ\Publish\Core\FieldType\TextBlock\Type();
    }
    protected function getEzpublish_Fieldtype_Eztext_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.eztext.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\TextBlock();
    }
    protected function getEzpublish_Fieldtype_EzurlService()
    {
        return $this->services['ezpublish.fieldtype.ezurl'] = new \eZ\Publish\Core\FieldType\Url\Type();
    }
    protected function getEzpublish_Fieldtype_Ezurl_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezurl.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Null();
    }
    protected function getEzpublish_Fieldtype_Ezurl_ExternalstorageService()
    {
        $this->services['ezpublish.fieldtype.ezurl.externalstorage'] = $instance = new \eZ\Publish\Core\FieldType\Url\UrlStorage(array());
        $instance->addGateway('LegacyStorage', $this->get('ezpublish.fieldtype.ezurl.storage_gateway'));
        return $instance;
    }
    protected function getEzpublish_Fieldtype_Ezurl_StorageGatewayService()
    {
        return $this->services['ezpublish.fieldtype.ezurl.storage_gateway'] = new \eZ\Publish\Core\FieldType\Url\UrlStorage\Gateway\LegacyStorage();
    }
    protected function getEzpublish_Fieldtype_EzuserService()
    {
        return $this->services['ezpublish.fieldtype.ezuser'] = new \eZ\Publish\Core\FieldType\User\Type();
    }
    protected function getEzpublish_Fieldtype_Ezuser_ExternalstorageService()
    {
        $this->services['ezpublish.fieldtype.ezuser.externalstorage'] = $instance = new \eZ\Publish\Core\FieldType\User\UserStorage(array());
        $instance->addGateway('LegacyStorage', $this->get('ezpublish.fieldtype.ezuser.storage_gateway'));
        return $instance;
    }
    protected function getEzpublish_Fieldtype_Ezuser_StorageGatewayService()
    {
        return $this->services['ezpublish.fieldtype.ezuser.storage_gateway'] = new \eZ\Publish\Core\FieldType\User\UserStorage\Gateway\LegacyStorage();
    }
    protected function getEzpublish_Fieldtype_EzxmltextService()
    {
        return $this->services['ezpublish.fieldtype.ezxmltext'] = new \eZ\Publish\Core\FieldType\XmlText\Type();
    }
    protected function getEzpublish_Fieldtype_Ezxmltext_ConverterService()
    {
        return $this->services['ezpublish.fieldtype.ezxmltext.converter'] = new \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\XmlText();
    }
    protected function getEzpublish_Fieldtype_Ezxmltext_Converter_Embedtohtml5Service()
    {
        return $this->services['ezpublish.fieldtype.ezxmltext.converter.embedtohtml5'] = new \eZ\Publish\Core\FieldType\XmlText\Converter\Output\EmbedToHtml5($this->get('ezpublish.view_manager'), $this->get('ezpublish.api.repository'));
    }
    protected function getEzpublish_Fieldtype_Ezxmltext_Converter_Html5Service()
    {
        return $this->services['ezpublish.fieldtype.ezxmltext.converter.html5'] = new \eZ\Publish\Core\FieldType\XmlText\Converter\Output\Html5('/var/www/ezpublish/app/../vendor/ezsystems/ezpublish/eZ/Bundle/EzPublishCoreBundle/Resources/stylesheets/eZXml2Html5.xsl', array(0 => $this->get('ezpublish.fieldtype.ezxmltext.converter.embedtohtml5')));
    }
    protected function getEzpublish_LocationViewProvider_ConfiguredService()
    {
        return $this->services['ezpublish.location_view_provider.configured'] = new \eZ\Bundle\EzPublishCoreBundle\View\Provider\Location\Configured($this->get('ezpublish.config.resolver.chain'), $this->get('ezpublish.api.repository'), $this);
    }
    protected function getEzpublish_RequestRedirectListenerService()
    {
        return $this->services['ezpublish.request_redirect_listener'] = new \eZ\Bundle\EzPublishCoreBundle\EventListener\RequestEventListener($this->get('http_kernel'), NULL);
    }
    protected function getEzpublish_Security_AuthenticationProvider_Basic_EzpublishRestService()
    {
        return $this->services['ezpublish.security.authentication_provider.basic.ezpublish_rest'] = new \eZ\Publish\Core\MVC\Symfony\Security\Authentication\BasicAuthProvider($this->get('ezpublish.api.repository.lazy'), $this->get('security.user_checker'), 'ezpublish_rest', true);
    }
    protected function getEzpublish_Security_UserProviderService()
    {
        return $this->services['ezpublish.security.user_provider'] = new \eZ\Publish\Core\MVC\Symfony\Security\User\Provider($this->get('ezpublish.api.repository.lazy'));
    }
    protected function getEzpublish_SessionSetDynamicNameListenerService()
    {
        return $this->services['ezpublish.session_set_dynamic_name_listener'] = new \eZ\Bundle\EzPublishCoreBundle\EventListener\SessionSetDynamicNameListener($this);
    }
    protected function getEzpublish_SiteaccessService()
    {
        throw new RuntimeException('You have requested a synthetic service ("ezpublish.siteaccess"). The DIC does not know how to construct this service.');
    }
    protected function getEzpublish_SiteaccessListenerService()
    {
        return $this->services['ezpublish.siteaccess_listener'] = new \eZ\Bundle\EzPublishCoreBundle\EventListener\SiteAccessListener($this);
    }
    protected function getEzpublish_SiteaccessMatchListenerService()
    {
        return $this->services['ezpublish.siteaccess_match_listener'] = new \eZ\Publish\Core\MVC\Symfony\EventListener\SiteAccessMatchListener($this->get('ezpublish.siteaccess_router'), $this->get('event_dispatcher'));
    }
    protected function getEzpublish_SiteaccessRouterService()
    {
        return $this->services['ezpublish.siteaccess_router'] = new \eZ\Publish\Core\MVC\Symfony\SiteAccess\Router('ezdemo_site', array('Map\\URI' => array('ezdemo_site' => 'ezdemo_site', 'ezdemo_site_admin' => 'ezdemo_site_admin'), 'Map\\Host' => array('ezpublish.dev' => 'ezdemo_site', 'admin.ezpublish.dev' => 'ezdemo_site_admin')), 'eZ\\Bundle\\EzPublishCoreBundle\\SiteAccess');
    }
    protected function getEzpublish_Twig_Extension_ContentService()
    {
        return $this->services['ezpublish.twig.extension.content'] = new \eZ\Publish\Core\MVC\Symfony\Templating\Twig\Extension\ContentExtension($this, $this->get('ezpublish.config.resolver.chain'));
    }
    protected function getEzpublish_UrlaliasGeneratorService()
    {
        $this->services['ezpublish.urlalias_generator'] = $instance = new \eZ\Publish\Core\MVC\Symfony\Routing\Generator\UrlAliasGenerator($this->get('ezpublish.api.repository.lazy'), $this->get('ezpublish.chain_router'));
        $instance->setRequestContext($this->get('router.request_context'));
        return $instance;
    }
    protected function getEzpublish_UrlaliasRouterService()
    {
        $this->services['ezpublish.urlalias_router'] = $instance = new \eZ\Bundle\EzPublishCoreBundle\Routing\UrlAliasRouter($this->get('ezpublish.api.repository.lazy'), $this->get('ezpublish.urlalias_generator'), array(0 => 'eng-GB'), $this->get('router.request_context'), NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getEzpublish_ViewManagerService()
    {
        $this->services['ezpublish.view_manager'] = $instance = new \eZ\Publish\Core\MVC\Symfony\View\Manager($this->get('templating'), $this->get('event_dispatcher'), $this->get('ezpublish.api.repository'), 'EzPublishCoreBundle::viewbase_layout.html.twig', NULL);
        $instance->addContentViewProvider($this->get('ezpublish.content_view_provider.configured'), 10);
        $instance->addContentViewProvider($this->get('ezpublish_legacy.content_view_provider'), -255);
        $instance->addLocationViewProvider($this->get('ezpublish.location_view_provider.configured'), 10);
        $instance->addLocationViewProvider($this->get('ezpublish_legacy.location_view_provider'), -255);
        return $instance;
    }
    protected function getEzpublishLegacy_Config_ResolverService()
    {
        return $this->services['ezpublish_legacy.config.resolver'] = new \eZ\Bundle\EzPublishLegacyBundle\DependencyInjection\Configuration\LegacyConfigResolver($this->get('ezpublish_legacy.kernel.lazy'), 'site');
    }
    protected function getEzpublishLegacy_ContentExceptionHandlerService()
    {
        return $this->services['ezpublish_legacy.content_exception_handler'] = new \eZ\Publish\Core\MVC\Legacy\EventListener\APIContentExceptionListener($this->get('ezpublish_legacy.content_view_provider'), $this->get('ezpublish_legacy.location_view_provider'), NULL);
    }
    protected function getEzpublishLegacy_ContentViewProviderService()
    {
        return $this->services['ezpublish_legacy.content_view_provider'] = new \eZ\Publish\Core\MVC\Legacy\View\Provider\Content($this->get('ezpublish_legacy.kernel.lazy'), $this->get('ezpublish_legacy.view_decorator.twig'), NULL);
    }
    protected function getEzpublishLegacy_ControllerService()
    {
        return $this->services['ezpublish_legacy.controller'] = new \eZ\Bundle\EzPublishLegacyBundle\Controller\LegacyKernelController($this->get('ezpublish_legacy.kernel.lazy'), $this->get('templating'));
    }
    protected function getEzpublishLegacy_Kernel_LazyService()
    {
        return $this->services['ezpublish_legacy.kernel.lazy'] = $this->get('ezpublish_legacy.kernel.lazy_loader')->buildLegacyKernel($this->get('ezpublish_legacy.kernel_handler.web'));
    }
    protected function getEzpublishLegacy_Kernel_LazyLoaderService()
    {
        return $this->services['ezpublish_legacy.kernel.lazy_loader'] = new \eZ\Publish\Core\MVC\Legacy\Kernel\Loader('/var/www/ezpublish/app/ezpublish_legacy', '/var/www/ezpublish/app/../web', NULL);
    }
    protected function getEzpublishLegacy_KernelHandler_TreemenuService()
    {
        return $this->services['ezpublish_legacy.kernel_handler.treemenu'] = $this->get('ezpublish_legacy.kernel.lazy_loader')->buildLegacyKernelHandlerTreeMenu($this);
    }
    protected function getEzpublishLegacy_KernelHandler_WebService()
    {
        return $this->services['ezpublish_legacy.kernel_handler.web'] = $this->get('ezpublish_legacy.kernel.lazy_loader')->buildLegacyKernelHandlerWeb($this, 'ezpKernelWeb');
    }
    protected function getEzpublishLegacy_LocationViewProviderService()
    {
        return $this->services['ezpublish_legacy.location_view_provider'] = new \eZ\Publish\Core\MVC\Legacy\View\Provider\Location($this->get('ezpublish_legacy.kernel.lazy'), $this->get('ezpublish_legacy.view_decorator.twig'), NULL);
    }
    protected function getEzpublishLegacy_RouterService()
    {
        return $this->services['ezpublish_legacy.router'] = new \eZ\Bundle\EzPublishLegacyBundle\Routing\FallbackRouter($this, NULL, NULL);
    }
    protected function getEzpublishLegacy_Security_FirewallListener_EzpublishFrontService()
    {
        return $this->services['ezpublish_legacy.security.firewall_listener.ezpublish_front'] = new \eZ\Publish\Core\MVC\Legacy\Security\Firewall\LegacyListener($this->get('security.context'), $this->get('security.authentication.manager'), 'ezpublish_front', NULL);
    }
    protected function getEzpublishLegacy_SessionMapperService()
    {
        return $this->services['ezpublish_legacy.session_mapper'] = new \eZ\Bundle\EzPublishLegacyBundle\LegacyMapper\Session($this);
    }
    protected function getEzpublishLegacy_SiteaccessMapperService()
    {
        return $this->services['ezpublish_legacy.siteaccess_mapper'] = new \eZ\Bundle\EzPublishLegacyBundle\LegacyMapper\SiteAccess($this);
    }
    protected function getEzpublishLegacy_Templating_ApiContentConverterService()
    {
        return $this->services['ezpublish_legacy.templating.api_content_converter'] = new \eZ\Publish\Core\MVC\Legacy\Templating\Converter\ApiContentConverter($this->get('ezpublish_legacy.kernel.lazy'));
    }
    protected function getEzpublishLegacy_Templating_DelegatingConverterService()
    {
        $a = $this->get('ezpublish_legacy.templating.api_content_converter');
        $this->services['ezpublish_legacy.templating.delegating_converter'] = $instance = new \eZ\Publish\Core\MVC\Legacy\Templating\Converter\DelegatingConverter($this->get('ezpublish_legacy.templating.generic_converter'));
        $instance->addConverter($a, 'eZ\\Publish\\Core\\Repository\\Values\\Content\\Content');
        $instance->addConverter($a, 'eZ\\Publish\\Core\\Repository\\Values\\Content\\Location');
        return $instance;
    }
    protected function getEzpublishLegacy_Templating_GenericConverterService()
    {
        return $this->services['ezpublish_legacy.templating.generic_converter'] = new \eZ\Publish\Core\MVC\Legacy\Templating\Converter\GenericConverter();
    }
    protected function getEzpublishLegacy_Treemenu_ControllerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ezpublish_legacy.treemenu.controller', 'request');
        }
        $this->services['ezpublish_legacy.treemenu.controller'] = $this->scopedServices['request']['ezpublish_legacy.treemenu.controller'] = $instance = new \eZ\Bundle\EzPublishLegacyBundle\Controller\LegacyTreeMenuController($this->get('ezpublish_legacy.kernel_handler.treemenu'), $this->get('ezpublish_legacy.kernel.lazy_loader'), array());
        $instance->setContainer($this);
        return $instance;
    }
    protected function getEzpublishLegacy_Twig_ExtensionService()
    {
        return $this->services['ezpublish_legacy.twig.extension'] = new \eZ\Publish\Core\MVC\Legacy\Templating\Twig\Extension\LegacyExtension($this->get('ezpublish_legacy.kernel.lazy'), $this->get('ezpublish_legacy.templating.delegating_converter'));
    }
    protected function getEzpublishLegacy_UrlGeneratorService()
    {
        $this->services['ezpublish_legacy.url_generator'] = $instance = new \eZ\Bundle\EzPublishLegacyBundle\Routing\UrlGenerator($this->get('ezpublish_legacy.kernel.lazy'));
        $instance->setRequestContext($this->get('router.request_context'));
        return $instance;
    }
    protected function getEzpublishLegacy_ViewDecorator_TwigService()
    {
        return $this->services['ezpublish_legacy.view_decorator.twig'] = new \eZ\Publish\Core\MVC\Legacy\View\TwigContentViewLayoutDecorator($this->get('twig'), array('layout' => 'eZDemoBundle::pagelayout.html.twig', 'viewbaseLayout' => 'EzPublishCoreBundle::viewbase_layout.html.twig', 'contentBlockName' => 'content'));
    }
    protected function getEzpublishRest_Controller_ContentService()
    {
        $this->services['ezpublish_rest.controller.content'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\Content($this->get('ezpublish.api.service.content'), $this->get('ezpublish.api.service.location'), $this->get('ezpublish.api.service.section'), $this->get('ezpublish.api.service.search'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_ContentTypeService()
    {
        $this->services['ezpublish_rest.controller.content_type'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\ContentType($this->get('ezpublish.api.service.content_type'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_LocationService()
    {
        $this->services['ezpublish_rest.controller.location'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\Location($this->get('ezpublish.api.service.location'), $this->get('ezpublish.api.service.content'), $this->get('ezpublish.api.service.trash'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_ObjectStateService()
    {
        $this->services['ezpublish_rest.controller.object_state'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\ObjectState($this->get('ezpublish.api.service.object_state'), $this->get('ezpublish.api.service.content'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_RoleService()
    {
        $this->services['ezpublish_rest.controller.role'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\Role($this->get('ezpublish.api.service.role'), $this->get('ezpublish.api.service.user'), $this->get('ezpublish.api.service.location'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_RootService()
    {
        $this->services['ezpublish_rest.controller.root'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\Root();
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_SectionService()
    {
        $this->services['ezpublish_rest.controller.section'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\Section($this->get('ezpublish.api.service.section'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_TrashService()
    {
        $this->services['ezpublish_rest.controller.trash'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\Trash($this->get('ezpublish.api.service.trash'), $this->get('ezpublish.api.service.location'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_UrlWildcardService()
    {
        $this->services['ezpublish_rest.controller.url_wildcard'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\URLWildcard($this->get('ezpublish.api.service.url_wildcard'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_Controller_UserService()
    {
        $this->services['ezpublish_rest.controller.user'] = $instance = new \eZ\Publish\Core\REST\Server\Controller\User($this->get('ezpublish.api.service.user'), $this->get('ezpublish.api.service.role'), $this->get('ezpublish.api.service.content'), $this->get('ezpublish.api.service.location'), $this->get('ezpublish.api.service.section'), $this->get('ezpublish.api.repository'));
        $instance->setInputDispatcher($this->get('ezpublish_rest.input_dispatcher'));
        $instance->setUrlHandler($this->get('ezpublish_rest.url_handler'));
        $instance->setRequest($this->get('ezpublish_rest.request'));
        return $instance;
    }
    protected function getEzpublishRest_FactoryService()
    {
        return $this->services['ezpublish_rest.factory'] = new \eZ\Bundle\EzPublishRestBundle\ApiLoader\Factory($this, $this->get('ezpublish.api.repository'));
    }
    protected function getEzpublishRest_FieldTypeParserService()
    {
        return $this->services['ezpublish_rest.field_type_parser'] = new \eZ\Publish\Core\REST\Common\Input\FieldTypeParser($this->get('ezpublish.api.service.content'), $this->get('ezpublish.api.service.content_type'), $this->get('ezpublish.api.service.field_type'), $this->get('ezpublish_rest.field_type_processor_registry'));
    }
    protected function getEzpublishRest_FieldTypeProcessorRegistryService()
    {
        return $this->services['ezpublish_rest.field_type_processor_registry'] = $this->get('ezpublish_rest.factory')->buildFieldTypeProcessorRegistry();
    }
    protected function getEzpublishRest_FieldTypeSerializerService()
    {
        return $this->services['ezpublish_rest.field_type_serializer'] = new \eZ\Publish\Core\REST\Common\Output\FieldTypeSerializer($this->get('ezpublish.api.service.field_type'), $this->get('ezpublish_rest.field_type_processor_registry'));
    }
    protected function getEzpublishRest_InputDispatcherService()
    {
        return $this->services['ezpublish_rest.input_dispatcher'] = $this->get('ezpublish_rest.factory')->buildInputDispatcher();
    }
    protected function getEzpublishRest_ListenerService()
    {
        return $this->services['ezpublish_rest.listener'] = new \eZ\Bundle\EzPublishRestBundle\EventListener\RestListener($this, $this->get('ezpublish_rest.request'));
    }
    protected function getEzpublishRest_ParserToolsService()
    {
        return $this->services['ezpublish_rest.parser_tools'] = new \eZ\Publish\Core\REST\Common\Input\ParserTools();
    }
    protected function getEzpublishRest_RequestService()
    {
        return $this->services['ezpublish_rest.request'] = new \eZ\Publish\Core\REST\Server\Request();
    }
    protected function getEzpublishRest_ResponseVisitorDispatcherService()
    {
        return $this->services['ezpublish_rest.response_visitor_dispatcher'] = $this->get('ezpublish_rest.factory')->buildResponseVisitorDispatcher($this->get('ezpublish_rest.url_handler'), $this->get('ezpublish_rest.field_type_serializer'), $this->get('ezpublish.api.repository'));
    }
    protected function getEzpublishRest_UrlHandlerService()
    {
        return $this->services['ezpublish_rest.url_handler'] = new \eZ\Publish\Core\REST\Common\UrlHandler\Prefixed('/api/ezp/v2');
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/var/www/ezpublish/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator'), 'repeated' => array(0 => 'form.type_extension.repeated.validator')), array(0 => 'form.type_guesser.validator'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType();
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType();
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), NULL));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('ezpublish.chain_router'));
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('ezpublish.chain_router'), $this->get('router.request_context'), NULL);
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), NULL, $b);
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.ezpublish_rest' => new \Symfony\Component\HttpFoundation\RequestMatcher('/api/ezp/v2'), 'security.firewall.map.context.ezpublish_front' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_EzpublishFrontService()
    {
        $a = $this->get('security.context');
        return $this->services['security.firewall.map.context.ezpublish_front'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('ezpublish.security.user_provider')), 'ezpublish_front', NULL, $this->get('event_dispatcher')), 2 => $this->get('ezpublish_legacy.security.firewall_listener.ezpublish_front'), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'ezpublish_front', NULL, NULL, NULL, NULL));
    }
    protected function getSecurity_Firewall_Map_Context_EzpublishRestService()
    {
        $a = $this->get('security.context');
        $b = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('eZ Publish REST API');
        return $this->services['security.firewall.map.context.ezpublish_rest'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener($a, $this->get('security.authentication.manager'), 'ezpublish_rest', $b, NULL), 2 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'ezpublish_rest', $b, NULL, NULL, NULL));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraint\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), $this->get('session.attribute_bag'), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_AttributeBagService()
    {
        return $this->services['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag('_ezpublish');
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/var/www/ezpublish/app/cache/prod/sessions');
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/var/www/ezpublish/app/cache/prod/sessions');
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('name' => 'eZSESSID{siteaccess_hash}'), $this->get('session.handler'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('templating.globals'));
        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/var/www/ezpublish/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), NULL));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('ezpublish.chain_router'));
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('ezpublish.chain_router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtTranslationsLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator($this->get('translator.selector'));
    }
    protected function getTranslator_DefaultService()
    {
        return $this->services['translator.default'] = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => '/var/www/ezpublish/app/cache/prod/translations', 'debug' => false));
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader.chain'), array('exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', 'cache' => '/var/www/ezpublish/app/cache/prod/twig', 'charset' => 'UTF-8', 'debug' => false, 'paths' => array()));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\CodeExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('ezpublish.chain_router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig')), NULL)));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'AsseticBundle', 4 => 'SensioGeneratorBundle', 5 => 'EzPublishCoreBundle', 6 => 'EzPublishLegacyBundle', 7 => 'eZDemoBundle', 8 => 'EzPublishRestBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension($this->get('ezpublish.twig.extension.content'));
        $instance->addExtension($this->get('ezpublish_legacy.twig.extension'));
        return $instance;
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', NULL);
    }
    protected function getTwig_Loader_ChainService()
    {
        $this->services['twig.loader.chain'] = $instance = new \Twig_Loader_Chain();
        $instance->addLoader($this->get('twig.loader.filesystem'));
        $instance->addLoader($this->get('twig.loader.string'));
        return $instance;
    }
    protected function getTwig_Loader_FilesystemService()
    {
        return $this->services['twig.loader.filesystem'] = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
    }
    protected function getTwig_Loader_StringService()
    {
        return $this->services['twig.loader.string'] = new \Twig_Loader_String();
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('security.validator.user_password' => 'security.validator.user_password')), array());
    }
    protected function getEzContentService()
    {
        return $this->get('ezpublish.controller.content.view');
    }
    protected function getEzpublish_Config_ResolverService()
    {
        return $this->get('ezpublish.config.resolver.chain');
    }
    protected function getEzpublishLegacy_KernelService()
    {
        return $this->get('ezpublish_legacy.kernel.lazy');
    }
    protected function getEzpublishLegacy_KernelHandlerService()
    {
        return $this->get('ezpublish_legacy.kernel_handler.web');
    }
    protected function getEzpublishLegacy_Templating_ObjectConverterService()
    {
        return $this->get('ezpublish_legacy.templating.delegating_converter');
    }
    protected function getEzpublishLegacy_ViewDecoratorService()
    {
        return $this->get('ezpublish_legacy.view_decorator.twig');
    }
    protected function getRouterService()
    {
        return $this->get('ezpublish.chain_router');
    }
    protected function getSession_StorageService()
    {
        return $this->get('session.storage.native');
    }
    protected function getTwig_LoaderService()
    {
        return $this->get('twig.loader.chain');
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/var/www/ezpublish/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \eZ\Publish\Core\MVC\Symfony\Security\Authorization\Voter\CoreVoter($this->get('ezpublish.api.repository.lazy')), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')))), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'), NULL);
    }
    protected function getSecurity_AccessMapService()
    {
        return $this->services['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = new \eZ\Publish\Core\MVC\Symfony\Security\Authentication\Provider($this->get('ezpublish.security.user_provider'), $this->get('security.user_checker'), 'ezpublish_front');
        $a->setLazyRepository($this->get('ezpublish.api.repository.lazy'));
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => $this->get('ezpublish.security.authentication_provider.basic.ezpublish_rest'), 1 => $a), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), NULL);
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('ezpublish.chain_router');
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/var/www/ezpublish/app/cache/prod');
    }
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/var/www/ezpublish/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!array_key_exists($name, $this->parameters)) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/var/www/ezpublish/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/var/www/ezpublish/app/cache/prod',
            'kernel.logs_dir' => '/var/www/ezpublish/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'EzPublishCoreBundle' => 'eZ\\Bundle\\EzPublishCoreBundle\\EzPublishCoreBundle',
                'EzPublishLegacyBundle' => 'eZ\\Bundle\\EzPublishLegacyBundle\\EzPublishLegacyBundle',
                'eZDemoBundle' => 'EzSystems\\DemoBundle\\EzSystemsDemoBundle',
                'EzPublishRestBundle' => 'eZ\\Bundle\\EzPublishRestBundle\\EzPublishRestBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'session_name' => 'eZSESSID{siteaccess_hash}',
            'ezpublish_legacy.view.default_layout' => 'eZDemoBundle::pagelayout.html.twig',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtTranslationsLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.trust_proxy_headers' => false,
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'name' => 'eZSESSID{siteaccess_hash}',
            ),
            'session.save_path' => '/var/www/ezpublish/app/cache/prod/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/var/www/ezpublish/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'esi.class' => 'Symfony\\Component\\HttpKernel\\HttpCache\\Esi',
            'esi_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\EsiListener',
            'router.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\Routing\\DefaultRouter',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appprodUrlMatcher',
            'router.options.generator.cache_class' => 'appprodUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.resource' => '/var/www/ezpublish/app/config/routing.yml',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.hinclude.default_template' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraint\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
                'cache' => '/var/www/ezpublish/app/cache/prod/twig',
                'charset' => 'UTF-8',
                'debug' => false,
                'paths' => array(
                ),
            ),
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => '/var/www/ezpublish/app/cache/prod/assetic',
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'AsseticBundle',
                4 => 'SensioGeneratorBundle',
                5 => 'EzPublishCoreBundle',
                6 => 'EzPublishLegacyBundle',
                7 => 'eZDemoBundle',
                8 => 'EzPublishRestBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/var/www/ezpublish/app/../web',
            'assetic.write_to' => '/var/www/ezpublish/app/../web',
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.less.class' => 'Assetic\\Filter\\LessFilter',
            'assetic.filter.less.node' => '/opt/local/bin/node',
            'assetic.filter.less.node_paths' => array(
                0 => '/opt/local/lib/node_modules',
            ),
            'assetic.filter.less.compress' => NULL,
            'assetic.twig_extension.functions' => array(
            ),
            'ezpublish.siteaccess.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\SiteAccess',
            'ezpublish.config.resolver.dynamic.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\DependencyInjection\\Configuration\\ConfigResolver',
            'ezpublish.config.resolver.chain.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\DependencyInjection\\Configuration\\ChainConfigResolver',
            'ezpublish.config.default_scope' => 'ezsettings',
            'ezpublish.controller.base.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Controller\\Controller',
            'ezpublish.controller.content.view.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Controller\\Content\\ViewController',
            'ezpublish.security.authentication_provider.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Security\\Authentication\\Provider',
            'ezpublish.security.user_provider.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Security\\User\\Provider',
            'ezpublish.security.voter.core.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Security\\Authorization\\Voter\\CoreVoter',
            'ezpublish.security.authentication_provider.basic.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Security\\Authentication\\BasicAuthProvider',
            'webroot_dir' => '/var/www/ezpublish/app/../web',
            'binaryfile_identifier_prefix' => NULL,
            'ezsettings.default.location_view' => array(
            ),
            'ezsettings.default.content_view' => array(
            ),
            'ezsettings.default.database.dsn' => NULL,
            'ezsettings.default.session_name' => 'eZSESSID{siteaccess_hash}',
            'ezsettings.default.url_alias_router' => true,
            'ezsettings.default.languages' => array(
                0 => 'eng-GB',
            ),
            'ezsettings.default.var_dir' => 'var',
            'ezsettings.default.storage_dir' => 'var/storage',
            'ezsettings.default.binary_dir' => 'var/storage/original',
            'ezsettings.default.content.view_cache' => true,
            'ezsettings.default.content.ttl_cache' => false,
            'ezsettings.default.content.default_ttl' => 60,
            'ezsettings.default.treemenu.http_cache' => true,
            'ezsettings.default.treemenu.ttl_cache' => 86400,
            'ezsettings.default.field_templates' => array(
                0 => array(
                    'template' => 'EzPublishCoreBundle::content_fields.html.twig',
                    'priority' => 0,
                ),
            ),
            'ezpublish.siteaccess.groups' => array(
                'ezdemo_group' => array(
                    0 => 'ezdemo_site',
                    1 => 'ezdemo_site_admin',
                ),
            ),
            'ezpublish.siteaccess.groups_by_siteaccess' => array(
                'ezdemo_site' => array(
                    0 => 'ezdemo_group',
                ),
                'ezdemo_site_admin' => array(
                    0 => 'ezdemo_group',
                ),
            ),
            'ezpublish.siteaccess.list' => array(
                0 => 'ezdemo_site',
                1 => 'ezdemo_site_admin',
            ),
            'ezpublish.siteaccess.default' => 'ezdemo_site',
            'ezpublish.siteaccess.match_config' => array(
                'Map\\URI' => array(
                    'ezdemo_site' => 'ezdemo_site',
                    'ezdemo_site_admin' => 'ezdemo_site_admin',
                ),
                'Map\\Host' => array(
                    'ezpublish.dev' => 'ezdemo_site',
                    'admin.ezpublish.dev' => 'ezdemo_site_admin',
                ),
            ),
            'ezpublish.chain_router.class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'ezpublish.url_generator.base.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Routing\\Generator',
            'ezpublish.urlalias_router.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\Routing\\UrlAliasRouter',
            'ezpublish.urlalias_generator.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Routing\\Generator\\UrlAliasGenerator',
            'ezpublish.siteaccess_router.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\SiteAccess\\Router',
            'ezpublish.siteaccess_listener.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\EventListener\\SiteAccessListener',
            'ezpublish.request_redirect_listener.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\EventListener\\RequestEventListener',
            'ezpublish.siteaccess_match_listener.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\EventListener\\SiteAccessMatchListener',
            'ezpublish.api.repository.factory.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\ApiLoader\\RepositoryFactory',
            'ezpublish.api.repository.class' => 'eZ\\Publish\\Core\\Repository\\Repository',
            'ezpublish.api.io_handler.class' => 'eZ\\Publish\\Core\\IO\\InMemoryHandler',
            'ezpublish.api.storage_engine.factory.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\ApiLoader\\StorageEngineFactory',
            'ezpublish.api.storage_engine.default' => 'legacy',
            'ezpublish.api.content.class' => 'eZ\\Publish\\Core\\Repository\\Values\\Content\\Content',
            'ezpublish.api.location.class' => 'eZ\\Publish\\Core\\Repository\\Values\\Content\\Location',
            'ezpublish.fieldtype.class' => 'eZ\\Publish\\Core\\FieldType\\FieldType',
            'ezpublish.fieldtype.ezauthor.class' => 'eZ\\Publish\\Core\\FieldType\\Author\\Type',
            'ezpublish.fieldtype.ezbinaryfile.class' => 'eZ\\Publish\\Core\\FieldType\\BinaryFile\\Type',
            'ezpublish.fieldtype.ezbinaryfile.externalstorage.class' => 'eZ\\Publish\\Core\\FieldType\\BinaryFile\\BinaryFileStorage',
            'ezpublish.fieldtype.ezbinaryfile.fileservice.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\ConfiguredLocalFileService',
            'ezpublish.fieldtype.ezbinaryfile.mimetypedetector.class' => 'eZ\\Publish\\Core\\FieldType\\BinaryBase\\MimeTypeDetector\\FileInfoDetector',
            'ezpublish.fieldtype.ezbinaryfile.pathgenerator.class' => 'eZ\\Publish\\Core\\FieldType\\BinaryBase\\PathGenerator\\LegacyPathGenerator',
            'ezpublish.fieldtype.ezboolean.class' => 'eZ\\Publish\\Core\\FieldType\\Checkbox\\Type',
            'ezpublish.fieldtype.ezdatetime.class' => 'eZ\\Publish\\Core\\FieldType\\DateAndTime\\Type',
            'ezpublish.fieldtype.ezemail.class' => 'eZ\\Publish\\Core\\FieldType\\EmailAddress\\Type',
            'ezpublish.fieldtype.ezfloat.class' => 'eZ\\Publish\\Core\\FieldType\\Float\\Type',
            'ezpublish.fieldtype.ezinteger.class' => 'eZ\\Publish\\Core\\FieldType\\Integer\\Type',
            'ezpublish.fieldtype.ezkeyword.class' => 'eZ\\Publish\\Core\\FieldType\\Keyword\\Type',
            'ezpublish.fieldtype.ezkeyword.externalstorage.class' => 'eZ\\Publish\\Core\\FieldType\\Keyword\\KeywordStorage',
            'ezpublish.fieldtype.ezmedia.class' => 'eZ\\Publish\\Core\\FieldType\\Media\\Type',
            'ezpublish.fieldtype.ezmedia.externalstorage.class' => 'eZ\\Publish\\Core\\FieldType\\Media\\MediaStorage',
            'ezpublish.fieldtype.ezsrrating.class' => 'eZ\\Publish\\Core\\FieldType\\Rating\\Type',
            'ezpublish.fieldtype.ezselection.class' => 'eZ\\Publish\\Core\\FieldType\\Selection\\Type',
            'ezpublish.fieldtype.eztext.class' => 'eZ\\Publish\\Core\\FieldType\\TextBlock\\Type',
            'ezpublish.fieldtype.ezstring.class' => 'eZ\\Publish\\Core\\FieldType\\TextLine\\Type',
            'ezpublish.fieldtype.ezurl.class' => 'eZ\\Publish\\Core\\FieldType\\Url\\Type',
            'ezpublish.fieldtype.ezurl.externalstorage.class' => 'eZ\\Publish\\Core\\FieldType\\Url\\UrlStorage',
            'ezpublish.fieldtype.ezxmltext.class' => 'eZ\\Publish\\Core\\FieldType\\XmlText\\Type',
            'ezpublish.fieldtype.ezxmltext.simplifiedinputparser.class' => 'eZ\\Publish\\Core\\FieldType\\XmlText\\Input\\Parser\\Simplified',
            'ezpublish.fieldtype.ezxmltext.xmlschema.class' => 'eZ\\Publish\\Core\\FieldType\\XmlText\\Schema',
            'ezpublish.fieldtype.ezxmltext.xmlschema.options' => array(
            ),
            'ezpublish.fieldtype.ezxmltext.converter.html5.class' => 'eZ\\Publish\\Core\\FieldType\\XmlText\\Converter\\Output\\Html5',
            'ezpublish.fieldtype.ezxmltext.converter.html5.resources' => '/var/www/ezpublish/app/../vendor/ezsystems/ezpublish/eZ/Bundle/EzPublishCoreBundle/Resources/stylesheets/eZXml2Html5.xsl',
            'ezpublish.fieldtype.ezxmltext.converter.embedtohtml5.class' => 'eZ\\Publish\\Core\\FieldType\\XmlText\\Converter\\Output\\EmbedToHtml5',
            'ezpublish.fieldtype.ezpage.class' => 'eZ\\Publish\\Core\\FieldType\\Page\\Type',
            'ezpublish.fieldtype.ezpage.pageservice.class' => 'eZ\\Publish\\Core\\FieldType\\Page\\Service',
            'ezpublish.fieldtype.ezpage.zonedefinition' => array(
                'globalZoneLayout' => array(
                    'zoneTypeName' => 'Global zone layout',
                    'zones' => array(
                        'main' => array(
                            'name' => 'Global zone',
                        ),
                    ),
                    'zoneThumbnail' => 'globalzone_layout.gif',
                    'template' => 'globalzonelayout.tpl',
                    'availableForClasses' => array(
                        0 => 'global_layout',
                    ),
                ),
                '2zonesLayout1' => array(
                    'zoneTypeName' => '2 zones (layout 1)',
                    'zones' => array(
                        'left' => array(
                            'name' => 'Left zone',
                        ),
                        'right' => array(
                            'name' => 'Right zone',
                        ),
                    ),
                    'zoneThumbnail' => '2zones_layout1.gif',
                    'template' => '2zoneslayout1.tpl',
                    'availableForClasses' => array(
                        0 => 'frontpage',
                    ),
                ),
                '2zonesLayout2' => array(
                    'zoneTypeName' => '2 zones (layout 2)',
                    'zones' => array(
                        'left' => array(
                            'name' => 'Left zone',
                        ),
                        'right' => array(
                            'name' => 'Right zone',
                        ),
                    ),
                    'zoneThumbnail' => '2zones_layout2.gif',
                    'template' => '2zoneslayout2.tpl',
                    'availableForClasses' => array(
                        0 => 'frontpage',
                    ),
                ),
                '3zonesLayout1' => array(
                    'zoneTypeName' => '3 zones (layout 1)',
                    'zones' => array(
                        'left' => array(
                            'name' => 'Left zone',
                        ),
                        'right' => array(
                            'name' => 'Right zone',
                        ),
                        'bottom' => array(
                            'name' => 'Bottom zone',
                        ),
                    ),
                    'zoneThumbnail' => '3zones_layout1.gif',
                    'template' => '3zoneslayout1.tpl',
                    'availableForClasses' => array(
                        0 => 'frontpage',
                    ),
                ),
                '3zonesLayout2' => array(
                    'zoneTypeName' => '3 zones (layout 2)',
                    'zones' => array(
                        'left' => array(
                            'name' => 'Left zone',
                        ),
                        'right' => array(
                            'name' => 'Right zone',
                        ),
                        'bottom' => array(
                            'name' => 'Bottom zone',
                        ),
                    ),
                    'zoneThumbnail' => '3zones_layout2.gif',
                    'template' => '3zoneslayout2.tpl',
                    'availableForClasses' => array(
                        0 => 'frontpage',
                    ),
                ),
                '4zonesLayout1' => array(
                    'zoneTypeName' => '4 zones (layout 1)',
                    'zones' => array(
                        'left' => array(
                            'name' => 'Left zone',
                        ),
                        'right' => array(
                            'name' => 'Right zone',
                        ),
                        'bottomleft' => array(
                            'name' => 'Bottom left zone',
                        ),
                        'bottomright' => array(
                            'name' => 'Bottom right zone',
                        ),
                    ),
                    'zoneThumbnail' => '4zones_layout1.gif',
                    'template' => '4zoneslayout1.tpl',
                    'availableForClasses' => array(
                        0 => 'frontpage',
                    ),
                ),
            ),
            'ezpublish.fieldtype.ezpage.blockdefinition' => array(
                'campaign' => array(
                    'name' => 'Campaign',
                    'numberOfValidItems' => 5,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'mainStory' => array(
                    'name' => 'Main story',
                    'numberOfValidItems' => 1,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                        'highligted' => array(
                            'name' => 'Highligted',
                        ),
                    ),
                ),
                'contentGrid' => array(
                    'name' => 'Content Grid',
                    'numberOfValidItems' => 8,
                    'numberOfArchivedItems' => 8,
                    'nanualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                        '1column4rows' => array(
                            'name' => '1 column 4 rows',
                        ),
                        '2columns2rows' => array(
                            'name' => '2 columns 2 rows',
                        ),
                        '3columns1row' => array(
                            'name' => '3 columns 1 row',
                        ),
                        '3columns2rows' => array(
                            'name' => '3 columns 2 rows',
                        ),
                        '4columns1row' => array(
                            'name' => '4 columns 1 row',
                        ),
                        '4columns2rows' => array(
                            'name' => '4 columns 2 rows',
                        ),
                    ),
                ),
                'gallery' => array(
                    'name' => 'Gallery',
                    'numberOfValidItems' => 8,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'Name' => 'Default',
                        ),
                    ),
                ),
                'banner' => array(
                    'name' => 'Banner',
                    'numberOfValidItems' => 1,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'disabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'URL',
                        ),
                        'code' => array(
                            'name' => 'Code',
                        ),
                    ),
                ),
                'video' => array(
                    'name' => 'Video',
                    'numberOfValidItems' => 1,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'tagCloud' => array(
                    'name' => 'Tag cloud',
                    'manualAddingOfItems' => 'disabled',
                    'customAttributes' => array(
                        'subtreeNodeId' => array(
                            'useBrowseMode' => true,
                        ),
                    ),
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'poll' => array(
                    'name' => 'Poll',
                    'manualAddingOfItems' => 'disabled',
                    'customAttributes' => array(
                        'pollNodeId' => array(
                            'useBrowseMode' => true,
                        ),
                    ),
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'itemList' => array(
                    'name' => 'Item list',
                    'numberOfValidItems' => 12,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'feedReader' => array(
                    'Name' => 'Feed reader',
                    'manualAddingOfItems' => 'disabled',
                    'customAttributes' => array(
                        'source' => array(
                        ),
                        'limit' => array(
                        ),
                        'offset' => array(
                        ),
                    ),
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'feedbackForm' => array(
                    'Name' => 'Feedback Form',
                    'numberOfValidItems' => 1,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
                'highlightedItem' => array(
                    'name' => 'Highlighted Item',
                    'numberOfValidItems' => 1,
                    'numberOfArchivedItems' => 5,
                    'manualAddingOfItems' => 'enabled',
                    'views' => array(
                        'default' => array(
                            'name' => 'Default',
                        ),
                    ),
                ),
            ),
            'ezpublish.fieldtype.ezimage.class' => 'eZ\\Publish\\Core\\FieldType\\TextLine\\Type',
            'ezpublish.fieldtype.ezgmaplocation.class' => 'eZ\\Publish\\Core\\FieldType\\MapLocation\\Type',
            'ezpublish.fieldtype.ezgmaplocation.externalstorage.class' => 'eZ\\Publish\\Core\\FieldType\\MapLocation\\MapLocationStorage',
            'ezpublish.fieldtype.ezcomcomments.class' => 'eZ\\Publish\\Core\\FieldType\\TextLine\\Type',
            'ezpublish.fieldtype.ezobjectrelationlist.class' => 'eZ\\Publish\\Core\\FieldType\\TextLine\\Type',
            'ezpublish.fieldtype.ezuser.class' => 'eZ\\Publish\\Core\\FieldType\\User\\Type',
            'ezpublish.fieldtype.ezuser.externalstorage.class' => 'eZ\\Publish\\Core\\FieldType\\User\\UserStorage',
            'ezpublish.fieldtype.ezcountry.class' => 'eZ\\Publish\\Core\\FieldType\\Country\\Type',
            'ezpublish.fieldtype.ezcountry.data' => array(
                0 => array(
                    'AF' => array(
                        'Name' => 'Afghanistan',
                        'Alpha2' => 'AF',
                        'Alpha3' => 'AFG',
                        'IDC' => '93',
                    ),
                ),
                1 => array(
                    'AX' => array(
                        'Name' => 'Åland',
                        'Alpha2' => 'AX',
                        'Alpha3' => 'ALA',
                        'IDC' => '358',
                    ),
                ),
                2 => array(
                    'AL' => array(
                        'Name' => 'Albania',
                        'Alpha2' => 'AL',
                        'Alpha3' => 'ALB',
                        'IDC' => '355',
                    ),
                ),
                3 => array(
                    'DZ' => array(
                        'Name' => 'Algeria',
                        'Alpha2' => 'DZ',
                        'Alpha3' => 'DZA',
                        'IDC' => '213',
                    ),
                ),
                4 => array(
                    'AS' => array(
                        'Name' => 'American Samoa',
                        'Alpha2' => 'AS',
                        'Alpha3' => 'ASM',
                        'IDC' => '1684',
                    ),
                ),
                5 => array(
                    'AD' => array(
                        'Name' => 'Andorra',
                        'Alpha2' => 'AD',
                        'Alpha3' => 'AND',
                        'IDC' => '376',
                    ),
                ),
                6 => array(
                    'AO' => array(
                        'Name' => 'Angola',
                        'Alpha2' => 'AO',
                        'Alpha3' => 'AGO',
                        'IDC' => '244',
                    ),
                ),
                7 => array(
                    'AI' => array(
                        'Name' => 'Anguilla',
                        'Alpha2' => 'AI',
                        'Alpha3' => 'AIA',
                        'IDC' => '1264',
                    ),
                ),
                8 => array(
                    'AQ' => array(
                        'Name' => 'Antarctica',
                        'Alpha2' => 'AQ',
                        'Alpha3' => 'ATA',
                        'IDC' => '672',
                    ),
                ),
                9 => array(
                    'AG' => array(
                        'Name' => 'Antigua and Barbuda',
                        'Alpha2' => 'AG',
                        'Alpha3' => 'ATG',
                        'IDC' => '1268',
                    ),
                ),
                10 => array(
                    'AR' => array(
                        'Name' => 'Argentina',
                        'Alpha2' => 'AR',
                        'Alpha3' => 'ARG',
                        'IDC' => '54',
                    ),
                ),
                11 => array(
                    'AM' => array(
                        'Name' => 'Armenia',
                        'Alpha2' => 'AM',
                        'Alpha3' => 'ARM',
                        'IDC' => '374',
                    ),
                ),
                12 => array(
                    'AW' => array(
                        'Name' => 'Aruba',
                        'Alpha2' => 'AW',
                        'Alpha3' => 'ABW',
                        'IDC' => '297',
                    ),
                ),
                13 => array(
                    'AU' => array(
                        'Name' => 'Australia',
                        'Alpha2' => 'AU',
                        'Alpha3' => 'AUS',
                        'IDC' => '61',
                    ),
                ),
                14 => array(
                    'AT' => array(
                        'Name' => 'Austria',
                        'Alpha2' => 'AT',
                        'Alpha3' => 'AUT',
                        'IDC' => '43',
                    ),
                ),
                15 => array(
                    'AZ' => array(
                        'Name' => 'Azerbaijan',
                        'Alpha2' => 'AZ',
                        'Alpha3' => 'AZE',
                        'IDC' => '994',
                    ),
                ),
                16 => array(
                    'BS' => array(
                        'Name' => 'Bahamas',
                        'Alpha2' => 'BS',
                        'Alpha3' => 'BHS',
                        'IDC' => '1242',
                    ),
                ),
                17 => array(
                    'BH' => array(
                        'Name' => 'Bahrain',
                        'Alpha2' => 'BH',
                        'Alpha3' => 'BHR',
                        'IDC' => '973',
                    ),
                ),
                18 => array(
                    'BD' => array(
                        'Name' => 'Bangladesh',
                        'Alpha2' => 'BD',
                        'Alpha3' => 'BGD',
                        'IDC' => '880',
                    ),
                ),
                19 => array(
                    'BB' => array(
                        'Name' => 'Barbados',
                        'Alpha2' => 'BB',
                        'Alpha3' => 'BRB',
                        'IDC' => '1246',
                    ),
                ),
                20 => array(
                    'BY' => array(
                        'Name' => 'Belarus',
                        'Alpha2' => 'BY',
                        'Alpha3' => 'BLR',
                        'IDC' => '375',
                    ),
                ),
                21 => array(
                    'BE' => array(
                        'Name' => 'Belgium',
                        'Alpha2' => 'BE',
                        'Alpha3' => 'BEL',
                        'IDC' => '32',
                    ),
                ),
                22 => array(
                    'BZ' => array(
                        'Name' => 'Belize',
                        'Alpha2' => 'BZ',
                        'Alpha3' => 'BLZ',
                        'IDC' => '501',
                    ),
                ),
                23 => array(
                    'BJ' => array(
                        'Name' => 'Benin',
                        'Alpha2' => 'BJ',
                        'Alpha3' => 'BEN',
                        'IDC' => '229',
                    ),
                ),
                24 => array(
                    'BM' => array(
                        'Name' => 'Bermuda',
                        'Alpha2' => 'BM',
                        'Alpha3' => 'BMU',
                        'IDC' => '1441',
                    ),
                ),
                25 => array(
                    'BT' => array(
                        'Name' => 'Bhutan',
                        'Alpha2' => 'BT',
                        'Alpha3' => 'BTN',
                        'IDC' => '975',
                    ),
                ),
                26 => array(
                    'BO' => array(
                        'Name' => 'Bolivia',
                        'Alpha2' => 'BO',
                        'Alpha3' => 'BOL',
                        'IDC' => '591',
                    ),
                ),
                27 => array(
                    'BA' => array(
                        'Name' => 'Bosnia and Herzegovina',
                        'Alpha2' => 'BA',
                        'Alpha3' => 'BIH',
                        'IDC' => '387',
                    ),
                ),
                28 => array(
                    'BW' => array(
                        'Name' => 'Botswana',
                        'Alpha2' => 'BW',
                        'Alpha3' => 'BWA',
                        'IDC' => '267',
                    ),
                ),
                29 => array(
                    'BV' => array(
                        'Name' => 'Bouvet Island',
                        'Alpha2' => 'BV',
                        'Alpha3' => 'BVT',
                        'IDC' => '47',
                    ),
                ),
                30 => array(
                    'BR' => array(
                        'Name' => 'Brazil',
                        'Alpha2' => 'BR',
                        'Alpha3' => 'BRA',
                        'IDC' => '55',
                    ),
                ),
                31 => array(
                    'IO' => array(
                        'Name' => 'British Indian Ocean Territory',
                        'Alpha2' => 'IO',
                        'Alpha3' => 'IOT',
                        'IDC' => '246',
                    ),
                ),
                32 => array(
                    'BN' => array(
                        'Name' => 'Brunei Darussalam',
                        'Alpha2' => 'BN',
                        'Alpha3' => 'BRN',
                        'IDC' => '673',
                    ),
                ),
                33 => array(
                    'BG' => array(
                        'Name' => 'Bulgaria',
                        'Alpha2' => 'BG',
                        'Alpha3' => 'BGR',
                        'IDC' => '359',
                    ),
                ),
                34 => array(
                    'BF' => array(
                        'Name' => 'Burkina Faso',
                        'Alpha2' => 'BF',
                        'Alpha3' => 'BFA',
                        'IDC' => '226',
                    ),
                ),
                35 => array(
                    'BI' => array(
                        'Name' => 'Burundi',
                        'Alpha2' => 'BI',
                        'Alpha3' => 'BDI',
                        'IDC' => '257',
                    ),
                ),
                36 => array(
                    'KH' => array(
                        'Name' => 'Cambodia',
                        'Alpha2' => 'KH',
                        'Alpha3' => 'KHM',
                        'IDC' => '855',
                    ),
                ),
                37 => array(
                    'CM' => array(
                        'Name' => 'Cameroon',
                        'Alpha2' => 'CM',
                        'Alpha3' => 'CMR',
                        'IDC' => '237',
                    ),
                ),
                38 => array(
                    'CA' => array(
                        'Name' => 'Canada',
                        'Alpha2' => 'CA',
                        'Alpha3' => 'CAN',
                        'IDC' => '1',
                    ),
                ),
                39 => array(
                    'CV' => array(
                        'Name' => 'Cape Verde',
                        'Alpha2' => 'CV',
                        'Alpha3' => 'CPV',
                        'IDC' => '238',
                    ),
                ),
                40 => array(
                    'KY' => array(
                        'Name' => 'Cayman Islands',
                        'Alpha2' => 'KY',
                        'Alpha3' => 'CYM',
                        'IDC' => '1345',
                    ),
                ),
                41 => array(
                    'CF' => array(
                        'Name' => 'Central African Republic',
                        'Alpha2' => 'CF',
                        'Alpha3' => 'CAF',
                        'IDC' => '236',
                    ),
                ),
                42 => array(
                    'TD' => array(
                        'Name' => 'Chad',
                        'Alpha2' => 'TD',
                        'Alpha3' => 'TCD',
                        'IDC' => '235',
                    ),
                ),
                43 => array(
                    'CL' => array(
                        'Name' => 'Chile',
                        'Alpha2' => 'CL',
                        'Alpha3' => 'CHL',
                        'IDC' => '56',
                    ),
                ),
                44 => array(
                    'CN' => array(
                        'Name' => 'China',
                        'Alpha2' => 'CN',
                        'Alpha3' => 'CHN',
                        'IDC' => '86',
                    ),
                ),
                45 => array(
                    'CX' => array(
                        'Name' => 'Christmas Island',
                        'Alpha2' => 'CX',
                        'Alpha3' => 'CXR',
                        'IDC' => '61',
                    ),
                ),
                46 => array(
                    'CC' => array(
                        'Name' => 'Cocos (Keeling) Islands',
                        'Alpha2' => 'CC',
                        'Alpha3' => 'CCK',
                        'IDC' => '61',
                    ),
                ),
                47 => array(
                    'CO' => array(
                        'Name' => 'Colombia',
                        'Alpha2' => 'CO',
                        'Alpha3' => 'COL',
                        'IDC' => '57',
                    ),
                ),
                48 => array(
                    'KM' => array(
                        'Name' => 'Comoros',
                        'Alpha2' => 'KM',
                        'Alpha3' => 'COM',
                        'IDC' => '269',
                    ),
                ),
                49 => array(
                    'CG' => array(
                        'Name' => 'Congo',
                        'Alpha2' => 'CG',
                        'Alpha3' => 'COG',
                        'IDC' => '242',
                    ),
                ),
                50 => array(
                    'CD' => array(
                        'Name' => 'Congo, The Democratic Republic Of The',
                        'Alpha2' => 'CD',
                        'Alpha3' => 'COD',
                        'IDC' => '243',
                    ),
                ),
                51 => array(
                    'CK' => array(
                        'Name' => 'Cook Islands',
                        'Alpha2' => 'CK',
                        'Alpha3' => 'COK',
                        'IDC' => '682',
                    ),
                ),
                52 => array(
                    'CR' => array(
                        'Name' => 'Costa Rica',
                        'Alpha2' => 'CR',
                        'Alpha3' => 'CRI',
                        'IDC' => '506',
                    ),
                ),
                53 => array(
                    'CI' => array(
                        'Name' => 'Côte d\'Ivoire',
                        'Alpha2' => 'CI',
                        'Alpha3' => 'CIV',
                        'IDC' => '225',
                    ),
                ),
                54 => array(
                    'HR' => array(
                        'Name' => 'Croatia',
                        'Alpha2' => 'HR',
                        'Alpha3' => 'HRV',
                        'IDC' => '385',
                    ),
                ),
                55 => array(
                    'CU' => array(
                        'Name' => 'Cuba',
                        'Alpha2' => 'CU',
                        'Alpha3' => 'CUB',
                        'IDC' => '53',
                    ),
                ),
                56 => array(
                    'CY' => array(
                        'Name' => 'Cyprus',
                        'Alpha2' => 'CY',
                        'Alpha3' => 'CYP',
                        'IDC' => '357',
                    ),
                ),
                57 => array(
                    'CZ' => array(
                        'Name' => 'Czech Republic',
                        'Alpha2' => 'CZ',
                        'Alpha3' => 'CZE',
                        'IDC' => '420',
                    ),
                ),
                58 => array(
                    'DK' => array(
                        'Name' => 'Denmark',
                        'Alpha2' => 'DK',
                        'Alpha3' => 'DNK',
                        'IDC' => '45',
                    ),
                ),
                59 => array(
                    'DJ' => array(
                        'Name' => 'Djibouti',
                        'Alpha2' => 'DJ',
                        'Alpha3' => 'DJI',
                        'IDC' => '253',
                    ),
                ),
                60 => array(
                    'DM' => array(
                        'Name' => 'Dominica',
                        'Alpha2' => 'DM',
                        'Alpha3' => 'DMA',
                        'IDC' => '1767',
                    ),
                ),
                61 => array(
                    'DO' => array(
                        'Name' => 'Dominican Republic',
                        'Alpha2' => 'DO',
                        'Alpha3' => 'DOM',
                        'IDC' => '1809',
                    ),
                ),
                62 => array(
                    'EC' => array(
                        'Name' => 'Ecuador',
                        'Alpha2' => 'EC',
                        'Alpha3' => 'ECU',
                        'IDC' => '593',
                    ),
                ),
                63 => array(
                    'EG' => array(
                        'Name' => 'Egypt',
                        'Alpha2' => 'EG',
                        'Alpha3' => 'EGY',
                        'IDC' => '20',
                    ),
                ),
                64 => array(
                    'SV' => array(
                        'Name' => 'El Salvador',
                        'Alpha2' => 'SV',
                        'Alpha3' => 'SLV',
                        'IDC' => '503',
                    ),
                ),
                65 => array(
                    'GQ' => array(
                        'Name' => 'Equatorial Guinea',
                        'Alpha2' => 'GQ',
                        'Alpha3' => 'GNQ',
                        'IDC' => '240',
                    ),
                ),
                66 => array(
                    'ER' => array(
                        'Name' => 'Eritrea',
                        'Alpha2' => 'ER',
                        'Alpha3' => 'ERI',
                        'IDC' => '291',
                    ),
                ),
                67 => array(
                    'EE' => array(
                        'Name' => 'Estonia',
                        'Alpha2' => 'EE',
                        'Alpha3' => 'EST',
                        'IDC' => '372',
                    ),
                ),
                68 => array(
                    'ET' => array(
                        'Name' => 'Ethiopia',
                        'Alpha2' => 'ET',
                        'Alpha3' => 'ETH',
                        'IDC' => '251',
                    ),
                ),
                69 => array(
                    'FK' => array(
                        'Name' => 'Falkland Islands (Malvinas)',
                        'Alpha2' => 'FK',
                        'Alpha3' => 'FLK',
                        'IDC' => '500',
                    ),
                ),
                70 => array(
                    'FO' => array(
                        'Name' => 'Faroe Islands',
                        'Alpha2' => 'FO',
                        'Alpha3' => 'FRO',
                        'IDC' => '298',
                    ),
                ),
                71 => array(
                    'FJ' => array(
                        'Name' => 'Fiji',
                        'Alpha2' => 'FJ',
                        'Alpha3' => 'FJI',
                        'IDC' => '679',
                    ),
                ),
                72 => array(
                    'FI' => array(
                        'Name' => 'Finland',
                        'Alpha2' => 'FI',
                        'Alpha3' => 'FIN',
                        'IDC' => '358',
                    ),
                ),
                73 => array(
                    'FR' => array(
                        'Name' => 'France',
                        'Alpha2' => 'FR',
                        'Alpha3' => 'FRA',
                        'IDC' => '33',
                    ),
                ),
                74 => array(
                    'GF' => array(
                        'Name' => 'French Guiana',
                        'Alpha2' => 'GF',
                        'Alpha3' => 'GUF',
                        'IDC' => '594',
                    ),
                ),
                75 => array(
                    'PF' => array(
                        'Name' => 'French Polynesia',
                        'Alpha2' => 'PF',
                        'Alpha3' => 'PYF',
                        'IDC' => '689',
                    ),
                ),
                76 => array(
                    'TF' => array(
                        'Name' => 'French Southern Territories',
                        'Alpha2' => 'TF',
                        'Alpha3' => 'ATF',
                        'IDC' => '0',
                    ),
                ),
                77 => array(
                    'GA' => array(
                        'Name' => 'Gabon',
                        'Alpha2' => 'GA',
                        'Alpha3' => 'GAB',
                        'IDC' => '241',
                    ),
                ),
                78 => array(
                    'GM' => array(
                        'Name' => 'Gambia',
                        'Alpha2' => 'GM',
                        'Alpha3' => 'GMB',
                        'IDC' => '220',
                    ),
                ),
                79 => array(
                    'GE' => array(
                        'Name' => 'Georgia',
                        'Alpha2' => 'GE',
                        'Alpha3' => 'GEO',
                        'IDC' => '995',
                    ),
                ),
                80 => array(
                    'DE' => array(
                        'Name' => 'Germany',
                        'Alpha2' => 'DE',
                        'Alpha3' => 'DEU',
                        'IDC' => '49',
                    ),
                ),
                81 => array(
                    'GH' => array(
                        'Name' => 'Ghana',
                        'Alpha2' => 'GH',
                        'Alpha3' => 'GHA',
                        'IDC' => '233',
                    ),
                ),
                82 => array(
                    'GI' => array(
                        'Name' => 'Gibraltar',
                        'Alpha2' => 'GI',
                        'Alpha3' => 'GIB',
                        'IDC' => '350',
                    ),
                ),
                83 => array(
                    'GR' => array(
                        'Name' => 'Greece',
                        'Alpha2' => 'GR',
                        'Alpha3' => 'GRC',
                        'IDC' => '30',
                    ),
                ),
                84 => array(
                    'GL' => array(
                        'Name' => 'Greenland',
                        'Alpha2' => 'GL',
                        'Alpha3' => 'GRL',
                        'IDC' => '299',
                    ),
                ),
                85 => array(
                    'GD' => array(
                        'Name' => 'Grenada',
                        'Alpha2' => 'GD',
                        'Alpha3' => 'GRD',
                        'IDC' => '1473',
                    ),
                ),
                86 => array(
                    'GP' => array(
                        'Name' => 'Guadeloupe',
                        'Alpha2' => 'GP',
                        'Alpha3' => 'GLP',
                        'IDC' => '590',
                    ),
                ),
                87 => array(
                    'GU' => array(
                        'Name' => 'Guam',
                        'Alpha2' => 'GU',
                        'Alpha3' => 'GUM',
                        'IDC' => '1671',
                    ),
                ),
                88 => array(
                    'GT' => array(
                        'Name' => 'Guatemala',
                        'Alpha2' => 'GT',
                        'Alpha3' => 'GTM',
                        'IDC' => '502',
                    ),
                ),
                89 => array(
                    'GG' => array(
                        'Name' => 'Guernsey',
                        'Alpha2' => 'GG',
                        'Alpha3' => 'GGY',
                        'IDC' => '44',
                    ),
                ),
                90 => array(
                    'GN' => array(
                        'Name' => 'Guinea',
                        'Alpha2' => 'GN',
                        'Alpha3' => 'GIN',
                        'IDC' => '224',
                    ),
                ),
                91 => array(
                    'GW' => array(
                        'Name' => 'Guinea-Bissau',
                        'Alpha2' => 'GW',
                        'Alpha3' => 'GNB',
                        'IDC' => '245',
                    ),
                ),
                92 => array(
                    'GY' => array(
                        'Name' => 'Guyana',
                        'Alpha2' => 'GY',
                        'Alpha3' => 'GUY',
                        'IDC' => '592',
                    ),
                ),
                93 => array(
                    'HT' => array(
                        'Name' => 'Haiti',
                        'Alpha2' => 'HT',
                        'Alpha3' => 'HTI',
                        'IDC' => '509',
                    ),
                ),
                94 => array(
                    'HM' => array(
                        'Name' => 'Heard Island and McDonald Islands',
                        'Alpha2' => 'HM',
                        'Alpha3' => 'HMD',
                        'IDC' => '672',
                    ),
                ),
                95 => array(
                    'HN' => array(
                        'Name' => 'Honduras',
                        'Alpha2' => 'HN',
                        'Alpha3' => 'HND',
                        'IDC' => '504',
                    ),
                ),
                96 => array(
                    'HK' => array(
                        'Name' => 'Hong Kong',
                        'Alpha2' => 'HK',
                        'Alpha3' => 'HKG',
                        'IDC' => '852',
                    ),
                ),
                97 => array(
                    'HU' => array(
                        'Name' => 'Hungary',
                        'Alpha2' => 'HU',
                        'Alpha3' => 'HUN',
                        'IDC' => '36',
                    ),
                ),
                98 => array(
                    'IS' => array(
                        'Name' => 'Iceland',
                        'Alpha2' => 'IS',
                        'Alpha3' => 'ISL',
                        'IDC' => '354',
                    ),
                ),
                99 => array(
                    'IN' => array(
                        'Name' => 'India',
                        'Alpha2' => 'IN',
                        'Alpha3' => 'IND',
                        'IDC' => '91',
                    ),
                ),
                100 => array(
                    'ID' => array(
                        'Name' => 'Indonesia',
                        'Alpha2' => 'ID',
                        'Alpha3' => 'IDN',
                        'IDC' => '62',
                    ),
                ),
                101 => array(
                    'IR' => array(
                        'Name' => 'Iran, Islamic Republic of',
                        'Alpha2' => 'IR',
                        'Alpha3' => 'IRN',
                        'IDC' => '98',
                    ),
                ),
                102 => array(
                    'IQ' => array(
                        'Name' => 'Iraq',
                        'Alpha2' => 'IQ',
                        'Alpha3' => 'IRQ',
                        'IDC' => '964',
                    ),
                ),
                103 => array(
                    'IE' => array(
                        'Name' => 'Ireland',
                        'Alpha2' => 'IE',
                        'Alpha3' => 'IRL',
                        'IDC' => '353',
                    ),
                ),
                104 => array(
                    'IM' => array(
                        'Name' => 'Isle of Man',
                        'Alpha2' => 'IM',
                        'Alpha3' => 'IMN',
                        'IDC' => '44',
                    ),
                ),
                105 => array(
                    'IL' => array(
                        'Name' => 'Israel',
                        'Alpha2' => 'IL',
                        'Alpha3' => 'ISR',
                        'IDC' => '972',
                    ),
                ),
                106 => array(
                    'IT' => array(
                        'Name' => 'Italy',
                        'Alpha2' => 'IT',
                        'Alpha3' => 'ITA',
                        'IDC' => '39',
                    ),
                ),
                107 => array(
                    'JM' => array(
                        'Name' => 'Jamaica',
                        'Alpha2' => 'JM',
                        'Alpha3' => 'JAM',
                        'IDC' => '1876',
                    ),
                ),
                108 => array(
                    'JP' => array(
                        'Name' => 'Japan',
                        'Alpha2' => 'JP',
                        'Alpha3' => 'JPN',
                        'IDC' => '81',
                    ),
                ),
                109 => array(
                    'JE' => array(
                        'Name' => 'Jersey',
                        'Alpha2' => 'JE',
                        'Alpha3' => 'JEY',
                        'IDC' => '44',
                    ),
                ),
                110 => array(
                    'JO' => array(
                        'Name' => 'Jordan',
                        'Alpha2' => 'JO',
                        'Alpha3' => 'JOR',
                        'IDC' => '962',
                    ),
                ),
                111 => array(
                    'KZ' => array(
                        'Name' => 'Kazakhstan',
                        'Alpha2' => 'KZ',
                        'Alpha3' => 'KAZ',
                        'IDC' => '7',
                    ),
                ),
                112 => array(
                    'KE' => array(
                        'Name' => 'Kenya',
                        'Alpha2' => 'KE',
                        'Alpha3' => 'KEN',
                        'IDC' => '254',
                    ),
                ),
                113 => array(
                    'KI' => array(
                        'Name' => 'Kiribati',
                        'Alpha2' => 'KI',
                        'Alpha3' => 'KIR',
                        'IDC' => '686',
                    ),
                ),
                114 => array(
                    'KP' => array(
                        'Name' => 'Korea, Democratic People\'s Republic of',
                        'Alpha2' => 'KP',
                        'Alpha3' => 'PRK',
                        'IDC' => '850',
                    ),
                ),
                115 => array(
                    'KR' => array(
                        'Name' => 'Korea, Republic of',
                        'Alpha2' => 'KR',
                        'Alpha3' => 'KOR',
                        'IDC' => '82',
                    ),
                ),
                116 => array(
                    'KW' => array(
                        'Name' => 'Kuwait',
                        'Alpha2' => 'KW',
                        'Alpha3' => 'KWT',
                        'IDC' => '965',
                    ),
                ),
                117 => array(
                    'KG' => array(
                        'Name' => 'Kyrgyzstan',
                        'Alpha2' => 'KG',
                        'Alpha3' => 'KGZ',
                        'IDC' => '996',
                    ),
                ),
                118 => array(
                    'LA' => array(
                        'Name' => 'Lao People\'s Democratic Republic',
                        'Alpha2' => 'LA',
                        'Alpha3' => 'LAO',
                        'IDC' => '856',
                    ),
                ),
                119 => array(
                    'LV' => array(
                        'Name' => 'Latvia',
                        'Alpha2' => 'LV',
                        'Alpha3' => 'LVA',
                        'IDC' => '371',
                    ),
                ),
                120 => array(
                    'LB' => array(
                        'Name' => 'Lebanon',
                        'Alpha2' => 'LB',
                        'Alpha3' => 'LBN',
                        'IDC' => '961',
                    ),
                ),
                121 => array(
                    'LS' => array(
                        'Name' => 'Lesotho',
                        'Alpha2' => 'LS',
                        'Alpha3' => 'LSO',
                        'IDC' => '266',
                    ),
                ),
                122 => array(
                    'LR' => array(
                        'Name' => 'Liberia',
                        'Alpha2' => 'LR',
                        'Alpha3' => 'LBR',
                        'IDC' => '231',
                    ),
                ),
                123 => array(
                    'LY' => array(
                        'Name' => 'Libyan Arab Jamahiriya',
                        'Alpha2' => 'LY',
                        'Alpha3' => 'LBY',
                        'IDC' => '218',
                    ),
                ),
                124 => array(
                    'LI' => array(
                        'Name' => 'Liechtenstein',
                        'Alpha2' => 'LI',
                        'Alpha3' => 'LIE',
                        'IDC' => '423',
                    ),
                ),
                125 => array(
                    'LT' => array(
                        'Name' => 'Lithuania',
                        'Alpha2' => 'LT',
                        'Alpha3' => 'LTU',
                        'IDC' => '370',
                    ),
                ),
                126 => array(
                    'LU' => array(
                        'Name' => 'Luxembourg',
                        'Alpha2' => 'LU',
                        'Alpha3' => 'LUX',
                        'IDC' => '352',
                    ),
                ),
                127 => array(
                    'MO' => array(
                        'Name' => 'Macau',
                        'Alpha2' => 'MO',
                        'Alpha3' => 'MAC',
                        'IDC' => '853',
                    ),
                ),
                128 => array(
                    'MK' => array(
                        'Name' => 'Macedonia, The Former Yugoslav Republic of',
                        'Alpha2' => 'MK',
                        'Alpha3' => 'MKD',
                        'IDC' => '389',
                    ),
                ),
                129 => array(
                    'MG' => array(
                        'Name' => 'Madagascar',
                        'Alpha2' => 'MG',
                        'Alpha3' => 'MDG',
                        'IDC' => '261',
                    ),
                ),
                130 => array(
                    'MW' => array(
                        'Name' => 'Malawi',
                        'Alpha2' => 'MW',
                        'Alpha3' => 'MWI',
                        'IDC' => '265',
                    ),
                ),
                131 => array(
                    'MY' => array(
                        'Name' => 'Malaysia',
                        'Alpha2' => 'MY',
                        'Alpha3' => 'MYS',
                        'IDC' => '60',
                    ),
                ),
                132 => array(
                    'MV' => array(
                        'Name' => 'Maldives',
                        'Alpha2' => 'MV',
                        'Alpha3' => 'MDV',
                        'IDC' => '960',
                    ),
                ),
                133 => array(
                    'ML' => array(
                        'Name' => 'Mali',
                        'Alpha2' => 'ML',
                        'Alpha3' => 'MLI',
                        'IDC' => '223',
                    ),
                ),
                134 => array(
                    'MT' => array(
                        'Name' => 'Malta',
                        'Alpha2' => 'MT',
                        'Alpha3' => 'MLT',
                        'IDC' => '356',
                    ),
                ),
                135 => array(
                    'MH' => array(
                        'Name' => 'Marshall Islands',
                        'Alpha2' => 'MH',
                        'Alpha3' => 'MHL',
                        'IDC' => '692',
                    ),
                ),
                136 => array(
                    'MQ' => array(
                        'Name' => 'Martinique',
                        'Alpha2' => 'MQ',
                        'Alpha3' => 'MTQ',
                        'IDC' => '596',
                    ),
                ),
                137 => array(
                    'MR' => array(
                        'Name' => 'Mauritania',
                        'Alpha2' => 'MR',
                        'Alpha3' => 'MRT',
                        'IDC' => '222',
                    ),
                ),
                138 => array(
                    'MU' => array(
                        'Name' => 'Mauritius',
                        'Alpha2' => 'MU',
                        'Alpha3' => 'MUS',
                        'IDC' => '230',
                    ),
                ),
                139 => array(
                    'YT' => array(
                        'Name' => 'Mayotte',
                        'Alpha2' => 'YT',
                        'Alpha3' => 'MYT',
                        'IDC' => '262',
                    ),
                ),
                140 => array(
                    'MX' => array(
                        'Name' => 'Mexico',
                        'Alpha2' => 'MX',
                        'Alpha3' => 'MEX',
                        'IDC' => '52',
                    ),
                ),
                141 => array(
                    'FM' => array(
                        'Name' => 'Micronesia, Federated States of',
                        'Alpha2' => 'FM',
                        'Alpha3' => 'FSM',
                        'IDC' => '691',
                    ),
                ),
                142 => array(
                    'MD' => array(
                        'Name' => 'Moldova, Republic of',
                        'Alpha2' => 'MD',
                        'Alpha3' => 'MDA',
                        'IDC' => '373',
                    ),
                ),
                143 => array(
                    'MC' => array(
                        'Name' => 'Monaco',
                        'Alpha2' => 'MC',
                        'Alpha3' => 'MCO',
                        'IDC' => '377',
                    ),
                ),
                144 => array(
                    'MN' => array(
                        'Name' => 'Mongolia',
                        'Alpha2' => 'MN',
                        'Alpha3' => 'MNG',
                        'IDC' => '976',
                    ),
                ),
                145 => array(
                    'ME' => array(
                        'Name' => 'Montenegro',
                        'Alpha2' => 'ME',
                        'Alpha3' => 'MNE',
                        'IDC' => '382',
                    ),
                ),
                146 => array(
                    'MS' => array(
                        'Name' => 'Montserrat',
                        'Alpha2' => 'MS',
                        'Alpha3' => 'MSR',
                        'IDC' => '1664',
                    ),
                ),
                147 => array(
                    'MA' => array(
                        'Name' => 'Morocco',
                        'Alpha2' => 'MA',
                        'Alpha3' => 'MAR',
                        'IDC' => '212',
                    ),
                ),
                148 => array(
                    'MZ' => array(
                        'Name' => 'Mozambique',
                        'Alpha2' => 'MZ',
                        'Alpha3' => 'MOZ',
                        'IDC' => '258',
                    ),
                ),
                149 => array(
                    'MM' => array(
                        'Name' => 'Myanmar',
                        'Alpha2' => 'MM',
                        'Alpha3' => 'MMR',
                        'IDC' => '95',
                    ),
                ),
                150 => array(
                    'NA' => array(
                        'Name' => 'Namibia',
                        'Alpha2' => 'NA',
                        'Alpha3' => 'NAM',
                        'IDC' => '264',
                    ),
                ),
                151 => array(
                    'NR' => array(
                        'Name' => 'Nauru',
                        'Alpha2' => 'NR',
                        'Alpha3' => 'NRU',
                        'IDC' => '674',
                    ),
                ),
                152 => array(
                    'NP' => array(
                        'Name' => 'Nepal',
                        'Alpha2' => 'NP',
                        'Alpha3' => 'NPL',
                        'IDC' => '977',
                    ),
                ),
                153 => array(
                    'NL' => array(
                        'Name' => 'Netherlands',
                        'Alpha2' => 'NL',
                        'Alpha3' => 'NLD',
                        'IDC' => '31',
                    ),
                ),
                154 => array(
                    'AN' => array(
                        'Name' => 'Netherlands Antilles',
                        'Alpha2' => 'AN',
                        'Alpha3' => 'ANT',
                        'IDC' => '599',
                    ),
                ),
                155 => array(
                    'NC' => array(
                        'Name' => 'New Caledonia',
                        'Alpha2' => 'NC',
                        'Alpha3' => 'NCL',
                        'IDC' => '687',
                    ),
                ),
                156 => array(
                    'NZ' => array(
                        'Name' => 'New Zealand',
                        'Alpha2' => 'NZ',
                        'Alpha3' => 'NZL',
                        'IDC' => '64',
                    ),
                ),
                157 => array(
                    'NI' => array(
                        'Name' => 'Nicaragua',
                        'Alpha2' => 'NI',
                        'Alpha3' => 'NIC',
                        'IDC' => '505',
                    ),
                ),
                158 => array(
                    'NE' => array(
                        'Name' => 'Niger',
                        'Alpha2' => 'NE',
                        'Alpha3' => 'NER',
                        'IDC' => '227',
                    ),
                ),
                159 => array(
                    'NG' => array(
                        'Name' => 'Nigeria',
                        'Alpha2' => 'NG',
                        'Alpha3' => 'NGA',
                        'IDC' => '234',
                    ),
                ),
                160 => array(
                    'NU' => array(
                        'Name' => 'Niue',
                        'Alpha2' => 'NU',
                        'Alpha3' => 'NIU',
                        'IDC' => '683',
                    ),
                ),
                161 => array(
                    'NF' => array(
                        'Name' => 'Norfolk Island',
                        'Alpha2' => 'NF',
                        'Alpha3' => 'NFK',
                        'IDC' => '6723',
                    ),
                ),
                162 => array(
                    'MP' => array(
                        'Name' => 'Northern Mariana Islands',
                        'Alpha2' => 'MP',
                        'Alpha3' => 'MNP',
                        'IDC' => '1670',
                    ),
                ),
                163 => array(
                    'NO' => array(
                        'Name' => 'Norway',
                        'Alpha2' => 'NO',
                        'Alpha3' => 'NOR',
                        'IDC' => '47',
                    ),
                ),
                164 => array(
                    'OM' => array(
                        'Name' => 'Oman',
                        'Alpha2' => 'OM',
                        'Alpha3' => 'OMN',
                        'IDC' => '968',
                    ),
                ),
                165 => array(
                    'PK' => array(
                        'Name' => 'Pakistan',
                        'Alpha2' => 'PK',
                        'Alpha3' => 'PAK',
                        'IDC' => '92',
                    ),
                ),
                166 => array(
                    'PW' => array(
                        'Name' => 'Palau',
                        'Alpha2' => 'PW',
                        'Alpha3' => 'PLW',
                        'IDC' => '680',
                    ),
                ),
                167 => array(
                    'PS' => array(
                        'Name' => 'Palestinian Territory, Occupied',
                        'Alpha2' => 'PS',
                        'Alpha3' => 'PSE',
                        'IDC' => '970',
                    ),
                ),
                168 => array(
                    'PA' => array(
                        'Name' => 'Panama',
                        'Alpha2' => 'PA',
                        'Alpha3' => 'PAN',
                        'IDC' => '507',
                    ),
                ),
                169 => array(
                    'PG' => array(
                        'Name' => 'Papua New Guinea',
                        'Alpha2' => 'PG',
                        'Alpha3' => 'PNG',
                        'IDC' => '675',
                    ),
                ),
                170 => array(
                    'PY' => array(
                        'Name' => 'Paraguay',
                        'Alpha2' => 'PY',
                        'Alpha3' => 'PRY',
                        'IDC' => '595',
                    ),
                ),
                171 => array(
                    'PE' => array(
                        'Name' => 'Peru',
                        'Alpha2' => 'PE',
                        'Alpha3' => 'PER',
                        'IDC' => '51',
                    ),
                ),
                172 => array(
                    'PH' => array(
                        'Name' => 'Philippines',
                        'Alpha2' => 'PH',
                        'Alpha3' => 'PHL',
                        'IDC' => '63',
                    ),
                ),
                173 => array(
                    'PN' => array(
                        'Name' => 'Pitcairn',
                        'Alpha2' => 'PN',
                        'Alpha3' => 'PCN',
                        'IDC' => '64',
                    ),
                ),
                174 => array(
                    'PL' => array(
                        'Name' => 'Poland',
                        'Alpha2' => 'PL',
                        'Alpha3' => 'POL',
                        'IDC' => '48',
                    ),
                ),
                175 => array(
                    'PT' => array(
                        'Name' => 'Portugal',
                        'Alpha2' => 'PT',
                        'Alpha3' => 'PRT',
                        'IDC' => '351',
                    ),
                ),
                176 => array(
                    'PR' => array(
                        'Name' => 'Puerto Rico',
                        'Alpha2' => 'PR',
                        'Alpha3' => 'PRI',
                        'IDC' => '1787',
                    ),
                ),
                177 => array(
                    'QA' => array(
                        'Name' => 'Qatar',
                        'Alpha2' => 'QA',
                        'Alpha3' => 'QAT',
                        'IDC' => '974',
                    ),
                ),
                178 => array(
                    'RE' => array(
                        'Name' => 'Reunion',
                        'Alpha2' => 'RE',
                        'Alpha3' => 'REU',
                        'IDC' => '262',
                    ),
                ),
                179 => array(
                    'RO' => array(
                        'Name' => 'Romania',
                        'Alpha2' => 'RO',
                        'Alpha3' => 'ROU',
                        'IDC' => '40',
                    ),
                ),
                180 => array(
                    'RU' => array(
                        'Name' => 'Russian Federation',
                        'Alpha2' => 'RU',
                        'Alpha3' => 'RUS',
                        'IDC' => '7',
                    ),
                ),
                181 => array(
                    'RW' => array(
                        'Name' => 'Rwanda',
                        'Alpha2' => 'RW',
                        'Alpha3' => 'RWA',
                        'IDC' => '250',
                    ),
                ),
                182 => array(
                    'BL' => array(
                        'Name' => 'Saint Barthélemy',
                        'Alpha2' => 'BL',
                        'Alpha3' => 'BLM',
                        'IDC' => '590',
                    ),
                ),
                183 => array(
                    'SH' => array(
                        'Name' => 'Saint Helena',
                        'Alpha2' => 'SH',
                        'Alpha3' => 'SHN',
                        'IDC' => '290',
                    ),
                ),
                184 => array(
                    'KN' => array(
                        'Name' => 'Saint Kitts and Nevis',
                        'Alpha2' => 'KN',
                        'Alpha3' => 'KNA',
                        'IDC' => '1869',
                    ),
                ),
                185 => array(
                    'LC' => array(
                        'Name' => 'Saint Lucia',
                        'Alpha2' => 'LC',
                        'Alpha3' => 'LCA',
                        'IDC' => '1758',
                    ),
                ),
                186 => array(
                    'MF' => array(
                        'Name' => 'Saint Martin',
                        'Alpha2' => 'MF',
                        'Alpha3' => 'MAF',
                        'IDC' => '590',
                    ),
                ),
                187 => array(
                    'PM' => array(
                        'Name' => 'Saint Pierre and Miquelon',
                        'Alpha2' => 'PM',
                        'Alpha3' => 'SPM',
                        'IDC' => '508',
                    ),
                ),
                188 => array(
                    'VC' => array(
                        'Name' => 'Saint Vincent and The Grenadines',
                        'Alpha2' => 'VC',
                        'Alpha3' => 'VCT',
                        'IDC' => '1784',
                    ),
                ),
                189 => array(
                    'WS' => array(
                        'Name' => 'Samoa',
                        'Alpha2' => 'WS',
                        'Alpha3' => 'WSM',
                        'IDC' => '685',
                    ),
                ),
                190 => array(
                    'SM' => array(
                        'Name' => 'San Marino',
                        'Alpha2' => 'SM',
                        'Alpha3' => 'SMR',
                        'IDC' => '378',
                    ),
                ),
                191 => array(
                    'ST' => array(
                        'Name' => 'Sao Tome and Principe',
                        'Alpha2' => 'ST',
                        'Alpha3' => 'STP',
                        'IDC' => '239',
                    ),
                ),
                192 => array(
                    'SA' => array(
                        'Name' => 'Saudi Arabia',
                        'Alpha2' => 'SA',
                        'Alpha3' => 'SAU',
                        'IDC' => '966',
                    ),
                ),
                193 => array(
                    'SN' => array(
                        'Name' => 'Senegal',
                        'Alpha2' => 'SN',
                        'Alpha3' => 'SEN',
                        'IDC' => '221',
                    ),
                ),
                194 => array(
                    'RS' => array(
                        'Name' => 'Serbia',
                        'Alpha2' => 'RS',
                        'Alpha3' => 'SRB',
                        'IDC' => '381',
                    ),
                ),
                195 => array(
                    'SC' => array(
                        'Name' => 'Seychelles',
                        'Alpha2' => 'SC',
                        'Alpha3' => 'SYC',
                        'IDC' => '248',
                    ),
                ),
                196 => array(
                    'SL' => array(
                        'Name' => 'Sierra Leone',
                        'Alpha2' => 'SL',
                        'Alpha3' => 'SLE',
                        'IDC' => '232',
                    ),
                ),
                197 => array(
                    'SG' => array(
                        'Name' => 'Singapore',
                        'Alpha2' => 'SG',
                        'Alpha3' => 'SGP',
                        'IDC' => '65',
                    ),
                ),
                198 => array(
                    'SK' => array(
                        'Name' => 'Slovakia',
                        'Alpha2' => 'SK',
                        'Alpha3' => 'SVK',
                        'IDC' => '421',
                    ),
                ),
                199 => array(
                    'SI' => array(
                        'Name' => 'Slovenia',
                        'Alpha2' => 'SI',
                        'Alpha3' => 'SVN',
                        'IDC' => '386',
                    ),
                ),
                200 => array(
                    'SB' => array(
                        'Name' => 'Solomon Islands',
                        'Alpha2' => 'SB',
                        'Alpha3' => 'SLB',
                        'IDC' => '677',
                    ),
                ),
                201 => array(
                    'SO' => array(
                        'Name' => 'Somalia',
                        'Alpha2' => 'SO',
                        'Alpha3' => 'SOM',
                        'IDC' => '252',
                    ),
                ),
                202 => array(
                    'ZA' => array(
                        'Name' => 'South Africa',
                        'Alpha2' => 'ZA',
                        'Alpha3' => 'ZAF',
                        'IDC' => '27',
                    ),
                ),
                203 => array(
                    'GS' => array(
                        'Name' => 'South Georgia and The South Sandwich Islands',
                        'Alpha2' => 'GS',
                        'Alpha3' => 'SGS',
                        'IDC' => '500',
                    ),
                ),
                204 => array(
                    'ES' => array(
                        'Name' => 'Spain',
                        'Alpha2' => 'ES',
                        'Alpha3' => 'ESP',
                        'IDC' => '34',
                    ),
                ),
                205 => array(
                    'LK' => array(
                        'Name' => 'Sri Lanka',
                        'Alpha2' => 'LK',
                        'Alpha3' => 'LKA',
                        'IDC' => '94',
                    ),
                ),
                206 => array(
                    'SD' => array(
                        'Name' => 'Sudan',
                        'Alpha2' => 'SD',
                        'Alpha3' => 'SDN',
                        'IDC' => '249',
                    ),
                ),
                207 => array(
                    'SR' => array(
                        'Name' => 'Suriname',
                        'Alpha2' => 'SR',
                        'Alpha3' => 'SUR',
                        'IDC' => '597',
                    ),
                ),
                208 => array(
                    'SJ' => array(
                        'Name' => 'Svalbard and Jan Mayen',
                        'Alpha2' => 'SJ',
                        'Alpha3' => 'SJM',
                        'IDC' => '47',
                    ),
                ),
                209 => array(
                    'SZ' => array(
                        'Name' => 'Swaziland',
                        'Alpha2' => 'SZ',
                        'Alpha3' => 'SWZ',
                        'IDC' => '268',
                    ),
                ),
                210 => array(
                    'SE' => array(
                        'Name' => 'Sweden',
                        'Alpha2' => 'SE',
                        'Alpha3' => 'SWE',
                        'IDC' => '46',
                    ),
                ),
                211 => array(
                    'CH' => array(
                        'Name' => 'Switzerland',
                        'Alpha2' => 'CH',
                        'Alpha3' => 'CHE',
                        'IDC' => '41',
                    ),
                ),
                212 => array(
                    'SY' => array(
                        'Name' => 'Syrian Arab Republic',
                        'Alpha2' => 'SY',
                        'Alpha3' => 'SYR',
                        'IDC' => '963',
                    ),
                ),
                213 => array(
                    'TW' => array(
                        'Name' => 'Taiwan',
                        'Alpha2' => 'TW',
                        'Alpha3' => 'TWN',
                        'IDC' => '886',
                    ),
                ),
                214 => array(
                    'TJ' => array(
                        'Name' => 'Tajikistan',
                        'Alpha2' => 'TJ',
                        'Alpha3' => 'TJK',
                        'IDC' => '992',
                    ),
                ),
                215 => array(
                    'TZ' => array(
                        'Name' => 'Tanzania, United Republic of',
                        'Alpha2' => 'TZ',
                        'Alpha3' => 'TZA',
                        'IDC' => '255',
                    ),
                ),
                216 => array(
                    'TH' => array(
                        'Name' => 'Thailand',
                        'Alpha2' => 'TH',
                        'Alpha3' => 'THA',
                        'IDC' => '66',
                    ),
                ),
                217 => array(
                    'TL' => array(
                        'Name' => 'Timor-Leste',
                        'Alpha2' => 'TL',
                        'Alpha3' => 'TLS',
                        'IDC' => '670',
                    ),
                ),
                218 => array(
                    'TG' => array(
                        'Name' => 'Togo',
                        'Alpha2' => 'TG',
                        'Alpha3' => 'TGO',
                        'IDC' => '228',
                    ),
                ),
                219 => array(
                    'TK' => array(
                        'Name' => 'Tokelau',
                        'Alpha2' => 'TK',
                        'Alpha3' => 'TKL',
                        'IDC' => '690',
                    ),
                ),
                220 => array(
                    'TO' => array(
                        'Name' => 'Tonga',
                        'Alpha2' => 'TO',
                        'Alpha3' => 'TON',
                        'IDC' => '676',
                    ),
                ),
                221 => array(
                    'TT' => array(
                        'Name' => 'Trinidad and Tobago',
                        'Alpha2' => 'TT',
                        'Alpha3' => 'TTO',
                        'IDC' => '1868',
                    ),
                ),
                222 => array(
                    'TN' => array(
                        'Name' => 'Tunisia',
                        'Alpha2' => 'TN',
                        'Alpha3' => 'TUN',
                        'IDC' => '216',
                    ),
                ),
                223 => array(
                    'TR' => array(
                        'Name' => 'Turkey',
                        'Alpha2' => 'TR',
                        'Alpha3' => 'TUR',
                        'IDC' => '90',
                    ),
                ),
                224 => array(
                    'TM' => array(
                        'Name' => 'Turkmenistan',
                        'Alpha2' => 'TM',
                        'Alpha3' => 'TKM',
                        'IDC' => '993',
                    ),
                ),
                225 => array(
                    'TC' => array(
                        'Name' => 'Turks and Caicos Islands',
                        'Alpha2' => 'TC',
                        'Alpha3' => 'TCA',
                        'IDC' => '1649',
                    ),
                ),
                226 => array(
                    'TV' => array(
                        'Name' => 'Tuvalu',
                        'Alpha2' => 'TV',
                        'Alpha3' => 'TUV',
                        'IDC' => '688',
                    ),
                ),
                227 => array(
                    'UG' => array(
                        'Name' => 'Uganda',
                        'Alpha2' => 'UG',
                        'Alpha3' => 'UGA',
                        'IDC' => '256',
                    ),
                ),
                228 => array(
                    'UA' => array(
                        'Name' => 'Ukraine',
                        'Alpha2' => 'UA',
                        'Alpha3' => 'UKR',
                        'IDC' => '380',
                    ),
                ),
                229 => array(
                    'AE' => array(
                        'Name' => 'United Arab Emirates',
                        'Alpha2' => 'AE',
                        'Alpha3' => 'ARE',
                        'IDC' => '971',
                    ),
                ),
                230 => array(
                    'GB' => array(
                        'Name' => 'United Kingdom',
                        'Alpha2' => 'GB',
                        'Alpha3' => 'GBR',
                        'IDC' => '44',
                    ),
                ),
                231 => array(
                    'UM' => array(
                        'Name' => 'United States Minor Outlying Islands',
                        'Alpha2' => 'UM',
                        'Alpha3' => 'UMI',
                        'IDC' => '1',
                    ),
                ),
                232 => array(
                    'US' => array(
                        'Name' => 'United States of America',
                        'Alpha2' => 'US',
                        'Alpha3' => 'USA',
                        'IDC' => '1',
                    ),
                ),
                233 => array(
                    'UY' => array(
                        'Name' => 'Uruguay',
                        'Alpha2' => 'UY',
                        'Alpha3' => 'URY',
                        'IDC' => '598',
                    ),
                ),
                234 => array(
                    'UZ' => array(
                        'Name' => 'Uzbekistan',
                        'Alpha2' => 'UZ',
                        'Alpha3' => 'UZB',
                        'IDC' => '998',
                    ),
                ),
                235 => array(
                    'VU' => array(
                        'Name' => 'Vanuatu',
                        'Alpha2' => 'VU',
                        'Alpha3' => 'VUT',
                        'IDC' => '678',
                    ),
                ),
                236 => array(
                    'VA' => array(
                        'Name' => 'Holy See (Vatican City State)',
                        'Alpha2' => 'VA',
                        'Alpha3' => 'VAT',
                        'IDC' => '3906',
                    ),
                ),
                237 => array(
                    'VE' => array(
                        'Name' => 'Venezuela',
                        'Alpha2' => 'VE',
                        'Alpha3' => 'VEN',
                        'IDC' => '58',
                    ),
                ),
                238 => array(
                    'VN' => array(
                        'Name' => 'Viet Nam',
                        'Alpha2' => 'VN',
                        'Alpha3' => 'VNM',
                        'IDC' => '84',
                    ),
                ),
                239 => array(
                    'VG' => array(
                        'Name' => 'Virgin Islands, British',
                        'Alpha2' => 'VG',
                        'Alpha3' => 'VGB',
                        'IDC' => '1284',
                    ),
                ),
                240 => array(
                    'VI' => array(
                        'Name' => 'Virgin Islands, U.S.',
                        'Alpha2' => 'VI',
                        'Alpha3' => 'VIR',
                        'IDC' => '1340',
                    ),
                ),
                241 => array(
                    'WF' => array(
                        'Name' => 'Wallis and Futuna',
                        'Alpha2' => 'WF',
                        'Alpha3' => 'WLF',
                        'IDC' => '681',
                    ),
                ),
                242 => array(
                    'EH' => array(
                        'Name' => 'Western Sahara',
                        'Alpha2' => 'EH',
                        'Alpha3' => 'ESH',
                        'IDC' => '212',
                    ),
                ),
                243 => array(
                    'YE' => array(
                        'Name' => 'Yemen',
                        'Alpha2' => 'YE',
                        'Alpha3' => 'YEM',
                        'IDC' => '967',
                    ),
                ),
                244 => array(
                    'ZM' => array(
                        'Name' => 'Zambia',
                        'Alpha2' => 'ZM',
                        'Alpha3' => 'ZMB',
                        'IDC' => '260',
                    ),
                ),
                245 => array(
                    'ZW' => array(
                        'Name' => 'Zimbabwe',
                        'Alpha2' => 'ZW',
                        'Alpha3' => 'ZWE',
                        'IDC' => '263',
                    ),
                ),
            ),
            'ezpublish.api.storage_engine.in_memory.class' => 'eZ\\Publish\\Core\\Persistence\\InMemory\\Handler',
            'ezpublish.api.storage_engine.legacy.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Handler',
            'ezpublish.api.storage_engine.legacy.factory.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\ApiLoader\\LegacyStorageEngineFactory',
            'ezpublish.api.storage_engine.legacy.defer_type_update' => false,
            'ezpublish.api.storage_engine.legacy.transformation_parser.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Search\\TransformationParser',
            'ezpublish.api.storage_engine.legacy.pcre_compiler.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Search\\TransformationPcreCompiler',
            'ezpublish.api.storage_engine.legacy.transformation_converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Search\\Utf8Converter',
            'ezpublish.api.storage_engine.legacy.transformation_processor.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Search\\TransformationProcessor',
            'ezpublish.api.storage_engine.legacy.transformation_rules.resources' => array(
                0 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/ascii.tr',
                1 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/basic.tr',
                2 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/cyrillic.tr',
                3 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/greek.tr',
                4 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/hebrew.tr',
                5 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/latin.tr',
                6 => '../vendor/ezsystems/ezpublish/eZ/Publish/Core/Persistence/Legacy/Tests/Content/SearchHandler/_fixtures/transformations/search.tr',
            ),
            'ezpublish.fieldtype.ezauthor.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Author',
            'ezpublish.fieldtype.ezbinaryfile.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\BinaryFile',
            'ezpublish.fieldtype.ezbinaryfile.storage_gateway.class' => 'eZ\\Publish\\Core\\FieldType\\BinaryFile\\BinaryFileStorage\\Gateway\\LegacyStorage',
            'ezpublish.fieldtype.ezboolean.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Checkbox',
            'ezpublish.fieldtype.ezcountry.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Country',
            'ezpublish.fieldtype.ezdatetime.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\DateAndTime',
            'ezpublish.fieldtype.ezemail.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\EmailAddress',
            'ezpublish.fieldtype.ezfloat.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Float',
            'ezpublish.fieldtype.ezinteger.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Integer',
            'ezpublish.fieldtype.ezkeyword.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Keyword',
            'ezpublish.fieldtype.ezkeyword.storage_gateway.class' => 'eZ\\Publish\\Core\\FieldType\\Keyword\\KeywordStorage\\Gateway\\LegacyStorage',
            'ezpublish.fieldtype.ezmedia.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Media',
            'ezpublish.fieldtype.ezmedia.storage_gateway.class' => 'eZ\\Publish\\Core\\FieldType\\Media\\MediaStorage\\Gateway\\LegacyStorage',
            'ezpublish.fieldtype.ezselection.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Selection',
            'ezpublish.fieldtype.ezstring.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine',
            'ezpublish.fieldtype.eztext.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextBlock',
            'ezpublish.fieldtype.ezxmltext.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\XmlText',
            'ezpublish.fieldtype.ezsrrating.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Rating',
            'ezpublish.fieldtype.ezurl.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Url',
            'ezpublish.fieldtype.ezurl.storage_gateway.class' => 'eZ\\Publish\\Core\\FieldType\\Url\\UrlStorage\\Gateway\\LegacyStorage',
            'ezpublish.fieldtype.ezuser.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Null',
            'ezpublish.fieldtype.ezuser.storage_gateway.class' => 'eZ\\Publish\\Core\\FieldType\\User\\UserStorage\\Gateway\\LegacyStorage',
            'ezpublish.fieldtype.ezpage.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\Page',
            'ezpublish.fieldtype.ezimage.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine',
            'ezpublish.fieldtype.ezgmaplocation.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine',
            'ezpublish.fieldtype.externalstoragehandler.ezgmaplocation.gateway.class' => 'eZ\\Publish\\Core\\FieldType\\MapLocation\\MapLocationStorage\\Gateway\\LegacyStorage',
            'ezpublish.fieldtype.ezcomcomments.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine',
            'ezpublish.fieldtype.ezobjectrelationlist.converter.class' => 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter\\TextLine',
            'ezpublish.api.role.limitation_type.content_type.class' => 'eZ\\Publish\\Core\\Limitation\\ContentTypeLimitationType',
            'ezpublish.api.role.limitation_type.language.class' => 'eZ\\Publish\\Core\\Limitation\\LanguageLimitationType',
            'ezpublish.api.role.limitation_type.location.class' => 'eZ\\Publish\\Core\\Limitation\\LocationLimitationType',
            'ezpublish.api.role.limitation_type.owner.class' => 'eZ\\Publish\\Core\\Limitation\\OwnerLimitationType',
            'ezpublish.api.role.limitation_type.parent_content_type.class' => 'eZ\\Publish\\Core\\Limitation\\ParentContentTypeLimitationType',
            'ezpublish.api.role.limitation_type.parent_depth.class' => 'eZ\\Publish\\Core\\Limitation\\ParentDepthLimitationType',
            'ezpublish.api.role.limitation_type.parent_owner.class' => 'eZ\\Publish\\Core\\Limitation\\ParentOwnerLimitationType',
            'ezpublish.api.role.limitation_type.parent_group.class' => 'eZ\\Publish\\Core\\Limitation\\ParentUserGroupLimitationType',
            'ezpublish.api.role.limitation_type.section.class' => 'eZ\\Publish\\Core\\Limitation\\SectionLimitationType',
            'ezpublish.api.role.limitation_type.new_section.class' => 'eZ\\Publish\\Core\\Limitation\\NewSectionLimitationType',
            'ezpublish.api.role.limitation_type.siteaccess.class' => 'eZ\\Publish\\Core\\Limitation\\SiteAccessLimitationType',
            'ezpublish.api.role.limitation_type.state.class' => 'eZ\\Publish\\Core\\Limitation\\StateLimitationType',
            'ezpublish.api.role.limitation_type.subtree.class' => 'eZ\\Publish\\Core\\Limitation\\SubtreeLimitationType',
            'ezpublish.api.role.limitation_type.user_group.class' => 'eZ\\Publish\\Core\\Limitation\\UserGroupLimitationType',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'twig.loader.string.class' => 'Twig_Loader_String',
            'ezpublish.twig.extension.content.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\Templating\\Twig\\Extension\\ContentExtension',
            'ezpublish.view_manager.class' => 'eZ\\Publish\\Core\\MVC\\Symfony\\View\\Manager',
            'ezpublish.content_view_provider.configured.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\View\\Provider\\Content\\Configured',
            'ezpublish.location_view_provider.configured.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\View\\Provider\\Location\\Configured',
            'ezpublish.content_view.viewbase_layout' => 'EzPublishCoreBundle::viewbase_layout.html.twig',
            'ezpublish.content_view.content_block_name' => 'content',
            'ezpublish.session_set_dynamic_name_listener.class' => 'eZ\\Bundle\\EzPublishCoreBundle\\EventListener\\SessionSetDynamicNameListener',
            'ezpublish.session.attribute_bag.storage_key' => '_ezpublish',
            'ezsettings.ezdemo_site.location_view' => array(
                'full' => array(
                    'smallFolder' => array(
                        'template' => 'eZDemoBundle:full:small_folder.html.twig',
                        'match' => array(
                            'Identifier\\ContentType' => 'small_folder',
                            'Identifier\\ParentContentType' => array(
                                0 => 'landing_page',
                                1 => 'frontpage',
                            ),
                        ),
                    ),
                ),
            ),
            'ezsettings.ezdemo_site_admin.location_view' => array(
            ),
            'ezsettings.ezdemo_site.content_view' => array(
            ),
            'ezsettings.ezdemo_site_admin.content_view' => array(
            ),
            'ezsettings.ezdemo_site.languages' => array(
                0 => 'eng-GB',
                1 => 'fre-FR',
            ),
            'ezsettings.ezdemo_site_admin.languages' => array(
                0 => 'eng-GB',
                1 => 'fre-FR',
            ),
            'ezsettings.ezdemo_site.database' => array(
                'type' => 'mysql',
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'root',
                'database_name' => 'ezdemo',
            ),
            'ezsettings.ezdemo_site_admin.database' => array(
                'type' => 'mysql',
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'root',
                'database_name' => 'ezdemo',
            ),
            'ezsettings.ezdemo_site.database.dsn' => 'mysql://root:root@localhost/ezdemo',
            'ezsettings.ezdemo_site_admin.database.dsn' => 'mysql://root:root@localhost/ezdemo',
            'ezsettings.ezdemo_group.url_alias_router' => true,
            'ezsettings.ezdemo_group.var_dir' => 'var',
            'ezsettings.ezdemo_group.storage_dir' => 'var/storage',
            'ezsettings.ezdemo_group.binary_dir' => 'var/storage/original',
            'ezsettings.ezdemo_site.url_alias_router' => true,
            'ezsettings.ezdemo_site.var_dir' => 'var',
            'ezsettings.ezdemo_site.storage_dir' => 'var/storage',
            'ezsettings.ezdemo_site.binary_dir' => 'var/storage/original',
            'ezsettings.ezdemo_site_admin.url_alias_router' => false,
            'ezsettings.ezdemo_site_admin.var_dir' => 'var',
            'ezsettings.ezdemo_site_admin.storage_dir' => 'var/storage',
            'ezsettings.ezdemo_site_admin.binary_dir' => 'var/storage/original',
            'ezsettings.ezdemo_site.content.view_cache' => true,
            'ezsettings.ezdemo_site.content.ttl_cache' => true,
            'ezsettings.ezdemo_site.content.default_ttl' => 30,
            'ezsettings.ezdemo_group.field_templates' => array(
            ),
            'ezsettings.ezdemo_site.field_templates' => array(
                0 => array(
                    'template' => 'EzPublishCoreBundle::content_fields.html.twig',
                    'priority' => 0,
                ),
            ),
            'ezsettings.ezdemo_site_admin.field_templates' => array(
                0 => array(
                    'template' => 'EzPublishCoreBundle::content_fields.html.twig',
                    'priority' => 0,
                ),
            ),
            'ezpublish_legacy.enabled' => true,
            'ezpublish_legacy.kernel.lazy_loader.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\Kernel\\Loader',
            'ezpublish_legacy.kernel_handler.class' => 'ezpKernelHandler',
            'ezpublish_legacy.kernel_handler.web.class' => 'ezpKernelWeb',
            'ezpublish_legacy.kernel_handler.treemenu.class' => 'ezpKernelTreeMenu',
            'ezpublish_legacy.controller.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\Controller\\LegacyKernelController',
            'ezpublish_legacy.treemenu.controller.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\Controller\\LegacyTreeMenuController',
            'ezpublish_legacy.treemenu.controller.options' => array(
            ),
            'ezpublish_legacy.router.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\Routing\\FallbackRouter',
            'ezpublish_legacy.url_generator.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\Routing\\UrlGenerator',
            'ezpublish_legacy.siteaccess_mapper.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\LegacyMapper\\SiteAccess',
            'ezpublish_legacy.session_mapper.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\LegacyMapper\\Session',
            'ezpublish_legacy.content_exception_handler.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\EventListener\\APIContentExceptionListener',
            'ezpublish_legacy.config.resolver.class' => 'eZ\\Bundle\\EzPublishLegacyBundle\\DependencyInjection\\Configuration\\LegacyConfigResolver',
            'ezpublish_legacy.config.default_scope' => 'site',
            'ezpublish_legacy.security.firewall_listener.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\Security\\Firewall\\LegacyListener',
            'ezpublish_legacy.root_dir' => '/var/www/ezpublish/app/ezpublish_legacy',
            'ezpublish_legacy.twig.extension.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\Templating\\Twig\\Extension\\LegacyExtension',
            'ezpublish_legacy.templating.api_content_converter.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\Templating\\Converter\\ApiContentConverter',
            'ezpublish_legacy.templating.delegating_converter.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\Templating\\Converter\\DelegatingConverter',
            'ezpublish_legacy.templating.generic_converter.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\Templating\\Converter\\GenericConverter',
            'ezpublish_legacy.content_view_provider.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\View\\Provider\\Content',
            'ezpublish_legacy.location_view_provider.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\View\\Provider\\Location',
            'ezpublish_legacy.view_decorator.twig.class' => 'eZ\\Publish\\Core\\MVC\\Legacy\\View\\TwigContentViewLayoutDecorator',
            'ezpublish_legacy.view_decorator.options' => array(
                'layout' => 'eZDemoBundle::pagelayout.html.twig',
                'viewbaseLayout' => 'EzPublishCoreBundle::viewbase_layout.html.twig',
                'contentBlockName' => 'content',
            ),
            'ezdemo.pre_content_view_listener.class' => 'EzSystems\\DemoBundle\\EventListener\\PreContentViewListener',
            'ezpublish_rest.controller.base.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller',
            'ezpublish_rest.controller.content.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\Content',
            'ezpublish_rest.controller.content_type.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\ContentType',
            'ezpublish_rest.controller.location.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\Location',
            'ezpublish_rest.controller.object_state.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\ObjectState',
            'ezpublish_rest.controller.role.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\Role',
            'ezpublish_rest.controller.root.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\Root',
            'ezpublish_rest.controller.section.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\Section',
            'ezpublish_rest.controller.trash.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\Trash',
            'ezpublish_rest.controller.user.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\User',
            'ezpublish_rest.controller.url_wildcard.class' => 'eZ\\Publish\\Core\\REST\\Server\\Controller\\URLWildcard',
            'ezpublish_rest.response_visitor_dispatcher.class' => 'eZ\\Publish\\Core\\REST\\Server\\View\\AcceptHeaderVisitorDispatcher',
            'ezpublish_rest.factory.class' => 'eZ\\Bundle\\EzPublishRestBundle\\ApiLoader\\Factory',
            'ezpublish_rest.input_dispatcher.class' => 'eZ\\Publish\\Core\\REST\\Common\\Input\\Dispatcher',
            'ezpublish_rest.url_handler.class' => 'eZ\\Publish\\Core\\REST\\Common\\UrlHandler\\Prefixed',
            'ezpublish_rest.parser_tools.class' => 'eZ\\Publish\\Core\\REST\\Common\\Input\\ParserTools',
            'ezpublish_rest.field_type_parser.class' => 'eZ\\Publish\\Core\\REST\\Common\\Input\\FieldTypeParser',
            'ezpublish_rest.listener.class' => 'eZ\\Bundle\\EzPublishRestBundle\\EventListener\\RestListener',
            'ezpublish_rest.field_type_serializer.class' => 'eZ\\Publish\\Core\\REST\\Common\\Output\\FieldTypeSerializer',
            'ezpublish_rest.field_type_processor_registry.class' => 'eZ\\Publish\\Core\\REST\\Common\\FieldTypeProcessorRegistry',
            'ezpublish_rest.request.class' => 'eZ\\Publish\\Core\\REST\\Server\\Request',
        );
    }
}

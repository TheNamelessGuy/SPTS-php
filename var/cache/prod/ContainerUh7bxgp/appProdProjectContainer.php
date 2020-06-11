<?php

namespace ContainerUh7bxgp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appProdProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'appbundle\\controller\\homepagecontroller' => 'AppBundle\\Controller\\HomePageController',
            'appbundle\\controller\\postpagecontroller' => 'AppBundle\\Controller\\PostPageController',
            'knp\\bundle\\markdownbundle\\markdownparserinterface' => 'Knp\\Bundle\\MarkdownBundle\\MarkdownParserInterface',
            'michelf\\markdowninterface' => 'Michelf\\MarkdownInterface',
            'sonata\\adminbundle\\action\\dashboardaction' => 'Sonata\\AdminBundle\\Action\\DashboardAction',
            'sonata\\adminbundle\\action\\searchaction' => 'Sonata\\AdminBundle\\Action\\SearchAction',
            'sonata\\adminbundle\\admin\\pool' => 'Sonata\\AdminBundle\\Admin\\Pool',
            'sonata\\adminbundle\\command\\createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
            'sonata\\adminbundle\\command\\explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
            'sonata\\adminbundle\\command\\generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
            'sonata\\adminbundle\\command\\generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
            'sonata\\adminbundle\\command\\listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
            'sonata\\adminbundle\\command\\setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
            'sonata\\blockbundle\\command\\debugblockscommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'sonata\\classificationbundle\\command\\fixcontextcommand' => 'Sonata\\ClassificationBundle\\Command\\FixContextCommand',
            'sonata\\corebundle\\command\\sonatadumpdoctrinemetacommand' => 'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
            'sonata\\corebundle\\command\\sonatalistformmappingcommand' => 'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            'sonata\\easyextendsbundle\\command\\dumpmappingcommand' => 'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand',
            'sonata\\easyextendsbundle\\command\\generatecommand' => 'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand',
            'sonata\\intlbundle\\templating\\helper\\datetimehelper' => 'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper',
            'sonata\\intlbundle\\templating\\helper\\localehelper' => 'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper',
            'sonata\\intlbundle\\templating\\helper\\numberhelper' => 'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper',
            'sonata\\mediabundle\\command\\addmassmediacommand' => 'Sonata\\MediaBundle\\Command\\AddMassMediaCommand',
            'sonata\\mediabundle\\command\\addmediacommand' => 'Sonata\\MediaBundle\\Command\\AddMediaCommand',
            'sonata\\mediabundle\\command\\cleanmediacommand' => 'Sonata\\MediaBundle\\Command\\CleanMediaCommand',
            'sonata\\mediabundle\\command\\fixmediacontextcommand' => 'Sonata\\MediaBundle\\Command\\FixMediaContextCommand',
            'sonata\\mediabundle\\command\\migratetojsontypecommand' => 'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand',
            'sonata\\mediabundle\\command\\refreshmetadatacommand' => 'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand',
            'sonata\\mediabundle\\command\\removethumbscommand' => 'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand',
            'sonata\\mediabundle\\command\\syncthumbscommand' => 'Sonata\\MediaBundle\\Command\\SyncThumbsCommand',
            'sonata\\mediabundle\\command\\updatecdnstatuscommand' => 'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand',
            'sonata\\mediabundle\\provider\\dailymotionprovider' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata\\mediabundle\\provider\\fileprovider' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata\\mediabundle\\provider\\imageprovider' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata\\mediabundle\\provider\\pool' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata\\mediabundle\\provider\\vimeoprovider' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata\\mediabundle\\provider\\youtubeprovider' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata\\newsbundle\\action\\collectionpostarchiveaction' => 'Sonata\\NewsBundle\\Action\\CollectionPostArchiveAction',
            'sonata\\newsbundle\\action\\commentlistaction' => 'Sonata\\NewsBundle\\Action\\CommentListAction',
            'sonata\\newsbundle\\action\\createcommentaction' => 'Sonata\\NewsBundle\\Action\\CreateCommentAction',
            'sonata\\newsbundle\\action\\createcommentformaction' => 'Sonata\\NewsBundle\\Action\\CreateCommentFormAction',
            'sonata\\newsbundle\\action\\dailypostarchiveaction' => 'Sonata\\NewsBundle\\Action\\DailyPostArchiveAction',
            'sonata\\newsbundle\\action\\moderatecommentaction' => 'Sonata\\NewsBundle\\Action\\ModerateCommentAction',
            'sonata\\newsbundle\\action\\monthlypostarchiveaction' => 'Sonata\\NewsBundle\\Action\\MonthlyPostArchiveAction',
            'sonata\\newsbundle\\action\\postarchiveaction' => 'Sonata\\NewsBundle\\Action\\PostArchiveAction',
            'sonata\\newsbundle\\action\\tagpostarchiveaction' => 'Sonata\\NewsBundle\\Action\\TagPostArchiveAction',
            'sonata\\newsbundle\\action\\viewpostaction' => 'Sonata\\NewsBundle\\Action\\ViewPostAction',
            'sonata\\newsbundle\\action\\yearlypostarchiveaction' => 'Sonata\\NewsBundle\\Action\\YearlyPostArchiveAction',
            'sonata\\newsbundle\\command\\synchronizecommentscountcommand' => 'Sonata\\NewsBundle\\Command\\SynchronizeCommentsCountCommand',
            'sonata\\userbundle\\action\\checkemailaction' => 'Sonata\\UserBundle\\Action\\CheckEmailAction',
            'sonata\\userbundle\\action\\checkloginaction' => 'Sonata\\UserBundle\\Action\\CheckLoginAction',
            'sonata\\userbundle\\action\\loginaction' => 'Sonata\\UserBundle\\Action\\LoginAction',
            'sonata\\userbundle\\action\\logoutaction' => 'Sonata\\UserBundle\\Action\\LogoutAction',
            'sonata\\userbundle\\action\\requestaction' => 'Sonata\\UserBundle\\Action\\RequestAction',
            'sonata\\userbundle\\action\\resetaction' => 'Sonata\\UserBundle\\Action\\ResetAction',
            'sonata\\userbundle\\action\\sendemailaction' => 'Sonata\\UserBundle\\Action\\SendEmailAction',
            'sonata\\userbundle\\command\\twostepverificationcommand' => 'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        ];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.property_access' => 'getCache_PropertyAccessService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'fos_ck_editor.builder.json_builder' => 'getFosCkEditor_Builder_JsonBuilderService',
            'fos_ck_editor.renderer' => 'getFosCkEditor_RendererService',
            'fos_ck_editor.twig_extension' => 'getFosCkEditor_TwigExtensionService',
            'fragment.listener' => 'getFragment_ListenerService',
            'framework_extra_bundle.argument_name_convertor' => 'getFrameworkExtraBundle_ArgumentNameConvertorService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'markdown.parser.parser_manager' => 'getMarkdown_Parser_ParserManagerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.classification.admin.category' => 'getSonata_Classification_Admin_CategoryService',
            'sonata.classification.admin.collection' => 'getSonata_Classification_Admin_CollectionService',
            'sonata.classification.admin.context' => 'getSonata_Classification_Admin_ContextService',
            'sonata.classification.admin.tag' => 'getSonata_Classification_Admin_TagService',
            'sonata.classification.manager.tag' => 'getSonata_Classification_Manager_TagService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.twig.deprecated_template_extension' => 'getSonata_Core_Twig_DeprecatedTemplateExtensionService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.formatter.pool' => 'getSonata_Formatter_PoolService',
            'sonata.formatter.text.markdown' => 'getSonata_Formatter_Text_MarkdownService',
            'sonata.formatter.text.raw' => 'getSonata_Formatter_Text_RawService',
            'sonata.formatter.text.text' => 'getSonata_Formatter_Text_TextService',
            'sonata.formatter.twig.control_flow' => 'getSonata_Formatter_Twig_ControlFlowService',
            'sonata.formatter.twig.env.markdown' => 'getSonata_Formatter_Twig_Env_MarkdownService',
            'sonata.formatter.twig.env.rawhtml' => 'getSonata_Formatter_Twig_Env_RawhtmlService',
            'sonata.formatter.twig.env.richhtml' => 'getSonata_Formatter_Twig_Env_RichhtmlService',
            'sonata.formatter.twig.env.text' => 'getSonata_Formatter_Twig_Env_TextService',
            'sonata.formatter.twig.gist' => 'getSonata_Formatter_Twig_GistService',
            'sonata.intl.locale_detector.request_stack' => 'getSonata_Intl_LocaleDetector_RequestStackService',
            'sonata.intl.templating.helper.datetime' => 'getSonata_Intl_Templating_Helper_DatetimeService',
            'sonata.intl.templating.helper.locale' => 'getSonata_Intl_Templating_Helper_LocaleService',
            'sonata.intl.templating.helper.number' => 'getSonata_Intl_Templating_Helper_NumberService',
            'sonata.intl.timezone_detector.chain' => 'getSonata_Intl_TimezoneDetector_ChainService',
            'sonata.intl.timezone_detector.locale' => 'getSonata_Intl_TimezoneDetector_LocaleService',
            'sonata.intl.timezone_detector.user' => 'getSonata_Intl_TimezoneDetector_UserService',
            'sonata.media.adapter.filesystem.local' => 'getSonata_Media_Adapter_Filesystem_LocalService',
            'sonata.media.adapter.image.gd' => 'getSonata_Media_Adapter_Image_GdService',
            'sonata.media.admin.gallery' => 'getSonata_Media_Admin_GalleryService',
            'sonata.media.admin.gallery_has_media' => 'getSonata_Media_Admin_GalleryHasMediaService',
            'sonata.media.admin.media' => 'getSonata_Media_Admin_MediaService',
            'sonata.media.buzz.browser' => 'getSonata_Media_Buzz_BrowserService',
            'sonata.media.buzz.connector.curl' => 'getSonata_Media_Buzz_Connector_CurlService',
            'sonata.media.cdn.server' => 'getSonata_Media_Cdn_ServerService',
            'sonata.media.filesystem.local' => 'getSonata_Media_Filesystem_LocalService',
            'sonata.media.formatter.twig' => 'getSonata_Media_Formatter_TwigService',
            'sonata.media.generator.default' => 'getSonata_Media_Generator_DefaultService',
            'sonata.media.manager.media' => 'getSonata_Media_Manager_MediaService',
            'sonata.media.metadata.proxy' => 'getSonata_Media_Metadata_ProxyService',
            'sonata.media.pool' => 'getSonata_Media_PoolService',
            'sonata.media.provider.dailymotion' => 'getSonata_Media_Provider_DailymotionService',
            'sonata.media.provider.file' => 'getSonata_Media_Provider_FileService',
            'sonata.media.provider.image' => 'getSonata_Media_Provider_ImageService',
            'sonata.media.provider.vimeo' => 'getSonata_Media_Provider_VimeoService',
            'sonata.media.provider.youtube' => 'getSonata_Media_Provider_YoutubeService',
            'sonata.media.resizer.simple' => 'getSonata_Media_Resizer_SimpleService',
            'sonata.media.resizer.square' => 'getSonata_Media_Resizer_SquareService',
            'sonata.media.security.superadmin_strategy' => 'getSonata_Media_Security_SuperadminStrategyService',
            'sonata.media.thumbnail.format' => 'getSonata_Media_Thumbnail_FormatService',
            'sonata.media.twig.extension' => 'getSonata_Media_Twig_ExtensionService',
            'sonata.media.twig.global' => 'getSonata_Media_Twig_GlobalService',
            'sonata.news.admin.comment' => 'getSonata_News_Admin_CommentService',
            'sonata.news.admin.post' => 'getSonata_News_Admin_PostService',
            'sonata.news.blog' => 'getSonata_News_BlogService',
            'sonata.news.permalink.date' => 'getSonata_News_Permalink_DateService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.matrix_roles_builder' => 'getSonata_User_MatrixRolesBuilderService',
            'sonata_translation.filter.type.translation_field' => 'getSonataTranslation_Filter_Type_TranslationFieldService',
            'sonata_translation.locale_switcher.locale_subscriber' => 'getSonataTranslation_LocaleSwitcher_LocaleSubscriberService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
        ];
        $this->fileMap = [
            'AppBundle\\Controller\\HomePageController' => 'getHomePageControllerService.php',
            'AppBundle\\Controller\\PostPageController' => 'getPostPageControllerService.php',
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService.php',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService.php',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService.php',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => 'getGenerateAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService.php',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService.php',
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'getDebugBlocksCommandService.php',
            'Sonata\\ClassificationBundle\\Command\\FixContextCommand' => 'getFixContextCommandService.php',
            'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService.php',
            'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService.php',
            'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand' => 'getDumpMappingCommandService.php',
            'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand' => 'getGenerateCommandService.php',
            'Sonata\\MediaBundle\\Command\\AddMassMediaCommand' => 'getAddMassMediaCommandService.php',
            'Sonata\\MediaBundle\\Command\\AddMediaCommand' => 'getAddMediaCommandService.php',
            'Sonata\\MediaBundle\\Command\\CleanMediaCommand' => 'getCleanMediaCommandService.php',
            'Sonata\\MediaBundle\\Command\\FixMediaContextCommand' => 'getFixMediaContextCommandService.php',
            'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand' => 'getMigrateToJsonTypeCommandService.php',
            'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand' => 'getRefreshMetadataCommandService.php',
            'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand' => 'getRemoveThumbsCommandService.php',
            'Sonata\\MediaBundle\\Command\\SyncThumbsCommand' => 'getSyncThumbsCommandService.php',
            'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand' => 'getUpdateCdnStatusCommandService.php',
            'Sonata\\NewsBundle\\Action\\CollectionPostArchiveAction' => 'getCollectionPostArchiveActionService.php',
            'Sonata\\NewsBundle\\Action\\CommentListAction' => 'getCommentListActionService.php',
            'Sonata\\NewsBundle\\Action\\CreateCommentAction' => 'getCreateCommentActionService.php',
            'Sonata\\NewsBundle\\Action\\CreateCommentFormAction' => 'getCreateCommentFormActionService.php',
            'Sonata\\NewsBundle\\Action\\DailyPostArchiveAction' => 'getDailyPostArchiveActionService.php',
            'Sonata\\NewsBundle\\Action\\ModerateCommentAction' => 'getModerateCommentActionService.php',
            'Sonata\\NewsBundle\\Action\\MonthlyPostArchiveAction' => 'getMonthlyPostArchiveActionService.php',
            'Sonata\\NewsBundle\\Action\\PostArchiveAction' => 'getPostArchiveActionService.php',
            'Sonata\\NewsBundle\\Action\\TagPostArchiveAction' => 'getTagPostArchiveActionService.php',
            'Sonata\\NewsBundle\\Action\\ViewPostAction' => 'getViewPostActionService.php',
            'Sonata\\NewsBundle\\Action\\YearlyPostArchiveAction' => 'getYearlyPostArchiveActionService.php',
            'Sonata\\NewsBundle\\Command\\SynchronizeCommentsCountCommand' => 'getSynchronizeCommentsCountCommandService.php',
            'Sonata\\UserBundle\\Action\\CheckEmailAction' => 'getCheckEmailActionService.php',
            'Sonata\\UserBundle\\Action\\CheckLoginAction' => 'getCheckLoginActionService.php',
            'Sonata\\UserBundle\\Action\\LoginAction' => 'getLoginActionService.php',
            'Sonata\\UserBundle\\Action\\LogoutAction' => 'getLogoutActionService.php',
            'Sonata\\UserBundle\\Action\\RequestAction' => 'getRequestActionService.php',
            'Sonata\\UserBundle\\Action\\ResetAction' => 'getResetActionService.php',
            'Sonata\\UserBundle\\Action\\SendEmailAction' => 'getSendEmailActionService.php',
            'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand' => 'getTwoStepVerificationCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.annotations' => 'getCache_AnnotationsService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache.validator' => 'getCache_ValidatorService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService.php',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService.php',
            'doctrine.orm.proxy_cache_warmer' => 'getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService.php',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.extension' => 'getForm_ExtensionService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.registry' => 'getForm_RegistryService.php',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.entity' => 'getForm_Type_EntityService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.transformation_failure_handling' => 'getForm_TypeExtension_Form_TransformationFailureHandlingService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fos_ck_editor.command.installer' => 'getFosCkEditor_Command_InstallerService.php',
            'fos_ck_editor.config_manager' => 'getFosCkEditor_ConfigManagerService.php',
            'fos_ck_editor.form.type' => 'getFosCkEditor_Form_TypeService.php',
            'fos_ck_editor.installer' => 'getFosCkEditor_InstallerService.php',
            'fos_ck_editor.plugin_manager' => 'getFosCkEditor_PluginManagerService.php',
            'fos_ck_editor.styles_set_manager' => 'getFosCkEditor_StylesSetManagerService.php',
            'fos_ck_editor.template_manager' => 'getFosCkEditor_TemplateManagerService.php',
            'fos_ck_editor.toolbar_manager' => 'getFosCkEditor_ToolbarManagerService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService.php',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService.php',
            'fos_user.command.activate_user' => 'getFosUser_Command_ActivateUserService.php',
            'fos_user.command.change_password' => 'getFosUser_Command_ChangePasswordService.php',
            'fos_user.command.create_user' => 'getFosUser_Command_CreateUserService.php',
            'fos_user.command.deactivate_user' => 'getFosUser_Command_DeactivateUserService.php',
            'fos_user.command.demote_user' => 'getFosUser_Command_DemoteUserService.php',
            'fos_user.command.promote_user' => 'getFosUser_Command_PromoteUserService.php',
            'fos_user.group.controller' => 'getFosUser_Group_ControllerService.php',
            'fos_user.group.form.factory' => 'getFosUser_Group_Form_FactoryService.php',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService.php',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService.php',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService.php',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService.php',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService.php',
            'fos_user.mailer' => 'getFosUser_MailerService.php',
            'fos_user.object_manager' => 'getFosUser_ObjectManagerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService.php',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService.php',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService.php',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService.php',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService.php',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService.php',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService.php',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService.php',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService.php',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService.php',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'knp_menu.menu_provider.builder_alias' => 'getKnpMenu_MenuProvider_BuilderAliasService.php',
            'knp_menu.menu_provider.lazy' => 'getKnpMenu_MenuProvider_LazyService.php',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService.php',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService.php',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService.php',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService.php',
            'security.acl.object_identity_retrieval_strategy' => 'getSecurity_Acl_ObjectIdentityRetrievalStrategyService.php',
            'security.acl.permission.map' => 'getSecurity_Acl_Permission_MapService.php',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService.php',
            'security.acl.security_identity_retrieval_strategy' => 'getSecurity_Acl_SecurityIdentityRetrievalStrategyService.php',
            'security.acl.voter.basic_permissions' => 'getSecurity_Acl_Voter_BasicPermissionsService.php',
            'security.acl.voter.user_permissions' => 'getSecurity_Acl_Voter_UserPermissionsService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.admin' => 'getSecurity_Authentication_Listener_Anonymous_AdminService.php',
            'security.authentication.listener.anonymous.main' => 'getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.listener.form.admin' => 'getSecurity_Authentication_Listener_Form_AdminService.php',
            'security.authentication.listener.form.main' => 'getSecurity_Authentication_Listener_Form_MainService.php',
            'security.authentication.provider.anonymous.admin' => 'getSecurity_Authentication_Provider_Anonymous_AdminService.php',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication.provider.dao.admin' => 'getSecurity_Authentication_Provider_Dao_AdminService.php',
            'security.authentication.provider.dao.main' => 'getSecurity_Authentication_Provider_Dao_MainService.php',
            'security.authentication.session_strategy.main' => 'getSecurity_Authentication_SessionStrategy_MainService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.init_acl' => 'getSecurity_Command_InitAclService.php',
            'security.command.set_acl' => 'getSecurity_Command_SetAclService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService.php',
            'security.http_utils' => 'getSecurity_HttpUtilsService.php',
            'security.logout.handler.csrf_token_clearing' => 'getSecurity_Logout_Handler_CsrfTokenClearingService.php',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.5p9hvc5' => 'getSecurity_RequestMatcher_5p9hvc5Service.php',
            'security.request_matcher.6xxs_ip' => 'getSecurity_RequestMatcher_6xxsIpService.php',
            'security.request_matcher.gt2qimv' => 'getSecurity_RequestMatcher_Gt2qimvService.php',
            'security.user_checker' => 'getSecurity_UserCheckerService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_framework_extra.routing.loader.annot_class' => 'getSensioFrameworkExtra_Routing_Loader_AnnotClassService.php',
            'sensio_framework_extra.routing.loader.annot_dir' => 'getSensioFrameworkExtra_Routing_Loader_AnnotDirService.php',
            'sensio_framework_extra.routing.loader.annot_file' => 'getSensioFrameworkExtra_Routing_Loader_AnnotFileService.php',
            'service_locator.sr6ctxe' => 'getServiceLocator_Sr6ctxeService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler' => 'getSession_HandlerService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService.php',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService.php',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService.php',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService.php',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService.php',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService.php',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService.php',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService.php',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService.php',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService.php',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService.php',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService.php',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService.php',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService.php',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService.php',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService.php',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService.php',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService.php',
            'sonata.admin.filter_persister.session' => 'getSonata_Admin_FilterPersister_SessionService.php',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService.php',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService.php',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService.php',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService.php',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService.php',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService.php',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService.php',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService.php',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService.php',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService.php',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService.php',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService.php',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService.php',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService.php',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService.php',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService.php',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService.php',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService.php',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService.php',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService.php',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService.php',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService.php',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService.php',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService.php',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService.php',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService.php',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService.php',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService.php',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService.php',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService.php',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService.php',
            'sonata.admin.menu.group_provider' => 'getSonata_Admin_Menu_GroupProviderService.php',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService.php',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService.php',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService.php',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService.php',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService.php',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService.php',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService.php',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService.php',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService.php',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService.php',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService.php',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService.php',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService.php',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService.php',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService.php',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService.php',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'sonata.classification.admin.category.template_registry' => 'getSonata_Classification_Admin_Category_TemplateRegistryService.php',
            'sonata.classification.admin.collection.template_registry' => 'getSonata_Classification_Admin_Collection_TemplateRegistryService.php',
            'sonata.classification.admin.context.template_registry' => 'getSonata_Classification_Admin_Context_TemplateRegistryService.php',
            'sonata.classification.admin.tag.template_registry' => 'getSonata_Classification_Admin_Tag_TemplateRegistryService.php',
            'sonata.classification.form.type.category_selector' => 'getSonata_Classification_Form_Type_CategorySelectorService.php',
            'sonata.classification.manager.category' => 'getSonata_Classification_Manager_CategoryService.php',
            'sonata.classification.manager.collection' => 'getSonata_Classification_Manager_CollectionService.php',
            'sonata.classification.manager.context' => 'getSonata_Classification_Manager_ContextService.php',
            'sonata.classification.serializer.handler.category' => 'getSonata_Classification_Serializer_Handler_CategoryService.php',
            'sonata.classification.serializer.handler.collection' => 'getSonata_Classification_Serializer_Handler_CollectionService.php',
            'sonata.classification.serializer.handler.context' => 'getSonata_Classification_Serializer_Handler_ContextService.php',
            'sonata.classification.serializer.handler.tag' => 'getSonata_Classification_Serializer_Handler_TagService.php',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService.php',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService.php',
            'sonata.core.flashmessage.twig.runtime' => 'getSonata_Core_Flashmessage_Twig_RuntimeService.php',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService.php',
            'sonata.core.form.type.array_legacy' => 'getSonata_Core_Form_Type_ArrayLegacyService.php',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService.php',
            'sonata.core.form.type.boolean_legacy' => 'getSonata_Core_Form_Type_BooleanLegacyService.php',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService.php',
            'sonata.core.form.type.collection_legacy' => 'getSonata_Core_Form_Type_CollectionLegacyService.php',
            'sonata.core.form.type.color_legacy' => 'getSonata_Core_Form_Type_ColorLegacyService.php',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService.php',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService.php',
            'sonata.core.form.type.date_picker_legacy' => 'getSonata_Core_Form_Type_DatePickerLegacyService.php',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService.php',
            'sonata.core.form.type.date_range_legacy' => 'getSonata_Core_Form_Type_DateRangeLegacyService.php',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService.php',
            'sonata.core.form.type.date_range_picker_legacy' => 'getSonata_Core_Form_Type_DateRangePickerLegacyService.php',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService.php',
            'sonata.core.form.type.datetime_picker_legacy' => 'getSonata_Core_Form_Type_DatetimePickerLegacyService.php',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService.php',
            'sonata.core.form.type.datetime_range_legacy' => 'getSonata_Core_Form_Type_DatetimeRangeLegacyService.php',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService.php',
            'sonata.core.form.type.datetime_range_picker_legacy' => 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService.php',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService.php',
            'sonata.core.form.type.equal_legacy' => 'getSonata_Core_Form_Type_EqualLegacyService.php',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService.php',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService.php',
            'sonata.core.model.adapter.doctrine_orm' => 'getSonata_Core_Model_Adapter_DoctrineOrmService.php',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService.php',
            'sonata.core.twig.status_runtime' => 'getSonata_Core_Twig_StatusRuntimeService.php',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService.php',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService.php',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService.php',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService.php',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService.php',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService.php',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService.php',
            'sonata.formatter.block.formatter' => 'getSonata_Formatter_Block_FormatterService.php',
            'sonata.formatter.ckeditor.extension' => 'getSonata_Formatter_Ckeditor_ExtensionService.php',
            'sonata.formatter.form.type.selector' => 'getSonata_Formatter_Form_Type_SelectorService.php',
            'sonata.formatter.form.type.simple' => 'getSonata_Formatter_Form_Type_SimpleService.php',
            'sonata.formatter.text.twigengine' => 'getSonata_Formatter_Text_TwigengineService.php',
            'sonata.formatter.validator.formatter' => 'getSonata_Formatter_Validator_FormatterService.php',
            'sonata.media.adapter.image.gmagick' => 'getSonata_Media_Adapter_Image_GmagickService.php',
            'sonata.media.adapter.image.imagick' => 'getSonata_Media_Adapter_Image_ImagickService.php',
            'sonata.media.adapter.service.s3' => 'getSonata_Media_Adapter_Service_S3Service.php',
            'sonata.media.admin.gallery.template_registry' => 'getSonata_Media_Admin_Gallery_TemplateRegistryService.php',
            'sonata.media.admin.gallery_has_media.template_registry' => 'getSonata_Media_Admin_GalleryHasMedia_TemplateRegistryService.php',
            'sonata.media.admin.media.manager' => 'getSonata_Media_Admin_Media_ManagerService.php',
            'sonata.media.admin.media.template_registry' => 'getSonata_Media_Admin_Media_TemplateRegistryService.php',
            'sonata.media.block.feature_media' => 'getSonata_Media_Block_FeatureMediaService.php',
            'sonata.media.block.gallery' => 'getSonata_Media_Block_GalleryService.php',
            'sonata.media.block.gallery_list' => 'getSonata_Media_Block_GalleryListService.php',
            'sonata.media.block.media' => 'getSonata_Media_Block_MediaService.php',
            'sonata.media.buzz.connector.file_get_contents' => 'getSonata_Media_Buzz_Connector_FileGetContentsService.php',
            'sonata.media.doctrine.event_subscriber' => 'getSonata_Media_Doctrine_EventSubscriberService.php',
            'sonata.media.form.type.media' => 'getSonata_Media_Form_Type_MediaService.php',
            'sonata.media.manager.category.default' => 'getSonata_Media_Manager_Category_DefaultService.php',
            'sonata.media.manager.gallery' => 'getSonata_Media_Manager_GalleryService.php',
            'sonata.media.metadata.amazon' => 'getSonata_Media_Metadata_AmazonService.php',
            'sonata.media.metadata.noop' => 'getSonata_Media_Metadata_NoopService.php',
            'sonata.media.security.connected_strategy' => 'getSonata_Media_Security_ConnectedStrategyService.php',
            'sonata.media.security.forbidden_strategy' => 'getSonata_Media_Security_ForbiddenStrategyService.php',
            'sonata.media.security.public_strategy' => 'getSonata_Media_Security_PublicStrategyService.php',
            'sonata.media.security.session_strategy' => 'getSonata_Media_Security_SessionStrategyService.php',
            'sonata.media.serializer.handler.gallery' => 'getSonata_Media_Serializer_Handler_GalleryService.php',
            'sonata.media.serializer.handler.media' => 'getSonata_Media_Serializer_Handler_MediaService.php',
            'sonata.media.validator.format' => 'getSonata_Media_Validator_FormatService.php',
            'sonata.news.admin.comment.template_registry' => 'getSonata_News_Admin_Comment_TemplateRegistryService.php',
            'sonata.news.admin.post.template_registry' => 'getSonata_News_Admin_Post_TemplateRegistryService.php',
            'sonata.news.block.breadcrumb_archive' => 'getSonata_News_Block_BreadcrumbArchiveService.php',
            'sonata.news.block.breadcrumb_post' => 'getSonata_News_Block_BreadcrumbPostService.php',
            'sonata.news.block.recent_comments' => 'getSonata_News_Block_RecentCommentsService.php',
            'sonata.news.block.recent_posts' => 'getSonata_News_Block_RecentPostsService.php',
            'sonata.news.form.comment.status_type' => 'getSonata_News_Form_Comment_StatusTypeService.php',
            'sonata.news.form.type.comment' => 'getSonata_News_Form_Type_CommentService.php',
            'sonata.news.hash.generator' => 'getSonata_News_Hash_GeneratorService.php',
            'sonata.news.mailer' => 'getSonata_News_MailerService.php',
            'sonata.news.manager.comment' => 'getSonata_News_Manager_CommentService.php',
            'sonata.news.manager.post' => 'getSonata_News_Manager_PostService.php',
            'sonata.news.permalink.collection' => 'getSonata_News_Permalink_CollectionService.php',
            'sonata.news.serializer.handler.post' => 'getSonata_News_Serializer_Handler_PostService.php',
            'sonata.news.status.comment' => 'getSonata_News_Status_CommentService.php',
            'sonata.templating' => 'getSonata_TemplatingService.php',
            'sonata.templating.locator' => 'getSonata_Templating_LocatorService.php',
            'sonata.templating.name_parser' => 'getSonata_Templating_NameParserService.php',
            'sonata.user.admin.group.template_registry' => 'getSonata_User_Admin_Group_TemplateRegistryService.php',
            'sonata.user.admin.user.template_registry' => 'getSonata_User_Admin_User_TemplateRegistryService.php',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService.php',
            'sonata.user.form.roles_matrix_type' => 'getSonata_User_Form_RolesMatrixTypeService.php',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService.php',
            'sonata.user.mailer.default' => 'getSonata_User_Mailer_DefaultService.php',
            'sonata.user.manager.user' => 'getSonata_User_Manager_UserService.php',
            'sonata_translation.checker.translatable' => 'getSonataTranslation_Checker_TranslatableService.php',
            'sonata_translation.locale_switcher.user_locale_subscriber' => 'getSonataTranslation_LocaleSwitcher_UserLocaleSubscriberService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating' => 'getTemplatingService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.markdown' => 'getTemplating_Helper_MarkdownService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.profile' => 'getTwig_ProfileService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'validator' => 'getValidatorService.php',
            'validator.builder' => 'getValidator_BuilderService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService.php',
        ];
        $this->privates = [
            'Knp\\Bundle\\MarkdownBundle\\MarkdownParserInterface' => true,
            'Michelf\\MarkdownInterface' => true,
            'Sonata\\AdminBundle\\Admin\\Pool' => true,
            'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper' => true,
            'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper' => true,
            'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper' => true,
            'Sonata\\MediaBundle\\Provider\\DailyMotionProvider' => true,
            'Sonata\\MediaBundle\\Provider\\FileProvider' => true,
            'Sonata\\MediaBundle\\Provider\\ImageProvider' => true,
            'Sonata\\MediaBundle\\Provider\\Pool' => true,
            'Sonata\\MediaBundle\\Provider\\VimeoProvider' => true,
            'Sonata\\MediaBundle\\Provider\\YouTubeProvider' => true,
            'fos_user.util.username_canonicalizer' => true,
            'security.acl.dbal.connection' => true,
            'security.authentication.session_strategy.admin' => true,
            'session.storage' => true,
            'sonata.block.cache.handler' => true,
            'sonata.block.context_manager' => true,
            'sonata.block.renderer' => true,
            'sonata.doctrine.model.adapter.chain' => true,
            'sonata.intl.locale_detector' => true,
            'sonata.intl.timezone_detector' => true,
            'sonata.media.adapter.image.default' => true,
            'sonata.media.resizer.default' => true,
            'sonata.news.permalink.generator' => true,
            'sonata.user.mailer' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => true,
            'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => true,
            'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.property_access' => true,
            'cache.validator' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.debug_handlers_listener' => true,
            'debug.file_link_formatter' => true,
            'debug.stopwatch' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'file_locator' => true,
            'form.extension' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'fos_ck_editor.builder.json_builder' => true,
            'fos_ck_editor.command.installer' => true,
            'fos_ck_editor.config_manager' => true,
            'fos_ck_editor.form.type' => true,
            'fos_ck_editor.installer' => true,
            'fos_ck_editor.plugin_manager' => true,
            'fos_ck_editor.renderer' => true,
            'fos_ck_editor.styles_set_manager' => true,
            'fos_ck_editor.template_manager' => true,
            'fos_ck_editor.toolbar_manager' => true,
            'fos_ck_editor.twig_extension' => true,
            'fos_user.change_password.form.factory' => true,
            'fos_user.change_password.form.type' => true,
            'fos_user.command.activate_user' => true,
            'fos_user.command.change_password' => true,
            'fos_user.command.create_user' => true,
            'fos_user.command.deactivate_user' => true,
            'fos_user.command.demote_user' => true,
            'fos_user.command.promote_user' => true,
            'fos_user.group.form.factory' => true,
            'fos_user.group.form.type' => true,
            'fos_user.listener.authentication' => true,
            'fos_user.listener.flash' => true,
            'fos_user.listener.resetting' => true,
            'fos_user.mailer' => true,
            'fos_user.object_manager' => true,
            'fos_user.profile.form.factory' => true,
            'fos_user.profile.form.type' => true,
            'fos_user.registration.form.factory' => true,
            'fos_user.registration.form.type' => true,
            'fos_user.resetting.form.factory' => true,
            'fos_user.resetting.form.type' => true,
            'fos_user.security.interactive_login_listener' => true,
            'fos_user.security.login_manager' => true,
            'fos_user.user_provider.username' => true,
            'fos_user.username_form_type' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.email_canonicalizer' => true,
            'fos_user.util.password_updater' => true,
            'fos_user.util.token_generator' => true,
            'fos_user.util.user_manipulator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.argument_name_convertor' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'jms_serializer.accessor_strategy' => true,
            'jms_serializer.expression_evaluator' => true,
            'jms_serializer.handler_registry' => true,
            'jms_serializer.naming_strategy' => true,
            'jms_serializer.templating.helper.serializer' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'kernel.class_cache.cache_warmer' => true,
            'knp_menu.menu_provider' => true,
            'knp_menu.menu_provider.builder_alias' => true,
            'knp_menu.menu_provider.lazy' => true,
            'knp_menu.renderer.list' => true,
            'knp_menu.renderer.twig' => true,
            'knp_menu.renderer_provider' => true,
            'knp_menu.voter.router' => true,
            'locale_listener' => true,
            'logger' => true,
            'markdown.parser.parser_manager' => true,
            'monolog.handler.console' => true,
            'monolog.handler.main' => true,
            'monolog.handler.nested' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.php' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.decision_manager' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.acl.dbal.schema' => true,
            'security.acl.object_identity_retrieval_strategy' => true,
            'security.acl.permission.map' => true,
            'security.acl.provider' => true,
            'security.acl.security_identity_retrieval_strategy' => true,
            'security.acl.voter.basic_permissions' => true,
            'security.acl.voter.user_permissions' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.admin' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.listener.form.admin' => true,
            'security.authentication.listener.form.main' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.admin' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.admin' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.session_strategy.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.init_acl' => true,
            'security.command.set_acl' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map.context.admin' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.main' => true,
            'security.http_utils' => true,
            'security.logout.handler.csrf_token_clearing' => true,
            'security.logout.handler.session' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.5p9hvc5' => true,
            'security.request_matcher.6xxs_ip' => true,
            'security.request_matcher.gt2qimv' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.routing.loader.annot_class' => true,
            'sensio_framework_extra.routing.loader.annot_dir' => true,
            'sensio_framework_extra.routing.loader.annot_file' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'service_locator.sr6ctxe' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'sonata.admin.builder.orm_datagrid' => true,
            'sonata.admin.builder.orm_form' => true,
            'sonata.admin.builder.orm_list' => true,
            'sonata.admin.builder.orm_show' => true,
            'sonata.admin.filter_persister.session' => true,
            'sonata.admin.guesser.orm_datagrid' => true,
            'sonata.admin.guesser.orm_datagrid_chain' => true,
            'sonata.admin.guesser.orm_list' => true,
            'sonata.admin.guesser.orm_list_chain' => true,
            'sonata.admin.guesser.orm_show' => true,
            'sonata.admin.guesser.orm_show_chain' => true,
            'sonata.admin.menu.group_provider' => true,
            'sonata.admin.security.handler' => true,
            'sonata.block.cache.handler.default' => true,
            'sonata.block.cache.handler.noop' => true,
            'sonata.block.exception.strategy.manager' => true,
            'sonata.block.form.type.block' => true,
            'sonata.block.form.type.container_template' => true,
            'sonata.block.loader.chain' => true,
            'sonata.block.loader.service' => true,
            'sonata.block.templating.helper' => true,
            'sonata.block.twig.global' => true,
            'sonata.classification.form.type.category_selector' => true,
            'sonata.classification.serializer.handler.category' => true,
            'sonata.classification.serializer.handler.collection' => true,
            'sonata.classification.serializer.handler.context' => true,
            'sonata.classification.serializer.handler.tag' => true,
            'sonata.core.date.moment_format_converter' => true,
            'sonata.core.flashmessage.twig.runtime' => true,
            'sonata.core.model.adapter.doctrine_orm' => true,
            'sonata.core.twig.deprecated_template_extension' => true,
            'sonata.core.twig.extension.text' => true,
            'sonata.core.twig.extension.wrapping' => true,
            'sonata.core.twig.status_extension' => true,
            'sonata.core.twig.status_runtime' => true,
            'sonata.core.twig.template_extension' => true,
            'sonata.core.validator.inline' => true,
            'sonata.easy_extends.doctrine.mapper' => true,
            'sonata.formatter.ckeditor.extension' => true,
            'sonata.formatter.form.type.selector' => true,
            'sonata.formatter.form.type.simple' => true,
            'sonata.formatter.pool' => true,
            'sonata.formatter.text.markdown' => true,
            'sonata.formatter.text.raw' => true,
            'sonata.formatter.text.text' => true,
            'sonata.formatter.text.twigengine' => true,
            'sonata.formatter.twig.env.markdown' => true,
            'sonata.formatter.twig.env.rawhtml' => true,
            'sonata.formatter.twig.env.richhtml' => true,
            'sonata.formatter.twig.env.text' => true,
            'sonata.formatter.validator.formatter' => true,
            'sonata.media.adapter.filesystem.local' => true,
            'sonata.media.adapter.image.gd' => true,
            'sonata.media.adapter.image.gmagick' => true,
            'sonata.media.adapter.image.imagick' => true,
            'sonata.media.adapter.service.s3' => true,
            'sonata.media.buzz.browser' => true,
            'sonata.media.buzz.connector.curl' => true,
            'sonata.media.buzz.connector.file_get_contents' => true,
            'sonata.media.cdn.server' => true,
            'sonata.media.doctrine.event_subscriber' => true,
            'sonata.media.filesystem.local' => true,
            'sonata.media.form.type.media' => true,
            'sonata.media.generator.default' => true,
            'sonata.media.resizer.simple' => true,
            'sonata.media.resizer.square' => true,
            'sonata.media.security.connected_strategy' => true,
            'sonata.media.security.forbidden_strategy' => true,
            'sonata.media.security.public_strategy' => true,
            'sonata.media.security.session_strategy' => true,
            'sonata.media.security.superadmin_strategy' => true,
            'sonata.media.serializer.handler.gallery' => true,
            'sonata.media.serializer.handler.media' => true,
            'sonata.media.thumbnail.format' => true,
            'sonata.media.twig.extension' => true,
            'sonata.media.twig.global' => true,
            'sonata.media.validator.format' => true,
            'sonata.news.blog' => true,
            'sonata.news.form.comment.status_type' => true,
            'sonata.news.form.type.comment' => true,
            'sonata.news.hash.generator' => true,
            'sonata.news.mailer' => true,
            'sonata.news.permalink.collection' => true,
            'sonata.news.permalink.date' => true,
            'sonata.news.serializer.handler.post' => true,
            'sonata.news.status.comment' => true,
            'sonata.templating' => true,
            'sonata.templating.locator' => true,
            'sonata.templating.name_parser' => true,
            'sonata.user.form.gender_list' => true,
            'sonata.user.mailer.default' => true,
            'sonata.user.matrix_roles_builder' => true,
            'sonata_translation.checker.translatable' => true,
            'sonata_translation.locale_switcher.locale_subscriber' => true,
            'sonata_translation.locale_switcher.user_locale_subscriber' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.markdown' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'validator.validator_factory' => true,
        ];
        $this->aliases = [
            'Knp\\Bundle\\MarkdownBundle\\MarkdownParserInterface' => 'markdown.parser',
            'Michelf\\MarkdownInterface' => 'markdown.parser',
            'Sonata\\AdminBundle\\Admin\\Pool' => 'sonata.admin.pool',
            'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper' => 'sonata.intl.templating.helper.datetime',
            'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper' => 'sonata.intl.templating.helper.locale',
            'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper' => 'sonata.intl.templating.helper.number',
            'Sonata\\MediaBundle\\Provider\\DailyMotionProvider' => 'sonata.media.provider.dailymotion',
            'Sonata\\MediaBundle\\Provider\\FileProvider' => 'sonata.media.provider.file',
            'Sonata\\MediaBundle\\Provider\\ImageProvider' => 'sonata.media.provider.image',
            'Sonata\\MediaBundle\\Provider\\Pool' => 'sonata.media.pool',
            'Sonata\\MediaBundle\\Provider\\VimeoProvider' => 'sonata.media.provider.vimeo',
            'Sonata\\MediaBundle\\Provider\\YouTubeProvider' => 'sonata.media.provider.youtube',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.sonata_blockbundle_command_debugblockscommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
            'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'security.authentication.session_strategy.admin' => 'security.authentication.session_strategy.main',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.doctrine.model.adapter.chain' => 'sonata.core.model.adapter.chain',
            'sonata.intl.locale_detector' => 'sonata.intl.locale_detector.request_stack',
            'sonata.intl.timezone_detector' => 'sonata.intl.timezone_detector.chain',
            'sonata.media.adapter.image.default' => 'sonata.media.adapter.image.gd',
            'sonata.media.manager.category' => 'sonata.media.manager.category.default',
            'sonata.media.resizer.default' => 'sonata.media.resizer.simple',
            'sonata.news.permalink.generator' => 'sonata.news.permalink.date',
            'sonata.user.group_manager' => 'fos_user.group_manager',
            'sonata.user.mailer' => 'sonata.user.mailer.default',
            'sonata.user.user_manager' => 'fos_user.user_manager',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\EventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\HttpKernelInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\TerminableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\HttpKernel.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestStack.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\FileLocatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\FileLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Config\\FileLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\UriSigner.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\AbstractSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\SessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ServiceLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\Packages.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\PackageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\Package.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\PathPackage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\Context\\ContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Asset\\Context\\RequestStackContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\TemplateNameParserInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\TemplateNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Formatter\\MessageFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\MessageSelector.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyAccess\\PropertyAccessor.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Stopwatch\\Stopwatch.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\RequestContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\RouterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Firewall.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\EventListener\\FirewallListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\FirewallMapInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\SecurityExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\TranslationExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\AssetExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\CodeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\RoutingExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\YamlExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\InitRuntimeInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\InitRuntimeInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Extension\\FormExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\TemplateRegistryExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Twig\\Extension\\BlockExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Twig\\RolesMatrixExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Twig\\SerializerRuntimeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Twig\\Extension\\NewsExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Twig\\Extension\\LocaleExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Twig\\Extension\\NumberExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Twig\\Extension\\DateTimeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Twig\\Extension\\MarkdownTwigExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Twig\\MenuExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Twig\\Helper.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Util\\MenuManipulator.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Twig\\Extension\\TextFormatterExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\AppVariable.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Twig\\GlobalVariables.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossedHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ConnectionRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\ManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\RegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\ControllerListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\ParamConverterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\TemplateListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Templating\\TemplateGuesser.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\HttpCacheListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\SecurityListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Security\\ExpressionLanguage.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\IsGrantedListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\FlashMessageExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\GlobalsInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\FormTypeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\extensions\\lib\\Twig\\Extensions\\Extension\\Text.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Twig\\Extension\\DeprecatedTextExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Twig\\Extension\\StatusExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\DeprecatedTemplateExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\TemplateExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\SonataAdminExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\Pool.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\GlobalVariables.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Templating\\TemplateRegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Templating\\MutableTemplateRegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Templating\\TemplateRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockContextManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockContextManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockRendererInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockRenderer.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\HelperInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\Helper.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Templating\\Helper\\BlockHelper.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockLoaderChain.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Loader\\ServiceLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Twig\\GlobalVariables.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Cache\\HttpCacheHandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Cache\\HttpCacheHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Strategy\\StrategyManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Strategy\\StrategyManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\RolesBuilderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\ExpandableRolesBuilderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\PermissionLabelsBuilderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\MatrixRolesBuilderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\MatrixRolesBuilder.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\AdminRolesBuilderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\AdminRolesBuilder.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\RolesBuilder\\SecurityRolesBuilder.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-extensions\\src\\Model\\ManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-extensions\\src\\Model\\BaseManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-extensions\\src\\Entity\\BaseEntityManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-extensions\\src\\Model\\PageableManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Model\\TagManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Entity\\TagManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\Pool.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Thumbnail\\ThumbnailInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Thumbnail\\FormatThumbnail.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\MediaProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\BaseProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\FileProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\ImageProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\BaseVideoProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\YouTubeProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\DailyMotionProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Provider\\VimeoProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\buzz\\lib\\Buzz\\Client\\ClientInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\buzz\\lib\\Buzz\\Client\\AbstractClient.php';
            include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\buzz\\lib\\Buzz\\Client\\AbstractCurl.php';
            include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\buzz\\lib\\Buzz\\Client\\Curl.php';
            include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\buzz\\lib\\Buzz\\Browser.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\CDN\\CDNInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\CDN\\Server.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Twig\\Extension\\MediaExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Twig\\GlobalVariables.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Security\\DownloadStrategyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Security\\RolesDownloadStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Adapter.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Adapter\\StreamFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Adapter\\ChecksumCalculator.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Adapter\\SizeCalculator.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Adapter\\MimeTypeProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Adapter\\Local.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Filesystem\\Local.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\FilesystemInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\gaufrette\\src\\Gaufrette\\Filesystem.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Metadata\\MetadataBuilderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Metadata\\ProxyMetadataBuilder.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Twig\\Extension\\FormatterMediaExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Model\\MediaManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Entity\\MediaManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Generator\\GeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Generator\\DefaultGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\imagine\\imagine\\lib\\Imagine\\Image\\ImagineInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\imagine\\imagine\\lib\\Imagine\\Image\\AbstractImagine.php';
            include_once $this->targetDirs[3].'\\vendor\\imagine\\imagine\\lib\\Imagine\\Gd\\Imagine.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Resizer\\ResizerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Resizer\\SimpleResizer.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Resizer\\SquareResizer.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Permalink\\PermalinkInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Permalink\\DatePermalink.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Model\\BlogInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Model\\Blog.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Locale\\LocaleDetectorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Locale\\RequestStackDetector.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Templating\\Helper\\BaseHelper.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Templating\\Helper\\LocaleHelper.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Templating\\Helper\\NumberHelper.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Templating\\Helper\\DateTimeHelper.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Timezone\\TimezoneDetectorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Timezone\\ChainTimezoneDetector.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Timezone\\UserBasedTimezoneDetector.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Timezone\\LocaleBasedTimezoneDetector.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\ParserManager.php';
            include_once $this->targetDirs[3].'\\vendor\\michelf\\php-markdown\\Michelf\\MarkdownInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\michelf\\php-markdown\\Michelf\\Markdown.php';
            include_once $this->targetDirs[3].'\\vendor\\michelf\\php-markdown\\Michelf\\MarkdownExtra.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\MarkdownParserInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\MarkdownParser.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\Preset\\Min.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\Preset\\Light.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\Preset\\Medium.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\Preset\\Max.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Parser\\Preset\\Flavored.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\MatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Matcher.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\RendererProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\PsrProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Builder\\JsonBuilder.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Renderer\\CKEditorRendererInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Renderer\\CKEditorRenderer.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Twig\\CKEditorExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\PoolInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\Pool.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\FormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\BaseFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\MarkdownFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\TextFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Formatter\\RawFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Extension\\ExtensionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Extension\\BaseExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Extension\\GistExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Extension\\ControlFlowExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Twig\\Loader\\LoaderSelector.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\ArrayLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\SandboxExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Sandbox\\SecurityPolicyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Twig\\SecurityPolicyContainerAware.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Lexer.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src\\EventSubscriber\\LocaleSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\RouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Provider\\MenuProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Provider\\ChainProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : ($this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : ($this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : ($this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : ($this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : ($this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : ($this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'};
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'};
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load('getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load('getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['sonata_translation.locale_switcher.locale_subscriber']) ? $this->services['sonata_translation.locale_switcher.locale_subscriber'] : ($this->services['sonata_translation.locale_switcher.locale_subscriber'] = new \Sonata\TranslationBundle\EventSubscriber\LocaleSubscriber('en'))) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 20);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ${($_ = isset($this->services['sonata_translation.locale_switcher.user_locale_subscriber']) ? $this->services['sonata_translation.locale_switcher.user_locale_subscriber'] : $this->load('getSonataTranslation_LocaleSwitcher_UserLocaleSubscriberService.php')) && false ?: '_'};
        }, 1 => 'onInteractiveLogin'], 0);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : ($this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : ($this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : ($this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : ($this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : ($this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : ($this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())) && false ?: '_'};
        }, 7)));
    }

    /*
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['sonata.admin.menu.matcher.voter.admin']) ? $this->services['sonata.admin.menu.matcher.voter.admin'] : $this->load('getSonata_Admin_Menu_Matcher_Voter_AdminService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['sonata.admin.menu.matcher.voter.active']) ? $this->services['sonata.admin.menu.matcher.voter.active'] : ($this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->load('getKnpMenu_Voter_RouterService.php')) && false ?: '_'};
        }, 3));
    }

    /*
     * Gets the public 'markdown.parser' shared service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing.yml'), ['cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : ($this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\BooleanFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\CallbackFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\ChoiceFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\ClassFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\AbstractDateFilter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\DateFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\AbstractDateFilter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\DateRangeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\AbstractDateFilter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\DateTimeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\AbstractDateFilter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\DateTimeRangeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\ModelFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\ModelAutocompleteFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\NumberFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\StringFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /*
     * Gets the public 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\AbstractDateFilter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\TimeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /*
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Admin', 'bundles/sonataadmin/logo_title.png', ['html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js', 22 => 'bundles/fosckeditor/ckeditor.js', 23 => 'bundles/sonataformatter/vendor/markitup-markitup/markitup/jquery.markitup.js', 24 => 'bundles/sonataformatter/markitup/sets/markdown/set.js', 25 => 'bundles/sonataformatter/markitup/sets/html/set.js', 26 => 'bundles/sonataformatter/markitup/sets/textile/set.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css', 15 => 'bundles/sonatatranslation/css/sonata-translation.css', 16 => 'bundles/sonataformatter/markitup/skins/sonata/style.css', 17 => 'bundles/sonataformatter/markitup/sets/markdown/style.css', 18 => 'bundles/sonataformatter/markitup/sets/html/style.css', 19 => 'bundles/sonataformatter/markitup/sets/textile/style.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true], ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});

        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->getSonata_Admin_GlobalTemplateRegistryService()) && false ?: '_'});
        $instance->setAdminServiceIds([0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group', 2 => 'sonata.classification.admin.category', 3 => 'sonata.classification.admin.tag', 4 => 'sonata.classification.admin.collection', 5 => 'sonata.classification.admin.context', 6 => 'sonata.media.admin.media', 7 => 'sonata.media.admin.gallery', 8 => 'sonata.media.admin.gallery_has_media', 9 => 'sonata.news.admin.post', 10 => 'sonata.news.admin.comment']);
        $instance->setAdminGroups(['sonata_user' => ['label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'icon' => '<i class=\'fa fa-users\'></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'sonata.user.admin.user', 'label' => 'users', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'sonata.user.admin.group', 'label' => 'groups', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'sonata_classification' => ['label' => 'sonata_classification', 'label_catalogue' => 'SonataClassificationBundle', 'icon' => '<i class=\'fa fa-tags\'></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'sonata.classification.admin.category', 'label' => 'label_categories', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'sonata.classification.admin.tag', 'label' => 'label_tags', 'route' => '', 'route_params' => [], 'route_absolute' => false], 2 => ['admin' => 'sonata.classification.admin.collection', 'label' => 'label_collections', 'route' => '', 'route_params' => [], 'route_absolute' => false], 3 => ['admin' => 'sonata.classification.admin.context', 'label' => 'label_contexts', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'sonata_media' => ['label' => 'sonata_media', 'label_catalogue' => 'SonataMediaBundle', 'icon' => '<i class=\'fa fa-image\'></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'sonata.media.admin.media', 'label' => 'media', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'sonata.media.admin.gallery', 'label' => 'gallery', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'sonata_blog' => ['label' => 'sonata_blog', 'label_catalogue' => 'SonataNewsBundle', 'icon' => '<i class=\'fa fa-rss-square\'></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'sonata.news.admin.post', 'label' => 'posts', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'sonata.news.admin.comment', 'label' => 'comments', 'route' => '', 'route_params' => [], 'route_absolute' => false]]]]);
        $instance->setAdminClasses(['Application\\Sonata\\UserBundle\\Entity\\User' => [0 => 'sonata.user.admin.user'], 'Application\\Sonata\\UserBundle\\Entity\\Group' => [0 => 'sonata.user.admin.group'], 'Application\\Sonata\\ClassificationBundle\\Entity\\Category' => [0 => 'sonata.classification.admin.category'], 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag' => [0 => 'sonata.classification.admin.tag'], 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection' => [0 => 'sonata.classification.admin.collection'], 'Application\\Sonata\\ClassificationBundle\\Entity\\Context' => [0 => 'sonata.classification.admin.context'], 'Application\\Sonata\\MediaBundle\\Entity\\Media' => [0 => 'sonata.media.admin.media'], 'Application\\Sonata\\MediaBundle\\Entity\\Gallery' => [0 => 'sonata.media.admin.gallery'], 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia' => [0 => 'sonata.media.admin.gallery_has_media'], 'Application\\Sonata\\NewsBundle\\Entity\\Post' => [0 => 'sonata.news.admin.post'], 'Application\\Sonata\\NewsBundle\\Entity\\Comment' => [0 => 'sonata.news.admin.comment']]);

        return $instance;
    }

    /*
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, $this, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, 'data:image/png;base64,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');
    }

    /*
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(${($_ = isset($this->services['sonata.block.loader.chain']) ? $this->services['sonata.block.loader.chain'] : $this->getSonata_Block_Loader_ChainService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, false, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', [0 => 'admin']);
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', []);
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', []);
        $instance->add('sonata.block.service.container', 'sonata.block.service.container', []);
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', []);
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', []);
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', []);
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', []);
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', []);
        $instance->add('sonata.media.block.media', 'sonata.media.block.media', []);
        $instance->add('sonata.media.block.feature_media', 'sonata.media.block.feature_media', []);
        $instance->add('sonata.media.block.gallery', 'sonata.media.block.gallery', []);
        $instance->add('sonata.media.block.gallery_list', 'sonata.media.block.gallery_list', []);
        $instance->add('sonata.news.block.recent_posts', 'sonata.news.block.recent_posts', []);
        $instance->add('sonata.news.block.recent_comments', 'sonata.news.block.recent_comments', []);
        $instance->add('sonata.news.block.breadcrumb_archive', 'sonata.news.block.breadcrumb_archive', []);
        $instance->add('sonata.news.block.breadcrumb_post', 'sonata.news.block.breadcrumb_post', []);
        $instance->add('sonata.formatter.block.formatter', 'sonata.formatter.block.formatter', []);

        return $instance;
    }

    /*
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.exception.strategy.manager']) ? $this->services['sonata.block.exception.strategy.manager'] : $this->getSonata_Block_Exception_Strategy_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'sonata.classification.admin.category' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\CategoryAdmin
     */
    protected function getSonata_Classification_Admin_CategoryService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\ContextAwareAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\CategoryAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\ClassificationBundle\Admin\CategoryAdmin('sonata.classification.admin.category', 'Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'SonataClassificationBundle:CategoryAdmin', ${($_ = isset($this->services['sonata.classification.manager.context']) ? $this->services['sonata.classification.manager.context'] : $this->load('getSonata_Classification_Manager_ContextService.php')) && false ?: '_'});

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('label_categories');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.classification.admin.category.template_registry']) ? $this->services['sonata.classification.admin.category.template_registry'] : $this->load('getSonata_Classification_Admin_Category_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.classification.admin.collection' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\CollectionAdmin
     */
    protected function getSonata_Classification_Admin_CollectionService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\ContextAwareAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\CollectionAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\ClassificationBundle\Admin\CollectionAdmin('sonata.classification.admin.collection', 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection', 'SonataAdminBundle:CRUD', ${($_ = isset($this->services['sonata.classification.manager.context']) ? $this->services['sonata.classification.manager.context'] : $this->load('getSonata_Classification_Manager_ContextService.php')) && false ?: '_'});

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('label_collections');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.classification.admin.collection.template_registry']) ? $this->services['sonata.classification.admin.collection.template_registry'] : $this->load('getSonata_Classification_Admin_Collection_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.classification.admin.context' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\ContextAdmin
     */
    protected function getSonata_Classification_Admin_ContextService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\ContextAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\ClassificationBundle\Admin\ContextAdmin('sonata.classification.admin.context', 'Application\\Sonata\\ClassificationBundle\\Entity\\Context', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('label_contexts');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.classification.admin.context.template_registry']) ? $this->services['sonata.classification.admin.context.template_registry'] : $this->load('getSonata_Classification_Admin_Context_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.classification.admin.tag' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\TagAdmin
     */
    protected function getSonata_Classification_Admin_TagService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\ContextAwareAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Admin\\TagAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\ClassificationBundle\Admin\TagAdmin('sonata.classification.admin.tag', 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag', 'SonataAdminBundle:CRUD', ${($_ = isset($this->services['sonata.classification.manager.context']) ? $this->services['sonata.classification.manager.context'] : $this->load('getSonata_Classification_Manager_ContextService.php')) && false ?: '_'});

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('label_tags');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.classification.admin.tag.template_registry']) ? $this->services['sonata.classification.admin.tag.template_registry'] : $this->load('getSonata_Classification_Admin_Tag_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.classification.manager.tag' shared service.
     *
     * @return \Sonata\ClassificationBundle\Entity\TagManager
     */
    protected function getSonata_Classification_Manager_TagService()
    {
        return $this->services['sonata.classification.manager.tag'] = new \Sonata\ClassificationBundle\Entity\TagManager('Application\\Sonata\\ClassificationBundle\\Entity\\Tag', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension();
    }

    /*
     * Gets the public 'sonata.formatter.twig.control_flow' shared service.
     *
     * @return \Sonata\FormatterBundle\Extension\ControlFlowExtension
     */
    protected function getSonata_Formatter_Twig_ControlFlowService()
    {
        return $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension();
    }

    /*
     * Gets the public 'sonata.formatter.twig.gist' shared service.
     *
     * @return \Sonata\FormatterBundle\Extension\GistExtension
     */
    protected function getSonata_Formatter_Twig_GistService()
    {
        return $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension();
    }

    /*
     * Gets the public 'sonata.intl.locale_detector.request_stack' shared service.
     *
     * @return \Sonata\IntlBundle\Locale\RequestStackDetector
     */
    protected function getSonata_Intl_LocaleDetector_RequestStackService()
    {
        return $this->services['sonata.intl.locale_detector.request_stack'] = new \Sonata\IntlBundle\Locale\RequestStackDetector(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'en');
    }

    /*
     * Gets the public 'sonata.intl.templating.helper.datetime' shared service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\DateTimeHelper
     */
    protected function getSonata_Intl_Templating_Helper_DatetimeService()
    {
        return $this->services['sonata.intl.templating.helper.datetime'] = new \Sonata\IntlBundle\Templating\Helper\DateTimeHelper(${($_ = isset($this->services['sonata.intl.timezone_detector.chain']) ? $this->services['sonata.intl.timezone_detector.chain'] : $this->getSonata_Intl_TimezoneDetector_ChainService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['sonata.intl.locale_detector.request_stack']) ? $this->services['sonata.intl.locale_detector.request_stack'] : $this->getSonata_Intl_LocaleDetector_RequestStackService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.intl.templating.helper.locale' shared service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\LocaleHelper
     */
    protected function getSonata_Intl_Templating_Helper_LocaleService()
    {
        return $this->services['sonata.intl.templating.helper.locale'] = new \Sonata\IntlBundle\Templating\Helper\LocaleHelper('UTF-8', ${($_ = isset($this->services['sonata.intl.locale_detector.request_stack']) ? $this->services['sonata.intl.locale_detector.request_stack'] : $this->getSonata_Intl_LocaleDetector_RequestStackService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.intl.templating.helper.number' shared service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\NumberHelper
     */
    protected function getSonata_Intl_Templating_Helper_NumberService()
    {
        return $this->services['sonata.intl.templating.helper.number'] = new \Sonata\IntlBundle\Templating\Helper\NumberHelper('UTF-8', ${($_ = isset($this->services['sonata.intl.locale_detector.request_stack']) ? $this->services['sonata.intl.locale_detector.request_stack'] : $this->getSonata_Intl_LocaleDetector_RequestStackService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.intl.timezone_detector.chain' shared service.
     *
     * @return \Sonata\IntlBundle\Timezone\ChainTimezoneDetector
     */
    protected function getSonata_Intl_TimezoneDetector_ChainService()
    {
        $this->services['sonata.intl.timezone_detector.chain'] = $instance = new \Sonata\IntlBundle\Timezone\ChainTimezoneDetector('Europe/Berlin');

        $instance->addDetector(${($_ = isset($this->services['sonata.intl.timezone_detector.user']) ? $this->services['sonata.intl.timezone_detector.user'] : $this->getSonata_Intl_TimezoneDetector_UserService()) && false ?: '_'});
        $instance->addDetector(${($_ = isset($this->services['sonata.intl.timezone_detector.locale']) ? $this->services['sonata.intl.timezone_detector.locale'] : $this->getSonata_Intl_TimezoneDetector_LocaleService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'sonata.intl.timezone_detector.locale' shared service.
     *
     * @return \Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector
     */
    protected function getSonata_Intl_TimezoneDetector_LocaleService()
    {
        return $this->services['sonata.intl.timezone_detector.locale'] = new \Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector(${($_ = isset($this->services['sonata.intl.locale_detector.request_stack']) ? $this->services['sonata.intl.locale_detector.request_stack'] : $this->getSonata_Intl_LocaleDetector_RequestStackService()) && false ?: '_'}, []);
    }

    /*
     * Gets the public 'sonata.intl.timezone_detector.user' shared service.
     *
     * @return \Sonata\IntlBundle\Timezone\UserBasedTimezoneDetector
     */
    protected function getSonata_Intl_TimezoneDetector_UserService()
    {
        return $this->services['sonata.intl.timezone_detector.user'] = new \Sonata\IntlBundle\Timezone\UserBasedTimezoneDetector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.media.admin.gallery' service.
     *
     * @return \Sonata\MediaBundle\Admin\GalleryAdmin
     */
    protected function getSonata_Media_Admin_GalleryService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Admin\\GalleryAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\MediaBundle\Admin\GalleryAdmin('sonata.media.admin.gallery', 'Application\\Sonata\\MediaBundle\\Entity\\Gallery', 'SonataMediaBundle:GalleryAdmin', ${($_ = isset($this->services['sonata.media.pool']) ? $this->services['sonata.media.pool'] : $this->getSonata_Media_PoolService()) && false ?: '_'});

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('gallery');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.media.admin.gallery.template_registry']) ? $this->services['sonata.media.admin.gallery.template_registry'] : $this->load('getSonata_Media_Admin_Gallery_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.admin.gallery_has_media' service.
     *
     * @return \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin
     */
    protected function getSonata_Media_Admin_GalleryHasMediaService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Admin\\GalleryHasMediaAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin('sonata.media.admin.gallery_has_media', 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('gallery_has_media');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.media.admin.gallery_has_media.template_registry']) ? $this->services['sonata.media.admin.gallery_has_media.template_registry'] : $this->load('getSonata_Media_Admin_GalleryHasMedia_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.admin.media' service.
     *
     * @return \Sonata\MediaBundle\Admin\ORM\MediaAdmin
     */
    protected function getSonata_Media_Admin_MediaService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Admin\\BaseMediaAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Admin\\ORM\\MediaAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminExtensionInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdminExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Admin\\CkeditorAdminExtension.php';

        $instance = new \Sonata\MediaBundle\Admin\ORM\MediaAdmin('sonata.media.admin.media', 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'SonataMediaBundle:MediaAdmin', ${($_ = isset($this->services['sonata.media.pool']) ? $this->services['sonata.media.pool'] : $this->getSonata_Media_PoolService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.manager.category.default']) ? $this->services['sonata.media.manager.category.default'] : $this->load('getSonata_Media_Manager_Category_DefaultService.php')) && false ?: '_'});

        $instance->setModelManager(${($_ = isset($this->services['sonata.media.admin.media.manager']) ? $this->services['sonata.media.admin.media.manager'] : $this->load('getSonata_Media_Admin_Media_ManagerService.php')) && false ?: '_'});
        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('media');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.media.admin.media.template_registry']) ? $this->services['sonata.media.admin.media.template_registry'] : $this->load('getSonata_Media_Admin_Media_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.ckeditor.extension']) ? $this->services['sonata.formatter.ckeditor.extension'] : ($this->services['sonata.formatter.ckeditor.extension'] = new \Sonata\FormatterBundle\Admin\CkeditorAdminExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.formatter.twig' shared service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension
     */
    protected function getSonata_Media_Formatter_TwigService()
    {
        return $this->services['sonata.media.formatter.twig'] = new \Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension(${($_ = isset($this->services['sonata.media.twig.extension']) ? $this->services['sonata.media.twig.extension'] : $this->getSonata_Media_Twig_ExtensionService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.media.manager.media' shared service.
     *
     * @return \Sonata\MediaBundle\Entity\MediaManager
     */
    protected function getSonata_Media_Manager_MediaService()
    {
        return $this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Entity\MediaManager('Application\\Sonata\\MediaBundle\\Entity\\Media', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /*
     * Gets the public 'sonata.media.metadata.proxy' shared service.
     *
     * @return \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder
     */
    protected function getSonata_Media_Metadata_ProxyService()
    {
        return $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this);
    }

    /*
     * Gets the public 'sonata.media.pool' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\Pool
     */
    protected function getSonata_Media_PoolService()
    {
        $this->services['sonata.media.pool'] = $instance = new \Sonata\MediaBundle\Provider\Pool('default');

        $instance->addContext('default', [0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image', 3 => 'sonata.media.provider.file', 4 => 'sonata.media.provider.vimeo'], ['default_small' => ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => NULL], 'default_big' => ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => NULL]], ['strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http']);
        $instance->addContext('news', [0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image', 3 => 'sonata.media.provider.file', 4 => 'sonata.media.provider.vimeo'], ['news_small' => ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => NULL], 'news_big' => ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => NULL]], ['strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http']);
        $instance->addDownloadStrategy('sonata.media.security.superadmin_strategy', ${($_ = isset($this->services['sonata.media.security.superadmin_strategy']) ? $this->services['sonata.media.security.superadmin_strategy'] : $this->getSonata_Media_Security_SuperadminStrategyService()) && false ?: '_'});
        $instance->addProvider('sonata.media.provider.image', ${($_ = isset($this->services['sonata.media.provider.image']) ? $this->services['sonata.media.provider.image'] : $this->getSonata_Media_Provider_ImageService()) && false ?: '_'});
        $instance->addProvider('sonata.media.provider.file', ${($_ = isset($this->services['sonata.media.provider.file']) ? $this->services['sonata.media.provider.file'] : $this->getSonata_Media_Provider_FileService()) && false ?: '_'});
        $instance->addProvider('sonata.media.provider.youtube', ${($_ = isset($this->services['sonata.media.provider.youtube']) ? $this->services['sonata.media.provider.youtube'] : $this->getSonata_Media_Provider_YoutubeService()) && false ?: '_'});
        $instance->addProvider('sonata.media.provider.dailymotion', ${($_ = isset($this->services['sonata.media.provider.dailymotion']) ? $this->services['sonata.media.provider.dailymotion'] : $this->getSonata_Media_Provider_DailymotionService()) && false ?: '_'});
        $instance->addProvider('sonata.media.provider.vimeo', ${($_ = isset($this->services['sonata.media.provider.vimeo']) ? $this->services['sonata.media.provider.vimeo'] : $this->getSonata_Media_Provider_VimeoService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.dailymotion' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\DailyMotionProvider
     */
    protected function getSonata_Media_Provider_DailymotionService()
    {
        $this->services['sonata.media.provider.dailymotion'] = $instance = new \Sonata\MediaBundle\Provider\DailyMotionProvider('sonata.media.provider.dailymotion', ${($_ = isset($this->services['sonata.media.filesystem.local']) ? $this->services['sonata.media.filesystem.local'] : $this->getSonata_Media_Filesystem_LocalService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.cdn.server']) ? $this->services['sonata.media.cdn.server'] : ($this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/SPTS-PNIOv3/web/uploads/media'))) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.generator.default']) ? $this->services['sonata.media.generator.default'] : ($this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator())) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.thumbnail.format']) ? $this->services['sonata.media.thumbnail.format'] : $this->getSonata_Media_Thumbnail_FormatService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.buzz.browser']) ? $this->services['sonata.media.buzz.browser'] : $this->getSonata_Media_Buzz_BrowserService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'});

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_dailymotion.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->setResizer(${($_ = isset($this->services['sonata.media.resizer.simple']) ? $this->services['sonata.media.resizer.simple'] : $this->getSonata_Media_Resizer_SimpleService()) && false ?: '_'});
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.file' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\FileProvider
     */
    protected function getSonata_Media_Provider_FileService()
    {
        $this->services['sonata.media.provider.file'] = $instance = new \Sonata\MediaBundle\Provider\FileProvider('sonata.media.provider.file', ${($_ = isset($this->services['sonata.media.filesystem.local']) ? $this->services['sonata.media.filesystem.local'] : $this->getSonata_Media_Filesystem_LocalService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.cdn.server']) ? $this->services['sonata.media.cdn.server'] : ($this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/SPTS-PNIOv3/web/uploads/media'))) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.generator.default']) ? $this->services['sonata.media.generator.default'] : ($this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator())) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.thumbnail.format']) ? $this->services['sonata.media.thumbnail.format'] : $this->getSonata_Media_Thumbnail_FormatService()) && false ?: '_'}, [0 => 'pdf', 1 => 'txt', 2 => 'rtf', 3 => 'doc', 4 => 'docx', 5 => 'xls', 6 => 'xlsx', 7 => 'ppt', 8 => 'pptx', 9 => 'odt', 10 => 'odg', 11 => 'odp', 12 => 'ods', 13 => 'odc', 14 => 'odf', 15 => 'odb', 16 => 'csv', 17 => 'xml'], [0 => 'application/pdf', 1 => 'application/x-pdf', 2 => 'application/rtf', 3 => 'text/html', 4 => 'text/rtf', 5 => 'text/plain', 6 => 'application/excel', 7 => 'application/msword', 8 => 'application/vnd.ms-excel', 9 => 'application/vnd.ms-powerpoint', 10 => 'application/vnd.ms-powerpoint', 11 => 'application/vnd.oasis.opendocument.text', 12 => 'application/vnd.oasis.opendocument.graphics', 13 => 'application/vnd.oasis.opendocument.presentation', 14 => 'application/vnd.oasis.opendocument.spreadsheet', 15 => 'application/vnd.oasis.opendocument.chart', 16 => 'application/vnd.oasis.opendocument.formula', 17 => 'application/vnd.oasis.opendocument.database', 18 => 'application/vnd.oasis.opendocument.image', 19 => 'text/comma-separated-values', 20 => 'text/xml', 21 => 'application/xml', 22 => 'application/zip'], ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'});

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_file.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.image' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\ImageProvider
     */
    protected function getSonata_Media_Provider_ImageService()
    {
        $this->services['sonata.media.provider.image'] = $instance = new \Sonata\MediaBundle\Provider\ImageProvider('sonata.media.provider.image', ${($_ = isset($this->services['sonata.media.filesystem.local']) ? $this->services['sonata.media.filesystem.local'] : $this->getSonata_Media_Filesystem_LocalService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.cdn.server']) ? $this->services['sonata.media.cdn.server'] : ($this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/SPTS-PNIOv3/web/uploads/media'))) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.generator.default']) ? $this->services['sonata.media.generator.default'] : ($this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator())) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.thumbnail.format']) ? $this->services['sonata.media.thumbnail.format'] : $this->getSonata_Media_Thumbnail_FormatService()) && false ?: '_'}, [0 => 'jpg', 1 => 'png', 2 => 'jpeg'], [0 => 'image/pjpeg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/x-png'], ${($_ = isset($this->services['sonata.media.adapter.image.gd']) ? $this->services['sonata.media.adapter.image.gd'] : ($this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine())) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'});

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_image.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->setResizer(${($_ = isset($this->services['sonata.media.resizer.square']) ? $this->services['sonata.media.resizer.square'] : $this->getSonata_Media_Resizer_SquareService()) && false ?: '_'});
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.vimeo' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\VimeoProvider
     */
    protected function getSonata_Media_Provider_VimeoService()
    {
        $this->services['sonata.media.provider.vimeo'] = $instance = new \Sonata\MediaBundle\Provider\VimeoProvider('sonata.media.provider.vimeo', ${($_ = isset($this->services['sonata.media.filesystem.local']) ? $this->services['sonata.media.filesystem.local'] : $this->getSonata_Media_Filesystem_LocalService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.cdn.server']) ? $this->services['sonata.media.cdn.server'] : ($this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/SPTS-PNIOv3/web/uploads/media'))) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.generator.default']) ? $this->services['sonata.media.generator.default'] : ($this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator())) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.thumbnail.format']) ? $this->services['sonata.media.thumbnail.format'] : $this->getSonata_Media_Thumbnail_FormatService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.buzz.browser']) ? $this->services['sonata.media.buzz.browser'] : $this->getSonata_Media_Buzz_BrowserService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'});

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_vimeo.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->setResizer(${($_ = isset($this->services['sonata.media.resizer.simple']) ? $this->services['sonata.media.resizer.simple'] : $this->getSonata_Media_Resizer_SimpleService()) && false ?: '_'});
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.youtube' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\YouTubeProvider
     */
    protected function getSonata_Media_Provider_YoutubeService()
    {
        $this->services['sonata.media.provider.youtube'] = $instance = new \Sonata\MediaBundle\Provider\YouTubeProvider('sonata.media.provider.youtube', ${($_ = isset($this->services['sonata.media.filesystem.local']) ? $this->services['sonata.media.filesystem.local'] : $this->getSonata_Media_Filesystem_LocalService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.cdn.server']) ? $this->services['sonata.media.cdn.server'] : ($this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/SPTS-PNIOv3/web/uploads/media'))) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.generator.default']) ? $this->services['sonata.media.generator.default'] : ($this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator())) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.thumbnail.format']) ? $this->services['sonata.media.thumbnail.format'] : $this->getSonata_Media_Thumbnail_FormatService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.buzz.browser']) ? $this->services['sonata.media.buzz.browser'] : $this->getSonata_Media_Buzz_BrowserService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'}, false);

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_youtube.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->addFormat('news_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false]);
        $instance->setResizer(${($_ = isset($this->services['sonata.media.resizer.simple']) ? $this->services['sonata.media.resizer.simple'] : $this->getSonata_Media_Resizer_SimpleService()) && false ?: '_'});
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.news.admin.comment' service.
     *
     * @return \Sonata\NewsBundle\Admin\CommentAdmin
     */
    protected function getSonata_News_Admin_CommentService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Admin\\CommentAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\NewsBundle\Admin\CommentAdmin('sonata.news.admin.comment', 'Application\\Sonata\\NewsBundle\\Entity\\Comment', 'SonataNewsBundle:CommentAdmin');

        $instance->setTranslationDomain('SonataNewsBundle');
        $instance->setCommentManager(${($_ = isset($this->services['sonata.news.manager.comment']) ? $this->services['sonata.news.manager.comment'] : $this->load('getSonata_News_Manager_CommentService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('comments');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.news.admin.comment.template_registry']) ? $this->services['sonata.news.admin.comment.template_registry'] : $this->load('getSonata_News_Admin_Comment_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.news.admin.post' service.
     *
     * @return \Sonata\NewsBundle\Admin\PostAdmin
     */
    protected function getSonata_News_Admin_PostService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Admin\\PostAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Admin\\CommentAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\NewsBundle\Admin\PostAdmin('sonata.news.admin.post', 'Application\\Sonata\\NewsBundle\\Entity\\Post', 'SonataAdminBundle:CRUD');

        $a = new \Sonata\NewsBundle\Admin\CommentAdmin('sonata.news.admin.comment', 'Application\\Sonata\\NewsBundle\\Entity\\Comment', 'SonataNewsBundle:CommentAdmin');

        $b = ${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'};
        $c = ${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'};
        $d = ${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'};
        $e = ${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'};
        $f = ${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'};
        $g = ${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'};
        $h = ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'};
        $i = ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'};
        $j = ${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'};
        $k = ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'};
        $l = ${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'};
        $m = ${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'};
        $n = ${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'};
        $o = ${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'};

        $a->setTranslationDomain('SonataNewsBundle');
        $a->setCommentManager(${($_ = isset($this->services['sonata.news.manager.comment']) ? $this->services['sonata.news.manager.comment'] : $this->load('getSonata_News_Manager_CommentService.php')) && false ?: '_'});
        $a->setLabelTranslatorStrategy($b);
        $a->setManagerType('orm');
        $a->setModelManager($c);
        $a->setFormContractor($d);
        $a->setShowBuilder($e);
        $a->setListBuilder($f);
        $a->setDatagridBuilder($g);
        $a->setTranslator($h, false);
        $a->setConfigurationPool($i);
        $a->setRouteGenerator($j);
        $a->setValidator($k);
        $a->setSecurityHandler($l);
        $a->setMenuFactory($m);
        $a->setRouteBuilder($n);
        $a->setPagerType('default');
        $a->setLabel('comments');
        $a->showMosaicButton(true);
        $a->setTemplateRegistry(${($_ = isset($this->services['sonata.news.admin.comment.template_registry']) ? $this->services['sonata.news.admin.comment.template_registry'] : $this->load('getSonata_News_Admin_Comment_TemplateRegistryService.php')) && false ?: '_'});
        $a->setSecurityInformation([]);
        $a->initialize();
        $a->addExtension($o);
        $a->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $a->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        $instance->setUserManager(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'});
        $instance->setPoolFormatter(${($_ = isset($this->services['sonata.formatter.pool']) ? $this->services['sonata.formatter.pool'] : $this->getSonata_Formatter_PoolService()) && false ?: '_'});
        $instance->addChild($a, 'post');
        $instance->setTranslationDomain('SonataNewsBundle');
        $instance->setPermalinkGenerator(${($_ = isset($this->services['sonata.news.permalink.date']) ? $this->services['sonata.news.permalink.date'] : $this->getSonata_News_Permalink_DateService()) && false ?: '_'});
        $instance->setLabelTranslatorStrategy($b);
        $instance->setManagerType('orm');
        $instance->setModelManager($c);
        $instance->setFormContractor($d);
        $instance->setShowBuilder($e);
        $instance->setListBuilder($f);
        $instance->setDatagridBuilder($g);
        $instance->setTranslator($h, false);
        $instance->setConfigurationPool($i);
        $instance->setRouteGenerator($j);
        $instance->setValidator($k);
        $instance->setSecurityHandler($l);
        $instance->setMenuFactory($m);
        $instance->setRouteBuilder($n);
        $instance->setPagerType('default');
        $instance->setLabel('posts');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.news.admin.post.template_registry']) ? $this->services['sonata.news.admin.post.template_registry'] : $this->load('getSonata_News_Admin_Post_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension($o);
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.user.admin.group' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\GroupAdmin
     */
    protected function getSonata_User_Admin_GroupService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Admin\\Model\\GroupAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Admin\\Entity\\GroupAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'Application\\Sonata\\UserBundle\\Entity\\Group', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('groups');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.user.admin.group.template_registry']) ? $this->services['sonata.user.admin.group.template_registry'] : $this->load('getSonata_User_Admin_Group_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.user.admin.user' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\UserAdmin
     */
    protected function getSonata_User_Admin_UserService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Admin\\Model\\UserAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Admin\\Entity\\UserAdmin.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';

        $instance = new \Sonata\UserBundle\Admin\Entity\UserAdmin('sonata.user.admin.user', 'Application\\Sonata\\UserBundle\\Entity\\User', 'SonataAdminBundle:CRUD');

        $instance->setUserManager(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'});
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : ($this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('users');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.user.admin.user.template_registry']) ? $this->services['sonata.user.admin.user.template_registry'] : $this->load('getSonata_User_Admin_User_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /*
     * Gets the public 'sonata_translation.filter.type.translation_field' service.
     *
     * @return \Sonata\TranslationBundle\Filter\TranslationFieldFilter
     */
    protected function getSonataTranslation_Filter_Type_TranslationFieldService()
    {
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Filter\\Filter.php';
        include_once $this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src\\Filter\\TranslationFieldFilter.php';

        return new \Sonata\TranslationBundle\Filter\TranslationFieldFilter();
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, ['paths' => [($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views') => NULL], 'form_themes' => [0 => 'form_div_layout.html.twig', 1 => '@SonataUser/Form/form_admin_fields.html.twig', 2 => '@SonataFormatter/Form/formatter.html.twig'], 'cache' => false, 'debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $a = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'};
        $c = new \Knp\Menu\Util\MenuManipulator();
        $d = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->getKnpMenu_MatcherService()) && false ?: '_'};
        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : ($this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))) && false ?: '_'}, ($this->targetDirs[3].'\\app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['sonata.core.flashmessage.twig.extension']) ? $this->services['sonata.core.flashmessage.twig.extension'] : ($this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.wrapping']) ? $this->services['sonata.core.twig.extension.wrapping'] : ($this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\Twig\Extension\FormTypeExtension('standard'))) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.text']) ? $this->services['sonata.core.twig.extension.text'] : ($this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.status_extension']) ? $this->services['sonata.core.twig.status_extension'] : ($this->services['sonata.core.twig.status_extension'] = new \Sonata\CoreBundle\Twig\Extension\StatusExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.deprecated_template_extension']) ? $this->services['sonata.core.twig.deprecated_template_extension'] : ($this->services['sonata.core.twig.deprecated_template_extension'] = new \Sonata\Twig\Extension\DeprecatedTemplateExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.template_extension']) ? $this->services['sonata.core.twig.template_extension'] : $this->getSonata_Core_Twig_TemplateExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.twig.extension']) ? $this->services['sonata.admin.twig.extension'] : $this->getSonata_Admin_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->getSonata_Admin_GlobalTemplateRegistryService()) && false ?: '_'}, $this));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(${($_ = isset($this->services['sonata.block.templating.helper']) ? $this->services['sonata.block.templating.helper'] : $this->getSonata_Block_Templating_HelperService()) && false ?: '_'}));
        $instance->addExtension(new \Sonata\UserBundle\Twig\RolesMatrixExtension(${($_ = isset($this->services['sonata.user.matrix_roles_builder']) ? $this->services['sonata.user.matrix_roles_builder'] : $this->getSonata_User_MatrixRolesBuilderService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['sonata.media.twig.extension']) ? $this->services['sonata.media.twig.extension'] : $this->getSonata_Media_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Sonata\NewsBundle\Twig\Extension\NewsExtension($a, ${($_ = isset($this->services['sonata.classification.manager.tag']) ? $this->services['sonata.classification.manager.tag'] : $this->getSonata_Classification_Manager_TagService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.news.blog']) ? $this->services['sonata.news.blog'] : $this->getSonata_News_BlogService()) && false ?: '_'}));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\LocaleExtension(${($_ = isset($this->services['sonata.intl.templating.helper.locale']) ? $this->services['sonata.intl.templating.helper.locale'] : $this->getSonata_Intl_Templating_Helper_LocaleService()) && false ?: '_'}));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\NumberExtension(${($_ = isset($this->services['sonata.intl.templating.helper.number']) ? $this->services['sonata.intl.templating.helper.number'] : $this->getSonata_Intl_Templating_Helper_NumberService()) && false ?: '_'}));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\DateTimeExtension(${($_ = isset($this->services['sonata.intl.templating.helper.datetime']) ? $this->services['sonata.intl.templating.helper.datetime'] : $this->getSonata_Intl_Templating_Helper_DatetimeService()) && false ?: '_'}));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension(${($_ = isset($this->services['markdown.parser.parser_manager']) ? $this->services['markdown.parser.parser_manager'] : $this->getMarkdown_Parser_ParserManagerService()) && false ?: '_'}));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->getKnpMenu_RendererProviderService()) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->getKnpMenu_MenuProviderService()) && false ?: '_'}, $c, $d), $d, $c));
        $instance->addExtension(${($_ = isset($this->services['fos_ck_editor.twig_extension']) ? $this->services['fos_ck_editor.twig_extension'] : $this->getFosCkEditor_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Sonata\FormatterBundle\Twig\Extension\TextFormatterExtension(${($_ = isset($this->services['sonata.formatter.pool']) ? $this->services['sonata.formatter.pool'] : $this->getSonata_Formatter_PoolService()) && false ?: '_'}));
        $instance->addGlobal('app', $e);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
            return ${($_ = isset($this->services['jms_serializer.twig_extension.serializer_runtime_helper']) ? $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] : $this->load('getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php')) && false ?: '_'};
        }, 'Sonata\\Twig\\Extension\\FlashMessageRuntime' => function () {
            return ${($_ = isset($this->services['sonata.core.flashmessage.twig.runtime']) ? $this->services['sonata.core.flashmessage.twig.runtime'] : $this->load('getSonata_Core_Flashmessage_Twig_RuntimeService.php')) && false ?: '_'};
        }, 'Sonata\\Twig\\Extension\\StatusRuntime' => function () {
            return ${($_ = isset($this->services['sonata.core.twig.status_runtime']) ? $this->services['sonata.core.twig.status_runtime'] : $this->load('getSonata_Core_Twig_StatusRuntimeService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }])));
        $instance->addGlobal('sonata_admin', ${($_ = isset($this->services['sonata.admin.twig.global']) ? $this->services['sonata.admin.twig.global'] : $this->getSonata_Admin_Twig_GlobalService()) && false ?: '_'});
        $instance->addGlobal('sonata_block', ${($_ = isset($this->services['sonata.block.twig.global']) ? $this->services['sonata.block.twig.global'] : ($this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']))) && false ?: '_'});
        $instance->addGlobal('sonata_user', new \Sonata\UserBundle\Twig\GlobalVariables($this));
        $instance->addGlobal('sonata_media', ${($_ = isset($this->services['sonata.media.twig.global']) ? $this->services['sonata.media.twig.global'] : ($this->services['sonata.media.twig.global'] = new \Sonata\MediaBundle\Twig\GlobalVariables($this))) && false ?: '_'});
        $instance->addGlobal('sonata_translation_locales', $this->parameters['sonata_translation.locales']);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /*
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, '', false);
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), []);
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->services['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('LLvIs8BBEX', NULL, $this->getParameter('container.build_id'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});
    }

    /*
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory();
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : ($this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /*
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), [0 => ($this->targetDirs[3].'\\app')]);
    }

    /*
     * Gets the private 'fos_ck_editor.builder.json_builder' shared service.
     *
     * @return \FOS\CKEditorBundle\Builder\JsonBuilder
     */
    protected function getFosCkEditor_Builder_JsonBuilderService()
    {
        return $this->services['fos_ck_editor.builder.json_builder'] = new \FOS\CKEditorBundle\Builder\JsonBuilder(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'fos_ck_editor.renderer' shared service.
     *
     * @return \FOS\CKEditorBundle\Renderer\CKEditorRenderer
     */
    protected function getFosCkEditor_RendererService()
    {
        return $this->services['fos_ck_editor.renderer'] = new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(${($_ = isset($this->services['fos_ck_editor.builder.json_builder']) ? $this->services['fos_ck_editor.builder.json_builder'] : $this->getFosCkEditor_Builder_JsonBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, (($this->has("twig")) ? ($this->get("twig")) : ($this->get("templating"))), (($this->hasParameter("locale")) ? ($this->getParameter("locale")) : (null)));
    }

    /*
     * Gets the private 'fos_ck_editor.twig_extension' shared service.
     *
     * @return \FOS\CKEditorBundle\Twig\CKEditorExtension
     */
    protected function getFosCkEditor_TwigExtensionService()
    {
        return $this->services['fos_ck_editor.twig_extension'] = new \FOS\CKEditorBundle\Twig\CKEditorExtension(${($_ = isset($this->services['fos_ck_editor.renderer']) ? $this->services['fos_ck_editor.renderer'] : $this->getFosCkEditor_RendererService()) && false ?: '_'});
    }

    /*
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt'))) && false ?: '_'}, '/_fragment');
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->services['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : ($this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())) && false ?: '_'});
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'knp_menu.menu_provider' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['sonata.admin.menu.group_provider']) ? $this->services['sonata.admin.menu.group_provider'] : $this->load('getSonata_Admin_Menu_GroupProviderService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['knp_menu.menu_provider.lazy']) ? $this->services['knp_menu.menu_provider.lazy'] : $this->load('getKnpMenu_MenuProvider_LazyService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['knp_menu.menu_provider.builder_alias']) ? $this->services['knp_menu.menu_provider.builder_alias'] : $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php')) && false ?: '_'};
        }, 3));
    }

    /*
     * Gets the private 'knp_menu.renderer_provider' shared service.
     *
     * @return \Knp\Menu\Renderer\PsrProvider
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(['list' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.list']) ? $this->services['knp_menu.renderer.list'] : $this->load('getKnpMenu_Renderer_ListService.php')) && false ?: '_'};
        }, 'twig' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.twig']) ? $this->services['knp_menu.renderer.twig'] : $this->load('getKnpMenu_Renderer_TwigService.php')) && false ?: '_'};
        }]), 'twig');
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'markdown.parser.parser_manager' shared service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\ParserManager
     */
    protected function getMarkdown_Parser_ParserManagerService()
    {
        $this->services['markdown.parser.parser_manager'] = $instance = new \Knp\Bundle\MarkdownBundle\Parser\ParserManager();

        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $instance->addParser(${($_ = isset($this->services['markdown.parser']) ? $this->services['markdown.parser'] : ($this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max())) && false ?: '_'}, 'default');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler(${($_ = isset($this->services['monolog.handler.nested']) ? $this->services['monolog.handler.nested'] : $this->getMonolog_Handler_NestedService()) && false ?: '_'}, 400, 0, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'});
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
    }

    /*
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.acl.voter.basic_permissions']) ? $this->services['security.acl.voter.basic_permissions'] : $this->load('getSecurity_Acl_Voter_BasicPermissionsService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.acl.voter.user_permissions']) ? $this->services['security.acl.voter.user_permissions'] : $this->load('getSecurity_Acl_Voter_UserPermissionsService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->load('getSecurity_Access_RoleHierarchyVoterService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 5), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->load('getSecurity_Authentication_Provider_Dao_MainService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : ($this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')))) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.dao.admin']) ? $this->services['security.authentication.provider.dao.admin'] : $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.authentication.provider.anonymous.admin']) ? $this->services['security.authentication.provider.anonymous.admin'] : ($this->services['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')))) && false ?: '_'};
        }, 4), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(['security.firewall.map.context.admin' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin']) ? $this->services['security.firewall.map.context.admin'] : $this->load('getSecurity_Firewall_Map_Context_AdminService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load('getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        }]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5p9hvc5']) ? $this->services['security.request_matcher.5p9hvc5'] : ($this->services['security.request_matcher.5p9hvc5'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|Images|js)/'))) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.gt2qimv']) ? $this->services['security.request_matcher.gt2qimv'] : ($this->services['security.request_matcher.gt2qimv'] = new \Symfony\Component\HttpFoundation\RequestMatcher('.*'))) && false ?: '_'};
            yield 'security.firewall.map.context.admin' => ${($_ = isset($this->services['security.request_matcher.6xxs_ip']) ? $this->services['security.request_matcher.6xxs_ip'] : ($this->services['security.request_matcher.6xxs_ip'] = new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'))) && false ?: '_'};
        }, 3)), ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, 'user');
        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, 'user');

        return $instance;
    }

    /*
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /*
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        }]));
    }

    /*
     * Gets the private 'sonata.block.cache.handler.default' shared service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /*
     * Gets the private 'sonata.block.exception.strategy.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, ['debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'], ['inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'], [], []);

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /*
     * Gets the private 'sonata.block.loader.chain' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain([0 => ${($_ = isset($this->services['sonata.block.loader.service']) ? $this->services['sonata.block.loader.service'] : $this->getSonata_Block_Loader_ServiceService()) && false ?: '_'}]);
    }

    /*
     * Gets the private 'sonata.block.loader.service' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader([0 => 'sonata.admin.block.admin_list', 'sonata.admin.block.admin_list' => ['context' => []], 'sonata.admin.block.search_result' => ['context' => []], 'sonata.admin.block.stats' => ['context' => []], 'sonata.block.service.container' => ['context' => []], 'sonata.block.service.empty' => ['context' => []], 'sonata.block.service.text' => ['context' => []], 'sonata.block.service.rss' => ['context' => []], 'sonata.block.service.menu' => ['context' => []], 'sonata.block.service.template' => ['context' => []], 'sonata.media.block.media' => ['context' => []], 'sonata.media.block.feature_media' => ['context' => []], 'sonata.media.block.gallery' => ['context' => []], 'sonata.media.block.gallery_list' => ['context' => []], 'sonata.news.block.recent_posts' => ['context' => []], 'sonata.news.block.recent_comments' => ['context' => []], 'sonata.news.block.breadcrumb_archive' => ['context' => []], 'sonata.news.block.breadcrumb_post' => ['context' => []], 'sonata.formatter.block.formatter' => ['context' => []]]);
    }

    /*
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['sonata.block.renderer.default']) ? $this->services['sonata.block.renderer.default'] : $this->getSonata_Block_Renderer_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.context_manager.default']) ? $this->services['sonata.block.context_manager.default'] : $this->getSonata_Block_ContextManager_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : ($this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.block.twig.global' shared service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']);
    }

    /*
     * Gets the private 'sonata.core.twig.deprecated_template_extension' shared service.
     *
     * @return \Sonata\Twig\Extension\DeprecatedTemplateExtension
     */
    protected function getSonata_Core_Twig_DeprecatedTemplateExtensionService()
    {
        return $this->services['sonata.core.twig.deprecated_template_extension'] = new \Sonata\Twig\Extension\DeprecatedTemplateExtension();
    }

    /*
     * Gets the private 'sonata.core.twig.extension.text' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension();
    }

    /*
     * Gets the private 'sonata.core.twig.extension.wrapping' shared service.
     *
     * @return \Sonata\Twig\Extension\FormTypeExtension
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\Twig\Extension\FormTypeExtension('standard');
    }

    /*
     * Gets the private 'sonata.core.twig.status_extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        return $this->services['sonata.core.twig.status_extension'] = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();
    }

    /*
     * Gets the private 'sonata.core.twig.template_extension' shared service.
     *
     * @return \Sonata\Twig\Extension\TemplateExtension
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\Twig\Extension\TemplateExtension(false, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.core.model.adapter.chain']) ? $this->services['sonata.core.model.adapter.chain'] : $this->load('getSonata_Core_Model_Adapter_ChainService.php')) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.formatter.pool' shared service.
     *
     * @return \Sonata\FormatterBundle\Formatter\Pool
     */
    protected function getSonata_Formatter_PoolService()
    {
        $this->services['sonata.formatter.pool'] = $instance = new \Sonata\FormatterBundle\Formatter\Pool('text');

        $a = ${($_ = isset($this->services['sonata.formatter.text.raw']) ? $this->services['sonata.formatter.text.raw'] : ($this->services['sonata.formatter.text.raw'] = new \Sonata\FormatterBundle\Formatter\RawFormatter())) && false ?: '_'};

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
        $instance->add('markdown', ${($_ = isset($this->services['sonata.formatter.text.markdown']) ? $this->services['sonata.formatter.text.markdown'] : $this->getSonata_Formatter_Text_MarkdownService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.formatter.twig.env.markdown']) ? $this->services['sonata.formatter.twig.env.markdown'] : $this->getSonata_Formatter_Twig_Env_MarkdownService()) && false ?: '_'});
        $instance->add('text', ${($_ = isset($this->services['sonata.formatter.text.text']) ? $this->services['sonata.formatter.text.text'] : ($this->services['sonata.formatter.text.text'] = new \Sonata\FormatterBundle\Formatter\TextFormatter())) && false ?: '_'}, ${($_ = isset($this->services['sonata.formatter.twig.env.text']) ? $this->services['sonata.formatter.twig.env.text'] : $this->getSonata_Formatter_Twig_Env_TextService()) && false ?: '_'});
        $instance->add('rawhtml', $a, ${($_ = isset($this->services['sonata.formatter.twig.env.rawhtml']) ? $this->services['sonata.formatter.twig.env.rawhtml'] : $this->getSonata_Formatter_Twig_Env_RawhtmlService()) && false ?: '_'});
        $instance->add('richhtml', $a, ${($_ = isset($this->services['sonata.formatter.twig.env.richhtml']) ? $this->services['sonata.formatter.twig.env.richhtml'] : $this->getSonata_Formatter_Twig_Env_RichhtmlService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.text.markdown' shared service.
     *
     * @return \Sonata\FormatterBundle\Formatter\MarkdownFormatter
     */
    protected function getSonata_Formatter_Text_MarkdownService()
    {
        return $this->services['sonata.formatter.text.markdown'] = new \Sonata\FormatterBundle\Formatter\MarkdownFormatter(${($_ = isset($this->services['markdown.parser']) ? $this->services['markdown.parser'] : ($this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max())) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.formatter.text.raw' shared service.
     *
     * @return \Sonata\FormatterBundle\Formatter\RawFormatter
     */
    protected function getSonata_Formatter_Text_RawService()
    {
        return $this->services['sonata.formatter.text.raw'] = new \Sonata\FormatterBundle\Formatter\RawFormatter();
    }

    /*
     * Gets the private 'sonata.formatter.text.text' shared service.
     *
     * @return \Sonata\FormatterBundle\Formatter\TextFormatter
     */
    protected function getSonata_Formatter_Text_TextService()
    {
        return $this->services['sonata.formatter.text.text'] = new \Sonata\FormatterBundle\Formatter\TextFormatter();
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.markdown' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_MarkdownService()
    {
        $this->services['sonata.formatter.twig.env.markdown'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}), ['debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8']);

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, [0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist', 2 => 'sonata.media.formatter.twig']), true));
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.control_flow']) ? $this->services['sonata.formatter.twig.control_flow'] : ($this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.gist']) ? $this->services['sonata.formatter.twig.gist'] : ($this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.media.formatter.twig']) ? $this->services['sonata.media.formatter.twig'] : $this->getSonata_Media_Formatter_TwigService()) && false ?: '_'});
        $instance->setLexer(new \Twig_Lexer($instance, ['tag_comment' => [0 => '<#', 1 => '#>'], 'tag_block' => [0 => '<%', 1 => '%>'], 'tag_variable' => [0 => '<%=', 1 => '%>']]));

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.rawhtml' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_RawhtmlService()
    {
        $this->services['sonata.formatter.twig.env.rawhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}), ['debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8']);

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, [0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist', 2 => 'sonata.media.formatter.twig']), true));
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.control_flow']) ? $this->services['sonata.formatter.twig.control_flow'] : ($this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.gist']) ? $this->services['sonata.formatter.twig.gist'] : ($this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.media.formatter.twig']) ? $this->services['sonata.media.formatter.twig'] : $this->getSonata_Media_Formatter_TwigService()) && false ?: '_'});
        $instance->setLexer(new \Twig_Lexer($instance, ['tag_comment' => [0 => '<#', 1 => '#>'], 'tag_block' => [0 => '<%', 1 => '%>'], 'tag_variable' => [0 => '<%=', 1 => '%>']]));

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.richhtml' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_RichhtmlService()
    {
        $this->services['sonata.formatter.twig.env.richhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}), ['debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8']);

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, [0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist', 2 => 'sonata.media.formatter.twig']), true));
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.control_flow']) ? $this->services['sonata.formatter.twig.control_flow'] : ($this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.gist']) ? $this->services['sonata.formatter.twig.gist'] : ($this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.media.formatter.twig']) ? $this->services['sonata.media.formatter.twig'] : $this->getSonata_Media_Formatter_TwigService()) && false ?: '_'});
        $instance->setLexer(new \Twig_Lexer($instance, ['tag_comment' => [0 => '<#', 1 => '#>'], 'tag_block' => [0 => '<%', 1 => '%>'], 'tag_variable' => [0 => '<%=', 1 => '%>']]));

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.text' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_TextService()
    {
        $this->services['sonata.formatter.twig.env.text'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}), ['debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8']);

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, [0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist', 2 => 'sonata.media.formatter.twig']), true));
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.control_flow']) ? $this->services['sonata.formatter.twig.control_flow'] : ($this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.formatter.twig.gist']) ? $this->services['sonata.formatter.twig.gist'] : ($this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.media.formatter.twig']) ? $this->services['sonata.media.formatter.twig'] : $this->getSonata_Media_Formatter_TwigService()) && false ?: '_'});
        $instance->setLexer(new \Twig_Lexer($instance, ['tag_comment' => [0 => '<#', 1 => '#>'], 'tag_block' => [0 => '<%', 1 => '%>'], 'tag_variable' => [0 => '<%=', 1 => '%>']]));

        return $instance;
    }

    /*
     * Gets the private 'sonata.media.adapter.filesystem.local' shared service.
     *
     * @return \Sonata\MediaBundle\Filesystem\Local
     */
    protected function getSonata_Media_Adapter_Filesystem_LocalService()
    {
        return $this->services['sonata.media.adapter.filesystem.local'] = new \Sonata\MediaBundle\Filesystem\Local(($this->targetDirs[3].'\\app/../web/uploads/media'), false);
    }

    /*
     * Gets the private 'sonata.media.adapter.image.gd' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    protected function getSonata_Media_Adapter_Image_GdService()
    {
        return $this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine();
    }

    /*
     * Gets the private 'sonata.media.buzz.browser' shared service.
     *
     * @return \Buzz\Browser
     */
    protected function getSonata_Media_Buzz_BrowserService()
    {
        return $this->services['sonata.media.buzz.browser'] = new \Buzz\Browser(${($_ = isset($this->services['sonata.media.buzz.connector.curl']) ? $this->services['sonata.media.buzz.connector.curl'] : $this->getSonata_Media_Buzz_Connector_CurlService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.media.buzz.connector.curl' shared service.
     *
     * @return \Buzz\Client\Curl
     */
    protected function getSonata_Media_Buzz_Connector_CurlService()
    {
        $this->services['sonata.media.buzz.connector.curl'] = $instance = new \Buzz\Client\Curl();

        $instance->setIgnoreErrors(true);
        $instance->setMaxRedirects(5);
        $instance->setTimeout(5);
        $instance->setVerifyPeer(true);
        $instance->setProxy(NULL);

        return $instance;
    }

    /*
     * Gets the private 'sonata.media.cdn.server' shared service.
     *
     * @return \Sonata\MediaBundle\CDN\Server
     */
    protected function getSonata_Media_Cdn_ServerService()
    {
        return $this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/SPTS-PNIOv3/web/uploads/media');
    }

    /*
     * Gets the private 'sonata.media.filesystem.local' shared service.
     *
     * @return \Gaufrette\Filesystem
     */
    protected function getSonata_Media_Filesystem_LocalService()
    {
        return $this->services['sonata.media.filesystem.local'] = new \Gaufrette\Filesystem(${($_ = isset($this->services['sonata.media.adapter.filesystem.local']) ? $this->services['sonata.media.adapter.filesystem.local'] : ($this->services['sonata.media.adapter.filesystem.local'] = new \Sonata\MediaBundle\Filesystem\Local(($this->targetDirs[3].'\\app/../web/uploads/media'), false))) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.media.generator.default' shared service.
     *
     * @return \Sonata\MediaBundle\Generator\DefaultGenerator
     */
    protected function getSonata_Media_Generator_DefaultService()
    {
        return $this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator();
    }

    /*
     * Gets the private 'sonata.media.resizer.simple' shared service.
     *
     * @return \Sonata\MediaBundle\Resizer\SimpleResizer
     */
    protected function getSonata_Media_Resizer_SimpleService()
    {
        return $this->services['sonata.media.resizer.simple'] = new \Sonata\MediaBundle\Resizer\SimpleResizer(${($_ = isset($this->services['sonata.media.adapter.image.gd']) ? $this->services['sonata.media.adapter.image.gd'] : ($this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine())) && false ?: '_'}, 'inset', ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.media.resizer.square' shared service.
     *
     * @return \Sonata\MediaBundle\Resizer\SquareResizer
     */
    protected function getSonata_Media_Resizer_SquareService()
    {
        return $this->services['sonata.media.resizer.square'] = new \Sonata\MediaBundle\Resizer\SquareResizer(${($_ = isset($this->services['sonata.media.adapter.image.gd']) ? $this->services['sonata.media.adapter.image.gd'] : ($this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine())) && false ?: '_'}, 'inset', ${($_ = isset($this->services['sonata.media.metadata.proxy']) ? $this->services['sonata.media.metadata.proxy'] : ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.media.security.superadmin_strategy' shared service.
     *
     * @return \Sonata\MediaBundle\Security\RolesDownloadStrategy
     */
    protected function getSonata_Media_Security_SuperadminStrategyService()
    {
        return $this->services['sonata.media.security.superadmin_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false), [0 => 'ROLE_ADMIN', 1 => 'ROLE_SUPER_ADMIN']);
    }

    /*
     * Gets the private 'sonata.media.thumbnail.format' shared service.
     *
     * @return \Sonata\MediaBundle\Thumbnail\FormatThumbnail
     */
    protected function getSonata_Media_Thumbnail_FormatService()
    {
        $this->services['sonata.media.thumbnail.format'] = $instance = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg');

        $instance->addResizer('sonata.media.resizer.simple', ${($_ = isset($this->services['sonata.media.resizer.simple']) ? $this->services['sonata.media.resizer.simple'] : $this->getSonata_Media_Resizer_SimpleService()) && false ?: '_'});
        $instance->addResizer('sonata.media.resizer.square', ${($_ = isset($this->services['sonata.media.resizer.square']) ? $this->services['sonata.media.resizer.square'] : $this->getSonata_Media_Resizer_SquareService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'sonata.media.twig.extension' shared service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\MediaExtension
     */
    protected function getSonata_Media_Twig_ExtensionService()
    {
        return $this->services['sonata.media.twig.extension'] = new \Sonata\MediaBundle\Twig\Extension\MediaExtension(${($_ = isset($this->services['sonata.media.pool']) ? $this->services['sonata.media.pool'] : $this->getSonata_Media_PoolService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.media.manager.media']) ? $this->services['sonata.media.manager.media'] : $this->getSonata_Media_Manager_MediaService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.media.twig.global' shared service.
     *
     * @return \Sonata\MediaBundle\Twig\GlobalVariables
     */
    protected function getSonata_Media_Twig_GlobalService()
    {
        return $this->services['sonata.media.twig.global'] = new \Sonata\MediaBundle\Twig\GlobalVariables($this);
    }

    /*
     * Gets the private 'sonata.news.blog' shared service.
     *
     * @return \Sonata\NewsBundle\Model\Blog
     */
    protected function getSonata_News_BlogService()
    {
        return $this->services['sonata.news.blog'] = new \Sonata\NewsBundle\Model\Blog('Sonata Project', 'https://sonata-project.org', 'Cool bundles on top of Symfony2', ${($_ = isset($this->services['sonata.news.permalink.date']) ? $this->services['sonata.news.permalink.date'] : $this->getSonata_News_Permalink_DateService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sonata.news.permalink.date' shared service.
     *
     * @return \Sonata\NewsBundle\Permalink\DatePermalink
     */
    protected function getSonata_News_Permalink_DateService()
    {
        return $this->services['sonata.news.permalink.date'] = new \Sonata\NewsBundle\Permalink\DatePermalink('%1$04d/%2$d/%3$d/%4$s');
    }

    /*
     * Gets the private 'sonata.user.matrix_roles_builder' shared service.
     *
     * @return \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder
     */
    protected function getSonata_User_MatrixRolesBuilderService()
    {
        $a = ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'};

        return $this->services['sonata.user.matrix_roles_builder'] = new \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, new \Sonata\UserBundle\Security\RolesBuilder\AdminRolesBuilder($a, $b, $c), new \Sonata\UserBundle\Security\RolesBuilder\SecurityRolesBuilder($a, $b, $c, $this->parameters['security.role_hierarchy.roles']));
    }

    /*
     * Gets the private 'sonata_translation.locale_switcher.locale_subscriber' shared service.
     *
     * @return \Sonata\TranslationBundle\EventSubscriber\LocaleSubscriber
     */
    protected function getSonataTranslation_LocaleSwitcher_LocaleSubscriberService()
    {
        return $this->services['sonata_translation.locale_switcher.locale_subscriber'] = new \Sonata\TranslationBundle\EventSubscriber\LocaleSubscriber('en');
    }

    /*
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : ($this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), [0 => ($this->targetDirs[3].'\\app')]))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /*
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /*
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(['translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : ($this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : ($this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : ($this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : ($this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : ($this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : ($this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : ($this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : ($this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : ($this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : ($this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader())) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : ($this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader())) && false ?: '_'};
        }]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.af.yml')], 'ar' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ar.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ar.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ar.xliff')], 'az' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')], 'bg' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bg.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.bg.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.bg.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.bg.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.bg.xliff')], 'ca' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ca.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ca.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ca.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ca.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.ca.xliff')], 'cs' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.cs.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.cs.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.cs.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.cs.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.cs.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.cs.xliff')], 'cy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.da.yml')], 'de' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.de.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.de.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.de.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.de.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.de.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.de.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.de.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.de.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.de.xliff'), 13 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.de.xliff'), 14 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.de.xliff')], 'el' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.el.yml')], 'en' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.en.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.en.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.en.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.en.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.en.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.en.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.en.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.en.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.en.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.en.xliff'), 13 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.en.xliff'), 14 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.en.xliff')], 'es' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.es.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.es.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.es.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.es.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.es.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.es.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.es.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.es.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.es.xliff')], 'et' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.et.yml')], 'eu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eu.yml'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.eu.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.eu.xliff')], 'fa' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fa.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fa.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.fa.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.fa.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.fa.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.fa.xliff')], 'fi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fi.yml'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fi.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.fi.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.fi.xliff')], 'fr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fr.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fr.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.fr.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.fr.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.fr.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.fr.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.fr.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.fr.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.fr.xliff'), 13 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.fr.xliff'), 14 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.fr.xliff')], 'gl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.gl.yml')], 'he' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.he.yml')], 'hr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hr.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.hr.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.hr.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.hr.xliff')], 'hu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hu.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.hu.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.hu.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.hu.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.hu.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.hu.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.hu.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.hu.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.hu.xliff'), 13 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.hu.xliff')], 'hy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.id.yml')], 'it' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.it.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.it.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.it.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.it.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.it.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.it.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.it.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.it.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.it.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.it.xliff')], 'ja' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ja.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ja.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ja.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ja.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.ja.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.ja.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.ja.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.ja.xliff')], 'lb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lb.yml'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.lb.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lb.xliff')], 'lt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lt.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.lt.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lt.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.lt.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.lt.xliff')], 'lv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lv.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lv.xliff')], 'mn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nb.yml')], 'nl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.nl.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.nl.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.nl.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.nl.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.nl.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.nl.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.nl.xliff')], 'nn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.no.xliff')], 'pl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pl.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pl.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.pl.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.pl.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.pl.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.pl.xliff')], 'pt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt.yml'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pt.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pt.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.pt.xliff')], 'pt_BR' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt_BR.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pt_BR.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pt_BR.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.pt_BR.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.pt_BR.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.pt_BR.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.pt_BR.xliff')], 'ro' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ro.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ro.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ro.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ro.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.ro.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.ro.xliff')], 'ru' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ru.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ru.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ru.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.ru.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\FOSUserBundle.ru.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ru.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/translations\\SonataClassificationBundle.ru.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.ru.xliff'), 12 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.ru.xliff'), 13 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.ru.xliff'), 14 => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/translations\\SonataTranslationBundle.ru.xliff')], 'sk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sk.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.sk.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sk.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.sk.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.sk.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.sk.xliff')], 'sl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.sl.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sl.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.sl.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.sl.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/translations\\SonataNewsBundle.sl.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/translations\\SonataFormatterBundle.sl.xliff')], 'sq' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sr_Latn.yml')], 'sv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sv.yml')], 'th' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.th.yml')], 'tl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.tr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.tr.xliff')], 'uk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.uk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.uk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.uk.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.uk.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.uk.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.uk.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/translations\\SonataMediaBundle.uk.xliff')], 'vi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.vi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.vi.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.vi.yml')], 'zh_CN' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.zh_CN.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.zh_CN.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.zh_CN.xliff')], 'zh_TW' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.zh_TW.xliff')], 'pt_PT' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')], 'bn' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn.yml')], 'bn_BD' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn_BD.yml')], 'eo' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eo.yml')], 'ky' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ky.yml')], 'sv_SE' => [0 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sv_SE.xliff')], 'zh_HK' => [0 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.zh_HK.xliff')]]]);

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : ($this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())) && false ?: '_'});
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /*
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/FOSUserBundle/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), '!FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/views'), '!SonataCore');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/SonataAdminBundle/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/views'), '!SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/views'), '!SonataBlock');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src/Resources/views'), '!SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/views'), '!SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle/Resources/views'), 'ApplicationSonataUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\ClassificationBundle/Resources/views'), 'SonataClassification');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/views'), 'SonataClassification');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src/Resources/views'), '!SonataClassification');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\ClassificationBundle/Resources/views'), 'ApplicationSonataClassification');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\MediaBundle/Resources/views'), 'SonataMedia');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/views'), 'SonataMedia');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src/Resources/views'), '!SonataMedia');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\MediaBundle/Resources/views'), 'ApplicationSonataMedia');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\NewsBundle/Resources/views'), 'SonataNews');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/views'), 'SonataNews');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src/Resources/views'), '!SonataNews');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src/Resources/views'), 'SonataIntl');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src/Resources/views'), '!SonataIntl');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views'), '!KnpMenu');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src/Resources/views'), 'FOSCKEditor');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src/Resources/views'), '!FOSCKEditor');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/views'), 'SonataFormatter');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src/Resources/views'), '!SonataFormatter');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\NewsBundle/Resources/views'), 'ApplicationSonataNews');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/views'), 'SonataTranslation');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src/Resources/views'), '!SonataTranslation');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'resources/templates_folder' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'router.resource' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\logs'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'DoctrineBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'AppBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\AppBundle'),
                    'namespace' => 'AppBundle',
                ],
                'FOSUserBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'SonataCoreBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ],
                'SonataAdminBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ],
                'SonataBlockBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'SonataDoctrineORMAdminBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ],
                'SonataEasyExtendsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\easy-extends-bundle\\src'),
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ],
                'SonataUserBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src'),
                    'namespace' => 'Sonata\\UserBundle',
                ],
                'ApplicationSonataUserBundle' => [
                    'parent' => 'SonataUserBundle',
                    'path' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle'),
                    'namespace' => 'Application\\Sonata\\UserBundle',
                ],
                'SonataClassificationBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src'),
                    'namespace' => 'Sonata\\ClassificationBundle',
                ],
                'ApplicationSonataClassificationBundle' => [
                    'parent' => 'SonataClassificationBundle',
                    'path' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\ClassificationBundle'),
                    'namespace' => 'Application\\Sonata\\ClassificationBundle',
                ],
                'SonataMediaBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src'),
                    'namespace' => 'Sonata\\MediaBundle',
                ],
                'JMSSerializerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'ApplicationSonataMediaBundle' => [
                    'parent' => 'SonataMediaBundle',
                    'path' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\MediaBundle'),
                    'namespace' => 'Application\\Sonata\\MediaBundle',
                ],
                'SonataNewsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src'),
                    'namespace' => 'Sonata\\NewsBundle',
                ],
                'SonataIntlBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src'),
                    'namespace' => 'Sonata\\IntlBundle',
                ],
                'KnpMarkdownBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle'),
                    'namespace' => 'Knp\\Bundle\\MarkdownBundle',
                ],
                'KnpMenuBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'FOSCKEditorBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src'),
                    'namespace' => 'FOS\\CKEditorBundle',
                ],
                'SonataFormatterBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src'),
                    'namespace' => 'Sonata\\FormatterBundle',
                ],
                'ApplicationSonataNewsBundle' => [
                    'parent' => 'SonataNewsBundle',
                    'path' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\NewsBundle'),
                    'namespace' => 'Application\\Sonata\\NewsBundle',
                ],
                'SonataTranslationBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\translation-bundle\\src'),
                    'namespace' => 'Sonata\\TranslationBundle',
                ],
            ]; break;
            case 'resources/templates_folder': $value = ($this->targetDirs[3].'/app/Resources'); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/var/sessions/prod'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing.yml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'ApplicationSonataUserBundle' => 'Application\\Sonata\\UserBundle\\ApplicationSonataUserBundle',
                'SonataClassificationBundle' => 'Sonata\\ClassificationBundle\\SonataClassificationBundle',
                'ApplicationSonataClassificationBundle' => 'Application\\Sonata\\ClassificationBundle\\ApplicationSonataClassificationBundle',
                'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'ApplicationSonataMediaBundle' => 'Application\\Sonata\\MediaBundle\\ApplicationSonataMediaBundle',
                'SonataNewsBundle' => 'Sonata\\NewsBundle\\SonataNewsBundle',
                'SonataIntlBundle' => 'Sonata\\IntlBundle\\SonataIntlBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'FOSCKEditorBundle' => 'FOS\\CKEditorBundle\\FOSCKEditorBundle',
                'SonataFormatterBundle' => 'Sonata\\FormatterBundle\\SonataFormatterBundle',
                'ApplicationSonataNewsBundle' => 'Application\\Sonata\\NewsBundle\\ApplicationSonataNewsBundle',
                'SonataTranslationBundle' => 'Sonata\\TranslationBundle\\SonataTranslationBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'SPTS-PNIOv3',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ],
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => [
                'ROLE_STUDENT/DIJAK' => [
                    0 => 'ROLE_STUDENT/DIJAK',
                ],
                'ROLE_PROFESSOR/PROFESOR' => [
                    0 => 'ROLE_PROFESSOR/PROFESOR',
                ],
                'ROLE_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_SONATA_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
                'ROLE_DEVELOPER' => [
                    0 => 'ROLE_DEVELOPER',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => '@SonataUser/Form/form_admin_fields.html.twig',
                3 => '@SonataFormatter/Form/formatter.html.twig',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ],
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'json' => [
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.from_email' => [
                'fake@fake.fake' => 'fake',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.email.from_email' => [
                'fake@fake.fake' => 'fake',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'sonata.core.flashmessage.manager.class' => 'Sonata\\Twig\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => [

            ],
            'sonata.core.form.mapping.extension' => [

            ],
            'sonata.admin.twig.extension.x_editable_type_mapping' => [
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ],
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.global_search.case_sensitive' => true,
            'sonata.admin.configuration.templates' => [
                'history_revision_timestamp' => '@SonataIntl/CRUD/history_revision_timestamp.html.twig',
                'user_block' => '@SonataUser/Admin/Core/user_block.html.twig',
                'layout' => '@SonataTranslation/standard_layout.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ],
            'sonata.admin.configuration.admin_services' => [

            ],
            'sonata.admin.configuration.dashboard_groups' => [

            ],
            'sonata.admin.configuration.dashboard_blocks' => [
                0 => [
                    'position' => 'left',
                    'settings' => [

                    ],
                    'type' => 'sonata.admin.block.admin_list',
                    'roles' => [

                    ],
                ],
            ],
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.mosaic_background' => 'data:image/png;base64,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',
            'sonata.admin.configuration.default_group' => 'default',
            'sonata.admin.configuration.default_label_catalogue' => 'SonataAdminBundle',
            'sonata.admin.configuration.default_icon' => '<i class="fa fa-folder"></i>',
            'sonata.admin.configuration.breadcrumbs' => [
                'child_admin_route' => 'edit',
            ],
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => [

            ],
            'sonata.admin.configuration.security.admin_permissions' => [
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ],
            'sonata.admin.configuration.security.object_permissions' => [
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ],
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => [
                'admins' => [

                ],
                'excludes' => [

                ],
                'implements' => [

                ],
                'extends' => [

                ],
                'instanceof' => [

                ],
                'uses' => [

                ],
            ],
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.admin.block.admin_list' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
            ],
            'sonata_block.blocks_by_class' => [

            ],
            'sonata_blocks.block_types' => [
                0 => 'sonata.admin.block.admin_list',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                ],
            ],
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => [
                'types' => [
                    'list' => [
                        'array' => '@SonataAdmin/CRUD/list_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig',
                        'date' => '@SonataIntl/CRUD/list_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/list_time.html.twig',
                        'datetime' => '@SonataIntl/CRUD/list_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'textarea' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'email' => '@SonataAdmin/CRUD/list_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/list_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'smallint' => '@SonataIntl/CRUD/list_decimal.html.twig',
                        'bigint' => '@SonataIntl/CRUD/list_decimal.html.twig',
                        'integer' => '@SonataIntl/CRUD/list_decimal.html.twig',
                        'decimal' => '@SonataIntl/CRUD/list_decimal.html.twig',
                        'identifier' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'currency' => '@SonataIntl/CRUD/list_currency.html.twig',
                        'percent' => '@SonataIntl/CRUD/list_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/list_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/list_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/list_html.html.twig',
                    ],
                    'show' => [
                        'array' => '@SonataAdmin/CRUD/show_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig',
                        'date' => '@SonataIntl/CRUD/show_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/show_time.html.twig',
                        'datetime' => '@SonataIntl/CRUD/show_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'email' => '@SonataAdmin/CRUD/show_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/show_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'smallint' => '@SonataIntl/CRUD/show_decimal.html.twig',
                        'bigint' => '@SonataIntl/CRUD/show_decimal.html.twig',
                        'integer' => '@SonataIntl/CRUD/show_decimal.html.twig',
                        'decimal' => '@SonataIntl/CRUD/show_decimal.html.twig',
                        'currency' => '@SonataIntl/CRUD/show_currency.html.twig',
                        'percent' => '@SonataIntl/CRUD/show_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/show_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/show_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/show_html.html.twig',
                    ],
                ],
                'form' => [
                    0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig',
                ],
                'filter' => [
                    0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig',
                ],
            ],
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.label_catalogue' => 'SonataUserBundle',
            'sonata.user.admin.groupicon' => '<i class=\'fa fa-users\'></i>',
            'security.acl.user_voter.class' => 'Sonata\\UserBundle\\Security\\Authorization\\Voter\\UserAclVoter',
            'sonata.user.admin.user.class' => 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.default_avatar' => 'bundles/sonatauser/default_avatar.png',
            'sonata.user.impersonating' => false,
            'sonata.user.google.authenticator.enabled' => false,
            'sonata.classification.manager.category.class' => 'Sonata\\ClassificationBundle\\Entity\\CategoryManager',
            'sonata.classification.manager.tag.class' => 'Sonata\\ClassificationBundle\\Entity\\TagManager',
            'sonata.classification.manager.collection.class' => 'Sonata\\ClassificationBundle\\Entity\\CollectionManager',
            'sonata.classification.manager.context.class' => 'Sonata\\ClassificationBundle\\Entity\\ContextManager',
            'sonata.classification.admin.groupname' => 'sonata_classification',
            'sonata.classification.admin.groupicon' => '<i class=\'fa fa-tags\'></i>',
            'sonata.classification.admin.tag.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag',
            'sonata.classification.admin.category.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Category',
            'sonata.classification.admin.collection.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection',
            'sonata.classification.admin.context.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Context',
            'sonata.classification.manager.tag.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag',
            'sonata.classification.manager.category.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Category',
            'sonata.classification.manager.collection.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection',
            'sonata.classification.manager.context.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Context',
            'sonata.classification.admin.category.class' => 'Sonata\\ClassificationBundle\\Admin\\CategoryAdmin',
            'sonata.classification.admin.category.controller' => 'SonataClassificationBundle:CategoryAdmin',
            'sonata.classification.admin.category.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.tag.class' => 'Sonata\\ClassificationBundle\\Admin\\TagAdmin',
            'sonata.classification.admin.tag.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.tag.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.collection.class' => 'Sonata\\ClassificationBundle\\Admin\\CollectionAdmin',
            'sonata.classification.admin.collection.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.collection.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.context.class' => 'Sonata\\ClassificationBundle\\Admin\\ContextAdmin',
            'sonata.classification.admin.context.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.context.translation_domain' => 'SonataClassificationBundle',
            'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail',
            'sonata.media.thumbnail.format.default' => 'jpg',
            'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail',
            'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer',
            'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer',
            'sonata.media.adapter.image.gd.class' => 'Imagine\\Gd\\Imagine',
            'sonata.media.adapter.image.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'sonata.media.adapter.image.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder',
            'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder',
            'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder',
            'sonata.media.adapater.filesystem.opencloud.class' => '',
            'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService',
            'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService',
            'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService',
            'sonata.media.block.gallery_list.class' => 'Sonata\\MediaBundle\\Block\\GalleryListBlockService',
            'sonata.media.manager.media.class' => 'Sonata\\MediaBundle\\Entity\\MediaManager',
            'sonata.media.manager.gallery.class' => 'Sonata\\MediaBundle\\Entity\\GalleryManager',
            'sonata.media.admin.groupname' => 'sonata_media',
            'sonata.media.admin.groupicon' => '<i class=\'fa fa-image\'></i>',
            'sonata.media.admin.media.class' => 'Sonata\\MediaBundle\\Admin\\ORM\\MediaAdmin',
            'sonata.media.admin.media.controller' => 'SonataMediaBundle:MediaAdmin',
            'sonata.media.admin.media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery.class' => 'Sonata\\MediaBundle\\Admin\\GalleryAdmin',
            'sonata.media.admin.gallery.controller' => 'SonataMediaBundle:GalleryAdmin',
            'sonata.media.admin.gallery.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery_has_media.class' => 'Sonata\\MediaBundle\\Admin\\GalleryHasMediaAdmin',
            'sonata.media.admin.gallery_has_media.controller' => 'SonataAdminBundle:CRUD',
            'sonata.media.admin.gallery_has_media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin_format' => [
                'width' => 200,
                'height' => NULL,
                'quality' => 90,
                'format' => 'jpg',
                'constraint' => true,
            ],
            'sonata.media.resizer.simple.adapter.mode' => 'inset',
            'sonata.media.resizer.square.adapter.mode' => 'inset',
            'sonata.media.admin.media.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.admin.gallery.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'sonata.media.admin.gallery_has_media.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia',
            'sonata.media.media.class' => 'Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.gallery.class' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => [

            ],
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'sonata.news.manager.comment.class' => 'Sonata\\NewsBundle\\Entity\\CommentManager',
            'sonata.news.manager.post.class' => 'Sonata\\NewsBundle\\Entity\\PostManager',
            'sonata.news.admin.groupname' => 'sonata_blog',
            'sonata.news.admin.groupicon' => '<i class=\'fa fa-rss-square\'></i>',
            'sonata.news.admin.post.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Post',
            'sonata.news.admin.comment.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Comment',
            'sonata.news.manager.post.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Post',
            'sonata.news.manager.comment.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Comment',
            'sonata.news.admin.post.class' => 'Sonata\\NewsBundle\\Admin\\PostAdmin',
            'sonata.news.admin.post.controller' => 'SonataAdminBundle:CRUD',
            'sonata.news.admin.post.translation_domain' => 'SonataNewsBundle',
            'sonata.news.admin.comment.class' => 'Sonata\\NewsBundle\\Admin\\CommentAdmin',
            'sonata.news.admin.comment.controller' => 'SonataNewsBundle:CommentAdmin',
            'sonata.news.admin.comment.translation_domain' => 'SonataNewsBundle',
            'sonata.intl.locale_detector.request.class' => 'Sonata\\IntlBundle\\Locale\\RequestDetector',
            'sonata.intl.locale_detector.session.class' => 'Sonata\\IntlBundle\\Locale\\SessionDetector',
            'sonata.intl.templating.helper.locale.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper',
            'sonata.intl.templating.helper.number.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper',
            'sonata.intl.templating.helper.datetime.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper',
            'sonata.intl.timezone_detector.chain.class' => 'Sonata\\IntlBundle\\Timezone\\ChainTimezoneDetector',
            'sonata.intl.timezone_detector.user.class' => 'Sonata\\IntlBundle\\Timezone\\UserBasedTimezoneDetector',
            'sonata.intl.timezone_detector.locale.class' => 'Sonata\\IntlBundle\\Timezone\\LocaleBasedTimezoneDetector',
            'sonata.intl.twig.helper.locale.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\LocaleExtension',
            'sonata.intl.twig.helper.number.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\NumberExtension',
            'sonata.intl.twig.helper.datetime.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\DateTimeExtension',
            'sonata_intl.timezone.detectors' => [
                0 => 'sonata.intl.timezone_detector.user',
                1 => 'sonata.intl.timezone_detector.locale',
            ],
            'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.formatter.text.markdown.class' => 'Sonata\\FormatterBundle\\Formatter\\MarkdownFormatter',
            'sonata.formatter.text.text.class' => 'Sonata\\FormatterBundle\\Formatter\\TextFormatter',
            'sonata.formatter.text.raw.class' => 'Sonata\\FormatterBundle\\Formatter\\RawFormatter',
            'sonata.formatter.text.twigengine.class' => 'Sonata\\FormatterBundle\\Formatter\\TwigFormatter',
            'sonata.formatter.block.formatter.class' => 'Sonata\\FormatterBundle\\Block\\FormatterBlockService',
            'sonata.formatter.ckeditor.extension.class' => 'Sonata\\FormatterBundle\\Admin\\CkeditorAdminExtension',
            'sonata.formatter.ckeditor.configuration.templates' => [
                'browser' => '@SonataFormatter/Ckeditor/browser.html.twig',
                'upload' => '@SonataFormatter/Ckeditor/upload.html.twig',
            ],
            'sonata_translation.locales' => [
                0 => 'en',
                1 => 'fr',
                2 => 'it',
                3 => 'nl',
                4 => 'es',
                5 => 'sl',
            ],
            'sonata_translation.default_locale' => 'en',
            'sonata_translation.locale_switcher_show_country_flags' => true,
            'sonata_translation.locale_switcher.locale_subscriber.class' => 'Sonata\\TranslationBundle\\EventSubscriber\\LocaleSubscriber',
            'sonata_translation.locale_switcher.user_locale_subscriber.class' => 'Sonata\\TranslationBundle\\EventSubscriber\\UserLocaleSubscriber',
            'sonata_translation.checker.translatable.class' => 'Sonata\\TranslationBundle\\Checker\\TranslatableChecker',
            'sonata_translation.targets' => [

            ],
            'sonata.core.form.types' => [
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.entity',
                3 => 'fos_user.username_form_type',
                4 => 'fos_user.profile.form.type',
                5 => 'fos_user.registration.form.type',
                6 => 'fos_user.change_password.form.type',
                7 => 'fos_user.resetting.form.type',
                8 => 'fos_user.group.form.type',
                9 => 'sonata.core.form.type.array_legacy',
                10 => 'sonata.core.form.type.boolean_legacy',
                11 => 'sonata.core.form.type.collection_legacy',
                12 => 'sonata.core.form.type.translatable_choice',
                13 => 'sonata.core.form.type.date_range_legacy',
                14 => 'sonata.core.form.type.datetime_range_legacy',
                15 => 'sonata.core.form.type.date_picker_legacy',
                16 => 'sonata.core.form.type.datetime_picker_legacy',
                17 => 'sonata.core.form.type.date_range_picker_legacy',
                18 => 'sonata.core.form.type.datetime_range_picker_legacy',
                19 => 'sonata.core.form.type.equal_legacy',
                20 => 'sonata.core.form.type.color_selector',
                21 => 'sonata.core.form.type.color_legacy',
                22 => 'sonata.core.form.type.array',
                23 => 'sonata.core.form.type.boolean',
                24 => 'sonata.core.form.type.collection',
                25 => 'sonata.core.form.type.date_range',
                26 => 'sonata.core.form.type.datetime_range',
                27 => 'sonata.core.form.type.date_picker',
                28 => 'sonata.core.form.type.datetime_picker',
                29 => 'sonata.core.form.type.date_range_picker',
                30 => 'sonata.core.form.type.datetime_range_picker',
                31 => 'sonata.core.form.type.equal',
                32 => 'sonata.admin.form.type.admin',
                33 => 'sonata.admin.form.type.model_choice',
                34 => 'sonata.admin.form.type.model_list',
                35 => 'sonata.admin.form.type.model_reference',
                36 => 'sonata.admin.form.type.model_hidden',
                37 => 'sonata.admin.form.type.model_autocomplete',
                38 => 'sonata.admin.form.type.collection',
                39 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                40 => 'sonata.admin.form.filter.type.number',
                41 => 'sonata.admin.form.filter.type.choice',
                42 => 'sonata.admin.form.filter.type.default',
                43 => 'sonata.admin.form.filter.type.date',
                44 => 'sonata.admin.form.filter.type.daterange',
                45 => 'sonata.admin.form.filter.type.datetime',
                46 => 'sonata.admin.form.filter.type.datetime_range',
                47 => 'sonata.block.form.type.block',
                48 => 'sonata.block.form.type.container_template',
                49 => 'sonata.user.form.type.security_roles',
                50 => 'sonata.user.form.roles_matrix_type',
                51 => 'sonata.user.form.gender_list',
                52 => 'sonata.classification.form.type.category_selector',
                53 => 'sonata.media.form.type.media',
                54 => 'sonata.news.form.type.comment',
                55 => 'sonata.news.form.comment.status_type',
                56 => 'fos_ck_editor.form.type',
                57 => 'sonata.formatter.form.type.selector',
                58 => 'sonata.formatter.form.type.simple',
            ],
            'sonata.core.form.type_extensions' => [
                0 => 'form.type_extension.form.transformation_failure_handling',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'sonata.admin.form.extension.field',
                8 => 'sonata.admin.form.extension.field.mopa',
                9 => 'sonata.admin.form.extension.choice',
            ],
            'console.command.ids' => [
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_initaclcommand' => 'security.command.init_acl',
                'console.command.symfony_bundle_securitybundle_command_setaclcommand' => 'security.command.set_acl',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.fos_userbundle_command_activateusercommand' => 'fos_user.command.activate_user',
                'console.command.fos_userbundle_command_changepasswordcommand' => 'fos_user.command.change_password',
                'console.command.fos_userbundle_command_createusercommand' => 'fos_user.command.create_user',
                'console.command.fos_userbundle_command_deactivateusercommand' => 'fos_user.command.deactivate_user',
                'console.command.fos_userbundle_command_demoteusercommand' => 'fos_user.command.demote_user',
                'console.command.fos_userbundle_command_promoteusercommand' => 'fos_user.command.promote_user',
                'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand',
                'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'console.command.sonata_corebundle_command_sonatalistformmappingcommand',
                'console.command.sonata_adminbundle_command_createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
                'console.command.sonata_adminbundle_command_explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
                'console.command.sonata_adminbundle_command_generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
                'console.command.sonata_adminbundle_command_generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
                'console.command.sonata_adminbundle_command_listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
                'console.command.sonata_adminbundle_command_setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
                'console.command.sonata_blockbundle_command_debugblockscommand' => 'console.command.sonata_blockbundle_command_debugblockscommand',
                'console.command.sonata_easyextendsbundle_command_dumpmappingcommand' => 'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand',
                'console.command.sonata_easyextendsbundle_command_generatecommand' => 'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand',
                'console.command.sonata_userbundle_command_twostepverificationcommand' => 'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand',
                'console.command.sonata_classificationbundle_command_fixcontextcommand' => 'Sonata\\ClassificationBundle\\Command\\FixContextCommand',
                'console.command.sonata_mediabundle_command_addmassmediacommand' => 'Sonata\\MediaBundle\\Command\\AddMassMediaCommand',
                'console.command.sonata_mediabundle_command_addmediacommand' => 'Sonata\\MediaBundle\\Command\\AddMediaCommand',
                'console.command.sonata_mediabundle_command_cleanmediacommand' => 'Sonata\\MediaBundle\\Command\\CleanMediaCommand',
                'console.command.sonata_mediabundle_command_fixmediacontextcommand' => 'Sonata\\MediaBundle\\Command\\FixMediaContextCommand',
                'console.command.sonata_mediabundle_command_migratetojsontypecommand' => 'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand',
                'console.command.sonata_mediabundle_command_refreshmetadatacommand' => 'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand',
                'console.command.sonata_mediabundle_command_removethumbscommand' => 'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand',
                'console.command.sonata_mediabundle_command_syncthumbscommand' => 'Sonata\\MediaBundle\\Command\\SyncThumbsCommand',
                'console.command.sonata_mediabundle_command_updatecdnstatuscommand' => 'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand',
                'console.command.sonata_newsbundle_command_synchronizecommentscountcommand' => 'Sonata\\NewsBundle\\Command\\SynchronizeCommentsCountCommand',
                'console.command.fos_ckeditorbundle_command_ckeditorinstallercommand' => 'fos_ck_editor.command.installer',
            ],
            'console.lazy_command.ids' => [
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.init_acl' => true,
                'security.command.set_acl' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.mapping_import_command' => true,
                'fos_user.command.activate_user' => true,
                'fos_user.command.change_password' => true,
                'fos_user.command.create_user' => true,
                'fos_user.command.deactivate_user' => true,
                'fos_user.command.demote_user' => true,
                'fos_user.command.promote_user' => true,
                'fos_ck_editor.command.installer' => true,
            ],
        ];
    }
}

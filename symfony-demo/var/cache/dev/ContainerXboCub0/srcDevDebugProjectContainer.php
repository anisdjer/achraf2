<?php

namespace ContainerXboCub0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();
    private $privates = array();

    public function __construct()
    {
        $dir = $this->targetDirs[0] = dirname(__DIR__);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
        );
        $this->fileMap = array(
            'App\\Controller\\Admin\\BlogController' => __DIR__.'/getBlogControllerService.php',
            'App\\Controller\\BlogController' => __DIR__.'/getBlogController2Service.php',
            'App\\Controller\\SecurityController' => __DIR__.'/getSecurityControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'cache.app_clearer' => __DIR__.'/getCache_AppClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandContainscommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandDeletecommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandFlushcommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandStatscommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsdiffdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsexecutedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsgeneratedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationslatestdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsmigratedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsstatusdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsversiondoctrinecommandService.php',
            'console.command.sensiolabs_security_command_securitycheckercommand' => __DIR__.'/getConsole_Command_SensiolabsSecurityCommandSecuritycheckercommandService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => __DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => __DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php',
            'filesystem' => __DIR__.'/getFilesystemService.php',
            'form.factory' => __DIR__.'/getForm_FactoryService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'security.authentication_utils' => __DIR__.'/getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => __DIR__.'/getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => __DIR__.'/getSecurity_PasswordEncoderService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'session' => __DIR__.'/getSessionService.php',
            'swiftmailer.mailer.default' => __DIR__.'/getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => __DIR__.'/getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => __DIR__.'/getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => __DIR__.'/getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => __DIR__.'/getWebProfiler_Controller_RouterService.php',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        );

        require_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
        require_once $this->targetDirs[3].'/src/EventSubscriber/ControllerSubscriber.php';
        require_once $this->targetDirs[3].'/src/EventSubscriber/RedirectToPreferredLocaleSubscriber.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
        require_once $this->targetDirs[3].'/src/Twig/SourceCodeExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/UriSigner.php';
        require_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
        require_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        require_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
        require_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
        require_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SaveSessionListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpCache/AbstractSurrogate.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpCache/Esi.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SurrogateListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/FragmentListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/MessageSelector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
        require_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/Profiler.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RequestDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
        require_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
        require_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
        require_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchyInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchy.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Http/FirewallMapInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/TraceableAccessDecisionManager.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
        require_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
        require_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionLanguage.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/ExpressionLanguage.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
        require_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
        require_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
        require_once $this->targetDirs[3].'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Intl.php';
        require_once $this->targetDirs[3].'/src/Utils/Markdown.php';
        require_once $this->targetDirs[3].'/src/Twig/AppExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
        require_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewInterface.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/DefaultView.php';
        require_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TranslatedView.php';
        require_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrapView.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrap3View.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrap4View.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/SemanticUiView.php';
        require_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php';
        require_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php';
        require_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewFactoryInterface.php';
        require_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewFactory.php';
        require_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Twig/PagerfantaExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/DumpExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
        require_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
        require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/ClonerInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/AbstractCloner.php';
        require_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/VarCloner.php';
        require_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
        require_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ProxyTrait.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/PhpArrayTrait.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        require_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
        require_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/LoggingTranslator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollectorTranslator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
        require_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/TraceableValidator.php';
        require_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
        require_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
        require_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
        require_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
        require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('Zsg+JoMBfO', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('awMpjotAsJ', 0, 'q0zLA7ONnguT-bZcm99O3S', ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)), $a);

        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['data_collector.router'] ?? $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['App\EventSubscriber\CheckRequirementsSubscriber'] ?? $this->load(__DIR__.'/getCheckRequirementsSubscriberService.php'));
        }, 1 => 'handleConsoleError'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['App\EventSubscriber\CheckRequirementsSubscriber'] ?? $this->load(__DIR__.'/getCheckRequirementsSubscriberService.php'));
        }, 1 => 'handleKernelException'), 0);
        $instance->addListener('comment.created', array(0 => function () {
            return ($this->privates['App\EventSubscriber\CommentNotificationSubscriber'] ?? $this->load(__DIR__.'/getCommentNotificationSubscriberService.php'));
        }, 1 => 'onCommentCreated'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['App\EventSubscriber\ControllerSubscriber'] ?? $this->getControllerSubscriberService());
        }, 1 => 'registerCurrentController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['App\EventSubscriber\RedirectToPreferredLocaleSubscriber'] ?? $this->getRedirectToPreferredLocaleSubscriberService());
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load(__DIR__.'/getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load(__DIR__.'/getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session.save_listener'] ?? $this->privates['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['esi_listener'] ?? $this->getEsiListenerService());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load(__DIR__.'/getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? $this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener());
        }, 1 => 'onException'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? $this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener());
        }, 1 => 'onException'), 512);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load(__DIR__.'/getDebug_DumpListenerService.php'));
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel')))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), $a), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver());
            yield 1 => ($this->privates['argument_resolver.request'] ?? $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver());
            yield 2 => ($this->privates['argument_resolver.session'] ?? $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver());
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load(__DIR__.'/getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load(__DIR__.'/getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver());
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver());
        }, 7)), $a));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor());
        $b = ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        $c = ($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService());

        $d = new \Symfony\Bridge\Monolog\Logger('profiler');
        $d->pushProcessor($a);
        $d->pushHandler($b);
        $d->pushHandler($c);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $d, true);

        $e = ($this->services['kernel'] ?? $this->get('kernel'));

        $f = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $f->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $f->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $f->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $f->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $f->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));

        $g = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $g->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()));

        $h = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $h->setKernel($e);
        }

        $instance->add(($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($e, ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($d, ($this->targetDirs[0].'/srcDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        $instance->add($f);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.role_hierarchy'] ?? $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? $this->privates['twig.profile'] = new \Twig\Profiler\Profile()), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($g);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add($h);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'kernel:loadRoutes', array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('translation');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()), $a));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader(array(), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, array('debug' => true, 'strict_variables' => true, 'form_themes' => $this->parameters['twig.form.resources'], 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $b = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
        $e = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $f = ($this->services['router'] ?? $this->getRouterService());

        $g = new \Pagerfanta\View\DefaultView();

        $h = new \Pagerfanta\View\TwitterBootstrapView();

        $i = new \Pagerfanta\View\TwitterBootstrap3View();

        $j = new \Pagerfanta\View\SemanticUiView();

        $k = new \Pagerfanta\View\ViewFactory();
        $k->add(array('default' => $g, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($g, $c), 'twitter_bootstrap' => $h, 'twitter_bootstrap3' => $i, 'twitter_bootstrap4' => new \Pagerfanta\View\TwitterBootstrap4View(), 'semantic_ui' => $j, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($i, $c), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($h, $c), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($j, $c)));

        $l = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $l->setDisplayOptions(array('fileLinkFormat' => $e));

        $m = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $m->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $e));

        $n = new \Symfony\Bridge\Twig\AppVariable();
        $n->setEnvironment('dev');
        $n->setDebug(true);
        if ($this->has('security.token_storage')) {
            $n->setTokenStorage(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
        }
        if ($this->has('request_stack')) {
            $n->setRequestStack($d);
        }

        $instance->addExtension(new \Twig\Extensions\IntlExtension());
        $instance->addExtension(new \App\Twig\AppExtension(new \App\Utils\Markdown(), 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN'));
        $instance->addExtension(($this->privates['App\Twig\SourceCodeExtension'] ?? $this->privates['App\Twig\SourceCodeExtension'] = new \App\Twig\SourceCodeExtension()));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? $this->privates['twig.profile'] = new \Twig\Profiler\Profile()), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy(($this->targetDirs[3].'/public/build/manifest.json')), new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false)), array())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($e, ($this->targetDirs[3].'/src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension('default', $k, $f, $d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), $l));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($m));
        $instance->addGlobal('app', $n);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ($this->privates['twig.runtime.httpkernel'] ?? $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php'));
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ($this->privates['twig.form.renderer'] ?? $this->load(__DIR__.'/getTwig_Form_RendererService.php'));
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'App\EventSubscriber\ControllerSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ControllerSubscriber
     */
    protected function getControllerSubscriberService()
    {
        return $this->privates['App\EventSubscriber\ControllerSubscriber'] = new \App\EventSubscriber\ControllerSubscriber(($this->privates['App\Twig\SourceCodeExtension'] ?? $this->privates['App\Twig\SourceCodeExtension'] = new \App\Twig\SourceCodeExtension()));
    }

    /**
     * Gets the private 'App\EventSubscriber\RedirectToPreferredLocaleSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\RedirectToPreferredLocaleSubscriber
     */
    protected function getRedirectToPreferredLocaleSubscriberService()
    {
        return $this->privates['App\EventSubscriber\RedirectToPreferredLocaleSubscriber'] = new \App\EventSubscriber\RedirectToPreferredLocaleSubscriber(($this->services['router'] ?? $this->getRouterService()), 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN', 'en');
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()))), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('st98LqgKQC', 0, 'q0zLA7ONnguT-bZcm99O3S', ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('vxExUkw6+Q', 0, 'q0zLA7ONnguT-bZcm99O3S', ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('4aDYVo3M0A', 0, 'q0zLA7ONnguT-bZcm99O3S', ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker());
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, -1, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load(__DIR__.'/getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? $this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter());
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load(__DIR__.'/getSecurity_Access_ExpressionVoterService.php'));
            yield 3 => ($this->privates['App\Security\PostVoter'] ?? $this->privates['App\Security\PostVoter'] = new \App\Security\PostVoter());
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->privates['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(($this->privates['esi'] ?? $this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi()));
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->privates['uri_signer'] ?? $this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET'))), '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel')))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load(__DIR__.'/getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? $this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5bbddd595094c1.87830903'));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ($this->privates['security.firewall.map.context.dev'] ?? $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_DevService.php'));
        }, 'security.firewall.map.context.main' => function () {
            return ($this->privates['security.firewall.map.context.main'] ?? $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_MainService.php'));
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['security.request_matcher.zfHj2lW'] ?? $this->privates['security.request_matcher.zfHj2lW'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'));
            yield 'security.firewall.map.context.main' => ($this->privates['security.request_matcher.00qF1Z7'] ?? $this->privates['security.request_matcher.00qF1Z7'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/'));
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));

        $instance->registerListener('main', 'security_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), ($this->privates['security.role_hierarchy'] ?? $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel'))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ($this->services['session'] ?? $this->load(__DIR__.'/getSessionService.php'));
        })));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ($this->privates['translation.loader.csv'] ?? $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader());
        }, 'translation.loader.dat' => function () {
            return ($this->privates['translation.loader.dat'] ?? $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader());
        }, 'translation.loader.ini' => function () {
            return ($this->privates['translation.loader.ini'] ?? $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader());
        }, 'translation.loader.json' => function () {
            return ($this->privates['translation.loader.json'] ?? $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader());
        }, 'translation.loader.mo' => function () {
            return ($this->privates['translation.loader.mo'] ?? $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader());
        }, 'translation.loader.php' => function () {
            return ($this->privates['translation.loader.php'] ?? $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader());
        }, 'translation.loader.po' => function () {
            return ($this->privates['translation.loader.po'] ?? $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader());
        }, 'translation.loader.qt' => function () {
            return ($this->privates['translation.loader.qt'] ?? $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader());
        }, 'translation.loader.res' => function () {
            return ($this->privates['translation.loader.res'] ?? $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader());
        }, 'translation.loader.xliff' => function () {
            return ($this->privates['translation.loader.xliff'] ?? $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader());
        }, 'translation.loader.yml' => function () {
            return ($this->privates['translation.loader.yml'] ?? $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader());
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.ca.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.ca.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.ca.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.cs.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.cs.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.cs.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.de.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.de.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.de.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.en.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.en.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.en.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.en.xlf')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.es.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.es.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.es.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.fr.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.fr.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.fr.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.gl.xliff')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.hr.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.hr.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.hr.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/translations//messages.id.xlf'), 4 => ($this->targetDirs[3].'/translations//validators.id.xlf'), 5 => ($this->targetDirs[3].'/translations/messages.id.xlf'), 6 => ($this->targetDirs[3].'/translations/validators.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.it.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.it.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.it.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/translations//messages.ja.xlf'), 4 => ($this->targetDirs[3].'/translations//validators.ja.xlf'), 5 => ($this->targetDirs[3].'/translations/messages.ja.xlf'), 6 => ($this->targetDirs[3].'/translations/validators.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.nl.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.nl.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.nl.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.no.xliff')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.pl.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.pl.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.pl.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/translations//messages.pt_BR.xlf'), 4 => ($this->targetDirs[3].'/translations//validators.pt_BR.xlf'), 5 => ($this->targetDirs[3].'/translations/messages.pt_BR.xlf'), 6 => ($this->targetDirs[3].'/translations/validators.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.ro.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.ro.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.ro.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.ru.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.ru.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.ru.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.sl.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.sl.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.sl.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff'), 3 => ($this->targetDirs[3].'/translations//messages.uk.xlf'), 4 => ($this->targetDirs[3].'/translations//validators.uk.xlf'), 5 => ($this->targetDirs[3].'/translations/messages.uk.xlf'), 6 => ($this->targetDirs[3].'/translations/validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/translations//messages.zh_CN.xlf'), 5 => ($this->targetDirs[3].'/translations//validators.zh_CN.xlf'), 6 => ($this->targetDirs[3].'/translations/messages.zh_CN.xlf'), 7 => ($this->targetDirs[3].'/translations/validators.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ua.xlf')), 'oc' => array(0 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff')))));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php'));
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ($this->privates['security.validator.user_password'] ?? $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php'));
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ($this->privates['validator.email'] ?? $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false));
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ($this->privates['validator.expression'] ?? $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator());
        }, 'doctrine.orm.validator.unique' => function () {
            return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php'));
        }, 'security.validator.user_password' => function () {
            return ($this->privates['security.validator.user_password'] ?? $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php'));
        }, 'validator.expression' => function () {
            return ($this->privates['validator.expression'] ?? $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator());
        }))));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))));

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/(app(_[\\w]+)?\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;

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
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'twig.default_path' => false,
        'doctrine_migrations.dir_name' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'MonologBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'WhiteOctoberPagerfantaBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ),
                'DebugBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebServerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'WebProfilerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
            ); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcDevDebugProjectContainer.xml'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcDevDebugProjectContainer',
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'en',
            'app_locales' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN',
            'app.notifications.email_sender' => 'anonymous@example.com',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel:loadRoutes',
            'router.cache_class_prefix' => 'srcDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
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
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
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
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'form/layout.html.twig',
                2 => 'form/fields.html.twig',
            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.validator' => array(
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'console.command.sensiolabs_security_command_securitycheckercommand',
                'console.command.app_command_addusercommand' => 'App\\Command\\AddUserCommand',
                'console.command.app_command_deleteusercommand' => 'App\\Command\\DeleteUserCommand',
                'console.command.app_command_listuserscommand' => 'App\\Command\\ListUsersCommand',
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
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
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
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_fixturesbundle_command_loaddatafixturesdoctrinecommand' => 'doctrine.fixtures_load_command',
                'console.command.symfony_bundle_swiftmailerbundle_command_debugcommand' => 'swiftmailer.command.debug',
                'console.command.symfony_bundle_swiftmailerbundle_command_newemailcommand' => 'swiftmailer.command.new_email',
                'console.command.symfony_bundle_swiftmailerbundle_command_sendemailcommand' => 'swiftmailer.command.send_email',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand',
            ),
            'console.lazy_command.ids' => array(
                'App\\Command\\AddUserCommand' => true,
                'App\\Command\\DeleteUserCommand' => true,
                'App\\Command\\ListUsersCommand' => true,
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
                'security.command.user_password_encoder' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
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
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.fixtures_load_command' => true,
                'swiftmailer.command.debug' => true,
                'swiftmailer.command.new_email' => true,
                'swiftmailer.command.send_email' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
            ),
        );
    }
}

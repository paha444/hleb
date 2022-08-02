<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf50610f047289d28faf48b3e1b274467
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phphleb\\' => 8,
        ),
        'H' => 
        array (
            'Hleb\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phphleb\\' => 
        array (
            0 => __DIR__ . '/..' . '/phphleb',
        ),
        'Hleb\\' => 
        array (
            0 => __DIR__ . '/..' . '/phphleb/framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Commands\\DefaultTask' => __DIR__ . '/../..' . '/app/Commands/DefaultTask.php',
        'App\\Commands\\RotateLogsTask' => __DIR__ . '/../..' . '/app/Commands/RotateLogsTask.php',
        'App\\Controllers\\DefaultController' => __DIR__ . '/../..' . '/app/Controllers/DefaultController.php',
        'App\\Middleware\\After\\DefaultMiddlewareAfter' => __DIR__ . '/../..' . '/app/Middleware/After/DefaultMiddlewareAfter.php',
        'App\\Middleware\\Before\\DefaultMiddlewareBefore' => __DIR__ . '/../..' . '/app/Middleware/Before/DefaultMiddlewareBefore.php',
        'App\\Models\\DefaultModel' => __DIR__ . '/../..' . '/app/Models/DefaultModel.php',
        'App\\Optional\\MainConnector' => __DIR__ . '/../..' . '/app/Optional/MainConnector.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DB' => __DIR__ . '/../..' . '/database/DB.php',
        'DeterminantStaticUncreated' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/DeterminantStaticUncreated.php',
        'Hleb\\Constructor\\Cache\\CacheRoutes' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Cache/CacheRoutes.php',
        'Hleb\\Constructor\\Cache\\CachedTemplate' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Cache/CachedTemplate.php',
        'Hleb\\Constructor\\Cache\\OwnCachedTemplate' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Cache/OwnCachedTemplate.php',
        'Hleb\\Constructor\\Handlers\\AddressBar' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/AddressBar.php',
        'Hleb\\Constructor\\Handlers\\Head' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/Head.php',
        'Hleb\\Constructor\\Handlers\\Key' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/Key.php',
        'Hleb\\Constructor\\Handlers\\MirrorRequest' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/MirrorRequest.php',
        'Hleb\\Constructor\\Handlers\\ProtectedCSRF' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/ProtectedCSRF.php',
        'Hleb\\Constructor\\Handlers\\Request' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/Request.php',
        'Hleb\\Constructor\\Handlers\\Resources' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/Resources.php',
        'Hleb\\Constructor\\Handlers\\URL' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/URL.php',
        'Hleb\\Constructor\\Handlers\\URLHandler' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Handlers/URLHandler.php',
        'Hleb\\Constructor\\Routes\\Data' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Data.php',
        'Hleb\\Constructor\\Routes\\LoadRoutes' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/LoadRoutes.php',
        'Hleb\\Constructor\\Routes\\MainRoute' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/MainRoute.php',
        'Hleb\\Constructor\\Routes\\MainRouteMethod' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/MainRouteMethod.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodAdminPanController' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodAdminPanController.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodAfter' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodAfter.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodBefore' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodBefore.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodController' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodController.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodDomain' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodDomain.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodEnd' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodEnd.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodEndGroup' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodEndGroup.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodEndProtect' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodEndProtect.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodEndType' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodEndType.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodGet' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodGet.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodGetGroup' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodGetGroup.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodGetProtect' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodGetProtect.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodGetType' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodGetType.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodModule' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodModule.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodName' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodName.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodPrefix' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodPrefix.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodProtect' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodProtect.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodRenderMap' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodRenderMap.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodType' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodType.php',
        'Hleb\\Constructor\\Routes\\Methods\\RouteMethodWhere' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Methods/RouteMethodWhere.php',
        'Hleb\\Constructor\\Routes\\Route' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Routes/Route.php',
        'Hleb\\Constructor\\TCreator' => __DIR__ . '/..' . '/phphleb/framework/Constructor/TCreator.php',
        'Hleb\\Constructor\\TwigCreator' => __DIR__ . '/..' . '/phphleb/framework/Constructor/TwigCreator.php',
        'Hleb\\Constructor\\VCreator' => __DIR__ . '/..' . '/phphleb/framework/Constructor/VCreator.php',
        'Hleb\\Constructor\\Workspace' => __DIR__ . '/..' . '/phphleb/framework/Constructor/Workspace.php',
        'Hleb\\Idnaconv\\IdnaConvert' => __DIR__ . '/..' . '/phphleb/framework/Idnaconv/IdnaConvert.php',
        'Hleb\\Main\\App' => __DIR__ . '/..' . '/phphleb/framework/Main/App.php',
        'Hleb\\Main\\Commands\\MainLaunchTask' => __DIR__ . '/..' . '/phphleb/framework/Main/Commands/MainLaunchTask.php',
        'Hleb\\Main\\Console\\ConsoleColorOutput' => __DIR__ . '/..' . '/phphleb/framework/Main/Console/ConsoleColorOutput.php',
        'Hleb\\Main\\Console\\CreateTask' => __DIR__ . '/..' . '/phphleb/framework/Main/Console/CreateTask.php',
        'Hleb\\Main\\Console\\MainConsole' => __DIR__ . '/..' . '/phphleb/framework/Main/Console/MainConsole.php',
        'Hleb\\Main\\DB' => __DIR__ . '/..' . '/phphleb/framework/Main/DB.php',
        'Hleb\\Main\\DataDebug' => __DIR__ . '/..' . '/phphleb/framework/Main/DataDebug.php',
        'Hleb\\Main\\Errors\\ErrorOutput' => __DIR__ . '/..' . '/phphleb/framework/Main/Errors/ErrorOutput.php',
        'Hleb\\Main\\Helpers\\RangeChecker' => __DIR__ . '/..' . '/phphleb/framework/Main/Helpers/RangeChecker.php',
        'Hleb\\Main\\Helpers\\ReflectionMethod' => __DIR__ . '/..' . '/phphleb/framework/Main/Helpers/ReflectionMethod.php',
        'Hleb\\Main\\HomeConnector' => __DIR__ . '/..' . '/phphleb/framework/Main/HomeConnector.php',
        'Hleb\\Main\\Info' => __DIR__ . '/..' . '/phphleb/framework/Main/Info.php',
        'Hleb\\Main\\Insert\\BaseSingleton' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/BaseSingleton.php',
        'Hleb\\Main\\Insert\\Examples\\ExampleApp' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/Examples/ExampleApp.php',
        'Hleb\\Main\\Insert\\Examples\\ExampleLog' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/Examples/ExampleLog.php',
        'Hleb\\Main\\Insert\\Examples\\ExampleMirrorDB' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/Examples/ExampleMirrorDB.php',
        'Hleb\\Main\\Insert\\Examples\\ExampleMirrorRequest' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/Examples/ExampleMirrorRequest.php',
        'Hleb\\Main\\Insert\\Examples\\Head' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/Examples/ExampleHead.php',
        'Hleb\\Main\\Insert\\Examples\\Resources' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/Examples/ExampleResources.php',
        'Hleb\\Main\\Insert\\PageFinisher' => __DIR__ . '/..' . '/phphleb/framework/Main/Insert/PageFinisher.php',
        'Hleb\\Main\\Logger\\FileLogger' => __DIR__ . '/..' . '/phphleb/framework/Main/Logger/FileLogger.php',
        'Hleb\\Main\\Logger\\Log' => __DIR__ . '/..' . '/phphleb/framework/Main/Logger/Log.php',
        'Hleb\\Main\\Logger\\LogLevel' => __DIR__ . '/..' . '/phphleb/framework/Main/Logger/LogLevel.php',
        'Hleb\\Main\\MainAutoloader' => __DIR__ . '/..' . '/phphleb/framework/Main/MainAutoloader.php',
        'Hleb\\Main\\MainDB' => __DIR__ . '/..' . '/phphleb/framework/Main/MainDB.php',
        'Hleb\\Main\\MainTemplate' => __DIR__ . '/..' . '/phphleb/framework/Main/MainTemplate.php',
        'Hleb\\Main\\MirrorDB' => __DIR__ . '/..' . '/phphleb/framework/Main/MirrorDB.php',
        'Hleb\\Main\\MyDebug' => __DIR__ . '/..' . '/phphleb/framework/Main/MyDebug.php',
        'Hleb\\Main\\PdoManager' => __DIR__ . '/..' . '/phphleb/framework/Main/PdoManager.php',
        'Hleb\\Main\\ProjectLoader' => __DIR__ . '/..' . '/phphleb/framework/Main/ProjectLoader.php',
        'Hleb\\Main\\TryClass' => __DIR__ . '/..' . '/phphleb/framework/Main/TryClass.php',
        'Hleb\\Main\\WorkDebug' => __DIR__ . '/..' . '/phphleb/framework/Main/WorkDebug.php',
        'Hleb\\Scheme\\App\\Commands\\MainTask' => __DIR__ . '/..' . '/phphleb/framework/Scheme/App/Commands/MainTask.php',
        'Hleb\\Scheme\\App\\Controllers\\BaseController' => __DIR__ . '/..' . '/phphleb/framework/Scheme/App/Controllers/BaseController.php',
        'Hleb\\Scheme\\App\\Controllers\\MainController' => __DIR__ . '/..' . '/phphleb/framework/Scheme/App/Controllers/MainController.php',
        'Hleb\\Scheme\\App\\Middleware\\MainMiddleware' => __DIR__ . '/..' . '/phphleb/framework/Scheme/App/Middleware/MainMiddleware.php',
        'Hleb\\Scheme\\App\\Models\\MainModel' => __DIR__ . '/..' . '/phphleb/framework/Scheme/App/Models/MainModel.php',
        'Hleb\\Scheme\\Home\\Constructor\\Handlers\\RequestInterface' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Constructor/Handlers/RequestInterface.php',
        'Hleb\\Scheme\\Home\\Constructor\\Handlers\\ResourceStandard' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Constructor/Handlers/ResourceStandard.php',
        'Hleb\\Scheme\\Home\\Constructor\\Routes\\DataRoute' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Constructor/Routes/DataRoute.php',
        'Hleb\\Scheme\\Home\\Constructor\\Routes\\RouteMethodStandard' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Constructor/Routes/RouteMethodStandard.php',
        'Hleb\\Scheme\\Home\\Constructor\\Routes\\StandardRoute' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Constructor/Routes/StandardRoute.php',
        'Hleb\\Scheme\\Home\\Main\\Connector' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Main/Connector.php',
        'Hleb\\Scheme\\Home\\Main\\DBInterface' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Main/DBInterface.php',
        'Hleb\\Scheme\\Home\\Main\\LoggerInterface' => __DIR__ . '/..' . '/phphleb/framework/Scheme/Home/Main/LoggerInterface.php',
        'Phphleb\\Debugpan\\DPanel' => __DIR__ . '/..' . '/phphleb/debugpan/DPanel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf50610f047289d28faf48b3e1b274467::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf50610f047289d28faf48b3e1b274467::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf50610f047289d28faf48b3e1b274467::$classMap;

        }, null, ClassLoader::class);
    }
}

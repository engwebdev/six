<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace Barryvdh\Debugbar {
    
    /**
     * @see \DebugBar\DebugBar::isDataPersisted
     * @method static bool isDataPersisted()
     * @see \DebugBar\DebugBar::getCurrentRequestId
     * @method static string getCurrentRequestId()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::emergency
     * @method static void emergency(...$message)
     * @see \DebugBar\DebugBar::getData
     * @method static array getData()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::startMeasure
     * @method static void startMeasure(string $name, string $label = null)
     * @see \DebugBar\DebugBar::getStackedData
     * @method static array getStackedData(bool $delete = true)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addCollector
     * @method static void addCollector(\DebugBar\DataCollector\DataCollectorInterface $collector)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::enable
     * @method static void enable()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::warning
     * @method static void warning(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::getJavascriptRenderer
     * @method static \Barryvdh\Debugbar\JavascriptRenderer getJavascriptRenderer(string $baseUrl = null, $basePath = null)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::info
     * @method static void info(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::isEnabled
     * @method static bool isEnabled()
     * @see \DebugBar\DebugBar::getStorage
     * @method static \DebugBar\Storage\StorageInterface getStorage()
     * @see \DebugBar\DebugBar::hasStackedData
     * @method static bool hasStackedData()
     * @see \DebugBar\DebugBar::getHttpDriver
     * @method static \DebugBar\HttpDriverInterface getHttpDriver()
     * @see \DebugBar\DebugBar::getDataAsHeaders
     * @method static array getDataAsHeaders(string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
     * @see \DebugBar\DebugBar::hasCollector
     * @method static bool hasCollector(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addMessage
     * @method static void addMessage($message, string $label = 'info')
     * @see \DebugBar\DebugBar::setStackDataSessionNamespace
     * @method static void setStackDataSessionNamespace(string $ns)
     * @see \DebugBar\DebugBar::setStackAlwaysUseSessionStorage
     * @method static void setStackAlwaysUseSessionStorage(bool $enabled = true)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::measure
     * @method static mixed measure(string $label, \Closure $closure)
     * @see \DebugBar\DebugBar::offsetUnset
     * @method static void offsetUnset($key)
     * @see \DebugBar\DebugBar::stackData
     * @method static void stackData()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::modifyResponse
     * @method static \Symfony\Component\HttpFoundation\Response modifyResponse(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::handleError
     * @method static void handleError($level, $message, string $file = '', int $line = 0, array $context = [])
     * @see \Barryvdh\Debugbar\LaravelDebugbar::shouldCollect
     * @method static void shouldCollect($name, $default = false)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::stopMeasure
     * @method static void stopMeasure(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::collect
     * @method static array collect()
     * @see \DebugBar\DebugBar::sendDataInHeaders
     * @method static void sendDataInHeaders(bool $useOpenHandler = null, string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096)
     * @see \DebugBar\DebugBar::offsetGet
     * @method static \DebugBar\DataCollector\DataCollectorInterface offsetGet($key)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addThrowable
     * @method static void addThrowable(\Exception $e)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::critical
     * @method static void critical(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::log
     * @method static void log(...$message)
     * @see \DebugBar\DebugBar::getCollector
     * @method static \DebugBar\DataCollector\DataCollectorInterface getCollector(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::error
     * @method static void error(...$message)
     * @see \DebugBar\DebugBar::offsetSet
     * @method static void offsetSet($key, $value)
     * @see \DebugBar\DebugBar::getRequestIdGenerator
     * @method static \DebugBar\RequestIdGeneratorInterface getRequestIdGenerator()
     * @see \DebugBar\DebugBar::getStackDataSessionNamespace
     * @method static string getStackDataSessionNamespace()
     * @see \DebugBar\DebugBar::isStackAlwaysUseSessionStorage
     * @method static bool isStackAlwaysUseSessionStorage()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::alert
     * @method static void alert(...$message)
     * @see \DebugBar\DebugBar::setRequestIdGenerator
     * @method static void setRequestIdGenerator(\DebugBar\RequestIdGeneratorInterface $generator)
     * @see \DebugBar\DebugBar::setHttpDriver
     * @method static void setHttpDriver(\DebugBar\HttpDriverInterface $driver)
     * @see \DebugBar\DebugBar::offsetExists
     * @method static bool offsetExists($key)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::boot
     * @method static void boot()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::collectConsole
     * @method static array collectConsole()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::notice
     * @method static void notice(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::debug
     * @method static void debug(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addException
     * @method static void addException(\Exception $e)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::injectDebugbar
     * @method static void injectDebugbar(\Symfony\Component\HttpFoundation\Response $response)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addMeasure
     * @method static void addMeasure(string $label, float $start, float $end)
     * @see \DebugBar\DebugBar::setStorage
     * @method static void setStorage(\DebugBar\Storage\StorageInterface $storage = null)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::disable
     * @method static void disable()
     * @see \DebugBar\DebugBar::getCollectors
     * @method static array getCollectors()
     */
    class Facade {}
}

namespace Facade\Ignition\Facades {
    
    /**
     * @see \Facade\FlareClient\Flare::applicationPath
     * @method static void applicationPath(string $applicationPath)
     * @see \Facade\FlareClient\Flare::registerFlareHandlers
     * @method static void registerFlareHandlers()
     * @see \Facade\FlareClient\Flare::handleException
     * @method static void handleException(\Throwable $throwable)
     * @see \Facade\FlareClient\Flare::sendTestReport
     * @method static void sendTestReport(\Throwable $throwable)
     * @see \Facade\FlareClient\Flare::registerExceptionHandler
     * @method static void registerExceptionHandler()
     * @see \Facade\FlareClient\Flare::createReportFromMessage
     * @method static \Facade\FlareClient\Report createReportFromMessage(string $message, string $logLevel)
     * @see \Facade\FlareClient\Flare::determineVersionUsing
     * @method static void determineVersionUsing($determineVersionCallable)
     * @see \Facade\FlareClient\Flare::reportMessage
     * @method static void reportMessage(string $message, string $logLevel, callable $callback = null)
     * @see \Facade\FlareClient\Flare::registerMiddleware
     * @method static void registerMiddleware($callable)
     * @see \Facade\FlareClient\Flare::getMiddleware
     * @method static array getMiddleware()
     * @see \Facade\FlareClient\Concerns\HasContext::messageLevel
     * @method static void messageLevel(null|string $messageLevel)
     * @see \Facade\FlareClient\Flare::reportErrorLevels
     * @method static void reportErrorLevels(int $reportErrorLevels)
     * @see \Facade\FlareClient\Concerns\HasContext::context
     * @method static void context($key, $value)
     * @see \Facade\FlareClient\Flare::getMiddlewares
     * @method static array getMiddlewares()
     * @see \Facade\FlareClient\Concerns\HasContext::group
     * @method static void group(string $groupName, array $properties)
     * @see \Facade\FlareClient\Flare::filterExceptionsUsing
     * @method static void filterExceptionsUsing(callable $filterExceptionsCallable)
     * @see \Facade\FlareClient\Concerns\HasContext::getGroup
     * @method static array getGroup(string $groupName = 'context', $default = [])
     * @see \Facade\FlareClient\Flare::createReport
     * @method static \Facade\FlareClient\Report createReport(\Throwable $throwable)
     * @see \Facade\FlareClient\Flare::version
     * @method static null|string version()
     * @see \Facade\FlareClient\Flare::anonymizeIp
     * @method static void anonymizeIp()
     * @see \Facade\FlareClient\Flare::censorRequestBodyFields
     * @method static void censorRequestBodyFields(array $fieldNames)
     * @see \Facade\FlareClient\Concerns\HasContext::stage
     * @method static void stage(null|string $stage)
     * @see \Facade\FlareClient\Flare::registerErrorHandler
     * @method static void registerErrorHandler()
     * @see \Facade\FlareClient\Flare::report
     * @method static void report(\Throwable $throwable, callable $callback = null)
     * @see \Facade\FlareClient\Flare::handleError
     * @method static void handleError($code, $message, $file = '', $line = 0)
     * @see \Facade\FlareClient\Flare::reset
     * @method static void reset()
     * @see \Facade\FlareClient\Flare::glow
     * @method static void glow(string $name, string $messageLevel = MessageLevels::INFO, array $metaData = [])
     * @see \Facade\FlareClient\Flare::register
     * @method static void register(string $apiKey, string $apiSecret = null, \Facade\FlareClient\Context\ContextDetectorInterface $contextDetector = null, \Illuminate\Contracts\Container\Container $container = null)
     */
    class Flare {}
}

namespace Illuminate\Support\Facades {
    
    /**
     * @see \Illuminate\Contracts\Foundation\Application::runningUnitTests
     * @method static bool runningUnitTests()
     * @see \Illuminate\Contracts\Foundation\Application::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Contracts\Foundation\Application::bootstrapPath
     * @method static string bootstrapPath(string $path = '')
     * @see \Illuminate\Contracts\Container\Container::instance
     * @method static mixed instance(string $abstract, $instance)
     * @see \Illuminate\Contracts\Container\Container::singletonIf
     * @method static void singletonIf(string $abstract, \Closure|null|string $concrete = null)
     * @see \Illuminate\Contracts\Foundation\Application::basePath
     * @method static string basePath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::resolveProvider
     * @method static \Illuminate\Support\ServiceProvider resolveProvider(string $provider)
     * @see \Illuminate\Contracts\Container\Container::when
     * @method static \Illuminate\Contracts\Container\ContextualBindingBuilder when(array|string $concrete)
     * @see \Illuminate\Contracts\Foundation\Application::resourcePath
     * @method static string resourcePath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::databasePath
     * @method static string databasePath(string $path = '')
     * @see \Illuminate\Contracts\Container\Container::bind
     * @method static void bind(string $abstract, \Closure|null|string $concrete = null, bool $shared = false)
     * @see \Illuminate\Contracts\Foundation\Application::getProviders
     * @method static array getProviders(\Illuminate\Support\ServiceProvider|string $provider)
     * @see \Illuminate\Contracts\Container\Container::flush
     * @method static void flush()
     * @see \Illuminate\Contracts\Foundation\Application::registerConfiguredProviders
     * @method static void registerConfiguredProviders()
     * @see \Illuminate\Contracts\Container\Container::tagged
     * @method static iterable tagged(string $tag)
     * @see \Psr\Container\ContainerInterface::get
     * @method static mixed get(string $id)
     * @see \Illuminate\Contracts\Foundation\Application::storagePath
     * @method static string storagePath()
     * @see \Illuminate\Contracts\Container\Container::alias
     * @method static void alias(string $abstract, string $alias)
     * @see \Illuminate\Contracts\Foundation\Application::booted
     * @method static void booted(callable $callback)
     * @see \Illuminate\Contracts\Foundation\Application::getNamespace
     * @method static string getNamespace()
     * @see \Illuminate\Contracts\Container\Container::tag
     * @method static void tag(array|string $abstracts, array[]|mixed[] $tags)
     * @see \Psr\Container\ContainerInterface::has
     * @method static bool has(string $id)
     * @see \Illuminate\Contracts\Foundation\Application::boot
     * @method static void boot()
     * @see \Illuminate\Contracts\Container\Container::make
     * @method static mixed make(string $abstract, array $parameters = [])
     * @see \Illuminate\Contracts\Container\Container::resolved
     * @method static bool resolved(string $abstract)
     * @see \Illuminate\Contracts\Foundation\Application::bootstrapWith
     * @method static void bootstrapWith(array $bootstrappers)
     * @see \Illuminate\Contracts\Container\Container::singleton
     * @method static void singleton(string $abstract, \Closure|null|string $concrete = null)
     * @see \Illuminate\Contracts\Container\Container::factory
     * @method static \Closure factory(string $abstract)
     * @see \Illuminate\Contracts\Foundation\Application::registerDeferredProvider
     * @method static void registerDeferredProvider(string $provider, null|string $service = null)
     * @see \Illuminate\Contracts\Container\Container::addContextualBinding
     * @method static void addContextualBinding(string $concrete, string $abstract, \Closure|string $implementation)
     * @see \Illuminate\Contracts\Container\Container::resolving
     * @method static void resolving(\Closure|string $abstract, \Closure $callback = null)
     * @see \Illuminate\Contracts\Container\Container::bound
     * @method static bool bound(string $abstract)
     * @see \Illuminate\Contracts\Foundation\Application::isDownForMaintenance
     * @method static bool isDownForMaintenance()
     * @see \Illuminate\Contracts\Container\Container::bindIf
     * @method static void bindIf(string $abstract, \Closure|null|string $concrete = null, bool $shared = false)
     * @see \Illuminate\Contracts\Foundation\Application::version
     * @method static string version()
     * @see \Illuminate\Contracts\Foundation\Application::shouldSkipMiddleware
     * @method static bool shouldSkipMiddleware()
     * @see \Illuminate\Contracts\Foundation\Application::booting
     * @method static void booting(callable $callback)
     * @see \Illuminate\Contracts\Container\Container::call
     * @method static mixed call(callable|string $callback, array $parameters = [], null|string $defaultMethod = null)
     * @see \Illuminate\Contracts\Container\Container::extend
     * @method static void extend(string $abstract, \Closure $closure)
     * @see \Illuminate\Contracts\Foundation\Application::hasBeenBootstrapped
     * @method static bool hasBeenBootstrapped()
     * @see \Illuminate\Contracts\Foundation\Application::environment
     * @method static bool|string environment(...$environments)
     * @see \Illuminate\Contracts\Foundation\Application::loadDeferredProviders
     * @method static void loadDeferredProviders()
     * @see \Illuminate\Contracts\Container\Container::afterResolving
     * @method static void afterResolving(\Closure|string $abstract, \Closure $callback = null)
     * @see \Illuminate\Contracts\Foundation\Application::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Contracts\Foundation\Application::configPath
     * @method static string configPath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::terminate
     * @method static void terminate()
     * @see \Illuminate\Contracts\Foundation\Application::runningInConsole
     * @method static bool runningInConsole()
     * @see \Illuminate\Contracts\Foundation\Application::register
     * @method static \Illuminate\Support\ServiceProvider register(\Illuminate\Support\ServiceProvider|string $provider, bool $force = false)
     */
    class App {}
    
    /**
     * @see \Illuminate\Contracts\Console\Kernel::all
     * @method static array all()
     * @see \Illuminate\Contracts\Console\Kernel::output
     * @method static string output()
     * @see \Illuminate\Contracts\Console\Kernel::call
     * @method static int call(string $command, array $parameters = [], null|\Symfony\Component\Console\Output\OutputInterface $outputBuffer = null)
     * @see \Illuminate\Contracts\Console\Kernel::handle
     * @method static int handle(\Symfony\Component\Console\Input\InputInterface $input, null|\Symfony\Component\Console\Output\OutputInterface $output = null)
     * @see \Illuminate\Contracts\Console\Kernel::bootstrap
     * @method static void bootstrap()
     * @see \Illuminate\Contracts\Console\Kernel::terminate
     * @method static void terminate(\Symfony\Component\Console\Input\InputInterface $input, int $status)
     * @see \Illuminate\Contracts\Console\Kernel::queue
     * @method static \Illuminate\Foundation\Bus\PendingDispatch queue(string $command, array $parameters = [])
     */
    class Artisan {}
    
    /**
     * @see \Illuminate\Auth\CreatesUserProviders::getDefaultUserProvider
     * @method static string getDefaultUserProvider()
     * @see \Illuminate\Auth\AuthManager::forgetGuards
     * @method static void forgetGuards()
     * @see \Illuminate\Auth\AuthManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Auth\AuthManager::shouldUse
     * @method static void shouldUse(string $name)
     * @see \Illuminate\Auth\AuthManager::guard
     * @method static \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard guard(null|string $name = null)
     * @see \Illuminate\Auth\CreatesUserProviders::createUserProvider
     * @method static \Illuminate\Contracts\Auth\UserProvider|null createUserProvider(null|string $provider = null)
     * @see \Illuminate\Auth\AuthManager::createTokenDriver
     * @method static \Illuminate\Auth\TokenGuard createTokenDriver(string $name, array $config)
     * @see \Illuminate\Auth\AuthManager::viaRequest
     * @method static void viaRequest(string $driver, callable $callback)
     * @see \Illuminate\Auth\AuthManager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Auth\AuthManager::hasResolvedGuards
     * @method static bool hasResolvedGuards()
     * @see \Illuminate\Auth\AuthManager::provider
     * @method static void provider(string $name, \Closure $callback)
     * @see \Illuminate\Auth\AuthManager::userResolver
     * @method static \Closure userResolver()
     * @see \Illuminate\Auth\AuthManager::resolveUsersUsing
     * @method static void resolveUsersUsing(\Closure $userResolver)
     * @see \Illuminate\Auth\AuthManager::setApplication
     * @method static void setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Auth\AuthManager::createSessionDriver
     * @method static \Illuminate\Auth\SessionGuard createSessionDriver(string $name, array $config)
     * @see \Illuminate\Auth\AuthManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Contracts\Auth\Guard::setUser
     * @method static void setUser(\Illuminate\Contracts\Auth\Authenticatable $user)
     * @see \Illuminate\Contracts\Auth\Guard::guest
     * @method static bool guest()
     * @see \Illuminate\Contracts\Auth\Guard::check
     * @method static bool check()
     * @see \Illuminate\Contracts\Auth\Guard::id
     * @method static int|null|string id()
     * @see \Illuminate\Contracts\Auth\Guard::user
     * @method static \Illuminate\Contracts\Auth\Authenticatable|null user()
     * @see \Illuminate\Contracts\Auth\Guard::validate
     * @method static bool validate(array $credentials = [])
     * @see \Illuminate\Contracts\Auth\StatefulGuard::onceUsingId
     * @method static bool|\Illuminate\Contracts\Auth\Authenticatable onceUsingId($id)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::login
     * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, bool $remember = false)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::attempt
     * @method static bool attempt(array $credentials = [], bool $remember = false)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::viaRemember
     * @method static bool viaRemember()
     * @see \Illuminate\Contracts\Auth\StatefulGuard::logout
     * @method static void logout()
     * @see \Illuminate\Contracts\Auth\StatefulGuard::once
     * @method static bool once(array $credentials = [])
     * @see \Illuminate\Contracts\Auth\StatefulGuard::loginUsingId
     * @method static bool|\Illuminate\Contracts\Auth\Authenticatable loginUsingId($id, bool $remember = false)
     */
    class Auth {}
    
    /**
     * @see \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives
     * @method static array getCustomDirectives()
     * @see \Illuminate\View\Compilers\BladeCompiler::getClassComponentNamespaces
     * @method static array getClassComponentNamespaces()
     * @see \Illuminate\View\Compilers\Concerns\CompilesConditionals::compileEndOnce
     * @method static string compileEndOnce()
     * @see \Illuminate\View\Compilers\BladeCompiler::componentNamespace
     * @method static void componentNamespace(string $namespace, string $prefix)
     * @see \Illuminate\View\Compilers\BladeCompiler::if
     * @method static void if(string $name, callable $callback)
     * @see \Illuminate\View\Compilers\BladeCompiler::extend
     * @method static void extend(callable $compiler)
     * @see \Illuminate\View\Compilers\BladeCompiler::withoutDoubleEncoding
     * @method static void withoutDoubleEncoding()
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::compileEchos
     * @method static string compileEchos(string $value)
     * @see \Illuminate\View\Compilers\BladeCompiler::components
     * @method static void components(array $components, string $prefix = '')
     * @see \Illuminate\View\Compilers\BladeCompiler::precompiler
     * @method static void precompiler(callable $precompiler)
     * @see \Illuminate\View\Compilers\Compiler::getCompiledPath
     * @method static string getCompiledPath(string $path)
     * @see \Illuminate\View\Compilers\BladeCompiler::getClassComponentAliases
     * @method static array getClassComponentAliases()
     * @see \Illuminate\View\Compilers\BladeCompiler::include
     * @method static void include(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::compileClassComponentOpening
     * @method static string compileClassComponentOpening(string $component, string $alias, string $data, string $hash)
     * @see \Illuminate\View\Compilers\BladeCompiler::component
     * @method static void component(string $class, null|string $alias = null, string $prefix = '')
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::compileEndComponentClass
     * @method static string compileEndComponentClass()
     * @see \Illuminate\View\Compilers\BladeCompiler::getExtensions
     * @method static array getExtensions()
     * @see \Illuminate\View\Compilers\BladeCompiler::withDoubleEncoding
     * @method static void withDoubleEncoding()
     * @see \Illuminate\View\Compilers\BladeCompiler::setEchoFormat
     * @method static void setEchoFormat(string $format)
     * @see \Illuminate\View\Compilers\BladeCompiler::aliasInclude
     * @method static void aliasInclude(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::compile
     * @method static void compile(null|string $path = null)
     * @see \Illuminate\View\Compilers\Compiler::isExpired
     * @method static bool isExpired(string $path)
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::stringable
     * @method static void stringable(callable|string $class, callable|null $handler = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::check
     * @method static bool check(string $name, ...$parameters)
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::applyEchoHandler
     * @method static string applyEchoHandler(string $value)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::sanitizeComponentAttribute
     * @method static mixed sanitizeComponentAttribute($value)
     * @see \Illuminate\View\Compilers\BladeCompiler::withoutComponentTags
     * @method static void withoutComponentTags()
     * @see \Illuminate\View\Compilers\BladeCompiler::aliasComponent
     * @method static void aliasComponent(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::setPath
     * @method static void setPath(string $path)
     * @see \Illuminate\View\Compilers\BladeCompiler::stripParentheses
     * @method static string stripParentheses(string $expression)
     * @see \Illuminate\View\Compilers\BladeCompiler::getPath
     * @method static string getPath()
     * @see \Illuminate\View\Compilers\BladeCompiler::compileString
     * @method static string compileString(string $value)
     * @see \Illuminate\View\Compilers\BladeCompiler::directive
     * @method static void directive(string $name, callable $handler)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::newComponentHash
     * @method static string newComponentHash(string $component)
     */
    class Blade {}
    
    /**
     * @see \Illuminate\Contracts\Broadcasting\Factory::connection
     * @method static \Illuminate\Contracts\Broadcasting\Broadcaster connection(null|string $name = null)
     */
    class Broadcast {}
    
    /**
     * @see \Illuminate\Contracts\Bus\Dispatcher::getCommandHandler
     * @method static bool|mixed getCommandHandler($command)
     * @see \Illuminate\Contracts\Bus\Dispatcher::dispatchSync
     * @method static mixed dispatchSync($command, $handler = null)
     * @see \Illuminate\Contracts\Bus\Dispatcher::dispatch
     * @method static mixed dispatch($command)
     * @see \Illuminate\Contracts\Bus\Dispatcher::dispatchNow
     * @method static mixed dispatchNow($command, $handler = null)
     * @see \Illuminate\Contracts\Bus\Dispatcher::hasCommandHandler
     * @method static bool hasCommandHandler($command)
     * @see \Illuminate\Contracts\Bus\Dispatcher::pipeThrough
     * @method static void pipeThrough(array $pipes)
     * @see \Illuminate\Contracts\Bus\Dispatcher::map
     * @method static void map(array $map)
     */
    class Bus {}
    
    /**
     * @see \Psr\SimpleCache\CacheInterface::setMultiple
     * @method static bool setMultiple(iterable $values, \DateInterval|int|null $ttl = null)
     * @see \Illuminate\Cache\CacheManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Contracts\Cache\Repository::increment
     * @method static bool|int increment(string $key, $value = 1)
     * @see \Illuminate\Cache\CacheManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Cache\CacheManager::refreshEventDispatcher
     * @method static void refreshEventDispatcher()
     * @see \Illuminate\Cache\CacheManager::repository
     * @method static \Illuminate\Cache\Repository repository(\Illuminate\Contracts\Cache\Store $store)
     * @see \Psr\SimpleCache\CacheInterface::delete
     * @method static bool delete(string $key)
     * @see \Illuminate\Contracts\Cache\Repository::put
     * @method static bool put(string $key, $value, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Contracts\Cache\Repository::rememberForever
     * @method static mixed rememberForever(string $key, \Closure $callback)
     * @see \Illuminate\Contracts\Cache\Repository::remember
     * @method static mixed remember(string $key, \DateInterval|\DateTimeInterface|int|null $ttl, \Closure $callback)
     * @see \Psr\SimpleCache\CacheInterface::has
     * @method static bool has(string $key)
     * @see \Psr\SimpleCache\CacheInterface::getMultiple
     * @method static iterable getMultiple(iterable $keys, $default = null)
     * @see \Illuminate\Contracts\Cache\Repository::add
     * @method static bool add(string $key, $value, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Contracts\Cache\Repository::getStore
     * @method static \Illuminate\Contracts\Cache\Store getStore()
     * @see \Illuminate\Cache\CacheManager::forgetDriver
     * @method static void forgetDriver(array|null|string $name = null)
     * @see \Psr\SimpleCache\CacheInterface::set
     * @method static bool set(string $key, $value, \DateInterval|int|null $ttl = null)
     * @see \Psr\SimpleCache\CacheInterface::clear
     * @method static bool clear()
     * @see \Illuminate\Cache\CacheManager::store
     * @method static \Illuminate\Contracts\Cache\Repository store(null|string $name = null)
     * @see \Illuminate\Cache\CacheManager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Contracts\Cache\Repository::pull
     * @method static mixed pull(string $key, $default = null)
     * @see \Illuminate\Contracts\Cache\Repository::forget
     * @method static bool forget(string $key)
     * @see \Illuminate\Cache\CacheManager::driver
     * @method static \Illuminate\Contracts\Cache\Repository driver(null|string $driver = null)
     * @see \Illuminate\Contracts\Cache\Repository::sear
     * @method static mixed sear(string $key, \Closure $callback)
     * @see \Illuminate\Contracts\Cache\Repository::decrement
     * @method static bool|int decrement(string $key, $value = 1)
     * @see \Psr\SimpleCache\CacheInterface::deleteMultiple
     * @method static bool deleteMultiple(iterable $keys)
     * @see \Illuminate\Contracts\Cache\Repository::forever
     * @method static bool forever(string $key, $value)
     * @see \Illuminate\Cache\CacheManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Cache\Repository::supportsTags
     * @method static bool supportsTags()
     * @see \Illuminate\Cache\Repository::putMany
     * @method static bool putMany(array $values, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Cache\Repository::getDefaultCacheTime
     * @method static int|null getDefaultCacheTime()
     * @see \Illuminate\Contracts\Cache\Store::getPrefix
     * @method static string getPrefix()
     * @see \Illuminate\Cache\Repository::tags
     * @method static \Illuminate\Cache\TaggedCache tags(array|mixed $names)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Cache\Repository::setDefaultCacheTime
     * @method static void setDefaultCacheTime(int|null $seconds)
     * @see \Illuminate\Cache\Repository::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Cache\Repository::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Cache\Repository::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Cache\Repository::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Contracts\Cache\Store::flush
     * @method static bool flush()
     * @see \Illuminate\Cache\Repository::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Cache\Repository::get
     * @method static mixed get(string $key, $default = null)
     * @see \Illuminate\Cache\Repository::missing
     * @method static bool missing(string $key)
     * @see \Illuminate\Cache\Repository::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Cache\Repository::many
     * @method static array many(array $keys)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     */
    class Cache {}
    
    /**
     * @see \Illuminate\Config\Repository::all
     * @method static array all()
     * @see \Illuminate\Config\Repository::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Config\Repository::set
     * @method static void set(array|string $key, $value = null)
     * @see \Illuminate\Config\Repository::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Config\Repository::getMany
     * @method static array getMany(array $keys)
     * @see \Illuminate\Config\Repository::get
     * @method static mixed get(array|string $key, $default = null)
     * @see \Illuminate\Config\Repository::prepend
     * @method static void prepend(string $key, $value)
     * @see \Illuminate\Config\Repository::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Config\Repository::has
     * @method static bool has(string $key)
     * @see \Illuminate\Config\Repository::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Config\Repository::push
     * @method static void push(string $key, $value)
     */
    class Config {}
    
    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Cookie\CookieJar::unqueue
     * @method static void unqueue(string $name, null|string $path = null)
     * @see \Illuminate\Cookie\CookieJar::queued
     * @method static null|\Symfony\Component\HttpFoundation\Cookie queued(string $key, $default = null, null|string $path = null)
     * @see \Illuminate\Cookie\CookieJar::getQueuedCookies
     * @method static \Symfony\Component\HttpFoundation\Cookie[] getQueuedCookies()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Cookie\CookieJar::forget
     * @method static \Symfony\Component\HttpFoundation\Cookie forget(string $name, null|string $path = null, null|string $domain = null)
     * @see \Illuminate\Cookie\CookieJar::hasQueued
     * @method static bool hasQueued(string $key, null|string $path = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Cookie\CookieJar::expire
     * @method static void expire(string $name, null|string $path = null, null|string $domain = null)
     * @see \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain
     * @method static void setDefaultPathAndDomain(string $path, string $domain, bool $secure = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::forever
     * @method static \Symfony\Component\HttpFoundation\Cookie forever(string $name, string $value, null|string $path = null, null|string $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::make
     * @method static \Symfony\Component\HttpFoundation\Cookie make(string $name, string $value, int $minutes = 0, null|string $path = null, null|string $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::queue
     * @method static void queue(...$parameters)
     * @see \Illuminate\Cookie\CookieJar::flushQueuedCookies
     * @method static void flushQueuedCookies()
     */
    class Cookie {}
    
    /**
     * @see \Illuminate\Encryption\Encrypter::generateKey
     * @method static string generateKey(string $cipher)
     * @see \Illuminate\Encryption\Encrypter::decryptString
     * @method static string decryptString(string $payload)
     * @see \Illuminate\Encryption\Encrypter::getKey
     * @method static string getKey()
     * @see \Illuminate\Encryption\Encrypter::encrypt
     * @method static string encrypt($value, bool $serialize = true)
     * @see \Illuminate\Encryption\Encrypter::encryptString
     * @method static string encryptString(string $value)
     * @see \Illuminate\Encryption\Encrypter::decrypt
     * @method static mixed decrypt(string $payload, bool $unserialize = true)
     * @see \Illuminate\Encryption\Encrypter::supported
     * @method static bool supported(string $key, string $cipher)
     */
    class Crypt {}
    
    /**
     * @see \Illuminate\Database\Connection::logQuery
     * @method static void logQuery(string $query, array $bindings, float|null $time = null)
     * @see \Illuminate\Database\DatabaseManager::disconnect
     * @method static void disconnect(null|string $name = null)
     * @see \Illuminate\Database\Connection::select
     * @method static array select(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::getDatabaseName
     * @method static string getDatabaseName()
     * @see \Illuminate\Database\Connection::prepareBindings
     * @method static array prepareBindings(array $bindings)
     * @see \Illuminate\Database\DatabaseManager::getConnections
     * @method static array getConnections()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::commit
     * @method static void commit()
     * @see \Illuminate\Database\Connection::recordsHaveBeenModified
     * @method static void recordsHaveBeenModified(bool $value = true)
     * @see \Illuminate\Database\Connection::getSchemaGrammar
     * @method static \Illuminate\Database\Schema\Grammars\Grammar getSchemaGrammar()
     * @see \Illuminate\Database\Connection::pretend
     * @method static array pretend(\Closure $callback)
     * @see \Illuminate\Database\Connection::useDefaultSchemaGrammar
     * @method static void useDefaultSchemaGrammar()
     * @see \Illuminate\Database\DatabaseManager::connection
     * @method static \Illuminate\Database\Connection connection(null|string $name = null)
     * @see \Illuminate\Database\DatabaseManager::setDefaultConnection
     * @method static void setDefaultConnection(string $name)
     * @see \Illuminate\Database\Connection::raw
     * @method static \Illuminate\Database\Query\Expression raw($value)
     * @see \Illuminate\Database\Connection::getSchemaBuilder
     * @method static \Illuminate\Database\Schema\Builder getSchemaBuilder()
     * @see \Illuminate\Database\DatabaseManager::extend
     * @method static void extend(string $name, callable $resolver)
     * @see \Illuminate\Database\Connection::setReadWriteType
     * @method static void setReadWriteType(null|string $readWriteType)
     * @see \Illuminate\Database\Connection::logging
     * @method static bool logging()
     * @see \Illuminate\Database\DatabaseManager::getDefaultConnection
     * @method static string getDefaultConnection()
     * @see \Illuminate\Database\Connection::affectingStatement
     * @method static int affectingStatement(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::selectOne
     * @method static mixed selectOne(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\DatabaseManager::reconnect
     * @method static \Illuminate\Database\Connection reconnect(null|string $name = null)
     * @see \Illuminate\Database\Connection::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Database\Connection::setPdo
     * @method static void setPdo(\Closure|null|\PDO $pdo)
     * @see \Illuminate\Database\Connection::bindValues
     * @method static void bindValues(\PDOStatement $statement, array $bindings)
     * @see \Illuminate\Database\Connection::table
     * @method static \Illuminate\Database\Query\Builder table(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Connection::getRawPdo
     * @method static \Closure|null|\PDO getRawPdo()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::rollBack
     * @method static void rollBack(int|null $toLevel = null)
     * @see \Illuminate\Database\Concerns\ManagesTransactions::transactionLevel
     * @method static int transactionLevel()
     * @see \Illuminate\Database\Connection::setPostProcessor
     * @method static void setPostProcessor(\Illuminate\Database\Query\Processors\Processor $processor)
     * @see \Illuminate\Database\Connection::forgetRecordModificationState
     * @method static void forgetRecordModificationState()
     * @see \Illuminate\Database\Connection::unprepared
     * @method static bool unprepared(string $query)
     * @see \Illuminate\Database\DatabaseManager::supportedDrivers
     * @method static array supportedDrivers()
     * @see \Illuminate\Database\Connection::setReadPdo
     * @method static void setReadPdo(\Closure|null|\PDO $pdo)
     * @see \Illuminate\Database\Connection::getPdo
     * @method static \PDO getPdo()
     * @see \Illuminate\Database\Connection::flushQueryLog
     * @method static void flushQueryLog()
     * @see \Illuminate\Database\Connection::getDriverName
     * @method static string getDriverName()
     * @see \Illuminate\Database\Connection::getName
     * @method static null|string getName()
     * @see \Illuminate\Database\Connection::getRawReadPdo
     * @method static \Closure|null|\PDO getRawReadPdo()
     * @see \Illuminate\Database\Connection::resolverFor
     * @method static void resolverFor(string $driver, \Closure $callback)
     * @see \Illuminate\Database\DatabaseManager::availableDrivers
     * @method static array availableDrivers()
     * @see \Illuminate\Database\Connection::getReadPdo
     * @method static \PDO getReadPdo()
     * @see \Illuminate\Database\Connection::unsetEventDispatcher
     * @method static void unsetEventDispatcher()
     * @see \Illuminate\Database\Connection::getDoctrineConnection
     * @method static \Doctrine\DBAL\Connection getDoctrineConnection()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::transaction
     * @method static mixed transaction(\Closure $callback, int $attempts = 1)
     * @see \Illuminate\Database\Connection::getPostProcessor
     * @method static \Illuminate\Database\Query\Processors\Processor getPostProcessor()
     * @see \Illuminate\Database\Connection::selectFromWriteConnection
     * @method static array selectFromWriteConnection(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::useDefaultPostProcessor
     * @method static void useDefaultPostProcessor()
     * @see \Illuminate\Database\Connection::getDoctrineSchemaManager
     * @method static \Doctrine\DBAL\Schema\AbstractSchemaManager getDoctrineSchemaManager()
     * @see \Illuminate\Database\Connection::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Database\Connection::getQueryGrammar
     * @method static \Illuminate\Database\Query\Grammars\Grammar getQueryGrammar()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::afterCommit
     * @method static void afterCommit(callable $callback)
     * @see \Illuminate\Database\Connection::getQueryLog
     * @method static array getQueryLog()
     * @see \Illuminate\Database\Connection::getDoctrineColumn
     * @method static \Doctrine\DBAL\Schema\Column getDoctrineColumn(string $table, string $column)
     * @see \Illuminate\Database\DatabaseManager::usingConnection
     * @method static mixed usingConnection(string $name, callable $callback)
     * @see \Illuminate\Database\Connection::isDoctrineAvailable
     * @method static bool isDoctrineAvailable()
     * @see \Illuminate\Database\Connection::query
     * @method static \Illuminate\Database\Query\Builder query()
     * @see \Illuminate\Database\Connection::disableQueryLog
     * @method static void disableQueryLog()
     * @see \Illuminate\Database\Connection::setQueryGrammar
     * @method static void setQueryGrammar(\Illuminate\Database\Query\Grammars\Grammar $grammar)
     * @see \Illuminate\Database\Connection::getTablePrefix
     * @method static string getTablePrefix()
     * @see \Illuminate\Database\Connection::getNameWithReadWriteType
     * @method static null|string getNameWithReadWriteType()
     * @see \Illuminate\Database\Connection::cursor
     * @method static \Generator cursor(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::useDefaultQueryGrammar
     * @method static void useDefaultQueryGrammar()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::beginTransaction
     * @method static void beginTransaction()
     * @see \Illuminate\Database\Connection::pretending
     * @method static bool pretending()
     * @see \Illuminate\Database\DatabaseManager::setReconnector
     * @method static void setReconnector(callable $reconnector)
     * @see \Illuminate\Database\Connection::insert
     * @method static bool insert(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::setDatabaseName
     * @method static void setDatabaseName(string $database)
     * @see \Illuminate\Database\Connection::update
     * @method static int update(string $query, array $bindings = [])
     * @see \Illuminate\Database\DatabaseManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Database\Connection::withTablePrefix
     * @method static \Illuminate\Database\Grammar withTablePrefix(\Illuminate\Database\Grammar $grammar)
     * @see \Illuminate\Database\Connection::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Database\Connection::delete
     * @method static int delete(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::setRecordModificationState
     * @method static void setRecordModificationState(bool $value)
     * @see \Illuminate\Database\DatabaseManager::setApplication
     * @method static void setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Database\Connection::statement
     * @method static bool statement(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::unsetTransactionManager
     * @method static void unsetTransactionManager()
     * @see \Illuminate\Database\Connection::setTablePrefix
     * @method static void setTablePrefix(string $prefix)
     * @see \Illuminate\Database\Connection::enableQueryLog
     * @method static void enableQueryLog()
     * @see \Illuminate\Database\Connection::getConfig
     * @method static mixed getConfig(null|string $option = null)
     * @see \Illuminate\Database\Connection::setTransactionManager
     * @method static void setTransactionManager(\Illuminate\Database\DatabaseTransactionsManager $manager)
     * @see \Illuminate\Database\Connection::setSchemaGrammar
     * @method static void setSchemaGrammar(\Illuminate\Database\Schema\Grammars\Grammar $grammar)
     * @see \Illuminate\Database\Connection::hasModifiedRecords
     * @method static bool hasModifiedRecords()
     * @see \Illuminate\Database\Connection::useWriteConnectionWhenReading
     * @method static void useWriteConnectionWhenReading(bool $value = true)
     * @see \Illuminate\Database\Connection::getResolver
     * @method static mixed getResolver(string $driver)
     */
    class DB {}
    
    /**
     * @see \Illuminate\Events\Dispatcher::dispatch
     * @method static array|null dispatch(object|string $event, $payload = [], bool $halt = false)
     * @see \Illuminate\Events\Dispatcher::hasListeners
     * @method static bool hasListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::listen
     * @method static void listen(array|\Closure|string $events, array|\Closure|null|string $listener = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Events\Dispatcher::flush
     * @method static void flush(string $event)
     * @see \Illuminate\Events\Dispatcher::makeListener
     * @method static \Closure makeListener(\Closure|string $listener, bool $wildcard = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Events\Dispatcher::subscribe
     * @method static void subscribe(object|string $subscriber)
     * @see \Illuminate\Events\Dispatcher::setQueueResolver
     * @method static void setQueueResolver(callable $resolver)
     * @see \Illuminate\Events\Dispatcher::push
     * @method static void push(string $event, array $payload = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Events\Dispatcher::forget
     * @method static void forget(string $event)
     * @see \Illuminate\Events\Dispatcher::hasWildcardListeners
     * @method static bool hasWildcardListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::until
     * @method static array|null until(object|string $event, $payload = [])
     * @see \Illuminate\Events\Dispatcher::forgetPushed
     * @method static void forgetPushed()
     * @see \Illuminate\Events\Dispatcher::getListeners
     * @method static array getListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::createClassListener
     * @method static \Closure createClassListener(string $listener, bool $wildcard = false)
     */
    class Event {}
    
    /**
     * @see \Illuminate\Filesystem\Filesystem::extension
     * @method static string extension(string $path)
     * @see \Illuminate\Filesystem\Filesystem::ensureDirectoryExists
     * @method static void ensureDirectoryExists(string $path, int $mode = 0755, bool $recursive = true)
     * @see \Illuminate\Filesystem\Filesystem::isWritable
     * @method static bool isWritable(string $path)
     * @see \Illuminate\Filesystem\Filesystem::link
     * @method static void link(string $target, string $link)
     * @see \Illuminate\Filesystem\Filesystem::replace
     * @method static void replace(string $path, string $content)
     * @see \Illuminate\Filesystem\Filesystem::prepend
     * @method static int prepend(string $path, string $data)
     * @see \Illuminate\Filesystem\Filesystem::glob
     * @method static array glob(string $pattern, int $flags = 0)
     * @see \Illuminate\Filesystem\Filesystem::type
     * @method static string type(string $path)
     * @see \Illuminate\Filesystem\Filesystem::dirname
     * @method static string dirname(string $path)
     * @see \Illuminate\Filesystem\Filesystem::delete
     * @method static bool delete(array|string $paths)
     * @see \Illuminate\Filesystem\Filesystem::put
     * @method static bool|int put(string $path, string $contents, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::copyDirectory
     * @method static bool copyDirectory(string $directory, string $destination, int|null $options = null)
     * @see \Illuminate\Filesystem\Filesystem::requireOnce
     * @method static mixed requireOnce(string $path, array $data = [])
     * @see \Illuminate\Filesystem\Filesystem::relativeLink
     * @method static void relativeLink(string $target, string $link)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Filesystem\Filesystem::isFile
     * @method static bool isFile(string $file)
     * @see \Illuminate\Filesystem\Filesystem::get
     * @method static string get(string $path, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::missing
     * @method static bool missing(string $path)
     * @see \Illuminate\Filesystem\Filesystem::chmod
     * @method static mixed chmod(string $path, int|null $mode = null)
     * @see \Illuminate\Filesystem\Filesystem::directories
     * @method static array directories(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::copy
     * @method static bool copy(string $path, string $target)
     * @see \Illuminate\Filesystem\Filesystem::lines
     * @method static \Illuminate\Support\LazyCollection lines(string $path)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Filesystem\Filesystem::move
     * @method static bool move(string $path, string $target)
     * @see \Illuminate\Filesystem\Filesystem::guessExtension
     * @method static null|string guessExtension(string $path)
     * @see \Illuminate\Filesystem\Filesystem::isDirectory
     * @method static bool isDirectory(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::moveDirectory
     * @method static bool moveDirectory(string $from, string $to, bool $overwrite = false)
     * @see \Illuminate\Filesystem\Filesystem::sharedGet
     * @method static string sharedGet(string $path)
     * @see \Illuminate\Filesystem\Filesystem::getRequire
     * @method static mixed getRequire(string $path, array $data = [])
     * @see \Illuminate\Filesystem\Filesystem::replaceInFile
     * @method static void replaceInFile(array|string $search, array|string $replace, string $path)
     * @see \Illuminate\Filesystem\Filesystem::deleteDirectory
     * @method static bool deleteDirectory(string $directory, bool $preserve = false)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Filesystem\Filesystem::basename
     * @method static string basename(string $path)
     * @see \Illuminate\Filesystem\Filesystem::size
     * @method static int size(string $path)
     * @see \Illuminate\Filesystem\Filesystem::lastModified
     * @method static int lastModified(string $path)
     * @see \Illuminate\Filesystem\Filesystem::makeDirectory
     * @method static bool makeDirectory(string $path, int $mode = 0755, bool $recursive = false, bool $force = false)
     * @see \Illuminate\Filesystem\Filesystem::isReadable
     * @method static bool isReadable(string $path)
     * @see \Illuminate\Filesystem\Filesystem::name
     * @method static string name(string $path)
     * @see \Illuminate\Filesystem\Filesystem::files
     * @method static \Symfony\Component\Finder\SplFileInfo[] files(string $directory, bool $hidden = false)
     * @see \Illuminate\Filesystem\Filesystem::exists
     * @method static bool exists(string $path)
     * @see \Illuminate\Filesystem\Filesystem::mimeType
     * @method static false|string mimeType(string $path)
     * @see \Illuminate\Filesystem\Filesystem::allFiles
     * @method static \Symfony\Component\Finder\SplFileInfo[] allFiles(string $directory, bool $hidden = false)
     * @see \Illuminate\Filesystem\Filesystem::cleanDirectory
     * @method static bool cleanDirectory(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::hash
     * @method static string hash(string $path)
     * @see \Illuminate\Filesystem\Filesystem::append
     * @method static int append(string $path, string $data)
     * @see \Illuminate\Filesystem\Filesystem::deleteDirectories
     * @method static bool deleteDirectories(string $directory)
     */
    class File {}
    
    /**
     * @see \Illuminate\Contracts\Auth\Access\Gate::allows
     * @method static bool allows(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::before
     * @method static void before(callable $callback)
     * @see \Illuminate\Contracts\Auth\Access\Gate::resource
     * @method static void resource(string $name, string $class, array $abilities = null)
     * @see \Illuminate\Contracts\Auth\Access\Gate::getPolicyFor
     * @method static mixed getPolicyFor(object|string $class)
     * @see \Illuminate\Contracts\Auth\Access\Gate::raw
     * @method static mixed raw(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::check
     * @method static bool check(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::denies
     * @method static bool denies(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::any
     * @method static bool any(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::abilities
     * @method static array abilities()
     * @see \Illuminate\Contracts\Auth\Access\Gate::forUser
     * @method static void forUser(\Illuminate\Contracts\Auth\Authenticatable|mixed $user)
     * @see \Illuminate\Contracts\Auth\Access\Gate::inspect
     * @method static \Illuminate\Auth\Access\Response inspect(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::define
     * @method static void define(string $ability, callable|string $callback)
     * @see \Illuminate\Contracts\Auth\Access\Gate::after
     * @method static void after(callable $callback)
     * @see \Illuminate\Contracts\Auth\Access\Gate::has
     * @method static bool has(string $ability)
     * @see \Illuminate\Contracts\Auth\Access\Gate::authorize
     * @method static \Illuminate\Auth\Access\Response authorize(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::policy
     * @method static void policy(string $class, string $policy)
     */
    class Gate {}
    
    /**
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static void forgetDrivers()
     * @see \Illuminate\Hashing\HashManager::createArgonDriver
     * @method static \Illuminate\Hashing\ArgonHasher createArgonDriver()
     * @see \Illuminate\Hashing\HashManager::check
     * @method static bool check(string $value, string $hashedValue, array $options = [])
     * @see \Illuminate\Support\Manager::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Hashing\HashManager::createBcryptDriver
     * @method static \Illuminate\Hashing\BcryptHasher createBcryptDriver()
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Hashing\HashManager::needsRehash
     * @method static bool needsRehash(string $hashedValue, array $options = [])
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Hashing\HashManager::make
     * @method static string make(string $value, array $options = [])
     * @see \Illuminate\Hashing\HashManager::createArgon2idDriver
     * @method static \Illuminate\Hashing\Argon2IdHasher createArgon2idDriver()
     * @see \Illuminate\Hashing\HashManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Hashing\HashManager::info
     * @method static array info(string $hashedValue)
     */
    class Hash {}
    
    /**
     * @see \Illuminate\Http\Client\Factory::assertSentCount
     * @method static void assertSentCount(int $count)
     * @see \Illuminate\Http\Client\Factory::dd
     * @method static \Illuminate\Http\Client\PendingRequest dd()
     * @see \Illuminate\Http\Client\Factory::fakeSequence
     * @method static \Illuminate\Http\Client\ResponseSequence fakeSequence(string $url = '*')
     * @see \Illuminate\Http\Client\Factory::withDigestAuth
     * @method static \Illuminate\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
     * @see \Illuminate\Http\Client\Factory::withoutRedirecting
     * @method static \Illuminate\Http\Client\PendingRequest withoutRedirecting()
     * @see \Illuminate\Http\Client\Factory::put
     * @method static \Illuminate\Http\Client\Response put(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::patch
     * @method static \Illuminate\Http\Client\Response patch(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::post
     * @method static \Illuminate\Http\Client\Response post(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::asJson
     * @method static \Illuminate\Http\Client\PendingRequest asJson()
     * @see \Illuminate\Http\Client\Factory::acceptJson
     * @method static \Illuminate\Http\Client\PendingRequest acceptJson()
     * @see \Illuminate\Http\Client\Factory::stub
     * @method static \Illuminate\Http\Client\PendingRequest stub(callable $callback)
     * @see \Illuminate\Http\Client\Factory::withUserAgent
     * @method static \Illuminate\Http\Client\PendingRequest withUserAgent(string $userAgent)
     * @see \Illuminate\Http\Client\Factory::withBody
     * @method static \Illuminate\Http\Client\PendingRequest withBody(resource|string $content, string $contentType)
     * @see \Illuminate\Http\Client\Factory::recordRequestResponsePair
     * @method static void recordRequestResponsePair(\Illuminate\Http\Client\Request $request, \Illuminate\Http\Client\Response $response)
     * @see \Illuminate\Http\Client\Factory::withCookies
     * @method static \Illuminate\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
     * @see \Illuminate\Http\Client\Factory::sink
     * @method static \Illuminate\Http\Client\PendingRequest sink(resource|string $to)
     * @see \Illuminate\Http\Client\Factory::pool
     * @method static array pool(callable $callback)
     * @see \Illuminate\Http\Client\Factory::withBasicAuth
     * @method static \Illuminate\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
     * @see \Illuminate\Http\Client\Factory::accept
     * @method static \Illuminate\Http\Client\PendingRequest accept(string $contentType)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Http\Client\Factory::sequence
     * @method static \Illuminate\Http\Client\ResponseSequence sequence(array $responses = [])
     * @see \Illuminate\Http\Client\Factory::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Http\Client\Factory::send
     * @method static \Illuminate\Http\Client\Response send(string $method, string $url, array $options = [])
     * @see \Illuminate\Http\Client\Factory::withoutVerifying
     * @method static \Illuminate\Http\Client\PendingRequest withoutVerifying()
     * @see \Illuminate\Http\Client\Factory::assertSentInOrder
     * @method static void assertSentInOrder(array $callbacks)
     * @see \Illuminate\Http\Client\Factory::delete
     * @method static \Illuminate\Http\Client\Response delete(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::timeout
     * @method static \Illuminate\Http\Client\PendingRequest timeout(int $seconds)
     * @see \Illuminate\Http\Client\Factory::head
     * @method static \Illuminate\Http\Client\Response head(string $url, array|null|string $query = null)
     * @see \Illuminate\Http\Client\Factory::withHeaders
     * @method static \Illuminate\Http\Client\PendingRequest withHeaders(array $headers)
     * @see \Illuminate\Http\Client\Factory::withMiddleware
     * @method static \Illuminate\Http\Client\PendingRequest withMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\Factory::baseUrl
     * @method static \Illuminate\Http\Client\PendingRequest baseUrl(string $url)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Http\Client\Factory::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getDispatcher()
     * @see \Illuminate\Http\Client\Factory::get
     * @method static \Illuminate\Http\Client\Response get(string $url, array|null|string $query = null)
     * @see \Illuminate\Http\Client\Factory::assertSequencesAreEmpty
     * @method static void assertSequencesAreEmpty()
     * @see \Illuminate\Http\Client\Factory::dump
     * @method static \Illuminate\Http\Client\PendingRequest dump()
     * @see \Illuminate\Http\Client\Factory::attach
     * @method static \Illuminate\Http\Client\PendingRequest attach(array|string $name, string $contents = '', null|string $filename = null, array $headers = [])
     * @see \Illuminate\Http\Client\Factory::retry
     * @method static \Illuminate\Http\Client\PendingRequest retry(int $times, int $sleep = 0)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Http\Client\Factory::withOptions
     * @method static \Illuminate\Http\Client\PendingRequest withOptions(array $options)
     * @see \Illuminate\Http\Client\Factory::bodyFormat
     * @method static \Illuminate\Http\Client\PendingRequest bodyFormat(string $format)
     * @see \Illuminate\Http\Client\Factory::recorded
     * @method static \Illuminate\Support\Collection recorded(callable $callback = null)
     * @see \Illuminate\Http\Client\Factory::contentType
     * @method static \Illuminate\Http\Client\PendingRequest contentType(string $contentType)
     * @see \Illuminate\Http\Client\Factory::assertSent
     * @method static void assertSent(callable $callback)
     * @see \Illuminate\Http\Client\Factory::async
     * @method static \Illuminate\Http\Client\PendingRequest async()
     * @see \Illuminate\Http\Client\Factory::beforeSending
     * @method static \Illuminate\Http\Client\PendingRequest beforeSending(callable $callback)
     * @see \Illuminate\Http\Client\Factory::response
     * @method static \GuzzleHttp\Promise\PromiseInterface response(array|string $body = null, int $status = 200, array $headers = [])
     * @see \Illuminate\Http\Client\Factory::fake
     * @method static void fake(array|callable $callback = null)
     * @see \Illuminate\Http\Client\Factory::asMultipart
     * @method static \Illuminate\Http\Client\PendingRequest asMultipart()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Http\Client\Factory::stubUrl
     * @method static void stubUrl(string $url, callable|\GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response $callback)
     * @see \Illuminate\Http\Client\Factory::asForm
     * @method static \Illuminate\Http\Client\PendingRequest asForm()
     * @see \Illuminate\Http\Client\Factory::withToken
     * @method static \Illuminate\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
     * @see \Illuminate\Http\Client\Factory::assertNotSent
     * @method static void assertNotSent(callable $callback)
     */
    class Http {}
    
    /**
     * @see \Illuminate\Translation\Translator::parseKey
     * @method static array parseKey(string $key)
     * @see \Illuminate\Translation\Translator::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Translation\Translator::addJsonPath
     * @method static void addJsonPath(string $path)
     * @see \Illuminate\Translation\Translator::locale
     * @method static string locale()
     * @see \Illuminate\Translation\Translator::setFallback
     * @method static void setFallback(string $fallback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Translation\Translator::load
     * @method static void load(string $namespace, string $group, string $locale)
     * @see \Illuminate\Translation\Translator::get
     * @method static array|string get(string $key, array $replace = [], null|string $locale = null, bool $fallback = true)
     * @see \Illuminate\Translation\Translator::hasForLocale
     * @method static bool hasForLocale(string $key, null|string $locale = null)
     * @see \Illuminate\Translation\Translator::has
     * @method static bool has(string $key, null|string $locale = null, bool $fallback = true)
     * @see \Illuminate\Translation\Translator::setLoaded
     * @method static void setLoaded(array $loaded)
     * @see \Illuminate\Support\NamespacedItemResolver::setParsedKey
     * @method static void setParsedKey(string $key, array $parsed)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Translation\Translator::addNamespace
     * @method static void addNamespace(string $namespace, string $hint)
     * @see \Illuminate\Translation\Translator::getFallback
     * @method static string getFallback()
     * @see \Illuminate\Translation\Translator::getLoader
     * @method static \Illuminate\Contracts\Translation\Loader getLoader()
     * @see \Illuminate\Translation\Translator::getSelector
     * @method static \Illuminate\Translation\MessageSelector getSelector()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Translation\Translator::addLines
     * @method static void addLines(array $lines, string $locale, string $namespace = '*')
     * @see \Illuminate\Translation\Translator::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Translation\Translator::choice
     * @method static string choice(string $key, array|\Countable|int $number, array $replace = [], null|string $locale = null)
     * @see \Illuminate\Translation\Translator::setSelector
     * @method static void setSelector(\Illuminate\Translation\MessageSelector $selector)
     */
    class Lang {}
    
    /**
     * @see \Illuminate\Log\Logger::debug
     * @method static void debug(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::critical
     * @method static void critical(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::log
     * @method static void log(string $level, string $message, array $context = [])
     * @see \Illuminate\Log\Logger::emergency
     * @method static void emergency(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::withContext
     * @method static void withContext(array $context = [])
     * @see \Illuminate\Log\Logger::error
     * @method static void error(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::getLogger
     * @method static \Psr\Log\LoggerInterface getLogger()
     * @see \Illuminate\Log\Logger::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher)
     * @see \Illuminate\Log\Logger::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Log\Logger::alert
     * @method static void alert(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Log\Logger::warning
     * @method static void warning(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::withoutContext
     * @method static void withoutContext()
     * @see \Illuminate\Log\Logger::write
     * @method static void write(string $level, string $message, array $context = [])
     * @see \Illuminate\Log\Logger::info
     * @method static void info(string $message, array $context = [])
     * @see \Illuminate\Log\Logger::notice
     * @method static void notice(string $message, array $context = [])
     */
    class Log {}
    
    /**
     * @see \Illuminate\Mail\Mailer::alwaysReplyTo
     * @method static void alwaysReplyTo(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::setSwiftMailer
     * @method static void setSwiftMailer(\Swift_Mailer $swift)
     * @see \Illuminate\Mail\Mailer::bcc
     * @method static \Illuminate\Mail\PendingMail bcc($users)
     * @see \Illuminate\Mail\Mailer::getSwiftMailer
     * @method static \Swift_Mailer getSwiftMailer()
     * @see \Illuminate\Mail\Mailer::laterOn
     * @method static mixed laterOn(string $queue, \DateInterval|\DateTimeInterface|int $delay, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Mail\Mailer::later
     * @method static mixed later(\DateInterval|\DateTimeInterface|int $delay, \Illuminate\Contracts\Mail\Mailable $view, null|string $queue = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Mail\Mailer::plain
     * @method static void plain(string $view, array $data, $callback)
     * @see \Illuminate\Mail\Mailer::alwaysTo
     * @method static void alwaysTo(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::html
     * @method static void html(string $html, $callback)
     * @see \Illuminate\Mail\Mailer::render
     * @method static string render(array|string $view, array $data = [])
     * @see \Illuminate\Mail\Mailer::cc
     * @method static \Illuminate\Mail\PendingMail cc($users)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Mail\Mailer::getViewFactory
     * @method static \Illuminate\Contracts\View\Factory getViewFactory()
     * @see \Illuminate\Mail\Mailer::alwaysFrom
     * @method static void alwaysFrom(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::failures
     * @method static array failures()
     * @see \Illuminate\Mail\Mailer::onQueue
     * @method static mixed onQueue(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Mail\Mailer::raw
     * @method static void raw(string $text, $callback)
     * @see \Illuminate\Mail\Mailer::alwaysReturnPath
     * @method static void alwaysReturnPath(string $address)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Mail\Mailer::setQueue
     * @method static void setQueue(\Illuminate\Contracts\Queue\Factory $queue)
     * @see \Illuminate\Mail\Mailer::to
     * @method static \Illuminate\Mail\PendingMail to($users)
     * @see \Illuminate\Mail\Mailer::queueOn
     * @method static mixed queueOn(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Mail\Mailer::send
     * @method static void send(array|\Illuminate\Contracts\Mail\Mailable|string $view, array $data = [], \Closure|null|string $callback = null)
     * @see \Illuminate\Mail\Mailer::queue
     * @method static mixed queue(array|\Illuminate\Contracts\Mail\Mailable|string $view, null|string $queue = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingQueued
     * @method static void assertNothingQueued()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotQueued
     * @method static void assertNotQueued(string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::queued
     * @method static \Illuminate\Support\Collection queued(string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::hasSent
     * @method static bool hasSent(string $mailable)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::mailer
     * @method static \Illuminate\Contracts\Mail\Mailer mailer(null|string $name = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::sent
     * @method static \Illuminate\Support\Collection sent(string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertQueued
     * @method static void assertQueued(\Closure|string $mailable, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertSent
     * @method static void assertSent(\Closure|string $mailable, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::hasQueued
     * @method static bool hasQueued(string $mailable)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotSent
     * @method static void assertNotSent(string $mailable, callable|null $callback = null)
     */
    class Mail {}
    
    /**
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static void forgetDrivers()
     * @see \Illuminate\Notifications\ChannelManager::channel
     * @method static mixed channel(null|string $name = null)
     * @see \Illuminate\Notifications\ChannelManager::locale
     * @method static void locale(string $locale)
     * @see \Illuminate\Notifications\ChannelManager::sendNow
     * @method static void sendNow(array|\Illuminate\Support\Collection|mixed $notifiables, $notification, array $channels = null)
     * @see \Illuminate\Support\Manager::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Notifications\ChannelManager::deliverVia
     * @method static void deliverVia(string $channel)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Notifications\ChannelManager::send
     * @method static void send(array|\Illuminate\Support\Collection|mixed $notifiables, $notification)
     * @see \Illuminate\Notifications\ChannelManager::deliversVia
     * @method static string deliversVia()
     * @see \Illuminate\Notifications\ChannelManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     */
    class Notification {}
    
    /**
     * @see \Illuminate\Testing\ParallelTesting::callSetUpTestCaseCallbacks
     * @method static void callSetUpTestCaseCallbacks(\Illuminate\Foundation\Testing\TestCase $testCase)
     * @see \Illuminate\Testing\ParallelTesting::resolveTokenUsing
     * @method static void resolveTokenUsing($resolver)
     * @see \Illuminate\Testing\ParallelTesting::callTearDownProcessCallbacks
     * @method static void callTearDownProcessCallbacks()
     * @see \Illuminate\Testing\ParallelTesting::resolveOptionsUsing
     * @method static void resolveOptionsUsing($resolver)
     * @see \Illuminate\Testing\ParallelTesting::callSetUpProcessCallbacks
     * @method static void callSetUpProcessCallbacks()
     * @see \Illuminate\Testing\ParallelTesting::token
     * @method static false|int token()
     * @see \Illuminate\Testing\ParallelTesting::setUpTestDatabase
     * @method static void setUpTestDatabase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::tearDownProcess
     * @method static void tearDownProcess(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::callSetUpTestDatabaseCallbacks
     * @method static void callSetUpTestDatabaseCallbacks(string $database)
     * @see \Illuminate\Testing\ParallelTesting::setUpProcess
     * @method static void setUpProcess(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::tearDownTestCase
     * @method static void tearDownTestCase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::callTearDownTestCaseCallbacks
     * @method static void callTearDownTestCaseCallbacks(\Illuminate\Foundation\Testing\TestCase $testCase)
     * @see \Illuminate\Testing\ParallelTesting::setUpTestCase
     * @method static void setUpTestCase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::option
     * @method static mixed option(string $option)
     */
    class ParallelTesting {}
    
    /**
     * @see \Illuminate\Auth\Passwords\PasswordBroker::sendResetLink
     * @method static string sendResetLink(array $credentials, \Closure $callback = null)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::getRepository
     * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBroker::getUser
     * @method static \Illuminate\Contracts\Auth\CanResetPassword|null getUser(array $credentials)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::deleteToken
     * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::createToken
     * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::tokenExists
     * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::reset
     * @method static mixed reset(array $credentials, \Closure $callback)
     */
    class Password {}
    
    /**
     * @see \Illuminate\Queue\QueueManager::addConnector
     * @method static void addConnector(string $driver, \Closure $resolver)
     * @see \Illuminate\Contracts\Queue\Queue::setConnectionName
     * @method static void setConnectionName(string $name)
     * @see \Illuminate\Queue\QueueManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Queue\QueueManager::before
     * @method static void before($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pop
     * @method static \Illuminate\Contracts\Queue\Job|null pop(null|string $queue = null)
     * @see \Illuminate\Contracts\Queue\Queue::laterOn
     * @method static mixed laterOn(string $queue, \DateInterval|\DateTimeInterface|int $delay, object|string $job, $data = '')
     * @see \Illuminate\Contracts\Queue\Queue::later
     * @method static mixed later(\DateInterval|\DateTimeInterface|int $delay, object|string $job, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::setApplication
     * @method static void setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Queue\QueueManager::connection
     * @method static \Illuminate\Contracts\Queue\Queue connection(null|string $name = null)
     * @see \Illuminate\Queue\QueueManager::after
     * @method static void after($callback)
     * @see \Illuminate\Queue\QueueManager::looping
     * @method static void looping($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pushRaw
     * @method static mixed pushRaw(string $payload, null|string $queue = null, array $options = [])
     * @see \Illuminate\Queue\QueueManager::getApplication
     * @method static \Illuminate\Contracts\Foundation\Application getApplication()
     * @see \Illuminate\Queue\QueueManager::exceptionOccurred
     * @method static void exceptionOccurred($callback)
     * @see \Illuminate\Contracts\Queue\Queue::getConnectionName
     * @method static string getConnectionName()
     * @see \Illuminate\Contracts\Queue\Queue::push
     * @method static mixed push(object|string $job, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::getName
     * @method static string getName(null|string $connection = null)
     * @see \Illuminate\Queue\QueueManager::connected
     * @method static bool connected(null|string $name = null)
     * @see \Illuminate\Queue\QueueManager::extend
     * @method static void extend(string $driver, \Closure $resolver)
     * @see \Illuminate\Contracts\Queue\Queue::size
     * @method static int size(null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::stopping
     * @method static void stopping($callback)
     * @see \Illuminate\Queue\QueueManager::failing
     * @method static void failing($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pushOn
     * @method static mixed pushOn(string $queue, object|string $job, $data = '')
     * @see \Illuminate\Contracts\Queue\Queue::bulk
     * @method static mixed bulk(array $jobs, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Queue\Queue::getJobBackoff
     * @method static mixed getJobBackoff($job)
     * @see \Illuminate\Queue\Queue::setContainer
     * @method static void setContainer(\Illuminate\Container\Container $container)
     * @see \Illuminate\Queue\Queue::getContainer
     * @method static \Illuminate\Container\Container getContainer()
     * @see \Illuminate\Queue\Queue::createPayloadUsing
     * @method static void createPayloadUsing(callable|null $callback)
     * @see \Illuminate\Queue\Queue::getJobExpiration
     * @method static mixed getJobExpiration($job)
     */
    class Queue {}
    
    /**
     * @see \Illuminate\Cache\RateLimiter::availableIn
     * @method static int availableIn(string $key)
     * @see \Illuminate\Cache\RateLimiter::retriesLeft
     * @method static int retriesLeft(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::clear
     * @method static void clear(string $key)
     * @see \Illuminate\Cache\RateLimiter::for
     * @method static void for(string $name, \Closure $callback)
     * @see \Illuminate\Cache\RateLimiter::tooManyAttempts
     * @method static bool tooManyAttempts(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::hit
     * @method static int hit(string $key, int $decaySeconds = 60)
     * @see \Illuminate\Cache\RateLimiter::resetAttempts
     * @method static mixed resetAttempts(string $key)
     * @see \Illuminate\Cache\RateLimiter::limiter
     * @method static \Closure limiter(string $name)
     * @see \Illuminate\Cache\RateLimiter::attempts
     * @method static mixed attempts(string $key)
     */
    class RateLimiter {}
    
    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\Redirector::setSession
     * @method static void setSession(\Illuminate\Session\Store $session)
     * @see \Illuminate\Routing\Redirector::away
     * @method static \Illuminate\Http\RedirectResponse away(string $path, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::refresh
     * @method static \Illuminate\Http\RedirectResponse refresh(int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::back
     * @method static \Illuminate\Http\RedirectResponse back(int $status = 302, array $headers = [], $fallback = false)
     * @see \Illuminate\Routing\Redirector::secure
     * @method static \Illuminate\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::home
     * @method static \Illuminate\Http\RedirectResponse home(int $status = 302)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\Redirector::route
     * @method static \Illuminate\Http\RedirectResponse route(string $route, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\Redirector::setIntendedUrl
     * @method static void setIntendedUrl(string $url)
     * @see \Illuminate\Routing\Redirector::intended
     * @method static \Illuminate\Http\RedirectResponse intended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::signedRoute
     * @method static \Illuminate\Http\RedirectResponse signedRoute(string $route, $parameters = [], \DateInterval|\DateTimeInterface|int|null $expiration = null, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::temporarySignedRoute
     * @method static \Illuminate\Http\RedirectResponse temporarySignedRoute(string $route, \DateInterval|\DateTimeInterface|int|null $expiration, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::action
     * @method static \Illuminate\Http\RedirectResponse action(array|string $action, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::guest
     * @method static \Illuminate\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::to
     * @method static \Illuminate\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::getUrlGenerator
     * @method static \Illuminate\Routing\UrlGenerator getUrlGenerator()
     */
    class Redirect {}
    
    /**
     * @see \Illuminate\Redis\Connections\Connection::throttle
     * @method static \Illuminate\Redis\Limiters\DurationLimiterBuilder throttle(string $name)
     * @see \Illuminate\Redis\RedisManager::resolve
     * @method static \Illuminate\Redis\Connections\Connection resolve(null|string $name = null)
     * @see \Illuminate\Redis\Connections\Connection::funnel
     * @method static \Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder funnel(string $name)
     * @see \Illuminate\Redis\RedisManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Redis\Connections\Connection::psubscribe
     * @method static void psubscribe(array|string $channels, \Closure $callback)
     * @see \Illuminate\Redis\Connections\Connection::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Redis\RedisManager::setDriver
     * @method static void setDriver(string $driver)
     * @see \Illuminate\Redis\Connections\Connection::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Redis\Connections\Connection::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Redis\Connections\Connection::client
     * @method static mixed client()
     * @see \Illuminate\Redis\RedisManager::connection
     * @method static \Illuminate\Redis\Connections\Connection connection(null|string $name = null)
     * @see \Illuminate\Redis\RedisManager::connections
     * @method static array connections()
     * @see \Illuminate\Redis\Connections\Connection::createSubscription
     * @method static void createSubscription(array|string $channels, \Closure $callback, string $method = 'subscribe')
     * @see \Illuminate\Redis\RedisManager::enableEvents
     * @method static void enableEvents()
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Redis\Connections\Connection::subscribe
     * @method static void subscribe(array|string $channels, \Closure $callback)
     * @see \Illuminate\Redis\RedisManager::disableEvents
     * @method static void disableEvents()
     * @see \Illuminate\Redis\Connections\Connection::command
     * @method static mixed command(string $method, array $parameters = [])
     * @see \Illuminate\Redis\RedisManager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Redis\Connections\Connection::getName
     * @method static null|string getName()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Redis\Connections\Connection::setName
     * @method static void setName(string $name)
     * @see \Illuminate\Redis\Connections\Connection::unsetEventDispatcher
     * @method static void unsetEventDispatcher()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Redis::lastSave
     * @method static int lastSave()
     * @see \Redis::zUnionStore
     * @method static int zUnionStore(string $output, array $zSetKeys, array $weights = null, string $aggregateFunction = 'SUM')
     * @see \Redis::echo
     * @method static string echo(string $message)
     * @see \Redis::del
     * @method static int del(array|int|string $key1, ...$otherKeys)
     * @see \Redis::sInterStore
     * @method static bool|int sInterStore(string $dstKey, string $key1, ...$otherKeys)
     * @see \Redis::xRevRange
     * @method static array xRevRange(string $stream, string $end, string $start, int $count = null)
     * @see \Redis::randomKey
     * @method static string randomKey()
     * @see \Redis::setex
     * @method static bool setex(string $key, int $ttl, mixed|string $value)
     * @see \Redis::unsubscribe
     * @method static void unsubscribe(array $channels = null)
     * @see \Redis::brpoplpush
     * @method static bool|mixed|string brpoplpush(string $srcKey, string $dstKey, int $timeout)
     * @see \Redis::bitCount
     * @method static int bitCount(string $key)
     * @see \Redis::lLen
     * @method static bool|int lLen(string $key)
     * @see \Redis::punsubscribe
     * @method static void punsubscribe(array $patterns = null)
     * @see \Redis::hVals
     * @method static array hVals(string $key)
     * @see \Redis::flushDB
     * @method static bool flushDB()
     * @see \Redis::geoadd
     * @method static int geoadd(string $key, float $longitude, float $latitude, string $member)
     * @see \Redis::expire
     * @method static bool expire(string $key, int $ttl)
     * @see \Redis::getOption
     * @method static mixed|null getOption(int $option)
     * @see \Redis::bitOp
     * @method static int bitOp(string $operation, string $retKey, string $key1, ...$otherKeys)
     * @see \Redis::object
     * @method static bool|int|string object(string $string = '', string $key = '')
     * @see \Redis::sMove
     * @method static bool sMove(string $srcKey, string $dstKey, mixed|string $member)
     * @see \Redis::lSet
     * @method static bool lSet(string $key, int $index, string $value)
     * @see \Redis::zUnion
     * @method static void zUnion(string $Output, array $ZSetKeys, array $Weights = null, string $aggregateFunction = 'SUM')
     * @see \Redis::scan
     * @method static array|bool scan(int $iterator, string $pattern = null, int $count = 0)
     * @see \Redis::lSize
     * @method static int lSize(string $key)
     * @see \Redis::xTrim
     * @method static int xTrim(string $stream, int $maxLen, bool $isApproximate)
     * @see \Redis::blPop
     * @method static array blPop(string|string[] $keys, int $timeout)
     * @see \Redis::rpoplpush
     * @method static bool|mixed|string rpoplpush(string $srcKey, string $dstKey)
     * @see \Redis::lPop
     * @method static bool|mixed lPop(string $key)
     * @see \Redis::persist
     * @method static bool persist(string $key)
     * @see \Redis::close
     * @method static bool close()
     * @see \Redis::connect
     * @method static bool connect(string $host, int $port = 6379, float $timeout = 0.0, null $reserved = null, int $retryInterval = 0, float $readTimeout = 0.0)
     * @see \Redis::bgsave
     * @method static bool bgsave()
     * @see \Redis::georadius
     * @method static mixed georadius($key, $longitude, $latitude, $radius, $unit, array $options = null)
     * @see \Redis::set
     * @method static bool set(string $key, mixed|string $value, array|int $timeout = null)
     * @see \Redis::sRandMember
     * @method static array|bool|mixed|string sRandMember(string $key, int $count = 1)
     * @see \Redis::incr
     * @method static int incr(string $key)
     * @see \Redis::getMode
     * @method static int getMode()
     * @see \Redis::sGetMembers
     * @method static array sGetMembers(string $key)
     * @see \Redis::hExists
     * @method static bool hExists(string $key, string $hashKey)
     * @see \Redis::pExpire
     * @method static bool pExpire(string $key, int $ttl)
     * @see \Redis::georadiusbymember
     * @method static array georadiusbymember(string $key, string $member, $radius, $units, array $options = null)
     * @see \Redis::zCard
     * @method static int zCard(string $key)
     * @see \Redis::getHost
     * @method static bool|string getHost()
     * @see \Redis::sInter
     * @method static array sInter(string $key1, ...$otherKeys)
     * @see \Redis::_serialize
     * @method static mixed _serialize($value)
     * @see \Redis::watch
     * @method static void watch(string|string[] $key)
     * @see \Redis::getAuth
     * @method static bool|null|string getAuth()
     * @see \Redis::zRangeByScore
     * @method static array zRangeByScore(string $key, int $start, int $end, array $options = array())
     * @see \Redis::_unserialize
     * @method static mixed _unserialize(string $value)
     * @see \Redis::sDiff
     * @method static array sDiff(string $key1, ...$otherKeys)
     * @see \Redis::zPopMin
     * @method static array zPopMin(string $key, int $count = 1)
     * @see \Redis::config
     * @method static array config(string $operation, string $key, mixed|string $value)
     * @see \Redis::unwatch
     * @method static void unwatch()
     * @see \Redis::open
     * @method static bool open(string $host, int $port = 6379, float $timeout = 0.0, null $reserved = null, int $retryInterval = 0, float $readTimeout = 0.0)
     * @see \Redis::getBit
     * @method static int getBit(string $key, int $offset)
     * @see \Redis::sCard
     * @method static int sCard(string $key)
     * @see \Redis::zInter
     * @method static void zInter($Output, $ZSetKeys, array $Weights = null, string $aggregateFunction = 'SUM')
     * @see \Redis::resetStat
     * @method static bool resetStat()
     * @see \Redis::bzPopMax
     * @method static array bzPopMax(array|string $key1, array|string $key2, int $timeout)
     * @see \Redis::strlen
     * @method static int strlen(string $key)
     * @see \Redis::renameKey
     * @method static void renameKey(string $srcKey, string $dstKey)
     * @see \Redis::hDel
     * @method static bool|int hDel(string $key, string $hashKey1, ...$otherHashKeys)
     * @see \Redis::geohash
     * @method static array geohash(string $key, ...$member)
     * @see \Redis::hIncrByFloat
     * @method static float hIncrByFloat(string $key, string $field, float $increment)
     * @see \Redis::lRemove
     * @method static void lRemove(string $key, string $value, int $count)
     * @see \Redis::lRem
     * @method static bool|int lRem(string $key, string $value, int $count)
     * @see \Redis::hLen
     * @method static bool|int hLen(string $key)
     * @see \Redis::decr
     * @method static int decr(string $key)
     * @see \Redis::info
     * @method static string info(string $option = null)
     * @see \Redis::xLen
     * @method static int xLen(string $stream)
     * @see \Redis::lTrim
     * @method static array|bool lTrim(string $key, int $start, int $stop)
     * @see \Redis::slaveof
     * @method static bool slaveof(string $host = '127.0.0.1', int $port = 6379)
     * @see \Redis::rPop
     * @method static bool|mixed rPop(string $key)
     * @see \Redis::xDel
     * @method static int xDel(string $key, array $ids)
     * @see \Redis::xClaim
     * @method static array xClaim(string $key, string $group, string $consumer, int $minIdleTime, array $ids, array $options = [])
     * @see \Redis::pfAdd
     * @method static bool pfAdd(string $key, array $elements)
     * @see \Redis::eval
     * @method static mixed eval(string $script, array $args = array(), int $numKeys = 0)
     * @see \Redis::lInsert
     * @method static int lInsert(string $key, int $position, string $pivot, mixed|string $value)
     * @see \Redis::_prefix
     * @method static string _prefix($value)
     * @see \Redis::pfCount
     * @method static int pfCount(array|string $key)
     * @see \Redis::zDelete
     * @method static int zDelete(string $key, mixed|string $member1, ...$otherMembers)
     * @see \Redis::getDbNum
     * @method static bool|int getDbNum()
     * @see \Redis::exec
     * @method static array|void exec()
     * @see \Redis::migrate
     * @method static bool migrate(string $host, int $port, string $key, int $db, int $timeout, bool $copy = false, bool $replace = false)
     * @see \Redis::incrBy
     * @method static int incrBy(string $key, int $value)
     * @see \Redis::xPending
     * @method static array xPending(string $stream, string $group, string $start = null, string $end = null, int $count = null, string $consumer = null)
     * @see \Redis::getSet
     * @method static mixed|string getSet(string $key, mixed|string $value)
     * @see \Redis::sPop
     * @method static array|bool|mixed|string sPop(string $key, int $count = 1)
     * @see \Redis::hSet
     * @method static bool|int hSet(string $key, string $hashKey, string $value)
     * @see \Redis::pExpireAt
     * @method static bool pExpireAt(string $key, int $timestamp)
     * @see \Redis::hMSet
     * @method static bool hMSet(string $key, array $hashKeys)
     * @see \Redis::getLastError
     * @method static null|string getLastError()
     * @see \Redis::zRevRangeByScore
     * @method static array zRevRangeByScore(string $key, int $start, int $end, array $options = array())
     * @see \Redis::rawCommand
     * @method static mixed rawCommand(string $command, $arguments)
     * @see \Redis::sUnion
     * @method static array sUnion(string $key1, ...$otherKeys)
     * @see \Redis::xRead
     * @method static array xRead(array $streams, int|string $count = null, int|string $block = null)
     * @see \Redis::hIncrBy
     * @method static int hIncrBy(string $key, string $hashKey, int $value)
     * @see \Redis::popen
     * @method static bool popen(string $host, int $port = 6379, float $timeout = 0.0, string $persistentId = '', int $retryInterval = 0, float $readTimeout = 0.0)
     * @see \Redis::geopos
     * @method static array geopos(string $key, string $member)
     * @see \Redis::mset
     * @method static bool mset(array $array)
     * @see \Redis::zScore
     * @method static bool|float zScore(string $key, mixed|string $member)
     * @see \Redis::lRange
     * @method static array lRange(string $key, int $start, int $end)
     * @see \Redis::hStrLen
     * @method static int hStrLen(string $key, string $field)
     * @see \Redis::pfMerge
     * @method static bool pfMerge(string $destKey, array $sourceKeys)
     * @see \Redis::publish
     * @method static int publish(string $channel, string $message)
     * @see \Redis::rPush
     * @method static bool|int rPush(string $key, ...$value1)
     * @see \Redis::time
     * @method static array time()
     * @see \Redis::sAddArray
     * @method static bool|int sAddArray(string $key, array $values)
     * @see \Redis::xRange
     * @method static array xRange(string $stream, string $start, string $end, int $count = null)
     * @see \Redis::append
     * @method static int append(string $key, mixed|string $value)
     * @see \Redis::sIsMember
     * @method static bool sIsMember(string $key, mixed|string $value)
     * @see \Redis::sRemove
     * @method static void sRemove(string $key, ...$member1)
     * @see \Redis::discard
     * @method static void discard()
     * @see \Redis::select
     * @method static bool select(int $dbIndex)
     * @see \Redis::zCount
     * @method static int zCount(string $key, string $start, string $end)
     * @see \Redis::sUnionStore
     * @method static int sUnionStore(string $dstKey, string $key1, ...$otherKeys)
     * @see \Redis::getTimeout
     * @method static bool|float getTimeout()
     * @see \Redis::zInterStore
     * @method static int zInterStore(string $output, array $zSetKeys, array $weights = null, string $aggregateFunction = 'SUM')
     * @see \Redis::hScan
     * @method static array hScan(string $key, int $iterator, string $pattern = null, int $count = 0)
     * @see \Redis::setTimeout
     * @method static bool setTimeout(string $key, int $ttl)
     * @see \Redis::type
     * @method static int type(string $key)
     * @see \Redis::multi
     * @method static \Redis multi(int $mode = Redis::MULTI)
     * @see \Redis::xAdd
     * @method static string xAdd(string $key, string $id, array $messages, int $maxLen = 0, bool $isApproximate = false)
     * @see \Redis::incrByFloat
     * @method static float incrByFloat(string $key, float $increment)
     * @see \Redis::flushAll
     * @method static bool flushAll()
     * @see \Redis::zScan
     * @method static array|bool zScan(string $key, int $iterator, string $pattern = null, int $count = 0)
     * @see \Redis::lPushx
     * @method static bool|int lPushx(string $key, mixed|string $value)
     * @see \Redis::bitpos
     * @method static int bitpos(string $key, int $bit, int $start = 0, int $end = null)
     * @see \Redis::evaluateSha
     * @method static void evaluateSha(string $scriptSha, array $args = array(), int $numKeys = 0)
     * @see \Redis::getReadTimeout
     * @method static bool|float getReadTimeout()
     * @see \Redis::setnx
     * @method static bool setnx(string $key, mixed|string $value)
     * @see \Redis::xAck
     * @method static int xAck(string $stream, string $group, array $messages)
     * @see \Redis::evalSha
     * @method static mixed evalSha(string $scriptSha, array $args = array(), int $numKeys = 0)
     * @see \Redis::substr
     * @method static void substr(string $key, int $start, int $end)
     * @see \Redis::script
     * @method static mixed script(string $command, string $script)
     * @see \Redis::geodist
     * @method static float geodist(string $key, string $member1, string $member2, null|string $unit = null)
     * @see \Redis::zDeleteRangeByRank
     * @method static void zDeleteRangeByRank(string $key, int $start, int $end)
     * @see \Redis::evaluate
     * @method static mixed evaluate(string $script, array $args = array(), int $numKeys = 0)
     * @see \Redis::dbSize
     * @method static int dbSize()
     * @see \Redis::getPersistentID
     * @method static bool|null|string getPersistentID()
     * @see \Redis::pconnect
     * @method static bool pconnect(string $host, int $port = 6379, float $timeout = 0.0, string $persistentId = null, int $retryInterval = 0, float $readTimeout = 0.0)
     * @see \Redis::wait
     * @method static int wait(int $numSlaves, int $timeout)
     * @see \Redis::getPort
     * @method static bool|int getPort()
     * @see \Redis::ping
     * @method static string ping()
     * @see \Redis::save
     * @method static bool save()
     * @see \Redis::pttl
     * @method static bool|int pttl(string $key)
     * @see \Redis::zPopMax
     * @method static array zPopMax(string $key, int $count = 1)
     * @see \Redis::zRank
     * @method static bool|int zRank(string $key, mixed|string $member)
     * @see \Redis::expireAt
     * @method static bool expireAt(string $key, int $timestamp)
     * @see \Redis::xReadGroup
     * @method static array xReadGroup(string $group, string $consumer, array $streams, int|null $count = null, int|null $block = null)
     * @see \Redis::get
     * @method static bool|mixed|string get(string $key)
     * @see \Redis::clearLastError
     * @method static bool clearLastError()
     * @see \Redis::lGet
     * @method static bool|mixed lGet(string $key, int $index)
     * @see \Redis::isConnected
     * @method static bool isConnected()
     * @see \Redis::bgrewriteaof
     * @method static bool bgrewriteaof()
     * @see \Redis::decrBy
     * @method static int decrBy(string $key, int $value)
     * @see \Redis::setBit
     * @method static int setBit(string $key, int $offset, bool|int $value)
     * @see \Redis::sRem
     * @method static int sRem(string $key, ...$member1)
     * @see \Redis::getRange
     * @method static string getRange(string $key, int $start, int $end)
     * @see \Redis::rename
     * @method static bool rename(string $srcKey, string $dstKey)
     * @see \Redis::zRevRank
     * @method static bool|int zRevRank(string $key, mixed|string $member)
     * @see \Redis::exists
     * @method static bool|int exists(string|string[] $key)
     * @see \Redis::sContains
     * @method static void sContains(string $key, mixed|string $value)
     * @see \Redis::setRange
     * @method static int setRange(string $key, int $offset, string $value)
     * @see \Redis::sAdd
     * @method static bool|int sAdd(string $key, ...$value1)
     * @see \Redis::zRevRange
     * @method static array zRevRange(string $key, int $start, int $end, bool $withscore = null)
     * @see \Redis::zRevRangeByLex
     * @method static array zRevRangeByLex(string $key, int $min, int $max, int $offset = null, int $limit = null)
     * @see \Redis::sDiffStore
     * @method static bool|int sDiffStore(string $dstKey, string $key1, ...$otherKeys)
     * @see \Redis::listTrim
     * @method static void listTrim(string $key, int $start, int $stop)
     * @see \Redis::zIncrBy
     * @method static float zIncrBy(string $key, float $value, string $member)
     * @see \Redis::rPushx
     * @method static bool|int rPushx(string $key, mixed|string $value)
     * @see \Redis::auth
     * @method static bool auth(string $password)
     * @see \Redis::psetex
     * @method static bool psetex(string $key, int $ttl, mixed|string $value)
     * @see \Redis::zSize
     * @method static int zSize(string $key)
     * @see \Redis::brPop
     * @method static array brPop(array $keys, int $timeout)
     * @see \Redis::pubsub
     * @method static array|int pubsub(string $keyword, array|string $argument)
     * @see \Redis::getMultiple
     * @method static array getMultiple(array $keys)
     * @see \Redis::lIndex
     * @method static bool|mixed lIndex(string $key, int $index)
     * @see \Redis::zRange
     * @method static array zRange(string $key, int $start, int $end, bool $withscores = null)
     * @see \Redis::lPush
     * @method static bool|int lPush(string $key, ...$value1)
     * @see \Redis::lGetRange
     * @method static array lGetRange(string $key, int $start, int $end)
     * @see \Redis::xGroup
     * @method static mixed xGroup(string $operation, string $key, string $group, string $msgId = '', bool $mkStream = false)
     * @see \Redis::slowLog
     * @method static mixed slowLog(string $operation, int $length = null)
     * @see \Redis::swapdb
     * @method static bool swapdb(int $db1, int $db2)
     * @see \Redis::sort
     * @method static array sort(string $key, array $option = null)
     * @see \Redis::zDeleteRangeByScore
     * @method static void zDeleteRangeByScore(string $key, float $start, float $end)
     * @see \Redis::hKeys
     * @method static array hKeys(string $key)
     * @see \Redis::hSetNx
     * @method static bool hSetNx(string $key, string $hashKey, string $value)
     * @see \Redis::zRangeByLex
     * @method static array|bool zRangeByLex(string $key, int $min, int $max, int $offset = null, int $limit = null)
     * @see \Redis::keys
     * @method static array keys(string $pattern)
     * @see \Redis::zRemRangeByScore
     * @method static int zRemRangeByScore(string $key, float|string $start, float|string $end)
     * @see \Redis::delete
     * @method static int delete(string|string[] $key1, string $key2 = null, string $key3 = null)
     * @see \Redis::renameNx
     * @method static bool renameNx(string $srcKey, string $dstKey)
     * @see \Redis::zRem
     * @method static int zRem(string $key, mixed|string $member1, ...$otherMembers)
     * @see \Redis::getKeys
     * @method static void getKeys(string $pattern)
     * @see \Redis::msetnx
     * @method static int msetnx(array $array)
     * @see \Redis::dump
     * @method static bool|string dump(string $key)
     * @see \Redis::hMGet
     * @method static array hMGet(string $key, array $hashKeys)
     * @see \Redis::hGet
     * @method static string hGet(string $key, string $hashKey)
     * @see \Redis::zAdd
     * @method static int zAdd(string $key, array $options, float $score1, mixed|string $value1, float $score2 = null, mixed|string $value2 = null, float $scoreN = null, mixed|string $valueN = null)
     * @see \Redis::move
     * @method static bool move(string $key, int $dbIndex)
     * @see \Redis::hGetAll
     * @method static array hGetAll(string $key)
     * @see \Redis::bzPopMin
     * @method static array bzPopMin(array|string $key1, array|string $key2, int $timeout)
     * @see \Redis::restore
     * @method static bool restore(string $key, int $ttl, string $value)
     * @see \Redis::zRemRangeByRank
     * @method static int zRemRangeByRank(string $key, int $start, int $end)
     * @see \Redis::setOption
     * @method static bool setOption(int $option, $value)
     * @see \Redis::xInfo
     * @method static mixed xInfo(string $operation, string $stream, string $group)
     * @see \Redis::ttl
     * @method static bool|int ttl(string $key)
     * @see \Redis::sMembers
     * @method static array sMembers(string $key)
     * @see \Redis::unlink
     * @method static int unlink(string|string[] $key1, string $key2 = null, string $key3 = null)
     * @see \Redis::sScan
     * @method static array|bool sScan(string $key, int $iterator, string $pattern = null, int $count = 0)
     * @see \Redis::mget
     * @method static array mget(array $array)
     */
    class Redis {}
    
    /**
     * @see \Illuminate\Http\Request::createFrom
     * @method static void createFrom(\Illuminate\Http\Request $from, \Illuminate\Http\Request|null $to = null)
     * @see \Symfony\Component\HttpFoundation\Request::hasPreviousSession
     * @method static bool hasPreviousSession()
     * @see \Symfony\Component\HttpFoundation\Request::isMethod
     * @method static bool isMethod(string $method)
     * @see \Illuminate\Http\Request::fullUrl
     * @method static string fullUrl()
     * @see \Illuminate\Http\Request::getUserResolver
     * @method static \Closure getUserResolver()
     * @see \Symfony\Component\HttpFoundation\Request::setSessionFactory
     * @method static void setSessionFactory(callable $factory)
     * @see \Symfony\Component\HttpFoundation\Request::getEncodings
     * @method static array getEncodings()
     * @see \Illuminate\Http\Request::ajax
     * @method static bool ajax()
     * @see \Symfony\Component\HttpFoundation\Request::overrideGlobals
     * @method static void overrideGlobals()
     * @see \Illuminate\Http\Request::setJson
     * @method static void setJson(\Symfony\Component\HttpFoundation\ParameterBag $json)
     * @see \Illuminate\Http\Request::path
     * @method static string path()
     * @see \Symfony\Component\HttpFoundation\Request::setTrustedHosts
     * @method static void setTrustedHosts(array $hostPatterns)
     * @see \Symfony\Component\HttpFoundation\Request::isMethodIdempotent
     * @method static bool isMethodIdempotent()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasAny
     * @method static bool hasAny(array|string $keys)
     * @see \Illuminate\Http\Request::merge
     * @method static void merge(array $input)
     * @see \Symfony\Component\HttpFoundation\Request::isMethodSafe
     * @method static bool isMethodSafe()
     * @see \Illuminate\Http\Request::fingerprint
     * @method static string fingerprint()
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsHtml
     * @method static bool acceptsHtml()
     * @see \Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost
     * @method static string getSchemeAndHttpHost()
     * @see \Symfony\Component\HttpFoundation\Request::getQueryString
     * @method static null|string getQueryString()
     * @see \Symfony\Component\HttpFoundation\Request::isXmlHttpRequest
     * @method static bool isXmlHttpRequest()
     * @see \Illuminate\Http\Request::method
     * @method static string method()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::cookie
     * @method static array|null|string cookie(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::old
     * @method static array|null|string old(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::ip
     * @method static null|string ip()
     * @see \Symfony\Component\HttpFoundation\Request::getContent
     * @method static resource|string getContent(bool $asResource = false)
     * @see \Symfony\Component\HttpFoundation\Request::getBaseUrl
     * @method static string getBaseUrl()
     * @see \Illuminate\Http\Request::is
     * @method static bool is(...$patterns)
     * @see \Symfony\Component\HttpFoundation\Request::getUriForPath
     * @method static string getUriForPath(string $path)
     * @see \Illuminate\Http\Request::ips
     * @method static array ips()
     * @see \Illuminate\Http\Request::getRouteResolver
     * @method static \Closure getRouteResolver()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::input
     * @method static mixed input(null|string $key = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride
     * @method static void enableHttpMethodParameterOverride()
     * @see \Illuminate\Http\Request::route
     * @method static \Illuminate\Routing\Route|null|object|string route(null|string $param = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getPathInfo
     * @method static string getPathInfo()
     * @see \Illuminate\Http\Request::offsetUnset
     * @method static void offsetUnset(string $offset)
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flashOnly
     * @method static void flashOnly(array|mixed $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::except
     * @method static array except(array|mixed $keys)
     * @see \Symfony\Component\HttpFoundation\Request::getProtocolVersion
     * @method static null|string getProtocolVersion()
     * @see \Symfony\Component\HttpFoundation\Request::getPreferredFormat
     * @method static null|string getPreferredFormat(null|string $default = 'html')
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedHeaderSet
     * @method static int getTrustedHeaderSet()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::isNotFilled
     * @method static bool isNotFilled(array|string $key)
     * @see \Symfony\Component\HttpFoundation\Request::isMethodCacheable
     * @method static bool isMethodCacheable()
     * @see \Illuminate\Http\Request::decodedPath
     * @method static string decodedPath()
     * @see \Symfony\Component\HttpFoundation\Request::getRequestFormat
     * @method static null|string getRequestFormat(null|string $default = 'html')
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flash
     * @method static void flash()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::server
     * @method static array|null|string server(null|string $key = null, array|null|string $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Http\Request::setUserResolver
     * @method static void setUserResolver(\Closure $callback)
     * @see \Symfony\Component\HttpFoundation\Request::setDefaultLocale
     * @method static void setDefaultLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::getPort
     * @method static int|string getPort()
     * @see \Illuminate\Http\Request::setRouteResolver
     * @method static void setRouteResolver(\Closure $callback)
     * @see \Symfony\Component\HttpFoundation\Request::setRequestFormat
     * @method static void setRequestFormat(null|string $format)
     * @see \Illuminate\Http\Request::userAgent
     * @method static null|string userAgent()
     * @see \Symfony\Component\HttpFoundation\Request::setTrustedProxies
     * @method static void setTrustedProxies(array $proxies, int $trustedHeaderSet)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::wantsJson
     * @method static bool wantsJson()
     * @see \Symfony\Component\HttpFoundation\Request::getHttpMethodParameterOverride
     * @method static bool getHttpMethodParameterOverride()
     * @see \Symfony\Component\HttpFoundation\Request::getETags
     * @method static array getETags()
     * @see \Illuminate\Http\Request::segments
     * @method static array segments()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::file
     * @method static array|\Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|null file(null|string $key = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getContentType
     * @method static null|string getContentType()
     * @see \Illuminate\Http\Request::get
     * @method static mixed get(string $key, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::preferSafeContent
     * @method static bool preferSafeContent()
     * @see \Symfony\Component\HttpFoundation\Request::getMimeTypes
     * @method static array getMimeTypes(string $format)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::matchesType
     * @method static bool matchesType(string $actual, string $type)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsJson
     * @method static bool acceptsJson()
     * @see \Illuminate\Http\Request::validate
     * @method static array validate(array $rules, ...$params)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenHas
     * @method static mixed whenHas(string $key, callable $callback, callable $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::prefers
     * @method static null|string prefers(array|string $contentTypes)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedProxies
     * @method static array getTrustedProxies()
     * @see \Symfony\Component\HttpFoundation\Request::getDefaultLocale
     * @method static string getDefaultLocale()
     * @see \Symfony\Component\HttpFoundation\Request::getCharsets
     * @method static array getCharsets()
     * @see \Illuminate\Http\Request::getSession
     * @method static \Illuminate\Session\Store|null getSession()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasHeader
     * @method static bool hasHeader(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::getUserInfo
     * @method static string getUserInfo()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::filled
     * @method static bool filled(array|string $key)
     * @see \Illuminate\Http\Request::url
     * @method static string url()
     * @see \Symfony\Component\HttpFoundation\Request::setMethod
     * @method static void setMethod(string $method)
     * @see \Symfony\Component\HttpFoundation\Request::getHost
     * @method static string getHost()
     * @see \Illuminate\Http\Request::hasValidSignature
     * @method static bool hasValidSignature(bool $absolute = true)
     * @see \Symfony\Component\HttpFoundation\Request::getLocale
     * @method static string getLocale()
     * @see \Symfony\Component\HttpFoundation\Request::getPassword
     * @method static null|string getPassword()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::exists
     * @method static bool exists(array|string $key)
     * @see \Symfony\Component\HttpFoundation\Request::initialize
     * @method static void initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], null|resource|string $content = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::dd
     * @method static void dd(...$keys)
     * @see \Illuminate\Http\Request::instance
     * @method static void instance()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasFile
     * @method static bool hasFile(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::getRelativeUriForPath
     * @method static string getRelativeUriForPath(string $path)
     * @see \Illuminate\Http\Request::pjax
     * @method static bool pjax()
     * @see \Symfony\Component\HttpFoundation\Request::createFromGlobals
     * @method static void createFromGlobals()
     * @see \Symfony\Component\HttpFoundation\Request::hasSession
     * @method static bool hasSession()
     * @see \Illuminate\Http\Request::replace
     * @method static void replace(array $input)
     * @see \Illuminate\Http\Request::secure
     * @method static bool secure()
     * @see \Illuminate\Http\Request::createFromBase
     * @method static void createFromBase(\Symfony\Component\HttpFoundation\Request $request)
     * @see \Symfony\Component\HttpFoundation\Request::getRealMethod
     * @method static string getRealMethod()
     * @see \Symfony\Component\HttpFoundation\Request::getPreferredLanguage
     * @method static null|string getPreferredLanguage(array $locales = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::post
     * @method static array|null|string post(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::bearerToken
     * @method static null|string bearerToken()
     * @see \Symfony\Component\HttpFoundation\Request::getClientIps
     * @method static array getClientIps()
     * @see \Illuminate\Http\Request::segment
     * @method static null|string segment(int $index, null|string $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::only
     * @method static array only(array|mixed $keys)
     * @see \Symfony\Component\HttpFoundation\Request::setFactory
     * @method static void setFactory(callable|null $callable)
     * @see \Symfony\Component\HttpFoundation\Request::create
     * @method static void create(string $uri, string $method = 'GET', array $parameters = [], array $cookies = [], array $files = [], array $server = [], null|resource|string $content = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::has
     * @method static bool has(array|string $key)
     * @see \Symfony\Component\HttpFoundation\Request::getHttpHost
     * @method static string getHttpHost()
     * @see \Symfony\Component\HttpFoundation\Request::setFormat
     * @method static void setFormat(null|string $format, array|string $mimeTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::all
     * @method static array all(array|mixed|null $keys = null)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::isJson
     * @method static bool isJson()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenFilled
     * @method static mixed whenFilled(string $key, callable $callback, callable $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::setSession
     * @method static void setSession(\Symfony\Component\HttpFoundation\Session\SessionInterface $session)
     * @see \Illuminate\Http\Request::routeIs
     * @method static bool routeIs(...$patterns)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::accepts
     * @method static bool accepts(array|string $contentTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::query
     * @method static array|null|string query(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::format
     * @method static string format(string $default = 'html')
     * @see \Illuminate\Http\Request::capture
     * @method static void capture()
     * @see \Illuminate\Http\Request::duplicate
     * @method static void duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)
     * @see \Symfony\Component\HttpFoundation\Request::getClientIp
     * @method static null|string getClientIp()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Http\Request::validateWithBag
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasCookie
     * @method static bool hasCookie(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::getUser
     * @method static null|string getUser()
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedHosts
     * @method static array getTrustedHosts()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::header
     * @method static array|null|string header(null|string $key = null, array|null|string $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getBasePath
     * @method static string getBasePath()
     * @see \Illuminate\Http\Request::offsetGet
     * @method static mixed offsetGet(string $offset)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::anyFilled
     * @method static bool anyFilled(array|string $keys)
     * @see \Illuminate\Http\Request::session
     * @method static \Illuminate\Session\Store session()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::keys
     * @method static array keys()
     * @see \Illuminate\Http\Request::prefetch
     * @method static bool prefetch()
     * @see \Symfony\Component\HttpFoundation\Request::isNoCache
     * @method static bool isNoCache()
     * @see \Illuminate\Http\Request::offsetSet
     * @method static void offsetSet(string $offset, $value)
     * @see \Symfony\Component\HttpFoundation\Request::getMethod
     * @method static string getMethod()
     * @see \Symfony\Component\HttpFoundation\Request::getMimeType
     * @method static null|string getMimeType(string $format)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::expectsJson
     * @method static bool expectsJson()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flashExcept
     * @method static void flashExcept(array|mixed $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsAnyContentType
     * @method static bool acceptsAnyContentType()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flush
     * @method static void flush()
     * @see \Symfony\Component\HttpFoundation\Request::normalizeQueryString
     * @method static string normalizeQueryString(null|string $qs)
     * @see \Illuminate\Http\Request::root
     * @method static string root()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::missing
     * @method static bool missing(array|string $key)
     * @see \Symfony\Component\HttpFoundation\Request::isFromTrustedProxy
     * @method static bool isFromTrustedProxy()
     * @see \Illuminate\Http\Request::json
     * @method static mixed|\Symfony\Component\HttpFoundation\ParameterBag json(null|string $key = null, $default = null)
     * @see \Illuminate\Http\Request::offsetExists
     * @method static bool offsetExists(string $offset)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::dump
     * @method static void dump(array $keys = [])
     * @see \Symfony\Component\HttpFoundation\Request::getUri
     * @method static string getUri()
     * @see \Symfony\Component\HttpFoundation\Request::getFormat
     * @method static null|string getFormat(null|string $mimeType)
     * @see \Symfony\Component\HttpFoundation\Request::getScriptName
     * @method static string getScriptName()
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Symfony\Component\HttpFoundation\Request::isSecure
     * @method static bool isSecure()
     * @see \Illuminate\Http\Request::fullUrlWithQuery
     * @method static string fullUrlWithQuery(array $query)
     * @see \Symfony\Component\HttpFoundation\Request::getScheme
     * @method static string getScheme()
     * @see \Illuminate\Http\Request::fullUrlIs
     * @method static bool fullUrlIs(...$patterns)
     * @see \Symfony\Component\HttpFoundation\Request::getAcceptableContentTypes
     * @method static array getAcceptableContentTypes()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::boolean
     * @method static bool boolean(null|string $key = null, bool $default = false)
     * @see \Illuminate\Http\Request::setLaravelSession
     * @method static void setLaravelSession(\Illuminate\Contracts\Session\Session $session)
     * @see \Symfony\Component\HttpFoundation\Request::getRequestUri
     * @method static string getRequestUri()
     * @see \Illuminate\Http\Request::toArray
     * @method static array toArray()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::allFiles
     * @method static array allFiles()
     * @see \Illuminate\Http\Request::user
     * @method static mixed user(null|string $guard = null)
     * @see \Symfony\Component\HttpFoundation\Request::getLanguages
     * @method static array getLanguages()
     */
    class Request {}
    
    /**
     * @see \Illuminate\Contracts\Routing\ResponseFactory::streamDownload
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse streamDownload(\Closure $callback, null|string $name = null, array $headers = [], null|string $disposition = 'attachment')
     * @see \Illuminate\Contracts\Routing\ResponseFactory::jsonp
     * @method static \Illuminate\Http\JsonResponse jsonp(string $callback, $data = [], int $status = 200, array $headers = [], int $options = 0)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectTo
     * @method static \Illuminate\Http\RedirectResponse redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectToIntended
     * @method static \Illuminate\Http\RedirectResponse redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectGuest
     * @method static \Illuminate\Http\RedirectResponse redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::download
     * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse download(\SplFileInfo|string $file, null|string $name = null, array $headers = [], null|string $disposition = 'attachment')
     * @see \Illuminate\Contracts\Routing\ResponseFactory::view
     * @method static \Illuminate\Http\Response view(array|string $view, array $data = [], int $status = 200, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::file
     * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse file(\SplFileInfo|string $file, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::stream
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse stream(\Closure $callback, int $status = 200, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::json
     * @method static \Illuminate\Http\JsonResponse json($data = [], int $status = 200, array $headers = [], int $options = 0)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::noContent
     * @method static \Illuminate\Http\Response noContent(int $status = 204, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectToRoute
     * @method static \Illuminate\Http\RedirectResponse redirectToRoute(string $route, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::make
     * @method static \Illuminate\Http\Response make(string $content = '', int $status = 200, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectToAction
     * @method static \Illuminate\Http\RedirectResponse redirectToAction(string $action, $parameters = [], int $status = 302, array $headers = [])
     */
    class Response {}
    
    /**
     * @see \Illuminate\Routing\Router::apiResources
     * @method static void apiResources(array $resources, array $options = [])
     * @see \Illuminate\Routing\Router::currentRouteName
     * @method static null|string currentRouteName()
     * @see \Illuminate\Routing\Router::dispatch
     * @method static \Symfony\Component\HttpFoundation\Response dispatch(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\Router::getLastGroupPrefix
     * @method static string getLastGroupPrefix()
     * @see \Illuminate\Routing\Router::newRoute
     * @method static \Illuminate\Routing\Route newRoute(array|string $methods, string $uri, $action)
     * @see \Illuminate\Routing\Router::substituteBindings
     * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::put
     * @method static \Illuminate\Routing\Route put(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::permanentRedirect
     * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
     * @see \Illuminate\Routing\Router::setContainer
     * @method static void setContainer(\Illuminate\Container\Container $container)
     * @see \Illuminate\Routing\Router::patch
     * @method static \Illuminate\Routing\Route patch(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::view
     * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [], array|int $status = 200, array $headers = [])
     * @see \Illuminate\Routing\Router::bind
     * @method static void bind(string $key, callable|string $binder)
     * @see \Illuminate\Routing\Router::post
     * @method static \Illuminate\Routing\Route post(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::toResponse
     * @method static \Symfony\Component\HttpFoundation\Response toResponse(\Symfony\Component\HttpFoundation\Request $request, $response)
     * @see \Illuminate\Routing\Router::options
     * @method static \Illuminate\Routing\Route options(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::model
     * @method static void model(string $key, string $class, \Closure $callback = null)
     * @see \Illuminate\Routing\Router::has
     * @method static bool has(string $name)
     * @see \Illuminate\Routing\Router::group
     * @method static void group(array $attributes, \Closure|string $routes)
     * @see \Illuminate\Routing\Router::currentRouteAction
     * @method static null|string currentRouteAction()
     * @see \Illuminate\Routing\Router::getBindingCallback
     * @method static \Closure|null getBindingCallback(string $key)
     * @see \Illuminate\Routing\Router::resource
     * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
     * @see \Illuminate\Routing\Router::pushMiddlewareToGroup
     * @method static void pushMiddlewareToGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::hasMiddlewareGroup
     * @method static bool hasMiddlewareGroup(string $name)
     * @see \Illuminate\Routing\Router::patterns
     * @method static void patterns(array $patterns)
     * @see \Illuminate\Routing\Router::addRoute
     * @method static \Illuminate\Routing\Route addRoute(array|string $methods, string $uri, array|callable|null|string $action)
     * @see \Illuminate\Routing\Router::prependMiddlewareToGroup
     * @method static void prependMiddlewareToGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::respondWithRoute
     * @method static \Symfony\Component\HttpFoundation\Response respondWithRoute(string $name)
     * @see \Illuminate\Routing\Router::aliasMiddleware
     * @method static void aliasMiddleware(string $name, string $class)
     * @see \Illuminate\Routing\Router::is
     * @method static bool is(...$patterns)
     * @see \Illuminate\Routing\Router::getMiddlewareGroups
     * @method static array getMiddlewareGroups()
     * @see \Illuminate\Routing\Router::getRoutes
     * @method static \Illuminate\Routing\RouteCollectionInterface getRoutes()
     * @see \Illuminate\Routing\Router::dispatchToRoute
     * @method static \Symfony\Component\HttpFoundation\Response dispatchToRoute(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\Router::apiResource
     * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\Router::input
     * @method static mixed input(string $key, null|string $default = null)
     * @see \Illuminate\Routing\RouteRegistrar::as
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @see \Illuminate\Routing\RouteRegistrar::domain
     * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
     * @see \Illuminate\Routing\RouteRegistrar::name
     * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
     * @see \Illuminate\Routing\Router::matched
     * @method static void matched(callable|string $callback)
     * @see \Illuminate\Routing\Router::fallback
     * @method static \Illuminate\Routing\Route fallback(array|callable|null|string $action)
     * @see \Illuminate\Routing\Router::currentRouteUses
     * @method static bool currentRouteUses(string $action)
     * @see \Illuminate\Routing\Router::getGroupStack
     * @method static array getGroupStack()
     * @see \Illuminate\Routing\Router::resourceVerbs
     * @method static array|null resourceVerbs(array $verbs = [])
     * @see \Illuminate\Routing\Router::pattern
     * @method static void pattern(string $key, string $pattern)
     * @see \Illuminate\Routing\Router::singularResourceParameters
     * @method static void singularResourceParameters(bool $singular = true)
     * @see \Illuminate\Routing\Router::substituteImplicitBindings
     * @method static void substituteImplicitBindings(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::delete
     * @method static \Illuminate\Routing\Route delete(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::flushMiddlewareGroups
     * @method static void flushMiddlewareGroups()
     * @see \Illuminate\Routing\Router::setCompiledRoutes
     * @method static void setCompiledRoutes(array $routes)
     * @see \Illuminate\Routing\Router::current
     * @method static \Illuminate\Routing\Route|null current()
     * @see \Illuminate\Routing\Router::hasGroupStack
     * @method static bool hasGroupStack()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\Router::getMiddleware
     * @method static array getMiddleware()
     * @see \Illuminate\Routing\Router::gatherRouteMiddleware
     * @method static array gatherRouteMiddleware(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::get
     * @method static \Illuminate\Routing\Route get(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::resourceParameters
     * @method static void resourceParameters(array $parameters = [])
     * @see \Illuminate\Routing\RouteRegistrar::where
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @see \Illuminate\Routing\Router::uniqueMiddleware
     * @method static array uniqueMiddleware(array $middleware)
     * @see \Illuminate\Routing\RouteRegistrar::attribute
     * @method static void attribute(string $key, $value)
     * @see \Illuminate\Routing\RouteRegistrar::middleware
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|null|string $middleware)
     * @see \Illuminate\Routing\Router::mergeWithLastGroup
     * @method static array mergeWithLastGroup(array $new, bool $prependExistingPrefix = true)
     * @see \Illuminate\Routing\Router::redirect
     * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\Router::middlewareGroup
     * @method static void middlewareGroup(string $name, array $middleware)
     * @see \Illuminate\Routing\Router::currentRouteNamed
     * @method static bool currentRouteNamed(...$patterns)
     * @see \Illuminate\Routing\Router::match
     * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::resources
     * @method static void resources(array $resources, array $options = [])
     * @see \Illuminate\Routing\Router::any
     * @method static \Illuminate\Routing\Route any(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::setRoutes
     * @method static void setRoutes(\Illuminate\Routing\RouteCollection $routes)
     * @see \Illuminate\Routing\Router::getCurrentRequest
     * @method static \Illuminate\Http\Request getCurrentRequest()
     * @see \Illuminate\Routing\Router::prepareResponse
     * @method static \Symfony\Component\HttpFoundation\Response prepareResponse(\Symfony\Component\HttpFoundation\Request $request, $response)
     * @see \Illuminate\Routing\Router::getCurrentRoute
     * @method static \Illuminate\Routing\Route|null getCurrentRoute()
     * @see \Illuminate\Routing\RouteRegistrar::namespace
     * @method static \Illuminate\Routing\RouteRegistrar namespace(null|string $value)
     * @see \Illuminate\Routing\Router::uses
     * @method static bool uses(...$patterns)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Routing\Router::getPatterns
     * @method static array getPatterns()
     */
    class Route {}
    
    /**
     * @see \Illuminate\Database\Schema\Builder::disableForeignKeyConstraints
     * @method static bool disableForeignKeyConstraints()
     * @see \Illuminate\Database\Schema\Builder::drop
     * @method static void drop(string $table)
     * @see \Illuminate\Database\Schema\Builder::hasColumns
     * @method static bool hasColumns(string $table, array $columns)
     * @see \Illuminate\Database\Schema\Builder::getConnection
     * @method static \Illuminate\Database\Connection getConnection()
     * @see \Illuminate\Database\Schema\Builder::morphUsingUuids
     * @method static void morphUsingUuids()
     * @see \Illuminate\Database\Schema\Builder::enableForeignKeyConstraints
     * @method static bool enableForeignKeyConstraints()
     * @see \Illuminate\Database\Schema\Builder::blueprintResolver
     * @method static void blueprintResolver(\Closure $resolver)
     * @see \Illuminate\Database\Schema\Builder::defaultStringLength
     * @method static void defaultStringLength(int $length)
     * @see \Illuminate\Database\Schema\Builder::setConnection
     * @method static void setConnection(\Illuminate\Database\Connection $connection)
     * @see \Illuminate\Database\Schema\Builder::getColumnType
     * @method static string getColumnType(string $table, string $column)
     * @see \Illuminate\Database\Schema\Builder::create
     * @method static void create(string $table, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::dropColumns
     * @method static void dropColumns(string $table, array|string $columns)
     * @see \Illuminate\Database\Schema\Builder::table
     * @method static void table(string $table, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::getColumnListing
     * @method static array getColumnListing(string $table)
     * @see \Illuminate\Database\Schema\Builder::dropIfExists
     * @method static void dropIfExists(string $table)
     * @see \Illuminate\Database\Schema\Builder::dropDatabaseIfExists
     * @method static bool dropDatabaseIfExists(string $name)
     * @see \Illuminate\Database\Schema\Builder::dropAllTables
     * @method static void dropAllTables()
     * @see \Illuminate\Database\Schema\Builder::dropAllViews
     * @method static void dropAllViews()
     * @see \Illuminate\Database\Schema\Builder::getAllTables
     * @method static void getAllTables()
     * @see \Illuminate\Database\Schema\Builder::hasTable
     * @method static bool hasTable(string $table)
     * @see \Illuminate\Database\Schema\Builder::rename
     * @method static void rename(string $from, string $to)
     * @see \Illuminate\Database\Schema\Builder::defaultMorphKeyType
     * @method static void defaultMorphKeyType(string $type)
     * @see \Illuminate\Database\Schema\Builder::dropAllTypes
     * @method static void dropAllTypes()
     * @see \Illuminate\Database\Schema\Builder::hasColumn
     * @method static bool hasColumn(string $table, string $column)
     * @see \Illuminate\Database\Schema\Builder::registerCustomDoctrineType
     * @method static void registerCustomDoctrineType(string $class, string $name, string $type)
     * @see \Illuminate\Database\Schema\Builder::createDatabase
     * @method static bool createDatabase(string $name)
     */
    class Schema {}
    
    /**
     * @see \Illuminate\Session\SessionManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Session\SessionManager::getSessionConfig
     * @method static array getSessionConfig()
     * @see \Illuminate\Support\Manager::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static void forgetDrivers()
     * @see \Illuminate\Session\SessionManager::blockDriver
     * @method static null|string blockDriver()
     * @see \Illuminate\Support\Manager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Session\SessionManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Session\SessionManager::shouldBlock
     * @method static bool shouldBlock()
     * @see \Illuminate\Session\Store::regenerateToken
     * @method static void regenerateToken()
     * @see \Illuminate\Session\Store::handlerNeedsRequest
     * @method static bool handlerNeedsRequest()
     * @see \Illuminate\Session\Store::replace
     * @method static void replace(array $attributes)
     * @see \Illuminate\Session\Store::flashInput
     * @method static void flashInput(array $value)
     * @see \Illuminate\Session\Store::ageFlashData
     * @method static void ageFlashData()
     * @see \Illuminate\Session\Store::put
     * @method static void put(array|string $key, $value = null)
     * @see \Illuminate\Session\Store::setRequestOnHandler
     * @method static void setRequestOnHandler(\Illuminate\Http\Request $request)
     * @see \Illuminate\Session\Store::previousUrl
     * @method static null|string previousUrl()
     * @see \Illuminate\Session\Store::only
     * @method static array only(array $keys)
     * @see \Illuminate\Session\Store::has
     * @method static bool has(array|string $key)
     * @see \Illuminate\Session\Store::all
     * @method static array all()
     * @see \Illuminate\Session\Store::setPreviousUrl
     * @method static void setPreviousUrl(string $url)
     * @see \Illuminate\Session\Store::getId
     * @method static string getId()
     * @see \Illuminate\Session\Store::isValidId
     * @method static bool isValidId(string $id)
     * @see \Illuminate\Session\Store::push
     * @method static void push(string $key, $value)
     * @see \Illuminate\Session\Store::setName
     * @method static void setName(string $name)
     * @see \Illuminate\Session\Store::reflash
     * @method static void reflash()
     * @see \Illuminate\Session\Store::forget
     * @method static void forget(array|string $keys)
     * @see \Illuminate\Session\Store::setExists
     * @method static void setExists(bool $value)
     * @see \Illuminate\Session\Store::isStarted
     * @method static bool isStarted()
     * @see \Illuminate\Session\Store::regenerate
     * @method static bool regenerate(bool $destroy = false)
     * @see \Illuminate\Session\Store::keep
     * @method static void keep(array|mixed $keys = null)
     * @see \Illuminate\Session\Store::getOldInput
     * @method static mixed getOldInput(null|string $key = null, $default = null)
     * @see \Illuminate\Session\Store::flash
     * @method static void flash(string $key, $value = true)
     * @see \Illuminate\Session\Store::migrate
     * @method static bool migrate(bool $destroy = false)
     * @see \Illuminate\Session\Store::hasOldInput
     * @method static bool hasOldInput(null|string $key = null)
     * @see \Illuminate\Session\Store::save
     * @method static void save()
     * @see \Illuminate\Session\Store::increment
     * @method static mixed increment(string $key, int $amount = 1)
     * @see \Illuminate\Session\Store::remove
     * @method static mixed remove(string $key)
     * @see \Illuminate\Session\Store::remember
     * @method static mixed remember(string $key, \Closure $callback)
     * @see \Illuminate\Session\Store::flush
     * @method static void flush()
     * @see \Illuminate\Session\Store::now
     * @method static void now(string $key, $value)
     * @see \Illuminate\Session\Store::get
     * @method static mixed get(string $key, $default = null)
     * @see \Illuminate\Session\Store::missing
     * @method static bool missing(array|string $key)
     * @see \Illuminate\Session\Store::start
     * @method static bool start()
     * @see \Illuminate\Session\Store::invalidate
     * @method static bool invalidate()
     * @see \Illuminate\Session\Store::getHandler
     * @method static \SessionHandlerInterface getHandler()
     * @see \Illuminate\Session\Store::token
     * @method static string token()
     * @see \Illuminate\Session\Store::getName
     * @method static string getName()
     * @see \Illuminate\Session\Store::pull
     * @method static mixed pull(string $key, $default = null)
     * @see \Illuminate\Session\Store::passwordConfirmed
     * @method static void passwordConfirmed()
     * @see \Illuminate\Session\Store::decrement
     * @method static int decrement(string $key, int $amount = 1)
     * @see \Illuminate\Session\Store::exists
     * @method static bool exists(array|string $key)
     * @see \Illuminate\Session\Store::setId
     * @method static void setId(string $id)
     */
    class Session {}
    
    /**
     * @see \Illuminate\Filesystem\FilesystemManager::createS3Driver
     * @method static \Illuminate\Contracts\Filesystem\Cloud createS3Driver(array $config)
     * @see \Illuminate\Filesystem\FilesystemManager::forgetDisk
     * @method static void forgetDisk(array|string $disk)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::prepend
     * @method static bool prepend(string $path, string $data)
     * @see \Illuminate\Filesystem\FilesystemManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::delete
     * @method static bool delete(array|string $paths)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::getVisibility
     * @method static string getVisibility(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::put
     * @method static bool put(string $path, resource|string $contents, $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::cloud
     * @method static \Illuminate\Contracts\Filesystem\Filesystem cloud()
     * @see \Illuminate\Filesystem\FilesystemManager::createFtpDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem createFtpDriver(array $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::writeStream
     * @method static bool writeStream(string $path, resource $resource, array $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::createLocalDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem createLocalDriver(array $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::directories
     * @method static array directories(null|string $directory = null, bool $recursive = false)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::allDirectories
     * @method static array allDirectories(null|string $directory = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::copy
     * @method static bool copy(string $from, string $to)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::readStream
     * @method static null|resource readStream(string $path)
     * @see \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver
     * @method static string getDefaultCloudDriver()
     * @see \Illuminate\Contracts\Filesystem\Filesystem::move
     * @method static bool move(string $from, string $to)
     * @see \Illuminate\Filesystem\FilesystemManager::set
     * @method static void set(string $name, $disk)
     * @see \Illuminate\Filesystem\FilesystemManager::createSftpDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem createSftpDriver(array $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::deleteDirectory
     * @method static bool deleteDirectory(string $directory)
     * @see \Illuminate\Filesystem\FilesystemManager::extend
     * @method static void extend(string $driver, \Closure $callback)
     * @see \Illuminate\Filesystem\FilesystemManager::disk
     * @method static \Illuminate\Contracts\Filesystem\Filesystem disk(null|string $name = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::size
     * @method static int size(string $path)
     * @see \Illuminate\Filesystem\FilesystemManager::build
     * @method static \Illuminate\Contracts\Filesystem\Filesystem build(array|string $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::makeDirectory
     * @method static bool makeDirectory(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::lastModified
     * @method static int lastModified(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::files
     * @method static array files(null|string $directory = null, bool $recursive = false)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::exists
     * @method static bool exists(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::allFiles
     * @method static array allFiles(null|string $directory = null)
     * @see \Illuminate\Filesystem\FilesystemManager::drive
     * @method static \Illuminate\Contracts\Filesystem\Filesystem drive(null|string $name = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::setVisibility
     * @method static bool setVisibility(string $path, string $visibility)
     * @see \Illuminate\Filesystem\FilesystemManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Contracts\Filesystem\Filesystem::append
     * @method static bool append(string $path, string $data)
     * @see \FileSystem::umask
     * @method static void umask(Int $mode)
     * @see \FileSystem::compare
     * @method static void compare(\PhingFile $f1, \PhingFile $f2)
     * @see \FileSystem::chgrp
     * @method static void chgrp(string $pathname, string $group)
     * @see \FileSystem::resolve
     * @method static void resolve(string $parent, string $child)
     * @see \FileSystem::resolveFile
     * @method static void resolveFile(\PhingFile $f)
     * @see \FileSystem::getLastModifiedTime
     * @method static int getLastModifiedTime(\PhingFile $f)
     * @see \FileSystem::deleteOnExit
     * @method static void deleteOnExit(\PhingFile $f)
     * @see \FileSystem::getSeparator
     * @method static void getSeparator()
     * @see \FileSystem::rmdir
     * @method static void rmdir(string $dir, bool $children = false)
     * @see \FileSystem::setLastModifiedTime
     * @method static void setLastModifiedTime(\PhingFile $f, int $time)
     * @see \FileSystem::compareMTimes
     * @method static int compareMTimes(string $file1, string $file2)
     * @see \FileSystem::checkAccess
     * @method static bool checkAccess(\PhingFile $f, bool $write = false)
     * @see \FileSystem::createNewFile
     * @method static bool createNewFile(string $strPathname)
     * @see \FileSystem::normalize
     * @method static void normalize(string $strPath)
     * @see \FileSystem::symlink
     * @method static void symlink(string $target, string $link)
     * @see \FileSystem::chmod
     * @method static void chmod(string $pathname, int $mode)
     * @see \FileSystem::lock
     * @method static void lock(\PhingFile $f)
     * @see \FileSystem::prefixLength
     * @method static void prefixLength(string $pathname)
     * @see \FileSystem::canonicalize
     * @method static mixed canonicalize(string $strPath)
     * @see \FileSystem::listRoots
     * @method static void listRoots()
     * @see \FileSystem::unlock
     * @method static void unlock(\PhingFile $f)
     * @see \FileSystem::chown
     * @method static void chown(string $pathname, string $user)
     * @see \FileSystem::canDelete
     * @method static bool canDelete(\PhingFile $f)
     * @see \FileSystem::createDirectory
     * @method static bool createDirectory(\PhingFile $f, int $mode = 0755)
     * @see \FileSystem::getPathSeparator
     * @method static void getPathSeparator()
     * @see \FileSystem::touch
     * @method static void touch(string $file, int $time = null)
     * @see \FileSystem::setReadOnly
     * @method static void setReadOnly(\PhingFile $f)
     * @see \FileSystem::getDefaultParent
     * @method static void getDefaultParent()
     * @see \FileSystem::unlink
     * @method static void unlink(string $file)
     * @see \FileSystem::rename
     * @method static void rename(\PhingFile $f1, \PhingFile $f2)
     * @see \FileSystem::getFileSystem
     * @method static \FileSystem getFileSystem()
     * @see \FileSystem::getBooleanAttributes
     * @method static void getBooleanAttributes(\PhingFile $f)
     * @see \FileSystem::listDir
     * @method static array listDir(\PhingFile $f)
     * @see \FileSystem::fromURIPath
     * @method static void fromURIPath(string $path)
     * @see \FileSystem::copyr
     * @method static bool copyr(string $source, string $dest)
     * @see \FileSystem::getLength
     * @method static int getLength(\PhingFile $f)
     * @see \FileSystem::isAbsolute
     * @method static void isAbsolute(\PhingFile $f)
     */
    class Storage {}
    
    /**
     * @see \Illuminate\Routing\UrlGenerator::formatRoot
     * @method static string formatRoot(string $scheme, null|string $root = null)
     * @see \Illuminate\Routing\UrlGenerator::secure
     * @method static string secure(string $path, array $parameters = [])
     * @see \Illuminate\Routing\UrlGenerator::formatScheme
     * @method static string formatScheme(bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::signatureHasNotExpired
     * @method static bool signatureHasNotExpired(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\UrlGenerator::toRoute
     * @method static string toRoute(\Illuminate\Routing\Route $route, $parameters, bool $absolute)
     * @see \Illuminate\Routing\UrlGenerator::action
     * @method static string action(array|string $action, $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::getRequest
     * @method static \Illuminate\Http\Request getRequest()
     * @see \Illuminate\Routing\UrlGenerator::setKeyResolver
     * @method static void setKeyResolver(callable $keyResolver)
     * @see \Illuminate\Routing\UrlGenerator::format
     * @method static string format(string $root, string $path, \Illuminate\Routing\Route|null $route = null)
     * @see \Illuminate\Routing\UrlGenerator::hasValidRelativeSignature
     * @method static bool hasValidRelativeSignature(\Illuminate\Http\Request $request)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\UrlGenerator::formatHostUsing
     * @method static void formatHostUsing(\Closure $callback)
     * @see \Illuminate\Routing\UrlGenerator::route
     * @method static string route(string $name, $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::forceRootUrl
     * @method static void forceRootUrl(null|string $root)
     * @see \Illuminate\Routing\UrlGenerator::defaults
     * @method static void defaults(array $defaults)
     * @see \Illuminate\Routing\UrlGenerator::formatParameters
     * @method static array formatParameters(array|mixed $parameters)
     * @see \Illuminate\Routing\UrlGenerator::signedRoute
     * @method static string signedRoute(string $name, $parameters = [], \DateInterval|\DateTimeInterface|int|null $expiration = null, bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::setRequest
     * @method static void setRequest(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\UrlGenerator::isValidUrl
     * @method static bool isValidUrl(string $path)
     * @see \Illuminate\Routing\UrlGenerator::full
     * @method static string full()
     * @see \Illuminate\Routing\UrlGenerator::getDefaultParameters
     * @method static array getDefaultParameters()
     * @see \Illuminate\Routing\UrlGenerator::pathFormatter
     * @method static \Closure pathFormatter()
     * @see \Illuminate\Routing\UrlGenerator::current
     * @method static string current()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\UrlGenerator::temporarySignedRoute
     * @method static string temporarySignedRoute(string $name, \DateInterval|\DateTimeInterface|int $expiration, array $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::secureAsset
     * @method static string secureAsset(string $path)
     * @see \Illuminate\Routing\UrlGenerator::formatPathUsing
     * @method static void formatPathUsing(\Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\UrlGenerator::previous
     * @method static string previous($fallback = false)
     * @see \Illuminate\Routing\UrlGenerator::hasCorrectSignature
     * @method static bool hasCorrectSignature(\Illuminate\Http\Request $request, bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::forceScheme
     * @method static void forceScheme(null|string $scheme)
     * @see \Illuminate\Routing\UrlGenerator::setSessionResolver
     * @method static void setSessionResolver(callable $sessionResolver)
     * @see \Illuminate\Routing\UrlGenerator::setRoutes
     * @method static void setRoutes(\Illuminate\Routing\RouteCollectionInterface $routes)
     * @see \Illuminate\Routing\UrlGenerator::hasValidSignature
     * @method static bool hasValidSignature(\Illuminate\Http\Request $request, bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::assetFrom
     * @method static string assetFrom(string $root, string $path, bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::setRootControllerNamespace
     * @method static void setRootControllerNamespace(string $rootNamespace)
     * @see \Illuminate\Routing\UrlGenerator::to
     * @method static string to(string $path, $extra = [], bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::asset
     * @method static string asset(string $path, bool|null $secure = null)
     */
    class URL {}
    
    /**
     * @see \Illuminate\Validation\Factory::resolver
     * @method static void resolver(\Closure $resolver)
     * @see \Illuminate\Validation\Factory::setPresenceVerifier
     * @method static void setPresenceVerifier(\Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)
     * @see \Illuminate\Validation\Factory::replacer
     * @method static void replacer(string $rule, \Closure|string $replacer)
     * @see \Illuminate\Validation\Factory::extendImplicit
     * @method static void extendImplicit(string $rule, \Closure|string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Validation\Factory::extend
     * @method static void extend(string $rule, \Closure|string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::extendDependent
     * @method static void extendDependent(string $rule, \Closure|string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Validation\Factory::getTranslator
     * @method static \Illuminate\Contracts\Translation\Translator getTranslator()
     * @see \Illuminate\Validation\Factory::make
     * @method static \Illuminate\Validation\Validator make(array $data, array $rules, array $messages = [], array $customAttributes = [])
     * @see \Illuminate\Validation\Factory::excludeUnvalidatedArrayKeys
     * @method static void excludeUnvalidatedArrayKeys()
     * @see \Illuminate\Validation\Factory::validate
     * @method static array validate(array $data, array $rules, array $messages = [], array $customAttributes = [])
     * @see \Illuminate\Validation\Factory::getPresenceVerifier
     * @method static \Illuminate\Validation\PresenceVerifierInterface getPresenceVerifier()
     */
    class Validator {}
    
    /**
     * @see \Illuminate\View\Concerns\ManagesLayouts::stopSection
     * @method static string stopSection(bool $overwrite = false)
     * @see \Illuminate\View\Concerns\ManagesLayouts::getSections
     * @method static array getSections()
     * @see \Illuminate\View\Factory::getEngineResolver
     * @method static \Illuminate\View\Engines\EngineResolver getEngineResolver()
     * @see \Illuminate\View\Factory::prependNamespace
     * @method static void prependNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesEvents::callComposer
     * @method static void callComposer(\Illuminate\Contracts\View\View $view)
     * @see \Illuminate\View\Concerns\ManagesLayouts::yieldContent
     * @method static string yieldContent(string $section, string $default = '')
     * @see \Illuminate\View\Factory::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\View\Concerns\ManagesTranslations::startTranslation
     * @method static void startTranslation(array $replacements = [])
     * @see \Illuminate\View\Concerns\ManagesLayouts::sectionMissing
     * @method static bool sectionMissing(string $name)
     * @see \Illuminate\View\Factory::replaceNamespace
     * @method static void replaceNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Factory::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\View\Concerns\ManagesComponents::endSlot
     * @method static void endSlot()
     * @see \Illuminate\View\Concerns\ManagesLoops::getLastLoop
     * @method static null|\stdClass getLastLoop()
     * @see \Illuminate\View\Factory::addNamespace
     * @method static void addNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Factory::renderEach
     * @method static string renderEach(string $view, array $data, string $iterator, string $empty = 'raw|')
     * @see \Illuminate\View\Concerns\ManagesComponents::startComponent
     * @method static void startComponent(\Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string $view, array $data = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::startPrepend
     * @method static void startPrepend(string $section, string $content = '')
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\View\Concerns\ManagesStacks::flushStacks
     * @method static void flushStacks()
     * @see \Illuminate\View\Factory::addLocation
     * @method static void addLocation(string $location)
     * @see \Illuminate\View\Factory::incrementRender
     * @method static void incrementRender()
     * @see \Illuminate\View\Factory::flushFinderCache
     * @method static void flushFinderCache()
     * @see \Illuminate\View\Factory::decrementRender
     * @method static void decrementRender()
     * @see \Illuminate\View\Factory::getEngineFromPath
     * @method static \Illuminate\Contracts\View\Engine getEngineFromPath(string $path)
     * @see \Illuminate\View\Concerns\ManagesLoops::getLoopStack
     * @method static array getLoopStack()
     * @see \Illuminate\View\Concerns\ManagesLayouts::yieldSection
     * @method static string yieldSection()
     * @see \Illuminate\View\Concerns\ManagesLayouts::appendSection
     * @method static string appendSection()
     * @see \Illuminate\View\Factory::shared
     * @method static mixed shared(string $key, $default = null)
     * @see \Illuminate\View\Concerns\ManagesEvents::composers
     * @method static array composers(array $composers)
     * @see \Illuminate\View\Concerns\ManagesComponents::renderComponent
     * @method static string renderComponent()
     * @see \Illuminate\View\Factory::setDispatcher
     * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\View\Factory::hasRenderedOnce
     * @method static bool hasRenderedOnce(string $id)
     * @see \Illuminate\View\Concerns\ManagesLayouts::flushSections
     * @method static void flushSections()
     * @see \Illuminate\View\Factory::getFinder
     * @method static \Illuminate\View\ViewFinderInterface getFinder()
     * @see \Illuminate\View\Concerns\ManagesLayouts::parentPlaceholder
     * @method static string parentPlaceholder(string $section = '')
     * @see \Illuminate\View\Concerns\ManagesLayouts::getSection
     * @method static mixed getSection(string $name, null|string $default = null)
     * @see \Illuminate\View\Concerns\ManagesComponents::slot
     * @method static void slot(string $name, null|string $content = null)
     * @see \Illuminate\View\Factory::doneRendering
     * @method static bool doneRendering()
     * @see \Illuminate\View\Concerns\ManagesLoops::addLoop
     * @method static void addLoop(array|\Countable $data)
     * @see \Illuminate\View\Concerns\ManagesLayouts::hasSection
     * @method static bool hasSection(string $name)
     * @see \Illuminate\View\Factory::flushStateIfDoneRendering
     * @method static void flushStateIfDoneRendering()
     * @see \Illuminate\View\Factory::file
     * @method static \Illuminate\Contracts\View\View file(string $path, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\View\Factory::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
     * @see \Illuminate\View\Concerns\ManagesStacks::yieldPushContent
     * @method static string yieldPushContent(string $section, string $default = '')
     * @see \Illuminate\View\Concerns\ManagesComponents::startComponentFirst
     * @method static void startComponentFirst(array $names, array $data = [])
     * @see \Illuminate\View\Factory::share
     * @method static mixed share(array|string $key, mixed|null $value = null)
     * @see \Illuminate\View\Factory::make
     * @method static \Illuminate\Contracts\View\View make(string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::startPush
     * @method static void startPush(string $section, string $content = '')
     * @see \Illuminate\View\Concerns\ManagesStacks::stopPush
     * @method static string stopPush()
     * @see \Illuminate\View\Factory::markAsRenderedOnce
     * @method static void markAsRenderedOnce(string $id)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\View\Concerns\ManagesEvents::creator
     * @method static array creator(array|string $views, \Closure|string $callback)
     * @see \Illuminate\View\Concerns\ManagesEvents::composer
     * @method static array composer(array|string $views, \Closure|string $callback)
     * @see \Illuminate\View\Concerns\ManagesTranslations::renderTranslation
     * @method static string renderTranslation()
     * @see \Illuminate\View\Factory::renderWhen
     * @method static string renderWhen(bool $condition, string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::addExtension
     * @method static void addExtension(string $extension, string $engine, \Closure|null $resolver = null)
     * @see \Illuminate\View\Factory::getShared
     * @method static array getShared()
     * @see \Illuminate\View\Concerns\ManagesLoops::incrementLoopIndices
     * @method static void incrementLoopIndices()
     * @see \Illuminate\View\Concerns\ManagesLayouts::startSection
     * @method static void startSection(string $section, null|string $content = null)
     * @see \Illuminate\View\Concerns\ManagesStacks::stopPrepend
     * @method static string stopPrepend()
     * @see \Illuminate\View\Concerns\ManagesLoops::popLoop
     * @method static void popLoop()
     * @see \Illuminate\View\Factory::flushState
     * @method static void flushState()
     * @see \Illuminate\View\Factory::setFinder
     * @method static void setFinder(\Illuminate\View\ViewFinderInterface $finder)
     * @see \Illuminate\View\Factory::exists
     * @method static bool exists(string $view)
     * @see \Illuminate\View\Concerns\ManagesLayouts::inject
     * @method static void inject(string $section, string $content)
     * @see \Illuminate\View\Factory::first
     * @method static \Illuminate\Contracts\View\View first(array $views, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::getExtensions
     * @method static array getExtensions()
     * @see \Illuminate\View\Concerns\ManagesEvents::callCreator
     * @method static void callCreator(\Illuminate\Contracts\View\View $view)
     */
    class View {}
}

namespace L5Swagger {
    
    /**
     * @see \L5Swagger\Generator::generateDocs
     * @method static void generateDocs()
     */
    class L5SwaggerFacade {}
}

namespace Livewire {
    
    /**
     * @see \Livewire\LivewireManager::dispatch
     * @method static void dispatch($event, ...$params)
     * @see \Livewire\LivewireManager::actingAs
     * @method static void actingAs(\Illuminate\Contracts\Auth\Authenticatable $user, $driver = null)
     * @see \Livewire\LivewireManager::originalUrl
     * @method static void originalUrl()
     * @see \Livewire\LivewireManager::originalPath
     * @method static void originalPath()
     * @see \Livewire\LivewireManager::withQueryParams
     * @method static void withQueryParams($queryParams)
     * @see \Livewire\LivewireManager::listen
     * @method static void listen($event, $callback)
     * @see \Livewire\LivewireManager::getAlias
     * @method static null getAlias($class, $default = null)
     * @see \Livewire\LivewireManager::isLivewireRequest
     * @method static bool isLivewireRequest()
     * @see \Livewire\LivewireManager::originalMethod
     * @method static string originalMethod()
     * @see \Livewire\LivewireManager::getPersistentMiddleware
     * @method static array getPersistentMiddleware()
     * @see \Livewire\LivewireManager::scripts
     * @method static void scripts($options = [])
     * @see \Livewire\LivewireManager::getRootElementTagName
     * @method static void getRootElementTagName($dom)
     * @see \Livewire\LivewireManager::getComponentAliases
     * @method static array getComponentAliases()
     * @see \Livewire\LivewireManager::test
     * @method static \Livewire\Testing\TestableLivewire test($name, $params = [])
     * @see \Livewire\LivewireManager::getClass
     * @method static bool|mixed getClass($alias)
     * @see \Livewire\LivewireManager::addPersistentMiddleware
     * @method static void addPersistentMiddleware($middleware)
     * @see \Livewire\LivewireManager::isRunningServerless
     * @method static void isRunningServerless()
     * @see \Livewire\LivewireManager::isProbablyLivewireRequest
     * @method static bool isProbablyLivewireRequest()
     * @see \Livewire\LivewireManager::mount
     * @method static void mount($name, $params = [])
     * @see \Livewire\LivewireManager::isOnVapor
     * @method static void isOnVapor()
     * @see \Livewire\LivewireManager::component
     * @method static void component($alias, $viewClass = null)
     * @see \Livewire\LivewireManager::setPersistentMiddleware
     * @method static void setPersistentMiddleware($middleware)
     * @see \Livewire\LivewireManager::isDefinitelyLivewireRequest
     * @method static bool isDefinitelyLivewireRequest()
     * @see \Livewire\LivewireManager::styles
     * @method static void styles($options = [])
     * @see \Livewire\LivewireManager::visit
     * @method static mixed visit($browser, $class, $queryString = '')
     * @see \Livewire\LivewireManager::dummyMount
     * @method static string dummyMount($id, $tagName)
     * @see \Livewire\LivewireManager::getInstance
     * @method static mixed getInstance($component, $id)
     */
    class Livewire {}
}

namespace {
    class Agent extends Jenssegers\Agent\Facades\Agent {}
    class App extends Illuminate\Support\Facades\App {}
    class Artisan extends Illuminate\Support\Facades\Artisan {}
    class Auth extends Illuminate\Support\Facades\Auth {}
    class Blade extends Illuminate\Support\Facades\Blade {}
    class Broadcast extends Illuminate\Support\Facades\Broadcast {}
    class Bus extends Illuminate\Support\Facades\Bus {}
    class Cache extends Illuminate\Support\Facades\Cache {}
    class Config extends Illuminate\Support\Facades\Config {}
    class Cookie extends Illuminate\Support\Facades\Cookie {}
    class Crypt extends Illuminate\Support\Facades\Crypt {}
    class DB extends Illuminate\Support\Facades\DB {}
    class Date extends Illuminate\Support\Facades\Date {}
    class Debugbar extends Barryvdh\Debugbar\Facade {}
    class Event extends Illuminate\Support\Facades\Event {}
    class File extends Illuminate\Support\Facades\File {}
    class Flare extends Facade\Ignition\Facades\Flare {}
    class Gate extends Illuminate\Support\Facades\Gate {}
    class Hash extends Illuminate\Support\Facades\Hash {}
    class Http extends Illuminate\Support\Facades\Http {}
    class L5Swagger extends L5Swagger\L5SwaggerFacade {}
    class Lang extends Illuminate\Support\Facades\Lang {}
    class Livewire extends Livewire\Livewire {}
    class Log extends Illuminate\Support\Facades\Log {}
    class Mail extends Illuminate\Support\Facades\Mail {}
    class Notification extends Illuminate\Support\Facades\Notification {}
    class Password extends Illuminate\Support\Facades\Password {}
    class Queue extends Illuminate\Support\Facades\Queue {}
    class RateLimiter extends Illuminate\Support\Facades\RateLimiter {}
    class Redirect extends Illuminate\Support\Facades\Redirect {}
    class Request extends Illuminate\Support\Facades\Request {}
    class Response extends Illuminate\Support\Facades\Response {}
    class Route extends Illuminate\Support\Facades\Route {}
    class Schema extends Illuminate\Support\Facades\Schema {}
    class Session extends Illuminate\Support\Facades\Session {}
    class Storage extends Illuminate\Support\Facades\Storage {}
    class URL extends Illuminate\Support\Facades\URL {}
    class Validator extends Illuminate\Support\Facades\Validator {}
    class View extends Illuminate\Support\Facades\View {}
}
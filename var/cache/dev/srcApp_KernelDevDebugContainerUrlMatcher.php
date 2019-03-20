<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::helloWorldAction'], null, null, null, false, false, null]],
            '/addEmploye' => [[['_route' => 'addEmploye', '_controller' => 'App\\Controller\\RhController::AddEmployeAction'], null, null, null, false, false, null]],
            '/listEmploye' => [[['_route' => 'listEmploye', '_controller' => 'App\\Controller\\RhController::listEmployeAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
            '/login_check' => [[['_route' => 'app_login_check', '_controller' => 'App\\Controller\\SecurityController::loginCheckAction'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'], null, null, null, false, false, null]],
            '/accueilConnection' => [[['_route' => 'accueilConnection', '_controller' => 'App\\Controller\\SecurityController::accueilConnectionAction'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/viewEmploye/(\\d+)(*:25)'
                    .'|/editEmploye/(\\d+)(*:50)'
                    .'|/deleteEmploye/([^/]++)(*:80)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:118)'
                        .'|wdt/([^/]++)(*:138)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:184)'
                                .'|router(*:198)'
                                .'|exception(?'
                                    .'|(*:218)'
                                    .'|\\.css(*:231)'
                                .')'
                            .')'
                            .'|(*:241)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            25 => [[['_route' => 'viewEmploye', '_controller' => 'App\\Controller\\RhController::viewEmployeAction'], ['id'], null, null, false, true, null]],
            50 => [[['_route' => 'editEmploye', '_controller' => 'App\\Controller\\RhController::editEmployeAction'], ['id'], null, null, false, true, null]],
            80 => [[['_route' => 'deleteEmploye', '_controller' => 'App\\Controller\\RhController::deleteEmployeAction'], ['id'], null, null, false, true, null]],
            118 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            138 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            184 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            198 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            218 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            231 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            241 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}

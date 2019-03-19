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
            '/' => [[['_route' => '/', '_controller' => 'App\\Controller\\DefaultController::helloWorldAction'], null, null, null, false, false, null]],
            '/creation-client' => [[['_route' => 'creationClient', '_controller' => 'App\\Controller\\HotlineController::creationClientAction'], null, null, null, false, false, null]],
            '/show-clients' => [[['_route' => 'showAllClients', '_controller' => 'App\\Controller\\HotlineController::showAllClientsAction'], null, null, null, false, false, null]],
            '/management-clients' => [[['_route' => 'managementClients', '_controller' => 'App\\Controller\\HotlineController::managementClientsAction'], null, null, null, false, false, null]],
            '/creation-course' => [[['_route' => 'creationCourse', '_controller' => 'App\\Controller\\HotlineController::creationCourseAction'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/update\\-client/(\\d+)(*:28)'
                    .'|/delete\\-client/(\\d+)(*:56)'
                    .'|/show\\-client/(\\d+)(*:82)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:120)'
                        .'|wdt/([^/]++)(*:140)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:186)'
                                .'|router(*:200)'
                                .'|exception(?'
                                    .'|(*:220)'
                                    .'|\\.css(*:233)'
                                .')'
                            .')'
                            .'|(*:243)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            28 => [[['_route' => 'updateClient', '_controller' => 'App\\Controller\\HotlineController::updateClientAction'], ['idclient'], null, null, false, true, null]],
            56 => [[['_route' => 'deleteClient', '_controller' => 'App\\Controller\\HotlineController::deleteClientAction'], ['idclient'], null, null, false, true, null]],
            82 => [[['_route' => 'showClient', '_controller' => 'App\\Controller\\HotlineController::showOneClientAction'], ['idclient'], null, null, false, true, null]],
            120 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            140 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            186 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            200 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            220 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            233 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            243 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}

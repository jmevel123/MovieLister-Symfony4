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
        $this->staticRoutes = array(
            '/blog' => array(array(array('_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'), null, null, null, false, false, null)),
            '/' => array(array(array('_route' => 'home', '_controller' => 'App\\Controller\\BlogController::home'), null, null, null, false, false, null)),
            '/blog/new' => array(array(array('_route' => 'blog_create', '_controller' => 'App\\Controller\\BlogController::form'), null, null, null, false, false, null)),
            '/movies' => array(array(array('_route' => 'movies', '_controller' => 'App\\Controller\\MovieController::index'), null, null, null, false, false, null)),
            '/movies_display' => array(array(array('_route' => 'popular_movies', '_controller' => 'App\\Controller\\MovieController::home'), null, null, null, false, false, null)),
            '/register' => array(array(array('_route' => 'security_register', '_controller' => 'App\\Controller\\SecurityController::register'), null, null, null, false, false, null)),
            '/login' => array(array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, false, null)),
            '/logout' => array(array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/blog/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:32)'
                            .'|delete_comment/([^/]++)(*:62)'
                        .')'
                        .'|(*:70)'
                    .')'
                    .'|/movies_dispay/([^/]++)(*:101)'
                    .'|/profile/([^/]++)(*:126)'
                    .'|/delete/([^/]++)(*:150)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:189)'
                        .'|wdt/([^/]++)(*:209)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:255)'
                                .'|router(*:269)'
                                .'|exception(?'
                                    .'|(*:289)'
                                    .'|\\.css(*:302)'
                                .')'
                            .')'
                            .'|(*:312)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            32 => array(array(array('_route' => 'blog_edit', '_controller' => 'App\\Controller\\BlogController::form'), array('id'), null, null, false, false, null)),
            62 => array(array(array('_route' => 'delete_comment', '_controller' => 'App\\Controller\\BlogController::delete_comment'), array('id', 'comment_id'), null, null, false, true, null)),
            70 => array(array(array('_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'), array('id'), null, null, false, true, null)),
            101 => array(array(array('_route' => 'display_movie', '_controller' => 'App\\Controller\\MovieController::show'), array('id'), null, null, false, true, null)),
            126 => array(array(array('_route' => 'profile_user', '_controller' => 'App\\Controller\\SecurityController::edit_user'), array('id'), null, null, false, true, null)),
            150 => array(array(array('_route' => 'delete_user', '_controller' => 'App\\Controller\\SecurityController::delete_user'), array('id'), null, null, false, true, null)),
            189 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            209 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            255 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            269 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            289 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            302 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            312 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}

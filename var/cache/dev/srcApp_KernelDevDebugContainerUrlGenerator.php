<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'blog' => array(array(), array('_controller' => 'App\\Controller\\BlogController::index'), array(), array(array('text', '/blog')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\BlogController::home'), array(), array(array('text', '/')), array(), array()),
        'blog_create' => array(array(), array('_controller' => 'App\\Controller\\BlogController::form'), array(), array(array('text', '/blog/new')), array(), array()),
        'blog_edit' => array(array('id'), array('_controller' => 'App\\Controller\\BlogController::form'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/blog')), array(), array()),
        'blog_show' => array(array('id'), array('_controller' => 'App\\Controller\\BlogController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/blog')), array(), array()),
        'delete_comment' => array(array('id', 'comment_id'), array('_controller' => 'App\\Controller\\BlogController::delete_comment'), array(), array(array('variable', '/', '[^/]++', 'comment_id', true), array('text', '/delete_comment'), array('variable', '/', '[^/]++', 'id', true), array('text', '/blog')), array(), array()),
        'movies' => array(array(), array('_controller' => 'App\\Controller\\MovieController::index'), array(), array(array('text', '/movies')), array(), array()),
        'popular_movies' => array(array(), array('_controller' => 'App\\Controller\\MovieController::home'), array(), array(array('text', '/movies_display')), array(), array()),
        'display_movie' => array(array('id'), array('_controller' => 'App\\Controller\\MovieController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/movies_dispay')), array(), array()),
        'security_register' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::register'), array(), array(array('text', '/register')), array(), array()),
        'security_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'profile_user' => array(array('id'), array('_controller' => 'App\\Controller\\SecurityController::edit_user'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/profile')), array(), array()),
        'delete_user' => array(array('id'), array('_controller' => 'App\\Controller\\SecurityController::delete_user'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/delete')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

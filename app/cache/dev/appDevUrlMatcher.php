<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/MenuRol')) {
            // mrf_menuRol_list
            if ($pathinfo === '/MenuRol/list') {
                return array (  '_controller' => 'MRF\\MenuRolBundle\\Controller\\MenuRolController::listAction',  '_route' => 'mrf_menuRol_list',);
            }

            // mrf_menuRol_add
            if ($pathinfo === '/MenuRol/add') {
                return array (  '_controller' => 'MRF\\MenuRolBundle\\Controller\\MenuRolController::addAction',  '_route' => 'mrf_menuRol_add',);
            }

            // mrf_menuRol_create
            if ($pathinfo === '/MenuRol/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_menuRol_create;
                }

                return array (  '_controller' => 'MRF\\MenuRolBundle\\Controller\\MenuRolController::createAction',  '_route' => 'mrf_menuRol_create',);
            }
            not_mrf_menuRol_create:

            // mrf_menuRol_edit
            if (0 === strpos($pathinfo, '/MenuRol/edit') && preg_match('#^/MenuRol/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_menuRol_edit')), array (  '_controller' => 'MRF\\MenuRolBundle\\Controller\\MenuRolController::editAction',));
            }

            // mrf_menuRol_update
            if (0 === strpos($pathinfo, '/MenuRol/update') && preg_match('#^/MenuRol/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_mrf_menuRol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_menuRol_update')), array (  '_controller' => 'MRF\\MenuRolBundle\\Controller\\MenuRolController::updateAction',));
            }
            not_mrf_menuRol_update:

            // mrf_menuRol_delete
            if (0 === strpos($pathinfo, '/MenuRol/delete') && preg_match('#^/MenuRol/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_menuRol_delete')), array (  '_controller' => 'MRF\\MenuRolBundle\\Controller\\MenuRolController::deleteAction',));
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/Menu')) {
            // mrf_menus_list
            if ($pathinfo === '/Menu/list') {
                return array (  '_controller' => 'MRF\\MenuBundle\\Controller\\MenuController::listAction',  '_route' => 'mrf_menus_list',);
            }

            // mrf_menu_add
            if ($pathinfo === '/Menu/add') {
                return array (  '_controller' => 'MRF\\MenuBundle\\Controller\\MenuController::addAction',  '_route' => 'mrf_menu_add',);
            }

            // mrf_menu_create
            if ($pathinfo === '/Menu/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_menu_create;
                }

                return array (  '_controller' => 'MRF\\MenuBundle\\Controller\\MenuController::createAction',  '_route' => 'mrf_menu_create',);
            }
            not_mrf_menu_create:

            // mrf_menu_edit
            if (0 === strpos($pathinfo, '/Menu/edit') && preg_match('#^/Menu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_menu_edit')), array (  '_controller' => 'MRF\\MenuBundle\\Controller\\MenuController::editAction',));
            }

            // mrf_menu_update
            if (0 === strpos($pathinfo, '/Menu/update') && preg_match('#^/Menu/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_mrf_menu_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_menu_update')), array (  '_controller' => 'MRF\\MenuBundle\\Controller\\MenuController::updateAction',));
            }
            not_mrf_menu_update:

            // mrf_menu_delete
            if (0 === strpos($pathinfo, '/Menu/delete') && preg_match('#^/Menu/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_menu_delete')), array (  '_controller' => 'MRF\\MenuBundle\\Controller\\MenuController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Rol')) {
            // mrf_rol_list
            if ($pathinfo === '/Rol/list') {
                return array (  '_controller' => 'MRF\\RolBundle\\Controller\\RolController::listAction',  '_route' => 'mrf_rol_list',);
            }

            // mrf_rol_add
            if ($pathinfo === '/Rol/add') {
                return array (  '_controller' => 'MRF\\RolBundle\\Controller\\RolController::addAction',  '_route' => 'mrf_rol_add',);
            }

            // mrf_rol_create
            if ($pathinfo === '/Rol/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_rol_create;
                }

                return array (  '_controller' => 'MRF\\RolBundle\\Controller\\RolController::createAction',  '_route' => 'mrf_rol_create',);
            }
            not_mrf_rol_create:

            // mrf_rol_edit
            if (0 === strpos($pathinfo, '/Rol/edit') && preg_match('#^/Rol/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_rol_edit')), array (  '_controller' => 'MRF\\RolBundle\\Controller\\RolController::editAction',));
            }

            // mrf_rol_update
            if (0 === strpos($pathinfo, '/Rol/update') && preg_match('#^/Rol/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_mrf_rol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_rol_update')), array (  '_controller' => 'MRF\\RolBundle\\Controller\\RolController::updateAction',));
            }
            not_mrf_rol_update:

            // mrf_rol_delete
            if (0 === strpos($pathinfo, '/Rol/delete') && preg_match('#^/Rol/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_rol_delete')), array (  '_controller' => 'MRF\\RolBundle\\Controller\\RolController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Usuario')) {
            // mrf_usuario_list
            if ($pathinfo === '/Usuario/list') {
                return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::listAction',  '_route' => 'mrf_usuario_list',);
            }

            // mrf_usuario_add
            if ($pathinfo === '/Usuario/add') {
                return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::addAction',  '_route' => 'mrf_usuario_add',);
            }

            // mrf_usuario_create
            if ($pathinfo === '/Usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_usuario_create;
                }

                return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::createAction',  '_route' => 'mrf_usuario_create',);
            }
            not_mrf_usuario_create:

            // mrf_usuario_edit
            if (0 === strpos($pathinfo, '/Usuario/edit') && preg_match('#^/Usuario/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_usuario_edit')), array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::editAction',));
            }

            // mrf_usuario_update
            if (0 === strpos($pathinfo, '/Usuario/update') && preg_match('#^/Usuario/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_mrf_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_usuario_update')), array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_mrf_usuario_update:

            // mrf_usuario_delete
            if (0 === strpos($pathinfo, '/Usuario/delete') && preg_match('#^/Usuario/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_usuario_delete')), array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::deleteAction',));
            }

        }

        // mrf_usuario_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mrf_usuario_login');
            }

            return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'mrf_usuario_login',);
        }

        // mrf_usuario_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::logoutAction',  '_route' => 'mrf_usuario_logout',);
        }

        // mrf_usuario_validar
        if ($pathinfo === '/Valida') {
            return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\UsuarioController::validarAction',  '_route' => 'mrf_usuario_validar',);
        }

        // mrf_menu_list
        if ($pathinfo === '/Usuario/Menu/list') {
            return array (  '_controller' => 'MRF\\UsuarioBundle\\Controller\\MenuController::listAction',  '_route' => 'mrf_menu_list',);
        }

        if (0 === strpos($pathinfo, '/Proveedor')) {
            // mrf_proveedor_list
            if ($pathinfo === '/Proveedor/list') {
                return array (  '_controller' => 'MRF\\ProveedorBundle\\Controller\\ProveedorController::listAction',  '_route' => 'mrf_proveedor_list',);
            }

            // mrf_proveedor_add
            if ($pathinfo === '/Proveedor/add') {
                return array (  '_controller' => 'MRF\\ProveedorBundle\\Controller\\ProveedorController::addAction',  '_route' => 'mrf_proveedor_add',);
            }

            // mrf_proveedor_create
            if ($pathinfo === '/Proveedor/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_proveedor_create;
                }

                return array (  '_controller' => 'MRF\\ProveedorBundle\\Controller\\ProveedorController::createAction',  '_route' => 'mrf_proveedor_create',);
            }
            not_mrf_proveedor_create:

            // mrf_proveedor_edit
            if (0 === strpos($pathinfo, '/Proveedor/edit') && preg_match('#^/Proveedor/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_proveedor_edit')), array (  '_controller' => 'MRF\\ProveedorBundle\\Controller\\ProveedorController::editAction',));
            }

            // mrf_proveedor_update
            if (0 === strpos($pathinfo, '/Proveedor/update') && preg_match('#^/Proveedor/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_mrf_proveedor_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_proveedor_update')), array (  '_controller' => 'MRF\\ProveedorBundle\\Controller\\ProveedorController::updateAction',));
            }
            not_mrf_proveedor_update:

            // mrf_proveedor_delete
            if (0 === strpos($pathinfo, '/Proveedor/delete') && preg_match('#^/Proveedor/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_proveedor_delete')), array (  '_controller' => 'MRF\\ProveedorBundle\\Controller\\ProveedorController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Cliente')) {
            // mrf_cliente_list
            if ($pathinfo === '/Cliente/list') {
                return array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::listAction',  '_route' => 'mrf_cliente_list',);
            }

            // mrf_cliente_add
            if ($pathinfo === '/Cliente/add') {
                return array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::addAction',  '_route' => 'mrf_cliente_add',);
            }

            // mrf_cliente_create
            if ($pathinfo === '/Cliente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_cliente_create;
                }

                return array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::createAction',  '_route' => 'mrf_cliente_create',);
            }
            not_mrf_cliente_create:

            // mrf_cliente_edit
            if (0 === strpos($pathinfo, '/Cliente/edit') && preg_match('#^/Cliente/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_cliente_edit')), array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::editAction',));
            }

            // mrf_cliente_update
            if (0 === strpos($pathinfo, '/Cliente/update') && preg_match('#^/Cliente/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_mrf_cliente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_cliente_update')), array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::updateAction',));
            }
            not_mrf_cliente_update:

            // mrf_cliente_delete
            if (0 === strpos($pathinfo, '/Cliente/delete') && preg_match('#^/Cliente/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mrf_cliente_delete')), array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::deleteAction',));
            }

            // mrf_cliente_add2
            if ($pathinfo === '/Cliente/add2') {
                return array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::add2Action',  '_route' => 'mrf_cliente_add2',);
            }

            // mrf_cliente_create2
            if ($pathinfo === '/Cliente/create2') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mrf_cliente_create2;
                }

                return array (  '_controller' => 'MRF\\ClienteBundle\\Controller\\ClienteController::create2Action',  '_route' => 'mrf_cliente_create2',);
            }
            not_mrf_cliente_create2:

        }

        // mrf_home_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'MRF\\HomeBundle\\Controller\\HomeController::indexAction',  '_route' => 'mrf_home_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

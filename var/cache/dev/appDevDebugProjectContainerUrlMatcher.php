<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // HomePage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\HomePageController::homepageAction',  '_route' => 'HomePage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_HomePage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'HomePage'));
            }

            return $ret;
        }
        not_HomePage:

        // post_page
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<post>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'post_page']), array (  '_controller' => 'AppBundle\\Controller\\PostPageController::postpageAction',));
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

            // sonata.translation.locale
            if (0 === strpos($pathinfo, '/locale') && preg_match('#^/locale/(?P<locale>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata.translation.locale']), array (  '_controller' => 'Sonata\\TranslationBundle\\Action\\SwitchLocaleAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_sonata_admin_redirect;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect'));
                }

                return $ret;
            }
            not_sonata_admin_redirect:

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.action.retrieve_form_field_element',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_admin_short_object_information']), array (  '_controller' => 'sonata.admin.action.get_short_object_description',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.action.retrieve_autocomplete_items',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.action.append_form_field_element',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.action.set_object_field_value',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // admin_sonata_user_user_list
                    if ('/admin/sonata/user/user/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                    }

                    // admin_sonata_user_user_create
                    if ('/admin/sonata/user/user/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                    }

                    // admin_sonata_user_user_batch
                    if ('/admin/sonata/user/user/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                    }

                    // admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_user_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                    }

                    // admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_user_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                    }

                    // admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_user_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                    }

                    // admin_sonata_user_user_export
                    if ('/admin/sonata/user/user/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // admin_sonata_user_group_list
                    if ('/admin/sonata/user/group/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                    }

                    // admin_sonata_user_group_create
                    if ('/admin/sonata/user/group/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                    }

                    // admin_sonata_user_group_batch
                    if ('/admin/sonata/user/group/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                    }

                    // admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_group_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                    }

                    // admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_group_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                    }

                    // admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_group_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                    }

                    // admin_sonata_user_group_export
                    if ('/admin/sonata/user/group/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/classification/c')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/classification/category')) {
                        // admin_sonata_classification_category_list
                        if ('/admin/sonata/classification/category/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_list',  '_route' => 'admin_sonata_classification_category_list',);
                        }

                        // admin_sonata_classification_category_create
                        if ('/admin/sonata/classification/category/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_create',  '_route' => 'admin_sonata_classification_category_create',);
                        }

                        // admin_sonata_classification_category_batch
                        if ('/admin/sonata/classification/category/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_batch',  '_route' => 'admin_sonata_classification_category_batch',);
                        }

                        // admin_sonata_classification_category_edit
                        if (preg_match('#^/admin/sonata/classification/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_category_edit']), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_edit',));
                        }

                        // admin_sonata_classification_category_delete
                        if (preg_match('#^/admin/sonata/classification/category/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_category_delete']), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_delete',));
                        }

                        // admin_sonata_classification_category_show
                        if (preg_match('#^/admin/sonata/classification/category/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_category_show']), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_show',));
                        }

                        // admin_sonata_classification_category_export
                        if ('/admin/sonata/classification/category/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_export',  '_route' => 'admin_sonata_classification_category_export',);
                        }

                        // admin_sonata_classification_category_tree
                        if ('/admin/sonata/classification/category/tree' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::treeAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_tree',  '_route' => 'admin_sonata_classification_category_tree',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/sonata/classification/collection')) {
                        // admin_sonata_classification_collection_list
                        if ('/admin/sonata/classification/collection/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_list',  '_route' => 'admin_sonata_classification_collection_list',);
                        }

                        // admin_sonata_classification_collection_create
                        if ('/admin/sonata/classification/collection/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_create',  '_route' => 'admin_sonata_classification_collection_create',);
                        }

                        // admin_sonata_classification_collection_batch
                        if ('/admin/sonata/classification/collection/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_batch',  '_route' => 'admin_sonata_classification_collection_batch',);
                        }

                        // admin_sonata_classification_collection_edit
                        if (preg_match('#^/admin/sonata/classification/collection/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_collection_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_edit',));
                        }

                        // admin_sonata_classification_collection_delete
                        if (preg_match('#^/admin/sonata/classification/collection/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_collection_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_delete',));
                        }

                        // admin_sonata_classification_collection_show
                        if (preg_match('#^/admin/sonata/classification/collection/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_collection_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_show',));
                        }

                        // admin_sonata_classification_collection_export
                        if ('/admin/sonata/classification/collection/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_export',  '_route' => 'admin_sonata_classification_collection_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/sonata/classification/context')) {
                        // admin_sonata_classification_context_list
                        if ('/admin/sonata/classification/context/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_list',  '_route' => 'admin_sonata_classification_context_list',);
                        }

                        // admin_sonata_classification_context_create
                        if ('/admin/sonata/classification/context/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_create',  '_route' => 'admin_sonata_classification_context_create',);
                        }

                        // admin_sonata_classification_context_batch
                        if ('/admin/sonata/classification/context/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_batch',  '_route' => 'admin_sonata_classification_context_batch',);
                        }

                        // admin_sonata_classification_context_edit
                        if (preg_match('#^/admin/sonata/classification/context/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_context_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_edit',));
                        }

                        // admin_sonata_classification_context_delete
                        if (preg_match('#^/admin/sonata/classification/context/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_context_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_delete',));
                        }

                        // admin_sonata_classification_context_show
                        if (preg_match('#^/admin/sonata/classification/context/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_context_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_show',));
                        }

                        // admin_sonata_classification_context_export
                        if ('/admin/sonata/classification/context/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_export',  '_route' => 'admin_sonata_classification_context_export',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/classification/tag')) {
                    // admin_sonata_classification_tag_list
                    if ('/admin/sonata/classification/tag/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_list',  '_route' => 'admin_sonata_classification_tag_list',);
                    }

                    // admin_sonata_classification_tag_create
                    if ('/admin/sonata/classification/tag/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_create',  '_route' => 'admin_sonata_classification_tag_create',);
                    }

                    // admin_sonata_classification_tag_batch
                    if ('/admin/sonata/classification/tag/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_batch',  '_route' => 'admin_sonata_classification_tag_batch',);
                    }

                    // admin_sonata_classification_tag_edit
                    if (preg_match('#^/admin/sonata/classification/tag/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_tag_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_edit',));
                    }

                    // admin_sonata_classification_tag_delete
                    if (preg_match('#^/admin/sonata/classification/tag/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_tag_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_delete',));
                    }

                    // admin_sonata_classification_tag_show
                    if (preg_match('#^/admin/sonata/classification/tag/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_classification_tag_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_show',));
                    }

                    // admin_sonata_classification_tag_export
                    if ('/admin/sonata/classification/tag/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_export',  '_route' => 'admin_sonata_classification_tag_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                    // admin_sonata_media_media_list
                    if ('/admin/sonata/media/media/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                    }

                    // admin_sonata_media_media_create
                    if ('/admin/sonata/media/media/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                    }

                    // admin_sonata_media_media_batch
                    if ('/admin/sonata/media/media/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                    }

                    // admin_sonata_media_media_edit
                    if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_media_edit']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                    }

                    // admin_sonata_media_media_delete
                    if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_media_delete']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                    }

                    // admin_sonata_media_media_show
                    if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_media_show']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                    }

                    // admin_sonata_media_media_export
                    if ('/admin/sonata/media/media/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                    }

                    // admin_sonata_media_media_ckeditor_browser
                    if ('/admin/sonata/media/media/ckeditor_browser' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_browser',  '_route' => 'admin_sonata_media_media_ckeditor_browser',);
                    }

                    // admin_sonata_media_media_ckeditor_upload
                    if ('/admin/sonata/media/media/ckeditor_upload' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_upload',  '_route' => 'admin_sonata_media_media_ckeditor_upload',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                    // admin_sonata_media_gallery_list
                    if ('/admin/sonata/media/gallery/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                    }

                    // admin_sonata_media_gallery_create
                    if ('/admin/sonata/media/gallery/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                    }

                    // admin_sonata_media_gallery_batch
                    if ('/admin/sonata/media/gallery/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                    }

                    // admin_sonata_media_gallery_edit
                    if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_gallery_edit']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                    }

                    // admin_sonata_media_gallery_delete
                    if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_gallery_delete']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                    }

                    // admin_sonata_media_gallery_show
                    if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_gallery_show']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                    }

                    // admin_sonata_media_gallery_export
                    if ('/admin/sonata/media/gallery/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                        // admin_sonata_media_galleryhasmedia_list
                        if ('/admin/sonata/media/galleryhasmedia/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                        }

                        // admin_sonata_media_galleryhasmedia_create
                        if ('/admin/sonata/media/galleryhasmedia/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                        }

                        // admin_sonata_media_galleryhasmedia_batch
                        if ('/admin/sonata/media/galleryhasmedia/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                        }

                        // admin_sonata_media_galleryhasmedia_edit
                        if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_galleryhasmedia_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                        }

                        // admin_sonata_media_galleryhasmedia_delete
                        if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_galleryhasmedia_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                        }

                        // admin_sonata_media_galleryhasmedia_show
                        if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_media_galleryhasmedia_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                        }

                        // admin_sonata_media_galleryhasmedia_export
                        if ('/admin/sonata/media/galleryhasmedia/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/news/post')) {
                    // admin_sonata_news_post_list
                    if ('/admin/sonata/news/post/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_list',  '_route' => 'admin_sonata_news_post_list',);
                    }

                    // admin_sonata_news_post_create
                    if ('/admin/sonata/news/post/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_create',  '_route' => 'admin_sonata_news_post_create',);
                    }

                    // admin_sonata_news_post_batch
                    if ('/admin/sonata/news/post/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_batch',  '_route' => 'admin_sonata_news_post_batch',);
                    }

                    // admin_sonata_news_post_edit
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_edit',));
                    }

                    // admin_sonata_news_post_delete
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_delete',));
                    }

                    // admin_sonata_news_post_show
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_show',));
                    }

                    // admin_sonata_news_post_export
                    if ('/admin/sonata/news/post/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_export',  '_route' => 'admin_sonata_news_post_export',);
                    }

                    // admin_sonata_news_post_comment_list
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/list$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_list']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_list',));
                    }

                    // admin_sonata_news_post_comment_create
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/create$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_create']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_create',));
                    }

                    // admin_sonata_news_post_comment_batch
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/batch$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_batch']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_batch',));
                    }

                    // admin_sonata_news_post_comment_edit
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_edit']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_edit',));
                    }

                    // admin_sonata_news_post_comment_delete
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_delete']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_delete',));
                    }

                    // admin_sonata_news_post_comment_show
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_show']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::showAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_show',));
                    }

                    // admin_sonata_news_post_comment_export
                    if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/export$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_post_comment_export']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::exportAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_export',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/news/comment')) {
                    // admin_sonata_news_comment_list
                    if ('/admin/sonata/news/comment/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_list',  '_route' => 'admin_sonata_news_comment_list',);
                    }

                    // admin_sonata_news_comment_create
                    if ('/admin/sonata/news/comment/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_create',  '_route' => 'admin_sonata_news_comment_create',);
                    }

                    // admin_sonata_news_comment_batch
                    if ('/admin/sonata/news/comment/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_batch',  '_route' => 'admin_sonata_news_comment_batch',);
                    }

                    // admin_sonata_news_comment_edit
                    if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_comment_edit']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_edit',));
                    }

                    // admin_sonata_news_comment_delete
                    if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_comment_delete']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_delete',));
                    }

                    // admin_sonata_news_comment_show
                    if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_news_comment_show']), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::showAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_show',));
                    }

                    // admin_sonata_news_comment_export
                    if ('/admin/sonata/news/comment/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::exportAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_export',  '_route' => 'admin_sonata_news_comment_export',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ('/admin/login' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Action\\LoginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ('/admin/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\CheckLoginAction',  '_route' => 'sonata_user_admin_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_sonata_user_admin_security_check;
                    }

                    return $ret;
                }
                not_sonata_user_admin_security_check:

            }

            // sonata_user_admin_security_logout
            if ('/admin/logout' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\UserBundle\\Action\\LogoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

            if (0 === strpos($pathinfo, '/admin/resetting')) {
                // sonata_user_admin_resetting_request
                if ('/admin/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\RequestAction',  '_route' => 'sonata_user_admin_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_sonata_user_admin_resetting_request;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_request:

                // sonata_user_admin_resetting_reset
                if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_user_admin_resetting_reset']), array (  '_controller' => 'Sonata\\UserBundle\\Action\\ResetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_sonata_user_admin_resetting_reset;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_reset:

                // sonata_user_admin_resetting_send_email
                if ('/admin/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\SendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_sonata_user_admin_resetting_send_email;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_send_email:

                // sonata_user_admin_resetting_check_email
                if ('/admin/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\CheckEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_sonata_user_admin_resetting_check_email;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if ('/media/gallery' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_sonata_media_gallery_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonata_media_gallery_index'));
                    }

                    return $ret;
                }
                not_sonata_media_gallery_index:

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_media_gallery_view']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_media_view']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_media_download']), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        elseif (0 === strpos($pathinfo, '/news')) {
            // sonata_news_add_comment
            if (0 === strpos($pathinfo, '/news/add-comment') && preg_match('#^/news/add\\-comment/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_add_comment']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\CreateCommentAction',));
            }

            if (0 === strpos($pathinfo, '/news/archive')) {
                // sonata_news_archive_daily
                if (preg_match('#^/news/archive/(?P<year>\\d+)/(?P<month>\\d+)/(?P<day>\\d+)(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_archive_daily']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\DailyPostArchiveAction',  '_format' => 'html',));
                }

                // sonata_news_archive_monthly
                if (preg_match('#^/news/archive/(?P<year>\\d+)/(?P<month>\\d+)(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_archive_monthly']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\MonthlyPostArchiveAction',  '_format' => 'html',));
                }

                // sonata_news_archive_yearly
                if (preg_match('#^/news/archive/(?P<year>\\d+)(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_archive_yearly']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\YearlyPostArchiveAction',  '_format' => 'html',));
                }

                // sonata_news_archive
                if (preg_match('#^/news/archive(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_archive']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\PostArchiveAction',  '_format' => 'html',));
                }

            }

            // sonata_news_tag
            if (0 === strpos($pathinfo, '/news/tag') && preg_match('#^/news/tag/(?P<tag>[^/\\.]++)(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_tag']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\TagPostArchiveAction',  '_format' => 'html',));
            }

            // sonata_news_collection
            if (0 === strpos($pathinfo, '/news/collection') && preg_match('#^/news/collection/(?P<collection>[^/\\.]++)(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_collection']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\CollectionPostArchiveAction',  '_format' => 'html',));
            }

            // sonata_news_comment_moderation
            if (0 === strpos($pathinfo, '/news/comment/moderation') && preg_match('#^/news/comment/moderation/(?P<commentId>[^/]++)/(?P<hash>[^/]++)/(?P<status>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_comment_moderation']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\ModerateCommentAction',));
            }

            // sonata_news_view
            if (preg_match('#^/news/(?P<permalink>.+?)(?:\\.(?P<_format>html|rss))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_news_view']), array (  '_controller' => 'Sonata\\NewsBundle\\Action\\ViewPostAction',  '_format' => 'html',));
            }

            // sonata_news_home
            if ('/news' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_news_archive',  '_route' => 'sonata_news_home',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_sonata_news_home;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonata_news_home'));
                }

                return $ret;
            }
            not_sonata_news_home:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

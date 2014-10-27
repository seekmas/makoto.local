<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // makoto_admin_homepage
        if (0 === strpos($pathinfo, '/admin_makoto/hello') && preg_match('#^/admin_makoto/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'makoto_admin_homepage')), array (  '_controller' => 'Makoto\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        // makoto_cms_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'makoto_cms_homepage');
            }

            return array (  '_controller' => 'Makoto\\CmsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'makoto_cms_homepage',);
        }

        if (0 === strpos($pathinfo, '/catalogue')) {
            // cms_catalogue
            if (preg_match('#^/catalogue/(?P<alias>[^/_]++)(?:_(?P<page>[^/\\.]++)(?:\\.(?P<_format>html|jsp|makoto|php|page))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_catalogue')), array (  '_controller' => 'Makoto\\CmsBundle\\Controller\\CatalogueController::indexAction',  'page' => 1,  '_format' => 'jsp',));
            }

            // cms_catalogue_default
            if (preg_match('#^/catalogue(?:\\.(?P<_format>html|jsp|makoto|php|page))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_catalogue_default')), array (  '_controller' => 'Makoto\\CmsBundle\\Controller\\CatalogueController::indexAction',  '_format' => 'jsp',));
            }

        }

        // cms_catalogue_article
        if (0 === strpos($pathinfo, '/p') && preg_match('#^/p/(?P<alias>[^/\\.]++)(?:\\.(?P<_format>html|jsp|makoto|php|page))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_catalogue_article')), array (  '_controller' => 'Makoto\\CmsBundle\\Controller\\ArticleController::indexAction',  '_format' => 'jsp',));
        }

        // cms_makoto_pages
        if (0 === strpos($pathinfo, '/m') && preg_match('#^/m/(?P<template_name>[^/\\.]++)(?:\\.(?P<_format>html|jsp|makoto|php|page))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_makoto_pages')), array (  '_controller' => 'Makoto\\CmsBundle\\Controller\\DefaultController::makotoAction',  '_format' => 'jsp',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/makoto/admin')) {
                if (0 === strpos($pathinfo, '/admin/makoto/admin/post')) {
                    // admin_makoto_admin_post_list
                    if ($pathinfo === '/admin/makoto/admin/post/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_list',  '_route' => 'admin_makoto_admin_post_list',);
                    }

                    // admin_makoto_admin_post_create
                    if ($pathinfo === '/admin/makoto/admin/post/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_create',  '_route' => 'admin_makoto_admin_post_create',);
                    }

                    // admin_makoto_admin_post_batch
                    if ($pathinfo === '/admin/makoto/admin/post/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_batch',  '_route' => 'admin_makoto_admin_post_batch',);
                    }

                    // admin_makoto_admin_post_edit
                    if (preg_match('#^/admin/makoto/admin/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_post_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_edit',));
                    }

                    // admin_makoto_admin_post_delete
                    if (preg_match('#^/admin/makoto/admin/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_post_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_delete',));
                    }

                    // admin_makoto_admin_post_show
                    if (preg_match('#^/admin/makoto/admin/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_post_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_show',));
                    }

                    // admin_makoto_admin_post_export
                    if ($pathinfo === '/admin/makoto/admin/post/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_makoto_admin_post_export',  '_route' => 'admin_makoto_admin_post_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/makoto/admin/postcategory')) {
                        // admin_makoto_admin_postcategory_list
                        if ($pathinfo === '/admin/makoto/admin/postcategory/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_list',  '_route' => 'admin_makoto_admin_postcategory_list',);
                        }

                        // admin_makoto_admin_postcategory_create
                        if ($pathinfo === '/admin/makoto/admin/postcategory/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_create',  '_route' => 'admin_makoto_admin_postcategory_create',);
                        }

                        // admin_makoto_admin_postcategory_batch
                        if ($pathinfo === '/admin/makoto/admin/postcategory/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_batch',  '_route' => 'admin_makoto_admin_postcategory_batch',);
                        }

                        // admin_makoto_admin_postcategory_edit
                        if (preg_match('#^/admin/makoto/admin/postcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_postcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_edit',));
                        }

                        // admin_makoto_admin_postcategory_delete
                        if (preg_match('#^/admin/makoto/admin/postcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_postcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_delete',));
                        }

                        // admin_makoto_admin_postcategory_show
                        if (preg_match('#^/admin/makoto/admin/postcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_postcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_show',));
                        }

                        // admin_makoto_admin_postcategory_export
                        if ($pathinfo === '/admin/makoto/admin/postcategory/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.post_category',  '_sonata_name' => 'admin_makoto_admin_postcategory_export',  '_route' => 'admin_makoto_admin_postcategory_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/makoto/admin/timeline')) {
                    // admin_makoto_admin_timeline_list
                    if ($pathinfo === '/admin/makoto/admin/timeline/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_list',  '_route' => 'admin_makoto_admin_timeline_list',);
                    }

                    // admin_makoto_admin_timeline_create
                    if ($pathinfo === '/admin/makoto/admin/timeline/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_create',  '_route' => 'admin_makoto_admin_timeline_create',);
                    }

                    // admin_makoto_admin_timeline_batch
                    if ($pathinfo === '/admin/makoto/admin/timeline/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_batch',  '_route' => 'admin_makoto_admin_timeline_batch',);
                    }

                    // admin_makoto_admin_timeline_edit
                    if (preg_match('#^/admin/makoto/admin/timeline/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_timeline_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_edit',));
                    }

                    // admin_makoto_admin_timeline_delete
                    if (preg_match('#^/admin/makoto/admin/timeline/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_timeline_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_delete',));
                    }

                    // admin_makoto_admin_timeline_show
                    if (preg_match('#^/admin/makoto/admin/timeline/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_timeline_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_show',));
                    }

                    // admin_makoto_admin_timeline_export
                    if ($pathinfo === '/admin/makoto/admin/timeline/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.timeline.blocks',  '_sonata_name' => 'admin_makoto_admin_timeline_export',  '_route' => 'admin_makoto_admin_timeline_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/makoto/admin/block')) {
                    // admin_makoto_admin_block_list
                    if ($pathinfo === '/admin/makoto/admin/block/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_list',  '_route' => 'admin_makoto_admin_block_list',);
                    }

                    // admin_makoto_admin_block_create
                    if ($pathinfo === '/admin/makoto/admin/block/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_create',  '_route' => 'admin_makoto_admin_block_create',);
                    }

                    // admin_makoto_admin_block_batch
                    if ($pathinfo === '/admin/makoto/admin/block/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_batch',  '_route' => 'admin_makoto_admin_block_batch',);
                    }

                    // admin_makoto_admin_block_edit
                    if (preg_match('#^/admin/makoto/admin/block/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_block_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_edit',));
                    }

                    // admin_makoto_admin_block_delete
                    if (preg_match('#^/admin/makoto/admin/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_block_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_delete',));
                    }

                    // admin_makoto_admin_block_show
                    if (preg_match('#^/admin/makoto/admin/block/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_makoto_admin_block_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_show',));
                    }

                    // admin_makoto_admin_block_export
                    if ($pathinfo === '/admin/makoto/admin/block/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.blocks',  '_sonata_name' => 'admin_makoto_admin_block_export',  '_route' => 'admin_makoto_admin_block_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/media/ckeditor_')) {
                            // admin_sonata_media_media_ckeditor_browser
                            if ($pathinfo === '/admin/sonata/media/media/ckeditor_browser') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_browser',  '_route' => 'admin_sonata_media_media_ckeditor_browser',);
                            }

                            // admin_sonata_media_media_ckeditor_upload
                            if ($pathinfo === '/admin/sonata/media/media/ckeditor_upload') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_upload',  '_route' => 'admin_sonata_media_media_ckeditor_upload',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        // ckeditor_browser
        if ($pathinfo === '/ckeditor_browser') {
            return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_route' => 'ckeditor_browser',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

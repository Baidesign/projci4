<?php

namespace Config;

use App\Controllers\About;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
#$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/', [About::class,'index']);

// this is to access the method product in the 
// Help controller and route it directly 
$routes->add('product', 'Help::product');

//to simple route to rproducts
$routes->add('prdcts', 'Product::prdcts');

//simple route to rout view page 
$routes->add('rout', 'Product::rout');

// $routes->add('blog', function(){
//     return "<h1> this is a blog </h1>";
// });

// to create a group of urls
 
$routes->group('admin',function($routes){
    //here is where we create our routes
    //we create our routes here
    $routes->add('users', 'Admin\Users::getMyUsers');
    $routes->add('user', 'Admin\Users::index');
    $routes->add('product/(:any)', 'Admin\Help::msee/$1');

    ////our routes for blog
    /*
    here we also se how we can use same view page
    with different http request
    */
    $routes->add('blog', 'Admin\Blog::index');
    $routes->get('blog/new', 'Admin\Blog::createNew');
    $routes->post('blog/new', 'Admin\Blog::saveBlog');
});

//create a route for with post and get method

//redoing the creation of group routes
//we also redoing the creation

$routes->group('redo',function($routes){
    $routes->add('meso', 'Meso\Blog::index');
    $routes->get('meso/new', 'Meso\Blog::createApage');
    $routes->post('meso/new', 'Meso\Blog::saveApage');
});

$routes->group('blog',function($routes){
    $routes->add('bloggy', 'Viewr\Blog::index');
    $routes->post('post/new/(:$id)', 'Viewr\Blog::post/$id');
});

$routes->add('bloggy', 'Viewr\Blog::index');
$routes->post('post', 'Viewr\Blog::post');
$routes->add('home', 'Viewr\Blog::home');
$routes->add('new', 'Viewr\Blog::new');
$routes->add('combo', 'Viewr\Blog::combo');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

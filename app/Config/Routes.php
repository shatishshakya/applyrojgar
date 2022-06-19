<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers\Admin');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
#$routes->get('dashboard', 'Home::dashboard');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}



$routes->get('admin', 'Home::index');
$routes->post('sing-in', 'LoginController::signinAuth');

$routes->group('admin','', static function ($routes) {
    $routes->get('dashboard', 'Home::dashboard');


    $routes->get('gov-job-post', 'Home::gov_job_post');

    $routes->get('answer-key', 'Home::answer_key');
    $routes->post('store-answer-key', 'Home::storeAnswerKey');
    
    $routes->get('admit-card', 'Home::admit_card');
    $routes->post('store-admin-card', 'Home::storeAdmitCard');
    
    $routes->get('syllabus', 'Home::syllabus');
    $routes->post('syllabus-post', 'Home::storeSyllabus');

    $routes->get('admission', 'Home::admission',);
    $routes->post('admission-post', 'Home::storeAdmission');

    $routes->get('study-materials', 'Home::study_materials',);
    $routes->post('store-study-materials', 'Home::storeStudyMaterials');


    $routes->get('private-job', 'Home::private_job',);

    $routes->get('important-link', 'Home::important_link');
    $routes->post('important-link-form', 'Home::storeImportantLink');

    $routes->get('offline-job-form', 'Home::offline_job_form',);
    $routes->get('vedio-link', 'Home::vedio_link',);
    $routes->get('rojgar-news', 'Home::rojgar_news',);


 //<!-- Report URL -->
    $routes->get('admit-card-report', 'Home::admit_card_report',);
    $routes->get('syllabus-report', 'Home::syllabus_report',);
    $routes->get('admission-report', 'Home::admission_report',);
    $routes->get('study-materials-report', 'Home::study_materials_report',);
    $routes->get('private-job', 'Home::private_job',);
    $routes->get('private-job-report', 'Home::private_job_report',);
    $routes->get('important-link-report', 'Home::important_link_report',);
    $routes->get('vedio-link-report', 'Home::vedio_link_report',);
    $routes->get('rojgar-news-report', 'Home::rojgar_news_report',);
    
   
    
});






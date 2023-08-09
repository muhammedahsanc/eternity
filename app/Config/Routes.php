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
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('loginPage');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'User::login_page');
$routes->get('/person_signup_page', 'User::person_signup');
$routes->get('/company_signup_page', 'User::company_signup');
$routes->get('/select-cards', 'User::cards');
$routes->get('/profile-person', 'User::person_profile');
$routes->get('/company-person', 'User::company_profile');
$routes->post('/cominsert', 'User::insert_com_signup');
$routes->post('/login-check', 'User::Login');
$routes->post('/profile-insert', 'User::Insert_com_Profile');
$routes->post('/person-insert', 'User::insert_person_signup');

$routes->get('/backcomdash','User::Dashboard');
$routes->get('/per','User::koo');
$routes->get('/hmm','User::hr');
$routes->get('/jo','User::job');
$routes->get('/sr','User::search');
$routes->get('/joobtable','User::jobtable');

$routes->post('/inserPerson','User::insert_person_profile');

$routes->get('/usrnme','User::tabledata');
$routes->post('/insertJob','User::insertJobpost');
$routes->get('/editjob/(:num)','User::EditJobPost/$1');
$routes->post('/UpdateJob','User::UpdateJobpost');
$routes->get('/dltjob/(:num)','User::deleteJobData/$1');
$routes->get('/repickdltjob/(:num)','User::retakedltJobData/$1');

$routes->get('/Proff','User::ProffetionalData');
$routes->get('/ProffDataTable','User::ProffetionalTable');
$routes->get('/logout','User::Logout');
$routes->get('/AllJobs','User::jobData');
$routes->get('/viewjob','User::jobView');
$routes->get('/cmname','User::companies');
$routes->get('/com','User::Viewcompanies');
$routes->get('/backofst','User::Person_Dashboard');
$routes->get('/backofpro','User::proffetional_Dashboard');
$routes->get('/JobsProProfile','User::ProffetionalProfile');
$routes->get('/stdJobView','User::StudJobView');
$routes->get('/pros','User::Proffetion');
$routes->get('/std-view-pros','User::std_viewProffetionals');

$routes->get('/comView','User::CompaniesViews');
$routes->get('/comHome','User::CompanyHome');
$routes->get('/studhome','User::stdHome');
$routes->get('/prohome','User::proffetional_home');


$routes->get('/guid','User::StudViewGuidance');
$routes->get('/proviewpros','User::pro_view_pro');
$routes->get('/proviewcom','User::proviewscompanies');
$routes->get('/editperson/(:num)','User::EditpersonProfile/$1');






















































// We get a performance increase by specifying the default
// route since we don't have to scan directories.


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

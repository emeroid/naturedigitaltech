<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/session/check', function () {
    
    if(count(\Cart::getContent()) === 0){

        return 'success';
    }
    else{

      return 'nothing';
    }

  });

/*

Route::get('/cookie', function (Request $request) {

$decryptedString = \Crypt::decryptString(Cookie::get('referral'));
   
    return $decryptedString;
});
*/

Route::get('/', function () {

  $slides = \App\Models\Home\Slider::get();
  $content = \App\Models\Home\HomeContent::get();
    return view('FrontEnd.home', compact('slides', 'content'));
});
//+++++++++++ Front End ++++++++++++++++++++++++++++//
//========== About section ==========//
Route::get('/about/faq', function () {
    $faq = \App\Models\About\FAQ::get();
    return view('FrontEnd.About.faq', compact('faq'));
});

Route::get('/about/company', function () {
    
    $company = \App\Models\About\Company::first();
    return view('FrontEnd.About.company', compact('company'));

});

Route::get('/about/terms-condition', function () {

    $term = \App\Models\Term\Terms::first();
    return view('FrontEnd.About.terms', compact('term'));

});

Route::get('/about/contact', function () {
    return view('FrontEnd.About.contact');
});

Route::post('/about/contact/mail', 'About\ContactController@store')->name('contact.mail');

Route::get('/about/available/jobs', function () {

    $job = \App\Models\Jobs\AboutJob::first();
    return view('FrontEnd.About.partnership', compact('job'));
});

//========= End About section =========//

//+++++++++++++++++++++ Products +++++++++++++++++++++++//

//================== Start Frotend Product section ================//

Route::get('/product/items',  [
	'as' => 'product.items',
	'uses' => 'Product\ProductFrontController@getAll'
]);

Route::get('/product/{product}', [
	'as' => 'product.item',
	'uses' => 'Product\ProductFrontController@getOne'
]);

Route::get('/product/category/{category}', [
  'as' => 'product.category',
  'uses' => 'Product\ProductFrontController@getProductCategory'
]);

//================= Start Checkout Section ====================//

Route::get('/products/checkout', [
  'uses' => 'Checkout\CheckoutController@getCheckout',
  'as' => 'product.checkout'

]);

Route::post('/products/payment', [
  'uses' => 'Checkout\CheckoutController@storeCheckout',
  'as' => 'product.checkout.save'
]);

Route::post('/products/success', [
  'uses' => 'Checkout\CheckoutController@successCheckout',
  'as' => 'product.checkout.success'
]);

Route::post('/products/fail', [
  'uses' => 'Checkout\CheckoutController@failCheckout',
  'as' => 'product.checkout.fail'
]);

//================= End Checkout Section ====================//

//================== End Product section ================//

//================== Cart Section =======================//

Route::get('/cart/add/{id}', [

  'as' => 'cart.add',
  'uses' => 'Cart\CartController@add'

]);
Route::get('/cart/remove/{id}', [

  'as' => 'cart.remove',
  'uses' => 'Cart\CartController@remove'
  
]);

Route::post('/cart/update', [
  'as' => 'cart.update',
  'uses' => 'Cart\CartController@update'

]);

//================= End Cart Section ====================//


//+++++++++++++++++++++ Affiliate +++++++++++++++++++++++//

//================== Start Affiliate section ================//

Route::get('/affiliate/about', function () {

    $affiliate = \App\Models\Affiliate\Affiliate_Description::first();
    return view('FrontEnd.Affiliate.affiliate', compact('affiliate'));
});

Route::get('/affiliate/register', [
	'as' => 'affilate.register',
	'uses' => 'Clients\Affiliate\AffiliatesController@create'
]);

Route::post('/affiliate/register/save', [
	'as' => 'affiliate.register.save',
	'uses' => 'Clients\Affiliate\AffiliatesController@store'
]);

	Route::get('/affiliate/home', [
		'as' => 'affiliate.home',
		'uses' => 'Clients\Affiliate\AffiliateHomeController@getAffiliateTransaction'
	]);

	Route::get('/affiliate/profile', [
		'as' => 'affiliate.profile',
		'uses' => 'Clients\Affiliate\AffiliateHomeController@getAffiliateProfile'
	]);

	Route::post('/affiliate/profile/update', [
		'as' => 'affiliate.profile.update',
		'uses' => 'Clients\Affiliate\AffiliateHomeController@setProfileUpdate'
	]);

	Route::get('/affiliate/referrer', [
		'as' => 'affiliate.referrer',
		'uses' => 'Clients\Affiliate\AffiliateHomeController@getAffiliateReferer'
	]);


//================== End Affiliate section ================//


//+++++++++++++++++++++ Services +++++++++++++++++++++++//

//================== Start training section ================//



Route::get('/services/skill/request', [
	'uses' => 'Clients\Request\RequestSkillController@create',
	'as' => 'services.skill.request'
]);

Route::post('/services/skill/request/save', [
	'uses' => 'Clients\Request\RequestSkillController@store',
	'as' => 'services.skill.request.save'
]);

//++++++++++++++++++Training+++++++++++++++++++++++++++++
Route::get('/training/schedule', function () {

    $onlines = \App\Models\Training\Online::LatestFirst()->paginate(5, ['*'], 'online');
    $offlines = \App\Models\Training\Offline::LatestFirst()->paginate(5, ['*'], 'offline');
    $lives = \App\Models\Training\live::LatestFirst()->paginate(5, ['*'], 'live');
    
    return view('FrontEnd.Services.Training.training', compact('onlines','offlines','lives'));

});

Route::get('/training/register',[
	'uses' => 'Training\CourseRegisterController@create',
	'as' => 'training.register'
]);

Route::post('/training/register.save',[
	'uses' => 'Training\CourseRegisterController@store',
	'as' => 'training.register.save'
]);

Route::get('/training/description', function () {

    $training = \App\Models\Training\Training_description::first();
    return view('FrontEnd.Services.Training.description', compact('training'));

});

//++++++++++++++++++++++Greeleaf section +++++++++++++++++++

/*Route::get('/greenleaf/service-center', function () {
    return view('FrontEnd.Greenleaf.greenleaf');
});

Route::get('/greenleaf/benefits', function () {
    return view('FrontEnd.Greenleaf.greenleafbenefit');
});
*/

//+++++++++++++++++++++Greenleaf section ends+++++++++++++++

//++++++++++++++++++++Job++++++++++++++++++++++++++++

Route::get('/job/register', [
		'as' => 'job.register',
		'uses' => 'Clients\Worker\JobRegisterController@create'
]);

Route::post('/job/register/save', [
		'as' => 'job.register.save',
		'uses' => 'Clients\Worker\JobRegisterController@store'
]);

Route::get('/job/all', function () {
    $skills = \App\Models\Jobs\JobSkill::get();
    return view('FrontEnd.Services.Partner.jobskill', compact('skills'));
});

//+++++++++++++++End Training++++++++++++++++++++++++++++


//================== End Services section ================//

//+++++++++++++++++++++++ Back End section ++++++++++++++++++++++++++
Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {

   Route::get('/page/company', [

   		'uses'=>'About\CompanyController@show',
		  'as'=>'admin.page.company.show',
   ]);

   Route::get('/page/company/edit/{id}', [

   		'uses'=>'About\CompanyController@edit',
		'as'=>'admin.page.company.edit',
   ]);

   Route::post('/page/company/update', [

   		'uses'=>'About\CompanyController@update',
		'as'=>'admin.page.company.update',
   ]);

   //++++++++++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('/page/faq', [

   		'uses'=>'FAQController@index',
		'as'=>'admin.page.faq.index',
   ]);

   Route::get('/page/faq/edit/{id}', [

   		'uses'=>'FAQController@edit',
		'as'=>'admin.page.faq.edit',
   ]);

   Route::post('/page/faq/update', [

   		'uses'=>'FAQController@update',
		'as'=>'admin.page.faq.update',
   ]);

   Route::post('/page/faq/save', [

   		'uses'=>'FAQController@store',
		'as'=>'admin.page.faq.save',
   ]);

   Route::get('/page/faq/create', [

   		'uses'=>'FAQController@create',
		'as'=>'admin.page.faq.create',
   ]);

    Route::get('/page/faq/delete/{id}', [

   		'uses'=>'FAQController@destroy',
		'as'=>'admin.page.faq.delete',
   ]);

  //++++++++++++++++++++++ start terms page +++++++++++++++++++

    Route::get('/page/terms-condition', 'About\TermsController@show')->name('admin.page.terms');

    Route::get('/page/terms/{id}/edit', 'About\TermsController@edit')->name('admin.page.terms.edit');

    Route::post('/page/terms/update', 'About\TermsController@update')->name('admin.page.terms.update');



    //++++++++++++++++++++++ end terms page +++++++++++++++++++

    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
	Route::get('/client/affiliate', [

   		'uses'=>'Clients\Affiliate\AffiliateDescriptionController@index',
		'as'=>'admin.client.affiliate.index',
   ]);

    Route::get('/client/affiliate/description', [

   		'uses'=>'Clients\Affiliate\AffiliateDescriptionController@show',
		'as'=>'admin.client.affiliate.desc.show',
   ]);

   Route::get('/client/affiliate/edit/{id}', [

   		'uses'=>'Clients\Affiliate\AffiliateDescriptionController@edit',
		'as'=>'admin.client.affiliate.desc.edit',
   ]);

   Route::post('/client/affiliate/update', [

   		'uses'=>'Clients\Affiliate\AffiliateDescriptionController@update',
		'as'=>'admin.client.affiliate.desc.update',
   ]);

    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('/page/job', [

   		'uses'=>'About\JobController@show',
		'as'=>'admin.page.job.show',
   ]);

   Route::get('/page/job/edit/{id}', [

   		'uses'=>'About\JobController@edit',
		'as'=>'admin.page.job.edit',
   ]);

   Route::post('/page/job/update', [

   		'uses'=>'About\JobController@update',
		'as'=>'admin.page.job.update',
   ]);

   Route::get('/client/workers', [

   		'uses'=>'Clients\Worker\JobRegisterController@index',
		'as'=>'admin.client.worker.index',
   ]);

    Route::get('/client/workers/skill', [

   		'uses'=>'Clients\Worker\WorkerController@all',
		'as'=>'admin.client.worker.skill.all',
   ]);

   Route::get('/client/workers/skill/edit/{id}', [

   		'uses'=>'Clients\Worker\WorkerController@edit',
		'as'=>'admin.client.worker.skill.edit',
   ]);

   Route::post('/client/workers/skill/update', [

   		'uses'=>'Clients\Worker\WorkerController@update',
		'as'=>'admin.client.worker.skill.update',
   ]);

   Route::post('/client/workers/skill/save', [

   		'uses'=>'Clients\Worker\WorkerController@store',
		'as'=>'admin.client.worker.skill.save',
   ]);

   Route::get('/client/workers/skill/create', [

   		'uses'=>'Clients\Worker\WorkerController@create',
		'as'=>'admin.client.worker.skill.create',
   ]);

    Route::get('/client/workers/skill/{id}', [

   		'uses'=>'Clients\Worker\WorkerController@destroy',
		'as'=>'admin.client.worker.skill.delete',
   ]);

   //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


   Route::get('/category', [

   		'uses'=>'Category\CategoryController@index',
		'as'=>'admin.category.index',
   ]);

   Route::get('/category/edit/{category}', [

   		'uses'=>'Category\CategoryController@edit',
		'as'=>'admin.category.edit',
   ]);

   Route::post('/category/update', [

   		'uses'=>'Category\CategoryController@update',
		'as'=>'admin.category.update',
   ]);

   Route::post('/category/save', [

   		'uses'=>'Category\CategoryController@store',
		'as'=>'admin.category.save',
   ]);

   Route::get('/category/create', [

   		'uses'=>'Category\CategoryController@create',
		'as'=>'admin.category.create',
   ]);

    Route::get('/category/delete/{category}', [

   		'uses'=>'Category\CategoryController@destroy',
		'as'=>'admin.category.delete',
   ]);

    //+++++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('/product', [

   		'uses'=>'product\productController@index',
		'as'=>'admin.product.index',
   ]);

   Route::get('/product/edit/{product}', [

   		'uses'=>'product\productController@edit',
		'as'=>'admin.product.edit',
   ]);

   Route::post('/product/update', [

   		'uses'=>'product\productController@update',
		'as'=>'admin.product.update',
   ]);

   Route::post('/product/save', [

   		'uses'=>'product\productController@store',
		'as'=>'admin.product.save',
   ]);

   Route::get('/product/create', [

   		'uses'=>'product\productController@create',
		'as'=>'admin.product.create',
   ]);

    Route::get('/product/delete/{product}', [

   		'uses'=>'product\productController@destroy',
		'as'=>'admin.product.delete',
   ]);

    Route::get('/product/delete/image/{id}', [

      'uses'=>'product\productController@deleteImage',
    'as'=>'admin.product.image.delete',
   ]);


    //+++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('client/skill/request', [
	'uses' => 'Clients\Request\RequestSkillController@index',
	'as' => 'admin.client.request.index'
	]);

	Route::get('client/skill/request/delete/{id}', [
	     'uses' => 'Clients\Request\RequestSkillController@destroy',
	     'as' => 'admin.client.request.delete'
	]);

  //++++++++++++++++++++ Order Section Starts +++++++++++++++++++++++++++++

  Route::get('/order', [
   		'uses'=>'Order\OrderController@index',
		  'as'=>'admin.order.index',
   ]);

  Route::post('/order/invoice', [
      'uses' => 'Order\OrderController@invoice',
      'as' => 'admin.order.invoice'
  ]);

  Route::post('/order/delivered', [
      'uses' => 'Order\OrderController@markDelivered',
      'as' => 'admin.order.delivered'
  ]);

  Route::post('/order/returned', [
      'uses' => 'Order\OrderController@markReturned',
      'as' => 'admin.order.returned'
  ]);

  Route::post('/order/transit', [
      'uses' => 'Order\OrderController@markTransit',
      'as' => 'admin.order.transit'
  ]);

  //++++++++++++++++++++++++ Home Content ++++++++++++++++++++++++++++++

  Route::get('/settings/home-contents', 'Home\HomeContentController@index')->name('admin.setting.home.content');

  Route::get('/settings/home-create', 'Home\HomeContentController@create')->name('admin.setting.home.create');

  Route::get('/settings/{id}/home-edit', 'Home\HomeContentController@edit')->name('admin.setting.home.edit');

  Route::get('/settings/{id}/home-delete', 'Home\HomeContentController@destroy')->name('admin.setting.home.delete');

  Route::post('/settings/home-save', 'Home\HomeContentController@store')->name('admin.setting.home.save');

  Route::post('/settings/home-update', 'Home\HomeContentController@update')->name('admin.setting.home.update');

  //++++++++++++++++++++++++ Home Content Ends +++++++++++++++++++++++++


    //++++++++++++++++ Slider Content Starts +++++++++++++++++++++++++++

  Route::get('/settings/slider', 'Home\SliderController@index')->name('admin.setting.slider');

  Route::get('/settings/slider/create', 'Home\SliderController@create')->name('admin.setting.slider.create');

  Route::get('/settings/{id}/slider-edit', 'Home\SliderController@edit')->name('admin.setting.slider.edit');

  Route::get('/settings/{id}/slider-delete', 'Home\SliderController@destroy')->name('admin.setting.slider.delete');

  Route::post('/settings/slider-save', 'Home\SliderController@store')->name('admin.setting.slider.save');
  
  Route::post('/settings/slider-update', 'Home\SliderController@update')->name('admin.setting.slider.update');

  //++++++++++++++++++++++++ Slider Content Ends +++++++++++++++++++++++++


  //+++++++++++++++++++++ Order Section Ends ++++++++++++++++++++++++++++

    Route::get('/training/schedule/live', [

   		'uses'=>'Training\liveController@index',
		'as'=>'admin.training.schedule.live.index',
   ]);

    Route::get('/training/trainee', [

   		'uses'=>'Training\CourseRegisterController@index',
		'as'=>'admin.training.trainee.index',
   ]);

   Route::get('/training/schedule/live/edit/{id}', [

   		'uses'=>'Training\liveController@edit',
		'as'=>'admin.training.schedule.live.edit',
   ]);

   Route::post('/training/schedule/live/update', [

   		'uses'=>'Training\liveController@update',
		'as'=>'admin.training.schedule.live.update',
   ]);

   Route::post('/training/schedule/live/save', [

   		'uses'=>'Training\liveController@store',
		'as'=>'admin.training.schedule.live.save',
   ]);

   Route::get('/training/schedule/live/create', [

   		'uses'=>'Training\LiveController@create',
		'as'=>'admin.training.schedule.live.create',
   ]);

    Route::get('/training/schedule/live/delete/{id}', [

   		'uses'=>'Training\LiveController@destroy',
		'as'=>'admin.training.schedule.live.delete',
   ]);

    //+++++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('/training/schedule/offline', [

   		'uses'=>'Training\offlineController@index',
		'as'=>'admin.training.schedule.offline.index',
   ]);

   Route::get('/training/schedule/offline/edit/{id}', [

   		'uses'=>'Training\offlineController@edit',
		'as'=>'admin.training.schedule.offline.edit',
   ]);

   Route::post('/training/schedule/offline/update', [

   		'uses'=>'Training\offlineController@update',
		'as'=>'admin.training.schedule.offline.update',
   ]);

   Route::post('/training/schedule/offline/save', [

   		'uses'=>'Training\offlineController@store',
		'as'=>'admin.training.schedule.offline.save',
   ]);

   Route::get('/training/schedule/offline/create', [

   		'uses'=>'Training\offlineController@create',
		'as'=>'admin.training.schedule.offline.create',
   ]);

    Route::get('/training/schedule/offline/delete/{id}', [

   		'uses'=>'Training\offlineController@destroy',
		'as'=>'admin.training.schedule.offline.delete',
   ]);

    //+++++++++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('/training/schedule/online', [

   		'uses'=>'Training\onlineController@index',
		'as'=>'admin.training.schedule.online.index',
   ]);

   Route::get('/training/schedule/online/edit/{id}', [

   		'uses'=>'Training\onlineController@edit',
		'as'=>'admin.training.schedule.online.edit',
   ]);

   Route::post('/training/schedule/online/update', [

   		'uses'=>'Training\onlineController@update',
		'as'=>'admin.training.schedule.online.update',
   ]);

   Route::post('/training/schedule/online/save', [

   		'uses'=>'Training\onlineController@store',
		'as'=>'admin.training.schedule.online.save',
   ]);

   Route::get('/training/schedule/online/create', [

   		'uses'=>'Training\onlineController@create',
		'as'=>'admin.training.schedule.online.create',
   ]);

    Route::get('/training/schedule/online/delete/{id}', [

   		'uses'=>'Training\onlineController@destroy',
		'as'=>'admin.training.schedule.online.delete',
   ]);



    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    Route::get('/training/description', [

   		'uses'=>'Training\TrainingDescriptionController@show',
		'as'=>'admin.training.description.show',
   ]);

   Route::get('/training/description/edit/{id}', [

   		'uses'=>'Training\TrainingDescriptionController@edit',
		'as'=>'admin.training.description.edit',
   ]);

   Route::post('/training/description/update', [

   		'uses'=>'Training\TrainingDescriptionController@update',
		'as'=>'admin.training.description.update',
   ]);

  //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   Route::get('shutdown', function(){
      touch(storage_path().'/framework/down');
      return redirect()->back()->with("success", "Application is now down.");
   });
   
/*Route::get('/login', 'Auth\Admin\AdminController@showLoginForm')->name('admin');
Route::post('/login/save', 'Auth\Admin\AdminLoginController@login')->name('admin.login.submit');
*/

});

Auth::routes();

Route::post('/admin/login', 'Auth\LoginController@adminLogin');
Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');

//Route::get('/home', 'HomeController@index')->name('home');

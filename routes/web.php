<?php

Route::view('/', 'welcome');
Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Segment
    Route::delete('segments/destroy', 'SegmentController@massDestroy')->name('segments.massDestroy');
    Route::post('segments/parse-csv-import', 'SegmentController@parseCsvImport')->name('segments.parseCsvImport');
    Route::post('segments/process-csv-import', 'SegmentController@processCsvImport')->name('segments.processCsvImport');
    Route::resource('segments', 'SegmentController');

    // Clasification
    Route::delete('clasifications/destroy', 'ClasificationController@massDestroy')->name('clasifications.massDestroy');
    Route::resource('clasifications', 'ClasificationController');

    // Provider
    Route::delete('providers/destroy', 'ProviderController@massDestroy')->name('providers.massDestroy');
    Route::post('providers/media', 'ProviderController@storeMedia')->name('providers.storeMedia');
    Route::post('providers/ckmedia', 'ProviderController@storeCKEditorImages')->name('providers.storeCKEditorImages');
    Route::resource('providers', 'ProviderController');

    // Group
    Route::delete('groups/destroy', 'GroupController@massDestroy')->name('groups.massDestroy');
    Route::post('groups/parse-csv-import', 'GroupController@parseCsvImport')->name('groups.parseCsvImport');
    Route::post('groups/process-csv-import', 'GroupController@processCsvImport')->name('groups.processCsvImport');
    Route::resource('groups', 'GroupController');

    // Status
    Route::delete('statuses/destroy', 'StatusController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Witness Category
    Route::delete('witness-categories/destroy', 'WitnessCategoryController@massDestroy')->name('witness-categories.massDestroy');
    Route::resource('witness-categories', 'WitnessCategoryController');

    // Witness
    Route::delete('witnesses/destroy', 'WitnessController@massDestroy')->name('witnesses.massDestroy');
    Route::post('witnesses/media', 'WitnessController@storeMedia')->name('witnesses.storeMedia');
    Route::post('witnesses/ckmedia', 'WitnessController@storeCKEditorImages')->name('witnesses.storeCKEditorImages');
    Route::resource('witnesses', 'WitnessController');

    // Checkin
    Route::delete('checkins/destroy', 'CheckinController@massDestroy')->name('checkins.massDestroy');
    Route::resource('checkins', 'CheckinController');

    // Checkout
    Route::delete('checkouts/destroy', 'CheckoutController@massDestroy')->name('checkouts.massDestroy');
    Route::resource('checkouts', 'CheckoutController');

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::post('clients/media', 'ClientController@storeMedia')->name('clients.storeMedia');
    Route::post('clients/ckmedia', 'ClientController@storeCKEditorImages')->name('clients.storeCKEditorImages');
    Route::post('clients/parse-csv-import', 'ClientController@parseCsvImport')->name('clients.parseCsvImport');
    Route::post('clients/process-csv-import', 'ClientController@processCsvImport')->name('clients.processCsvImport');
    Route::resource('clients', 'ClientController');

    // Regions
    Route::delete('regions/destroy', 'RegionsController@massDestroy')->name('regions.massDestroy');
    Route::resource('regions', 'RegionsController');

    // Place
    Route::delete('places/destroy', 'PlaceController@massDestroy')->name('places.massDestroy');
    Route::resource('places', 'PlaceController');

    // Zone
    Route::delete('zones/destroy', 'ZoneController@massDestroy')->name('zones.massDestroy');
    Route::resource('zones', 'ZoneController');

    // Brand
    Route::delete('brands/destroy', 'BrandController@massDestroy')->name('brands.massDestroy');
    Route::resource('brands', 'BrandController');

    // Variante
    Route::delete('variantes/destroy', 'VarianteController@massDestroy')->name('variantes.massDestroy');
    Route::resource('variantes', 'VarianteController');

    // Visit Report
    Route::delete('visit-reports/destroy', 'VisitReportController@massDestroy')->name('visit-reports.massDestroy');
    Route::resource('visit-reports', 'VisitReportController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Segment
    Route::delete('segments/destroy', 'SegmentController@massDestroy')->name('segments.massDestroy');
    Route::resource('segments', 'SegmentController');

    // Clasification
    Route::delete('clasifications/destroy', 'ClasificationController@massDestroy')->name('clasifications.massDestroy');
    Route::resource('clasifications', 'ClasificationController');

    // Provider
    Route::delete('providers/destroy', 'ProviderController@massDestroy')->name('providers.massDestroy');
    Route::post('providers/media', 'ProviderController@storeMedia')->name('providers.storeMedia');
    Route::post('providers/ckmedia', 'ProviderController@storeCKEditorImages')->name('providers.storeCKEditorImages');
    Route::resource('providers', 'ProviderController');

    // Group
    Route::delete('groups/destroy', 'GroupController@massDestroy')->name('groups.massDestroy');
    Route::resource('groups', 'GroupController');

    // Status
    Route::delete('statuses/destroy', 'StatusController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Witness Category
    Route::delete('witness-categories/destroy', 'WitnessCategoryController@massDestroy')->name('witness-categories.massDestroy');
    Route::resource('witness-categories', 'WitnessCategoryController');

    // Witness
    Route::delete('witnesses/destroy', 'WitnessController@massDestroy')->name('witnesses.massDestroy');
    Route::post('witnesses/media', 'WitnessController@storeMedia')->name('witnesses.storeMedia');
    Route::post('witnesses/ckmedia', 'WitnessController@storeCKEditorImages')->name('witnesses.storeCKEditorImages');
    Route::resource('witnesses', 'WitnessController');

    // Checkin
    Route::delete('checkins/destroy', 'CheckinController@massDestroy')->name('checkins.massDestroy');
    Route::resource('checkins', 'CheckinController');

    // Checkout
    Route::delete('checkouts/destroy', 'CheckoutController@massDestroy')->name('checkouts.massDestroy');
    Route::resource('checkouts', 'CheckoutController');

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::post('clients/media', 'ClientController@storeMedia')->name('clients.storeMedia');
    Route::post('clients/ckmedia', 'ClientController@storeCKEditorImages')->name('clients.storeCKEditorImages');
    Route::resource('clients', 'ClientController');

    // Regions
    Route::delete('regions/destroy', 'RegionsController@massDestroy')->name('regions.massDestroy');
    Route::resource('regions', 'RegionsController');

    // Place
    Route::delete('places/destroy', 'PlaceController@massDestroy')->name('places.massDestroy');
    Route::resource('places', 'PlaceController');

    // Zone
    Route::delete('zones/destroy', 'ZoneController@massDestroy')->name('zones.massDestroy');
    Route::resource('zones', 'ZoneController');

    // Brand
    Route::delete('brands/destroy', 'BrandController@massDestroy')->name('brands.massDestroy');
    Route::resource('brands', 'BrandController');

    // Variante
    Route::delete('variantes/destroy', 'VarianteController@massDestroy')->name('variantes.massDestroy');
    Route::resource('variantes', 'VarianteController');

    // Visit Report
    Route::delete('visit-reports/destroy', 'VisitReportController@massDestroy')->name('visit-reports.massDestroy');
    Route::resource('visit-reports', 'VisitReportController');

    Route::get('frontend/profile', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile/password', 'ProfileController@password')->name('profile.password');
});

<?php


/*Admin Channel CRUD*/
Route::group(['middleware' =>'admin:admin'],function (){
    Route::resource('admin/channels','ChannelController');
    Route::resource('admin/tags','TagsController');
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::post('admin/logout', 'AdminsController@logout')->name('admin.logout');
    Route::get('admin/profile', 'AdminsController@profilecreate')->name('admin.profile.create');
    Route::post('admin/profile','AdminsController@update')->name('admin.profile.update');
    Route::get('admin/users','BackendsController@users')->name('users.index');
    Route::delete('admin/user/delete/{id}','BackendsController@delete')->name('user.destroy');
    Route::get('admin/settings','BackendsController@settings')->name('settings.index');
    Route::post('admin/settings/update','BackendsController@settingupdate')->name('settings.update');
    Route::get('admin/discussions','BackendsController@discussions')->name('discussions.index');
    Route::get('admin/accept/{id}','BackendsController@accept')->name('discussion.accept');
    Route::get('admin/reject/{id}','BackendsController@reject')->name('discussion.reject');
    Route::delete('admin/discussion/delete/{id}','BackendsController@destroy')->name('discussion.delete');
    Route::get('/dashboard/index', 'BackendsController@index')->name('dashboard.index');
});

/*Auth User Discussion Add And Replay Watch */
Route::group(['middleware'=>'auth'],function(){
    /* Get Routes */
    Route::get('reply/like/{id}','ReplyController@like')->name('reply.like');
    Route::get('reply/unlike/{id}','ReplyController@unlike')->name('reply.unlike');
    Route::get('reply/edit/{id}','ReplyController@edit')->name('reply.edit');
    Route::get('discussion/create','DiscussionController@create')->name('discussion.create');
    Route::get('discussion/watch/{id}','WatchersController@watch')->name('discussion.watch');
    Route::get('discussion/unwatch/{id}','WatchersController@unwatch')->name('discussion.unwatch');
    Route::get('discussion/best/answer/{id}','ReplyController@best_answer')->name('discussion.best.answer');
    Route::get('discussion/edit/{slug}','DiscussionController@edit')->name('discussion.edit');
    Route::get('discussion/delete/{id}','DiscussionController@destroy')->name('discussion.destroy');
    Route::get('/profile','FrontendsController@profilecreate')->name('profile.create');

    /* Post Routes */
    Route::post('discussions/store','DiscussionController@store')->name('discussions.store');
    Route::post('discussion/update/{id}','DiscussionController@update')->name('discussion.update');
    Route::post('discussion/reply/{id}','DiscussionController@reply')->name('discussion.reply');
    Route::post('reply/update/{id}','ReplyController@update')->name('reply.update');
    Route::post('profile','FrontendsController@update')->name('user.profile.update');

});
/*User Navigate in website*/
Route::get('/','FrontendsController@index');
Route::get('/discussion/{slug}','FrontendsController@discussion')->name('discussion.show');
Route::get('/channels','FrontendsController@channels')->name('channels');
Route::get('/channel/{id}','FrontendsController@channel')->name('single.channel');
Route::get('/open','FrontendsController@open')->name('discussion.open');
Route::get('/close','FrontendsController@close')->name('discussion.close');
Route::get('/tags','FrontendsController@tags')->name('discussion.tags');
Route::get('/tag/{id}','FrontendsController@tag')->name('tag.index');
Route::get('/watched','FrontendsController@watched')->name('discussion.watched');
Route::get('/users','FrontendsController@users')->name('discussion.users');
Route::get('/user/{id}','FrontendsController@user')->name('discussion.user');
Route::get('/forum','ForumsController@index')->name('forums.index');
Route::get('/channel/{slug}','ForumsController@channel')->name('channel');
Route::post('/results', 'FrontendsController@search')->name('search.single');
Route::get('/my','FrontendsController@my')->name('discussion.my');
Route::get('/recent','FrontendsController@recent')->name('discussion.recent');
Route::get('/about','FrontendsController@about')->name('about');
Route::get('/contact','FrontendsController@contact')->name('contact');
/* Sotial Login Routes */
Route::get('{provider}/auth', 'SocialController@auth')->name('social.auth');
Route::get('{provider}/redirect', 'SocialController@callback')->name('social.callback');
Auth::routes();
/*Admin Routes*/
Route::get('admin/login', 'AdminsController@create')->name('admin.index');
Route::post('admin/login', 'AdminsController@store')->name('admin.login');


/*wild card*/
Route::get('/{path}','FrontendsController@wildcard')->where(['path' => '.*']);




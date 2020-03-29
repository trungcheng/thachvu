<?php

// \Route::group(['namespace' => 'admin'], function() {

    \Route::group(['prefix' => 'admin/access', 'middleware' => ['admin.values']], function () {

        // \Route::group(['middleware' => ['admin.guest']], function () {
            //Authentication Routes
            $this->get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
            $this->post('login', 'Admin\Auth\LoginController@login');
            $this->post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

            // // Register Routes...
            // $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            // $this->post('register', 'Auth\RegisterController@register');

            // // Password Reset Routes...
            // $this->get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            // $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            // $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            // $this->post('password/reset', 'Auth\ResetPasswordController@reset');
        // });

        // \Route::group(['middleware' => ['admin.auth']], function () {
            Route::group(['middleware' => 'admin.role:Superadmin,Admin'], function () {

                // dashboard
                $this->get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
                
                // category
                $this->get('categories', 'Admin\CategoryController@index')->name('categories');
                $this->get('categories/getAllCategories', 'Admin\CategoryController@getAllCategories');
                $this->get('categories/getAllParentCates', 'Admin\CategoryController@getAllParentCates');
                $this->get('categories/create', 'Admin\CategoryController@create')->name('category-create');
                $this->get('categories/edit/{id}', 'Admin\CategoryController@edit')->name('category-edit');
                $this->post('categories/add', 'Admin\CategoryController@add');
                $this->post('categories/update', 'Admin\CategoryController@update');
                $this->post('categories/delete', 'Admin\CategoryController@delete');

                // product
                $this->get('products', 'Admin\ProductController@index')->name('products');
                $this->get('products/getAllProducts', 'Admin\ProductController@getAllProducts');
                $this->get('products/create', 'Admin\ProductController@create')->name('product-create');
                $this->get('products/edit/{id}', 'Admin\ProductController@edit')->name('product-edit');
                $this->post('products/add', 'Admin\ProductController@add');
                $this->post('products/update', 'Admin\ProductController@update');
                $this->post('products/delete', 'Admin\ProductController@delete');

                // order
                $this->get('orders', 'Admin\OrderController@index')->name('orders');
                $this->get('orders/getAllOrders', 'Admin\OrderController@getAllOrders');
                $this->get('orders/create', 'Admin\OrderController@create')->name('order-create');
                $this->get('orders/edit/{id}', 'Admin\OrderController@edit')->name('order-edit');
                $this->post('orders/add', 'Admin\OrderController@add');
                $this->post('orders/update', 'Admin\OrderController@update');
                $this->post('orders/delete', 'Admin\OrderController@delete');

                // article
                $this->get('articles', 'Admin\ArticleController@index')->name('articles');
                $this->get('articles/getAllArticles', 'Admin\ArticleController@getAllArticles');
                $this->get('articles/create', 'Admin\ArticleController@create')->name('article-create');
                $this->get('articles/edit/{id}', 'Admin\ArticleController@edit')->name('article-edit');
                $this->post('articles/add', 'Admin\ArticleController@add');
                $this->post('articles/update', 'Admin\ArticleController@update');
                $this->post('articles/delete', 'Admin\ArticleController@delete');

                // slide
                $this->get('slides', 'Admin\SlideController@index')->name('slides');
                $this->get('slides/getAllSlides', 'Admin\SlideController@getAllSlides');
                $this->get('slides/create', 'Admin\SlideController@create')->name('slide-create');
                $this->get('slides/edit/{id}', 'Admin\SlideController@edit')->name('slide-edit');
                $this->post('slides/add', 'Admin\SlideController@add');
                $this->post('slides/update', 'Admin\SlideController@update');
                $this->post('slides/delete', 'Admin\SlideController@delete');
                $this->get('slides/loadObject/{target}', 'Admin\SlideController@loadObject')->name('slide-load-object');

                // member
                $this->get('members', 'Admin\MemberController@index')->name('members');
                $this->get('members/getAllMembers', 'Admin\MemberController@getAllMembers');
                $this->get('members/create', 'Admin\MemberController@create')->name('member-create');
                $this->get('members/edit/{id}', 'Admin\MemberController@edit')->name('member-edit');
                $this->post('members/add', 'Admin\MemberController@add');
                $this->post('members/update', 'Admin\MemberController@update');
                $this->post('members/delete', 'Admin\MemberController@delete');

                //setting
                $this->get('setting', 'Admin\SettingController@index');
                $this->post('setting/update', 'Admin\SettingController@update');

            });
        // });

    });

// });
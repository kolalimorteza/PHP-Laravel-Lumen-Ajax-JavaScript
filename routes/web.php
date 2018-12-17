<?php
$router->get('/', 'SiteController@index');
$router->get('/newsletter', 'NewsletterController@index');
$router->get('/cart/addItem/{id}', 'CartController@addItem');
$router->post('/newsletter/subscribe', [
    'as' => 'newsletter.subscribe',
    'uses' => 'NewsletterController@subscribe'
]);

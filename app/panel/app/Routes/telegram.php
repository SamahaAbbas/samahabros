<?php
/**
 * By MahmoudAp
 * Github: https://github.com/mahmoud-ap
 */

$telegramRoutes =  $app->group('/telegram', function () use ($app) {
    $app->post('', 'App\Controllers\Telegram\Main:handleRequest');
});

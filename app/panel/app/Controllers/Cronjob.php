<?php

/**
 * By MahmoudAp
 * Github: https://github.com/mahmoud-ap
 */

namespace App\Controllers;


class Cronjob extends BaseController
{

    public function master($request, $response, $arg)
    {
        $cModel = new \App\Models\Cronjob();
        $cModel->init();

    }
}

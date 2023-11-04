<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

class CalenderController extends BaseController
{
    public function index()
    {
        echo view('calender/calender');
    }
}

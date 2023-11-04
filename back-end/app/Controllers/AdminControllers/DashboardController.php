<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\AdminModels\BookingModel;

class DashboardController extends BaseController
{
    public $bookingsData = [];

    public function __construct()
    {
        if (session()->get('user_role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        $bookingModel = new BookingModel();
        try {
            $this->bookingsData = $bookingModel->getAllBookings();
        } catch (\Throwable $th) {
            //throw $th;
        }

        $data = [
            'bookingsData'  => $this->bookingsData
        ];

        echo view('dashboard/dashboard', $data);
    }
}

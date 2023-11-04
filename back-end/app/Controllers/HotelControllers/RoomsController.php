<?php

namespace App\Controllers\HotelControllers;

use App\Controllers\BaseController;
use App\Models\HotelModels\RoomModel;

class RoomsController extends BaseController
{
    public $headerData = [
        'heading'   => 'Rooms',
        'navItemRooms' => true,
        'navItemAbout' => false,
        'navItemEvents' => false,
        'navItemHome' => false,
        'navItemContact' => false,
        'navItemReservation' => false,
    ];
    public $breadcrumbsData = [
        'heading'   => 'Rooms',
    ];
    
    public $roomsData = [];
    public $footerData = [];



    public function index()
    {
        $roomModel = new RoomModel();
        try {
            $this->roomsData = $roomModel->getAllRooms();
        } catch (\Throwable $th) {
            //throw $th;
        }

        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'roomsData'                 =>  $this->roomsData,
            'footerData'                =>  $this->footerData,
        ];

        return view('rooms', $data);

    }
}

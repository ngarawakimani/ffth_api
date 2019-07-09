<?php

namespace App\Http\Controllers\Api;

use App\Child;
use App\User;
use App\Sponsorship;
use App\Crisis;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;

class StatsController extends BaseController
{
    //
    public function index(){

        $data = [
            'users' => User::count(),
            'children' => Child::count(),
            'sponsorship' => Sponsorship::count(),
            'crisis' => Crisis::count(),
        ];

        return $this->sendResponse($data, 'Data fetched successfully');
    }
}

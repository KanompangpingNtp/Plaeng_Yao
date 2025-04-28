<?php

namespace App\Http\Controllers\eservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemporaryController extends Controller
{
    public function EserviceUserAccount()
    {
        return view('eservice.users.page');
    }

    public function EserviceAdminAccount()
    {
        return view('eservice.admin.page');
    }
}

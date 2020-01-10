<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
use App\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function companyNew()
    {
        return view('admin.company.new');
    }
}

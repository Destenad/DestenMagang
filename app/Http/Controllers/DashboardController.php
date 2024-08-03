<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Departement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countMale = Employees::where('gender', 'male')->count();
        $countFemale = Employees::where('gender', 'female')->count();
        $countDepartements = Departement::count();
        $countActiveEmployees = Employees::where('is_active', 1)->count();
        $countAllEmployees = Employees::count();

        return view('dashboard', compact('countMale', 'countFemale', 'countDepartements', 'countActiveEmployees', 'countAllEmployees'));
    }
}

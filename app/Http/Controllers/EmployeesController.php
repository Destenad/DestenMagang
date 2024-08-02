<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Models\Departement;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return view('employees.employ', ['employees' => $employees]);
    }
    
    public function tambah()
    {
        $departement = Departement::all(); // Fetch all departements
        return view('employees.tambah', ['departements' => $departement]);
    }

    public function proses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'departement_id' => 'required|exists:departement,id',
            'gender' => 'required|in:Male,Female',
            'phone' => 'required',
            'email' => 'required|email',
            'is_active' => 'required|boolean',
        ]);

        Employees::create($validated);

        return redirect('/employees');
    }


    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        $departements = Departement::all(); // Fetch all departements
        return view('employees.edit', [
            'employee' => $employee,
            'departements' => $departements
        ]);
    }
    

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'departement_id' => 'required|exists:departement,id',
        'gender' => 'required|in:Male,Female',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'is_active' => 'required|boolean',
    ]);

    $employee = Employees::findOrFail($id);
    $employee->update($validated);

    return redirect('/employees')->with('success', 'Employee updated successfully');
}

public function destroy($id)
    {
        // Find the employee by ID or fail if not found
        $employee = Employees::findOrFail($id);

        // Delete the employee
        $employee->delete();

        // Redirect with a success message
        return redirect('/employees')->with('success', 'Employee deleted successfully');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){        
        $employees = Employee::get();
        return view('pages.users.employee.employee_list', compact('employees') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'position' => 'required|string',
            'office' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'gender' => 'required|in:male,female',
            'birthDay' => 'required|date',
            'salary' => 'required|string'
        ]);
        Employee::create($data);
        return redirect('EmployeeList')->with(['success' => 'Adding new employee successfuly']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $employees = Employee::find($id);
    
        return view('pages.users.employee.view',compact('employees') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $employee = Employee::find($id);
     

        return view('pages.users.employee.edit',compact('employee') );
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'position' => 'required|string',
            'office' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'gender' => 'required|string',
            'birthDay' => 'required|date',
            'salary' => 'required|string'
        ]);
        Employee::where('id', $id)->update($data);
        return redirect('EmployeeList')->with(['success' => 'Updated  employee successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $employee = Employee::where('id',$id)->delete();
     return redirect('EmployeeList')->with('success','Deleted successfuly');

    }
}
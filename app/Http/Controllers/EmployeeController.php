<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Employee;
use App\Mail\EmployeeDeleted;
use App\Mail\NomeDellaNostraMailable;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employees-index', compact('employees'));
    }

    public function show($id) {
        $employee = Employee::findOrFail($id);
        return view('employee-show', compact('employee'));
    }

    public function delete($id) {
        $employee = Employee::findOrFail($id);
        $employee->tasks()->delete();
        $employee->delete();
        Mail::to("prova@gmail.com")->send(new EmployeeDeleted($id));
        return redirect()->route('employees-index');
    }
}

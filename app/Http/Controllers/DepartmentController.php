<?php

namespace App\Http\Controllers;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return response()->json([
            'departments' => $departments
        ], 200);
    }

    public function show(Department $department)
    {
        $department->load('provinces.districts');

        return response()->json([
            'departments' => $department
        ], 200);
    }
}

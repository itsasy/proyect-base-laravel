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

    public function show($department)
    {
        $department = Department::with('provinces.districts')->findOrFail($department);

        return response()->json([
            'departments' => $department
        ], 200);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AdministrationOfficer;
use App\Models\SchoolHeadmaster;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Guru dan Staff | SMP Islam Nurul Ulum';

        $teacher = Teacher::all();
        $staff = AdministrationOfficer::all();

        return view('frontend.teacher.teacher-staff-view', compact([
            'title',
            'teacher',
            'staff'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function headmaster($name)
    {
        //
        $headmaster = SchoolHeadmaster::where('name', $name)->first();

        $title = $headmaster->name . ' | SMP Islam Nurul Ulum';


        return view('frontend.teacher.headmaster-view', compact([
            'title',
            'headmaster',
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

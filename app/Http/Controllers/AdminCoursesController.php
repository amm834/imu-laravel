<?php

namespace App\Http\Controllers;

use App\Models\AdminCourses;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = AdminCourses::all();
        return view('admin_dashboard.courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dashboard.add_courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'first_sem_fee' => 'required|int',
            'second_sem_fee' => 'required|int',
        ]);
        $data['total_fee'] = $data['first_sem_fee'] + $data['second_sem_fee'];
        $result = AdminCourses::create($data);
        if ($result) {
            return redirect()->route('admin.courses')->with('create_course_success',
                'New Course was created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = AdminCourses::findOrFail($id);
        return view('admin_dashboard.edit_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'first_sem_fee' => 'required|int',
            'second_sem_fee' => 'required|int',
        ]);
        $data['total_fee'] = $data['first_sem_fee'] + $data['second_sem_fee'];
        $result = AdminCourses::findOrFail($id)->update($data);
        if ($result) {
            return redirect()->route('admin.courses')->with('create_course_success',
                'Course was updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $result = AdminCourses::destroy($id);
        if ($result) {
            return redirect()->route('admin.courses')->with('course_delete_success', 'Course Deleted successfully');
        }
    }
}

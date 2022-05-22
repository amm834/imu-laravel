<?php

namespace App\Http\Controllers;

use App\Models\AdminCourses;
use App\Models\Courses;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = AdminCourses::all();
        $payments = Payment::all();
        return view('enroll', compact('courses', 'payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'guardian_name' => 'required',
            'guardian_phone_number' => 'required',
            'address' => 'required',
            'registration_date' => 'required',
            'payment_type' => 'required',
            'amount' => 'required',
            'course_name' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);


        $id = Student::create($data)->id;
        $result = Courses::create([
            'name' => $request->course_name,
            'student_id' => $id,
        ]);

        if ($result) {
            return redirect()->route('login')->with('register_success', 'You Registered Successfully');
        } else {
            return redirect()->route('enroll')->with('register_failed', 'Registration Failed. Please Try Again');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

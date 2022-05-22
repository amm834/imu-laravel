<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $student = Student::where('email', $data['email'])->first();
        if (!$student) {
            return redirect()->route('login')->with('login_fail', 'Fail to login');
        }


        $result = Hash::check($data['password'], $student->password);
        if (!$result) {
            return redirect()->route('login')->with('login_fail', 'Fail to login');
        }

        // login success check role
        $role = $student->role;
        $keepSession = [
            'id' => $student->id,
            'name' => $student->full_name,
            'email' => $student->email,
            'role' => $student->role,
        ];
        $request->session()->put('admin', $keepSession);


        if ($role === 'student') {
            return redirect()->route('student.dashboard');
        }

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }

}

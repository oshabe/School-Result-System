<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use App\Models\TeacherRole;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public function index()
    {
        $class=SchoolClass::select('name as class','id as id')->get();
        $student=Student::select('photo as image','nationality as nationality','gender as gender','email as email','roll_id as roll_id','address as address','phone_number as number','f_name as f_name','s_name as s_name','dob as dob','id as id')->latest()->take(5)->get();
        $subject=Subject::select('name as subject','code as code','id as id')->get();
        $studentCount=Student::select('photo as image')->get();
        $teachers=Teacher::get();
        $studentFormOne=Student::join('school_classes','school_classes.id','students.class_id')->where('school_classes.name','Form 1')->get();
        $studentFormTwo=Student::join('school_classes','school_classes.id','students.class_id')->where('school_classes.name','Form 2')->get();
        $studentFormThree=Student::join('school_classes','school_classes.id','students.class_id')->where('school_classes.name','Form 3')->get();
        $studentFormFour=Student::join('school_classes','school_classes.id','students.class_id')->where('school_classes.name','Form 4')->get();
        $studentFormFive=Student::join('school_classes','school_classes.id','students.class_id')->where('school_classes.name','Form 5')->get();
        $studentFormSix=Student::join('school_classes','school_classes.id','students.class_id')->where('school_classes.name','Form 6')->get();
        $allTeacher=Teacher::select('photo as image','nationality as nationality','initials as initials','gender as gender','email as email','address as address','phone as number','f_name as f_name','s_name as s_name','dob as dob','id as id')->latest()->take(5)->get();

        //dd($student);
        return view('Dashboard.dashboard',compact('class','allTeacher','subject','student','studentCount','teachers','studentFormOne','studentFormTwo','studentFormThree','studentFormFour','studentFormFive','studentFormSix'));
    }

    public function studentForm(Request $request)
    {   
        // Handle the form submission
        //dd($request);
        $subjectIds = $request->input('subjects');

        if ($request->hasFile('s_image')) {
            $imagePath = $request->file('s_image')->store('images', 'public');
        }

        $theStudent = Student::create([
            'photo' => $imagePath,
            'f_name' => $request->s_f_name,
            's_name' =>$request->s_s_name,
            'email' => $request->s_email,
            'password' => $request->s_password,
            'dob' => $request->s_dob,
            'gender' => $request->s_gender,
            'roll_id' => $request->s_roll_id,
            'class_id' => $request->s_class,
            'phone_number' => $request->s_phone,
            'nationality' => $request->s_nationality,
            'address' => $request->s_address,
            'guardian' => 'Null',
            'created_by' =>'Null',
            'updated_by' =>'Null'
        ]);

        $user=User::create([
            'first_name' => $request->s_f_name,
            'last_name' => $request->s_s_name,
            'email' =>$request->s_email,
            'status'=>'Student',
            'password' => Hash::make($request->s_password), 
        ]);

        foreach ($subjectIds as $subjectId) {
            DB::table('student_subject')->insert([
                'student_id' => $theStudent->id,
                'subject_id' => $subjectId,
            ]);
        }


        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function teacherForm(Request $request)
    {   
        // Handle the form submission
        //dd($request);

        $subjectIds = $request->input('subjects');
        $role = $request->input('role');

        if ($request->hasFile('t_image')) {
            $imagePath = $request->file('t_image')->store('images', 'public');
        }

        $theTeacher = Teacher::create([
            'photo' => $imagePath,
            'f_name' => $request->t_name,
            's_name' =>$request->t_s_name,
            'email' => $request->t_email,
            'password' => $request->t_password,
            'dob' => $request->t_dob,
            'gender' => $request->t_gender,
            'class_id' => $request->t_class,
            'phone' => $request->t_phone,
            'nationality' => $request->t_nationality,
            'address' => $request->t_address,
            'initials' => $request->short_form
        ]);

        User::create([
            'first_name' => $request->t_name,
            'last_name' => $request->t_s_name,
            'email' =>$request->t_email,
            'status'=>'Teacher',
            'password' =>Hash::make($request->t_password), 
        ]);

        foreach ($role as $roles) {
            DB::table('teacher_roles')->insert([
                'teacher_id' => $theTeacher->id,
                'name' => $roles,
                'status' => 'Draft',
                'created_by' => "Null",
                'updated_by' => "Null",
            ]);
        }

        foreach ($subjectIds as $subjectId) {
            DB::table('teacher_subject')->insert([
                'teachers_id' => $theTeacher->id,
                'subject_id' => $subjectId,
            ]);
        }

        return response()->json([
            'message' => 'Success'
        ]);
    }
}


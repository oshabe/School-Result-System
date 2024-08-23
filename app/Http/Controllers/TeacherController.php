<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TeacherController extends Controller
{
    public function index(){

        $teachers =Teacher::all();

        $teachersRole =TeacherRole::all();

        $teachersSubject =Teacher::join('teacher_subject','teacher_subject.teachers_id','teachers.id')
        ->join('subjects','subjects.id','teacher_subject.subject_id')
        ->select('subjects.name as name','teachers.id as teacher_id')
        ->get();
        //dd($teachersSubject);

        $teachersClass =Teacher::join('school_classes','school_classes.id','teachers.class_id')
        ->select('school_classes.name as name','teachers.id as teacher_id')
        ->get();
        //dd($teachersClass);

        return view('Teacher.all-teachers',compact('teachers','teachersRole','teachersSubject','teachersClass'));
    }

    public function editTeacherForm(Request $request)
    {   
        // Handle the form submission
        //dd($request);
        $teacherData = [
            'f_name' => $request->t_name,
            's_name' => $request->t_s_name,
            'initials' => $request->short_form,
            'email' => $request->t_email,
            'password' => Hash::make($request->t_password),
            'dob' => $request->t_dob,
            'gender' => $request->t_gender,
            'class_id' => $request->t_class,
            'phone' => $request->t_phone,
            'nationality' => $request->t_nationality,
            'address' => $request->t_address
        ];
        
        $theTeacher = Teacher::where('id', $request->t_id)->update($teacherData);


        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function destroy($id)
    {
        // Find the teacher record by ID
        $teacher = Teacher::find($id);

        if ($teacher) {
            // Delete the teacher record
            $teacher->delete();

            // Return a success response
            return response()->json(['message' => 'Teacher deleted successfully']);
        }

        // Return an error response if the teacher record is not found
        return response()->json(['error' => 'Teacher not found'], 404);
    }
}

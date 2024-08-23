<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Result;
use App\Models\Teacher;
use App\Models\EndTerm;
use App\Models\Communication;
use App\Models\SchoolClass;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index(){
        $student=Student::select('photo as image','nationality as nationality','password as password','gender as gender','email as email','address as address','phone_number as number','f_name as f_name','s_name as s_name','dob as dob','id as id')->get();
        $class=SchoolClass::select('name as class','id as id')->get();
        $subject=Subject::select('name as subject','code as code','id as id')->get();
        return view('Students.all-students',compact('student','class','subject'));
    }

    public function oneStudent($id){
        $student=Student::join('school_classes','school_classes.id','students.class_id')->select('students.photo as image','school_classes.name as class_id','students.nationality as nationality','students.password as password','students.roll_id as roll','students.gender as gender','students.email as email','students.address as address','students.phone_number as number','students.f_name as f_name','students.s_name as s_name','students.dob as dob','students.id as id')
        ->where('students.id',$id)->get()->first();
        //dd($student);
        $subject=Subject::join('student_subject','student_subject.subject_id','subjects.id')
        ->join('students','students.id','student_subject.student_id')
        ->select('subjects.name as subject','subjects.code as code','subjects.id as id')
        ->where('students.id',$id)
        ->get();

        $firstResults = Student::join('results','results.student_id','students.id')
        ->join('subjects','subjects.name','results.subject')
        ->where('students.id',$id)
        ->select('results.subject as subject','subjects.id as subject_id','results.id as id','results.term as term','results.marks as marks','results.grade as grade'
        ,'results.out_of_three as out_of_three','results.descriptor as descriptor','results.initials as initials')
        ->where('results.term','First term')
        ->get();
        //dd($firstResults);

        $teachersubject =Teacher::join('teacher_subject','teacher_subject.teachers_id','teachers.id')
        ->join('subjects','subjects.id','teacher_subject.subject_id')
        ->groupBy('teachers.initials', 'subjects.id')
        ->select('teachers.initials as initial','subjects.id as id')
        ->get();
        //dd($teachersubject);

        $secondResults = Student::join('results','results.student_id','students.id')
        ->join('subjects','subjects.name','results.subject')
        ->where('students.id',$id)
        ->select('results.subject as subject','results.term as term','results.id as id','results.marks as marks','results.grade as grade'
        ,'results.out_of_three as out_of_three','results.descriptor as descriptor','results.initials as initials')
        ->where('results.term','Second term')
        ->get();
        //dd($secondResults);

        $thirdResults = Student::join('results','results.student_id','students.id')
        ->join('subjects','subjects.name','results.subject')
        ->where('students.id',$id)
        ->select('results.subject as subject','results.term as term','results.id as id','results.marks as marks','results.grade as grade'
        ,'results.out_of_three as out_of_three','results.descriptor as descriptor','results.initials as initials')
        ->where('results.term','Third term')
        ->get();
        //dd($thirdResults);

        $tendTerm=EndTerm::join('subjects','subjects.name','end_terms.subject')
        ->join('students','students.id','end_terms.student_id')
        ->where('students.id',$id)
        ->where('end_terms.term','Third term')
        ->select('end_terms.end_marks as end_marks','end_terms.id as id','end_terms.subject as sub_id')
        ->get();
        //dd($endTerm);

        $sendTerm=EndTerm::join('subjects','subjects.name','end_terms.subject')
        ->join('students','students.id','end_terms.student_id')
        ->where('students.id',$id)
        ->where('end_terms.term','Second term')
        ->select('end_terms.end_marks as end_marks','end_terms.id as id','end_terms.subject as sub_id')
        ->get();
        //dd($sendTerm);

        $fendTerm=EndTerm::join('subjects','subjects.name','end_terms.subject')
        ->join('students','students.id','end_terms.student_id')
        ->where('students.id',$id)
        ->where('end_terms.term','First term')
        ->select('end_terms.end_marks as end_marks','end_terms.id as id','end_terms.subject as sub_id')
        ->get();
        //dd($fendTerm);

        return view('Students.single_student',compact('student','fendTerm','sendTerm','tendTerm','teachersubject','subject','firstResults','secondResults','thirdResults','id'));
    }

    public function editStudentForm(Request $request)
    {   
        // Handle the form submission
        $student_class= Student::where('id', $request->s_id)->value('class_id');
        //dd($student_class);
        $studentData = [
            'f_name' => $request->s_f_name,
            's_name' => $request->s_s_name,
            'email' => $request->s_email,
            'password' => Hash::make($request->s_password),
            'dob' => $request->s_dob,
            'gender' => $request->s_gender,
            'class_id' =>$student_class,
            'nationality' => $request->s_nationality,
            'address' => $request->s_address
        ];
        
        $theTeacher = Student::where('id', $request->s_id)->update($studentData);


        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function submitStudentResults(Request $request)
    {
        //dd($request);
        // Retrieve input values from the form

        $studentId = $request->input('student_id');
        $subjects = $request->input('subjects');
        $marks = $request->input('marks');
        $term = $request->input('term'); 
        $coursework = $request->input('exam_type');

        function calculateGrade($marks)
        {
            if ($marks >= 85 && $marks <= 100) {
                return 'D1';
            } elseif ($marks >= 80 && $marks <= 84) {
                return 'D2';
            } elseif ($marks >= 75 && $marks <= 79) {
                return 'C3';
            } elseif ($marks >= 70 && $marks <= 74) {
                return 'C4';
            } elseif ($marks >= 65 && $marks <= 69) {
                return 'C5';
            } elseif ($marks >= 60 && $marks <= 64) {
                return 'C6';
            } elseif ($marks >= 50 && $marks <= 59) {
                return 'P7';
            } elseif ($marks >= 40 && $marks <= 49) {
                return 'P8';
            } elseif ($marks >= 0 && $marks <= 39) {
                return 'F9';
            } else {
                return 'N/A'; // Return 'N/A' for invalid marks
            }
        }

        function calculateDescriptor($marks)
        {
            if ($marks >= 85 && $marks <= 100) {
                return 'Outstanding';
            } elseif ($marks >= 50 && $marks <= 84) {
                return 'Moderate';
            } elseif ($marks >= 10 && $marks <= 49) {
                return 'Basic';
            } else {
                return 'N/A'; // Return 'N/A' for invalid marks
            }
        }

        function calculateOutOfThree($marks)
        {

            if ($marks >= 0 && $marks <= 9) {
                return '0.0';
            } elseif ($marks >= 10 && $marks <= 19) {
                return '0.1';
            } elseif ($marks >= 20 && $marks <= 29) {
                return '0.2';
            }  elseif ($marks >= 30 && $marks <= 39) {
                return '1.3';
            }  elseif ($marks >= 40 && $marks <= 49) {
                return '1.6';
            }  elseif ($marks >= 50 && $marks <= 59) {
                return '1.9';
            }  elseif ($marks >= 60 && $marks <= 69) {
                return '2.0';
            }  elseif ($marks >= 70 && $marks <= 79) {
                return '2.2';
            }  elseif ($marks >= 80 && $marks <= 85) {
                return '2.4';
            }  elseif ($marks >= 86 && $marks <= 90) {
                return '2.6';
            }  elseif ($marks >= 91 && $marks <= 95) {
                return '2.8';
            }   elseif ($marks >= 96 && $marks <= 100) {
                return '3.0';
            } else {
                return 'N/A'; // Return 'N/A' for invalid marks
            }
        }

        if ($coursework === 'End of Term'){
            
            foreach ($subjects as $index => $subjectId) {
                // Retrieve marks for the current subject
                $subjectMarks = $marks[$index];
            
                // Create a new result record
                EndTerm::create([
                    'subject' => $subjectId,
                    'term' => $term,
                    'end_marks' => $subjectMarks,
                    'student_id' => $studentId,
                    'status' => 'Draft',
                    'updated_by' => 'Null',
                    'created_by' => 'Null',
                ]);   
            }
        
            // Other actions or redirect to success page if needed
        } else {
            foreach ($subjects as $index => $subjectId) {
                // Retrieve marks for the current subject
                $subjectMarks = $marks[$index];
            
                // Calculate the grade based on the marks obtained
                $grade = calculateGrade($subjectMarks); // Replace `calculateGrade()` with your grading logic
                $descriptor = calculateDescriptor($subjectMarks);
                $outOfThree = calculateOutOfThree($subjectMarks);
            
                // Create a new result record
                Result::create([
                    'subject' => $subjectId,
                    'term' => $term,
                    'coursework' => $coursework,
                    'marks' => $subjectMarks,
                    'student_id' => $studentId,
                    'grade' => $grade,
                    'out_of_three' => $outOfThree,
                    'descriptor' => $descriptor,
                    'initials' => 'M K',
                    'status' => 'Draft',
                    'others' => 'ADMIN',
                ]);
            }
        } 

        $message = '';
    
        if ($coursework == 'End of Term') {
            if ($term == 'First Term') {
                $messageOne = 'Results for term one are out';
                Communication::create([
                    'student_id' =>$studentId,
                    'student_account' => $request->student_email, // or any other account identifier
                    'term' => $term,
                    'status' => 'uploaded',
                    'end_of_term' => $coursework,
                    'message' => $messageOne,
                ]);
            } elseif ($term == 'Second Term') {
                $messageTwo = 'Results for term two are out';
                Communication::create([
                    'student_id' =>$studentId,
                    'student_account' => $request->student_email, // or any other account identifier
                    'term' => $term,
                    'status' => 'uploaded',
                    'end_of_term' => $coursework,
                    'message' => $messageTwo,
                ]);
            } elseif ($term == 'Third Term') {
                $messageThree = 'Results for term three are out';
                Communication::create([
                    'student_id' =>$studentId,
                    'student_account' => $request->student_email, // or any other account identifier
                    'term' => $term,
                    'status' => 'uploaded',
                    'end_of_term' => $coursework,
                    'message' => $messageThree,
                ]);
            }
        }
        
        // Return a response (e.g., success message)
        return response()->json(['message' => 'Result saved successfully']);
    }

    public function destroy($id)
    {
        //dd($id);
        // Find the teacher record by ID
        $student = Student::find($id);

        if ($student) {
            // Delete the teacher record
            $student->delete();

            // Return a success response
            return response()->json();
        }

        // Return an error response if the teacher record is not found
        return response()->json(['error' => 'Teacher not found'], 404);
    }

    public function editResult(Request $request)
    {
        //dd($request);
        $resultData = [
            'marks' => $request->s_mark,
        ];        
        Result::where('id', $request->result_id)->where('student_id',$request->s_id)->update($resultData);

        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function editEndResult(Request $request)
    {
        //dd($request);
        $resultEndData = [
            'end_marks' => $request->result_mark_id,
        ];        
        EndTerm::where('id', $request->result_mark)->where('student_id',$request->s_id)->update($resultEndData);

        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function checkMarksStatus($id)
    {        
       // Retrieve the student's communication record
        $communication = Communication::where('student_id', $id)->first();

        if ($communication) {
            // Check if the status is 'uploaded'
            if ($communication->status === 'uploaded') {
                // Retrieve the message for the corresponding term
                $termMessage = $communication->message;
                $communicationId = $communication->id;

                // Return the response as JSON
                return response()->json([
                    'status' => 'uploaded',
                    'message' => $termMessage,
                    'id' => $communicationId
                ]);
            }
        }

        // Return the response as JSON if no communication record is found or the status is not 'uploaded'
        return response()->json([
            'status' => 'not_uploaded'
        ]);
    }

    public function updateStatus($id)
    {
        // Update the status in the communication table
        Communication::where('id', $id)
        ->where('status', 'uploaded')
        ->update(['status' => 'results seen']);

        // Return a response indicating success
        return response()->json([
            'message' => 'Status updated successfully'
        ]);
    }

}

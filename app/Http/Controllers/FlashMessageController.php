<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FlashMessageController extends Controller
{
    public function storeStudent(Request $request)
    {
        $rules = [
            'student_id' => ['required', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'course' => ['required', 'string', 'max:255'],
        ];

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->with('error', 'Please fill in all required fields before submitting.');
        }

        Student::create([
            'student_id' => $request->student_id,
            'full_name' => $request->full_name,
            'course' => $request->course,
        ]);

        $total = Student::count();

        return back()->with('info', "You have {$total} total of students added.");
    }

    public function viewStudent()
    {
        $students = Student::latest()->get();
        $totalStudents = Student::count();
        return view('student-view', compact('students', 'totalStudents'));
    }

    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('student-edit', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $rules = [
            'student_id' => ['required', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'course' => ['required', 'string', 'max:255'],
        ];

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->with('error', 'Please fill in all required fields before submitting.');
        }

        $student->update([
            'student_id' => $request->student_id,
            'full_name' => $request->full_name,
            'course' => $request->course,
        ]);

        return redirect()->route('student.view')->with('info', 'Student record updated successfully!');
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        session()->put('pending_delete_id', $student->id);

        return back()->with('warning', 'Are you sure you want to delete this student record? This action cannot be undone.');
    }

    public function confirmDelete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        session()->forget('pending_delete_id');

        return redirect()->route('student.view')->with('warning', 'Warning! This student record has been permanently deleted. This action cannot be undone.');
    }

    public function invalidAction()
    {
        return back()->with('error', 'Invalid action attempted!');
    }

    public function restrictedPage()
    {
        return back()->with('warning', 'You do not have permission to access this page!');
    }

    public function systemNotice()
    {
        return back()->with('info', 'System maintenance scheduled on Sunday at 2:00 AM.');
    }

    public function emptyForm()
    {
        return back()->withErrors(['form' => 'Please fill in all required fields before submitting.']);
    }
}

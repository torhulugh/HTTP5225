<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        try {
            $courses = Course::all();
            return view('courses.index', compact('courses'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error loading courses: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'description' => 'required'
            ]);

            Course::create($request->all());
            return redirect()->route('courses.index')->with('success', 'Course created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating course: ' . $e->getMessage())
                                   ->withInput();
        }
    }

    public function show(Course $course)
    {
        try {
            return view('courses.show', compact('course'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error showing course: ' . $e->getMessage());
        }
    }

    public function edit(Course $course)
    {
        try {
            return view('courses.edit', compact('course'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error loading course: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Course $course)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'description' => 'required'
            ]);

            $course->update($request->all());
            return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating course: ' . $e->getMessage())
                                   ->withInput();
        }
    }

    public function destroy(Course $course)
    {
        try {
            $course->delete();
            return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting course: ' . $e->getMessage());
        }
    }
}

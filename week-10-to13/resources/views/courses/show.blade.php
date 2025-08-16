@extends('layouts.app')

@section('title', 'View Course')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Course Details</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <h5>Course Name</h5>
                <p class="lead">{{ $course->name }}</p>
            </div>

            <div class="mb-3">
                <h5>Description</h5>
                <p>{{ $course->description }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to List</a>
                <div>
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit Course</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">Delete Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 
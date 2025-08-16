@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
    <h1>Student Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            
            <div class="mb-3">
                <strong>Email:</strong>
                <p>{{ $student->email }}</p>
            </div>

            <div class="mb-3">
                <strong>Phone:</strong>
                <p>{{ $student->phone ?? 'Not provided' }}</p>
            </div>

            <div class="mb-3">
                <strong>Date of Birth:</strong>
                <p>{{ $student->date_of_birth ? $student->date_of_birth->format('F j, Y') : 'Not provided' }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection 
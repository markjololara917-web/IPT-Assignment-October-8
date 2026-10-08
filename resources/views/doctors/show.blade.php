@extends('layouts.app')

@section('title', 'Doctor Details')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <h4>Doctor Details</h4>
        </div>

        <div class="card-body">

            <p>
                <strong>ID:</strong>
                {{ $doctor->id }}
            </p>

            <p>
                <strong>Name:</strong>
                {{ $doctor->name }}
            </p>

            <p>
                <strong>Specialization:</strong>
                {{ $doctor->specialization }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ $doctor->email }}
            </p>

            <p>
                <strong>Phone:</strong>
                {{ $doctor->phone }}
            </p>

            <a href="{{ route('doctors.index') }}"
               class="btn btn-secondary">
                Back
            </a>

            <a href="{{ route('doctors.edit', $doctor->id) }}"
               class="btn btn-warning">
                Edit
            </a>

        </div>

    </div>

</div>

@endsection
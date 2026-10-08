@extends('layouts.app')

@section('title', 'Edit Doctor')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <h4>Edit Doctor</h4>
        </div>

        <div class="card-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('doctors.update', $doctor->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Doctor Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name', $doctor->name) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Specialization
                    </label>

                    <input
                        type="text"
                        name="specialization"
                        class="form-control"
                        value="{{ old('specialization', $doctor->specialization) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email', $doctor->email) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Phone
                    </label>

                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        value="{{ old('phone', $doctor->phone) }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Update Doctor
                </button>

                <a href="{{ route('doctors.index') }}"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
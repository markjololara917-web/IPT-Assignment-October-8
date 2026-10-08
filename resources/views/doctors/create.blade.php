@extends('layouts.app')

@section('title', 'Add Doctor')

@section('content')

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h4>Add Doctor</h4>
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

            <form action="{{ route('doctors.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Doctor Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="specialization" class="form-label">
                        Specialization
                    </label>

                    <input
                        type="text"
                        id="specialization"
                        name="specialization"
                        class="form-control"
                        value="{{ old('specialization') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">
                        Phone
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        class="form-control"
                        value="{{ old('phone') }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Save Doctor
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
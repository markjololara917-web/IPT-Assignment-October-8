@extends('layouts.app')

@section('title', 'Doctors')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>List of Doctors</h3>

        <a href="{{ route('doctors.create') }}"
           class="btn btn-primary">
            + Add Doctor
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    @if($doctors->count() > 0)

        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Specialization</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th width="220">Actions</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($doctors as $doctor)

                        <tr>

                            <td>{{ $doctor->id }}</td>

                            <td>{{ $doctor->name }}</td>

                            <td>{{ $doctor->specialization }}</td>

                            <td>{{ $doctor->email }}</td>

                            <td>{{ $doctor->phone }}</td>

                            <td>

                                <a href="{{ route('doctors.show', $doctor->id) }}"
                                   class="btn btn-info btn-sm">
                                    View
                                </a>

                                <a href="{{ route('doctors.edit', $doctor->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('doctors.destroy', $doctor->id) }}"
                                    method="POST"
                                    class="d-inline"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this doctor?')"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @else

        <div class="alert alert-info">
            No doctors found.
        </div>

    @endif

</div>

@endsection
@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            <form action="{{ url('courses/' . $courses->id) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{ $courses->id }}" id="id" />
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control"><br>
                <label>Syllabus</label><br>
                <input type="text" name="address" id="address" value="{{ $courses->syllabus }}" class="form-control"><br>
                <label>Duration</label><br>
                <input type="text" name="duration" id="duration" value="{{ $courses->duration }}"
                    class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection

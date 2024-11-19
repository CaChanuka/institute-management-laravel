@extends('app')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>Add New Students</h1>
</div>


<form action="{{route('students.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <lablel for="first_name"class="form-lable">First Name</lablel>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{old('first_name')}}"required>
    </div>
    <div class="mb-3">
        <lablel for="last_name"class="form-lable">Last Name</lablel>
        <input type="text" name="last_name" id="last_name" class="form-control" value="{{old('last_name')}}"required>
    </div>
    <div class="mb-3">
        <lablel for="dob"class="form-lable">Date of Birth</lablel>
        <input type="text" name="dob" id="dob" class="form-control" value="{{old('dob')}}"required>
    </div>

    <div class="mb-3">
        <lablel for="gender"class="form-lable">Gender</lablel>
        <select name="gender" class="from-select" required>
            <option value="Male"{{old('gender')== 'Male' ? 'selected':'' }}>Male</option>
            <option value="Female"{{old('gender')== 'Female' ? 'selected':'' }}>Female</option>
            <option value="Other"{{old('gender')== 'Other' ? 'selected':'' }}>Other</option>    
        </select>
    </div>
    <div class="mb-3">
        <lablel for="contact_number"class="form-lable">Contact Number</lablel>
        <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{old('contact_number')}}"required>
    </div>
    <div class="mb-3">
        <lablel for="email"class="form-lable">Email</lablel>
        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}"required>
    </div>
    <div class="mb-3">
        <lablel for="address"class="form-lable">Address</lablel>
        <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}"required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
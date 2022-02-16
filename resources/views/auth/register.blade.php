@extends('layouts.app')

@section('title')
Create User | Page
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">New User Registration | Page</h3> </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="row">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        <small class="text-success">{{ session('success') }}</small>
                    </div>
                @endif
                {{-- Form Stated Here --}}
                <form action="{{ route('createuser') }}" method="POST">
                    @csrf
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Surname</label>
                                <input class="form-control" type="text" name="surname" placeholder="Surname">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="firstname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>PS Number</label>
                                <input class="form-control" type="text" name="psn_no" placeholder="PS Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <input class="form-control" type="text" name="category" placeholder="Category">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Role</label>
                                <select name="roles" id="role" class="form-control">
                                    <option hidden>Role</option>
                                    <option value="Admin">Admin Manager</option>
                                    <option value="Manager">Senior Manager</option>
                                    <option value="Vendor">Vendor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary buttonedit1 ">Create Customer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection


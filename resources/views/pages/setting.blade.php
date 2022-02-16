@extends('layouts.app')

@section('title')
Settings | Page
@endsection

@section('content')

<div class="page-wrapper">
    <div class="content mt-5">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card card-body">
                    <form action="{{ route('createuser')}}" method="post">
                        @csrf
                        <div class="row formtype">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Surname</label>
                                    <input class="form-control" type="text" name="surname" placeholder="Surname">
                                </div>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="firstname" placeholder="First Name">
                                </div>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row formtype">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PSN Number</label>
                                    <input class="form-control" type="text" name="psn_no" placeholder="Surname">
                                </div>
                                @error('psn_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option hidden>--------</option>
                                        <option value="Formal">Formal</option>
                                        <option value="Non-Formal">Non-Formal</option>
                                        <option value="Bicycle">Bicycle</option>
                                        <option value="Motorcycle">Motorcycle</option>
                                        <option value="Lorry">Lorry</option>
                                    </select>
                                </div>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row formtype">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                </div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="roles" id="roles" class="form-control">
                                        <option hidden>--------</option>
                                        <option value="Admin Manager">Admin Manager</option>
                                        <option value="Senior Manager">Senior Manager</option>
                                        <option value="Vendor">Vendor</option>
                                    </select>
                                </div>
                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row formtype">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary buttonedit mr-5 mt-5">Save</button>
</div>
@endsection

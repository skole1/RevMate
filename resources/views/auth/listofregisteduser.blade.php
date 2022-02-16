@extends('layouts.apps')

@section('title')
Registered Users | Page
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">List of Registred User | Page</h4> <a href="#" class="btn btn-primary float-right veiwbutton" data-toggle="modal" data-target="#exampleModal">&nbsp;&nbsp;New&nbsp; &nbsp;</a> </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>PSN Number</th>
                                            <th>Email</th>
                                            <th>Category</th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                                                <a href="#">{{ $user->surname }} {{ $user->firstname }} <span>#0001</span></a>
                                                </h2>
                                            </td>
                                            <td>{{ $user->psn_no }}</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea9e85878793888f98848b86aa8d878b8386c4898587">{{ $user->category }}</a></td>
                                            <td>{{ $user->category }}</td>
                                            <td> {{ $user->created_at }} </td>

                                            <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">{{ $user->roles }}</a> </div>
                                            </td>
                                            <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Edit</a> </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-staff.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                                <a href="profile.html">Richard Brobst <span>#0001</span></a>
                                                </h2>
                                            </td>
                                            <td>ST-002</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="42302b212a23302620302d20313602252f232b2e6c212d2f">[email&#160;protected]</a></td>
                                            <td>830-468-1042</td>
                                            <td>22-04-2020</td>

                                            <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Staff</a> </div>
                                            </td>
                                            <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-staff.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New User Vendor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-lg-12">
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
    </div>
</div>

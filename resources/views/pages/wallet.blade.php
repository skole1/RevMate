@extends('layouts.app')

@section('title')
Wallet | Pages
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">New Vendor Registration | Page</h3> </div>
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
                                <label>Vendor Name</label>
                                <input class="form-control" type="text" name="surname" placeholder="Vendor Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Location</label>
                                <select name="roles" id="role" class="form-control">
                                    <option hidden>--------</option>
                                    <option value="Admin Manager">Yola Road</option>
                                    <option value="Senior Manager">Bauchi Road</option>
                                    <option value="Vendor">Maiduguri Road</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sector</label>
                                <select name="roles" id="role" class="form-control">
                                    <option hidden>--------</option>
                                    <option value="Admin Manager">Formal</option>
                                    <option value="Senior Manager">Non-Formal</option>
                                    <option value="Vendor">Lorry Tax</option>
                                    <option value="Vendor">Motor Cycle</option>
                                    <option value="Vendor">Bicycle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" type="text" name="category" placeholder="Amount">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Mode of Payment</label>
                                <select name="roles" id="role" class="form-control">
                                    <option hidden>--------</option>
                                    <option value="Admin Manager">POS Terminal</option>
                                    <option value="Senior Manager">Bank Transfer</option>
                                    <option value="Vendor">Cash</option>
                                    <option value="Vendor">Write-Off</option>
                                    <option value="Vendor">Discount</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Date of Payment</label>
                                    <input class="form-control" type="date" name="category" placeholder="Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group float-right pr-3">
                                <button type="button" class="btn btn-primary pr-3">Cancel</button>
                                <button type="button" class="btn btn-primary pr-3">Reset</button>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

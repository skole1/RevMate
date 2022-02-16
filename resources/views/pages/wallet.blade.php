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
                    <h3 class="page-title mt-5">New Vendor Payment | Page</h3> </div>
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
                <form action="{{ route('post.wallet') }}" method="POST">
                    @csrf
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Vendor Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Vendor Name">
                               @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                               @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Location</label>
                                <select name="location" id="location" class="form-control">
                                    <option hidden>--------</option>
                                    <option value="Yola Road">Yola Road</option>
                                    <option value="Bauchi Road">Bauchi Road</option>
                                    <option value="Maiduguri Road">Maiduguri Road</option>
                                </select>
                                @error('location')
                                    <small class="text-danger">{{ $message }}</small>
                               @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sector</label>
                                <select name="sector" id="sector" class="form-control">
                                    <option hidden>--------</option>
                                    <option value="Admin Manager">Formal</option>
                                    <option value="Senior Manager">Non-Formal</option>
                                    <option value="Lorry Tax">Lorry Tax</option>
                                    <option value="Motor Cycle">Motor Cycle</option>
                                    <option value="Bicycle">Bicycle</option>
                                </select>
                                @error('sector')
                                    <small class="text-danger">{{ $message }}</small>
                               @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" type="text" name="amount" placeholder="Amount">
                                @error('amount')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Mode of Payment</label>
                                <select name="mode_of_payment" id="mode_of_payment" class="form-control">
                                    <option hidden>--------</option>
                                    <option value="POS Terminal">POS Terminal</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Write-Off">Write-Off</option>
                                    <option value="Discount">Discount</option>
                                </select>
                                @error('mode_of_payment')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Date of Payment</label>
                                    <input class="form-control" type="date" name="date_of_payment" placeholder="Amount">
                                </div>
                            </div>
                            @error('date_of_payment')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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

@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? 'Show Customer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Customer</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $customer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Is Verified:</strong>
                            {{ $customer->is_verified }}
                        </div>
                        <div class="form-group">
                            <strong>Stripe Id:</strong>
                            {{ $customer->stripe_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pm Type:</strong>
                            {{ $customer->pm_type }}
                        </div>
                        <div class="form-group">
                            <strong>Pm Last Four:</strong>
                            {{ $customer->pm_last_four }}
                        </div>
                        <div class="form-group">
                            <strong>Trial Ends At:</strong>
                            {{ $customer->trial_ends_at }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $customer->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

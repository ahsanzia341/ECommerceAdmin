@extends('layouts.app')

@section('template_title')
    {{ $productReview->name ?? 'Show Product Review' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Product Review</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('product-reviews.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $productReview->comment }}
                        </div>
                        <div class="form-group">
                            <strong>Rating:</strong>
                            {{ $productReview->rating }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $productReview->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Product Id:</strong>
                            {{ $productReview->product_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

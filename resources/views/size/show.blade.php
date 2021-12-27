@extends('layouts.app')

@section('template_title')
    {{ $size->name ?? 'Show Size' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Size</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sizes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $size->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

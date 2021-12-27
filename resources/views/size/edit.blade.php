@extends('layouts.app')

@section('template_title')
    Update Size
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-head style-primary">
                        <header>Update Size</header>
                    </div>
                    <div class="card-body">
                        <form method="POST" class ="form floating-label" action="{{ route('sizes.update', $size->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('size.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

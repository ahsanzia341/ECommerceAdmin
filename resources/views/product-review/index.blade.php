@extends('layouts.app')
@section('css')
    @include('css.datatables_css')
@endsection
@section('template_title')
    Product Review
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <header>
                                {{ __('Product Review') }}
                            </header>
                            <div class="tools">
                                <div class="btn-group">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Comment</th>
										<th>Rating</th>
										<th>User</th>
										<th>Product</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productReviews as $productReview)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productReview->comment }}</td>
											<td>{{ $productReview->rating }}</td>
											<td>{{ $productReview->user->name }}</td>
											<td>{{ $productReview->product->name }}</td>

                                            <td>
                                                <form action="{{ route('product-reviews.destroy',$productReview->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary ink-reaction btn-raised" href="{{ route('product-reviews.show',$productReview->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productReviews->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
    @include('js.datatables_js')
@endsection

@section('javascript')
    $('#table').DataTable();
    
@endsection

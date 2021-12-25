@extends('layouts.app')

@section('content')
<div class="row">
	<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<div class="input-daterange input-group" id="demo-date-range">
													<div class="input-group-content">
														<input type="text" class="form-control" id="start_date" name="start">
														<label>Date range</label>
													</div>
													<span class="input-group-addon">to</span>
													<div class="input-group-content">
														<input type="text" class="form-control" id="end_date" name="end">
														<div class="form-control-line"></div>
													</div>
												</div>
												<div class="form-group floating-label">
													{{ Form::select('group_by', array('week' => 'Week', 'month' => 'Month', 'year' => 'Year'), 'month', ['class' => 'form-control']) }}
													<label for="is_percentage">Group by</label>
												</div>
												
											</div>
											<div class="box-footer mt20">
												<button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
											</div>
										</form>
									</div><!--end .card-body -->
								</div>
</div>
@endsection
@section('javascript')
    $('#start_date').datepicker();
    $('#end_date').datepicker();
@endsection
@extends('layouts.app')

@section('content')
<div class="row">

							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-success text-lg"><i class="md md-trending-up"></i></strong>
											<strong class="text-xl">{{$total_sales}} Rs</strong><br/>
											<span class="opacity-50">Total Sales</span>
											<div class="stick-bottom-left-right">
												<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="pull-right text-warning text-lg"><i class="md md-swap-vert"></i></strong>
											<strong class="text-xl">{{$customers_count}}</strong><br/>
											<span class="opacity-50">Total Customers</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - VISITS -->

							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-danger no-margin">
											<strong class="pull-right text-danger text-lg"><i class="md md-trending-down"></i></strong>
											<strong class="text-xl">{{$total_orders}}</strong><br/>
											<span class="opacity-50">Total Orders</span>
											<div class="stick-bottom-left-right">
												<div class="progress progress-hairline no-margin">
													<div class="progress-bar progress-bar-danger" style="width:43%"></div>
												</div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->

							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-success no-margin">
											<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
											<strong class="text-xl">{{$total_promo_codes_used}}</strong><br/>
											<span class="opacity-50">Promo codes used</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
						<div class="row">

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-6">
								<div class="card ">
									<div class="row">
										<div>
											<div class="card-head">
												<header class="text-primary">{{ $users_chart->options['chart_title'] }}</header>
											</div><!--end .card-head -->
											<div class="card-body">
                    							{!! $users_chart->renderHtml() !!}
											</div><!--end .card-body -->
										</div><!--end .col -->
										
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

							<!-- BEGIN SERVER STATUS -->
							<div class="col-md-6">
								<div class="card">
									<div class="card-head">
										<header class="text-primary">{{ $sales_chart->options['chart_title'] }}</header>
									</div><!--end .card-head -->
									<div class="card-body">
										{!! $sales_chart->renderHtml() !!}
									</div><!--end .card-body -->
									
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SERVER STATUS -->

						</div><!--end .row -->
						<div class="row">

						</div><!--end .row -->

@endsection
@section('js')
	{!! $users_chart->renderChartJsLibrary() !!}
	{!! $sales_chart->renderChartJsLibrary()  !!}
@endsection
@section('javascript')
	
	{!! $users_chart->renderJs() !!}
	{!! $sales_chart->renderJs() !!}
@endsection
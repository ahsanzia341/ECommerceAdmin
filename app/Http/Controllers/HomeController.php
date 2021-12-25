<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers_count = Customer::all()->count();
        $total_sales = DB::table('invoices')->sum('total_amount');
        $total_orders = DB::table('invoices')->where('status' ,'!=', 'Completed')->orWhere('status' ,'!=',  'Canceled')->count();
        $total_promo_codes_used = DB::table('promo_code_usages')->count();
        $users_chart_options = [
            'chart_title' => 'Customers by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Customer',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'conditions' => [['name' => 'verified' , 'is_verified' => '1', 'color' => 'blue', 'fill' => 'true']]
        ];
        $sales_chart_options = [
            'chart_title' => 'Sales by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Invoice',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $users_chart = new LaravelChart($users_chart_options);
        $sales_chart = new LaravelChart($sales_chart_options);
        return view('home', compact('customers_count', 'total_sales', 'total_orders','users_chart','sales_chart','total_promo_codes_used'));
    }
}

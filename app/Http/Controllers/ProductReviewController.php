<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;

/**
 * Class ProductReviewController
 * @package App\Http\Controllers
 */
class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productReviews = ProductReview::paginate();

        return view('product-review.index', compact('productReviews'))
            ->with('i', (request()->input('page', 1) - 1) * $productReviews->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productReview = new ProductReview();
        return view('product-review.create', compact('productReview'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductReview::$rules);

        $productReview = ProductReview::create($request->all());

        return redirect()->route('product-reviews.index')
            ->with('success', 'ProductReview created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productReview = ProductReview::find($id);

        return view('product-review.show', compact('productReview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productReview = ProductReview::find($id);

        return view('product-review.edit', compact('productReview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductReview $productReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductReview $productReview)
    {
        request()->validate(ProductReview::$rules);

        $productReview->update($request->all());

        return redirect()->route('product-reviews.index')
            ->with('success', 'ProductReview updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productReview = ProductReview::find($id)->delete();

        return redirect()->route('product-reviews.index')
            ->with('success', 'ProductReview deleted successfully');
    }
}

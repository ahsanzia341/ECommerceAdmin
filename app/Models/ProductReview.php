<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductReview
 *
 * @property $id
 * @property $comment
 * @property $rating
 * @property $user_id
 * @property $product_id
 *
 * @property ProductReviewImage[] $productReviewImages
 * @property Product $product
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductReview extends Model
{
    
    static $rules = [
		'comment' => 'required',
		'rating' => 'required',
		'user_id' => 'required',
		'product_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comment','rating','user_id','product_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productReviewImages()
    {
        return $this->hasMany('App\Models\ProductReviewImage', 'product_review_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}

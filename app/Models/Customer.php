<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $email
 * @property $name
 * @property $is_verified
 * @property $password
 * @property $created_at
 * @property $updated_at
 * @property $remember_token
 * @property $email_verified_at
 * @property $stripe_id
 * @property $pm_type
 * @property $pm_last_four
 * @property $trial_ends_at
 * @property $phone
 *
 * @property CustomerAddress[] $customerAddresses
 * @property CustomerWishlist[] $customerWishlists
 * @property Invoice[] $invoices
 * @property PromoCodeUsage[] $promoCodeUsages
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email','name','is_verified','stripe_id','pm_type','pm_last_four','trial_ends_at','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customerAddresses()
    {
        return $this->hasMany('App\Models\CustomerAddress', 'customer_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customerWishlists()
    {
        return $this->hasMany('App\Models\CustomerWishlist', 'customer_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice', 'customer_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promoCodeUsages()
    {
        return $this->hasMany('App\Models\PromoCodeUsage', 'customer_id', 'id');
    }
    

}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer id
 * @property string title
 * @property integer customer_user_id
 * @property integer amount
 * @property Carbon used_at
 * @property Carbon expire_at
 * @property Carbon created_at
 * @property Carbon updated_at
 * 
 * @property CustomerUser customer
 */
class Coupon extends BaseModel
{

    protected $table = 'coupons';

    protected $fillable = [
        'title', 'customer_user_id', 'amount', 'used_at', 'expire_at'
    ];

    public function customer(): belongsTo
    {
        return $this->belongsTo(CustomerUser::class, "customer_user_id", "id");
    }

    public function getSearchUrl(): string
    {
        return '';
    }

}

<?php

namespace App;

use App\Enums\UserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Good extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return string
     */
    public function getPriceAttribute(): string
    {
        return '₦'.number_format($this->attributes['price'] / 100);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seller(): HasOne
    {
        return $this->hasOne(User::class)->where('account_type', UserType::SELLER);
    }
}

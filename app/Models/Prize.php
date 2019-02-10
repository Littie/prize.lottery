<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prize
 * @package App\Models
 */
class Prize extends Model
{
    const PRIZE_TYPE_MONEY = 'money';
    const PRIZE_TYPE_POINTS = 'points';
    const PRIZE_TYPE_PRESENTS = 'presents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'prizeable_id', 'prizeable_type', 'prize_type', 'is_received',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function prizeable()
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get include view from prize.include folder for specific prize.
     *
     * @return string
     */
    public function getIncludeViewNameAttribute()
    {
        return 'prize.include.' . $this->prize_type;
    }
}

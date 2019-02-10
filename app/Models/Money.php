<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Money
 * @package App\Models
 */
class Money extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sum',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function prize()
    {
        return $this->morphOne(Prize::class, 'prizeable');
    }
}

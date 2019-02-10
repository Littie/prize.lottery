<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Present extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(PresentTypes::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function prize()
    {
        return $this->morphOne(Prize::class, 'prizeable');
    }
}

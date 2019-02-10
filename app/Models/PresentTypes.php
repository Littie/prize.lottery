<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PresentTypes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'quantity',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function presents()
    {
        return $this->hasMany(Present::class, 'type_id', 'id');
    }
}

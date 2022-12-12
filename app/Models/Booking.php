<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model {
    protected $fillable = ['from', 'to'];

    use HasFactory;

    public function bookable(): belongsTo {
        return $this->belongsTo(Bookable::class);
    }


    public function scopeBetweenDates(Builder $query, $from, $to): Builder
    {
        return $query->where('to', '>=', $from)->where('from', '<=', $to);
    }
}

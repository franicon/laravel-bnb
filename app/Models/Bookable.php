<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static findOrFail($id)
 */
class Bookable extends Model {
    use HasFactory;

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }

    public function availableFor($from, $to): bool{
        return 0 == $this->bookings()->betweenDates($from, $to)->count();
    }
}

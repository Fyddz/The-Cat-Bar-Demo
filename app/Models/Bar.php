<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use function PHPUnit\Framework\matches;

class Bar extends Model
{
    use HasFactory;

    # REALATIONSHIPS
    public function cats(): HasMany
    {
        return $this->hasMany(Cat::class);
    }

    # GETTER
    public function getOpenedAtForHumansAttribute()
    {
        return Carbon::parse($this->opened_at)->locale('fr_FR')->isoformat('ll');
    }

}

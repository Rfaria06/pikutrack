<?php

namespace App\Models;

use App\Enums\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    use HasUlids;

    protected $casts = [
        'date' => 'datetime',
        'category' => Category::class,
    ];

    protected $fillable = [
        'name',
        'description',
        'category',
        'amount',
        'date',
    ];

    public function scopeToday($query)
    {
        $query->whereDate('date', Carbon::today())
            ->orderBy('date', 'desc');
    }

    public function scopeThisMonth($query)
    {
        $query->whereMonth('date', Carbon::today()->month)
            ->whereYear('date', Carbon::today()->year)
            ->orderBy('date', 'desc');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

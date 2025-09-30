<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function scopeUpcoming($query)
    {
        return $query->where('end_date', '>=', \Carbon\Carbon::today())
                     ->orWhere(function($q) {
                         $q->whereNull('end_date')->where('date', '>=', \Carbon\Carbon::today());
                     })->orderBy('date', 'asc');
    }

    public function scopePast($query)
    {
        return $query->where('end_date', '<', \Carbon\Carbon::today())
                     ->orWhere(function($q) {
                         $q->whereNull('end_date')->where('date', '<', \Carbon\Carbon::today());
                     })->orderBy('date', 'asc');
    }
}

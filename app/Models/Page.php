<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pageTitle', 
        'pageText', 
        'photoPath', 
        'photoName', 
        'user_id', 
        'navigation_id'
    ];

    protected $hidden = [];

    protected $attributes = [
        'user_id' => 1,
        'navigation_id' => 1
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function navigation(): BelongsTo
    {
        return $this->belongsTo(Navigation::class);
    }

}

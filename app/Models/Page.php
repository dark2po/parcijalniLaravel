<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pageTitle', 
        'pageText', 
        'image', 
        'user_id', 
    ];

    protected $hidden = [];

    protected $attributes = [
        'user_id' => 1,
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function navigations(): HasMany
    {
        return $this->hasMany(Navigation::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navigation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['navigationName', 'uri', 'page_id'];

    protected $hidden = [];

    protected $attributes = [
        'page_id' => 1,
    ];


    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class)->withTrashed();
    }
}

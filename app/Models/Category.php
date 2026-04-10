<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    public function section():BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sku extends Model
{
    use HasFactory;
	
	public function products(): BelongsTo
    {
        return $this->belongsToMany(Product::class);
    }
	
	public function color(): HasOne
	{
		return $this->hasOne(Color::class);
	}
	
	public function size(): HasOne
	{
		return $this->hasOne(Size::class);
	}
	
}

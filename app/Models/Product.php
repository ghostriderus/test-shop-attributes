<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Color, App\Models\Size;

class Product extends Model
{
    use HasFactory;
	
	public function skus(): HasMany
    {
        return $this->HasMany(Sku::class);
    }
	
	public function colors(): Collection
	{
		return Color::whereIn('id', $this->skus()->where('quantity', '>', 0)->pluck('color_id'))->get();
	}
	
	public function sizes(): Collection
	{
		return Size::whereIn('id', $this->skus()->where('quantity', '>', 0)->pluck('size_id'))->get();
	}
	
	public function category(): BelongsTo
	{
		return $this->BelongsTo(Category::class);
	}

}

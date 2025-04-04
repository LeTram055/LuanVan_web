<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItems extends Model
{
    use HasFactory;
    protected $table = 'menu_items';
    
    protected $fillable = [
        'name', 
        'image_url',
        'price', 
        'category_id', 
        'description',
        'is_available'
    ];
    protected $guarded = ['item_id'];
    protected $primaryKey = 'item_id';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }

    public function ingredients()
    {
        return $this->hasMany(MenuIngredients::class, 'item_id', 'item_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'item_id', 'item_id');
    }

    public function calculateMaxServings(): int
    {
        $maxServings = PHP_INT_MAX;

        $this->load('ingredients.ingredient');

        foreach ($this->ingredients as $menuIngredient) {
            $ingredient = $menuIngredient->ingredient;

            // Tính số lượng còn lại có thể dùng cho món này
            $available = $ingredient->quantity - $ingredient->reserved_quantity;

            // Nếu không đủ, có thể làm được ít hoặc 0
            $canMake = floor($available / $menuIngredient->quantity_per_unit);

            $maxServings = min($maxServings, $canMake);
        }

        return $maxServings;
    }
}
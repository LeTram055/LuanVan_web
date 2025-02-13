<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotions extends Model
{
    use HasFactory;
    protected $table = 'promotions';
    
    protected $fillable = [
        'name', 
        'discount_type', 
        'discount_value',
        'start_date', 
        'end_date',
        'is_active'
    ];
    protected $guarded = ['promotion_id'];
    protected $primaryKey = 'promotion_id';
    public $timestamps = false;

    public function order()
    {
        return $this->hasMany(Orders::class, 'promotion_id', 'promotion_id');
    }
}
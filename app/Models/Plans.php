<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'name',
      'two_price',
      'price_three',
      'one_title',
      'two_title',
      'title_three',
      'one_desc',
      'two_dsc',
      'desc_three',
      'image_three',
      'two_img',
      'one_img',
      'status',
    ];

    public function user()
    {
  		return $this->belongsTo(User::class)->first();
  	}
}

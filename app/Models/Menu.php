<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
  protected $fillable = ['merchant_id', 'name', 'description', 'photo', 'price'];

  public function merchant() {
    return $this->belongsTo(Merchant::class);
  }
}

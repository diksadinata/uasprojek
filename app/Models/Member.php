<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['manga','autor'];
    protected $appends =['status_label'];

    public function getStatusLabelAttribute()
    {
        if($this->status == 0) {
            return '<span class="text-green-500">Regular</span>';
        }
        return '<span class="text-blue-500">Royal Pass<</span>';
    }
}

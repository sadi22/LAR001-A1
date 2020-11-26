<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function getDates()
    {
        return array('created_at', 'updated_at', 'deleted_at', 'unsubscribed_at');
    }
}

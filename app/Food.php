<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'user_id', 'pivot'];
    protected $casts = ['is_local' => 'boolean', 'id' => 'int'];
    protected $fillable = ['id', 'name', 'sodium', 'is_local', 'type', 'serving' => 'float'];

    protected $dates = [
        'created_at',
        'updated_at',
        'date_time'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

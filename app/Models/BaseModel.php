<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['name', 'created_at', 'updated_at'];
    protected $appends = ['value'];

    public function getValueAttribute() {
        return $this->attributes['name'];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class BaseModel extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['name', 'created_at', 'updated_at'];
    protected $appends = ['value'];

    public function getValueAttribute()
    {
        return $this->attributes['name'];
    }

    public function scopeWithFilter($query, Request $request)
    {
        return $query->when($request->query('q'), function (Builder $query, $q) {
            $query->where('name', 'LIKE', "%" . mb_strtolower($q) . "%");
        });
    }
}

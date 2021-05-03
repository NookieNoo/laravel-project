<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Attribute extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function scopeWithFilters($query, Request $request)
    {
        return $query->when($request->query('parent_attr_id'), function (Builder $query, $parentId) {
            $query->where('parent_id', $parentId);
        })
            ->when($request->query('q'), function (Builder $query, $q) {
                $query->where('name', 'LIKE', "%" . mb_strtolower($q) . "%")
                    ->orWhere('description', 'LIKE', "%" . mb_strtolower($q) . "%");
            });
    }
}

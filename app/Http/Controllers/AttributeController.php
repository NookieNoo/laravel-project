<?php

namespace App\Http\Controllers;

use App\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attrs = Attribute::all();

        return [
            'attrs' => $attrs
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        //TODO Проверить работу всех where
        return [
            'attrs' => Attribute::withFilters($request)->get()
        ];
    }
}

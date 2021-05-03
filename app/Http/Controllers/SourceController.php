<?php

namespace App\Http\Controllers;

use App\Models\Source;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'sources' => Source::all()
        ];
    }
}

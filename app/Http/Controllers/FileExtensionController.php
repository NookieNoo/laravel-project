<?php

namespace App\Http\Controllers;

use App\Models\FileExtension;
use Illuminate\Http\Request;

class FileExtensionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        return [
            'file_extensions' => FileExtension::withFilter($request)->get()
        ];
    }
}

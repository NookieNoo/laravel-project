<?php

namespace App\Http\Controllers;

use App\Models\FileExtension;

class FileExtensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'file_extensions' => FileExtension::all()
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\FileRole;
use Illuminate\Http\Request;

class FileRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): array
    {
        return [
            'file_roles' => FileRole::all()
        ];
    }
}

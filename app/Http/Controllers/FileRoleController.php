<?php

namespace App\Http\Controllers;

use App\Models\FileRole;
use Illuminate\Http\Request;

class FileRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        return [
            'file_roles' => FileRole::withFilter($request)->get()
        ];
    }
}

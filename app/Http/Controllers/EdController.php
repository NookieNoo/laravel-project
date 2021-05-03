<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Validator;

class EdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = true;
    }

    /**
     * Create a new resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        $dataValidator = Validator::make($request->all(), [
            'data' => 'required|json'
        ]);

        if ($dataValidator->fails()) {
            return response()->json(['code' => 400, 'message' => $dataValidator->errors()], 400);
        }

        $data = json_decode($request->input('data'), true);

        $validator = Validator::make($data, [
            'name' => 'required|string',
            'num' => 'required|string',
            'reg_date' => 'required|date|date_format:Y-m-d',
            'ed_type_id' => 'required|integer|min:1', //TODO
//            'ed_type_id' => 'required|integer|min:1|exists:document_types,id',
            'source_id' => 'required|integer|min:1|exists:sources,id',
            'source_ed_id' => 'required|string',
            'save_period' => 'integer|min:1',
            'dos_id' => 'integer|min:1|exists:dossiers,id',
            'attr' => 'required|array',
            'attr.*.attr_id' => 'required|integer|min:1', // ?? Из базы или из запроса
            'attr.*.attr_value' => 'integer|min:1|max:4', // Кастомный ??
            'files' => 'required|array',
            'files.*.fr_id' => 'required|integer|min:1|exists:file_roles,id',
            'files.parent_file' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'message' => $validator->errors()], 400);
        }





        //TODO Вернуть id
        return response()->json(['code' => 201, 'message' => url('/ead/ead/eds/1')], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}

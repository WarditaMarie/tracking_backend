<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubmitDocument;

class SubmitDocumentController extends Controller
{
    public function store(Request $request)
    {
        $submitdocument = new SubmitDocument;
        $submitdocument->name = $request->input('name');
        $submitdocument->birthdate = $request->input('birthdate');
        $submitdocument->address = $request->input('address');
        $submitdocument->contactnumber = $request->input('contactnumber');
        $submitdocument->docu_type = $request->input('docu_type');
        $submitdocument->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Your Details have been submitted',
        ]);

    }
}

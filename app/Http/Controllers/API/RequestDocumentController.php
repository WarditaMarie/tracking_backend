<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestDocument;

class RequestDocumentController extends Controller
{
    public function index()
    {
        $requestdocument = RequestDocument::all();
        return response() ->json([
            'status' => 200,
            'message' => $requestdocument,
        ]);
    }
    public function store(Request $request)
    {
        $requestdocument = new RequestDocument;
        $requestdocument->trackingid= $request->input('trackingid');
        $requestdocument->name = $request->input('name');
        $requestdocument->birthdate = $request->input('birthdate');
        $requestdocument->address = $request->input('address');
        $requestdocument->contactnumber = $request->input('contactnumber');
        $requestdocument->docu_type = $request->input('docu_type');
        $requestdocument->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Details Submitted',
        ]);
    }
}

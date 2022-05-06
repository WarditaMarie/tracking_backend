<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\SubmitDocumentController;
use App\Http\Controllers\API\UploadFileController;
use App\Http\Controllers\API\RequestDocumentController;

Route::post('/UploadDocument', [SubmitDocumentController::class, 'store']);


Route::get('/RequestSubmitted', [RequestDocumentController::class, 'index']);
Route::post('/RequestSubmitted', [RequestDocumentController::class, 'store' ]);

Route::post('/Submitted', [UploadFileController::class, 'store' ]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
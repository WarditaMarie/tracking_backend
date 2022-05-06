<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UploadFile;

class UploadFileController extends Controller
{
    public function store(Request $req){
        $req->validate([
            'file.*' => 'required|mimes:pdf,doc,docx|max:2048',
            'validID1.*' => 'required|mimes:png,jpg,jpeg|max:2048',
            'validID2.*' => 'required|mimes:png,jpg,jpeg|max:2048']);

         $uploadfile= new UploadFile();
         $uploadfile->primaryID=$req->primaryID; 
         $uploadfile->secondaryID=$req->secondaryID;
            if($req->file()) {
                $file = time().'_Docs_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('Uploads', $file, 'public');
                $uploadfile->file =  $filePath;

                $validID1 = time().'_ID1_'.$req->validID1->getClientOriginalName();
                $validID1Path = $req->file('validID1')->storeAs('Uploads', $validID1, 'public');
                $uploadfile->validID1 =  $validID1Path;

                $validID2 = time().'_ID2_'.$req->validID2->getClientOriginalName();
                $validID2Path = $req->file('validID2')->storeAs('Uploads', $validID2, 'public');
                $uploadfile->validID2= $validID2Path;


                $uploadfile->save();
                
            }
            return response()->json([
                'status'=> 200,
                'message'=> 'Your files has been submitted',
            ]);
    }
              
   
   
               

}
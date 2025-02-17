<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ValidationInformation;

class PracticalTrainingController extends Controller
{
    public function Dashboard(){
        return view('Dashboard');
    }

    public function AddInformation(){
        return view('AddInformation');
    }

    public function PostAddInformation(ValidationInformation $request){

        // $destinationPath = public_path('assets/uploads/');

        // // Handle the image upload
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $fileName = time() . '_' . $file->getClientOriginalName(); // Unique file name
        //     $file->move($destinationPath, $fileName); // Move file to public/assets/uploads/{date}

        //     // Save relative path in the database
        //     $imagePath = 'assets/uploads/' . $fileName;
        // } else {
        //     $imagePath = null;
        // }

        $file = $request->file('image');
        $base64Image = base64_encode(file_get_contents($file));

        $data = [
            'id_user' => Auth::user()->id,
            // 'image' => $imagePath,
            'image' => "data:image/jpeg;base64,".$base64Image,
            'id_gender' => $request->input('id_gender'),
            'no_matrik' => $request->input('no_matrik'),
            'tarikh_lapor' => $request->input('tarikh_lapor'),
            'id_course' => $request->input('id_course'),
            'id_ipta' => $request->input('id_ipta'),
            'created_by' => Auth::user()->name,
            'created_at' => now(),
        ];

        DB::table('tb_info')->insert($data);

        return redirect()->route('ListInformation')
        ->with('success-insert', 'Record Update!');

    }

    public function ListInformation(){
        return view('ListInformation');
    }

    public function UpdateInformation(){
        return view('UpdateInformation');
    }

    public function PostUpdateInformation(ValidationInformation $request, $id_info){

        // $destinationPath = public_path('assets/uploads/');

        // $data_info = DB::table('tb_info')
        //     ->select(
        //         'image',
        //         'id_info',
        //     )
        //     ->where('id_info', $id_info)
        //     ->first();

        // if($request->hasFile('image')){

        //     $file = $request->file('image');

        //     File::delete($destinationPath.$data_info->image);

        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->move($destinationPath, $fileName);
        //     $imagePath = 'assets/uploads/' . $fileName;
            
        // }

        $file = $request->file('image');
        $base64Image = base64_encode(file_get_contents($file));

        $data = [
            'id_user' => Auth::user()->id,
            // 'image' => $imagePath,
            'image' => "data:image/jpeg;base64,".$base64Image,
            'id_gender' => $request->input('id_gender'),
            'no_matrik' => $request->input('no_matrik'),
            'tarikh_lapor' => $request->input('tarikh_lapor'),
            'id_course' => $request->input('id_course'),
            'id_ipta' => $request->input('id_ipta'),
            'updated_by' => Auth::user()->name,
            'updated_at' => now(),
        ];

        DB::table('tb_info')->where('id_info', $id_info)->update($data);

        return redirect()->route('ListInformation')
        ->with('success-update', 'Record Updated!');
    }

    public function DeleteInformation($id_info){

        DB::table('tb_info')->where('id_info', $id_info)->delete();

        return redirect()->route('ListInformation')
        ->with('success-delete', 'Record Updated!');
    }
}

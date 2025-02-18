<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ValidationInformation;
use App\Http\Requests\ValidationPersonalInformation;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('Dashboard');
    }

    public function AdminAddInformation(){
        return view('AddInformation');
    }

    public function AdminPostAddInformation(ValidationInformation $request){

        // Handle the image upload
        if($request->hasFile('image')){
            $file = $request->file('image');
            $base64Image = base64_encode(file_get_contents($file));
            $base64Image = "data:image/jpeg;base64,".$base64Image;
        } else {
            $base64Image = null;
        }

        // Handle the file upload
        $destinationPath = public_path('assets/uploads/');

        if ($request->hasFile('nama_fail')) {
            $file = $request->file('nama_fail');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Unique file name
            $file->move($destinationPath, $fileName); // Move file to public/assets/uploads/{date}

            // Save relative path in the database
            $filePath = 'assets/uploads/' . $fileName;
        } else {
            $filePath = null;
        }

        $data = [
            'image' => $base64Image,
            'nama_fail' => $filePath,
            'id_user' => Auth::user()->id,
            'id_department' => $request->input('id_department'),
            'tarikh_fail' => $request->input('tarikh_fail'),
            'created_by' => Auth::user()->name,
            'created_at' => now(),
        ];

        DB::table('tb_info')->insert($data);

        return redirect()->route('AdminListInformation')
        ->with('success-insert', 'Record Update!');

    }

    public function AdminListInformation(){
        return view('ListInformation');
    }
    
    public function AdminUpdateInformation(){
        return view('UpdateInformation');
    }

    public function AdminPostUpdateInformation(ValidationInformation $request, $id_info){

        // Retrieve the existing image directly from the database
        $existingImage = DB::table('tb_info')
        ->where('id_info', $id_info)
        ->value('image');

        $existingFile = DB::table('tb_info')
        ->where('id_info', $id_info)
        ->value('nama_fail');

        // Handle the image upload
        if($request->hasFile('image')){
            $file = $request->file('image');
            $base64Image = base64_encode(file_get_contents($file));
            $base64Image = "data:image/jpeg;base64,".$base64Image;
        } else {
            $base64Image = $existingImage;
        }

        // Handle the file upload
        $destinationPath = public_path('assets/uploads/');

        if ($request->hasFile('nama_fail')) {

            File::delete(public_path($existingFile));

            $file = $request->file('nama_fail');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Unique file name
            $file->move($destinationPath, $fileName); // Move file to public/assets/uploads/{date}

            // Save relative path in the database
            $filePath = 'assets/uploads/' . $fileName;
        } else {
            $filePath = $existingFile;
        }

        $data = [
            'image' => $base64Image,
            'nama_fail' => $filePath,
            'id_user' => Auth::user()->id,
            'id_department' => $request->input('id_department'),
            'tarikh_fail' => $request->input('tarikh_fail'),
            'updated_by' => Auth::user()->name,
            'updated_at' => now(),
        ];

        DB::table('tb_info')->where('id_info', $id_info)->update($data);

        return redirect()->route('AdminListInformation')
        ->with('success-update', 'Record Updated!');
    }

    public function AdminDeleteInformation($id_info){

        $existingFile = DB::table('tb_info')
        ->where('id_info', $id_info)
        ->value('nama_fail');

        File::delete(public_path($existingFile));

        DB::table('tb_info')->where('id_info', $id_info)->delete();

        return redirect()->route('ListInformation')
        ->with('success-delete', 'Record Updated!');
    }

    public function AdminListUsers(){
        return view('ListUsers');
    }
    
    public function AdminUpdateUsersInformation(){
        return view('UpdateUsersInformation');
    }

    public function PostAdminUpdateUsersInformation(ValidationPersonalInformation $request, $id_user){
    
        // $encrypt = bcrypt($request->input('password'));

        $data = [
            'name' => $request->input('name'),
            'no_kp' => $request->input('no_kp'),
            'email' => $request->input('email'),
            // 'password' => $encrypt,
            'id_level' => 2,
        ];

        // Update password only if it's filled
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }
    
        DB::table('users')->where('id', $id_user)->update($data);
    
        return redirect()->route('AdminListUsers', $id_user)
        ->with('success-update', 'Record Updated!');
    }

    public function AdminDeleteUsersInformation($id_user){
        DB::table('users')->where('id', $id_user)->delete();

        return redirect()->route('AdminListUsers')
        ->with('success-delete', 'Record Updated!');
    }

    public function AdminPersonalInformation(){
        return view('PersonalInformation');
    }

    public function UpdateAdminPersonalInformation(ValidationPersonalInformation $request, $id_user){
    
        // $encrypt = bcrypt($request->input('password'));

        $data = [
            'name' => $request->input('name'),
            'no_kp' => $request->input('no_kp'),
            'email' => $request->input('email'),
            // 'password' => $encrypt,
            'id_level' => 2,
        ];

        // Update password only if it's filled
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }
    
        DB::table('users')->where('id', $id_user)->update($data);
    
        return redirect()->route('PersonalInformation', $id_user)
        ->with('success-update', 'Record Updated!');
    }
    
}

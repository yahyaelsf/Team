<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;

class ApplyController extends Controller
{
    public function index()
    {
        return view('Admin.Applies.index')->with('applies', Apply::all());
    }
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'services'=>'required',
            'about_project'=>'required',
            'file'=>'file'
        ]);


        $filePath = "";
        if ($request->has('file')) {
            $filePath = uploadFile('projects', $request->file);
        }

//        $apply= Apply::Create([
//            'name' => $request->name,
//            'company_name' => $request->company_name,
//            'mobile' => $request->mobile,
//            'email' => $request->email,
//            'services' => $request->services,
//            'about_project' => $request->about_project,
//            'file' => $filePath,
//        ]);
        $apply = $request->all();
        $apply['services'] = $request->input('services');
        $apply['file']=$filePath;

        Apply::create($apply);




        return redirect()->route('home')->with(['success' => 'تم الحفظ بنجاح']);

    }
    public function destroy($id)
    {

        try {
            $apply = Apply::find($id);
            if (!$apply)
                return redirect()->route('apply.index')->with(['error' => 'هذا القسم غير موجود ']);
            $apply->delete();
            return redirect()->route('apply.index')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('apply.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    public function getDownload($id){
        $apply = Apply::find($id);
        $file= $apply->file;
        return Response::download($file);
    }
}

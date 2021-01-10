<?php

namespace App\Http\Controllers;

use App\Bussines;
use Illuminate\Http\Request;

class BussinesController extends Controller
{
    public function index()
    {
        return view('Admin.Bussines.index')->with('bussiness', Bussines::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.Bussines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required_without:id|mimes:jpg,jpeg,png','svg'
        ]);


        $filePath = "";
        if ($request->has('photo')) {
            $filePath = uploadImage('bussines', $request->photo);
        }

        $bussiness= Bussines::Create([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $filePath,
        ]);

        $bussiness->save();

        return redirect()->route('bussines.index')->with(['success' => 'تم الحفظ بنجاح']);

    }
    public function edit($id)
    {
        //get specific categories and its translations
        $bussines = Bussines::find($id);

        if (!$id)
            return redirect()->route('bussines.index')->with(['error' => 'هذا القسم غير موجود ']);

        return view('Admin.Bussines.edit', compact('bussines'));
    }
    public function update($id,Request $request)
    {
        try {
            $bussines =Bussines::find($id);
            if (!$bussines)
                return redirect()->route('bussines.index')->with(['error' => 'هذا القسم غير موجود ']);
            $this->validate($request,[
                'photo' => 'required_without:id|mimes:jpg,jpeg,png','svg'
            ]);
               $bussines->update([
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
            if ($request->has('photo')) {
                $filePath = uploadImage('bussines', $request->photo);
                Bussines::where('id', $id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            return redirect()->route('bussines.index')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {
           return $ex;
            return redirect()->route('bussines.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $bussines = Bussines::find($id);
            if (!$bussines)
                return redirect()->route('bussines.index')->with(['error' => 'هذا القسم غير موجود ']);
            $bussines->delete();
            return redirect()->route('bussines.index')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('bussines.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}

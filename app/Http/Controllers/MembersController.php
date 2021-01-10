<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Members.index')->with('members', Member::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Members.create');
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
            'phone' => 'required',
            'job_title' => 'required',
            'photo' => 'required_without:id|mimes:jpg,jpeg,png','svg'
        ]);


        $filePath = "";
        if ($request->has('photo')) {
            $filePath = uploadImage('bussines', $request->photo);
        }

        $bussiness= Member::Create([
            'name' => $request->name,
            'phone' => $request->phone,
            'job_title' => $request->job_title,
            'photo' => $filePath,
        ]);

        $bussiness->save();

        return redirect()->route('member.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*
*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get specific categories and its translations
        $member = Member::find($id);

        if (!$id)
            return redirect()->route('member.index')->with(['error' => 'هذا القسم غير موجود ']);

        return view('Admin.Members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $member = Member::find($id);
            if (!$member)
                return redirect()->route('member.index')->with(['error' => 'هذا القسم غير موجود ']);
            $this->validate($request, [
                'photo' => 'required_without:id|mimes:jpg,jpeg,png', 'svg'
            ]);
            $member->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            if ($request->has('photo')) {
                $filePath = uploadImage('bussines', $request->photo);
                Member::where('id', $id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }
            return redirect()->route('member.index')->with(['success' => 'تم ألتحديث بنجاح']);
        }
        catch (\Exception $ex) {
            return $ex;
            return redirect()->route('member.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $member = Member::find($id);
            if (!$member)
                return redirect()->route('member.index')->with(['error' => 'هذا القسم غير موجود ']);
            $member->delete();
            return redirect()->route('member.index')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('member.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}

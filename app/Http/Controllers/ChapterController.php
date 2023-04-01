<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapters= Chapter::with('media')->get();

        return request()->wantsJson()
            ? response()->json(['success'=>'true','data'=>$chapters],200)
            : view('chapters.index',['chapters'=>$chapters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('chapters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=  $request->validate(['name'=>'required', 'string','max:255']);
        Chapter::create($data);
        return  redirect()->back()->with('success','تم إنشاء الفصل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        return view('chapters.show', compact('chapter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        return  view('chapters.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        $chapter->update(['name'=>$request->name]);
        return  redirect()->back()->with('success','تم تعديل الفصل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return  redirect()->back()->with('success','تم حذف الفصل بنجاح');
    }

    public function downloadFile(Media $media)
    {
        return $media;
    }

    public function deleteFile(Media $media, chapter $chapter)
    {
        $media->delete();

        session()->flash('success', 'تم حذف الملف بنجاح');

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ContentModel;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mengcode');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'category' => ['required', 'string'],
            'link' => ['required', 'integer'],
            'src' =>  ['required', 'string'],
            'description' =>  ['required', 'string'],
            'image' => ['image|file|max: 1024'],
        ]);
        $request->file('image')->store('content-image');
        $input = [
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'link' => $request->input('link'),
            'src' => $request->input('src'),
            'description' => $request->input('description'),
            // 'image' => $request->input('image'),
        ];
        ContentModel::create($input);
        return redirect()->route('content.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContentModel  $contentModel
     * @return \Illuminate\Http\Response
     */
    public function show(ContentModel $contentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContentModel  $contentModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentModel $contentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContentModel  $contentModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentModel $contentModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentModel  $contentModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentModel $contentModel)
    {
        //
    }
}
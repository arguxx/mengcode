<?php

namespace App\Http\Controllers;

use App\Models\AdviceModel;
use Illuminate\Http\Request;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'link' => ['required', 'string'],
            'description' =>  ['required', 'string'],
        ]);


        $input = [
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'link' => $request->input('link'),
            'description' => $request->input('description'),
        ];
        
        AdviceModel::create($input);
        return redirect()->route('content.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdviceModel  $adviceModel
     * @return \Illuminate\Http\Response
     */
    public function show(AdviceModel $adviceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdviceModel  $adviceModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AdviceModel $adviceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdviceModel  $adviceModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdviceModel $adviceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdviceModel  $adviceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdviceModel $adviceModel)
    {
        //
    }
}
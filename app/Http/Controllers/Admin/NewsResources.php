<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resources;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Queries\QueryBuilderResources;

class NewsResources extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryBuilderResources $resources)
    {
        return view('admin.resources.index', [
            'resources' => $resources->getResources(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required',
        ]);
        $resources = new Resources($validated);

        if ($resources->save()) {
            return redirect()->route('admin.resources.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(QueryBuilderResources $resources, int $id)
    {
        return view('admin.resources.edit', [
            'resource' => $resources->getResourceById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resources $resource)
    {
        $validated = $request->validate([
            'url' => 'required',
        ]);

        $resource = $resource->fill($validated);

        if ($resource->save()) {
            return redirect()->route('admin.resources.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()->with('error', 'Ошибка обновления');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resources::destroy($id);

        return redirect()->route('admin.resources.index')->with('success', 'запись удалена');
    }
}
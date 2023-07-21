<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use App\Models\Page;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Navigation::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('navigation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Navigation::create([
            'navigationName' => $request->input('navigationName'),
            'uri' => $request->input('uri'),
        ]);

        return redirect()->route('navigation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Navigation $navigation)
    {
        return $navigation;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navigation $navigation)
    {
        return view('navigation.editDelete', [
            'id' => $navigation->id,
            'navigationName' => $navigation->navigationName,
            'uri' => $navigation->uri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Navigation $navigation)
    {
        $navigation->navigationName = $request->input('navigationName');
        $navigation->uri = $request->input('uri');
        $navigation->save();

        return redirect()->route('navigation.show', $navigation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $navigation)
    {
        Navigation::destroy($navigation);

        return redirect()->route('navigation.index');
    }
}

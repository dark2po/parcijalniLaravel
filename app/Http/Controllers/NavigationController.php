<?php

namespace App\Http\Controllers;

use App\Http\Requests\NavigationStoreRequest;
use App\Http\Requests\NavigationUpdateRequest;
use App\Models\Navigation;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('navigation.index', ['navigations' => Navigation::all()->toArray()]);
        // return Navigation::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = Page::pluck('pageTitle', 'id')->toArray();
        return view('navigation.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NavigationStoreRequest $request)
    {

        Navigation::create([
            'navigationName' => $request->validated('navigationName'),
            'uri' => $request->validated('uri'),
            'page_id' => $request->validated('page_id')
        ]);

        return redirect()->route('navigation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Navigation $navigation)
    {
        return view('navigation.show', ['navigation' => $navigation->toArray()]);
        // return $navigation;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navigation $navigation)
    {
        $pages = Page::pluck('pageTitle', 'id')->toArray();
        return view('navigation.editDelete', [
            'id' => $navigation->id,
            'navigationName' => $navigation->navigationName,
            'uri' => $navigation->uri,
            'pages' => $pages
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NavigationUpdateRequest $request, Navigation $navigation)
    {

        $navigation->navigationName = $request->validated('navigationName');
        $navigation->uri = $request->validated('uri');
        $navigation->page_id = $request->validated('page_id');
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

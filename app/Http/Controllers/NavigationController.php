<?php

namespace App\Http\Controllers;

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
        return Navigation::all();
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
    public function store(Request $request)
    {
        $request->validate([
            'navigationName' => ['required', 'string', 'max:255', 'min:2', 'unique:'.Navigation::class],
            'uri' => ['required', 'string', 'max:255', 'min:2'],
            'page_id' => ['required', 'exists:pages,id']
        ]);

        Navigation::create([
            'navigationName' => $request->input('navigationName'),
            'uri' => $request->input('uri'),
            'page_id' => $request->input('page_id')
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
    public function update(Request $request, Navigation $navigation)
    {
        $request->validate([
            'navigationName' => ['required', 'string', 'max:255', 'min:2', Rule::unique(Navigation::class)->ignore($navigation->id)],
            'uri' => ['required', 'string', 'max:255', 'min:2'],
            'page_id' => ['required', 'exists:pages,id']
        ]);

        $navigation->navigationName = $request->input('navigationName');
        $navigation->uri = $request->input('uri');
        $navigation->page_id = $request->input('page_id');
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

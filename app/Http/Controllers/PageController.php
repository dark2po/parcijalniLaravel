<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Page::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::pluck('name', 'id')->toArray();
        return view('page.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pageTitle' => ['required', 'string', 'max:50', 'min:2', 'unique:'.Page::class],
            'pageText' => ['required', 'string', 'max:255', 'min:25'],
            'photoPath' => ['required', 'string', 'max:255', 'min:2'],
            'photoName' => ['required', 'string', 'max:255', 'min:2'],
            'user_id' => ['required', 'exists:users,id']
        ]);

        Page::create([
            'pageTitle' => $request->input('pageTitle'),
            'pageText' => $request->input('pageText'),
            'photoPath' => $request->input('photoPath'),
            'photoName' => $request->input('photoName'),
            'user_id' => $request->input('user_id'),

        ]);

        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        $users = User::pluck('name', 'id')->toArray();
        return view('page.editDelete', [
            'id' => $page->id,
            'pageTitle' => $page->pageTitle,
            'pageText' => $page->pageText,
            'photoPath' => $page->photoPath,
            'photoName' => $page->photoName,
            'user_id' => $page->user_id, 
            "users" => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'pageTitle' => ['required', 'string', 'max:50', 'min:2', Rule::unique(Page::class)->ignore($page->id)],
            'pageText' => ['required', 'string', 'max:255', 'min:25'],
            'photoPath' => ['required', 'string', 'max:255', 'min:2'],
            'photoName' => ['required', 'string', 'max:255', 'min:2'],
            'user_id' => ['required', 'exists:users,id']
        ]);

        $page->pageTitle = $request->input('pageTitle');
        $page->pageText = $request->input('pageText');
        $page->photoPath = $request->input('photoPath');
        $page->photoName = $request->input('photoName');
        $page->save();

        return redirect()->route('page.show', $page);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $page)
    {
        Page::destroy($page);

        return redirect()->route('page.index'); 
    }
}

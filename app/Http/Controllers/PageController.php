<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
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
        return view('page.index', ['pages' => Page::all()->toArray()]);
        // return Page::all();
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
    public function store(PageStoreRequest $request)
    {


        Page::create([
            'pageTitle' => $request->validated('pageTitle'),
            'pageText' => $request->validated('pageText'),
            'photoPath' => $request->validated('photoPath'),
            'photoName' => $request->validated('photoName'),
            'user_id' => $request->validated('user_id'),

        ]);

        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('page.show', ['page' => $page->toArray()]);
        // return $page;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        // dd($page->pageText);
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
    public function update(PageUpdateRequest $request, Page $page)
    {

        $page->pageTitle = $request->validated('pageTitle');
        $page->pageText = $request->validated('pageText');
        $page->photoPath = $request->validated('photoPath');
        $page->photoName = $request->validated('photoName');
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

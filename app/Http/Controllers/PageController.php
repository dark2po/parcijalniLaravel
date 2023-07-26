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
        return view('page.index', ['pages' => Page::all()]);
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
        if (is_null($request->image)) {
            $path = 'images/noImageAvailable.png';
        } else {
            $path = $request->image->store('images', 'public');
        }
        

        Page::create([
            'pageTitle' => $request->validated('pageTitle'),
            'pageText' => $request->validated('pageText'),
            'image' => $path,
            'user_id' => $request->validated('user_id'),
        ]);


        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('page.show', ['page' => $page]);
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
            'image' => $page->image,
            'user_id' => $page->user_id, 
            "users" => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageUpdateRequest $request, Page $page)
    {
        if (is_null($request->image)) {
            $path = $page->image;
        } else {
            $path = $request->image->store('images', 'public');
        }

        $page->pageTitle = $request->validated('pageTitle');
        $page->pageText = $request->validated('pageText');
        $page->image = $path;
        $page->user_id = $request->validated('user_id');
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

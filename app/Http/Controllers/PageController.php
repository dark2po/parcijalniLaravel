<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

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
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Page::create([
            'pageTitle' => $request->input('pageTitle'),
            'pageText' => $request->input('pageText'),
            'photoPath' => $request->input('photoPath'),
            'photoName' => $request->input('photoName'),

            //  ZA SADA KOMENTIRANO  -  RELACIJE U BAZI - HARDKODIRANE DEFAULT VRIJEDNOSTI
            // 'user_id' => $request->input('user_id'),
            // 'navigation_id' => $request->input('navigation_id'),
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
        return view('page.editDelete', [
            'id' => $page->id,
            'pageTitle' => $page->pageTitle,
            'pageText' => $page->pageText,
            'photoPath' => $page->photoPath,
            'photoName' => $page->photoName,

            //  ZA SADA KOMENTIRANO  -  RELACIJE U BAZI - HARDKODIRANE DEFAULT VRIJEDNOSTI
            // 'user_id' => $page->user_id,
            // 'navigation_id' => $page->navigation_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
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

<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class catalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogs = Catalog::all(); 
        return view('catalog', compact('catalogs'));
    }
    private $catalogs=[
        [
        'id' => 1,
        'title' => 'Atomic Habits',
        'description' => 'Buku Ini sangat berguna bagi motivasi hidup yang kalian jalani',
        'image' => 'build/assets/upload/atomic.avif'
        ],
    ];

    public function home() {
        $catalogs = Catalog::all(); 
        return view('catalog', compact('catalogs'));
    }
    // public function details($id) {
    //     $item = collect($this->catalogs)->firstWhere('id', $id);
    //     return view('detail', [ 
    //         'item' => $item
    //     ]);
    // }

    public function details($id) {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp,avif',
        ]);
    
        $imagePath = $request->file('image')->store('catalog', 'public'); 
        
        Catalog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath, 
        ]);
        session()->flash('notif', 'Catalog berhasil ditambahkan!');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Catalog::findOrFail($id); 
        return view('detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $catalog = Catalog::findOrFail($id);
        return view('edit', compact('catalog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,webp,avif',
        ]);
    
        $catalog = Catalog::findOrFail($id);
        $catalog->title = $request->title;
        $catalog->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('catalog', 'public');
            $catalog->image = $imagePath;
        }
    
        $catalog->save();
    
        session()->flash('notif', 'Catalog berhasil diperbarui!');
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $catalog = Catalog::findOrFail($id);
        $catalog->delete();
    
        return redirect()->route('books.index');
    }
}

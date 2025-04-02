<?php

namespace App\Http\Controllers;
use App\Models\Promotion;
use Illuminate\Http\Request;
class RessourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::latest()->get();
        return view('promotions.promotion', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $promotion = new Promotion();
        $promotion->title = $request->title;
        $promotion->description = $request->description;

        if ($request->hasFile('image')) {
            $promotion->image = $request->file('image')->store('promotions', 'public');
        } else {
            $promotion->image = 'https://dummyimage.com/720x400';
        }
        $promotion->save();
        return redirect()->route('promotions.index')->with('success', 'Promotion created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
            // Ambil promotion berdasarkan ID
    $promotion = Promotion::findOrFail($id);

    // Kembalikan view dengan data promotion
    return view('promotions.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $promotion = Promotion::findOrFail($id);
    
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,gif|max:2048' // Validasi gambar
        ]);
    
        // Perbarui data kecuali gambar
        $promotion->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    
        // Jika ada file gambar yang diunggah, update tanpa menghapus yang lama
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('promotions', 'public');
            $promotion->update(['image' => $imagePath]);
        }
    
        return redirect()->route('promotions.index')->with('success', 'Promotion updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
        return redirect()->route('promotions.index')->with('success', 'Promotion deleted successfully');
    }
    
}

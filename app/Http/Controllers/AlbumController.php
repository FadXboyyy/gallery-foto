<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;


class AlbumController extends Controller
{
    public function index()
    {
        $albumData = Album::where('user_id',auth()->id())->get();
        return view('index', compact('albumData'));
    }

    public function create()
    {
        return view('album.create');
    }

    public function store(Request $request)
    {

       $albumData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_album' => 'required',
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $albumData = $request->all();
            $albumData['image'] = $imageName;
            $albumData['user_id'] = auth()->id();
            $albumData = Album::create($albumData);

            return redirect()->route('index')->with('success', 'Album sukses dibuat!.');
        }

        return redirect()->back()->with('error', 'No image uploaded.');
    }

    public function show($id)
    {
        $albumData = Album::findOrFail($id);
        $fotos = $albumData->fotos;
        return view('album.update', compact('albumData', 'fotos'));
    }

    public function update(Request $request, $id)
    {
        $albumData = Album::findOrFail($id);

        $albumData->update($request->all());
        return redirect()->route('index')->with('success','data berhasil di update');
    }

    public function destroy($albumId)
    {

        $albumData = Album::findOrFail($albumId);
        $albumData->foto()->delete();
        $albumData->delete();
        return redirect()->route('index')->with('success', 'Album beserta foto-foto di dalamnya berhasil dihapus.');
    }
}

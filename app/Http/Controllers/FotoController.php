<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;

class FotoController extends Controller
{
// public function imageall()
// {
//    $foto = Foto::all();
//    return view('foto.index',compact('foto'));
// }



   public function foto( $albumId)
  {
   $album = Album::findOrFail($albumId);
   $foto = $album->foto; 
   return view('foto.foto', compact('foto'));
  }
    
   

   public function tambahfoto()
   {
      $albums = Album::all();
    return view('foto.tambah', compact('albums'));
   }


   public function upload(Request $request)
   {
     $request->validate([
         'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         'album_id' => 'required|exists:albums,id',
         
      ]);
      $albumId = $request->input('album_id'); 
      if ($request->hasFile('foto')) {
         $image = $request->file('foto');
         $imageName = time() . '.' . $image->getClientOriginalExtension();
         $image->move(public_path('fotos'), $imageName);
         $image['user_id'] = auth()->id();
         $foto['foto'] = $imageName;

         Foto::create([
            'foto' => $imageName,
            'album_id' => $request->album_id,
        ]);
        return redirect()->route('foto', ['albumId' => $albumId])->with('success', 'Foto created successfully.');

      }
   }

   public function delete($id)
  {
   $foto = Foto::findOrFail($id);
   $foto ->delete();
   return redirect('index');
  }

   
   
}

<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    //
    public function index()
    {
        $photo = Photo::all();
        return view('admin.media.index', compact('photo'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $files = $request->file('file');
        $name = time() . $files->getClientOriginalName();
        $files->move('images', $name);
        Photo::create(['file'=>$name]);
    }

    public function destroy($id)
    {
        $photos = Photo::findOrFail($id);
        unlink(public_path() . $photos->file);
        $photos->delete();
        return redirect('admin/media');
    }
}

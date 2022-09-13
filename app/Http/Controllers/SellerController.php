<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SellerController extends Controller
{
    public function profile()
    {
        return view('seller.profile');
    }
    public function detail()
    {
        return view('seller.track_detail');
    }
    public function allSongs(){
        $songs = Song::all();
        $albums = Album::all();
        return view('seller.song.create_song')->with('songs', $songs)->with('albums',$albums);
    }

    public function addSongs(Request $request)
    {
        $request->validate([
            'song' => 'required|unique:songs',
            'category' => 'required',
        ]);
        $song = $request->file('song');
        $name_gen = hexdec(uniqid());
        $song_ext = strtolower($song->getClientOriginalExtension());
        $song_name = $name_gen . '.' . $song_ext;
        $up_location = 'songs/';
        $last_song = $up_location . $song_name;
        $song->move($up_location, $song_name);
        Song::insert([
            'user_id' => Auth::user()->id,
            'song_name' => $request->song_name,
            'category' => $request->category,
            'album_id' => $request->album_id,
            'song' => $last_song,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back();
    }
    public function editSong($id)
    {
        $song = Song::find($id);
        return view('edit_song')->with('song', $song);
    }
    public function updateSong(Request $request, $id)
    {
        $Song = Song::find($id);
        $song_path = $Song->song_path;
        $song = $request->file('song');

        if ($song) {
            $name_gen = hexdec(uniqid());
            $song_ext = strtolower($song->getClientOriginalExtension());
            $song_name = $name_gen . '.' . $song_ext;
            $up_location = 'songs/';
            $last_song = $up_location . $song_name;
            $song->move($up_location, $song_name);
            if (File::exists($song_path)) {
                File::delete($song_path);
            } else {
                dd('file not found');
            }
            Song::find($id)->update([
                'song_name' => $request->song_name,
                'song' => $last_song,
                'created_at' => Carbon::now()
            ]);
            return Redirect()->back();
        }
        else{
            Song::find($id)->update([
                'song_name' => $request->song_name,
                'created_at' => Carbon::now()
            ]);
            return Redirect()->back();
        }
    }
    public function deleteSong($id){
        $song = Song::find($id);
        $song = $song->song;
        Song::find($id)->delete();
        if (File::exists($song)) {
            File::delete($song);
        }
        return redirect()->back();
    }
    public function addAlbum(Request $request)
    {
        $request->validate([
            'album_name' => 'required|unique:albums',
        ]);
        $Cover_photo = $request->file('cover_photo');
        $name_gen = hexdec(uniqid());
        $Cover_ext = strtolower($Cover_photo->getClientOriginalExtension());
        $Cover_name = $name_gen . '.' . $Cover_ext;
        $up_location = 'images/album_cover/';
        $last_img = $up_location . $Cover_name;
        $Cover_photo->move($up_location, $Cover_name);
        Album::insert([
            'user_id' => Auth::user()->id,
            'album_name' => $request->album_name,
            'cover_photo' => $last_img,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function editAlbum($id)
    {
        $album = Album::find($id);
        return view('edit.album')->with('album', $album);
    }
    public function updateAlbum(Request $request, $id)
    {
        $album = Album::find($id);
        $cover_photo = $album->cover_photo;
        $Cover_photo = $request->file('cover_photo');
        if ($Cover_photo) {
            $name_gen = hexdec(uniqid());
            $Cover_ext = strtolower($Cover_photo->getClientOriginalExtension());
            $Cover_name = $name_gen . '.' . $Cover_ext;
            $up_location = 'images/album_cover/';
            $last_img = $up_location . $Cover_name;
            $Cover_photo->move($up_location, $Cover_name);
            if (File::exists($cover_photo)) {
                File::delete($cover_photo);
            }
            Album::find($id)->update([
                'album_name' => $request->album_name,
                'cover_photo' => $last_img,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->back();
        } else {
            Album::find($id)->update([
                'album_name' => $request->album_name,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->back();
        }
    }
    public function deleteAlbum($id)
    {
        $album = Album::find($id);
        $cover_photo = $album->cover_photo;
        Album::find($id)->delete();
        if (File::exists($cover_photo)) {
            File::delete($cover_photo);
        }
        return redirect()->back();
    }
}
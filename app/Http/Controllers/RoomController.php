<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $data = Room::all();
        return view('rooms.index', compact('data'));
    }

    public function create()
    {
        $roomtypes = RoomType::all();
        return view('rooms.create',compact('roomtypes'));
    }

    public function store(Request $request)
    {
        $data = new Room;
        $data->title = $request->title;
        $data->room_type_id = $request->room_type_id;

        $data->save();

        return redirect('admin/rooms/create')->with('success', 'Los datos fueron agregados');
    }

    public function show($id)
    {
        $data = Room::find($id);
        return view('rooms.show', compact('data'));
    }


    public function edit($id)
    {
        $data = Room::find($id);
        $roomtypes = RoomType::all();
        return view('rooms.edit', compact('data','roomtypes'));
    }

    public function update(Request $request, $id)
    {
        $data = Room::find($id);
        $data->title = $request->title;
        $data->room_type_id = $request->room_type_id;

        $data->save();

        return redirect('admin/rooms/' . $id . '/edit')->with('success', 'Los datos fueron actualizados');
    }

    public function destroy($id)
    {
        Room::where('id', $id)->delete();
        return redirect('admin/rooms')->with('success', 'Los datos fueron eliminados');
    }
}

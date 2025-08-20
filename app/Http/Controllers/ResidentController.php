<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use Illuminate\Support\Facades\Storage;

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::all();
        return view('admin.resident.view-resident', compact('residents'));
    }

    public function create()
    {
        return view('admin.resident.add-resident');
    }

    public function store(Request $request)
    {
        $input = $request->input();
        $resident = new Resident();
        $resident->id_resident =  $request->id_resident;
        $resident->name =  $request->name;
        $resident->id_unit = $request->id_unit;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $resident->image = $imagePath;
        }

        $resident->save();
        return redirect()->route('residents.index');
    }

    public function edit($id)
    {
        $resident = Resident::findOrFail($id);
        return view('admin.resident.edit-resident', compact('resident'));
    }

    public function update(Request $request, $id)
    {
        $resident = Resident::find($id);
        if ($resident) {
            $resident->name =  $request->name;
            $resident->id_unit = $request->id_unit;

            if ($request->hasFile('image')) {
                if ($resident->image && Storage::disk('public')->exists($resident->image)) {
                    Storage::disk('public')->delete($resident->image);
                }

                $imagePath = $request->file('image')->store('images', 'public');
                $resident->image = $imagePath;
            }
    
            $resident->save();
        }
        return redirect()->route('residents.index');
    }

    public function show($id)
    {
        $resident = Resident::findOrFail($id);
        return view('residents.show', compact('resident'));
    }

    // hapus resident
    public function destroy($id)
    {
        $resident = Resident::find($id);
        if ($resident) {
            // Hapus file gambar dari storage
            if (Storage::disk('public')->exists($resident->image)) {
                Storage::disk('public')->delete($resident->image);
            }

            $resident->delete();
        }
        return redirect()->route('residents.index');
    }
}

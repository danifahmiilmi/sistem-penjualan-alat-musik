<?php

namespace App\Http\Controllers;

use App\Models\Instrument;

class InstrumentController extends Controller
{
    public function index()
    {
        $all = Instrument::all();

        $types = $all->pluck('type')->unique()->sort()->values();
        $counts = $all->countBy('type');
        $total = $all->count();

        $kategori = request('kategori');

        if ($kategori && $types->contains($kategori)) {
            $instruments = $all->where('type', $kategori)->values();
        } else {
            $kategori = null;
            $instruments = $all;
        }

        return view('instruments.index', compact(
            'instruments',
            'types',
            'counts',
            'total',
            'kategori'
        ));
    }

    public function show($id)
    {
        $instrument = Instrument::findOrFail($id);

        return view('instruments.show', compact('instrument'));
    }
}

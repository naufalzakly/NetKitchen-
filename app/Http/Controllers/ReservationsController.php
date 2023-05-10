<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationsController extends Controller
{
    public function index()
   {
    $reservations = Reservations::get();
    return view ('reservations.index', ['reservations' => $reservations]);
   }

   public function tambah()
   {
    return view ('reservations.form');
   }

   public function simpan(Request $request)
   {
    $data = [
        'nama_meja' => $request->nama_meja,
        'jumlah_orang' => $request->jumlah_orang,
        'stok' => $request->stok,
    ];
    Reservations::create($data);
    return redirect()->route('reservations');
   }

  public function edit($id)
  {
    $reservations = Reservations::where('id', $id)->first();
    return view ('reservations.form',['reservations'=>$reservations]);
  }

  public function update($id, Request $request)
  {
    $data = [
        'nama_meja' => $request->nama_meja,
        'jumlah_orang' => $request->jumlah_orang,
        'stok' => $request->stok,

    ];
    
    Reservations::find($id)->update($data);
    return redirect()->route('reservations');
  }

  public function hapus($id)
  {
    Reservations::find($id)->delete();

    return redirect()->route('reservations');
  }
}

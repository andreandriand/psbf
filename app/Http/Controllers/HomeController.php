<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Properti;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    function login() {
        return view('login');
    }

    function dashboard(){
        $id_user = 2;
        $user = User::where('id',$id_user)->first();
        $property = Properti::where('id_user',$id_user)->get();
        $pesanan = 0;
        $totalHarga = 0;
        foreach ($property as $key => $value) {
            $dataTransaksi =  Transaksi::where('id_properti', $value->id)->get();
            foreach ($dataTransaksi as $keys => $values) {
                $dataPesanan = Pesanan::where('id_transaksi', $values->id)->get();
                $pesanan += count($dataPesanan);
                $totalHarga += $values->harga;
            }
        }

        $total = count($property);
        return view('dashboard',compact('property','total','pesanan','totalHarga','user'));
    }

    function penyewa(){
        $id_user = 3;
        $user = User::where('id',$id_user)->first();
        $dataTransaksi =  DB::table('transaksis')
        ->join('propertis', 'transaksis.id_properti', '=', 'propertis.id')
        ->join('users', 'propertis.id_user', '=', 'users.id')
        ->join('pesanans', 'transaksis.id', '=', 'pesanans.id_transaksi')
        ->select('transaksis.*', 'propertis.nama', 'users.firstname', 'pesanans.end_date')
        ->where('transaksis.id_user', $id_user)
        ->get();
        $totalPengeluaran = 0;
        foreach ($dataTransaksi as $key => $value) {
            $totalPengeluaran += $value->harga;
        }
        $pesanan = count($dataTransaksi);
        return view('penyewa',compact('dataTransaksi','pesanan','user','totalPengeluaran'));
    }
}

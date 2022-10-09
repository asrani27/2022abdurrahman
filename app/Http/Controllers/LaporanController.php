<?php

namespace App\Http\Controllers;

use App\Spt;
use App\Guru;
use App\Skpd;
use App\Sppd;
use App\Biaya;
use App\Mapel;
use App\Nilai;
use App\Sekda;
use App\Siswa;
use App\Jabatan;
use App\Pegawai;
use App\Periode;
use App\PKGsiswa;
use App\Bendahara;
use App\Pembayaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('superadmin.laporan.index');
    }

    public function pegawai()
    {
        $data = Pegawai::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_pegawai', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function sekda()
    {
        $data = Sekda::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_sekda', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function bendahara()
    {
        $data = Bendahara::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_bendahara', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function skpd()
    {
        $data = Skpd::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_skpd', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function jabatan()
    {
        $data = Jabatan::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_jabatan', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function sppd()
    {
        $data = Sppd::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_sppd', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function spt()
    {
        $data = Spt::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_spt', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function biaya()
    {
        $data = Biaya::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_biaya', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function pembayaran()
    {
        $data = Pembayaran::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_pembayaran', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
}

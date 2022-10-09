<?php

namespace App\Http\Controllers;

use App\PKG;
use App\Spt;
use App\Role;
use App\Skpd;
use App\Sppd;
use App\User;
use App\Biaya;
use App\Sekda;
use App\Jabatan;
use App\Pegawai;
use App\Periode;
use App\Bendahara;
use App\Pembayaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SuperadminController extends Controller
{
    public function beranda()
    {
        return view('superadmin.beranda');
    }

    public function periode()
    {
        $data = Periode::orderBy('id', 'DESC')->get();
        return view('superadmin.periode.index', compact('data'));
    }
    public function periodecreate()
    {
        return view('superadmin.periode.create');
    }
    public function periodestore(Request $req)
    {
        $attr = $req->all();

        $check = Periode::where('tahun', $req->tahun)->where('semester', $req->semester)->first();
        if ($check == null) {
            Periode::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/periode');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function periodeedit($id)
    {
        $data = Periode::find($id);
        return view('superadmin.periode.edit', compact('data'));
    }
    public function periodeupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Periode::where('tahun', $req->tahun)->where('semester', $req->semester)->first();
        if ($check == null) {
            //simpan
            Periode::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/periode');
        } else {
            if ($id == $check->id) {
                Periode::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/periode');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function periodedelete($id)
    {
        Periode::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function jabatan()
    {
        $data = Jabatan::orderBy('id', 'DESC')->get();
        return view('superadmin.jabatan.index', compact('data'));
    }
    public function jabatancreate()
    {
        return view('superadmin.jabatan.create');
    }
    public function jabatanstore(Request $req)
    {
        $attr = $req->all();

        $check = Jabatan::where('kode', $req->kode)->first();
        if ($check == null) {
            Jabatan::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/jabatan');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function jabatanedit($id)
    {
        $data = Jabatan::find($id);
        return view('superadmin.jabatan.edit', compact('data'));
    }
    public function jabatanupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Jabatan::where('kode', $req->kode)->first();
        if ($check == null) {
            //simpan
            Jabatan::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/jabatan');
        } else {
            if ($id == $check->id) {
                Jabatan::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/jabatan');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function jabatandelete($id)
    {
        Jabatan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function sekda()
    {
        $data = Sekda::orderBy('id', 'DESC')->get();
        return view('superadmin.sekda.index', compact('data'));
    }
    public function sekdacreate()
    {
        $jabatan = Jabatan::get();
        return view('superadmin.sekda.create', compact('jabatan'));
    }
    public function sekdastore(Request $req)
    {
        $attr = $req->all();

        $check = Sekda::where('nip', $req->nip)->first();
        if ($check == null) {
            Sekda::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/sekda');
        } else {
            toastr()->error('nip Sudah Ada');
            return back();
        }
    }
    public function sekdaedit($id)
    {
        $data = Sekda::find($id);
        $jabatan = Jabatan::get();
        return view('superadmin.sekda.edit', compact('data', 'jabatan'));
    }
    public function sekdaupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Sekda::where('nip', $req->nip)->first();
        if ($check == null) {
            //simpan
            Sekda::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/sekda');
        } else {
            if ($id == $check->id) {
                Sekda::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/sekda');
            } else {
                toastr()->error('nip sekda Sudah ada');
                return back();
            }
        }
    }
    public function sekdadelete($id)
    {
        Sekda::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function bendahara()
    {
        $data = Bendahara::orderBy('id', 'DESC')->get();
        return view('superadmin.bendahara.index', compact('data'));
    }
    public function bendaharacreate()
    {
        $jabatan = Jabatan::get();
        return view('superadmin.bendahara.create', compact('jabatan'));
    }
    public function bendaharastore(Request $req)
    {
        $attr = $req->all();

        $check = Bendahara::where('nip', $req->nip)->first();
        if ($check == null) {
            Bendahara::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/bendahara');
        } else {
            toastr()->error('nip Sudah Ada');
            return back();
        }
    }
    public function bendaharaedit($id)
    {
        $data = Bendahara::find($id);
        $jabatan = Jabatan::get();
        return view('superadmin.bendahara.edit', compact('data', 'jabatan'));
    }
    public function bendaharaupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Bendahara::where('nip', $req->nip)->first();
        if ($check == null) {
            //simpan
            Bendahara::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/bendahara');
        } else {
            if ($id == $check->id) {
                Bendahara::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/bendahara');
            } else {
                toastr()->error('nip bendahara Sudah ada');
                return back();
            }
        }
    }
    public function bendaharadelete($id)
    {
        Bendahara::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function skpd()
    {
        $data = Skpd::orderBy('id', 'DESC')->get();
        return view('superadmin.skpd.index', compact('data'));
    }
    public function skpdcreate()
    {
        return view('superadmin.skpd.create');
    }
    public function skpdstore(Request $req)
    {
        $attr = $req->all();

        $check = Skpd::where('kode', $req->kode)->first();
        if ($check == null) {
            Skpd::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/skpd');
        } else {
            toastr()->error('kode Sudah Ada');
            return back();
        }
    }
    public function skpdedit($id)
    {
        $data = Skpd::find($id);
        return view('superadmin.skpd.edit', compact('data'));
    }
    public function skpdupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Skpd::where('kode', $req->kode)->first();
        if ($check == null) {
            //simpan
            Skpd::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/skpd');
        } else {
            if ($id == $check->id) {
                Skpd::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/skpd');
            } else {
                toastr()->error('kode skpd Sudah ada');
                return back();
            }
        }
    }
    public function skpddelete($id)
    {
        Skpd::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function biaya()
    {
        $data = Biaya::orderBy('id', 'DESC')->get();
        return view('superadmin.biaya.index', compact('data'));
    }
    public function biayacreate()
    {
        $jabatan = Jabatan::get();
        return view('superadmin.biaya.create', compact('jabatan'));
    }
    public function biayastore(Request $req)
    {
        $attr = $req->all();

        $check = Biaya::where('kode', $req->kode)->first();
        if ($check == null) {
            Biaya::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/biaya');
        } else {
            toastr()->error('kode Sudah Ada');
            return back();
        }
    }
    public function biayaedit($id)
    {
        $data = Biaya::find($id);
        $jabatan = Jabatan::get();
        return view('superadmin.biaya.edit', compact('data', 'jabatan'));
    }
    public function biayaupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Biaya::where('kode', $req->kode)->first();
        if ($check == null) {
            //simpan
            Biaya::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/biaya');
        } else {
            if ($id == $check->id) {
                Biaya::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/biaya');
            } else {
                toastr()->error('kode biaya Sudah ada');
                return back();
            }
        }
    }
    public function biayadelete($id)
    {
        Biaya::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function spt()
    {
        $data = Spt::orderBy('id', 'DESC')->get();
        return view('superadmin.spt.index', compact('data'));
    }
    public function sptcreate()
    {
        $biaya = Biaya::get();
        $skpd = Skpd::get();
        $pegawai = Pegawai::get();
        return view('superadmin.spt.create', compact('biaya', 'skpd', 'pegawai'));
    }
    public function sptstore(Request $req)
    {
        $attr = $req->all();

        $check = Spt::where('kode_spt', $req->kode_spt)->first();

        if ($check == null) {
            Spt::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/spt');
        } else {
            toastr()->error('kode Sudah Ada');
            return back();
        }
    }
    public function sptedit($id)
    {
        $data = Spt::find($id);
        $biaya = Biaya::get();
        $skpd = Skpd::get();
        $pegawai = Pegawai::get();
        return view('superadmin.spt.edit', compact('data', 'biaya', 'skpd', 'pegawai'));
    }
    public function sptupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Spt::where('kode_spt', $req->kode_spt)->first();
        if ($check == null) {
            //simpan
            Spt::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/spt');
        } else {
            if ($id == $check->id) {
                Spt::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/spt');
            } else {
                toastr()->error('kode spt Sudah ada');
                return back();
            }
        }
    }
    public function sptdelete($id)
    {
        Spt::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function sppd()
    {
        $data = Sppd::orderBy('id', 'DESC')->get();
        return view('superadmin.sppd.index', compact('data'));
    }
    public function sppdcreate()
    {
        $biaya = Biaya::get();
        $spt = Spt::get();
        $sekda = Sekda::get();
        return view('superadmin.sppd.create', compact('biaya', 'spt', 'sekda'));
    }
    public function sppdstore(Request $req)
    {
        $attr = $req->all();

        $check = Sppd::where('nomor', $req->nomor)->first();

        if ($check == null) {
            Sppd::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/sppd');
        } else {
            toastr()->error('nomor sppd Sudah Ada');
            return back();
        }
    }
    public function sppdedit($id)
    {
        $data = Sppd::find($id);
        $biaya = Biaya::get();
        $spt = Spt::get();
        $sekda = Sekda::get();
        return view('superadmin.sppd.edit', compact('data', 'biaya', 'spt', 'sekda'));
    }
    public function sppdupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Sppd::where('nomor', $req->nomor)->first();
        if ($check == null) {
            //simpan
            Sppd::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/sppd');
        } else {
            if ($id == $check->id) {
                Sppd::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/sppd');
            } else {
                toastr()->error('nomor sppd Sudah ada');
                return back();
            }
        }
    }
    public function sppddelete($id)
    {
        Sppd::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function pembayaran()
    {
        $data = Pembayaran::orderBy('id', 'DESC')->get();
        return view('superadmin.pembayaran.index', compact('data'));
    }
    public function pembayarancreate()
    {
        $sppd = Sppd::get();
        $pegawai = Pegawai::get();
        $bendahara = Bendahara::get();
        return view('superadmin.pembayaran.create', compact('pegawai', 'bendahara', 'sppd'));
    }
    public function pembayaranstore(Request $req)
    {
        $attr = $req->all();

        $check = Pembayaran::where('nomor', $req->nomor)->first();

        if ($check == null) {
            Pembayaran::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/pembayaran');
        } else {
            toastr()->error('nomor pembayaran Sudah Ada');
            return back();
        }
    }
    public function pembayaranedit($id)
    {
        $data = Pembayaran::find($id);
        $sppd = Sppd::get();
        $pegawai = Pegawai::get();
        $bendahara = Bendahara::get();
        return view('superadmin.pembayaran.edit', compact('data', 'sppd', 'pegawai', 'bendahara'));
    }
    public function pembayaranupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Pembayaran::where('nomor', $req->nomor)->first();
        if ($check == null) {
            //simpan
            Pembayaran::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/pembayaran');
        } else {
            if ($id == $check->id) {
                Pembayaran::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/pembayaran');
            } else {
                toastr()->error('nomor pembayaran Sudah ada');
                return back();
            }
        }
    }
    public function pembayarandelete($id)
    {
        Pembayaran::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function pegawai()
    {
        $data = Pegawai::orderBy('id', 'DESC')->get();
        return view('superadmin.pegawai.index', compact('data'));
    }
    public function pegawaicreate()
    {
        $jabatan = Jabatan::get();
        return view('superadmin.pegawai.create', compact('jabatan'));
    }
    public function pegawaistore(Request $req)
    {
        $attr = $req->all();

        $check = Pegawai::where('nip', $req->nip)->first();
        if ($check == null) {
            Pegawai::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/pegawai');
        } else {
            toastr()->error('nip Sudah Ada');
            return back();
        }
    }
    public function pegawaiedit($id)
    {
        $data = Pegawai::find($id);
        $jabatan = Jabatan::get();
        return view('superadmin.pegawai.edit', compact('data', 'jabatan'));
    }
    public function pegawaiupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Pegawai::where('nip', $req->nip)->first();
        if ($check == null) {
            //simpan
            Pegawai::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/pegawai');
        } else {
            if ($id == $check->id) {
                Pegawai::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/pegawai');
            } else {
                toastr()->error('nip pegawai Sudah ada');
                return back();
            }
        }
    }
    public function pegawaidelete($id)
    {
        Pegawai::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function siswaakun($id)
    {
        $siswa = Siswa::find($id);
        $check = User::where('username', $siswa->nis)->first();
        if ($check == null) {
            $role = Role::where('name', 'siswa')->first();
            $n = new User;
            $n->name = $siswa->nama;
            $n->username = $siswa->nis;
            $n->password = bcrypt($siswa->nis);
            $n->save();

            $n->roles()->attach($role);

            $siswa->update(['user_id' => $n->id]);

            toastr()->success('Berhasil Di buat, password : ' . $siswa->nis);
            return back();
        } else {
            toastr()->error('Username sudah ada');
            return back();
        }
    }

    public function siswareset($id)
    {
        $siswa = Siswa::find($id)->user;
        $siswa->update([
            'password' => bcrypt(Siswa::find($id)->nis),
        ]);
        toastr()->success('Berhasil Di reset, password : ' . $siswa->nis);
        return back();
    }

    public function siswa()
    {
        $data = Siswa::orderBy('id', 'DESC')->get();

        return view('superadmin.siswa.index', compact('data'));
    }
    public function siswacreate()
    {
        return view('superadmin.siswa.create');
    }
    public function siswastore(Request $req)
    {
        $attr = $req->all();

        $check = Siswa::where('nis', $req->nis)->first();
        if ($check == null) {
            Siswa::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/siswa');
        } else {
            toastr()->error('nis Sudah Ada');
            return back();
        }
    }
    public function siswaedit($id)
    {
        $data = Siswa::find($id);
        return view('superadmin.siswa.edit', compact('data'));
    }
    public function siswaupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Siswa::where('nis', $req->nis)->first();
        if ($check == null) {
            //simpan
            Siswa::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/siswa');
        } else {
            if ($id == $check->id) {
                Siswa::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/siswa');
            } else {
                toastr()->error('nis siswa Sudah ada');
                return back();
            }
        }
    }
    public function siswadelete($id)
    {
        Siswa::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function predikat()
    {
        $data = Predikat::orderBy('id', 'DESC')->get();

        return view('superadmin.predikat.index', compact('data'));
    }
    public function predikatcreate()
    {
        return view('superadmin.predikat.create');
    }
    public function predikatstore(Request $req)
    {
        $attr = $req->all();

        $check = Predikat::where('predikat', $req->predikat)->first();
        if ($check == null) {
            Predikat::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/predikat');
        } else {
            toastr()->error('nilai huruf Sudah Ada');
            return back();
        }
    }
    public function predikatedit($id)
    {
        $data = Predikat::find($id);
        return view('superadmin.predikat.edit', compact('data'));
    }
    public function predikatupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Predikat::where('predikat', $req->predikat)->first();
        if ($check == null) {
            //simpan
            Predikat::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/predikat');
        } else {
            if ($id == $check->id) {
                Predikat::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/predikat');
            } else {
                toastr()->error('nilai huruf predikat Sudah ada');
                return back();
            }
        }
    }
    public function predikatdelete($id)
    {
        Predikat::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function pkg()
    {
        $data = PKG::orderBy('id', 'DESC')->get();

        return view('superadmin.pkg.index', compact('data'));
    }
    public function pkgcreate()
    {
        $periode =  Periode::get();
        $guru =  Guru::get();
        $kelas =  Kelas::get();

        return view('superadmin.pkg.create', compact('periode', 'guru', 'kelas'));
    }

    public function pkgstore(Request $req)
    {
        $attr = $req->all();

        $check = PKG::where('periode_id', $req->periode_id)->where('kelas_id', $req->kelas_id)->first();
        if ($check == null) {
            PKG::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/t/pkg');
        } else {
            toastr()->error('Kelas Pada Periode Sudah ada');
            return back();
        }
    }
    public function pkgedit($id)
    {
        $data = PKG::find($id);
        $periode =  Periode::get();
        $guru =  Guru::get();
        $kelas =  Kelas::get();
        return view('superadmin.pkg.edit', compact('data', 'periode', 'guru', 'kelas'));
    }
    public function pkgupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = PKG::where('periode_id', $req->periode_id)->where('kelas_id', $req->kelas_id)->first();
        if ($check == null) {
            //simpan
            PKG::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/t/pkg');
        } else {
            if ($id == $check->id) {
                PKG::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/t/pkg');
            } else {
                toastr()->error('Kelas Pada Periode Sudah ada');
                return back();
            }
        }
    }
    public function pkgdelete($id)
    {
        PKG::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function tambahsiswa($id)
    {
        $pkg = PKG::find($id);
        $siswa = Siswa::get();
        $data = PKGsiswa::where('periode_kelas_guru_id', $id)->get();
        return view('superadmin.pkg.tambahsiswa', compact('pkg', 'siswa', 'id', 'data'));
    }

    public function simpantambahsiswa(Request $req, $id)
    {
        $check = PKGsiswa::where('periode_id', PKG::find($id)->periode_id)->where('siswa_id', $req->siswa_id)->first();
        if ($check == null) {
            $n = new PKGsiswa;
            $n->periode_kelas_guru_id = $id;
            $n->siswa_id = $req->siswa_id;
            $n->periode_id = PKG::find($id)->periode_id;
            $n->save();
            toastr()->success('berhasil Di simpan');
        } else {
            toastr()->error('Siswa ini sudah di tambahkan berada di kelas ' . $check->pkg->kelas->nama);
        }
        return back();
    }

    public function deletetambahsiswa($id, $ids)
    {
        PKGsiswa::find($ids)->delete();
        toastr()->success('berhasil Di Hapus');
        return back();
    }


    public function tambahmapel($id)
    {
        $pkg = PKG::find($id);
        $mapel = Mapel::get();
        $data = PKGmapel::where('periode_kelas_guru_id', $id)->get();
        return view('superadmin.pkg.tambahmapel', compact('pkg', 'mapel', 'id', 'data'));
    }

    public function simpantambahmapel(Request $req, $id)
    {
        $check = PKGmapel::where('periode_kelas_guru_id', $id)->where('mapel_id', $req->mapel_id)->first();
        if ($check == null) {
            $n = new PKGmapel;
            $n->periode_kelas_guru_id = $id;
            $n->mapel_id = $req->mapel_id;
            $n->periode_id = PKG::find($id)->periode_id;
            $n->save();
            toastr()->success('berhasil Di simpan');
        } else {
            toastr()->error('Mapel ini sudah di tambahkan');
        }
        return back();
    }
    public function deletetambahmapel($id, $idm)
    {
        PKGmapel::find($idm)->delete();
        toastr()->success('berhasil Di Hapus');
        return back();
    }

    // public function laporan()
    // {
    //     return view('superadmin.laporan.index');
    // }

    // public function cetakHakim()
    // {
    //     $data = Hakim::get();
    //     $pdf = PDF::loadView('superadmin.laporan.pdf_hakim', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakJaksa()
    // {
    //     $data = Jaksa::get();
    //     $pdf = PDF::loadView('superadmin.laporan.pdf_jaksa', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakPanitera()
    // {
    //     $data = Panitera::get();
    //     $pdf = PDF::loadView('superadmin.laporan.pdf_panitera', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataPidana()
    // {
    //     $data = Perkara::where('jenis_perkara', 1)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.pidana', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataPerdata()
    // {
    //     $data = Perkara::where('jenis_perkara', 2)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.perdata', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataTipikor()
    // {
    //     $data = Perkara::where('jenis_perkara', 3)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.tipikor', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataPhi()
    // {
    //     $data = Perkara::where('jenis_perkara', 4)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.phi', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }


    // public function cetaksidangPidana()
    // {
    //     $data = Sidang::where('jenis_perkara', 1)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_pidana', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetaksidangPerdata()
    // {
    //     $data = Sidang::where('jenis_perkara', 2)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_perdata', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetaksidangTipikor()
    // {
    //     $data = Sidang::where('jenis_perkara', 3)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_tipikor', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetaksidangPhi()
    // {
    //     $data = Sidang::where('jenis_perkara', 4)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_phi', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
}

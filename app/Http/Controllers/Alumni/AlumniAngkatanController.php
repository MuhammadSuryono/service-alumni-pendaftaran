<?php
namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\AlumniAngkatan;
use Illuminate\Http\Request;

class AlumniAngkatanController extends Controller
{
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function GetSemuaAngakatan(Request $request)
    {
       $angkatan = AlumniAngkatan::all();
       return $this->CommonResponse(true, "Permintaan data angkatan sukses", $angkatan, 200);
    }

    public function StoreTahunAngkatan()
    {
        $this->validate($this->request, [
            "tahun_angkatan" => 'required'
        ]);

        $insert = new AlumniAngkatan();
        $insert->tahun_angkatan = $this->request->input("tahun_angkatan");
        $insert->save();

        return $this->CommonResponse(true, "Tahun angkatan berhasil dibuat!", $this->request->all(), 200);
    }

    public function UpdateTahunAngkatan($id)
    {
        $this->validate($this->request, [
            "tahun_angkatan" => 'required'
        ]);

        $update = AlumniAnggota::find($id);
        $update->tahun_angkatan = $this->request->input("tahun_angkatan");
        $update->save();

        return $this->CommonResponse(true, "Tahun angkatan berhasil diubah!", $this->request->all(), 200);
    }

    public function DeleteTahunAngkatan($id)
    {
        $delete = AlumniAnggota::find($id);
        $delete->delete();

        return $this->CommonResponse(true, "Tahun angkatan berhasil dihapus!", $this->request->all(), 200);
    }
}

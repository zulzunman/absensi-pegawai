<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawaiController extends Controller
{
    public function get_data()
	{
		// $paging=10;
        $pegawais = DB::table('pegawai')->get();
		$pegawai = pegawai::all();
		// $pegawai = pegawai::paginate($paging);
		
		return view('pegawai.getData', compact(['pegawai']));
	}

	public function addData()
	{
		$will = pegawai::all();

		return view('pegawai.addData', ['will' => $will]);
	}

    public function dataStore(Request $request)
	{

        $validator = $request->validate([
            'nama'   => 'required'
		],[
			'nama.required' => 'Nama pegawai tidak boleh kosong',
		]);
		DB::table('pegawai')->insert([
			'nama' => $validator['nama'],
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		return redirect('/pegawai');
	}

	public function editData($id)
	{
		$will = pegawai::findOrFail($id);;

		return view('pegawai.editData', ['will' => $will]);
	}

    public function dataUpdate(Request $request, $id)
	{

        $validator = $request->validate([
            'nama'   => 'required'
		],[
			'nama.required' => 'Nama pegawai tidak boleh kosong',
		]);
		$update = [
					'nama' => $validator['nama'],
					'updated_at' => Carbon::now()
				];
				pegawai::where('id', $id)->update($update);

		return redirect('/pegawai');
	}

    public function destroy($id)
	{
		pegawai::destroy($id);
		return redirect('/pegawai');
	}
}

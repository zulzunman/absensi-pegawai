<?php

namespace App\Http\Controllers;

use App\Models\wilayah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    public function get_data()
	{
		// $paging=10;
        $wilayahs = DB::table('wilayah')->get();
		$wilayah = wilayah::all();
		// $wilayah = wilayah::paginate($paging);
		
		return view('wilayah.getData', compact(['wilayah']));
	}

	public function addData()
	{
		$will = wilayah::all();

		return view('wilayah.addData', ['will' => $will]);
	}

    public function dataStore(Request $request)
	{

        $validator = $request->validate([
            'nama'   => 'required'
		],[
			'nama.required' => 'Nama wilayah tidak boleh kosong',
		]);
		DB::table('wilayah')->insert([
			'nama' => $validator['nama'],
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		return redirect('/wilayah');
	}

	public function editData($id)
	{
		$will = wilayah::findOrFail($id);;

		return view('wilayah.editData', ['will' => $will]);
	}

    public function dataUpdate(Request $request, $id)
	{

        $validator = $request->validate([
            'nama'   => 'required'
		],[
			'nama.required' => 'Nama wilayah tidak boleh kosong',
		]);
		$update = [
					'nama' => $validator['nama'],
					'updated_at' => Carbon::now()
				];
				wilayah::where('id', $id)->update($update);

		return redirect('/wilayah');
	}

    public function destroy($id)
	{
		wilayah::destroy($id);
		return redirect('/wilayah');
	}
}

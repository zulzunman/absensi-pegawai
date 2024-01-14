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
		$paging=10;
        $wilayahs = DB::table('wilayah')->get();
		$wilayah = wilayah::paginate($paging);

		return view('wilayah.getData', compact(['wilayah']));
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

    // public function update(Request $request, $id)
	// {
    //     $validator = $request->validate([
    //         'office'   => 'required',
    //         'floor'   => 'required|numeric',
    //         'room'   => 'required',
	// 	],[
	// 		'office.required' => 'Nama gedung tidak boleh kosong',
	// 		'floor.required' => 'Lantai tidak boleh kosong',
	// 		'room.required' => 'Nama ruangan tidak boleh kosong',
	// 		'floor.numeric' => 'Lantai harus nomor',
	// 	]);

	// 	$update = [
	// 		'office' => $validator['office'],
	// 		'floor' => $validator['floor'],
	// 		'room' => $validator['room'],
	// 		'updated_at' => Carbon::now()
	// 	];
	// 	Location::where('id', $id)->update($update);
	// 	return redirect('/location');
	// }

    // public function destroy($id)
	// {
	// 	Location::destroy($id);
	// 	return redirect('/location');
	// }
}

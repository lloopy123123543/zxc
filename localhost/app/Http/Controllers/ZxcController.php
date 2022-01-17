<?php
namespace App\Http\Controllers;
use App\Models\Zxc;
use Illuminate\Http\Request;

class ZxcController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAll(){
        $zxc = Zxc::all();
        return response()->json($zxc,200);
    }

    public function add(Request $request) {
        $zxc_name = $request->input('zxc_name');
        $zxc_mmr = $request->input('mmr');
        $zxc_main = $request->input('main_hero');

        $zxc = new Zxc();
        $zxc->zxc_name = $zxc_name;
        $zxc->mmr = $zxc_mmr;
        $zxc->main_hero = $zxc_main;

        $zxc->save();

        return response()->json($zxc, 200);
    }
    public function edit(Request $request, $zxc_id){
        $zxc_name = $request->input('zxc_name');
        $zxc_mmr = $request->input('mmr');
        $zxc_main = $request->input('main_hero');
        $zxc = Zxc::find($zxc_id);
        $zxc->mmr = $zxc_mmr;
        $zxc->main_hero = $zxc_main;
        $zxc->save();
        return response()->json($zxc, 200);


    }
    public function delete(Request $request, $zxc_id){
        $zxc = Zxc::find($zxc_id);
        $zxc->delete();

    }
}

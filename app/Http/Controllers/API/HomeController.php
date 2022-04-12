<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bhutan;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $details = DB::table('bhutans')
            ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
            ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
            ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        if ($request->search) {
            $details = DB::table('bhutans')
                ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
                ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
                ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
                ->where('bhutans.lhakhang_name', "like", "%{$request->search}%")
                // ->orWhere('last_name', "like", "%{$request->search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(7);
        }
        
        if ($request->dzongkhag_id) {
            $details = DB::table('bhutans')
                ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
                ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
                ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
                ->where('bhutans.dzongkhag_id', $request->dzongkhag_id)
                ->orderBy('created_at', 'desc')
                ->paginate(7);
        } 
        if ($request->gewog_id) {
            // $employees = Employee::where('department_id', $request->department_id)->get();
            $details = DB::table('bhutans')
                ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
                ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
                ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
                ->where('bhutans.gewog_id', $request->gewog_id)
                ->orderBy('created_at', 'desc')
                ->paginate(7);
        }

        if ($request->work_type) {
            // $employees = Employee::where('department_id', $request->department_id)->get();
            $details = DB::table('bhutans')
                ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
                ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
                ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
                ->where('bhutans.work_type', $request->work_type)
                ->orderBy('created_at', 'desc')
                ->paginate(7);
        }

        if ($request->work_desc) {
            // $employees = Employee::where('department_id', $request->department_id)->get();
            $details = DB::table('bhutans')
                ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
                ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
                ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
                ->where('bhutans.work_desc', $request->work_desc)
                ->orderBy('created_at', 'desc')
                ->paginate(7);
        }

        if ($request->no_of_thangka) {
            // $employees = Employee::where('department_id', $request->department_id)->get();
            $details = DB::table('bhutans')
                ->join('dzongkhags', 'bhutans.dzongkhag_id', '=', 'dzongkhags.id')
                ->join('gewogs', 'bhutans.gewog_id', '=', 'gewogs.id')
                ->select('bhutans.*', 'dzongkhags.dzo_name', 'gewogs.geo_name')
                ->where('bhutans.no_of_thangka', $request->no_of_thangka)
                ->orderBy('created_at', 'desc')
                ->paginate(7);
        }

        return $details;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("jjjjj");
        // dd($request['selectedDzongkhag']);
        $validated = $request->validate([
            'dzongkhag_id' => ['required', 'integer'],
            'gewog_id' => ['required', 'integer'],
            'lhakhang_name' => ['required', 'string', 'max:50'],
            'work_type' => ['required', 'string'],
            'work_desc' => ['required', 'string',],
            'no_of_thangka' => ['required', 'max:9'],
            'remarks' => ['required', 'string', 'max:255'],
        ]);

        return Bhutan::create([
            'dzongkhag_id' => $request['dzongkhag_id'],
            'gewog_id' => $request['gewog_id'],
            'lhakhang_name' => $request['lhakhang_name'],
            'work_type' => $request['work_type'],
            'work_desc' => $request['work_desc'],
            'no_of_thangka' => $request['no_of_thangka'],
            'remarks' => $request['remarks'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detail = Bhutan::findOrFail($id);

        $request->validate([
            'dzongkhag_id' => 'required', 'integer',
            'gewog_id' => 'required', 'integer',
            'lhakhang_name' => 'required', 'string', 'max:50',
            'work_type' => 'required', 'string',
            'work_desc' => 'required', 'string',
            'no_of_thangka' => 'required', 'max:9',
            'remarks' => 'required', 'string', 'max:255',
        ]);

        $detail->update($request->all());

        return ['msg' => 'details has been updated!'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Bhutan::findOrfail($id);
        $detail->delete();
        return ['msg' => 'detail deleted!'];
    }
}

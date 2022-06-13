<?php

namespace App\Http\Controllers;
use App\Models\MonitoringModel;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function viewMonitoring(){        
        $batas = 5;
        $a = MonitoringModel::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($a->currentPage() - 1);
        $jml = MonitoringModel::count();
        
        return view('/welcome', compact('a', 'no', 'jml'));
    }

    public function addMonitoring(Request $req){
        $a = new MonitoringModel;

        $this->validate($req, [
            'photo' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        $pp = $req->photo;
        $namafile = time().'.'.$pp->getClientOriginalExtension();
        $pp->move('img/', $namafile);
        
        $a->project_name        = $req->project_name;
        $a->client              = $req->client;
        $a->leader_name         = $req->leader_name;
        $a->leader_email        = $req->leader_email;
        $a->leader_image        = $namafile;
        $a->start_date          = $req->start_date;
        $a->end_date            = $req->end_date;
        $a->progress            = $req->progress;

        $a->save();

        toast('Data berhasil ditambahkan', 'success');
        return redirect('/');
    }

    public function deleteMonitoring($id){
        $a = MonitoringModel::find($id);
        $a->delete();

        return redirect('/')->with('pesan','Data telah dihapus');
    }

    public function updateMonitoring(Request $req, $id){
        $a = MonitoringModel::find($id);

        if($req->has('photo')){
            $this->validate($req, [
                'photo' => 'required|image|mimes:jpg,jpeg,png'
            ]);
    
            $pp = $req->photo;
            $namafile = time().'.'.$pp->getClientOriginalExtension();
            $pp->move('img/', $namafile);
            
            $a->project_name        = $req->project_name;
            $a->client              = $req->client;
            $a->leader_name         = $req->leader_name;
            $a->leader_email        = $req->leader_email;
            $a->leader_image        = $namafile;
            $a->start_date          = $req->start_date;
            $a->end_date            = $req->end_date;
            $a->progress            = $req->progress;
        }else{
            $a->project_name        = $req->project_name;
            $a->client              = $req->client;
            $a->leader_name         = $req->leader_name;
            $a->leader_email        = $req->leader_email;
            $a->start_date          = $req->start_date;
            $a->end_date            = $req->end_date;
            $a->progress            = $req->progress;
        }

        $a->update();
        toast('Data berhasil diperbarui', 'success');
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ReportsController extends Controller
{
    public function appointmentsReport(Request $req){
        return view('Admin/Reports/appointment-reports')->with(['data'=>[],'search_data'=>[]]);
    }

    public function generateAppointmentReport(Request $req){
        $date = explode(',',$req->dates);
        $search_data = (object) $req->all();
        $data = Service::select('citizens.id','citizens.fname','citizens.lname','citizens.district','citizens.division','citizens.nic','services.*')->join('citizens','citizens.id','services.citizen_id')->whereDate('services.created_at','>=',date('Y-m-d',strtotime($date[0])))->whereDate('services.created_at','<=',date('Y-m-d',strtotime($date[1])));
        if(!empty($req->nic)){
            $data->where('citizens.nic',$req->nic);
        }
        if($req->district!="0"){
            $data->where('citizens.district',$req->district);
        }
        if($req->division!="0"){
            $data->where('citizens.division',$req->division);
        }
        if($req->service!="0"){
            $data->where('service_type',$req->service);
        }
        $data= $data->get();
        return view('Admin/Reports/appointment-reports')->with(['data'=>$data,'search_data'=>$search_data]);
    }

    public function citizenReport(Request $req){
        
    }

    public function paymentsReport(Request $req){
        
    }
}

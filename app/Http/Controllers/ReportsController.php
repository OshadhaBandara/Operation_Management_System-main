<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Service;

class ReportsController extends Controller
{
    public function appointmentsReport(Request $req){
        session()->flashInput([]);
        return view('Admin/Reports/appointment-reports')->with(['data'=>[],'search_data'=>[]]);
    }

    public function citizenReport(Request $req){
        session()->flashInput([]);
        return view('Admin/Reports/citizen-reports')->with(['data'=>[],'search_data'=>[]]);
    }

    public function paymentsReport(Request $req){
        session()->flashInput([]);
        return view('Admin/Reports/payment-reports')->with(['data'=>[],'search_data'=>[]]);
    }

    public function generateAppointmentReport(Request $req){
        $date = explode(',',$req->dates);
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
        if($req->status!="0"){
            $data->where('service_status',$req->status=="0.1"?0:$req->status);
        }
        if($req->payment!="0"){
            $data->where('service_payment',$req->payment=="0.1"?0:$req->payment);
        }
        $data= $data->get();
        session()->flashInput($req->input());
        return view('Admin/Reports/appointment-reports')->with(['data'=>$data]);
    }

    public function generateCitizenReport(Request $req){
        
        $data = Citizen::where('is_registered',1);
        
        if($req->district!="0"){
            $data->where('citizens.district',$req->district);
        }
        if($req->division!="0"){
            $data->where('citizens.division',$req->division);
        }
        if($req->gender!="0"){
            $data->where('citizens.gender',$req->gender);
        }
        $data= $data->get();
        session()->flashInput($req->input());
        return view('Admin/Reports/citizen-reports')->with(['data'=>$data]);
    }

    public function generatepaymentsReport(Request $req){
        $date = explode(',',$req->dates);
        $data = Payment::select('payments.*','services.id as sid','services.service_type')->join('services','services.id','payments.service_id')->whereDate('payments.created_at','>=',date('Y-m-d',strtotime($date[0])))->whereDate('payments.created_at','<=',date('Y-m-d',strtotime($date[1])));
        
        if($req->service!="0"){
            $data->where('services.service_type',$req->service);
        }
        $data= $data->get();
        session()->flashInput($req->input());
        return view('Admin/Reports/payment-reports')->with(['data'=>$data]);
    }
}

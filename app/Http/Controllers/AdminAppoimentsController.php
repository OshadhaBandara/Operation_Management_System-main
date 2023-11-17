<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Citizen;

class AdminAppoimentsController extends Controller
{
    public function appoinmentsIndex(Request $req){
        $appoinments = [];
        if($req->data){
            $data = $req->data;
            $appoinments = Service::select('services.*','citizens.fname','citizens.lname','citizens.id as cid','citizens.nic')->where(function ($query) use ($data) {
                $query->orWhere('fname', 'like', "%".$data."%");
                $query->orWhere('lname', 'like', "%".$data."%");
                $query->orWhere('nic', 'like', "%".$data."%");
                $query->orWhere('service_type', 'like', "%".$data."%");
                $query->orWhere('services.created_at', 'like', "%".$data."%");
            })->join('citizens','citizens.id','services.citizen_id')->orderBy('created_at','desc')->get();
        }else{
            $appoinments = Service::select('services.*','citizens.fname','citizens.lname','citizens.id as cid','citizens.nic')->join('citizens','citizens.id','services.citizen_id')->orderBy('created_at','desc')->get();
        }
        return view('Admin/citizen-appointment')->with(['appoinments'=>$appoinments]);
    }

    public function viewAppoinment(Service $service){
        $citizen = Citizen::where('id',$service->citizen_id)->first();
        return view('Admin/citizen-appointment-view')->with(['service'=>$service,'citizen'=>$citizen]);
    }

    public function completeService(Service $service){
        $citizen = Service::where('id',$service->id)->update(['service_status'=>3]);
        return redirect('citizen-appointment')->with('success', 'Service Completed Successfully');
    }

    public function rejectService(Service $service, Request $req){
        $citizen = Service::where('id',$service->id)->update(['service_status'=>2,'reject_note'=>$req->note]);
        return redirect('citizen-appointment')->with('success', 'Service Rejected Successfully');
    }

    public function rescheduleService(Service $service, Request $req){
        $citizen = Service::where('id',$service->id)->update(['service_status'=>2,'reschedule_date'=>$req->date]);
        return redirect('citizen-appointment')->with('success', 'Service Rescheduled Successfully');
    }

    public function cancelService(Service $service, Request $req){
        $citizen = Service::where('id',$service->id)->update(['service_status'=>-1,'reject_note'=>$req->note]);
        return redirect('citizen-appointment')->with('success', 'Service Cancelled Successfully');
    }
}

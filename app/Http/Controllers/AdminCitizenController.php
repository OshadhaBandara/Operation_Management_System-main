<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Document;
use App\Models\Service;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AdminCitizenController extends Controller
{
    public function citizenIndex(){
        $user = User::where('id',session('uid'))->first();
        $citizen = Citizen::where('district',$user->district)->where('division',$user->division)->where('is_registered',1)->orderBy('id','desc')->get();
        
        return view('Admin/citizen-manager')->with(['citizen'=>$citizen]);
    }

    public function viewCitizen(Citizen $citizen){
        $documents = Document::where('citizen_id',$citizen->id)->first();
        return view('Admin/view-citizen')->with(['citizen'=>$citizen,'docs'=>$documents]);
    }

    public function editCitizen(Citizen $citizen){
        
        return view('Admin/edit-citizen')->with(['citizen'=>$citizen]);
    }

    public function updateCitizen(Citizen $citizen, Request $req){
        $citizen->update([
            'fname'=>$req->fname,
            'lname'=>$req->lname,
            'email'=>$req->email,
            'dob'=>$req->dob,
            'gender'=>$req->gender,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'district'=>$req->district,
            'division'=>$req->division,
        ]);

        return redirect()->route('view-citizen',['citizen'=>$citizen->id])->with('success', 'Citizen updated successfully');
    }

    public function deleteCitizen(Citizen $citizen){
        $citizen->update(['is_registered'=>0]);
        return redirect('citizen-manager')->with('success', 'Citizen deleted successfully');
    }

    public function citizenAppoinments(Citizen $citizen){
        $name = $citizen->fname.' '.$citizen->lname;
        $data = Service::select('services.*','citizens.fname','citizens.lname','citizens.id as cid','citizens.nic')->join('citizens','citizens.id','services.citizen_id')->where('citizen_id',$citizen->id)->orderBy('created_at','desc')->get();
        return view('Admin/appointment')->with(['appoinments'=>$data,'name'=>$name]);
    }

    public function citizenFiles(Citizen $citizen){
        return view('Admin/citizen-file-manage')->with(['citizen'=>$citizen]);
    }

    public function deleteMedia($loc,$filename,Citizen $citizen){
       
        unlink(storage_path('app/public/' . $citizen->nic.'/'.$filename));
        $citizen->documents()->update([$loc=>null]);
        return redirect()->back()->with('success', 'File removed successfully');
    }

    public function addCitizenId(){
        return view('Admin/add-citizen-id');
    }
    

    public function createNew(Request $req){
        if($req->district=="0" || $req->gn_division=="0"){
            return redirect('add-citizen-id')->with('fail', 'District & Grama Niladhari Division is required');
        }else{
            $create = Citizen::create([
                'nic'=>$req->nic,
                'district'=>$req->district,
                'division'=>$req->gn_division
            ]);
            return redirect('add-citizen-id')->with('success', 'Citizen NIC added successfully');
        }
        
    }
}

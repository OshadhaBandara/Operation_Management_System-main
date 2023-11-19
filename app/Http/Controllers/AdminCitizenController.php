<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Document;
use App\Models\Service;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
        if($loc=="attachments"){
            $attchments =Document::where('citizen_id', $citizen->id)->value('attachments');
            $data = explode(',', $attchments);
            foreach ($data as $key => $d) {
                if($filename==$d){
                    unset($data[$key]);
                }
            }
                
                $citizen->documents()->update(['attachments' => implode(",",$data)]);

        }else{
            $citizen->documents()->update([$loc=>null]);
        }
        
        return redirect()->back()->with('success', 'File removed successfully');
    }

    public function uploadMedia(Citizen $citizen, Request $req){
        try {

           
            DB::beginTransaction(); // Start a database transaction
            $cnicDirectory = storage_path('app/public/' . $citizen->nic);

            if (!file_exists($cnicDirectory)) {
                // Create a directory for the user if it doesn't exist
                mkdir($cnicDirectory, 0755, true);
            }
        
            $filename = $citizen->nic . '_'.$req->type.'_'.rand().'.' .$req->file->getClientOriginalExtension();
            
            $document =Document::where('citizen_id', $citizen->id)->first();

            if($req->type=="attachments"){
                $attchments =Document::where('citizen_id', $citizen->id)->value('attachments');
                
                if($attchments==null){
                    $document->update(['attachments' => $filename]);
                }else{
                    $data = explode(',', $attchments);
                    array_push($data,$filename);
                    $document->update(['attachments' => implode(",",$data)]);
                }

            }else{
                if ($document) {
                    $document->update([$req->type => $filename]);
                } else {
                    Document::create([
                        'citizen_id' => $citizen->id,
                        $req->type => $filename,
                    ]);
                }
            }
            


           

                // Resize the image before saving
                $image = Image::make($req->file);
                $image->save($cnicDirectory . '/' . $filename);
                DB::commit(); // Commit the transaction
                return redirect()->back()->with('success', 'File uploaded successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Something went wrong');
        }
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

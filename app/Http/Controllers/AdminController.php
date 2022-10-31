<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointments;

class AdminController extends Controller
{
   public function addDoctor()
   {
     return view('admin.add_doctor');   
   }

   public function upload(Request $request)
   {
   $doctor =new Doctor;
   $doctor->name=$request->name;
   $doctor->phone=$request->phone;
   $doctor->room=$request->room;
   $doctor->speciality=$request->speciality;
   $doctor->save();
   return redirect()->back()->with('message','Doctor added Successfully');
   }

   public function showAppointments()
   {
    $appoints=Appointments::all();
    return view('admin.showappointments',compact('appoints'));

   }

   public function DeleteAppointmentAdmin($id)
   {
    $data=Appointments::find($id);
    $data->status='canceled';
    $data->save();
    return redirect()->back();
   }
   public function showDoctors()
   {
    $doc=Doctor::all();
    return view('admin.showdoctors',compact('doc'));
   }
   public function DeleteDoctor($id)
   {
    $doctorr=Appointments::find($id);
    $doctorr->delete();
    return redirect()->back();
   }
}

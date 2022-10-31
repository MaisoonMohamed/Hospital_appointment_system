<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointments;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\AppointmentCollection;

class AppointmentController extends Controller
{
    public function makeAppointment(Request $request)
    {
    $appointment= new Appointments;
    
    $existing = DB::table('appointments')
    ->whereDate('date', '=', $request->date)
    ->whereTime('timestart', '=', $request->timestart)  
    ->get();

if ($existing->count() > 0) {
    return redirect()->back()->with('message','This time is not available.');
} else {
    if(Auth::id()){
    $appointment->name=$request->name;
    $appointment->date=$request->date;
    
    $appointment->timestart=$request->timestart;
    $appointment->timeend=$appointment->timestart;
    $appointment->phone=$request->phone;
    $appointment->email=$request->email;
    $appointment->message=$request->message;
    $appointment->doctor=$request->doctor;
    $appointment->status='reserved';
   
   $appointment->user_id=Auth::user()->id;
   $appointment->save();
   }
   else{
    return redirect()->back()->with('message','Please Login/Register First.');
   }
   
   return redirect()->back()->with('message','Appointment Request Successful. We will contact you soon.');
} 
    }
    
    public function myappointment()
    {
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=Appointments::where('user_id',$userid)->get();
     return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }
    public function DeleteAppointment($id)
    {
      $data=Appointments::find($id);
      $data->delete();
      return redirect()->back();
    }




   
    public function index(Appointments $app)
    {
        return AppointmentResource::collection($app->all());
    }

    public function show(Appointments $app)
    {
        return new AppointmentResource($app);
    }

    public function store(Request $request)
    {
        $app = Appointments::create($request->all());

        return $app;
    }

    public function update(Appointments $app, Request $request)
    {
        $app->update($request->all());

        return new AppointmentResource($app);
    }

    public function destroy(Appointments $app)
    {
        if ($app->first()) {
            $app->delete();
        }

        return response()->json(['data' => 'Resource has been deleted']);
    }

}

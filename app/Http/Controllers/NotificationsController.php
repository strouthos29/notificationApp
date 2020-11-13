<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use DB;

class NotificationsController extends Controller
{
    public function index(){

      $notification = DB::table('notifications')->get();

      return view('notification.index',compact('notification'));
    }

    public function create(){
      return view('notification.create');
    }

    public function Store(Request $request){

        $data = array();
        if($request->has('Informational')) {
             $data['notification_type'] = $request->Informational;
        }
        else{
          $data['notification_type'] = $request->Critical;
        }

        $data['notification_msg'] = $request->notification_msg;
        $data['notifiers_name'] = $request->notifiers_name;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;

        $notification = DB::table('notifications')->insert($data);
        return redirect()->route('notification.index')
                            ->with('success', 'Notification Created Successfully');

    }

  public function edit($id){

    $notification = DB::table('notifications')->where('id',$id)->first();
    return view('notification.edit',compact('notification'));

  }

  public function update(Request $request, $id){

    $oldtype = $request->old_type;

    $data = array();
    if($request->has('')) {
         $data['notification_type'] = $request->$oldtype;
    }
    elseif($request->has('Informational')){
      $data['notification_type'] = $request->Informational;
    }
    elseif($request->has('Critical')){
      $data['notification_type'] = $request->Critical;
    }

    $data['notification_msg'] = $request->notification_msg;
    $data['notifiers_name'] = $request->notifiers_name;
    $data['start_date'] = $request->start_date;
    $data['end_date'] = $request->end_date;

    $notification = DB::table('notifications')->where('id',$id)->update($data);
    return redirect()->route('notification.index')
                        ->with('success', 'Notification Updated Successfully');


  }

  public function delete($id){

    $data = DB::table('notifications')->where('id',$id)->first();
    $notification = DB::table('notifications')->where('id',$id)->delete();
    return redirect()->route('notification.index')
                        ->with('success', 'Notification Deleted Successfully');

  }


}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Services\OrderBloodServices;
use App\Http\Services\PeopleServices;
use App\Models\Chapter;
use App\Models\Order;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Student::where('user_id',auth()->id())->get();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed'
     */
    public function create()
    {
    }

     public function  show($id)
     {
         $student=Student::with('media')->find($id);
         $image=null;
            foreach ($student->media as $m)
            {
                $image=$m;
            }
         return view('orders.show',compact('student','image'));
     }
    public  function  changeStatus(Request  $request,$id)
    {
        $student=Student::find($id);
        $student->update(['status'=>$request->status]);
        return back()->with('success','تم تغير الحاله بنجاح');
    }

    public function destroy(Student $order)
    {
        $order->delete();
        return  redirect()->back()->with('success','تم حذف الطلب بنجاح');
    }


}

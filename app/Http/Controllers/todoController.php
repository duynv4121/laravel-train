<?php

namespace App\Http\Controllers;
use App\Models\todoModel;

use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\Blade;
use App\Events\eventNotification;
use App\Events\userSubscribe;
use App\Jobs\sendMailJobs;
use App\Mail\sendMail;
use App\Events\sendMailEvent;



class todoController extends Controller
{
    
    public function index()
    {
        $works = todoModel::all();
        return view('show', compact('works'), ['title' => 'Danh sách công việc']);

    }

    
    public function create()
    {
        return view('insert', ['title' => 'Thêm công việc']);
    }

    
    public function store(Request $request)
    {
        $data = $request->all();

        $work = new todoModel();

        $work->works = $data['work'];
        $work->status = $data['status'];
        $work->save();
        toast('Tạo thành công công việc của bạn','success');
        event(new eventNotification('Ai đó vừa tạo công việc của họ là ' .$data['work']));
        return redirect('/');
    }

    
    public function edit($id)
    {
        $work = todoModel::find($id);
        return view('update',compact('work'), ['title' => 'Cập nhật công việc']);
    }
    
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $work = todoModel::find($id);
        $work->works = $data['work'];
        $work->status = $data['status'];
        $work->save();
        
        toast('Cập nhật thành công công việc của bạn','success');
        return redirect('/');

        return route('routeName');
    }

    
    public function destroy($id)
    {
        $work = todoModel::find($id);
        $work->delete();
        event(new eventNotification('Xóa công việc'));
        toast('Xóa thành công công việc của bạn','success');
        return redirect()->back();
    }

    public function destroyAll(Request $request)
    {
        $data = $request->all();
        if(isset($data['checkbox'])){
            foreach($data['checkbox'] as $id){
                $todo = todoModel::find($id);
                $todo->delete();
            }
            toast('Xóa thành công công việc của bạn','success');
            return redirect()->back();
        }else{
            toast('Chọn ít nhất 1 công việc để xóa','error');
            return redirect()->back();
        }
    }

    public function str()
    {
        return Blade::render('Hello, {{ $name }}', ['name' => 'Julian Bashir']);    
    }


    public function subscribe()
    {
        return view('subscribe', ['title' => 'Đăng kí nhận thông báo']);
    }


    public function storeSub(Request $request)
    {
        event(new userSubscribe($request->input('email')));
        // dispatch(new sendMailJobs($request->input('email')));  //send mail queue
        event(new sendMailEvent($request->input('email'))); //send mail event listener
        return redirect()->back();
    }


    public function mail()
    {
        return view('mail', ['title' => 'Gửi mail']);
    }

    public function testMail(Request $request)
    {
        $email = $request->input('email');
        dispatch(new sendMailJobs($email));
        return back();
    }
}

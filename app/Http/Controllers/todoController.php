<?php

namespace App\Http\Controllers;
use App\Models\todoModel;

use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\Blade;
use App\Events\eventNotification;
 



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
        return redirect('/');
    }

    public function str()
    {
         
        // return 'helo';
        return Blade::render('Hello, {{ $name }}', ['name' => 'Julian Bashir']);    
    }
}

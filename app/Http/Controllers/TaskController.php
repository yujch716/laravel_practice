<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Task;
use function view;

class TaskController extends Controller
{
    //전체 출력
    public function index()
    {
        $tasks = Task::latest()->get(); //최신순으로 전체출력

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    //내가 쓴 글만 출력
    public function my_list()
    {
        $tasks = Task::latest()->where('user_id', auth()->id())->get(); //최신순으로 내가 쓴 글만 출력

        return view('tasks.my', [
            'tasks' => $tasks
        ]);
    }

    //create페이지 열기
    public function create()
    {
        return view('tasks.create');
    }

    //insert
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        // $task = Task::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);
        //아랫줄과 같은 뜻

        $values = request(['title', 'body']);

        $values['user_id'] = auth()->id();

        $task = Task::create($values);

        return redirect('/tasks/'.$task->id);
    }

    //show페이지 열기
    public function show(Task $task)
    {

        return view('tasks.show', [
            'task' => $task
        ]);
    }

    //edit페이지 열기
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);

    }

    //update
    public function update(Task $task)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $task->update([
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect('/tasks/'.$task->id);
    }

    //delete
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }


    public function agg()
    {
        $lists = Price::get();  //전체 주문 리스트
        $count = Price::count();    //전체 주문 수
        $max = Price::max('product_price'); //제일 비싼거
        $min = Price::min('product_price'); //제일 싼거
        $avg = Price::avg('product_price'); //평균
        $union = Price::whereNull('product_name')->get();  //'product_name'값이 비어있는거
        $orwheres = Price::where('user_name','aa')->orwhere('product_price','>','10000')->get();    //구매자가 aa이거나 10000원 넘는거
        $wherebs = Price::whereBetween('product_price',[5000,30000])->get(); //5000~30000
        $wherenbs = Price::whereNotBetween('product_price',[5000,30000])->get(); //5000~30000제외
        $whereds = Price::whereYear('purchase','2021')->get(); //구매날짜가 2021년인거
        $users = User::inRandomOrder()->first(); //랜덤으로 유저 정보 한 컬럼 가져오기
        //$groupb = Price::groupBy('product_price')->having('product_price','>','30000')->get();
        //$dbug = Price::dd();
        $pages = Price::Paginate(3);
        //$pages2 = Price::tesf''

        return view('test',
            ['lists'=>$lists,
                'count'=>$count,
                'max'=>$max, 'min'=>$min,
                'avg'=>$avg,
                'union'=>$union,
                'orwheres'=>$orwheres,
                'wherebs'=>$wherebs,
                'wherenbs'=>$wherenbs,
                'whereds'=>$whereds,
                'users'=>$users,
                //'dbug'=>$dbug
                'pages'=>$pages,
                'pages2'=>$pages2

            ]);
    }

    public function ddd()
    {
        $dbugs = Price::whereBetween('product_price',[5000,30000])->dd();
        //$dbugs = Price::dump();
        $dbugs2 = Price::dd();

        return view(
            ['dbugs'=>$dbugs,
                'dbugs2'=>$dbugs2
                //'dbugs'=>$dbugs

            ]);

    }
}

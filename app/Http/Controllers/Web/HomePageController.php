<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Comments;
use App\Models\Riders;
use App\Models\User;
use App\Models\voteTracking;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comments = Comments::with(['user'])->has('user')->orderBy('id', 'DESC')->take(10)->get();
        $riders = Riders::all([
            'vote'
        ]);

        $commentCount = Comments::with(['user'])->has('user')->orderBy('id', 'DESC')->get()->count();


        foreach ($comments as $comment) {
            $time = $this->timeAgo($comment->updated_at);
            $comment['time'] = $time;
        }

        $totalComment = 0;
        if ($commentCount < 10) {
            $totalComment = 0;
        } else {
            $totalComment = 10;
        }



        return view('web.homepage.index', compact('comments', 'commentCount', 'riders', 'totalComment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loadMore(Request $request)
    {

        $comments = Comments::with(['user'])->has('user')->orderBy('id', 'DESC')->skip($request->dataCount)->take(10)->get();
        $commentTotal = $comments->count();
        $commentCount = (int)  $request->dataCount + $commentTotal;




        foreach ($comments as $comment) {
            $time = $this->timeAgo($comment->updated_at);
            $comment['time'] = $time;
        }

        $datas = [
            $commentCount,
            $comments
        ];

        return $datas;
    }

    public function comment(Request $request)
    {

        // proses insert


        $user = Auth::user();
        if (!$user) {
            return response()->json(['value' => 'not find user'], 402);
        }
        if ($request->comment == '') {
            return response()->json(['value' => 'not find user'], 401);
        }
        DB::beginTransaction();
        try {
            $post = Comments::create([
                'user_id' => $user->id,
                'comments' => $request->comment,
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            return response()->json(['value' => $th->getMessage()], 401);
        } finally {
            DB::commit();
        }

        $comments = Comments::with(['user'])->has('user')->orderBy('id', 'DESC')->get();

        $commentCount = Comments::with(['user'])->has('user')->orderBy('id', 'DESC')->get()->count();

        foreach ($comments as $comment) {
            $time = $this->timeAgo($comment->updated_at);
            $comment['time'] = $time;
        }

        $datas = [
            $commentCount,
            $comments
        ];

        return $datas;
    }

    public function vote(Request $request, $name)
    {

        $url = '';
        $id = '';

        if ($name == 'HANDIKA') {
            $url = 'https://www.tokopedia.com/b7official/ej-sport-x-spartan-handika?extParam=whid%3D2111579';
            $id = 1;
        } elseif ($name == 'MUNIR') {
            $url = 'https://www.tokopedia.com/b7official/ej-sport-x-spartan-afandimunir?extParam=whid%3D2111579';
            $id = 2;
        } else {
            $url = 'https://www.tokopedia.com/b7official/ej-sport-x-spartan-lucky?extParam=whid%3D2111579';
            $id = 3;
        }

        if (Auth::user()) {


            $user = Auth::user();

            DB::beginTransaction();
            try {
                $post = voteTracking::create([
                    'user_id' => $user->id,
                    'rider_id' => $id,
                ]);
            } catch (\throwable $th) {
                DB::rollBack();
                Alert::error('Tambah Career', 'error' . $th->getMessage());
            } finally {
                DB::commit();
            }
        } else {
            return response()->json(['gagal' => 'gagal'], 402);
        }

        return response()->json(['url' => $url], 201);
    }

    private function timeAgo($time_ago)
    {
        $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
        $time  = time() - $time_ago;

        switch ($time):
                // seconds
            case $time <= 60;
                return 'lessthan a minute ago';
                // minutes
            case $time >= 60 && $time < 3600;
                return (round($time / 60) == 1) ? 'a minute' : round($time / 60) . ' minutes ago';
                // hours
            case $time >= 3600 && $time < 86400;
                return (round($time / 3600) == 1) ? 'a hour ago' : round($time / 3600) . ' hours ago';
                // days
            case $time >= 86400 && $time < 604800;
                return (round($time / 86400) == 1) ? 'a day ago' : round($time / 86400) . ' days ago';
                // weeks
            case $time >= 604800 && $time < 2600640;
                return (round($time / 604800) == 1) ? 'a week ago' : round($time / 604800) . ' weeks ago';
                // months
            case $time >= 2600640 && $time < 31207680;
                return (round($time / 2600640) == 1) ? 'a month ago' : round($time / 2600640) . ' months ago';
                // years
            case $time >= 31207680;
                return (round($time / 31207680) == 1) ? 'a year ago' : round($time / 31207680) . ' years ago';

        endswitch;
    }
}

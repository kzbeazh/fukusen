<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Work;    // 追加

use App\Comment;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        //
        return view('works.worksIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($keyword, $itemCode)
    {

        $response = null;
    
        $url = 'https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706';
        
        // applicationIdの 'xxxxx....' は取得したアプリIDに書き換える
        $params = [
            'format' => 'json',
            'applicationId' => '1065123330523368318',
            'hits' => 1,
            'imageFlag' => 1,
            'itemCode' => $itemCode,
        ];

        $response_json = $this->execute_api($url, $params, $keyword);
        $response = json_decode($response_json);  // JSONデータをオブジェクトにする
        
//        dd($response);
        
        $items = $response->Items;
        $itemName = $items[0]->Item->itemName;
        $imageUrl = $items[0]->Item->mediumImageUrls[0]->imageUrl;
        $itemUrl = $items[0]->Item->itemUrl;
        $itemCaption = $items[0]->Item->itemCaption;
        
        $data = [
            'response' => $response,
            'keyword' => $keyword,
            'itemName' => $itemName,
            'imageUrl' => $imageUrl,
            'itemUrl' => $itemUrl,
            'itemCaption' => $itemCaption,
        ];
        
        return view('works.worksCreate', $data);
        
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
        $this->validate($request, [
            'worksFukusendo' => 'required|max:191',
            'worksKind' => 'required|max:191',
            'worksCategory' => 'required|max:191',
            'worksMunakuso' => 'required|max:191',
            'worksComment' => 'required|max:191',
            'worksName' => 'required|max:191',
            'worksStory' => 'required|max:191',
        ]);
        
        $work = new Work;
        
        $work->user_id = \Auth::id();
        $work->worksFukusendo = $request->worksFukusendo;
        $work->worksKind = $request->worksKind;
        $work->worksCategory = $request->worksCategory;
        $work->worksMunakuso = $request->worksMunakuso;
        $work->worksComment = $request->worksComment;
        $work->itemName = $request->itemName;
        $work->imageUrl = $request->imageUrl;
        $work->itemUrl = $request->itemUrl;
        $work->worksName = $request->worksName;
        $work->worksStory = $request->worksStory;
        $work->save();
        
        return redirect('/');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $this->validate($request, [
            'keyword' => 'required|max:191',
        ]);
        
        $keyword = '';
        $response = null;
    
        $url = 'https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706';
        
        // applicationIdの 'xxxxx....' は取得したアプリIDに書き換える
        $params = [
            'format' => 'json',
            'applicationId' => '1065123330523368318',
            'hits' => 15,
            'imageFlag' => 1,
        ];

        $keyword = $request-> keyword;
        $response_json = $this->execute_api($url, $params, $keyword);
        $response = json_decode($response_json);  // JSONデータをオブジェクトにする
        
        $data = [
            'response' => $response,
            'keyword' => $keyword,
        ];

        return view('works.worksShow', $data);
        
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
        $work = Work::find($id);
        $work->delete();
        
        return back();
    }
    
    public function detaildestroy($id)
    {
        //
        $comment = Comment::find($id);
        $comment->delete();
        
        return back();
    }

    public function detail($id)
    {
        //
        $data = [];
        
        $work= Work::find($id);

        $comments = $work->comments()->with('user')->orderBy('id', 'desc')->paginate();
//        $comments =Comment::all();
        
//        dd($comments);
        
        $data = [
            'work' => $work,
            'comments' => $comments,
        ];


        return view('works.detail', $data);
    }

    public function detailStore(Request $request)
    {
        //
        $this->validate($request, [
            'workPost' => 'required|max:191',
        ]);
        
        $comment = new Comment;
        
//      dd($request->workPost, $request->workId, \Auth::id());

        $comment->work_id = $request->workId;
        $comment->user_id = \Auth::id();
        $comment->workPost =$request->workPost;
        $comment->save();
        
//        dd($comment);
                
        return back();
    }
    
//topの検索画面
    public function worksshow(Request $request)
    {
        $works = Work::where('itemName', 'LIKE', '%' . $request->searchword . '%')->get();
        $workscnt = count($works);
//        dd($workscnt);
        
        return view('kinds.searchResult', [
            'works' => $works,
            'workscnt' => $workscnt,
        ]);
    }

    
//関数//
    
    // Web APIを実行する
    function execute_api($url, $params, $keyword) {
        $query = http_build_query($params, "", "&");
        $search_url = $url . '?' . $query . '&keyword=' . $keyword;
        
        return file_get_contents($search_url);
    }


}

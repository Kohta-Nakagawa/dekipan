<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bread;

class BreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = '{
            "dekitateList":[
                 {"id":"1","area":"sawaraku","time":"3:30","pan":"メロンパン","shop":"ケイズオーブン","address":"福岡市早良区西新1-1-1","image":"https://aaa.com"},
                 {"id":"2","area":"sawaraku","time":"4:30","pan":"カレーパン","shop":"エルズオーブン","address":"福岡市早良区曙1-1-1","image":"https://bbb.com"},
                 {"id":"3","area":"jonanku","time":"5:30","pan":"食パン","shop":"エムズオーブン","address":"福岡市城南区茶山1-1-1","image":"https://ccc.com"},
                 {"id":"4","area":"chuoku","time":"6:30","pan":"あんパン","shop":"エヌズオーブン","address":"福岡市中央区天神1-1-1","image":"https://ccc.com"}
             ]}';
        return $result;
    }
    // public function index()
    // {
    //     dd('ここだよ！');
    //     try {
    //         $bread = Bread::first();// todo: 複数のデータを取ってget()するように変更
    //         $result = [
    //             'result'      => true,
    //             'name'     => $bread->name,
    //             'price' => $bread->price,
    //             'shop' => 'つくラボベーカリー',// todo: DBからとるように変更
    //         ];
    //     } catch(\Exception $e){
    //         $result = [
    //             'result' => false,
    //             'error' => [
    //                 'messages' => [$e->getMessage()]
    //             ],
    //         ];
    //         return $this->resConversionJson($result, $e->getCode());
    //     }
    //     return $this->resConversionJson($result);
    // }

    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
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
}
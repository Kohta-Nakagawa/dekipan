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

    public function testData()
    {
        $result = 'testData: {
            dekitateList: [
              {
                id: "8392830",
                area: "sawaraku",
                time: "3:31",
                pan: "メロンパン",
                shop: "ケイズオーブン2",
                address: "福岡市中央区天神1-1-1",
                image: "https://www.hokuo-tokyo.jp/upfiles/L1506066493_46-whole.jpg"
              },
              {
                id: "8dg2830",
                area: "nishiku",
                time: "10:42",
                pan: "ウインナーパン",
                shop: "オーブンオーブン",
                address: "福岡市中央区天神1-1-1",
                image:
                  "https://media-01.creema.net/user/245416/exhibits/3840354/1_7c71e56d0352b4aabf03780a5a7715a0_500.jpg"
              },
              {
                id: "839gddde30",
                area: "nishiku",
                time: "3:56",
                pan: "コッペパン",
                shop: "ここに決めた",
                address: "福岡市中央区天神1-1-1",
                image:
                  "https://coubic-images.s3.amazonaws.com/resources/265675/p1280x1280_61881c5d.JPG"
              },
              {
                id: "839ge30",
                area: "nishiku",
                time: "1:56",
                pan: "チョココロネ",
                shop: "ふじや",
                address: "福岡市中央区天神1-1-1",
                image:
                  "https://takatsuki-scramble.com/wp-content/uploads/2015/06/IMG_3868.jpg"
              },
              {
                id: "83gegew29ge30",
                area: "sawaraku",
                time: "4:59",
                pan: "食パン",
                shop: "美味しいパン屋",
                address: "福岡市中央区天神1-1-1",
                image:
                  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPV8Gg52EG6k9khkXaYRWwnHHuvoAvEdkp5g&usqp=CAU"
              },
              {
                id: "83argh9ge30",
                area: "nishiku",
                time: "5:34",
                pan: "あんぱん",
                shop: "パン屋A",
                address: "福岡市中央区天神1-1-1",
                image:
                  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStvhVhukN4zD10o25PiCZQ_BF0CRQVZkW2Rg&usqp=CAU"
              },
              {
                id: "839efege30",
                area: "sawaraku",
                time: "9:45",
                pan: "揚げパン",
                shop: "揚げパンや",
                address: "福岡市中央区天神1-1-1",
                image:
                  "https://petit-mall.jp/hbrecipe/wp-content/uploads/yakiin2.jpg"
              }
            ]
          }';
        return $result;
    }

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

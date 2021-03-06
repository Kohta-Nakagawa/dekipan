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
        $results = '{
            "dekitateList":[
                 {"id":"1","area":"sawaraku","time":"3:30","pan":"メロンパン","shop":"ケイズオーブン","address":"福岡市早良区西新1-1-1","image":"https://aaa.com"},
                 {"id":"2","area":"sawaraku","time":"4:30","pan":"カレーパン","shop":"エルズオーブン","address":"福岡市早良区曙1-1-1","image":"https://bbb.com"},
                 {"id":"3","area":"jonanku","time":"5:30","pan":"食パン","shop":"エムズオーブン","address":"福岡市城南区茶山1-1-1","image":"https://ccc.com"},
                 {"id":"4","area":"chuoku","time":"6:30","pan":"あんパン","shop":"エヌズオーブン","address":"福岡市中央区天神1-1-1","image":"https://ccc.com"}
             ]}';
        return $results;
    }

    public function getFreshBreads()
    {
        $results = '{
            "dekitate":[
                 {"id":"1","area":"sawaraku","time":"4:30","pan":"カレーパン","shopId":"1","address":"福岡市早良区曙1-1-1","image":"http://www.oksfood.com/image/karepan.jpg"},
                 {"id":"2","area":"jonanku","time":"5:30","pan":"食パン","shopId":"2","address":"福岡市城南区茶山1-1-1","image":"https://img.foodsfridge.jp/ec_rider/product_main_images/large/295400000.jpg"},
                 {"id":"3","area":"chuoku","time":"6:30","pan":"あんパン","shopId":"3","address":"福岡市中央区天神1-1-1","image":"https://www.pompadour.co.jp/eshop/wp-content/uploads/2016/02/35048.jpg"}
             ]}';
        return $results;
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
        $result ='[{dekitateList: [{id: "8392830",area: "sawaraku",time: "3:31",pan: "メロンパン",shop: "ケイズオーブン2", address: "福岡市中央区天神1-1-1",image: "https://www.okuo-tokyo.jp/upfiles/L1506066493_46-whole.jpg" }, { id: "8dg2830", area: "nishiku",time: "10:42", pan: "ウインナーパン", shop: "オーブンオーブン", address: "福岡市中央区天神1-1-1",  image: "https://media-01.creema.net/user/245416/exhibits/3840354/1_7c71e56d0352b4aabf03780a5a7715a0_500.jpg"}, { id: "839gddde30", area: "nishiku", time: "3:56", pan: "コッペパン", shop: "ここに決めた",address: "福岡市中央区天神1-1-1", image:"https://coubic-images.s3.amazonaws.com/resources/265675/p1280x1280_61881c5d.JPG"}]}]';
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

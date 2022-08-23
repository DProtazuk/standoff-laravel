<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameUser;

class SearchController extends Controller
{
    public function search(Request $request) {
        $data = GameUser::on()->where('idUsers', $request->id)->get()->toArray();

        if(!$data){
            return view('shop', [
                'data' => "1"
            ]);
        }
        else {
            return view('shop', [
                'data' => $data[0]
            ]);
        }        
    }

    public function userShop(Request $request) {
        $data = GameUser::on()->where('idUsers', $request->id)->get()->toArray();
        return view('user-shop', ['data' => $data[0]]);
    }

    public function kassa(Request $request) {
        $mass = [
            'id' => $request->id,
            'price' => $request->price,
            'price2' => $request->price2
        ];

        return view('kassa', ['data' => $mass]);
    }
    
    public function bank(Request $request) {

        function getName($n) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $randomString = '';
        
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
        
            return $randomString;
        }

        function getName2($n) {
            $characters = '0123456789';
            $randomString = '';
        
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
        
            return $randomString;
        }
            $n = 8;
            $nums1 = getName($n);

            $n = 4;
            $nums2 = getName($n);

            $n = 4;
            $nums3 = getName2($n);

            $n = 4;
            $nums4 = getName2($n);

            $n = 12;
            $nums5 = getName($n);

            $key = "".$nums1."-".$nums2."-".$nums3."-".$nums4."-".$nums5."";

        $mass = [
            'id' => $request->id,
            'price' => $request->price,
            'price2' => $request->price2,
            'type' => $request->type,
            'key' => $key
        ];

        return view('bank', ['data' => $mass]);
    }
}

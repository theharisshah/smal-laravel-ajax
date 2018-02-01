<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use DB;

class SearchController extends Controller
{
    public function result(Request $request){
        $term = $request->term;
        $items = Search::where('PhoneName', 'LIKE', '%'.$term.'%')->get();
        if(count($items) == 0){
            $searchResult[]="Item not Found!";
            return $searchResult;
        }else{
            foreach($items as $key => $value){
                 $searchResult[] = $value->PhoneName;
            }
        }
        return $searchResult;
    }
    public function phone(Request $request){
        // if($request->ajax()){
        $term = $request->input('SearchItem');
          
        $items = Search::where('PhoneName', 'LIKE', $term.'%')->first();
        $url = $items->url;
        $phonename=$items->PhoneName;
        $overview = $items->Overview;
        $os = $items->os;
        $ram =$items->Ram;
        $camera = $items->Camera;
        $display = $items->Display;
        return view('phoneresults', compact('url','phonename','overview','os','ram','camera','display'));
}
        

}

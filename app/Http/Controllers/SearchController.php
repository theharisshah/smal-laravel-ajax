<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use DB;

class SearchController extends Controller
{
    // this function here sends the results to autocomplete event change according to requirements
    public function result(Request $request){
        $term = $request->term;
        $items = Search::where('PhoneName', 'LIKE', '%'.$term.'%')->get();
        if(count($items) == 0){
            $searchResult[]="Item not Found!"; // if the search item is not in the database the autocomplete would display no item found
            return $searchResult;
        }else{
            foreach($items as $key => $value){
                 $searchResult[] = $value->PhoneName; //fetches the phone name and sends to autocomplete, change according to requirements
            }
        }
        return $searchResult;
    }
    // this function here sends the results to phoneresults.blade.php
    public function phone(Request $request){
       
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

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
    public function view(Request $request){ 
        if($request->ajax()){
            $results = "";
            $term = $request->input('SearchItem');
            
          $items = Search::where('PhoneName', 'LIKE', $term.'%')->first();

                    $results.='
                    <div class="card-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" role="tab" data-toggle="tab" href="#Overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#Specs">Specifications</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Overview">
                            <img class="card-img-bottom" src='.$items->url.'> 
                                <div class="card-body"> 
                                    <h5 class="card-title">'.$items->PhoneName.'</h5> 
                                    <p  class="card-text">'.$items->Overview.'</p>
                                </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Specs">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Operating System: '.$items->os.'
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Memory: '.$items->Ram.'
                                 </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Camera: '.$items->Camera.'
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Display: '.$items->Display.'
                                </li>
                            </ul>
                        </div>
                     </div>';
              
        
            return response($results);
        }
        

    }
}

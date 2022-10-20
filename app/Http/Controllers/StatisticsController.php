<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Statistic;
use App\Models\SocialPosition;
use Carbon\Carbon;


class StatisticsController extends Controller
{
         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $data['social_apps'] = SocialPosition::where('user_id',Auth()->user()->id)->Orderby('position','asc')->get();

        // dd($data);
       $data['social_count']=[];

       foreach($data['social_apps'] as $value){

        $soc = Statistic::where('user_id',Auth()->user()->id)->where($value->social_media,'!=',null)->count();
        $data['social_count'][] = $soc;
       }

       $Statistics = Statistic::select('id', 'created_at')->get()->groupBy(function($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

            $Statisticmcount = [];
            $StatisticArr = [];

            foreach ($Statistics as $key => $value) {
                        $Statisticmcount[(int)$key] = count($value);
                    }

                    for($i = 1; $i <= 12; $i++){
                        if(!empty($Statisticmcount[$i])){
                            $StatisticArr[$i] = $Statisticmcount[$i];    
                        }else{
                            $StatisticArr[$i] = 0;    
                        }
            }
            // dd($StatisticArr);

        // dd($data['social_count']);


    //     Application::whereNotNull(
    //     array_values(
    //         array_filter(
    //             Schema::getColumnListing('applications'),
    //             fn($column) => !in_array($column, ['m', 'n', 'application_status']),
    //         ),
    //     ),
    // )->first();


        return view('statistics',$data);
    }
}

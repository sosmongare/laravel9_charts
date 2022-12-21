<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chart;

class ChartController extends Controller
{
    //
 
    public function showChart()
    {
        //Fetch the data from the database using eloquent model
        $population_records = Chart::all(); 
        $total_population=number_format(Chart::sum('total_population'));
        $male_population=number_format(Chart::sum('male_population'));
        $female_population=number_format(Chart::sum('female_population'));

        // //Create an array of labels and data for the chart
        // $label = [];
        // $dataset = [];

        // foreach($population_data as $item){
        //         $label[]=$item->county;
        //         $dataset[]=$item->total_population;
        // }

        // //Return the chart data as a JSon response
        // return response()->json([
        //     'label' => $label,
        //     'dataset' =>$dataset,
        //     'total_population' =>$total_population,
        //     $male_population,
        //     $female_population
        // ]);

        $data = [];

        // Add the column names to the first row of the array
        $data[] = ['County', 'Population'];

        // Add the data for each row
        foreach ($population_records as $record) {
        $data[] = [$record->county, $record->total_population];
        }

        return view('index',['population_records'=>$data,'total_population'=>$total_population,'male_population'=>$male_population,'female_population'=>$female_population]);

    }
}

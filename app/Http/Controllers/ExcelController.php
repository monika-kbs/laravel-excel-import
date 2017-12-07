<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\DbDumper\Databases\MySql;

class ExcelController extends Controller
{

    public function dumpTable($table)
    {
      return true;
      $file = $table . '.sql';
       MySql::create()
            ->setDbName('jbt_import')
            ->setUserName('root')
            ->setPassword('root')
            ->includeTables($table)
            ->dumpToFile($file);
      // download file
      $path     = public_path() . '/' . $file;
      $download =  response()->download($path);
      info($download);
    }

    public function insertUsersData($data)
    {
        foreach ($data as $key => $value) {
          if($value->user_id)
          {
            $arr[] = [
                'user_id'           => $value->user_id,
                'first_name'        => $value->first_name,
                'last_name'         => $value->last_name,
                'test_type'         => $value->test_type,
                'bp_test'           => $value->bp_test,
                'a1c_test'          => $value->a1c_test,
                'hiv_test'          => $value->hiv_test,
                'verification_date' => $value->verification_date,
                'join_date'         => $value->join_date,
                'gender'            => $value->gender,
                'phone'             => $value->phone,
                'zip'               => $value->zip,
                'ethnicity'         => $value->ethnicity,
                'dob'               => $value->dob,
                'city'              => $value->city,
                'state'             => $value->state
            ];
          }
        }
        if(!empty($arr)){
            \DB::table('JBT_2017_Users')->insert($arr);
            $this->dumpTable('JBT_2017_Users');
        }
    }

    // public function insertTestsData($data)
    // {
    //     foreach ($data as $key => $value) {
    //       if($value->user_id)
    //       {
    //         $arr[] = [
    //           'user_id'                 => $value->user_id,
    //           'first_name'              => $value->first_name,
    //           'last_name'               => $value->last_name,
    //           'posted'                  => $value->posted,
    //           'ip_address'              => $value->ip_address,
    //           'referrer'                => $value->referrer,
    //           'jbt_verification_status' => $value->jbt_verification_status,
    //           'age'                     => $value->age,
    //           'weight'                  => $value->weight,
    //           'bmi'                     => $value->bmi,
    //           'option1'                 => $value->option1,
    //           'option2'                 => $value->option2,
    //           'option3'                 => $value->option3,
    //           'option4'                 => $value->option4,
    //           'option5'                 => $value->option5,
    //           'option6'                 => $value->option6,
    //           'option7'                 => $value->option7,
    //           'option8'                 => $value->option8,
    //           'option9'                 => $value->option9,
    //           'option10'                => $value->option10,
    //           'option11'                => $value->option11,
    //           'option12'                => $value->option12,
    //           'option13'                => $value->option13,
    //           'option14'                => $value->option14,
    //           'option15'                => $value->option15,
    //           'option16'                => $value->option16,
    //           'option17'                => $value->option17,
    //           'option18'                => $value->option18,
    //           'option19'                => $value->option19,
    //           'option20'                => $value->option20,
    //           'option21'                => $value->option21,
    //           'option22'                => $value->option22,
    //           'option23'                => $value->option23,
    //           'option24'                => $value->option24,
    //           'option25'                => $value->option25,
    //           'option26'                => $value->option26,
    //           'option27'                => $value->option27,
    //           'option28'                => $value->option28,
    //           'option29'                => $value->option29,
    //           'option30'                => $value->option30,
    //           'option31'                => $value->option31,
    //           'option32'                => $value->option32,
    //           'option33'                => $value->option33,
    //           'option34'                => $value->option34,
    //           'option35'                => $value->option35,
    //           'option36'                => $value->option36,
    //           'option37'                => $value->option37,
    //           'option38'                => $value->option38,
    //           'option39'                => $value->option39,
    //           'option40'                => $value->option40,
    //           'option41'                => $value->option41,
    //           'option42'                => $value->option42,
    //           'option43'                => $value->option43,
    //           'option44'                => $value->option44,
    //           'option45'                => $value->option45,
    //           'option46'                => $value->option46,
    //         ];
    //       }
    //     }
    //     if(!empty($arr)){
    //         \DB::table('JBT_2017_Tests')->insert($arr);
    //         $this->dumpTable('JBT_2017_Tests');
    //     }
    // }

    public function insertTestsData($data)
    {
        foreach ($data as $key => $value) {
          if($value->user_id)
          {
            $arr[] = [
                'user_id' => $value->user_id,
                'first' => $value->first,
                'last' => $value->last,
                'joining_date' => $value->joining_date,
                'zip' => $value->zip,
                'gender' => $value->gender,
                'posted' => $value->posted,
                'index' => $value->index,
                'ip' => $value->ip,
                'rererrer' => $value->rererrer,
                'bi' => $value->bi,
                'question6' => $value->question6,
                'weight_status' => $value->weight_status,
                'question1' => $value->question1,
                'question4' => $value->question4,
                'question3' => $value->question3,
                'jbt' => $value->jbt,
                'verification' => $value->verification,
                'status' => $value->status,
                'calc' => $value->calc,
                'question7a' => $value->question7a,
                'question7c' => $value->question7c,
                'encrypt' => $value->encrypt,
                'question2' => $value->question2,
                'que_year' => $value->que_year,
                'question7b' => $value->question7b,
                'diabetes_score' => $value->diabetes_score,
                'question5' => $value->question5,
                'question11' => $value->question11,
                'question7' => $value->question7,
                'question9' => $value->question9,
                'question12' => $value->question12,
                'jbt_verification_status' => $value->jbt_verification_status,
                'question8a' => $value->question8a,
                'question10' => $value->question10,
                'question8f' => $value->question8f,
                'question8b' => $value->question8b,
                'question8c' => $value->question8c,
                'quetion8e' => $value->quetion8e,
                'question8h' => $value->question8h,
                'question8d' => $value->question8d,
                'question8g' => $value->question8g,
                'question19' => $value->question19,
                'question18' => $value->question18,
                'question16' => $value->question16,
                'question13' => $value->question13,
                'question17a' => $value->question17a,
                'question17b' => $value->question17b,
                'resumed_form' => $value->resumed_form,
                'question17e' => $value->question17e,
                'question17d' => $value->question17d,
                'question17c' => $value->question17c,
                'question17f' => $value->question17f,
                'question17g' => $value->question17g
            ];
          }
        }
        if(!empty($arr)){
            \DB::table('JBT_2017_Tests')->insert($arr);
            $this->dumpTable('JBT_2017_Tests');
        }
    }

    public function import(Request $request)
    {        
        $this->validate($request, [
          'excel_sheet' => 'required'
        ]);

        $path = $request->file('excel_sheet')->getRealPath();        
        $data = \Excel::load($path)->ignoreEmpty()->get();  
        $dataSize = $data->count();
        $last = $dataSize - 1;     
        if($dataSize){
          if($request->sheet_type == "users")
          {
            foreach (range(0, $last) as $key => $value) {
              $data = \Excel::selectSheetsByIndex($key)->load($path)->ignoreEmpty()->get();
              $this->insertUsersData($data);              
            }
          } elseif($request->sheet_type == "tests") {
            // $this->insertTestsData($data);
            foreach (range(0, $last) as $key => $value) {
              $data = \Excel::selectSheetsByIndex($key)->load($path)->ignoreEmpty()->get();
              $this->insertTestsData($data);               
            }  
          }
        }
        return redirect('/')->with('success', 'Excel Sheet successfully imported.');
    }

    public function redirect()
    {
        return redirect('/');
    }
}

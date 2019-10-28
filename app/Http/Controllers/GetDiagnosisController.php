<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnosis;
use App\Diagnos;

class GetDiagnosisController extends Controller
{
    public function home(){
        $diagnosis = Diagnosis::all();
        return view('home',['diagnosis' => $diagnosis]);
    }

    public function getdiagnosesdata(){
        $diagnoses = Diagnos::all();
        return view('diagnosis_resultpage',['diagnoses' => $diagnoses]);
    }
    public function add(Request $request){
        $this -> validate($request,[
            'symptom_id'=>'required',
            'symptoms'=>'required',
            'gender'=>'required',
            'year'=>'required',
            'token'=>'required'
        ]);
         $diagnosis = new Diagnosis;
         $diagnosis->symptom_id = $request->input('symptom_id');
         $diagnosis->symptom = $request->input('symptoms');
         $diagnosis->save();
        return redirect('/')->with('info','Symptoms saved successfully');
    }

    public function update($id){
        $diagnosis = Diagnosis::find($id);
        return view('update',['diagnosis' => $diagnosis]);
    }
    public function edit(Request $request,$id){
        $this -> validate($request,[
            'symptom_id'=>'required',
            'symptoms'=>'required',
            'gender'=>'required',
            'year'=>'required',
            'token'=>'required'
        ]);
        $data = array(
            'symptom_id'=>$request->input('symptom_id'),
            'symptom'=>$request->input('symptoms')
        );
        Diagnosis::where('id',$id)
        ->update($data);
        return redirect('/')->with('info','Symptoms Updated Successfully');
    }

    public function read($id){
        $diagnosis = Diagnosis::find($id);
        return view('read',['diagnosis' => $diagnosis]);
    }

    public function delete($id){
        Diagnosis::where('id',$id)
        ->delete();
        return redirect('/')->with('info','Symptoms Deleted Successfully');

    }

    public function getdata(){
        //using curl library-initialize and assign curl to variable
        $ch = curl_init();
        $url ="https://sandbox-healthservice.priaid.ch/symptoms?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImRhbmN1bi5vZ2luZG8zQGdtYWlsLmNvbSIsInJvbGUiOiJVc2VyIiwiaHR0cDovL3NjaGVtYXMueG1sc29hcC5vcmcvd3MvMjAwNS8wNS9pZGVudGl0eS9jbGFpbXMvc2lkIjoiNTkwNCIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvdmVyc2lvbiI6IjIwMCIsImh0dHA6Ly9leGFtcGxlLm9yZy9jbGFpbXMvbGltaXQiOiI5OTk5OTk5OTkiLCJodHRwOi8vZXhhbXBsZS5vcmcvY2xhaW1zL21lbWJlcnNoaXAiOiJQcmVtaXVtIiwiaHR0cDovL2V4YW1wbGUub3JnL2NsYWltcy9sYW5ndWFnZSI6ImVuLWdiIiwiaHR0cDovL3NjaGVtYXMubWljcm9zb2Z0LmNvbS93cy8yMDA4LzA2L2lkZW50aXR5L2NsYWltcy9leHBpcmF0aW9uIjoiMjA5OS0xMi0zMSIsImh0dHA6Ly9leGFtcGxlLm9yZy9jbGFpbXMvbWVtYmVyc2hpcHN0YXJ0IjoiMjAxOS0xMC0yMSIsImlzcyI6Imh0dHBzOi8vc2FuZGJveC1hdXRoc2VydmljZS5wcmlhaWQuY2giLCJhdWQiOiJodHRwczovL2hlYWx0aHNlcnZpY2UucHJpYWlkLmNoIiwiZXhwIjoxNTcyMTI1OTIwLCJuYmYiOjE1NzIxMTg3MjB9.qTuXNerA4RhgCLf0ZlXPBa5H7mVeD7Ekix-B_CxOk4g&format=json&language=en-gb";
        //set option
        curl_setopt($ch, CURLOPT_URL,$url);

        //return the response instead of outputing directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //whether to return the header-set to false
        curl_setopt($ch, CURLOPT_HEADER, 0);

        //execute the request and fetch the response. check for errors
        $output = curl_exec($ch);
        if($output === FALSE){
            echo "cURL Error".curl_error($ch);
        }

        //close and free up the curl handle
        curl_close($ch);
        //display raw output
       // print_r($output);

       //decode your string
       $symptoms_array = json_decode($output, true);
       foreach($symptoms_array as $value){
             $symp_id= $value['ID'];
             $symp_name= $value['Name'];

         $diagnosis = new Diagnosis;
         $diagnosis->symptom_id = $symp_id;
         $diagnosis->symptom =$symp_name;
         $diagnosis->save();
       }
        return redirect('/')->with('info','Symptoms saved successfully');

    }
    public function getdiagnosis(Request $request){
        $symptom = urlencode($request->input('symptom_id'));
        $gender = urlencode($request->input('gender'));
        $year = urlencode($request->input('year'));
        $auth_token =urlencode($request->input('token'));
        $format =urlencode("json");
        $lang = urlencode("en-gb");
        //using curl library-initialize and assign curl to variable
        $ch = curl_init();
        $url='https://healthservice.priaid.ch/diagnosis?symptoms=['.$symptom.']&gender='.$gender.'&year_of_birth='.$year.'&token='.$auth_token .'&format='.$format.'&language='.$lang;
        //set option
        curl_setopt($ch, CURLOPT_URL,$url);

        //return the response instead of outputing directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //whether to return the header-set to false
        curl_setopt($ch, CURLOPT_HEADER, 0);

        //execute the request and fetch the response. check for errors
        $output = curl_exec($ch);
        if($output === FALSE){
            echo "cURL Error".curl_error($ch);
        }

        //close and free up the curl handle
        curl_close($ch);
        //display raw output
       // print_r($output);

       //decode your string
       $diagnoses_array = json_decode($output, true);
       foreach($diagnoses_array as $value){
             $diagnosis_id= $value['Issue']['ID'];
             $diagnosis_name= $value['Issue']['ProfName'];

             $diagnos = new Diagnos;
             $diagnos->diagnosis_id=$diagnosis_id;
             $diagnos->profname=$diagnosis_name;
             $diagnos->save();
       }
      return $this->getdiagnosesdata();
    }

    public function validatediagnoses($id){
        $diagnoses = Diagnos::find($id);
        return view('validate_diagnosis',['diagnoses' => $diagnoses]);
    }

    public function editdiagnoses(Request $request, $id){
        $this -> validate($request,[
            'diagnoses_id'=>'required',
            'diagnoses'=>'required',
            'status'=>'required',
        ]);
        $data = array(
            'diagnosis_id'=>$request->input('diagnoses_id'),
            'profname'=>$request->input('diagnoses'),
            'status'=>$request->input('status')
        );
        Diagnos::where('id',$id)
        ->update($data);
        return redirect('/diagnosis')->with('info','Diagnosis Validated Successfully');
    }
    public function deletediagnoses($id){
        Diagnos::where('id',$id)
        ->delete();
        return redirect('/diagnosis')->with('info','Diagnosis Deleted Successfully');

    }
}

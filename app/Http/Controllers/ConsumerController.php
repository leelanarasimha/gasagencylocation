<?php

namespace App\Http\Controllers;

use App\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConsumerController extends Controller
{
    public $consumerIds = array();
    public $count = 0;
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        if (isset($search)) {
            $this->data['consumers'] = Consumer::where('consumerid', $search)->orderBy('consumerid', 'ASC')->paginate(10);
        } else {
            $this->data['consumers'] = Consumer::orderBy('consumerid', 'ASC')->paginate(10);
        }

        return view('consumers/index', $this->data);
    }

    public function activelist()
    {
        $consumer_ids = Consumer::pluck('consumerid');

        $this->consumerIds = array_merge($this->consumerIds, $consumer_ids->toArray());
        print_r($this->consumerIds);



        $file = fopen(public_path() . '/files/ActiveConsumersList.csv', 'r');
        $i = 0;

        while (!feof($file)) {
            $i++;
            $this->uploadFileData(fgetcsv($file));
        }
        echo 'Total Records' . $this->count;
        fclose($file);
        die;
    }

    public function blockedlist()
    {
    }

    private function uploadFileData($fileData)
    {
        if ($fileData[0] === 'Consumer Number') {
            return;
        }
        $this->count++;


        if (!in_array($fileData[0], $this->consumerIds) && $fileData[0] !== '' && $fileData[0] !== null) {
            $this->consumerIds[] = $fileData[0];

            $consumer = new Consumer();
            $consumer->consumerid = $fileData[0];
            $consumer->name = $fileData[1];
            $consumer->fathersName = $fileData[2];
            $consumer->mothersName = $fileData[3];
            $consumer->spouseName = $fileData[4];
            $consumer->houseNo = $fileData[5];
            $consumer->house = $fileData[6];
            $consumer->housing = $fileData[7];
            $consumer->streetName = $fileData[8];
            $consumer->area = $fileData[9];
            $consumer->city = $fileData[10];
            $consumer->district = $fileData[11];
            $consumer->pincode = $fileData[12];
            $consumer->rationcard = $fileData[13];
            $consumer->email = $fileData[14];
            $consumer->scheme = $fileData[15];
            $consumer->bpltype = $fileData[16];
            $consumer->dcttype = $fileData[17];
            $consumer->optingstatus = $fileData[18];
            $consumer->subsidyquote_eligiblefor_currentyear = $fileData[19];
            $consumer->subsidyquote_delvfor_currentyear = $fileData[20];
            $consumer->kycdone = $fileData[21];
            $consumer->lpgid = $fileData[22];
            $consumer->lpgdistrict = $fileData[23];
            $consumer->lpgdistrictname = $fileData[24];
            $consumer->lpgsubdistrict = $fileData[25];
            $consumer->lpgsubdistrictname = $fileData[26];
            $consumer->lpgvillage = $fileData[27];
            $consumer->lpgvillagename = $fileData[28];
            $consumer->typeofmarket = $fileData[29];
            $consumer->address = $fileData[30];
            $consumer->phonenumber = $fileData[31];
            $consumer->mobilenumber = $fileData[32];
            $consumer->areaId = $fileData[33];
            $consumer->areacodedescription = $fileData[34];
            $consumer->svdate = $fileData[35];
            $consumer->svnumber = $fileData[36];
            $consumer->category = $fileData[37];
            $consumer->productcode = $fileData[38];
            $consumer->noofcylinders = $fileData[39];
            $consumer->noofdprs = $fileData[40];
            $consumer->bluebooknumber = $fileData[41];
            $consumer->lastDeliveryDate = $fileData[42];
            $consumer->surakshatube = $fileData[43];
            $consumer->inspectiondate = $fileData[44];
            $consumer->typeofmarket2 = $fileData[45];
            $consumer->historycode = $fileData[46];
            $consumer->connectiontype = $fileData[47];
            $consumer->consumertype = $fileData[48];

            $consumer->save();


            //echo '<pre>'.print_r($this->consumerIds, true).'</pre>';
        }
    }

    public function getDetails($id)
    {
        $this->data['consumer'] = Consumer::where('consumerid', $id)->get();


        return view('consumers/details', $this->data);
    }

    public function showAddress($id)
    {
        $this->data['consumer'] = Consumer::where('consumerid', $id)->first();
        return view('consumers/updateaddress', $this->data);
    }

    public function updateAddress(Request $request, $id)
    {
        $consumer = Consumer::where('consumerid', $id)->first();
        $consumer->address = $request->input('address');
        $consumer->save();
        Session::flash('success_message', 'Address Updated Successfully');
        return redirect('consumers/updateaddress/' . $id);
    }
}

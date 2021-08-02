<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\BulkMail;
use App\Imports\MailImport;
use Maatwebsite\Excel\Facades\Excel;
class mailingController extends Controller
{
    public function bulkMail(Request $request)
    {
        $rows =Excel::toArray(new MailImport,request()->file('excelFile'));
        for ($i=0; $i < sizeof($rows[0]); $i++) {
            $mailData = new \stdClass();
            $mailData=array(
                'name' => $rows[0][$i][0],
                'email' => $rows[0][$i][1],
            );
            Mail::to($rows[0][$i][1])->send(new bulkMail($mailData));
        }
        return view('home');
    }
}

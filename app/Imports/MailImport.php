<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Mail\BulkMail;
use Illuminate\Support\Facades\Mail;

class MailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $mailData = new \stdClass();

        // $mailData=array(
        //     'email' => $row['email'],
        // );
        // Mail::to($row['email'])->send(new bulkMail($mailData));
        // return new User([
        //     //
        // ]);
    }
}

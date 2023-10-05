<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function saveTransfer(Request $request) {
        $incomingFields = $request->validate([
            'date' => 'required',
            'company' => 'required',
            'reference' => 'required',
            'equipment_type' => 'required',
            'transfer_type' => 'required',
            'quantity' => 'required',
            'docket' => 'required',
            'comments' => ''
        ]);

        $incomingFields['date'] = strip_tags($incomingFields['date']);
        $incomingFields['company'] = strip_tags($incomingFields['company']);
        $incomingFields['reference'] = strip_tags($incomingFields['reference']);
        $incomingFields['equipment_type'] = strip_tags($incomingFields['equipment_type']);
        $incomingFields['transfer_type'] = strip_tags($incomingFields['transfer_type']);
        $incomingFields['quantity'] = strip_tags($incomingFields['quantity']);
        $incomingFields['docket'] = strip_tags($incomingFields['docket']);
        $incomingFields['comments'] = strip_tags($incomingFields['comments']);

        Transfer::create($incomingFields);
        return redirect('/pallet-transfer');
    }
}

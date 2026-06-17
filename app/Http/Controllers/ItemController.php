<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function pdfview(Request $request)
    {
        $items = User::all();

        if ($request->has('download')) {
            $pdf = Pdf::loadView('pdfview', compact('items'));
            return $pdf->download('pdfview.pdf');
        }

        return view('pdfview', compact('items'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use PDF;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'time' => 'required|string|max:10',
            'message' => 'required|string|max:1000',
        ]);
        $appointment = Appointment::create($data);
        $pdf = PDF::loadView('pdf.appointment', $data);
        session()->flash('success', 'Votre réservation a été effectuée avec succès.');
        return $pdf->download('appointment.pdf');
    }
}

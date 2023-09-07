<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function show($booking_id)
    {
        $booking = Booking::find($booking_id);

        return view('booking.show', ["booking" => $booking]);
    }
    //
    /**
     * for show the user a confirmation of their booking inquiry
     */
    public function confirmation()
    {
        return view('booking.confirmation');
    }

    public function getAcceptedBookings()
{
    $bookings = Booking::where('status', 'accepted')->get();

    $events = [];
    foreach ($bookings as $booking) {
        $events[] = [
            'id' => $booking->id,
            'title' => 'Accepted Booking',
            'start' => $booking->date,
            // You can add other FullCalendar event properties if needed
        ];
    }

    return response()->json($events);
}


    /**
     *for storing a new booking
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'notes' => 'nullable|string',
            'event_date' => 'required|date|after:today',
            'phone' => 'nullable|string|max:20|min:11'
        ]);



        Booking::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'additional_notes' => $data['notes'],
            'event_date' => Carbon::parse($data['event_date'])->format('M j,Y'),
            'phone' => $data['phone'],
            'status' => 'pending',
            'package' => strtolower($request->input('package'))
        ]);

        // Optionally send a confirmation email or notification to admin

        // Redirect with a success message
        return redirect()->route('booking.thankyou')->with('status', 'Your inquiry has been received! We will get back to you soon.');
    }

    /**
     * To accept an new booking
     * @param  \App\models\Booking
     */

}

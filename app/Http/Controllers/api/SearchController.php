<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocompletingSearch(Request $r)
    {
        $query = $r->get('query');

        $locations = Hotel::where('address', 'LIKE', "%$query%")
            ->select('address')
            ->distinct()
            ->take(5)
            ->pluck('address');
        $rooms = Room::with('hotel')
            ->where('name', 'LIKE', "%$query%")
            ->select('id', 'name')
            ->take(5)
            ->get();

        return response()->json([
             'locations' => $locations,
        'rooms' => $rooms,
        ]);
        
// $rooms->map(function ($room) {
//             return [
//                 'id' => $room->id,
//                 'room_name' => $room->name,
//                 'hotel_name' => $room->hotel->name ?? '',
//                 'hotel_address' => $room->hotel->address ?? '',
//             ];
//         })

    }
    public function search(Request $request)
    {
        $keyword = trim($request->input('keyword'));

        if (empty($keyword)) {
            return redirect()->route('client.rooms');
        }

        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $people = $request->input('guest');
        $roomCount = $request->input('room');

        $results = Room::with('hotel')
            ->where(function ($q) use ($keyword) {
                $q->where('name', 'LIKE', "%$keyword%")
                    ->orWhereHas('hotel', function ($q) use ($keyword) {
                        $q->where('name', 'LIKE', "%$keyword%")
                            ->orWhere('address', 'LIKE', "%$keyword%");
                    });
            })
            ->get();

        $notFound = $results->isEmpty();

        return view('client.SResult', compact('results', 'keyword', 'checkin', 'checkout', 'people', 'roomCount', 'notFound'));
    }
    public function old_autocompletingSearch(Request $r)
    {
        $query = $r->get('query');

        $rooms = Room::with('hotel')
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%")
                    ->orWhere('description', 'LIKE', "%$query%");
            })
            ->orWhereHas('hotel', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%")
                    ->orWhere('address', 'LIKE', "%$query%")
                    ->orWhere('description', 'LIKE', "%$query%");
            })
            ->take(10)
            ->get();

        // Chuyển dữ liệu thành dạng phù hợp cho JSON
        $results = $rooms->map(function ($room) {
            return [
                'id' => $room->id,
                'room_name' => $room->name,
                'room_description' => $room->description,
                'hotel_name' => $room->hotel->name ?? '',
                'hotel_address' => $room->hotel->address ?? ''
            ];
        });

        return response()->json($results);
    }
}

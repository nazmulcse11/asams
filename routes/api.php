<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\RfidSession;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/rfid-status', function (Request $request) {
    if ($request->bearerToken() !== env('RFID_API_SECRET')) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $validated = $request->validate([
        'pc_name' => 'required|string',
        'uid' => 'required|string',
        'status' => 'required|in:connected,disconnected',
    ]);

    // Find existing active session
    $active = RfidSession::where('pc_name', $request->pc_name)
        ->where('uid', $request->uid)
        ->where('status', 'connected')
        ->orderByDesc('id')
        ->first();

    if ($request->status === 'connected') {
        // Create new session log
        RfidSession::create([
            'pc_name' => $request->pc_name,
            'uid' => $request->uid,
            'status' => 'connected',
            'connected_at' => now(),
        ]);
    } elseif ($request->status === 'disconnected' && $active) {
        // Update the previous active session
        $active->update([
            'status' => 'disconnected',
            'disconnected_at' => now(),
        ]);
    }

    return response()->json(['message' => 'RFID status recorded']);
});

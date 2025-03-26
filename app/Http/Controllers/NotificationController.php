<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminNotification;

class NotificationController extends Controller
{
    public function getNotifications()
    {
        $notifications = AdminNotification::where('is_read', false)
            ->where('type', 'customer_registration')
            ->latest()
            ->take(10)
            ->get();

        return response()->json([
            'notifications' => $notifications,
            'count' => $notifications->count()
        ]);
    }

    public function markAsRead(Request $request)
    {
        $notification = AdminNotification::find($request->notification_id);
        if ($notification) {
            $notification->update(['is_read' => true]);
        }

        return response()->json(['success' => true]);
    }
}

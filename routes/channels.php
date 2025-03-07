<?php
use Illuminate\Support\Facades\Broadcast;
use App\Models\conversation;
use App\Models\chanel;
Broadcast::channel('chat.{roomId}', function ($user, $roomId) {
    // بررسی اینکه آیا کاربر می‌تواند به این کانال وارد شود یا خیر
    $conversation = conversation::where('id', $roomId)
        ->where(function ($query) use ($user) {
            $query->where('user1_id', $user->id)
                  ->orWhere('user2_id', $user->id);
        })->first();

    // اگر مکالمه یافت شد، اجازه دسترسی به کانال داده می‌شود
    if ($conversation) {
        return [
            'id' => $user->id,
            'name' => $user->name,
        ];
    }

    return false;
});

Broadcast::channel('channel.{roomId}', function ($user, $roomId) {
    // بررسی اینکه آیا کاربر عضو این کانال هست یا نه
    $chanel = Chanel::find($roomId);
    if ($chanel && $chanel->users()->where('id', $user->id)->exists()) {
        return [
            'id' => $user->id,
            'name' => $user->name,
        ];
    }
    return false;
});

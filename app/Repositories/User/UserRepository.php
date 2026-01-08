<?php

namespace App\Repositories\User;

use Illuminate\Support\Facades\Auth;
use App\Interfaces\User\userUpdateProfileInterface;
use App\Models\Attachment;
use Illuminate\Support\Facades\Storage;

class UserRepository implements userUpdateProfileInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function methodUpdateProfileInterface($request, $data)
{
    /** @var \App\Models\User $user */
    $user = Auth::guard('sanctum')->user();

    // تحديث بيانات المستخدم
    $user->update([
        'name'  => $data['name']  ?? $user->name,
        'email' => $data['email'] ?? $user->email,
        'phone' => $data['phone'] ?? $user->phone,
    ]);

    // لو فيه صورة جديدة
    if ($request->hasFile('file')) {

        $attachment = Attachment::where('user_id', $user->id)->first();

        // حذف الصورة القديمة
        if ($attachment && $attachment->file && Storage::disk('public')->exists($attachment->file)) {
            Storage::disk('public')->delete($attachment->file);
        }

        // حفظ الصورة الجديدة
        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('upload/imageProfile', $fileName, 'public');

        // تحديث أو إنشاء سجل جديد
        Attachment::updateOrCreate(
            ['user_id' => $user->id],
            ['file' => $filePath]
        );
    }

    return $user;
}

}

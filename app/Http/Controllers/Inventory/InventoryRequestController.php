<?php

namespace App\Http\Controllers\Inventory;

use App\Models\InventoryRequest;
use App\Models\User; // تأكد من استيراد نموذج User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class InventoryRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'governorate' => 'required|string',
            'housing_details' => 'required|string',
             'number' => 'required|string',
            'size' => 'required|string',
            'breakable' => 'required|string',
            'delivery_service' => 'required|string',
            'message' => 'nullable|string',

            
        ]);

        $inventoryRequest = new InventoryRequest();
        $inventoryRequest->user_id = Auth::id(); // الحصول على معرف المستخدم الحالي

        // جلب الاسم من المستخدم المسجل دخوله
        $user = User::find(Auth::id()); // جلب بيانات المستخدم
        if ($user) {
            $inventoryRequest->name = $user->name; // تعيين الاسم للحقل name في الطلب
        } else {
            // في حال عدم العثور على المستخدم، يمكن تعيين اسم افتراضي أو معالجة الخطأ
            $inventoryRequest->name = 'اسم غير معروف';
        }

        // تعيين القيم الأخرى
        $inventoryRequest->status_id = 1; // يمكنك تعيين أي قيمة حسب الحاجة
        $inventoryRequest->package_id = 1; // تعيين قيمة للـ package_id (يمكنك تعديلها حسب الحاجة)
        $inventoryRequest->nationality_status_id = 1; // تعيين قيمة للحقل nationality_status_id
        $inventoryRequest->delivered_location_id = 1; // تعيين قيمة للحقل delivered_location_id
        $inventoryRequest->governorate = $request->input('governorate');
        $inventoryRequest->housing_details = $request->input('housing_details');
        $inventoryRequest->number = $request->input('number');
        $inventoryRequest->size = $request->input('size');
        $inventoryRequest->breakable = $request->input('breakable');
        $inventoryRequest->delivery_service = $request->input('delivery_service');
        $inventoryRequest->message = $request->input('message');

        $inventoryRequest->save(); // حفظ الطلب في قاعدة البيانات

        return redirect()->back()->with('success', 'تم إرسال الطلب بنجاح.');
    }
}

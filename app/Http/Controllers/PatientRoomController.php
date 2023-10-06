<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PatientRoom;
use App\Models\Room;
use DateTime;

class PatientRoomController extends Controller
{
    public function index()
    {
        $patientRooms = PatientRoom::all();
        return view('patient_rooms.index', compact('patientRooms'));
    }

    public function create()
    {
        $patients = Patient::all();
        $rooms = Room::all();

        // الحصول على قائمة الأوقات المتاحة
        $allTimes = [
            '08:00 AM', '09:00 AM', '10:00 AM', '11:00 AM',
            '12:00 PM', '01:00 PM', '02:00 PM', '03:00 PM',
        ];

        // الحصول على قائمة الأوقات المحجوزة
        $bookedTimes = PatientRoom::pluck('from', 'to')->all();

        // تحويل التواريخ والأوقات المحجوزة إلى تنسيق DateTime
        $bookedDateTimes = [];
        foreach ($bookedTimes as $from => $to) {
            $fromDateTime = new DateTime($from);
            $toDateTime = new DateTime($to);
            $bookedDateTimes[] = [
                'from' => $fromDateTime,
                'to' => $toDateTime,
            ];
        }

        // استبعاد الأوقات المحجوزة من الأوقات المتاحة
        $availableDateTimes = array_filter($allTimes, function ($time) use ($bookedDateTimes) {
            $dateTime = new DateTime($time);
            foreach ($bookedDateTimes as $bookedDateTime) {
                if ($dateTime >= $bookedDateTime['from'] && $dateTime <= $bookedDateTime['to']) {
                    return false; // الوقت محجوز
                }
            }
            return true; // الوقت شاغر
        });

        return view('patient_rooms.create', compact('patients', 'rooms', 'availableDateTimes'));
    }




    public function store(Request $request)
    {
        // التحقق من توفر الغرفة في الوقت المحدد
        $room_id = $request->input('room_id');
        $datetime = new \DateTime($request->input('datetime')); // تحويل التاريخ والوقت إلى تنسيق الوقت الصحيح

        // اجراء عملية الإضافة هنا
        $patientRoom = PatientRoom::create([
            'patient_id' => $request->input('patient_id'),
            'room_id' => $request->input('room_id'),
            'from' => $datetime,
            'to' => $datetime, // يمكنك تعيين الوقت النهائي هنا أيضًا
        ]);

        return redirect()->route('patient-rooms.index')
            ->with('success', 'تمت إضافة الغرفة بنجاح');
    }


    public function show($id)
    {
        $patientRoom = PatientRoom::find($id);
        return view('patient_rooms.show', compact('patientRoom'));
    }

    public function edit($id)
    {
        $patientRoom = PatientRoom::find($id);
        return view('patient_rooms.edit', compact('patientRoom'));
    }

    public function update(Request $request, $id)
    {
        // اجراء عملية التحديث هنا
        $patientRoom = PatientRoom::find($id);
        $patientRoom->update([
            'patient_id' => $request->input('patient_id'),
            'room_id' => $request->input('room_id'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
        ]);

        return redirect()->route('patient_rooms.index')
            ->with('success', 'تم تحديث الغرفة بنجاح');
    }

    public function destroy($id)
    {
        // اجراء عملية الحذف هنا
        $patientRoom = PatientRoom::find($id);
        $patientRoom->delete();

        return redirect()->route('patient_rooms.index')
            ->with('success', 'تم حذف الغرفة بنجاح');
    }
}

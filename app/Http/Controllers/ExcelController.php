<?php

namespace App\Http\Controllers;

use App\Models\Excels;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class ExcelController extends Controller
{
    public function insert(Request $request)
    {
        try {
            $validateData = $request->validate(
                [
                    'phone' => 'required',
                    'name' => 'required',
                    'message' => 'required',

                ]
            );

            $phone = str_replace(['+', ' ', '-'], ['00', '', ''], $validateData['phone']);


            $insert = new Excels;
            $insert->phone = $phone;
            $insert->name = $validateData['name'];
            $insert->message = $validateData['message'];
            $insert->status = 0;
            $insert->save();
            return response()->json(['success' => true, 'message' => 'Data Added Successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function getData()
    {
        try {
            $data  = Excels::all();
            return view('excel', compact('data'));
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function deleteData(string $id)
    {
        $delData = Excels::find($id);
        $delData->delete();
        return redirect()->back();
    }

    public function getForUpdate(string $id)
    {
        $dataUpdate = Excels::find($id);
        $data = Excels::all();

        return view('excel', compact('dataUpdate', 'data'));
    }
    public function update(Request $request, string $id)
    {
        try {
            $validateData = $request->validate(
                [
                    'phone' => 'required',
                    'name' => 'required',
                    'message' => 'required',
                ]
            );

            $phone = str_replace(['+', ' ', '-'], ['00', '', ''], $validateData['phone']);
            $update = Excels::find($id);
            $update->phone = $phone;
            $update->name = $validateData['name'];
            $update->message = $validateData['message'];
            $update->update();
            return response()->json(['success' => true, 'message' => 'Data Updated Successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function importExcel(Request $request)
    {
        try {
            $validateData = $request->validate([
                'excel_file' => 'required|mimes:xlsx,xls',
            ]);

            $file = $request->file('excel_file');
            $data = Excel::toArray([], $file);

            foreach (array_slice($data[0], 1) as $row) {
                // Validate each row
                $validator = Validator::make([
                    'phone' => $row[0],
                    'name' => $row[1],
                    'message' => $row[2],
                ], [
                    'phone' => 'required',
                    'name' => 'required',
                    'message' => 'required',
                ]);

                // Check if validation fails
                if ($validator->fails()) {
                    return response()->json(['errors' => $validator->errors()], 422);
                }

                // Create the entry after validation passes
                Excels::create([
                    'name' => $row[0], // Name at correct index
                    'phone' => str_replace(['+', ' ', '-'], ['00', '', ''], $row[1]),
                    'message' => $row[2],
                    'status' => 0,
                ]);
            }

            return response()->json("Data added successfully");
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 422);
        }
    }
    public function getMessagesData()
    {

        try {
            $data = Excels::all();
            return response()->json(['succcess' => true, 'message' => 'Data get successfully', 'data' => $data], 200);
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function updateMessage($id)
    {

        try {
            $message = Excels::find($id);
            if (!$message) {
                return response()->json(['success' => false, 'message' => "Message not found"], 422);
            }

            $message->status = 1;
            $message->update();
            return response()->json(['success' => true, 'message' => 'Status update successfully'], 200);
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'message' => $e->getMessage()], 422);
        }
    }
}

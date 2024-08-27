<?php

namespace App\Http\Controllers;

use App\Models\Excels;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

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

            $insert = new Excels;
            $insert->phone = $validateData['phone'];
            $insert->name = $validateData['name'];
            $insert->message = $validateData['message'];
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

            $update = Excels::find($id);
            $update->phone = $validateData['phone'];
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
                Excels::create([
                    'phone' => $row[1],
                    'name' => $row[0],
                    'message' => $row[2],
                ]);
            }

            // return redirect()->back();
            return response()->json("Data add successfully");
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
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
}

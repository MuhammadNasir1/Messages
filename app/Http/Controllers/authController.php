<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class authController extends Controller
{

    // update UserDetails`
    public function updateSettings(Request $request)
    {
        try {
            $user = Auth()->user();

            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not authenticated.'], 401);
            }


            $user->name = $request['name'];
            $user->about = $request['about'];
            $user->company = $request['company'];
            $user->job = $request['job'];
            $user->country = $request['country'];
            $user->address = $request['address'];
            $user->phone = $request['phone'];
            if ($request->has('email')) {
                $user->email = $request['email'];
            }


            if ($request->hasFile('upload_image')) {
                $image = $request->file('upload_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/user_images', $imageName); // Adjust storage path as needed
                $user->user_image = 'storage/user_images/' . $imageName;
            }

            // $user->update($request->except('upload_image'));
            $user->save();
            return response()->json(['success' => true, 'message' => 'Profile Updated!', 'updated_data' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    // get UserDetails
    public function getUserProfile()
    {
        try {
            // $user = Auth()->user();

            // if (!$user) {
            //     return response()->json(['success' => false, 'message' => 'User not authenticated.'], 401);
            // }

            // $userdata = [
            //     [
            //         'id' => $user->id,
            //         'name' => $user->name,
            //         'email' => $user->email,
            //         'role' => $user->role,
            //         'address' => $user->address,
            //         'user_image' => $user->user_image,
            //     ]
            // ];
            // $userdata  = $user->all();

            $user = Auth()->user();

            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not authenticated.'], 401);
            }

            $userdata = $user->toArray();
            return response()->json(['success' => true, 'message' => 'Data retrieved successfully!', 'userdata' => $userdata], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function register(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'role' => 'nullable',
            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'role' => "user",
                'password' => Hash::make($validatedData['password']),
            ]);

            $token = $user->createToken($request->email)->plainTextToken;
            session(['user_det' => [
                'user_id' => $user->id,
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'role' => "user",
            ]]);
            return response()->json([
                'token' => $token,
                'success' => true,
                'message' => 'Register successful',
                'user' => $user,
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
                'errors' => $e->getMessage(),
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function login(Request $request)
    {
        try {
            $validatedData = $request->validate([

                'email' => "required",
                'password' => "required|string|min:8",
            ]);

            $user = User::where('email',  $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {

                $token = $user->createToken($request->email)->plainTextToken;
                session(['user_det' => [
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'email' => $validatedData['email'],
                    'role' =>  $user->role,
                ]]);
                session(['user_image' => [
                    'user_image' => $user['user_image'],

                ]]);
                return  response()->json([
                    'token' => $token,
                    'message' => 'login  Successful',
                    'success' => true,
                    'user' => $user,
                ],  200);
            } else {

                return response()->json([
                    'message' => 'Wrong credentials',
                    'success' => false,
                    'status' => 'error',
                ], 401);
            }
        } catch (\Exception $eror) {

            return response()->json([
                'message' =>  'login failed',
                'success' => false,
                'error' => $eror->getMessage(),
            ], 500);
        }
    }

    public function logout()
    {
        try {
            auth()->user()->tokens()->delete();
            return response()->json([
                'message' =>  'logout successfully',
                'success' => true,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' =>  'logout faild',
                'success' => false,
                'eror' => $e->getMessage(),
            ],  500);
        }
    }

    public function weblogout(Request $request)
    {

        $request->session()->forget('user_det');
        $request->session()->regenerate();
        return redirect('/');
    }
    public function updateSet(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required',
                'name' => 'nullable',
                'phone' => 'nullable',
                'address' => 'nullable',
                'upload_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);

            $user = User::where('id', $validatedData['user_id'])->first();
            $user->name = $validatedData['name'];
            $user->phone = $validatedData['phone'];
            $user->address = $validatedData['address'];



            if ($request->hasFile('upload_image')) {
                $image = $request->file('upload_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/user_images', $imageName); // Adjust storage path as needed
                $user->user_image = 'storage/user_images/' . $imageName;
            }

            session(['user_image' => [
                'user_image' => $user['user_image'],

            ]]);
            $user->save();
            // return redirect('../setting');
            return response()->json(['success' => true, 'message' => 'Profile Updated!', 'updated_data' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }


    public function settingdata()
    {
        $user_id  = session('user_det')['user_id'];
        $user = User::where('id', $user_id)->first();

        return view('setting', ['user' => $user]);
    }



    public function changepasword(Request $request)
    {
        try {

            $user = Auth()->user();

            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not authenticated.'], 401);
            }

            $validatedData = $request->validate([
                "old_password" => "required",
                "new_password" => "required",
                "confirm_password" => "required"

            ]);

            $oldPassword = $request['old_password'];
            $userOldPass = $user->password;

            if (Hash::check($oldPassword, $userOldPass)) {
                if ($validatedData['new_password'] == $validatedData['confirm_password']) {
                    $user->password = Hash::make($validatedData['new_password']);
                    $user->save();
                } else {
                    return response()->json(['success' => false, 'message' => 'New password and confirm password do not match'], 401);
                }
                return response()->json(['success' => true, 'message' => 'Profile Updated!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Old password do not match'], 401);
            }

            return response()->json(['success' => true, 'message' => 'Password updated!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }


    // public function changepasword(Request $request)
    // {
    //     try {

    //         $user = User::where('id', $request['user_id'])->first();

    //         if (!$user) {
    //             return response()->json(['success' => false, 'message' => 'User not found.'], 401);
    //         }

    //         $validatedData = $request->validate([
    //             "old_password" => "required",
    //             "new_password" => "required",
    //             "confirm_password" => "required"

    //         ]);

    //         $oldPassword = $request['old_password'];
    //         $userOldPass = $user->password;

    //         if (Hash::check($oldPassword, $userOldPass)) {
    //             if ($validatedData['new_password'] == $validatedData['confirm_password']) {
    //                 $user->password = Hash::make($validatedData['new_password']);
    //                 $user->save();
    //             } else {
    //                 return response()->json(['success' => false, 'message' => 'New password and confirm password do not match'], 401);
    //             }
    //             return response()->json(['success' => true, 'message' => 'Profile Updated!']);
    //         } else {
    //             return response()->json(['success' => false, 'message' => 'Old password do not match'], 401);
    //         }

    //         return response()->json(['success' => true, 'message' => 'Password updated!'], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    //     }
    // }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Preset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PresetController extends Controller
{
   // Count all presets
   public function countPresets()
   {
      $countPresets = Preset::count();

      return view('admin/dashboard', compact('countPresets'));
   }

   // Read all presets
   public function allPresets()
   {
      // Fetch all presets from the database
      $presets = Preset::all();
      $count = 1;

      // Return the view with the page information, fetched presets and counter
      return view('admin/presets', compact('presets', 'count'));
   }

   // Find specific preset
   public function selectPreset($id)
   {
      $preset = Preset::find($id);

      if (!$preset) {
         return [
            'msg' => 'Preset not found',
            'status' => 404
         ];
         // abort(404);
      }

      return view('admin/preset', compact('preset'));
      // if ($preset) {
      //    return response()->json($preset);
      // } else {
      //    return response()->json([
      //       'success' => false,
      //       'message' => 'Post not found.'
      //    ], 404);
      // }
   }

   public function checkExistingPresetName(Request $request)
   {
      $response = [
         'success' => false,
         'message' => ''
      ];

      if ($request->has('title')) {
         $title = $request->input('title');

         // Check if the preset title exists in the database
         $exists = Preset::where('title', $title)->exists();

         if ($exists) {
            $response['success'] = true;
            $response['message'] = 'Preset name already exists';
         } else {
            $response['success'] = false;
            $response['message'] = 'Preset name available';
         }
      }

      return response()->json($response);
   }

   public function createPreset(Request $request)
   {

      // Define validation rules
      $validator = Validator::make($request->all(), [
         'preset_id' => 'required|string|max:255|unique:presets,preset_id',
         'title' => 'required|string|max:255|unique:presets,title',
         'description' => 'required|string',
         'price' => 'required|numeric',
         'display_image_before' => 'nullable|file|mimes:jpeg,png,jpg|max:5000',
         'display_image_after' => 'nullable|file|mimes:jpeg,png,jpg|max:5000',
         'image_path' => 'required|file|mimes:jpeg,png,jpg|max:5000',
      ]);

      if ($validator->fails()) {
         // return response()->json([
         //    'success' => false,
         //    'message' => implode('<br>', $validator->errors()->all())
         // ], 400); // Bad request
         return response()->json([
            'success' => false,
            'message' => implode('<br>', $validator->errors()->all())
         ]);
      }

      // Handle file upload
      $imageBeforePath = $request->file('display_image_before') ? $request->file('display_image_before')->store('images_before', 'public') : null;
      $imageAfterPath = $request->file('display_image_after') ? $request->file('display_image_after')->store('images_after', 'public') : null;
      $imagePath = $request->file('image_path') ? $request->file('image_path')->store('images', 'public') : null;

      // Create preset
      $presetCreated = Preset::create([
         'preset_id' => $request->preset_id,
         'title' => $request->title,
         'description' => $request->description,
         'price' => $request->price,
         'display_image_before' => $imageBeforePath,
         'display_image_after' => $imageAfterPath,
         'image_path' => $imagePath,
      ]);

      if ($presetCreated) {
         // Return success response
         return response()->json([
            'status' => 200,
            'success' => true,
            'message' => 'Preset created successfully.'
         ], 200);
      }

      // Return failure response
      return response()->json([
         'status' => 500,
         'success' => false,
         'message' => 'Failed to create preset.'
      ], 500);
   }

   // Find specific preset
   public function selectPresetToEdit($id)
   {
      $preset = Preset::find($id);

      if (!$preset) {
         return [
            'msg' => 'Preset not found',
            'status' => 404
         ];
         // abort(404);
      }

      // Return view with the preset data
      return view('admin.edit-preset', compact('preset'));
   }

   public function updatePreset(Request $request, $id)
   {
      // Find the preset by ID
      $preset = Preset::find($id);

      if (!$preset) {
         return response()->json([
            'status' => 404,
            'success' => false,
            'message' => 'Preset not found.'
         ], 404);
      }

      // Define validation rules
      $validator = Validator::make($request->all(), [
         'title' => 'required|string|max:255|unique:presets,title,' . $preset->id, // Ignore current preset title for uniqueness check
         'description' => 'required|string',
         'price' => 'required|numeric',
         'display_image_before' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5000',
         'display_image_after' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5000',
         'image_path' => 'nullable|file|mimes:jpeg,png,jpg|max:5000',
      ]);

      if ($validator->fails()) {
         return response()->json([
            'success' => false,
            'message' => implode('<br>', $validator->errors()->all())
         ]);
      }

      // Handle file uploads, update only if new files are uploaded
      $imageBeforePath = $request->file('display_image_before')
         ? $request->file('display_image_before')->store('images_before', 'public')
         : $preset->display_image_before;

      $imageAfterPath = $request->file('display_image_after')
         ? $request->file('display_image_after')->store('images_after', 'public')
         : $preset->display_image_after;

      $imagePath = $request->file('image_path')
         ? $request->file('image_path')->store('images', 'public')
         : $preset->image_path;

      // Update preset
      $preset->update([
         'title' => $request->title,
         'description' => $request->description,
         'price' => $request->price,
         'display_image_before' => $imageBeforePath,
         'display_image_after' => $imageAfterPath,
         'image_path' => $imagePath,
      ]);

      // Return success response
      return response()->json([
         'status' => 200,
         'success' => true,
         'message' => 'Preset updated successfully.'
      ], 200);
   }

   // Delete preset
   public function deletePreset($id)
   {
      // Find the preset by ID
      $preset = Preset::find($id);

      // Check if the preset exists
      if (!$preset) {
         return response()->json(['error' => 'Preset not found.'], 404);
      }

      // Delete the preset
      $preset->delete();

      // Return a success response
      return response()->json([
         'success' => true,
         'message' => 'Preset deleted successfully.'
      ]);
   }
}

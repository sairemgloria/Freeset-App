<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Preset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiPresetController extends Controller
{
   // Create preset
   public function store(Request $request)
   {
      $validated = $request->validate([
         'preset_id' => 'required|string|max:255|unique:presets,preset_id',
         'title' => 'required|string|max:255|unique:presets,title',
         'description' => 'required|string',
         'price' => 'required|numeric',
         'image_path' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
      ]);

      $imagePath = $request->file('image_path') ? $request->file('image_path')->store('images', 'public') : null;

      $preset = Preset::create(array_merge($validated, ['image_path' => $imagePath]));

      return response()->json([
         'success' => true,
         'message' => 'Preset created successfully.',
         'data' => $preset
      ], 201);
   }

   // Read all presets
   public function index()
   {
      $presets = Preset::all();
      return response()->json($presets);
   }

   // Fetch selected preset id
   public function show($id)
   {
      $preset = Preset::find($id);

      if ($preset) {
         return response()->json($preset);
      } else {
         return response()->json([
            'success' => false,
            'message' => 'Preset not found.'
         ], 404);
      }
   }

   // Update preset
   public function update(Request $request, $id)
   {
      $validated = $request->validate([
         'preset_id' => 'string|max:255',
         'title' => 'string|max:255',
         'description' => 'string',
         'price' => 'numeric',
         'image_path' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
      ]);

      $preset = Preset::find($id);

      if ($preset) {
         if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $validated['image_path'] = $imagePath;
         }

         $preset->update($validated);
         return response()->json([
            'success' => true,
            'message' => 'Preset updated successfully.',
            'data' => $preset
         ]);
      } else {
         return response()->json([
            'success' => false,
            'message' => 'Preset not found.'
         ], 404);
      }
   }

   // Delete preset
   public function destroy($id)
   {
      $preset = Preset::find($id);

      if ($preset) {
         $preset->delete();
         return response()->json([
            'success' => true,
            'message' => 'Preset deleted successfully.'
         ]);
      } else {
         return response()->json([
            'success' => false,
            'message' => 'Preset not found.'
         ], 404);
      }
   }
}

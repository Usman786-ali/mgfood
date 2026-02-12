<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class RamadanController extends Controller
{
    public function index()
    {
        // Fetch all settings and filter for ramadan group manually or just fetch all
        // Ideally we fetch by group, but SiteSetting::all() is fine for small tables
        $settings = SiteSetting::where('group', 'ramadan')->get(); // This will be a collection

        // Transform into a key-value pair for easy access in view if needed, 
        // or just pass the collection. The previous view used $settings['ramadan']->where(...)
        // Let's pass it in a similar structure to avoid confusion or just pass $settings

        return view('admin.ramadan.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $ramadanFields = [
            // Home Section
            'ramadan_home_heading',
            'ramadan_home_badge',
            'ramadan_home_countdown_date',
            'ramadan_home_food_title',
            'ramadan_home_food_desc',
            'ramadan_home_food_btn',
            'ramadan_home_decor_title',
            'ramadan_home_decor_desc',
            'ramadan_home_decor_btn',

            // Food Page
            'ramadan_food_hero_bg',
            'ramadan_food_hero_title',
            'ramadan_food_hero_desc',
            'ramadan_food_iftar_title',
            'ramadan_food_iftar_desc',
            'ramadan_food_iftar_image',
            'ramadan_food_iftar_menu',
            'ramadan_food_sehar_title',
            'ramadan_food_sehar_desc',
            'ramadan_food_sehar_image',
            'ramadan_food_sehar_menu',

            // Decor Page
            'ramadan_decor_hero_bg',
            'ramadan_decor_hero_title',
            'ramadan_decor_hero_desc',
            'ramadan_decor_section_title',
            'ramadan_decor_section_desc',
            'ramadan_decor_section_image',
            'ramadan_decor_menu'
        ];

        foreach ($request->all() as $key => $value) {
            if (in_array($key, ['_token', '_method']))
                continue;

            if (!in_array($key, $ramadanFields)) {
                continue;
            }

            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $path = $file->store('settings', 'public');
                SiteSetting::set($key, $path, 'image', 'ramadan');
            } else {
                SiteSetting::set($key, $value, 'text', 'ramadan');
            }
        }

        return redirect()->route('admin.ramadan.index')->with('success', 'Ramadan settings updated successfully!');
    }
}

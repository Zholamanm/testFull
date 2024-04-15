<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $query = Property::query();

        // Sorting
        switch ($request->input('sort_by', 'latest')) {
            case 'latest':
                $query->latest();
                break;
            case 'low-high':
                $query->orderBy('area', 'asc');
                break;
            case 'high-low':
                $query->orderBy('area', 'desc');
                break;
            case 'a-z':
                $query->orderBy('title', 'asc');
                break;
            case 'z-a':
                $query->orderBy('title', 'desc');
                break;
        }

        $minArea = $request->input('min_area');
        $maxArea = $request->input('max_area');

        if (is_numeric($minArea) && is_numeric($maxArea)) {
            $query->whereBetween('area', [(int)$minArea, (int)$maxArea]);
        }

        $rooms = [];
        for ($i = 1; $i <= 8; $i++) {
            if ($request->filled("rooms_{$i}")) {
                $rooms[] = $i; // assuming the value for "rooms_X" should match the number X
            }
        }

        if (!empty($rooms)) {
            $query->whereIn('rooms', $rooms);
        }


        if ($request->filled('photo_yes')) {
            $query->whereNotNull('image');
        } elseif ($request->filled('photo_no')) {
            $query->whereNull('image');
        }


        // Pagination
        $filterProperties = $query->paginate(10);

        // AJAX request handling
        if ($request->ajax()) {
            $view = view('properties', compact('filterProperties'))->render();
            return response()->json(['view' => $view]);
        }

        $properties = Property::all();

        return view('index', compact('properties', 'filterProperties'));
    }

}

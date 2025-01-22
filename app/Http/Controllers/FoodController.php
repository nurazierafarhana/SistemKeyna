<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
// Display a list of foods
public function index()
{
    $query = Food::query();  // Start with the base query

    if (request()->has('asc')) {
        if (request()->asc == 'true') {
            $query->orderBy('price')->orderBy('name');
        } elseif (request()->asc == 'false') {
            $query->orderBy('price', 'DESC')->orderBy('name');
        }
    }

    $foods = $query->paginate(12);  // Paginate the results after sorting, if any

    return view('dashboard', ['foods' => $foods]);
}

    // Filter foods by type
    public function filter($type)
    {
        $foods = Food::where('type', '=', $type);

        if (request()->has('asc')) {
            if (request()->asc == 'true') {
                $sorted = $foods->orderBy('price');
            }
            if (request()->asc == 'false') {
                $sorted = $foods->orderBy('price', 'DESC');
            }
        } else {
            $sorted = $foods;
        }

        return view('food.home', ['foods' => $sorted->paginate(12)]);
    }

    // Sort foods by price (asc/desc)
    public function sortByPrice($type)
    {
        if ($type) {
            $foods = Food::orderBy('price')->paginate(12);
        } else {
            $foods = Food::orderByDesc('price')->paginate(12);
        }

        return view('food.home', ['foods' => $foods]);
    }

    // Admin view of foods
    public function adminIndex()
    {
        $foods = Food::orderBy('id', 'desc')->paginate(10);
        return view('food.viewfood', ['foods' => $foods]);
    }

    // Show a specific food
    public function show($id)
    {
        $food = Food::findOrFail($id);
        return view('food.show', ['food' => $food]);
    }

    // Retrieve food for editing
    public function getForUpdate($id)
    {
        $food = Food::findOrFail($id);
        return view('food.updatefood', ['food' => $food]);
    }

    // Delete a food item
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return redirect('/foods/admin');
    }

    // Create a new food item
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:foods',
            'description' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'picture' => 'required|image|max:2048',
        ]);

        // Handle picture upload
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('pictures', 'public');
        }

        Food::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
            'picture' => $picturePath ?? null,
        ]);

        return redirect('/foods/admin');
    }

    // Update an existing food item
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('foods')->ignore($id),
            ],
            'description' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'picture' => 'nullable|image|max:2048',
        ]);

        $food = Food::findOrFail($id);

        // Handle picture upload
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('pictures', 'public');
            $food->picture = $picturePath;
        }

        $food->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
        ]);

        return redirect('/foods/admin');
    }
}

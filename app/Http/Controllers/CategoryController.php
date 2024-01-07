<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar sumber daya.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::latest()->paginate(5);


        return view('category.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Menampilkan formulir untuk membuat sumber daya baru.
     */
    public function create(): View
    {
        return view('category.create');
    }

    /**
     * Menyimpan sumber daya yang baru dibuat.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();

        Category::create($input);

        return redirect()->route('category.index')
            ->with('success', 'Kategori berhasil dibuat.');
    }

    /**
     * Menampilkan sumber daya tertentu.
     */
    public function show(Category $category): View
    {
        return view('category.show', compact('category'));
    }

    /**
     * Menampilkan formulir untuk mengedit sumber daya tertentu.
     */
    public function edit(Category $category): View
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Memperbarui sumber daya tertentu di dalam penyimpanan.
     */
    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->all();

        $category->update($input);

        return redirect()->route('category.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    /**
     * Menghapus sumber daya tertentu dari penyimpanan.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Kategori berhasil dihapus');
    }
}

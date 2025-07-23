<?php

namespace App\Http\Controllers;

use App\Models\Line;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\RelatedProduct;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $categories = Category::all();
        $lines = Line::all();
        $products = Product::with('category', 'line')->paginate(9);

        return view('products', compact('categories', 'lines', 'products'));
    }

    public function productoByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->paginate(9);
        $categories = Category::all();
        $lines = Line::all();

        return view('products', compact('products', 'categories', 'lines'));
    }

    public function productoByLine(Request $request)
    {
        $lineId = $request->input('line_id');

        // Si no se selecciona ninguna línea, mostrar todos los productos
        if (!$lineId) {
            return redirect()->route('products');
        }

        // Filtrar productos por línea
        return $this->filterProductsByLine($lineId);
    }
    private function filterProductsByLine($lineId)
    {
        $products = Product::where('line_id', $lineId)->paginate(9);
        $categories = Category::all();
        $lines = Line::all();

        return view('products', compact('products', 'categories', 'lines'));
    }

    public function searchName(Request $request)
    {
        $searchTerm = $request->input('search');
        $products = Product::where('name', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('description', 'LIKE', "%{$searchTerm}%")
                            ->orWhereHas('category', function ($query) use ($searchTerm) {
                                $query->where('name', 'LIKE', "%{$searchTerm}%");
                            })
                            ->orWhereHas('line', function ($query) use ($searchTerm) {
                                $query->where('name', 'LIKE', "%{$searchTerm}%");
                            })
                            ->paginate(9);
        $categories = Category::all();
        $lines = Line::all();

        return view('products', compact('products', 'categories', 'lines'));
    }

    public function productModal($productId)
    {
        try {
            $product = Product::with('category')->findOrFail($productId);

            return response()->json([
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'url_image' => asset('storage/' . $product->url_image),
                'category' => $product->category->name,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    public function productDetail($productId)
    {
        $product = Product::with('category', 'line', 'additionalInformationProducts')->findOrFail($productId);
        $relatedProducts = RelatedProduct::where('product_id', $productId)
                                  ->take(4)
                                  ->get();
        $categories = Category::all();
        $lines = Line::all();
        return view('show-product', compact('product', 'relatedProducts', 'categories', 'lines'));
    }


    public function tecnology()
    {
        return view('tecnology');
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($validated) {
            // $message->to('info@simbio.com.pe')
        $message->to('rosanyelismendoza@gmail.com')
                ->subject('Nuevo mensaje de contacto')
                ->text(
                    "Nombre: {$validated['name']}\nEmail: {$validated['email']}\nMensaje:\n{$validated['message']}"
                )
                ->replyTo($validated['email']);
        });

        return back()->with('success', '¡Mensaje enviado correctamente!');
    }

    public function privacyPolicy()
    {
        return view('terms');
    }
}

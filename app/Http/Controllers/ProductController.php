<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Products_img;
use App\Models\Products_type;
use App\Models\Products_type_big;
use App\Models\Products_type_medium;
use App\Models\Products_type_small;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //ไปหน้าแรก
    public function addProduct()
    {
        $product_type = Products_type::select('id', 'product_type_name')
            ->orderby('product_type_name', 'asc')
            ->get();


        return view('product-form-add', compact('product_type'));
    }


    public function ajaxAddProduct(request $request)
    {

        if (isset($_POST['function']) && $_POST['function'] == 'product_type') {

            $product_type_big = Products_type_big::select('id', 'product_type_big_name')
                ->where('product_type', $request->product_type)
                ->orderby('product_type_big_name', 'asc')
                ->get();

            $product_type_name = Products_type::select('id', 'product_type_name')
                ->where('id', $request->product_type)
                ->first();

            $check_type_big = Products_type_big::select('id', 'product_type_big_name')
                ->where('product_type', $request->product_type)
                ->count();

            $html_product_type_big = '<option value="" selected disabled > กรุณาเลือกหมวดหมู่ย่อย : ' . $product_type_name->product_type_name . '</option>';
            foreach ($product_type_big as $key => $val) {
                $html_product_type_big .= '<option value="' . $val->id . '">' . $val->product_type_big_name . '</option>';
            }

            return response()->json([
                'success' => 'แสดงรายละเอียดข้อมูลสำเร็จ',
                'product_type_big' => $html_product_type_big,
                'check_type_big' => $check_type_big,
            ]);
        } elseif (isset($_POST['function']) && $_POST['function'] == 'product_type_big') {

            $product_type_medium = Products_type_medium::select('id', 'product_type_medium_name')
                ->where('product_type_big', $request->product_type_big)
                ->get();

            $product_type_big_name = Products_type_big::select('id', 'product_type_big_name')
                ->where('id', $request->product_type_big)
                ->first();

            $check_type_medium = Products_type_medium::select('id', 'product_type_medium_name')
                ->where('product_type_big', $request->product_type_big)
                ->count();

            $html_product_type_medium = '<option value="" selected disabled > กรุณาเลือกหมวดหมู่ย่อย : ' . $product_type_big_name->product_type_big_name . '</option>';
            foreach ($product_type_medium as $key => $val) {
                $html_product_type_medium .= '<option value="' . $val->id . '">' . $val->product_type_medium_name . '</option>';
            }

            return response()->json([
                'success' => 'แสดงรายละเอียดข้อมูลสำเร็จ',
                'product_type_medium' => $html_product_type_medium,
                'check_type_medium' => $check_type_medium,
            ]);
        } elseif (isset($_POST['function']) && $_POST['function'] == 'product_type_medium') {

            $product_type_small = Products_type_small::select('id', 'product_type_small_name')
                ->where('product_type_medium', $request->product_type_medium)
                ->get();

            $product_type_medium_name = Products_type_medium::select('id', 'product_type_medium_name')
                ->where('id', $request->product_type_medium)
                ->first();

            $check_type_small = Products_type_small::select('id', 'product_type_small_name')
                ->where('product_type_medium', $request->product_type_medium)
                ->count();

            $html_product_type_small = '<option value="" selected disabled > กรุณาเลือกหมวดหมู่ย่อย : ' . $product_type_medium_name->product_type_medium_name . '</option>';
            foreach ($product_type_small as $key => $val) {
                $html_product_type_small .= '<option value="' . $val->id . '">' . $val->product_type_small_name . '</option>';
            }

            return response()->json([
                'success' => 'แสดงรายละเอียดข้อมูลสำเร็จ',
                'product_type_small' => $html_product_type_small,
                'check_type_small' => $check_type_small,
            ]);
        }
    }

    public function addProductDB(Request $request)
    {

        $request->validate(
            [
                'product_name' => 'required',
                'product_details' => 'required',
                'product_condition' => 'required',
                'product_type' => 'required',
            ],
            []
        );

        $product_id = date('dmy') . Str::random(8);

        if ($request->file('products_img')) {
            foreach ($request->file('products_img') as $key => $file) {
                $fileName =  date('dmy') . '-' . rand(1000, 9999) . '.' . $file->extension();
                $file->move(public_path('assets/images/upload/products_img'), $fileName);
                $files[]['name'] = $fileName;

                Products_img::insert([
                    'product_id' =>  $product_id,
                    'product_img_url' =>  $fileName,
                    'created_at' => date('Y-m-d h:i:s'),
                    'updated_at' => date('Y-m-d h:i:s'),
                ]);
            }
        }

        Products::insert([
            'product_name' =>  $request->product_name,
            'product_id' =>  $product_id,
            'product_details' =>  $request->product_details,
            'product_low_price' => $request->product_low_price,
            'product_condition' => $request->product_condition,
            'product_type' => $request->product_type,
            'product_type_big' => $request->product_type_big,
            'product_type_medium' => $request->product_type_medium,
            'product_type_small' => $request->product_type_small,
            'product_open_price' => $request->product_open_price,
            'product_close_price' => $request->product_close_price,
            'close_datetime' => $request->close_datetime,
            'user_id' =>  Auth::user()->id,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);

        return redirect()->route('myshop')->with('success', 'เพิ่มสินค้าสำเร็จ');
    }

    public function myShop()
    {

        $products = Products::selectRaw('products.updated_at,
        products.product_id,
        products.product_name,
        products.product_type,
        products_type.id,
        products_type.product_type_name,
        products.created_at,
        products.product_bid_price,
        products.product_open_price')
            ->join('products_type', 'products.product_type', '=', 'products_type.id')
            ->orderBy('products.updated_at', 'asc')
            ->get();

        return view('my-shop', compact('products'));
    }
}

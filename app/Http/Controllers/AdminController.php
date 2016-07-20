<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use App\Models\Payment;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Message;
use App\Models\Page;
use App\Models\Coupon;
use App\Models\Option;
use App\Models\OptionValue;
use Carbon\Carbon;
use \Illuminate\Database\Eloquent\Collection;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    //Admin Dashboard

    public function index()
    {
        $timestamps = Order::where('created_at', '>=', Carbon::today()->startOfMonth())->lists('created_at');
        foreach ($timestamps as $key => $timestamp) {
            $format = new Carbon($timestamp);
            $timestamps[$key] = $format->toFormattedDateString();
        }
        $totals = Order::where('created_at', '>=', Carbon::today()->startOfMonth())->lists('amount');
        foreach ($totals as $key => $value) {
            $totals[$key] = round($value, 0, PHP_ROUND_HALF_EVEN);
        }
        $total = 0;
        foreach ($totals as $val) {
            $total += $val;
        }
        return view('admin.dashboard', compact('timestamps', 'totals', 'total'));
    }

    //Products Area

    public function products(Request $request)
    {
        if ($request->sort && $request->orderby) {
            $products = Product::orderBy($request->sort, $request->orderby)->paginate(15);
        } else {
            $products = Product::orderBy('created_at', 'desc')->paginate(15);
        }
        return view('admin.products', compact('products'));
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.createProduct', compact('categories'));
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.editProduct', compact('product', 'categories'));
    }

    //Categories Area

    public function categories()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.categories', compact('categories'));
    }

    public function createCategory()
    {
        $sections = Section::all();
        return view('admin.createCategory', compact('sections'));
    }


    public function editCategory($id)
    {
        $category = Category::find($id);
        $sections = Section::all();
        return view('admin.editCategory', compact('category', 'sections'));
    }

    //Users Area

    public function users()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.users', compact('users'));
    }

    public function createUser()
    {
        return view('admin.createUser');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }

    //Sections Area

    public function sections(Request $request)
    {
        if ($request->sort && $request->orderby) {
            $sections = Section::orderBy($request->sort, $request->orderby)->paginate(15);
        } else {
            $sections = Section::orderBy('created_at', 'desc')->paginate(15);
        }
        return view('admin.sections', compact('sections'));
    }

    public function createSection()
    {
        return view('admin.createSection');
    }

    public function editSection($id)
    {
        $section = Section::find($id);
        return view('admin.editSection', compact('section'));
    }

    //Payment Area

    public function payment()
    {
        $payment = Payment::first();
        return view('admin.payment', compact('payment'));
    }

    public function paymentConfig(Request $request)
    {
        Payment::first()->update($request->all());
        return \Redirect()->back()->with([
            'flash_message' => 'Payment Information Successfully Saved'
        ]);
    }

    //Orders Area

    public function orders(Request $request)
    {
        if ($request->sort && $request->orderby) {
            $orders = Order::orderBy($request->sort, $request->orderby)->paginate(15);
        } else {
            $orders = Order::orderBy('created_at', 'desc')->paginate(15);
        }
        return view('admin.orders', compact('orders'));
    }

    public function showOrder($id)
    {
        $orderDetails = OrderProduct::where('order_id', $id)->get();
        $order = Order::find($id);
        $order->update(['opened' => 1]);
        $options = new Collection;
        foreach ($orderDetails as $detail) {
            if ($detail->options) {
                $values = explode(',',$detail->options);
                foreach ($values as $value) {
                    $options->add(OptionValue::find($value));
                }
            }
        }

        return view('admin.showOrder', compact('orderDetails', 'order','options'));
    }

    //Messages Area

    public function messages()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.messages', compact('messages'));
    }

    public function showMessage($id)
    {
        $message = Message::find($id);
        $message->update(['opened' => 1]);
        return view('admin.showMessage', compact('message'));
    }

    //Pages Builder Area

    public function pages()
    {
        $pages = Page::paginate(15);
        return view('admin.pages', compact('pages'));
    }

    public function createPage()
    {
        return view('admin.createPage');
    }

    public function editPage($page_name)
    {
        $page = Page::where('page_name', $page_name)->first();
        return view('admin.editPage', compact('page'));
    }

    //Coupons Area

    public function coupons()
    {
        $coupons = Coupon::paginate(15);
        return view('admin.coupons', compact('coupons'));
    }

    public function createCoupon()
    {
        return view('admin.createCoupon');
    }

    public function editCoupon($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.editCoupon', compact('coupon'));
    }

}

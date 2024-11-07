<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\coment;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $users = User::simplePaginate(4);
        $products = product::simplePaginate(4);
        $categories = category::simplePaginate(4);
        $comments = coment::simplePaginate(4);
        $datas = [
            'productsCount' => product::count(),
            'usersCount' => User::count(),
            'categoriesCount' => category::count(),
            'commentsCount' => coment::count()
        ];
        return view('content.admin.admin')->with(['header' => 'admin','datas' => $datas,'users' => $users,'products' => $products,'categories' => $categories,'comments' => $comments]);
    }

    public function userData(){
        $users = User::simplePaginate(4);
        $datas = [
            'usersCount' => User::count(),
        ];
        return view('content.admin.layouts.userDatas')->with(['header' => 'admin','datas' => $datas,'users' => $users]);
    }
    public function productData(){
        $products = product::simplePaginate(4);
        $datas = [
            'productsCount' => product::count(),
        ];
        return view('content.admin.layouts.productDatas')->with(['header' => 'admin','datas' => $datas,'products' => $products]);
    }

}

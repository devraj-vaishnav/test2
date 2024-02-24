<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Expense;
class JoinController extends Controller
{
    public function join() {
        // $expenses = Expense::join('categories', 'categories.id','expenses.category_id')
        //     ->select('expenses.*', 'categories.categoryname')
        //     ->get();
$expenses = Expense::with('category')->get();

            dd($expenses);
            return view('user',compact('users')); 
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function expense(){
        $categorys = Category::get();
        return view('expensecreate',['categorys'=>$categorys]);
    }

    public function expensestore(Request $request){
        $validated = $request->validate([
            'expense_name' => 'required',
            'category_id' => 'required'
        ]);
        $expense = new Expense ;
        $expense->expense_name = $validated['expense_name'];
        $expense->category_id = $validated['category_id'];
        $expense->save();
        return redirect('expanseindex');
    }
    
    public function expenseindex(){
        $expenses = Expense::get();
        return view('expenseindex',compact('expenses'));
    }

    public function expenseedit($id){
        $data =Expense::find($id);
        $categorys =Category::get();
        return view('expenseedit', compact('data','categorys'));

    }
    public function expenseupdate(Request $request, $id){
            // print_r($request->all());
        $validated = $request->validate([
            'category_id' => 'required',
            'expense_name' => 'required',
        ]);
        $data = Expense::find($id);
        $data->expense_name=$validated['expense_name'];
        $data->category_id=$validated['category_id'];
        
        $data->save();
        return redirect('expanseindex');

        //   return redirect('expenseindex');
        echo "update";

    }
    public function expensedelete($id){

        db::table('expenses')->delete($id);
        return redirect('expanseindex');
        
    }
}

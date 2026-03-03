<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\User,
    Http\Controllers\Controller
};
use App\Helpers\ImageHelper;
use App\Http\Requests\UserRequest;
use App\Models\Subscriber;
use App\Repositories\Front\UserRepository;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{

       /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\UserRepository $repository
     *
     */
    public function __construct(UserRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::latest();

        if ($request->start_date && $request->end_date) {
            $query->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        } elseif ($request->start_date) {
            $query->where('created_at', '>=', $request->start_date . ' 00:00:00');
        } elseif ($request->end_date) {
            $query->where('created_at', '<=', $request->end_date . ' 23:59:59');
        }

        return view('back.user.index',[
            'datas' => $query->get()
        ]);
    }

    /**
     * Export the resource to CSV.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function export(Request $request)
    {
        $query = User::latest();

        if ($request->start_date && $request->end_date) {
            $query->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        } elseif ($request->start_date) {
            $query->where('created_at', '>=', $request->start_date . ' 00:00:00');
        } elseif ($request->end_date) {
            $query->where('created_at', '<=', $request->end_date . ' 23:59:59');
        }

        $users = $query->get();

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=customers_" . date('Y-m-d_H-i-s') . ".csv",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = [
            'Name', 'Email', 'Phone', 'Total Reward Point', 'Discount', 'Total Purchase', 'Joined At'
        ];

        $callback = function() use($users, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($users as $user) {
                $row = [
                    $user->first_name . ' ' . $user->last_name,
                    $user->email,
                    $user->phone ? '="' . $user->phone . '"' : '',
                    $user->reward_point ?? 0,
                    ($user->membership->discount_percent ?? 0) . '%',
                    $user->membership->total_purchase ?? 0,
                    $user->created_at ? $user->created_at->format('Y-m-d H:i:s') : ''
                ];
                fputcsv($file, $row);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('back.user.show',compact('user'));
    }


    public function update(UserRequest $request)
    {
        $request->validate([
            'password' => 'min:6|max:16|nullable'
        ]);
        $this->repository->profileUpdate($request);
        return redirect()->back()->withSuccess(__('Profile Updated Successfully.'));
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        ImageHelper::handleDeletedImage($user,'photo','images');
        $user->delete();
        return redirect()->route('back.user.index')->withSuccess(__('Customer Deleted Successfully.'));
    }
}

<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Models\RewardPointSystem;
use App\Http\Controllers\Controller;

class RewardPointSystemController extends Controller
{
    /**
     * Summary of index
     * @return void
     */
    public function index()
    {
       $settings = RewardPointSystem::first();

       return view('back.rewardPoint.index', compact('settings'));
    }

    /**
     * Update the reward system
     */
    public function update(Request $request)
    {
         $data = $request->validate([
        'sold_amount_per_point'            => 'nullable|numeric|min:0',
        'min_sold_amount_to_get_point'     => 'nullable|numeric|min:0',
        'redeem_amount_per_unit_point'     => 'nullable|numeric|min:0',
        'min_order_total_to_redeem_points' => 'nullable|numeric|min:0',
        'max_redeem_point_per_order'       => 'nullable|numeric|min:0',
        'min_redeem_point'                 => 'nullable|numeric|min:0',
        ]);

        // get or create a single settings row
        $settings = RewardPointSystem::firstOrCreate([]);

        // only update values that were actually submitted
        $settings->fill(array_filter($data, fn($v) => !is_null($v)));

        $settings->save();
        return redirect()
            ->route('admin.reward.point.system.update')
            ->with('success', 'Reward point settings updated successfully.');
    }


}

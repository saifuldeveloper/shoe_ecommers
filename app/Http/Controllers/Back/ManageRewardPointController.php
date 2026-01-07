<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Models\ManageRewardPoint;
use App\Http\Controllers\Controller;

class ManageRewardPointController extends Controller
{
    public function index()
    {
        $settings = ManageRewardPoint::first();

        return view('back.rewardPoint.manage_reward', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'reward_point' => 'required|numeric|min:0',
            'status' => 'required',
        ]);

        ManageRewardPoint::updateOrCreate(
            ['id' => 1],
            [
                'reward_point' => $request->reward_point,
                'status' => $request->boolean('status'),
            ]
        );

        return redirect()
            ->route('admin.manage.reward.system')
            ->with('success', 'Reward settings updated successfully.');
    }
}

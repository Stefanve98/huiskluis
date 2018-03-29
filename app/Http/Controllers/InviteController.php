<?php

namespace App\Http\Controllers;

use App\Models\House\Invites;
use App\Models\User;
use App\Models\House\User as HouseUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InviteController extends Controller
{

    /**
     * @param Request $request
     * @param int $houseId
     * @return RedirectResponse
     */
    public function invite(Request $request, int $houseId)
    {
        $user = User::where('email', $request->get('email'))->first();

        if ($user) {
            $userExists = Invites::where('house_id', $houseId)->where('user_id', Auth::user()->id)->count();
            $houseUser = HouseUser::where('user_id', Auth::user()->id)->where('house_id', $houseId->count());

            if ($userExists > 0 || $houseUser > 0) {
                return back()->withErrors('Gebruiker is al geinvite of zit al aan het huis gekoppeld');
            }

            Invites::create([
                'house_id' => $houseId,
                'user_id' => $user->id,
                'invited_by_id' => Auth::user()->id,
                'email' => $request->get('email'),
            ]);
        } else {
            // #TODO invite user with mail
        }

        return redirect()->route('house.view', [$houseId])->withSuccess('Invite is verstuurd');
    }
}
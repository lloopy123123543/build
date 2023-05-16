<?php

namespace App\Http\Controllers;

use App\Models\Constrained;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Motherboard;
use App\Models\Cooling;
use App\Models\GPU;
use App\Models\Power;
use App\Models\Processor;
use App\Models\RAM;
use App\Models\Storage;


class ComplectController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

// MOTHERBOARD
    public function MotherBoardAdd(Request $request)
    {
        $bearer = $request->header("authorization");
        $token = explode(" ", $bearer)[1];
        $user = User::all()->where("token", $token)->first();

        if ($bearer != '') {
            if ($user != null) {
                if ($user->login == 'admin') {
                    $add = new Motherboard();
                    $add -> socket = $request -> input('socket');
                    $add -> name = $request -> input('name');
                    $add -> cost = $request -> input('cost');
                    $add -> save();
                    return response() -> json(['message' => 'created' ]);
                }else{return response()->json("forbidden for you");}
            }else{return response()->json("user not found");}
        }else{return response()->json("token is empty");}
    }
    public function MotherBoardEdit(Request $request, $id)
    {
        $bearer = $request->header("authorization");
        $token = explode(" ", $bearer)[1];
        $user = User::all()->where("token", $token)->first();

        if ($bearer != '') {
            if ($user != null) {
                if ($user->login == 'admin') {
                    $add = Motherboard::find($id)->first();
                    $add -> socket = $request -> input('socket');
                    $add -> name = $request -> input('name');
                    $add -> cost = $request -> input('cost');
                    $add -> save();
                    return response() -> json(['message' => 'edited' ]);
                }else{return response()->json("forbidden for you");}
            }else{return response()->json("user not found");}
        }else{return response()->json("token is empty");}
    }
    public function MotherBoardDelete(Request $request, $id)
    {
        $bearer = $request->header("authorization");
        $token = explode(" ", $bearer)[1];
        $user = User::all()->where("token", $token)->first();

        if ($bearer != '') {
            if ($user != null) {
                if ($user->login == 'admin') {
                    $add = Motherboard::find($id)->first();
                    $add -> delete();
                    return response() -> json(['message' => 'deleted' ]);
                }else{return response()->json("forbidden for you");}
            }else{return response()->json("user not found");}
        }else{return response()->json("token is empty");}
    }


// PROCESSOR
public function ProcessorAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new Processor();
                $add -> socket = $request -> input('socket');
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> company = $request -> input('company');
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function ProcessorEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Processor::find($id)->first();
                $add -> socket = $request -> input('socket');
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> company = $request -> input('company');
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function ProcessorDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Processor::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}


// GPU
public function GPUAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new GPU();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> company = $request -> input('company');
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function GPUEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = GPU::find($id)->first();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> company = $request -> input('company');
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function GPUDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = GPU::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}


// RAM
public function RAMAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new RAM();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> gb = $request -> input('gb');
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function RAMEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = RAM::find($id)->first();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> gb = $request -> input('gb');
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function RAMDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = RAM::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}


// POWER
public function PowerAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new Power();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> ww = $request -> input('ww');
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function PowerEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Power::find($id)->first();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> ww = $request -> input('ww');
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function PowerDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Power::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}

// COOLING
public function CoolingAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new Cooling();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function CoolingEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Cooling::find($id)->first();
                $add -> name = $request -> input('name');
                $add -> cost = $request -> input('cost');
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function CoolingDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Cooling::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}

// STORAGE
public function StorageAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new Storage();
                $add -> name = $request -> input('name');
                $add -> gb = $request -> input('gb');
                $add -> cost = $request -> input('cost');
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function StorageEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Storage::find($id)->first();
                $add -> name = $request -> input('name');
                $add -> gb = $request -> input('gb');
                $add -> cost = $request -> input('cost');
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function StorageDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Storage::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}

// CONSTRAINED
public function ConstrainedAdd(Request $request)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = new Constrained();
                $add -> motherboard = $request -> input('motherboard');
                $add -> processor = $request -> input('processor');
                $add -> GPU = $request -> input('GPU');
                $add -> RAM = $request -> input('RAM');
                $add -> power = $request -> input('power');
                $add -> cooling = $request -> input('cooling');
                $add -> storage = $request -> input('storage');
                $add -> user_id = $user->id;
                $add -> save();
                return response() -> json(['message' => 'created' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function ConstrainedEdit(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Constrained::find($id)->first();
                $add -> motherboard = $request -> input('motherboard');
                $add -> processor = $request -> input('processor');
                $add -> GPU = $request -> input('GPU');
                $add -> RAM = $request -> input('RAM');
                $add -> power = $request -> input('power');
                $add -> cooling = $request -> input('cooling');
                $add -> storage = $request -> input('storage');
                $add -> user_id = $user->id;
                $add -> save();
                return response() -> json(['message' => 'edited' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
public function ConstrainedDelete(Request $request, $id)
{
    $bearer = $request->header("authorization");
    $token = explode(" ", $bearer)[1];
    $user = User::all()->where("token", $token)->first();

    if ($bearer != '') {
        if ($user != null) {
            if ($user->login == 'admin') {
                $add = Constrained::find($id)->first();
                $add -> delete();
                return response() -> json(['message' => 'deleted' ]);
            }else{return response()->json("forbidden for you");}
        }else{return response()->json("user not found");}
    }else{return response()->json("token is empty");}
}
}


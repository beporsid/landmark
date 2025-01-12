<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\CaseModel;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه',
            'title',
            'price',
            'contract',
            'type',
            'operation'];
        $query = CaseModel::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.cases.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );

//
//        $query=Post::get();
//        return view('admin.posts.index',['items'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $inputs = $request->only(
            'title',
            'price',
            'user_id',
            'address',
            'room_number',
            'parking_number',
            'bath_number',
            'area',
            'deposit',
            'rent',
            'type',
            'contract',
            'is_vip',
            'description',
            'status',
            'avatar_path',
            'video_path',
            'details'
        );

        if ($request->has('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));


        $result = CaseModel::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query = CaseModel::find($id);
        return view('admin.cases.show', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query = CaseModel::where('id', $id)->first();
        return view('admin.cases.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $query = $request->only(
            'title',
            'price',
            'user_id',
            'address',
            'room_number',
            'parking_number',
            'bath_number',
            'area',
            'deposit',
            'rent',
            'type',
            'contract',
            'is_vip',
            'description',
            'status',
            'avatar_path',
            'video_path',
            'details'
        );
        CaseModel::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CaseModel::query()->where('id', $id)->delete();
        return back();
    }

    public function uploadMedia($file)
    {
        $path='\images';
        $fileName=uniqid().'-'.$file->getClientOriginalName();
        $destination=public_path().'/'.$path;
        $file->move($destination,$fileName);

        return $path.'/'.$fileName;
    }
}

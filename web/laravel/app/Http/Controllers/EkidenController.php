<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekiden;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EkidenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 初期表示用データ取得
        $ekidens = Ekiden::get();

        return view('ekiden_master', ['ekidens' => $ekidens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 駅伝 新規登録
        return view('ekiden_create');
    }

    /**
     * 駅伝新規登録確認
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createConfirm(Request $request)
    {
        // validation
        $validated = $request->validate([
            'ekiden_name' => 'required|max:100',
        ]);
        // 20211008 同じ駅伝名がすでに存在するかチェックしたほうがいいかも

        // 駅伝 新規登録
        return view('ekiden_create_confirm', ['ekiden_name' => $request->ekiden_name]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation追加する

        // EkidenModel
        $ekidenObj = new Ekiden();
        // Modelに渡すデータ
        $insertEkiden = [
            'ekiden_name' => $request->ekiden_name,
        ];

        // 新規登録
        try {
            // 同じ駅伝名が存在した場合、登録処理は実行しない
            $selectEkiden = $ekidenObj->where('ekiden_name', $insertEkiden['ekiden_name'])->get();
            Log::debug($selectEkiden);
            if (!empty($selectEkiden)) {
                return redirect()->route('ekidenCreate');
            }
            DB::transaction(function () use ($ekidenObj, $insertEkiden) {
                // ekiden登録
                $ekidenObj->saveEkiden($insertEkiden);
            });
        } catch (ModelNotFoundException $e) {
            Log::debug($e);
            throw $e;
        } catch (\Throwable $e) {
            Log::debug($e);
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

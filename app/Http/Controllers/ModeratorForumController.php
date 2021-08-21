<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModeratorForumCollection;
use App\Models\ModeratorForum;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Moderator Forum
 * @authenticated
 */
class ModeratorForumController extends Controller
{
    /**
     * Assign Moderator Forum
     * untuk assign moderator forum
     * @urlParam id integer required
     * @bodyParam nama_kategori string required
     * @responseFile storage/responses/forum.moderator-assign.json
     */
    public function assignModerator(Request $req, $id)
    {
        if ($req->has('nama_kategori'))
            $namaKategori = $req->nama_kategori;

        $cek = ModeratorForum::where(['user_id' => $id, 'nama_kategori' => $namaKategori]);
        if (!is_null($cek)) {
            $insert = new ModeratorForum;
            $insert->user_id = $id;
            $insert->nama_kategori = $namaKategori;
            $insert->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil assign moderator',
                'data' => $insert
            ]);
        }
    }
    /**
     * Unassign Moderator Forum
     * untuk assign moderator forum
     * @urlParam id integer required
     * @bodyParam nama_kategori string required
     * @responseFile storage/responses/forum.moderator-unassign.json
     */
    public function unassignModerator(Request $req, $id)
    {
        if ($req->has('nama_kategori'))
            $namaKategori = $req->nama_kategori;

        $cek = ModeratorForum::where(['user_id' => $id, 'nama_kategori' => $namaKategori])->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil unassign moderator',
            'data' => $cek
        ]);
    }

    /**
     * List moderator per kategori
     * @queryParam include string get data relasi (dataUser). 
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     */
    public function listModerator($kategori)
    {
        $kategoriModerator = $this->explodeUrl($kategori);
        $moderator = QueryBuilder::for(ModeratorForum::where('nama_kategori',$kategoriModerator))
            ->allowedIncludes(['dataUser'])
            ->allowedSorts(['id','user_id','nama_kategori'])
            ->allowedFilters(['id','user_id','nama_kategori'])
            ->jsonPaginate()->appends(Request()->input());

        return new ModeratorForumCollection($moderator);
    }

    public function explodeUrl($string)
    {
        $explode = explode('%20',$string);
        return $implode = implode(' ',$explode);
    }
}

<?php 
namespace App\Spatie;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class PsikologFilter implements Filter
{
    protected $type;
    protected $value;

    public function __construct($type = null,$value = null)
    {
        $this->type = $type;    
        $this->value = $value;    
    }

    public function __invoke(Builder $query, $value, string $property)
    {
        if (!is_array( $value )) {
           $value = [ $value ];
        }

       foreach ($value  as  $filter) {
            if($this->type=='jenis_kelamin'){
                if($this->value=='laki-laki'){
                    $query->where('jenis_kelamin','=','Laki-laki')
                    ->where('status','=',2)
                    ->where(function($query)use($filter){
                        return $query->orWhere('nama_lengkap', 'like', '%' . $filter . '%')
                            ->orWhere('no_hp', 'like', '%' . $filter . '%')
                            ->orWhere('nomor_ijazah', 'like', '%' . $filter . '%')
                            ->orWhere('tempat_lahir', 'like', '%' . $filter . '%')
                            ;
                    });
                }else{
                    $query->where('jenis_kelamin','=','Perempuan')
                    ->where('status','=',2)
                    ->where(function($query)use($filter){
                        return $query->orWhere('nama_lengkap', 'like', '%' . $filter . '%')
                            ->orWhere('no_hp', 'like', '%' . $filter . '%')
                            ->orWhere('nomor_ijazah', 'like', '%' . $filter . '%')
                            ->orWhere('tempat_lahir', 'like', '%' . $filter . '%')
                            ;
                    });
                }
            }elseif($this->type=='bidang'){
                $query->where('bidang_id','=',$this->value)
                ->where('status','=',2)
                ->where(function($query)use($filter){
                    return $query->orWhere('nama_lengkap', 'like', '%' . $filter . '%')
                        ->orWhere('no_hp', 'like', '%' . $filter . '%')
                        ->orWhere('nomor_ijazah', 'like', '%' . $filter . '%')
                        ->orWhere('tempat_lahir', 'like', '%' . $filter . '%')
                        ;
                });
            }elseif($this->type=='provinsi'){
                $query->where('kota.provinsi_id','=',$this->value)
                ->where('status','=',2)
                ->where(function($query)use($filter){
                    return $query->orWhere('nama_lengkap', 'like', '%' . $filter . '%')
                        ->orWhere('no_hp', 'like', '%' . $filter . '%')
                        ->orWhere('nomor_ijazah', 'like', '%' . $filter . '%')
                        ->orWhere('tempat_lahir', 'like', '%' . $filter . '%')
                        ;
                });
            }else{
                $query->where('nama_lengkap', 'like', '%' . $filter . '%')
                ->where('status','=',2)
                ->orWhere('no_hp', 'like', '%' . $filter . '%')
                ->orWhere('nomor_ijazah', 'like', '%' . $filter . '%')
                ->orWhere('tempat_lahir', 'like', '%' . $filter . '%');
            }
       }

       return  $query ;
    }
}
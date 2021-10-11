<?php

namespace Modules\Sekolah\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class SekolahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->namasekolah,
            'npsn' => $this->npsn,
            'bentuk' => $this->bentuk,
            'alamat' => $this->alamat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

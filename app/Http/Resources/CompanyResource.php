<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
use App\Http\Resources\InvestmentResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id'=>$this->id,
           'name'=>$this->name,
           'legal'=>$this->name.' Inc',
           'url'=>$this->url,
           'location'=>$this->location,
           'type'=>$this->type,
           'reg_no'=>$this->rg_no,
           'about'=>Str::of($this->about)->limit(75),
           'created_at'=>$this->created_at,
           'investments'=>InvestmentResource::collection($this->investments)
        ];
    }
}

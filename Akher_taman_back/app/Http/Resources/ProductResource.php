<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            "id" => $this->id,
            "seller_id"=>$this->seller_id,
            "title"=>$this->title,
            "description"=>$this->description,
            "starting_price"=> $this->starting_price,
            "current_price"=> $this->current_price,
            "bid_end_time"=>$this->bid_end_time,
            "status"=>$this->status,
           "category" => $this->category->name,
           "condition"=>$this->condition,
            "location" =>$this->location,
        ];  


        return $data;
    }
}

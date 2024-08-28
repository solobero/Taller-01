<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //si no uso datos randoms (seeders), no es necesaria esta linea
    // use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['description'] - string - contains the product description
     * $this->attributes['image'] - string - contains the product image
     * $this->attributes['price'] - int - contains the product price
     * $this->attributes['warranty'] - int - contains the product warranty period
    */

    protected $fillable = ['name', 'description', 'image', 'price', 'warranty'];

    //esto no va
    // public function getId(): int
    // {
    //     return $this->attributes['id'];
    // }

    // public function setId($id): void
    // {
    //     $this->attributes['id'] = $id;
    // }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription($description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getImage(): string
    {
        return $this->attributes['image'];
    }

    public function setImage($image): void
    {
        $this->attributes['image'] = $image;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice($price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getWarranty(): int
    {
        return $this->attributes['warranty'];
    }

    public function setWarranty($warranty): void
    {
        $this->attributes['warranty'] = $warranty;
    }
}
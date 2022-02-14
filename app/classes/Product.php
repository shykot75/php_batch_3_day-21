<?php


namespace App\classes;


class Product
{



    protected $products = [];

    protected $id;

    protected $result = [];


    public function __construct($post=null)
    {
        if(isset($post['search']) ){
            $this->id = $post['search'];
        }
    }


    public function getProduct(){
        return [
            0=> [
                'id'            => '1',
                'title'         => 'Hoodie',
                'description'   => 'This is a very good Hoodie. You can buy it',
                'price'         =>  '2450',
                'category'      => 'Fashion',
                'image'         => 'Hoodie.jpg',
                'brand'         => 'Old Navy'
            ],
            1=> [
                'id'            => '2',
                'title'         => 'T-Shirt',
                'description'   => 'This is a very good T-Shirt. You can buy it',
                'price'         =>  '330',
                'category'      => 'Fashion',
                'image'         => 'T-Shirt.jpg',
                'brand'         => 'Polo'
            ],
            2=> [
                'id'            => '3',
                'title'         => 'USB Pen Drive',
                'description'   => 'This is a very good Pen Drive. You can buy it',
                'price'         =>  '600',
                'category'      => 'Electronic',
                'image'         => 'USB.jpg',
                'brand'         => 'Adata'
            ],
            3=> [
                'id'            => '4',
                'title'         => 'Boat Headphone',
                'description'   => 'This is a very good Pen Headphone. You can buy it',
                'price'         =>  '999',
                'category'      => 'Electronic',
                'image'         => 'headphone.jfif',
                'brand'         => 'Boat'
            ],
            4=> [
                'id'            => '5',
                'title'         => 'Wrist Watch',
                'description'   => 'This is a very good Watch. You can buy it',
                'price'         =>  '3100',
                'category'      => 'Fashion',
                'image'         => 'watch.jfif',
                'brand'         => 'Rolex'
            ],
            5=> [
                'id'            => '6',
                'title'         => 'Tp-link Router',
                'description'   => 'This is a very good Router. You can buy it',
                'price'         =>  '1800',
                'category'      => 'Electronic',
                'image'         => 'router.jpg',
                'brand'         => 'Tp Link'
            ]
        ];
    }

    public function getProductsById($id){
        $this->products = $this->getProduct();
        foreach($this->products as $allProduct){
            if($allProduct['id'] == $id){
                return $allProduct;
            }
        }
    }


    public function getStudentBySearchText(){
//        echo "OK";
//        echo $this->text;
        $this->students = $this->getAllStudent();
        foreach($this->students as $student){
            if($this->text == $student['name']){
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }


    public function searchID(){
        $this->products = $this->getProduct();
        foreach($this->products as $allProduct){
            if($this->id == $allProduct['id']){
                $this->result = $allProduct;
                break;
            }
        }
        return $this->result;
    }





}
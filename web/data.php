<?php
declare(strict_types=1);
  function catalogGetCategories(){
//      return [
//          1 => [
//              'category_id' =>1,
//              'name' => 'Category 1',
//              'url' => 'category 1'
//          ]
//      ];
      return [
          1 => [
              'category_id' => 1,
              'name'        => 'Apple',
              'url'         => 'apple',
              'products'    => [1, 2, 3]
          ],
          2 => [
              'category_id' => 2,
              'name'        => 'Samsung',
              'url'         => 'samsung',
              'products'    => [3, 4, 5]
          ],
          3 => [
              'category_id' => 3,
              'name'        => 'Xiaomi',
              'url'         => 'xiaomi',
              'products'    => [2, 4, 6]
          ]
      ];
  }
function catalogGetProducts(){
    return [
        1 => [
            'product_id' => 1,
            'name' => 'Product 1',
            'description' => 'Lorem ipsum',
            'url' => 'product-1',
            'price' => 33.99
        ],
        2 => [
            'product_id' => 1,
         'name' => 'Product 2',
         'description' => 'Lorem ipsum',
         'url' => 'product-2',
         'price' => 44.99
     ],

   ];
}

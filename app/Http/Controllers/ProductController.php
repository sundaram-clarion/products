<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get()
	{
		return response()->json([
			[
				'id' => 1,
				'name' => 'Lenovo',
				'description' => 'Smaller footprints and epic battery life make X Series the business traveler’s trusted companion. Their craftsmanship, versatility and robust security features ensure theyre every professionals preference.',
				'category' => 'Laptops',
				'size' => '13',
				'processor' => 'Intel core i3 5th Generation'
			],
			[
				'id' => 2,
				'name' => 'Dell',
				'description' => 'Elegance with an edge. A 38.1 cm (15) laptop crafted for compact elegance. The lightweight design features an InfinityEdge display and diamond-cut edges for sharper style.',
				'category' => 'Laptops',
				'size' => '15',
				'processor' => 'Intel core i7 7th Generation'
			],
			[
				'id' => 3,
				'name' => 'Sony',
				'description' => 'The Sony Vaio E Series SVE1513CYNB Laptop has powered with Intel Core i3 (2nd generation) 2.2 GHz processor and has integrated Linux (32 bit) OS. It has a 320 GB HDD, 2GB DDR3 RAM and integrated DVD drive.',
				'category' => 'Laptops',
				'size' => '15',
				'processor' => 'Intel core i7 7th Generation'
			]
		]);
	}
}

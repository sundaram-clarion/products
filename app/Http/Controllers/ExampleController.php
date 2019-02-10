<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
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

    public function getDoc()
	{
		return '{
			"swaggerVersion": "1.2",
			"apis": [{
				"path": "\/api\/product",
				"description": "Returning product details."
			}],
			"apiVersion": "0.1",
			"info": {
				"title": "Product details",
				"description": "This service handles product details"
			},
			"authorizations": []
		}';
	}
}

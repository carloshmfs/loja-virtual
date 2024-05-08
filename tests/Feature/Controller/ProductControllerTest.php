<?php

namespace Tests\Feature\Controller;

use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function test_successful_product_pagination_request(): void
    {
        $response = $this->get(route('product.index'));

        dd($response);
    }
}

<?php
require_once __DIR__ . '/../models/OrderModel.php';

class OrderApiController {
    private $model;

    public function __construct() {
        $this->model = new OrderModel();
    }

    public function create($request, $response) {
        $data = $request->body;
        if (!$data || !isset($data->dish_id) || !isset($data->customer_name)) {
            return $response->json(['error' => 'Invalid payload'], 400);
        }

        $order = $this->model->create(
            $data->dish_id,
            $data->customer_name,
            $data->notes ?? ''
        );

        $response->json(['message' => 'Order created', 'order' => $order], 201);
    }
}

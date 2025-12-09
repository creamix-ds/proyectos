<?php
require_once __DIR__ . '/../models/DishModel.php';

class DishApiController {
    private $model;

    public function __construct() {
        $this->model = new DishModel();
    }

    public function getAll($request, $response) {
        $response->json($this->model->getAll());
    }

    public function get($request, $response) {
        $id = $request->params->id ?? null;
        if (!$id) {
            return $response->json(['error' => 'ID required'], 400);
        }
        $dish = $this->model->getById($id);
        if ($dish) {
            $response->json($dish);
        } else {
            $response->json(['error' => 'Dish not found'], 404);
        }
    }
}

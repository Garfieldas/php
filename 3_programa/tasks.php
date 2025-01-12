<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $task_name = isset($input['task_name']) ? trim($input['task_name']) : '';
    $task_description = isset($input['task_description']) ? trim($input['task_description']) : '';

    if (!empty($task_name)) {
        $new_task = [
            'name' => $task_name,
            'description' => $task_description,
            'created_at' => date('Y-m-d'),
        ];
        $_SESSION['tasks'][] = $new_task;

        echo json_encode($new_task);
    } else {
        http_response_code(400);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($_SESSION['tasks']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $input = json_decode(file_get_contents('php://input'), true);
    $task_index = isset($input['index']) ? (int)$input['index'] : -1;

    if ($task_index >= 0 && $task_index < count($_SESSION['tasks'])) {
        array_splice($_SESSION['tasks'], $task_index, 1);
        echo json_encode(['success' => true]);
    } else {
        http_response_code(400);
    }
    exit;
}

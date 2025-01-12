<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Užduočių valdymo sistema</title>
  <link rel="stylesheet" href="./main.css">
</head>
<body>
  <div class="todo-app">
    <h1>Užduočių forma</h1>
    <form id="taskForm" class="todo-input">
      <input type="text" id="taskName" placeholder="pridėti užduotį..." required>
      <textarea id="taskDescription" placeholder="pridėti aprašymą..." rows="3" required></textarea>
      <button type="submit">Pridėti</button>
    </form>
    <ul id="taskList" class="todo-list"></ul>
  </div>
  <script src="./main.js">
  </script>
</body>
</html>

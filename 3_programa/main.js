const taskForm = document.getElementById('taskForm');
const taskList = document.getElementById('taskList');


async function loadTasks() {
  try {
    const response = await fetch('tasks.php', { method: 'GET' });
    if (!response.ok) throw new Error('Uzduotis neuzkrautos');
    const tasks = await response.json();
    taskList.innerHTML = '';
    tasks.forEach((task, index) => addTaskToDOM(task, index));
  } catch (error) {
    console.error('Error:', error);
  }
}


function addTaskToDOM(task, index) {
  const listItem = document.createElement('li');
  listItem.className = 'todo-item';
  listItem.dataset.index = index; // Uzduoties indexas
  listItem.innerHTML = `
    <span>${task.name}</span>
    <span class="description">${task.description}</span>
    <span>Sukurta: ${task.created_at}</span>
    <button onclick="deleteTask(${index})">Ištrinti</button>
  `;
  taskList.appendChild(listItem);
}


taskForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const taskName = document.getElementById('taskName').value.trim();
  const taskDescription = document.getElementById('taskDescription').value.trim();

  try {
    const response = await fetch('tasks.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ task_name: taskName, task_description: taskDescription }),
    });

    if (!response.ok) throw new Error('Failed to add task');
    const newTask = await response.json();


    addTaskToDOM(newTask, taskList.children.length);


    taskForm.reset();
  } catch (error) {
    console.error('Error:', error);
  }
});

// Istrinti uzduoti
async function deleteTask(index) {
  try {
    const response = await fetch('tasks.php', {
      method: 'DELETE',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ index }),
    });

    if (!response.ok) throw new Error('Uzduotis neistrinta');
    const result = await response.json();
    if (result.success) {

      loadTasks();
    }
  } catch (error) {
    console.error('Error:', error);
  }
}

// Uzkrauti is sesijos kaskart
window.onload = loadTasks;
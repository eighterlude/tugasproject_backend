function addTodo() {
  const input = document.getElementById("todoText");
  const text = input.value.trim();

  if (text === "") return;

  const li = document.createElement("li");

  li.innerHTML = `
        <span class="todo-text">${text}</span>
        <div class="todo-actions">
            <button class="edit" onclick="editTodo(this)">Edit</button>
            <button class="delete" onclick="deleteTodo(this)">Hapus</button>
        </div>
    `;

  document.getElementById("todoList").appendChild(li);
  input.value = "";
}

function deleteTodo(button) {
  button.closest("li").remove();
}

function editTodo(button) {
  const li = button.closest("li");
  const textSpan = li.querySelector(".todo-text");

  const newText = prompt("Edit tugas:", textSpan.textContent);
  if (newText !== null && newText.trim() !== "") {
    textSpan.textContent = newText;
  }
}

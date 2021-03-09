const todoInput = document.querySelector("#inputComment");
const buttonInput = document.querySelector(".btn-input");
const todoList = document.querySelector(".todo-list");
const listTodo = [];

// event listener
buttonInput.addEventListener("click", addTodoList);

// function
function addTodoList(event) {
  event.preventDefault();
  const todo = {
    id: listTodo.length + 1,
    name: todoInput.value,
    complete: false,
  };
  listTodo.push(todo);

  if (todoInput.value != "") {
    displayList();
    clearInput();
    removeTodo();
    addAnimation();
  } else {
    alert("please enter your todo...");
  }
}
function displayList() {
  let li = "";
  listTodo.forEach((todo, index) => {
    li += `
     
    <li class="todo shadow mt-3">
    
        <span class="col-1">${index + 1}</span>
        
        <div class="shadow-lg ml-auto m-0">

          <div class="form-group border-bottom col-12 text-right" style="width: 100%;">
            <p class="userName  border-bottom py-2" id="userName">امیرحسین</p>
                                <p class="m-0 col-9 text-center">${
                                  todo.name
                                }</p> 
            </div>
          </div>
        <div class="m-0 col-2">           
            <button class="trash" onClick="removeTodo()">
                <i class="fas fa-trash"></i>
            </button>
        </div>
        </li>`;
  });
  todoList.innerHTML = li;
}

function clearInput() {
  todoInput.value = "";
}

function removeTodo() {
  const deleteBtn = document.querySelectorAll(".todo-list li i");
  deleteBtn.forEach((item) => {
    item.addEventListener("click", deleteItem);
  });
}

function deleteItem(item) {
  const id =
    item.target.parentElement.parentElement.previousElementSibling
      .previousElementSibling.textContent;
  const numId = parseInt(id) - 1;
  listTodo.splice(numId, 1);
  item.target.parentElement.remove();
  displayList();
}

function addAnimation() {
  const todo = document.querySelector(".todo");
  todo.classList.add("fade-in");
}

{
  /* <input  type="checkbox" name="complete" id="complete" ${todo.complete ? "checked":""}/> */
}

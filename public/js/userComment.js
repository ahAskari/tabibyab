/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/userComment.js":
/*!*************************************!*\
  !*** ./resources/js/userComment.js ***!
  \*************************************/
/***/ (() => {

eval("var todoInput = document.querySelector(\"#inputComment\");\nvar buttonInput = document.querySelector(\".btn-input\");\nvar todoList = document.querySelector(\".todo-list\");\nvar listTodo = []; // event listener\n\nbuttonInput.addEventListener(\"click\", addTodoList); // function\n\nfunction addTodoList(event) {\n  event.preventDefault();\n  var todo = {\n    id: listTodo.length + 1,\n    name: todoInput.value,\n    complete: false\n  };\n  listTodo.push(todo);\n\n  if (todoInput.value != \"\") {\n    displayList();\n    clearInput();\n    removeTodo();\n    addAnimation();\n  } else {\n    alert(\"please enter your todo...\");\n  }\n}\n\nfunction displayList() {\n  var li = \"\";\n  listTodo.forEach(function (todo, index) {\n    li += \"\\n     \\n    <li class=\\\"todo shadow mt-3\\\">\\n    \\n        <span class=\\\"col-1\\\">\".concat(index + 1, \"</span>\\n        \\n        <div class=\\\"shadow-lg ml-auto m-0\\\">\\n\\n          <div class=\\\"form-group border-bottom col-12 text-right\\\" style=\\\"width: 100%;\\\">\\n            <p class=\\\"userName  border-bottom py-2\\\" id=\\\"userName\\\">\\u0627\\u0645\\u06CC\\u0631\\u062D\\u0633\\u06CC\\u0646</p>\\n                                <p class=\\\"m-0 col-9 text-center\\\">\").concat(todo.name, \"</p> \\n            </div>\\n          </div>\\n        <div class=\\\"m-0 col-2\\\">           \\n            <button class=\\\"trash\\\" onClick=\\\"removeTodo()\\\">\\n                <i class=\\\"fas fa-trash\\\"></i>\\n            </button>\\n        </div>\\n        </li>\");\n  });\n  todoList.innerHTML = li;\n}\n\nfunction clearInput() {\n  todoInput.value = \"\";\n}\n\nfunction removeTodo() {\n  var deleteBtn = document.querySelectorAll(\".todo-list li i\");\n  deleteBtn.forEach(function (item) {\n    item.addEventListener(\"click\", deleteItem);\n  });\n}\n\nfunction deleteItem(item) {\n  var id = item.target.parentElement.parentElement.previousElementSibling.previousElementSibling.textContent;\n  var numId = parseInt(id) - 1;\n  listTodo.splice(numId, 1);\n  item.target.parentElement.remove();\n  displayList();\n}\n\nfunction addAnimation() {\n  var todo = document.querySelector(\".todo\");\n  todo.classList.add(\"fade-in\");\n}\n\n{\n  /* <input  type=\"checkbox\" name=\"complete\" id=\"complete\" ${todo.complete ? \"checked\":\"\"}/> */\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdXNlckNvbW1lbnQuanM/MjM0NiJdLCJuYW1lcyI6WyJ0b2RvSW5wdXQiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJidXR0b25JbnB1dCIsInRvZG9MaXN0IiwibGlzdFRvZG8iLCJhZGRFdmVudExpc3RlbmVyIiwiYWRkVG9kb0xpc3QiLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwidG9kbyIsImlkIiwibGVuZ3RoIiwibmFtZSIsInZhbHVlIiwiY29tcGxldGUiLCJwdXNoIiwiZGlzcGxheUxpc3QiLCJjbGVhcklucHV0IiwicmVtb3ZlVG9kbyIsImFkZEFuaW1hdGlvbiIsImFsZXJ0IiwibGkiLCJmb3JFYWNoIiwiaW5kZXgiLCJpbm5lckhUTUwiLCJkZWxldGVCdG4iLCJxdWVyeVNlbGVjdG9yQWxsIiwiaXRlbSIsImRlbGV0ZUl0ZW0iLCJ0YXJnZXQiLCJwYXJlbnRFbGVtZW50IiwicHJldmlvdXNFbGVtZW50U2libGluZyIsInRleHRDb250ZW50IiwibnVtSWQiLCJwYXJzZUludCIsInNwbGljZSIsInJlbW92ZSIsImNsYXNzTGlzdCIsImFkZCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsU0FBUyxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsZUFBdkIsQ0FBbEI7QUFDQSxJQUFNQyxXQUFXLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixZQUF2QixDQUFwQjtBQUNBLElBQU1FLFFBQVEsR0FBR0gsUUFBUSxDQUFDQyxhQUFULENBQXVCLFlBQXZCLENBQWpCO0FBQ0EsSUFBTUcsUUFBUSxHQUFHLEVBQWpCLEMsQ0FFQTs7QUFDQUYsV0FBVyxDQUFDRyxnQkFBWixDQUE2QixPQUE3QixFQUFzQ0MsV0FBdEMsRSxDQUVBOztBQUNBLFNBQVNBLFdBQVQsQ0FBcUJDLEtBQXJCLEVBQTRCO0FBQzFCQSxFQUFBQSxLQUFLLENBQUNDLGNBQU47QUFDQSxNQUFNQyxJQUFJLEdBQUc7QUFDWEMsSUFBQUEsRUFBRSxFQUFFTixRQUFRLENBQUNPLE1BQVQsR0FBa0IsQ0FEWDtBQUVYQyxJQUFBQSxJQUFJLEVBQUViLFNBQVMsQ0FBQ2MsS0FGTDtBQUdYQyxJQUFBQSxRQUFRLEVBQUU7QUFIQyxHQUFiO0FBS0FWLEVBQUFBLFFBQVEsQ0FBQ1csSUFBVCxDQUFjTixJQUFkOztBQUVBLE1BQUlWLFNBQVMsQ0FBQ2MsS0FBVixJQUFtQixFQUF2QixFQUEyQjtBQUN6QkcsSUFBQUEsV0FBVztBQUNYQyxJQUFBQSxVQUFVO0FBQ1ZDLElBQUFBLFVBQVU7QUFDVkMsSUFBQUEsWUFBWTtBQUNiLEdBTEQsTUFLTztBQUNMQyxJQUFBQSxLQUFLLENBQUMsMkJBQUQsQ0FBTDtBQUNEO0FBQ0Y7O0FBQ0QsU0FBU0osV0FBVCxHQUF1QjtBQUNyQixNQUFJSyxFQUFFLEdBQUcsRUFBVDtBQUNBakIsRUFBQUEsUUFBUSxDQUFDa0IsT0FBVCxDQUFpQixVQUFDYixJQUFELEVBQU9jLEtBQVAsRUFBaUI7QUFDaENGLElBQUFBLEVBQUUsZ0dBSXdCRSxLQUFLLEdBQUcsQ0FKaEMsNldBVzRCZCxJQUFJLENBQUNHLElBWGpDLG1RQUFGO0FBcUJELEdBdEJEO0FBdUJBVCxFQUFBQSxRQUFRLENBQUNxQixTQUFULEdBQXFCSCxFQUFyQjtBQUNEOztBQUVELFNBQVNKLFVBQVQsR0FBc0I7QUFDcEJsQixFQUFBQSxTQUFTLENBQUNjLEtBQVYsR0FBa0IsRUFBbEI7QUFDRDs7QUFFRCxTQUFTSyxVQUFULEdBQXNCO0FBQ3BCLE1BQU1PLFNBQVMsR0FBR3pCLFFBQVEsQ0FBQzBCLGdCQUFULENBQTBCLGlCQUExQixDQUFsQjtBQUNBRCxFQUFBQSxTQUFTLENBQUNILE9BQVYsQ0FBa0IsVUFBQ0ssSUFBRCxFQUFVO0FBQzFCQSxJQUFBQSxJQUFJLENBQUN0QixnQkFBTCxDQUFzQixPQUF0QixFQUErQnVCLFVBQS9CO0FBQ0QsR0FGRDtBQUdEOztBQUVELFNBQVNBLFVBQVQsQ0FBb0JELElBQXBCLEVBQTBCO0FBQ3hCLE1BQU1qQixFQUFFLEdBQ05pQixJQUFJLENBQUNFLE1BQUwsQ0FBWUMsYUFBWixDQUEwQkEsYUFBMUIsQ0FBd0NDLHNCQUF4QyxDQUNHQSxzQkFESCxDQUMwQkMsV0FGNUI7QUFHQSxNQUFNQyxLQUFLLEdBQUdDLFFBQVEsQ0FBQ3hCLEVBQUQsQ0FBUixHQUFlLENBQTdCO0FBQ0FOLEVBQUFBLFFBQVEsQ0FBQytCLE1BQVQsQ0FBZ0JGLEtBQWhCLEVBQXVCLENBQXZCO0FBQ0FOLEVBQUFBLElBQUksQ0FBQ0UsTUFBTCxDQUFZQyxhQUFaLENBQTBCTSxNQUExQjtBQUNBcEIsRUFBQUEsV0FBVztBQUNaOztBQUVELFNBQVNHLFlBQVQsR0FBd0I7QUFDdEIsTUFBTVYsSUFBSSxHQUFHVCxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsT0FBdkIsQ0FBYjtBQUNBUSxFQUFBQSxJQUFJLENBQUM0QixTQUFMLENBQWVDLEdBQWYsQ0FBbUIsU0FBbkI7QUFDRDs7QUFFRDtBQUNFO0FBQ0QiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCB0b2RvSW5wdXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2lucHV0Q29tbWVudFwiKTtcbmNvbnN0IGJ1dHRvbklucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5idG4taW5wdXRcIik7XG5jb25zdCB0b2RvTGlzdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIudG9kby1saXN0XCIpO1xuY29uc3QgbGlzdFRvZG8gPSBbXTtcblxuLy8gZXZlbnQgbGlzdGVuZXJcbmJ1dHRvbklucHV0LmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBhZGRUb2RvTGlzdCk7XG5cbi8vIGZ1bmN0aW9uXG5mdW5jdGlvbiBhZGRUb2RvTGlzdChldmVudCkge1xuICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICBjb25zdCB0b2RvID0ge1xuICAgIGlkOiBsaXN0VG9kby5sZW5ndGggKyAxLFxuICAgIG5hbWU6IHRvZG9JbnB1dC52YWx1ZSxcbiAgICBjb21wbGV0ZTogZmFsc2UsXG4gIH07XG4gIGxpc3RUb2RvLnB1c2godG9kbyk7XG5cbiAgaWYgKHRvZG9JbnB1dC52YWx1ZSAhPSBcIlwiKSB7XG4gICAgZGlzcGxheUxpc3QoKTtcbiAgICBjbGVhcklucHV0KCk7XG4gICAgcmVtb3ZlVG9kbygpO1xuICAgIGFkZEFuaW1hdGlvbigpO1xuICB9IGVsc2Uge1xuICAgIGFsZXJ0KFwicGxlYXNlIGVudGVyIHlvdXIgdG9kby4uLlwiKTtcbiAgfVxufVxuZnVuY3Rpb24gZGlzcGxheUxpc3QoKSB7XG4gIGxldCBsaSA9IFwiXCI7XG4gIGxpc3RUb2RvLmZvckVhY2goKHRvZG8sIGluZGV4KSA9PiB7XG4gICAgbGkgKz0gYFxuICAgICBcbiAgICA8bGkgY2xhc3M9XCJ0b2RvIHNoYWRvdyBtdC0zXCI+XG4gICAgXG4gICAgICAgIDxzcGFuIGNsYXNzPVwiY29sLTFcIj4ke2luZGV4ICsgMX08L3NwYW4+XG4gICAgICAgIFxuICAgICAgICA8ZGl2IGNsYXNzPVwic2hhZG93LWxnIG1sLWF1dG8gbS0wXCI+XG5cbiAgICAgICAgICA8ZGl2IGNsYXNzPVwiZm9ybS1ncm91cCBib3JkZXItYm90dG9tIGNvbC0xMiB0ZXh0LXJpZ2h0XCIgc3R5bGU9XCJ3aWR0aDogMTAwJTtcIj5cbiAgICAgICAgICAgIDxwIGNsYXNzPVwidXNlck5hbWUgIGJvcmRlci1ib3R0b20gcHktMlwiIGlkPVwidXNlck5hbWVcIj7Yp9mF24zYsdit2LPbjNmGPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzcz1cIm0tMCBjb2wtOSB0ZXh0LWNlbnRlclwiPiR7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdG9kby5uYW1lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH08L3A+IFxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgPC9kaXY+XG4gICAgICAgIDxkaXYgY2xhc3M9XCJtLTAgY29sLTJcIj4gICAgICAgICAgIFxuICAgICAgICAgICAgPGJ1dHRvbiBjbGFzcz1cInRyYXNoXCIgb25DbGljaz1cInJlbW92ZVRvZG8oKVwiPlxuICAgICAgICAgICAgICAgIDxpIGNsYXNzPVwiZmFzIGZhLXRyYXNoXCI+PC9pPlxuICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgIDwvZGl2PlxuICAgICAgICA8L2xpPmA7XG4gIH0pO1xuICB0b2RvTGlzdC5pbm5lckhUTUwgPSBsaTtcbn1cblxuZnVuY3Rpb24gY2xlYXJJbnB1dCgpIHtcbiAgdG9kb0lucHV0LnZhbHVlID0gXCJcIjtcbn1cblxuZnVuY3Rpb24gcmVtb3ZlVG9kbygpIHtcbiAgY29uc3QgZGVsZXRlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi50b2RvLWxpc3QgbGkgaVwiKTtcbiAgZGVsZXRlQnRuLmZvckVhY2goKGl0ZW0pID0+IHtcbiAgICBpdGVtLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBkZWxldGVJdGVtKTtcbiAgfSk7XG59XG5cbmZ1bmN0aW9uIGRlbGV0ZUl0ZW0oaXRlbSkge1xuICBjb25zdCBpZCA9XG4gICAgaXRlbS50YXJnZXQucGFyZW50RWxlbWVudC5wYXJlbnRFbGVtZW50LnByZXZpb3VzRWxlbWVudFNpYmxpbmdcbiAgICAgIC5wcmV2aW91c0VsZW1lbnRTaWJsaW5nLnRleHRDb250ZW50O1xuICBjb25zdCBudW1JZCA9IHBhcnNlSW50KGlkKSAtIDE7XG4gIGxpc3RUb2RvLnNwbGljZShudW1JZCwgMSk7XG4gIGl0ZW0udGFyZ2V0LnBhcmVudEVsZW1lbnQucmVtb3ZlKCk7XG4gIGRpc3BsYXlMaXN0KCk7XG59XG5cbmZ1bmN0aW9uIGFkZEFuaW1hdGlvbigpIHtcbiAgY29uc3QgdG9kbyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIudG9kb1wiKTtcbiAgdG9kby5jbGFzc0xpc3QuYWRkKFwiZmFkZS1pblwiKTtcbn1cblxue1xuICAvKiA8aW5wdXQgIHR5cGU9XCJjaGVja2JveFwiIG5hbWU9XCJjb21wbGV0ZVwiIGlkPVwiY29tcGxldGVcIiAke3RvZG8uY29tcGxldGUgPyBcImNoZWNrZWRcIjpcIlwifS8+ICovXG59XG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3VzZXJDb21tZW50LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/userComment.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/userComment.js"]();
/******/ 	
/******/ })()
;
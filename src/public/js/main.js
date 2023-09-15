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

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ (() => {

eval("// main.js\n\n$(document).ready(function () {\n  // モーダルを開くボタンのクリックイベントを設定\n  $('#js-open').click(function () {\n    // モーダルを表示\n    $('#js-modal').show();\n    $('#js-overlay').show();\n  });\n\n  // HTMLコンテンツをモーダル内のmodal-content要素に挿入\n  var htmlContent = \"\\n      <div class=\\\"menu\\\">\\n        <div class=\\\"menu-utilities\\\">\\n          <nav>\\n            <ul class=\\\"menu_content\\\">\\n              @if (Auth::check())\\n              <li class=\\\"menu__item\\\">\\n                <a class=\\\"menu__link\\\" href=\\\"/mypage\\\">HOME</a>\\n              </li>\\n              <li class=\\\"menu__item\\\">\\n                <form class=\\\"form\\\" action=\\\"/logout\\\" method=\\\"post\\\">\\n                  @csrf\\n                  <button class=\\\"menu__button\\\">Logout</button>\\n                </form>\\n              </li>\\n              <li class=\\\"menu__item\\\">\\n                <a class=\\\"menu__link\\\" href=\\\"/mypage\\\">Mypage</a>\\n              </li>\\n              @endif\\n            </ul>\\n          </nav>\\n        </div>\\n      </div>\\n    \";\n\n  // モーダル内のmodal-content要素にHTMLコンテンツを挿入\n  $('#js-modal .modal-content').html(htmlContent);\n});\n\n// モーダルを閉じるボタンのクリックイベントを設定\n$('#js-close').click(function () {\n  // モーダルを非表示\n  $('#js-modal').hide();\n  $('#js-overlay').hide();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbWFpbi5qcyIsIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiY2xpY2siLCJzaG93IiwiaHRtbENvbnRlbnQiLCJodG1sIiwiaGlkZSJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL21haW4uanM/ZmRhYyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBtYWluLmpzXG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcbiAgLy8g44Oi44O844OA44Or44KS6ZaL44GP44Oc44K/44Oz44Gu44Kv44Oq44OD44Kv44Kk44OZ44Oz44OI44KS6Kit5a6aXG4gICQoJyNqcy1vcGVuJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgIC8vIOODouODvOODgOODq+OCkuihqOekulxuICAgICQoJyNqcy1tb2RhbCcpLnNob3coKTtcbiAgICAkKCcjanMtb3ZlcmxheScpLnNob3coKTtcbiAgfSk7XG5cbiAgICAgIC8vIEhUTUzjgrPjg7Pjg4bjg7Pjg4TjgpLjg6Ljg7zjg4Djg6vlhoXjga5tb2RhbC1jb250ZW506KaB57Sg44Gr5oy/5YWlXG4gICAgdmFyIGh0bWxDb250ZW50ID0gYFxuICAgICAgPGRpdiBjbGFzcz1cIm1lbnVcIj5cbiAgICAgICAgPGRpdiBjbGFzcz1cIm1lbnUtdXRpbGl0aWVzXCI+XG4gICAgICAgICAgPG5hdj5cbiAgICAgICAgICAgIDx1bCBjbGFzcz1cIm1lbnVfY29udGVudFwiPlxuICAgICAgICAgICAgICBAaWYgKEF1dGg6OmNoZWNrKCkpXG4gICAgICAgICAgICAgIDxsaSBjbGFzcz1cIm1lbnVfX2l0ZW1cIj5cbiAgICAgICAgICAgICAgICA8YSBjbGFzcz1cIm1lbnVfX2xpbmtcIiBocmVmPVwiL215cGFnZVwiPkhPTUU8L2E+XG4gICAgICAgICAgICAgIDwvbGk+XG4gICAgICAgICAgICAgIDxsaSBjbGFzcz1cIm1lbnVfX2l0ZW1cIj5cbiAgICAgICAgICAgICAgICA8Zm9ybSBjbGFzcz1cImZvcm1cIiBhY3Rpb249XCIvbG9nb3V0XCIgbWV0aG9kPVwicG9zdFwiPlxuICAgICAgICAgICAgICAgICAgQGNzcmZcbiAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3M9XCJtZW51X19idXR0b25cIj5Mb2dvdXQ8L2J1dHRvbj5cbiAgICAgICAgICAgICAgICA8L2Zvcm0+XG4gICAgICAgICAgICAgIDwvbGk+XG4gICAgICAgICAgICAgIDxsaSBjbGFzcz1cIm1lbnVfX2l0ZW1cIj5cbiAgICAgICAgICAgICAgICA8YSBjbGFzcz1cIm1lbnVfX2xpbmtcIiBocmVmPVwiL215cGFnZVwiPk15cGFnZTwvYT5cbiAgICAgICAgICAgICAgPC9saT5cbiAgICAgICAgICAgICAgQGVuZGlmXG4gICAgICAgICAgICA8L3VsPlxuICAgICAgICAgIDwvbmF2PlxuICAgICAgICA8L2Rpdj5cbiAgICAgIDwvZGl2PlxuICAgIGA7XG5cbiAgICAvLyDjg6Ljg7zjg4Djg6vlhoXjga5tb2RhbC1jb250ZW506KaB57Sg44GrSFRNTOOCs+ODs+ODhuODs+ODhOOCkuaMv+WFpVxuICAgICQoJyNqcy1tb2RhbCAubW9kYWwtY29udGVudCcpLmh0bWwoaHRtbENvbnRlbnQpO1xufSk7XG5cbiAgLy8g44Oi44O844OA44Or44KS6ZaJ44GY44KL44Oc44K/44Oz44Gu44Kv44Oq44OD44Kv44Kk44OZ44Oz44OI44KS6Kit5a6aXG4gICQoJyNqcy1jbG9zZScpLmNsaWNrKGZ1bmN0aW9uICgpIHtcbiAgICAvLyDjg6Ljg7zjg4Djg6vjgpLpnZ7ooajnpLpcbiAgICAkKCcjanMtbW9kYWwnKS5oaWRlKCk7XG4gICAgJCgnI2pzLW92ZXJsYXknKS5oaWRlKCk7XG4gIH0pOyJdLCJtYXBwaW5ncyI6IkFBQUE7O0FBRUFBLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLENBQUNDLEtBQUssQ0FBQyxZQUFZO0VBQzVCO0VBQ0FGLENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQ0csS0FBSyxDQUFDLFlBQVk7SUFDOUI7SUFDQUgsQ0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDSSxJQUFJLENBQUMsQ0FBQztJQUNyQkosQ0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDSSxJQUFJLENBQUMsQ0FBQztFQUN6QixDQUFDLENBQUM7O0VBRUU7RUFDRixJQUFJQyxXQUFXLHF3QkF1QmQ7O0VBRUQ7RUFDQUwsQ0FBQyxDQUFDLDBCQUEwQixDQUFDLENBQUNNLElBQUksQ0FBQ0QsV0FBVyxDQUFDO0FBQ25ELENBQUMsQ0FBQzs7QUFFQTtBQUNBTCxDQUFDLENBQUMsV0FBVyxDQUFDLENBQUNHLEtBQUssQ0FBQyxZQUFZO0VBQy9CO0VBQ0FILENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQ08sSUFBSSxDQUFDLENBQUM7RUFDckJQLENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ08sSUFBSSxDQUFDLENBQUM7QUFDekIsQ0FBQyxDQUFDIn0=\n//# sourceURL=webpack-internal:///./resources/js/main.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/main.js"]();
/******/ 	
/******/ })()
;
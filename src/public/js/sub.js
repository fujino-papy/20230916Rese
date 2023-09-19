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

/***/ "./resources/js/sub.js":
/*!*****************************!*\
  !*** ./resources/js/sub.js ***!
  \*****************************/
/***/ (() => {

eval("$(document).ready(function () {\n  // モーダルを開くボタンのクリックイベントを設定\n  $('#js-open').click(function () {\n    // モーダルを表示\n    $('#js-modal').show();\n    $('#js-overlay').show();\n  });\n\n  // HTMLコンテンツをモーダル内のmodal-content要素に挿入\n  var htmlContent = \"\\n    <div class=\\\"menu\\\">\\n        <div class=\\\"menu-utilities\\\">\\n        <nav>\\n            <ul class=\\\"menu_content\\\">\\n            <li class=\\\"menu__item\\\">\\n                <a class=\\\"menu__link\\\" href=\\\"/home\\\">Home</a>\\n            </li>\\n            <li class=\\\"menu__item\\\">\\n                <a class=\\\"menu__link\\\" href=\\\"{{ route('logout') }}\\\">Logout</a>\\n            </li>\\n            <li class=\\\"menu__item\\\">\\n                <a class=\\\"menu__link\\\" href=\\\"/mypage\\\">Mypage</a>\\n            </li>\\n            </ul>\\n        </nav>\\n        </div>\\n    </div>\\n    \";\n\n  // モーダル内のmodal-content要素にHTMLコンテンツを挿入\n  $('#js-modal .modal-content').html(htmlContent);\n});\n\n// モーダルを閉じるボタンのクリックイベントを設定\n$('#js-close').click(function () {\n  // モーダルを非表示\n  $('#js-modal').hide();\n  $('#js-overlay').hide();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc3ViLmpzIiwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJjbGljayIsInNob3ciLCJodG1sQ29udGVudCIsImh0bWwiLCJoaWRlIl0sInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc3ViLmpzPzliOTciXSwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAvLyDjg6Ljg7zjg4Djg6vjgpLplovjgY/jg5zjgr/jg7Pjga7jgq/jg6rjg4Pjgq/jgqTjg5njg7Pjg4jjgpLoqK3lrppcbiQoJyNqcy1vcGVuJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgIC8vIOODouODvOODgOODq+OCkuihqOekulxuICAgICQoJyNqcy1tb2RhbCcpLnNob3coKTtcbiAgICAkKCcjanMtb3ZlcmxheScpLnNob3coKTtcbn0pO1xuXG4gICAgICAvLyBIVE1M44Kz44Oz44OG44Oz44OE44KS44Oi44O844OA44Or5YaF44GubW9kYWwtY29udGVudOimgee0oOOBq+aMv+WFpVxuICAgIHZhciBodG1sQ29udGVudCA9IGBcbiAgICA8ZGl2IGNsYXNzPVwibWVudVwiPlxuICAgICAgICA8ZGl2IGNsYXNzPVwibWVudS11dGlsaXRpZXNcIj5cbiAgICAgICAgPG5hdj5cbiAgICAgICAgICAgIDx1bCBjbGFzcz1cIm1lbnVfY29udGVudFwiPlxuICAgICAgICAgICAgPGxpIGNsYXNzPVwibWVudV9faXRlbVwiPlxuICAgICAgICAgICAgICAgIDxhIGNsYXNzPVwibWVudV9fbGlua1wiIGhyZWY9XCIvaG9tZVwiPkhvbWU8L2E+XG4gICAgICAgICAgICA8L2xpPlxuICAgICAgICAgICAgPGxpIGNsYXNzPVwibWVudV9faXRlbVwiPlxuICAgICAgICAgICAgICAgIDxhIGNsYXNzPVwibWVudV9fbGlua1wiIGhyZWY9XCJ7eyByb3V0ZSgnbG9nb3V0JykgfX1cIj5Mb2dvdXQ8L2E+XG4gICAgICAgICAgICA8L2xpPlxuICAgICAgICAgICAgPGxpIGNsYXNzPVwibWVudV9faXRlbVwiPlxuICAgICAgICAgICAgICAgIDxhIGNsYXNzPVwibWVudV9fbGlua1wiIGhyZWY9XCIvbXlwYWdlXCI+TXlwYWdlPC9hPlxuICAgICAgICAgICAgPC9saT5cbiAgICAgICAgICAgIDwvdWw+XG4gICAgICAgIDwvbmF2PlxuICAgICAgICA8L2Rpdj5cbiAgICA8L2Rpdj5cbiAgICBgO1xuXG4gICAgLy8g44Oi44O844OA44Or5YaF44GubW9kYWwtY29udGVudOimgee0oOOBq0hUTUzjgrPjg7Pjg4bjg7Pjg4TjgpLmjL/lhaVcbiAgICAkKCcjanMtbW9kYWwgLm1vZGFsLWNvbnRlbnQnKS5odG1sKGh0bWxDb250ZW50KTtcbn0pO1xuXG4gIC8vIOODouODvOODgOODq+OCkumWieOBmOOCi+ODnOOCv+ODs+OBruOCr+ODquODg+OCr+OCpOODmeODs+ODiOOCkuioreWumlxuJCgnI2pzLWNsb3NlJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgIC8vIOODouODvOODgOODq+OCkumdnuihqOekulxuICAgICQoJyNqcy1tb2RhbCcpLmhpZGUoKTtcbiAgICAkKCcjanMtb3ZlcmxheScpLmhpZGUoKTtcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLENBQUNDLEtBQUssQ0FBQyxZQUFZO0VBQzVCO0VBQ0ZGLENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQ0csS0FBSyxDQUFDLFlBQVk7SUFDNUI7SUFDQUgsQ0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDSSxJQUFJLENBQUMsQ0FBQztJQUNyQkosQ0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDSSxJQUFJLENBQUMsQ0FBQztFQUMzQixDQUFDLENBQUM7O0VBRUk7RUFDRixJQUFJQyxXQUFXLDJrQkFrQmQ7O0VBRUQ7RUFDQUwsQ0FBQyxDQUFDLDBCQUEwQixDQUFDLENBQUNNLElBQUksQ0FBQ0QsV0FBVyxDQUFDO0FBQ25ELENBQUMsQ0FBQzs7QUFFQTtBQUNGTCxDQUFDLENBQUMsV0FBVyxDQUFDLENBQUNHLEtBQUssQ0FBQyxZQUFZO0VBQzdCO0VBQ0FILENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQ08sSUFBSSxDQUFDLENBQUM7RUFDckJQLENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ08sSUFBSSxDQUFDLENBQUM7QUFDM0IsQ0FBQyxDQUFDIn0=\n//# sourceURL=webpack-internal:///./resources/js/sub.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/sub.js"]();
/******/ 	
/******/ })()
;
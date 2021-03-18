/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

//Custom select dropdown
document.querySelector('.custom-select-wrapper').addEventListener('click', function () {
  this.querySelector('.custom-select').classList.toggle('open');
});

var _iterator = _createForOfIteratorHelper(document.querySelectorAll(".custom-option")),
    _step;

try {
  for (_iterator.s(); !(_step = _iterator.n()).done;) {
    var option = _step.value;
    option.addEventListener('click', function () {
      if (!this.classList.contains('selected')) {
        this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
        this.classList.add('selected');
        this.closest('.custom-select').querySelector('.custom-select__trigger span').textContent = this.textContent;
      }
    });
  }
} catch (err) {
  _iterator.e(err);
} finally {
  _iterator.f();
}

window.addEventListener('click', function (e) {
  var select = document.querySelector('.custom-select');

  if (!select.contains(e.target)) {
    select.classList.remove('open');
  }
}); //Collapsible menu

var menu = document.querySelector('.menu');
menu.addEventListener('click', function () {
  menu.classList.toggle('open');
  menu.classList.toggle('active');
  var content = document.querySelector('menu-content');

  if (content.style.display === "block") {
    content.style.display = "none";
    this.style.borderBottomRightRadius = "37px";
    this.style.borderBottomLeftRadius = "37px";
  } else {
    content.style.display = "block";
    this.style.borderBottomRightRadius = "0px";
    this.style.borderBottomLeftRadius = "0px";
  }
}); // const coll = document.getElementsByClassName("menu");
// let i;
//
// for (i = 0; i < coll.length; i++) {
//     coll[i].addEventListener("click", function() {
//         this.classList.toggle("active");
//         let content = this.nextElementSibling;
//         if (content.style.display === "block") {
//             content.style.display = "none";
//             this.style.borderBottomRightRadius = "37px";
//             this.style.borderBottomLeftRadius = "37px";
//         } else {
//             content.style.display = "block";
//             this.style.borderBottomRightRadius = "0px";
//             this.style.borderBottomLeftRadius = "0px";
//         }
//     });
//}
/******/ })()
;
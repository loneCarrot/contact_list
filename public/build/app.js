(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j|t)sx?$":
/*!*****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.(j|t)sx?$ ***!
  \*****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j|t)sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var stimulus__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! stimulus */ "./node_modules/stimulus/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }














function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);

  return _default;
}(stimulus__WEBPACK_IMPORTED_MODULE_12__.Controller);



/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/* harmony import */ var _js_index__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/index */ "./assets/js/index.js");
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // start the Stimulus application

 //javascript


console.log('Hello Webpack Encore! Edit me in assets/app.js');
$("#search-field").keyup(function () {
  var search_type = $("#inputGroupSelect").val();
  var search_field_value = $(this).val().toUpperCase();
  var table_body = $(".table-body").children();
  console.log(table_body);

  for (var i = 0; i < table_body.length - 1; i++) {
    var table_content = $(".contact-data")[i];
    (0,_js_index__WEBPACK_IMPORTED_MODULE_2__["default"])(search_type, search_field_value, table_content);
  }
});
console.log($("#contact_list_email_add"));
$("#contact_list_email_add").keyup(function () {
  var input_val = $(this).val();
  $.ajax({
    type: "GET",
    url: "email_check/" + input_val,
    success: function success(response) {
      if (response > 0) {
        $(".message").html("this email address is already taken");
        $(".btn-primary").attr('disabled', true);
      } else if (input_val == "" || response == 0) {
        $(".message").html("");
        $(".btn-primary").attr('disabled', false);
      }
    }
  });
});

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");
 // Registers Stimulus controllers from controllers.json and in the controllers/ directory

var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j|t)sx?$")); // register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/js/index.js":
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* export default binding */ __WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ function __WEBPACK_DEFAULT_EXPORT__(search_type, search_data, table_content) {
  contactSelect(search_type, table_content, search_data);
}

function contactSelect(search_type, table_content, search_data) {
  var table_element = table_content.getElementsByTagName("td");
  console.log(table_element);

  for (var j = 0; j < table_element.length; j++) {
    if (table_element[j].id == search_type) {
      rowDisplay(table_element[j], table_content, search_data);
    }
  }
}

function rowDisplay(table_element, table_content, search_data) {
  var txtValue = table_element.textContent || table_element.innerText;

  if (txtValue.toUpperCase().indexOf(search_data) > -1) {
    table_content.style.display = "";
  } else {
    table_content.style.display = "none";
  }
}

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_core-js_modules_es_ar-1aad1b"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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IjpbIndlYnBhY2s6Ly8vfC9cXC4oanx0KXN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy5qc29uIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Jvb3RzdHJhcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvaW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzIl0sInNvdXJjZXNDb250ZW50IjpbInZhciBtYXAgPSB7XG5cdFwiLi9oZWxsb19jb250cm9sbGVyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL2Fzc2V0cy9jb250cm9sbGVycyBzeW5jIHJlY3Vyc2l2ZSAuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEgXFxcXC4oanx0KXN4PyRcIjsiLCJleHBvcnQgZGVmYXVsdCB7XG59OyIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdzdGltdWx1cyc7XG5cbi8qXG4gKiBUaGlzIGlzIGFuIGV4YW1wbGUgU3RpbXVsdXMgY29udHJvbGxlciFcbiAqXG4gKiBBbnkgZWxlbWVudCB3aXRoIGEgZGF0YS1jb250cm9sbGVyPVwiaGVsbG9cIiBhdHRyaWJ1dGUgd2lsbCBjYXVzZVxuICogdGhpcyBjb250cm9sbGVyIHRvIGJlIGV4ZWN1dGVkLiBUaGUgbmFtZSBcImhlbGxvXCIgY29tZXMgZnJvbSB0aGUgZmlsZW5hbWU6XG4gKiBoZWxsb19jb250cm9sbGVyLmpzIC0+IFwiaGVsbG9cIlxuICpcbiAqIERlbGV0ZSB0aGlzIGZpbGUgb3IgYWRhcHQgaXQgZm9yIHlvdXIgdXNlIVxuICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xuICAgIGNvbm5lY3QoKSB7XG4gICAgICAgIHRoaXMuZWxlbWVudC50ZXh0Q29udGVudCA9ICdIZWxsbyBTdGltdWx1cyEgRWRpdCBtZSBpbiBhc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyc7XG4gICAgfVxufVxuIiwiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XG5cbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxuaW1wb3J0ICcuL2Jvb3RzdHJhcCc7XG5cblxuLy9qYXZhc2NyaXB0XG5pbXBvcnQgc2VhcmNoUHJvY2VzcyBmcm9tIFwiLi9qcy9pbmRleFwiO1xuXG5jb25zb2xlLmxvZygnSGVsbG8gV2VicGFjayBFbmNvcmUhIEVkaXQgbWUgaW4gYXNzZXRzL2FwcC5qcycpXG5cbiQoXCIjc2VhcmNoLWZpZWxkXCIpLmtleXVwKGZ1bmN0aW9uKCl7XG4gICAgdmFyIHNlYXJjaF90eXBlPSQoXCIjaW5wdXRHcm91cFNlbGVjdFwiKS52YWwoKTtcbiAgICB2YXIgc2VhcmNoX2ZpZWxkX3ZhbHVlPSQodGhpcykudmFsKCkudG9VcHBlckNhc2UoKTtcbiAgICBcbiAgICB2YXIgdGFibGVfYm9keT0kKFwiLnRhYmxlLWJvZHlcIikuY2hpbGRyZW4oKTtcbiAgICBjb25zb2xlLmxvZyh0YWJsZV9ib2R5KTtcblxuICAgIGZvciAobGV0IGkgPSAwOyBpIDwgKHRhYmxlX2JvZHkubGVuZ3RoKS0xOyBpKyspIHtcbiAgICAgICAgdmFyIHRhYmxlX2NvbnRlbnQ9JChcIi5jb250YWN0LWRhdGFcIilbaV07XG4gICAgICAgIHNlYXJjaFByb2Nlc3Moc2VhcmNoX3R5cGUsIHNlYXJjaF9maWVsZF92YWx1ZSwgdGFibGVfY29udGVudCk7ICAgICAgICBcbiAgICB9XG59KTtcblxuXG5jb25zb2xlLmxvZygkKFwiI2NvbnRhY3RfbGlzdF9lbWFpbF9hZGRcIikpO1xuXG4kKFwiI2NvbnRhY3RfbGlzdF9lbWFpbF9hZGRcIikua2V5dXAoZnVuY3Rpb24oKXtcblxuICAgIHZhciBpbnB1dF92YWw9JCh0aGlzKS52YWwoKTtcbiAgICAkLmFqYXgoe1xuICAgICAgICB0eXBlOlwiR0VUXCIsXG4gICAgICAgIHVybDpcImVtYWlsX2NoZWNrL1wiK2lucHV0X3ZhbCxcbiAgICAgICAgc3VjY2VzczogZnVuY3Rpb24ocmVzcG9uc2Upe1xuICAgICAgICAgICAgaWYgKHJlc3BvbnNlPjApIHtcbiAgICAgICAgICAgICAgICAkKFwiLm1lc3NhZ2VcIikuaHRtbChcInRoaXMgZW1haWwgYWRkcmVzcyBpcyBhbHJlYWR5IHRha2VuXCIpO1xuICAgICAgICAgICAgICAgICQoXCIuYnRuLXByaW1hcnlcIikuYXR0cignZGlzYWJsZWQnLCB0cnVlKTtcbiAgICAgICAgICAgIH1lbHNlIGlmKGlucHV0X3ZhbD09XCJcIiB8fCByZXNwb25zZT09MCl7XG4gICAgICAgICAgICAgICAgJChcIi5tZXNzYWdlXCIpLmh0bWwoXCJcIik7XG4gICAgICAgICAgICAgICAgJChcIi5idG4tcHJpbWFyeVwiKS5hdHRyKCdkaXNhYmxlZCcsIGZhbHNlKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0pXG59KVxuXG5cblxuIiwiaW1wb3J0IHsgc3RhcnRTdGltdWx1c0FwcCB9IGZyb20gJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZSc7XG5cbi8vIFJlZ2lzdGVycyBTdGltdWx1cyBjb250cm9sbGVycyBmcm9tIGNvbnRyb2xsZXJzLmpzb24gYW5kIGluIHRoZSBjb250cm9sbGVycy8gZGlyZWN0b3J5XG5leHBvcnQgY29uc3QgYXBwID0gc3RhcnRTdGltdWx1c0FwcChyZXF1aXJlLmNvbnRleHQoXG4gICAgJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyIS4vY29udHJvbGxlcnMnLFxuICAgIHRydWUsXG4gICAgL1xcLihqfHQpc3g/JC9cbikpO1xuXG4vLyByZWdpc3RlciBhbnkgY3VzdG9tLCAzcmQgcGFydHkgY29udHJvbGxlcnMgaGVyZVxuLy8gYXBwLnJlZ2lzdGVyKCdzb21lX2NvbnRyb2xsZXJfbmFtZScsIFNvbWVJbXBvcnRlZENvbnRyb2xsZXIpO1xuIiwiZXhwb3J0IGRlZmF1bHQgZnVuY3Rpb24oc2VhcmNoX3R5cGUsIHNlYXJjaF9kYXRhLCB0YWJsZV9jb250ZW50KXtcclxuICAgIGNvbnRhY3RTZWxlY3Qoc2VhcmNoX3R5cGUsIHRhYmxlX2NvbnRlbnQsIHNlYXJjaF9kYXRhKTtcclxufVxyXG5cclxuZnVuY3Rpb24gY29udGFjdFNlbGVjdCAoc2VhcmNoX3R5cGUsIHRhYmxlX2NvbnRlbnQsIHNlYXJjaF9kYXRhKSB7XHJcbiAgICB2YXIgdGFibGVfZWxlbWVudD10YWJsZV9jb250ZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKFwidGRcIik7XHJcbiAgICBjb25zb2xlLmxvZyh0YWJsZV9lbGVtZW50KTtcclxuICAgIGZvciAobGV0IGogPSAwOyBqIDwgdGFibGVfZWxlbWVudC5sZW5ndGg7IGorKykge1xyXG4gICAgICAgIGlmICh0YWJsZV9lbGVtZW50W2pdLmlkID09IHNlYXJjaF90eXBlKSB7XHJcbiAgICAgICAgICAgIHJvd0Rpc3BsYXkodGFibGVfZWxlbWVudFtqXSwgdGFibGVfY29udGVudCwgc2VhcmNoX2RhdGEpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxufVxyXG5cclxuZnVuY3Rpb24gcm93RGlzcGxheSh0YWJsZV9lbGVtZW50LCB0YWJsZV9jb250ZW50LCBzZWFyY2hfZGF0YSl7XHJcbiAgICB2YXIgdHh0VmFsdWUgPSB0YWJsZV9lbGVtZW50LnRleHRDb250ZW50IHx8IHRhYmxlX2VsZW1lbnQuaW5uZXJUZXh0O1xyXG4gICAgaWYgKHR4dFZhbHVlLnRvVXBwZXJDYXNlKCkuaW5kZXhPZihzZWFyY2hfZGF0YSkgPiAtMSkge1xyXG4gICAgICAgIHRhYmxlX2NvbnRlbnQuc3R5bGUuZGlzcGxheSA9IFwiXCI7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIHRhYmxlX2NvbnRlbnQuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgfVxyXG59IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIkNvbnRyb2xsZXIiLCJlbGVtZW50IiwidGV4dENvbnRlbnQiLCJzZWFyY2hQcm9jZXNzIiwiY29uc29sZSIsImxvZyIsIiQiLCJrZXl1cCIsInNlYXJjaF90eXBlIiwidmFsIiwic2VhcmNoX2ZpZWxkX3ZhbHVlIiwidG9VcHBlckNhc2UiLCJ0YWJsZV9ib2R5IiwiY2hpbGRyZW4iLCJpIiwibGVuZ3RoIiwidGFibGVfY29udGVudCIsImlucHV0X3ZhbCIsImFqYXgiLCJ0eXBlIiwidXJsIiwic3VjY2VzcyIsInJlc3BvbnNlIiwiaHRtbCIsImF0dHIiLCJzdGFydFN0aW11bHVzQXBwIiwiYXBwIiwicmVxdWlyZSIsImNvbnRleHQiLCJzZWFyY2hfZGF0YSIsImNvbnRhY3RTZWxlY3QiLCJ0YWJsZV9lbGVtZW50IiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJqIiwiaWQiLCJyb3dEaXNwbGF5IiwidHh0VmFsdWUiLCJpbm5lclRleHQiLCJpbmRleE9mIiwic3R5bGUiLCJkaXNwbGF5Il0sInNvdXJjZVJvb3QiOiIifQ==
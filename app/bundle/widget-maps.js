/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	var __vue_styles__ = {}
	__vue_script__ = __webpack_require__(1)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] packages/jebster/maps/app/components/widget-maps.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(2)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	var __vue_options__ = typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports
	if (__vue_template__) {
	__vue_options__.template = __vue_template__
	}
	if (!__vue_options__.computed) __vue_options__.computed = {}
	Object.keys(__vue_styles__).forEach(function (key) {
	var module = __vue_styles__[key]
	__vue_options__.computed[key] = function () { return module }
	})
	if (false) {(function () {  module.hot.accept()
	  var hotAPI = require("vue-hot-reload-api")
	  hotAPI.install(require("vue"), false)
	  if (!hotAPI.compatible) return
	  var id = "_v-3b263b94/widget-maps.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 1 */
/***/ function(module, exports) {

	'use strict';

	module.exports = {
	    section: {
	        label: 'Settings'
	    },
	    replace: false,
	    props: ['widget', 'config', 'form'],
	    data: function data() {
	        return {
	            placeholder: {
	                header: this.$trans('Text to display above map'),
	                width: '100%',
	                height: '320px',
	                location: 'Bystævneparken 19, 2700 Brønshøj',
	                zoom: 14,
	                satellite: true,
	                color: '#33cc00'
	            }
	        };
	    },
	    created: function created() {
	        this.$options.partials = this.$parent.$options.partials;
	    },


	    methods: {}
	};
	window.Widgets.components['jebster-map-widget:settings'] = module.exports;

/***/ },
/* 2 */
/***/ function(module, exports) {

	module.exports = "\n<div class=\"uk-grid pk-grid-large\" data-uk-grid-margin>\n    <div class=\"uk-flex-item-1 uk-form-horizontal\">\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-title\" class=\"uk-form-label\">{{ 'Title' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-title\" class=\"uk-form-width-large\" type=\"text\" name=\"title\" v-model=\"widget.title\" v-validate:required>\n                <p class=\"uk-form-help-block uk-text-danger\" v-show=\"form.title.invalid\">{{ 'Title cannot be blank.' | trans }}</p>\n            </div>\n        </div>\n        <hr>\n        <div class=\"uk-form-row\">\n            <label for=\"form-header\" class=\"uk-form-label\">{{ 'Header' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-header\" class=\"uk-form-width-large\" type=\"text\" v-model=\"widget.data.location.header\" placeholder=\"{{placeholder.header}}\">\n                <input id=\"form-header-color\" type=\"color\" v-model=\"widget.data.location.headerColor\" />\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-location\" class=\"uk-form-label\" uk-tooltip=\"{{ 'Both longitude/latitude or writing a specific address are allowed.' | trans }}\">{{ 'Location' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-location\" class=\"uk-form-width-large\" type=\"text\" name=\"location\" v-model=\"widget.data.location.location\" placeholder=\"{{placeholder.location}}\"  v-validate:required>\n                <p class=\"uk-form-help-block uk-text-danger\" v-show=\"form.location.invalid\">{{ 'Location is required' | trans }}</p>\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-height\" class=\"uk-form-label\" uk-tooltip=\"{{ 'Either use percentage or px' | trans }}\">{{ 'Height' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-height\" class=\"uk-form-width-large\" type=\"text\" v-model=\"widget.data.location.height\" placeholder=\"{{placeholder.height}}\">\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-width\" class=\"uk-form-label\">{{ 'Width' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-width\" class=\"uk-form-width-large\" type=\"text\" v-model=\"widget.data.location.width\" placeholder=\"{{placeholder.width}}\">\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-zoom\" class=\"uk-form-label\">{{ 'Zoom Level' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-zoom\" class=\"uk-form-width-large\" type=\"number\" v-model=\"widget.data.location.zoom\" placeholder=\"{{placeholder.zoom}}\">\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <span class=\"uk-form-label\">{{ 'Options' | trans }}</span>\n            <div class=\"uk-form-controls\">\n                <label><input type=\"checkbox\" v-model=\"widget.data.location.satellite\" value=\"1\"> {{ 'Satellite View' | trans }}</label>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"pk-width-sidebar pk-width-sidebar-large\">\n        <partial name=\"settings\"></partial>\n\n    </div>\n</div>\n\n";

/***/ }
/******/ ]);
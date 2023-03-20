/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n$roboto: 'Roboto', sans-serif;\n                             ^\n      Invalid CSS after \"...o', sans-serif;\": expected 1 selector or at-rule, was \"<<<<<<< HEAD\"\n      in /Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/sass/globals/_variables.scss (line 2, column 31)\n    at /Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/webpack/lib/NormalModule.js:195:19\n    at /Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.callback (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.done [as callback] (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/neo-async/async.js:8069:18)\n    at options.error (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/node-sass/lib/index.js:293:32)");

/***/ }),
/* 2 */
/***/ (function(module, exports) {

throw new Error("Module build failed: SyntaxError: /Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/package.json: Error while parsing JSON - Unexpected token < in JSON at position 479\n    at JSON.parse (<anonymous>)\n    at ConfigChainBuilder.addConfig (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/file/options/build-config-chain.js:150:65)\n    at ConfigChainBuilder.findConfigs (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/file/options/build-config-chain.js:102:30)\n    at buildConfigChain (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/file/options/build-config-chain.js:61:13)\n    at OptionManager.init (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/file/options/option-manager.js:354:58)\n    at File.initOptions (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/file/index.js:212:65)\n    at new File (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/file/index.js:135:24)\n    at Pipeline.transform (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-core/lib/transformation/pipeline.js:46:16)\n    at transpile (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-loader/lib/index.js:50:20)\n    at Object.module.exports (/Users/lawrence/Sites/localhost/the-brow-beast/wp-content/themes/the-brow-beast/node_modules/babel-loader/lib/index.js:173:20)");

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map
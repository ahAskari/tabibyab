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

/***/ "./resources/js/map.js":
/*!*****************************!*\
  !*** ./resources/js/map.js ***!
  \*****************************/
/***/ (() => {

eval("// Initialize and add the map\nfunction initMap() {\n  // The location of Uluru\n  var uluru = {\n    lat: 29.630177007489117,\n    lng: 52.49669654352804\n  }; // The map, centered at Uluru\n\n  var map = new google.maps.Map(document.getElementById(\"map\"), {\n    zoom: 12,\n    center: uluru,\n    disableDefaultUI: true,\n    draggable: false\n  }); // The marker, positioned at Uluru\n\n  var marker = new google.maps.Marker({\n    position: uluru,\n    map: map\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWFwLmpzPzk5NDkiXSwibmFtZXMiOlsiaW5pdE1hcCIsInVsdXJ1IiwibGF0IiwibG5nIiwibWFwIiwiZ29vZ2xlIiwibWFwcyIsIk1hcCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJ6b29tIiwiY2VudGVyIiwiZGlzYWJsZURlZmF1bHRVSSIsImRyYWdnYWJsZSIsIm1hcmtlciIsIk1hcmtlciIsInBvc2l0aW9uIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBLFNBQVNBLE9BQVQsR0FBbUI7QUFDakI7QUFDQSxNQUFNQyxLQUFLLEdBQUc7QUFBRUMsSUFBQUEsR0FBRyxFQUFFLGtCQUFQO0FBQTJCQyxJQUFBQSxHQUFHLEVBQUU7QUFBaEMsR0FBZCxDQUZpQixDQUdqQjs7QUFDQSxNQUFNQyxHQUFHLEdBQUcsSUFBSUMsTUFBTSxDQUFDQyxJQUFQLENBQVlDLEdBQWhCLENBQW9CQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsS0FBeEIsQ0FBcEIsRUFBb0Q7QUFDOURDLElBQUFBLElBQUksRUFBRSxFQUR3RDtBQUU5REMsSUFBQUEsTUFBTSxFQUFFVixLQUZzRDtBQUc5RFcsSUFBQUEsZ0JBQWdCLEVBQUUsSUFINEM7QUFJOURDLElBQUFBLFNBQVMsRUFBRTtBQUptRCxHQUFwRCxDQUFaLENBSmlCLENBVWpCOztBQUNBLE1BQU1DLE1BQU0sR0FBRyxJQUFJVCxNQUFNLENBQUNDLElBQVAsQ0FBWVMsTUFBaEIsQ0FBdUI7QUFDcENDLElBQUFBLFFBQVEsRUFBRWYsS0FEMEI7QUFFcENHLElBQUFBLEdBQUcsRUFBRUE7QUFGK0IsR0FBdkIsQ0FBZjtBQUlEIiwic291cmNlc0NvbnRlbnQiOlsiLy8gSW5pdGlhbGl6ZSBhbmQgYWRkIHRoZSBtYXBcbmZ1bmN0aW9uIGluaXRNYXAoKSB7XG4gIC8vIFRoZSBsb2NhdGlvbiBvZiBVbHVydVxuICBjb25zdCB1bHVydSA9IHsgbGF0OiAyOS42MzAxNzcwMDc0ODkxMTcsIGxuZzogNTIuNDk2Njk2NTQzNTI4MDQgfTtcbiAgLy8gVGhlIG1hcCwgY2VudGVyZWQgYXQgVWx1cnVcbiAgY29uc3QgbWFwID0gbmV3IGdvb2dsZS5tYXBzLk1hcChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1hcFwiKSwge1xuICAgIHpvb206IDEyLFxuICAgIGNlbnRlcjogdWx1cnUsXG4gICAgZGlzYWJsZURlZmF1bHRVSTogdHJ1ZSxcbiAgICBkcmFnZ2FibGU6IGZhbHNlLFxufSk7XG4gIC8vIFRoZSBtYXJrZXIsIHBvc2l0aW9uZWQgYXQgVWx1cnVcbiAgY29uc3QgbWFya2VyID0gbmV3IGdvb2dsZS5tYXBzLk1hcmtlcih7XG4gICAgcG9zaXRpb246IHVsdXJ1LFxuICAgIG1hcDogbWFwLFxuICB9KTtcbn1cbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbWFwLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/map.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/map.js"]();
/******/ 	
/******/ })()
;
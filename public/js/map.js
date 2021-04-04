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

eval("var lat = 29.638058;\nvar lng = 52.525713;\nvar map = L.map('map').setView([lat, lng], 14);\nmapLink = '<a href=\"http://openstreetmap.org\">OpenStreetMap</a>';\nL.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {\n  attribution: '&copy; ' + mapLink + 'Contributors',\n  maxZoom: 16\n}).addTo(map);\nvar theMarker = {};\nmap.on('click', function (e) {\n  lat = e.latlng.lat;\n  lon = e.latlng.lng;\n  console.log(\"You clicked the map at LAT: \" + lat + \" and LONG: \" + lon); //Clear existing marker, \n\n  if (theMarker != undefined) {\n    map.removeLayer(theMarker);\n  }\n\n  ; //Add a marker to show where you clicked.\n\n  theMarker = L.marker([lat, lon]).addTo(map);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWFwLmpzPzk5NDkiXSwibmFtZXMiOlsibGF0IiwibG5nIiwibWFwIiwiTCIsInNldFZpZXciLCJtYXBMaW5rIiwidGlsZUxheWVyIiwiYXR0cmlidXRpb24iLCJtYXhab29tIiwiYWRkVG8iLCJ0aGVNYXJrZXIiLCJvbiIsImUiLCJsYXRsbmciLCJsb24iLCJjb25zb2xlIiwibG9nIiwidW5kZWZpbmVkIiwicmVtb3ZlTGF5ZXIiLCJtYXJrZXIiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLEdBQUcsR0FBRyxTQUFWO0FBQ0EsSUFBSUMsR0FBRyxHQUFHLFNBQVY7QUFDQSxJQUFJQyxHQUFHLEdBQUdDLENBQUMsQ0FBQ0QsR0FBRixDQUFNLEtBQU4sRUFBYUUsT0FBYixDQUFxQixDQUFDSixHQUFELEVBQU1DLEdBQU4sQ0FBckIsRUFBaUMsRUFBakMsQ0FBVjtBQUNBSSxPQUFPLEdBQUcsc0RBQVY7QUFDQUYsQ0FBQyxDQUFDRyxTQUFGLENBQVksbURBQVosRUFBaUU7QUFDL0RDLEVBQUFBLFdBQVcsRUFBRSxZQUFZRixPQUFaLEdBQXNCLGNBRDRCO0FBQ1pHLEVBQUFBLE9BQU8sRUFBRTtBQURHLENBQWpFLEVBRUdDLEtBRkgsQ0FFU1AsR0FGVDtBQUtBLElBQUlRLFNBQVMsR0FBRyxFQUFoQjtBQUVBUixHQUFHLENBQUNTLEVBQUosQ0FBTyxPQUFQLEVBQWdCLFVBQVVDLENBQVYsRUFBYTtBQUMzQlosRUFBQUEsR0FBRyxHQUFHWSxDQUFDLENBQUNDLE1BQUYsQ0FBU2IsR0FBZjtBQUNBYyxFQUFBQSxHQUFHLEdBQUdGLENBQUMsQ0FBQ0MsTUFBRixDQUFTWixHQUFmO0FBRUFjLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLGlDQUFpQ2hCLEdBQWpDLEdBQXVDLGFBQXZDLEdBQXVEYyxHQUFuRSxFQUoyQixDQUszQjs7QUFFQSxNQUFJSixTQUFTLElBQUlPLFNBQWpCLEVBQTRCO0FBQzFCZixJQUFBQSxHQUFHLENBQUNnQixXQUFKLENBQWdCUixTQUFoQjtBQUNEOztBQUFBLEdBVDBCLENBVzNCOztBQUNBQSxFQUFBQSxTQUFTLEdBQUdQLENBQUMsQ0FBQ2dCLE1BQUYsQ0FBUyxDQUFDbkIsR0FBRCxFQUFNYyxHQUFOLENBQVQsRUFBcUJMLEtBQXJCLENBQTJCUCxHQUEzQixDQUFaO0FBQ0QsQ0FiRCIsInNvdXJjZXNDb250ZW50IjpbInZhciBsYXQgPSAyOS42MzgwNTg7XG52YXIgbG5nID0gNTIuNTI1NzEzO1xudmFyIG1hcCA9IEwubWFwKCdtYXAnKS5zZXRWaWV3KFtsYXQsIGxuZ10sIDE0KTtcbm1hcExpbmsgPSAnPGEgaHJlZj1cImh0dHA6Ly9vcGVuc3RyZWV0bWFwLm9yZ1wiPk9wZW5TdHJlZXRNYXA8L2E+JztcbkwudGlsZUxheWVyKCdodHRwOi8ve3N9LnRpbGUub3BlbnN0cmVldG1hcC5vcmcve3p9L3t4fS97eX0ucG5nJywge1xuICBhdHRyaWJ1dGlvbjogJyZjb3B5OyAnICsgbWFwTGluayArICdDb250cmlidXRvcnMnLCBtYXhab29tOiAxNixcbn0pLmFkZFRvKG1hcCk7XG5cblxudmFyIHRoZU1hcmtlciA9IHt9O1xuXG5tYXAub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgbGF0ID0gZS5sYXRsbmcubGF0O1xuICBsb24gPSBlLmxhdGxuZy5sbmc7XG5cbiAgY29uc29sZS5sb2coXCJZb3UgY2xpY2tlZCB0aGUgbWFwIGF0IExBVDogXCIgKyBsYXQgKyBcIiBhbmQgTE9ORzogXCIgKyBsb24pO1xuICAvL0NsZWFyIGV4aXN0aW5nIG1hcmtlciwgXG5cbiAgaWYgKHRoZU1hcmtlciAhPSB1bmRlZmluZWQpIHtcbiAgICBtYXAucmVtb3ZlTGF5ZXIodGhlTWFya2VyKTtcbiAgfTtcblxuICAvL0FkZCBhIG1hcmtlciB0byBzaG93IHdoZXJlIHlvdSBjbGlja2VkLlxuICB0aGVNYXJrZXIgPSBMLm1hcmtlcihbbGF0LCBsb25dKS5hZGRUbyhtYXApO1xufSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9tYXAuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/map.js\n");

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
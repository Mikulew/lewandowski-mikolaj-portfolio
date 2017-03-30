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
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("throw new Error(\"Module build failed: Error: ENOENT: no such file or directory, open 'C:\\\\xampp\\\\htdocs\\\\portfolio\\\\resources\\\\assets\\\\js\\\\jquery-3.2.0.min.js'\");//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOltdLCJtYXBwaW5ncyI6IiIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ },
/* 1 */
/***/ function(module, exports) {

eval("throw new Error(\"Module build failed: Error: ENOENT: no such file or directory, open 'C:\\\\xampp\\\\htdocs\\\\portfolio\\\\resources\\\\assets\\\\js\\\\jquery.scrollTo.min.js'\");//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMS5qcyIsInNvdXJjZXMiOltdLCJtYXBwaW5ncyI6IiIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ },
/* 2 */
/***/ function(module, exports) {

eval("(function(){\r\n   var imgHeader = new Image(),\r\n       imgAbout = new Image(),\r\n       imgAuthor = new Image(),\r\n       imgContact = new Image(),\r\n       imgProject = new Image(),\r\n       imgCanvas = new Image(),\r\n       imgBook = new Image(),\r\n       imgBlog = new Image(),\r\n       imgLogin = new Image();\r\n\r\n\r\n   imgHeader.src = '/img/page/welcome-page.jpg',\r\n   imgAbout.src = '/img/page/about-page.jpg',\r\n   imgAuthor.src = '/img/page/mikulew-hawk.jpg',\r\n   imgContact.src = '/img/page/contact-page.jpg',\r\n   imgProject.src = '/img/page/project-page.jpg',\r\n   imgCanvas.src = '/img/page/canvas-page.jpg',\r\n   imgBook.src = '/img/page/book-page.jpg',\r\n   imgBlog.src = '/img/page/blog-page.jpg',\r\n   imgLogin.src = '/img/page/login-page.jpg';\r\n\r\n   imgHeader.onload = function() {\r\n      $('#headerImage').attr({src: imgHeader.src});\r\n   };\r\n   imgAbout.onload = function() {\r\n      $('#aboutImage').attr({src: imgAbout.src});\r\n   };\r\n   imgAuthor.onload = function() {\r\n      $('#authorImage').attr({src: imgAuthor.src});\r\n   };\r\n   imgContact.onload = function() {\r\n      $('#contactImage').attr({src: imgContact.src});\r\n   };\r\n   imgProject.onload = function() {\r\n      $('#projectImage').attr({src: imgProject.src});\r\n   };\r\n   imgCanvas.onload = function() {\r\n      $('#canvasImage').attr({src: imgCanvas.src});\r\n   };\r\n   imgBook.onload = function() {\r\n      $('#bookImage').attr({src: imgBook.src});\r\n   };\r\n   imgBlog.onload = function() {\r\n      $('#blogImage').attr({src: imgBlog.src});\r\n   };\r\n   imgLogin.onload = function() {\r\n      $('#loginImage').attr({src: imgLogin.src});\r\n   };\r\n\r\n   $('#headerButton').click(function(){\r\n      $.scrollTo($('#sectionNewspaper'), 1000);\r\n   });\r\n   $('#newspaperButton').click(function(){\r\n      $.scrollTo($('#sectionCharts'), 1000);\r\n   });\r\n   $('#chartsButton').click(function(){\r\n      $.scrollTo($('#sectionHistory'), 1000);\r\n   });\r\n   $('#historyButton').click(function(){\r\n      $.scrollTo(0, 1500);\r\n   });\r\n\r\n   var $menu = $(\".hamburger\");\r\n   var $navbar = $('.navbar');\r\n\r\n   $menu.click('click', toggleMenu);\r\n\r\n   function toggleMenu() {\r\n      $menu.toggleClass('open');\r\n      $navbar.toggleClass('open');\r\n   }\r\n\r\n   $(window).scroll(function(){\r\n      $('.history-column.history-first').each(function(){\r\n         var bottom_of_object = $(this).offset().top + $(this).outerHeight();\r\n         var bottom_of_window = $(window).scrollTop() + $(window).height();\r\n         if (bottom_of_window > bottom_of_object) {\r\n            $('.history-column.history-first').css(\"visibility\", \"visible\").addClass('animated fadeInLeft');\r\n         }\r\n      });\r\n      $('.history-column.history-second').each(function(){\r\n         var bottom_of_object = $(this).offset().top + $(this).outerHeight();\r\n         var bottom_of_window = $(window).scrollTop() + $(window).height();\r\n         if (bottom_of_window > bottom_of_object) {\r\n            $('.history-column.history-second').css(\"visibility\", \"visible\").addClass('animated fadeInRight');\r\n         }\r\n      });\r\n      $('.charts-column').each(function(){\r\n         var bottom_of_object = $(this).offset().top + $(this).outerHeight();\r\n         var bottom_of_window = $(window).scrollTop() + $(window).height();\r\n         if (bottom_of_window > bottom_of_object) {\r\n            $('.charts-column').css(\"visibility\", \"visible\").addClass('animated flipInX');\r\n         }\r\n      });\r\n   });\r\n})();\r\n\r\n\r\n\r\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMi5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21haW4uanM/NmU0YiJdLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKXtcclxuICAgdmFyIGltZ0hlYWRlciA9IG5ldyBJbWFnZSgpLFxyXG4gICAgICAgaW1nQWJvdXQgPSBuZXcgSW1hZ2UoKSxcclxuICAgICAgIGltZ0F1dGhvciA9IG5ldyBJbWFnZSgpLFxyXG4gICAgICAgaW1nQ29udGFjdCA9IG5ldyBJbWFnZSgpLFxyXG4gICAgICAgaW1nUHJvamVjdCA9IG5ldyBJbWFnZSgpLFxyXG4gICAgICAgaW1nQ2FudmFzID0gbmV3IEltYWdlKCksXHJcbiAgICAgICBpbWdCb29rID0gbmV3IEltYWdlKCksXHJcbiAgICAgICBpbWdCbG9nID0gbmV3IEltYWdlKCksXHJcbiAgICAgICBpbWdMb2dpbiA9IG5ldyBJbWFnZSgpO1xyXG5cclxuXHJcbiAgIGltZ0hlYWRlci5zcmMgPSAnL2ltZy9wYWdlL3dlbGNvbWUtcGFnZS5qcGcnLFxyXG4gICBpbWdBYm91dC5zcmMgPSAnL2ltZy9wYWdlL2Fib3V0LXBhZ2UuanBnJyxcclxuICAgaW1nQXV0aG9yLnNyYyA9ICcvaW1nL3BhZ2UvbWlrdWxldy1oYXdrLmpwZycsXHJcbiAgIGltZ0NvbnRhY3Quc3JjID0gJy9pbWcvcGFnZS9jb250YWN0LXBhZ2UuanBnJyxcclxuICAgaW1nUHJvamVjdC5zcmMgPSAnL2ltZy9wYWdlL3Byb2plY3QtcGFnZS5qcGcnLFxyXG4gICBpbWdDYW52YXMuc3JjID0gJy9pbWcvcGFnZS9jYW52YXMtcGFnZS5qcGcnLFxyXG4gICBpbWdCb29rLnNyYyA9ICcvaW1nL3BhZ2UvYm9vay1wYWdlLmpwZycsXHJcbiAgIGltZ0Jsb2cuc3JjID0gJy9pbWcvcGFnZS9ibG9nLXBhZ2UuanBnJyxcclxuICAgaW1nTG9naW4uc3JjID0gJy9pbWcvcGFnZS9sb2dpbi1wYWdlLmpwZyc7XHJcblxyXG4gICBpbWdIZWFkZXIub25sb2FkID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICQoJyNoZWFkZXJJbWFnZScpLmF0dHIoe3NyYzogaW1nSGVhZGVyLnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdBYm91dC5vbmxvYWQgPSBmdW5jdGlvbigpIHtcclxuICAgICAgJCgnI2Fib3V0SW1hZ2UnKS5hdHRyKHtzcmM6IGltZ0Fib3V0LnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdBdXRob3Iub25sb2FkID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICQoJyNhdXRob3JJbWFnZScpLmF0dHIoe3NyYzogaW1nQXV0aG9yLnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdDb250YWN0Lm9ubG9hZCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAkKCcjY29udGFjdEltYWdlJykuYXR0cih7c3JjOiBpbWdDb250YWN0LnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdQcm9qZWN0Lm9ubG9hZCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAkKCcjcHJvamVjdEltYWdlJykuYXR0cih7c3JjOiBpbWdQcm9qZWN0LnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdDYW52YXMub25sb2FkID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICQoJyNjYW52YXNJbWFnZScpLmF0dHIoe3NyYzogaW1nQ2FudmFzLnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdCb29rLm9ubG9hZCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAkKCcjYm9va0ltYWdlJykuYXR0cih7c3JjOiBpbWdCb29rLnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdCbG9nLm9ubG9hZCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAkKCcjYmxvZ0ltYWdlJykuYXR0cih7c3JjOiBpbWdCbG9nLnNyY30pO1xyXG4gICB9O1xyXG4gICBpbWdMb2dpbi5vbmxvYWQgPSBmdW5jdGlvbigpIHtcclxuICAgICAgJCgnI2xvZ2luSW1hZ2UnKS5hdHRyKHtzcmM6IGltZ0xvZ2luLnNyY30pO1xyXG4gICB9O1xyXG5cclxuICAgJCgnI2hlYWRlckJ1dHRvbicpLmNsaWNrKGZ1bmN0aW9uKCl7XHJcbiAgICAgICQuc2Nyb2xsVG8oJCgnI3NlY3Rpb25OZXdzcGFwZXInKSwgMTAwMCk7XHJcbiAgIH0pO1xyXG4gICAkKCcjbmV3c3BhcGVyQnV0dG9uJykuY2xpY2soZnVuY3Rpb24oKXtcclxuICAgICAgJC5zY3JvbGxUbygkKCcjc2VjdGlvbkNoYXJ0cycpLCAxMDAwKTtcclxuICAgfSk7XHJcbiAgICQoJyNjaGFydHNCdXR0b24nKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgICAkLnNjcm9sbFRvKCQoJyNzZWN0aW9uSGlzdG9yeScpLCAxMDAwKTtcclxuICAgfSk7XHJcbiAgICQoJyNoaXN0b3J5QnV0dG9uJykuY2xpY2soZnVuY3Rpb24oKXtcclxuICAgICAgJC5zY3JvbGxUbygwLCAxNTAwKTtcclxuICAgfSk7XHJcblxyXG4gICB2YXIgJG1lbnUgPSAkKFwiLmhhbWJ1cmdlclwiKTtcclxuICAgdmFyICRuYXZiYXIgPSAkKCcubmF2YmFyJyk7XHJcblxyXG4gICAkbWVudS5jbGljaygnY2xpY2snLCB0b2dnbGVNZW51KTtcclxuXHJcbiAgIGZ1bmN0aW9uIHRvZ2dsZU1lbnUoKSB7XHJcbiAgICAgICRtZW51LnRvZ2dsZUNsYXNzKCdvcGVuJyk7XHJcbiAgICAgICRuYXZiYXIudG9nZ2xlQ2xhc3MoJ29wZW4nKTtcclxuICAgfVxyXG5cclxuICAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpe1xyXG4gICAgICAkKCcuaGlzdG9yeS1jb2x1bW4uaGlzdG9yeS1maXJzdCcpLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICAgdmFyIGJvdHRvbV9vZl9vYmplY3QgPSAkKHRoaXMpLm9mZnNldCgpLnRvcCArICQodGhpcykub3V0ZXJIZWlnaHQoKTtcclxuICAgICAgICAgdmFyIGJvdHRvbV9vZl93aW5kb3cgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCkgKyAkKHdpbmRvdykuaGVpZ2h0KCk7XHJcbiAgICAgICAgIGlmIChib3R0b21fb2Zfd2luZG93ID4gYm90dG9tX29mX29iamVjdCkge1xyXG4gICAgICAgICAgICAkKCcuaGlzdG9yeS1jb2x1bW4uaGlzdG9yeS1maXJzdCcpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpLmFkZENsYXNzKCdhbmltYXRlZCBmYWRlSW5MZWZ0Jyk7XHJcbiAgICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICAgICQoJy5oaXN0b3J5LWNvbHVtbi5oaXN0b3J5LXNlY29uZCcpLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICAgdmFyIGJvdHRvbV9vZl9vYmplY3QgPSAkKHRoaXMpLm9mZnNldCgpLnRvcCArICQodGhpcykub3V0ZXJIZWlnaHQoKTtcclxuICAgICAgICAgdmFyIGJvdHRvbV9vZl93aW5kb3cgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCkgKyAkKHdpbmRvdykuaGVpZ2h0KCk7XHJcbiAgICAgICAgIGlmIChib3R0b21fb2Zfd2luZG93ID4gYm90dG9tX29mX29iamVjdCkge1xyXG4gICAgICAgICAgICAkKCcuaGlzdG9yeS1jb2x1bW4uaGlzdG9yeS1zZWNvbmQnKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwidmlzaWJsZVwiKS5hZGRDbGFzcygnYW5pbWF0ZWQgZmFkZUluUmlnaHQnKTtcclxuICAgICAgICAgfVxyXG4gICAgICB9KTtcclxuICAgICAgJCgnLmNoYXJ0cy1jb2x1bW4nKS5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgIHZhciBib3R0b21fb2Zfb2JqZWN0ID0gJCh0aGlzKS5vZmZzZXQoKS50b3AgKyAkKHRoaXMpLm91dGVySGVpZ2h0KCk7XHJcbiAgICAgICAgIHZhciBib3R0b21fb2Zfd2luZG93ID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpICsgJCh3aW5kb3cpLmhlaWdodCgpO1xyXG4gICAgICAgICBpZiAoYm90dG9tX29mX3dpbmRvdyA+IGJvdHRvbV9vZl9vYmplY3QpIHtcclxuICAgICAgICAgICAgJCgnLmNoYXJ0cy1jb2x1bW4nKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwidmlzaWJsZVwiKS5hZGRDbGFzcygnYW5pbWF0ZWQgZmxpcEluWCcpO1xyXG4gICAgICAgICB9XHJcbiAgICAgIH0pO1xyXG4gICB9KTtcclxufSkoKTtcclxuXHJcblxyXG5cclxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvbWFpbi5qcyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ },
/* 3 */,
/* 4 */,
/* 5 */
/***/ function(module, exports, __webpack_require__) {

__webpack_require__(0);
__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }
/******/ ]);
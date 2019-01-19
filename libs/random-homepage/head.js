(function(modules) { // webpackBootstrap
	// The module cache
	var installedModules = {};

	// The require function
	function __webpack_require__(moduleId) {

		// Check if module is in cache
		if(installedModules[moduleId])
			return installedModules[moduleId].exports;

		// Create a new module (and put it into the cache)
		var module = installedModules[moduleId] = {
			exports: {},
			id: moduleId,
			loaded: false
		};

		// Execute the module function
		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

		// Flag the module as loaded
		module.loaded = true;

		// Return the exports of the module
		return module.exports;
	}


	// expose the modules object (__webpack_modules__)
	__webpack_require__.m = modules;

	// expose the module cache
	__webpack_require__.c = installedModules;

	// __webpack_public_path__
	__webpack_require__.p = "";

	// Load entry module and return exports
	return __webpack_require__(0);
})
/************************************************************************/
([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';

	var _gen = __webpack_require__(1);

	var _gen2 = _interopRequireDefault(_gen);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	var isRunning = false;

	var init = function init() {
	  redirectPosts();
	  listen();
	  play();
	};

	function redirectPosts() {
	  var capture = window.location.search.match(/\?post=(\d+)/);
	  var postid = capture ? capture[1] : null;
	  if (postid) {
	    window.location.href = 'https://github.com/livoras/blog/issues/' + postid;
	  }
	}

	function listen() {
	  document.getElementById('head').addEventListener('click', function () {
	    if (isRunning) return;
	    play();
	  });
	}

	function play() {
	  var head = document.getElementById('head');
	  var history = (0, _gen2.default)('Stay simple, stay naive.').history;
	  isRunning = true;
	  var i = 0;
	  history.forEach(function (text, i) {
	    setTimeout(function () {
	      head.innerText = text;
	      if (++i === history.length) isRunning = false;
	    }, i * 30);
	  });
	}

	init();

/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';

	/**
	 * Using Genetic Algorithm to generate lots of random strings
	 * and make them evolve towards the target string.
	 *
	 */

	var Genea = __webpack_require__(2);
	var alphabetArr = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ., '.split('');
	var alphabet = function () {
	  var alphabet = {};
	  alphabetArr.forEach(function (ch, i) {
	    alphabet[ch] = i;
	  });
	  return alphabet;
	}();

	function getTargetStr(targetStr) {
	  var binaryStr = '';
	  for (var i = 0, len = targetStr.length; i < len; i++) {
	    var ch = targetStr[i];
	    var chIndex = alphabet[ch];
	    binaryStr += paddingWith0(Number(chIndex).toString(2));
	  }
	  return binaryStr;
	}

	function paddingWith0(num) {
	  while (num.length < 6) {
	    num = '0' + num;
	  }
	  return num;
	}

	function run(str) {
	  var tar = getTargetStr(str);
	  var ga = new Genea({
	    geneLength: tar.length,
	    mutateProbability: 0.5,
	    doneFitness: 1,
	    populationSize: 20,
	    generationsSize: 400,
	    getFitness: function getFitness(gene) {
	      var count = 0;
	      for (var i = 0, len = gene.length; i < len; i++) {
	        if (gene[i] === tar[i]) count++;
	      }
	      var likeness = count / tar.length;
	      return likeness;
	    },
	    onGeneration: function onGeneration(generation, genes) {
	      var max = 0,
	          index = 0;
	      this.fitnesses.forEach(function (fitness, i) {
	        if (fitness > max) {
	          max = fitness;
	          index = i;
	        }
	      });
	      this.history.push(toChars(genes[index]));
	    }
	  });

	  ga.history = [];
	  ga.start();
	  return ga;
	}

	function toChars(gene) {
	  var str = '';
	  while (gene.length) {
	    var ch = '00' + gene.substr(0, 6);
	    gene = gene.substr(6);
	    var chIndex = parseInt(ch, 2);
	    if (chIndex >= alphabetArr.length) {
	      chIndex = Math.floor(Math.random() * (alphabetArr.length - 1));
	    }
	    if (!alphabetArr[chIndex]) console.log(chIndex, parseInt(ch, 2));
	    str += alphabetArr[chIndex];
	  }
	  return str;
	}

	module.exports = run;

/***/ },
/* 2 */
/***/ function(module, exports) {

	'use strict';

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var Genea = function () {
	  function Genea(config) {
	    _classCallCheck(this, Genea);

	    this.currentGeneration = 0;
	    this.populations = [];
	    this.fitnesses = [];

	    this.mutateProbability = config.mutateProbability || 0.5; // 0 ~ 1
	    this.generationsSize = config.generationsSize || 100;
	    this.populationSize = config.populationSize || 100;
	    this.doneFitness = config.doneFitness || 1; // 0 ~ 1

	    this.geneLength = config.geneLength;
	    this.getFitness = config.getFitness;

	    this.outOfGenerationsSize = config.outOfGenerationsSize || this.outOfGenerationsSize;
	    this.onGeneration = config.onGeneration || this.onGeneration;
	    this.done = config.done || this.done;
	  }

	  _createClass(Genea, [{
	    key: "start",
	    value: function start() {
	      this.initPopulation();
	      this.makeFitnesses();
	      this.select();
	    }
	  }, {
	    key: "initPopulation",
	    value: function initPopulation() {
	      this.currentGeneration = 1;
	      this.populations = [];
	      for (var i = 0, len = this.populationSize; i < len; i++) {
	        var gene = getRandomGene(this.geneLength);
	        this.populations.push(gene);
	      }
	      this.onGeneration(this.currentGeneration, this.populations);
	    }
	  }, {
	    key: "select",
	    value: function select() {
	      if (this.currentGeneration >= this.generationsSize) {
	        return this.outOfGenerationsSize(this.populations, this.fitnesses);
	      }
	      var matches = this.getMatches();
	      if (matches.length > 0) return this.done(matches);
	      this.generateNextGeneration();
	    }
	  }, {
	    key: "makeFitnesses",
	    value: function makeFitnesses() {
	      var _this = this;

	      this.fitnesses = [];
	      this.totalFitness = 0;
	      this.populations.forEach(function (individual, i) {
	        var fitness = _this.getFitness(individual, _this.populations);
	        _this.fitnesses[i] = fitness;
	        _this.totalFitness += fitness;
	      });
	    }
	  }, {
	    key: "getMatches",
	    value: function getMatches() {
	      var _this2 = this;

	      var bests = [];
	      this.populations.forEach(function (individual, i) {
	        var fitness = _this2.fitnesses[i];
	        if (fitness >= _this2.doneFitness) {
	          bests.push({
	            gene: individual,
	            fitness: fitness,
	            pos: i
	          });
	        }
	      });
	      return bests;
	    }
	  }, {
	    key: "generateNextGeneration",
	    value: function generateNextGeneration() {
	      this.currentGeneration++;
	      var oldPopulations = this.populations;
	      var newPopulations = [];
	      for (var i = 0, len = oldPopulations.length; i < len; i++) {
	        var father = this.rotate();
	        var mother = this.rotate();
	        var child = this.crossOver(father, mother);
	        child = this.mutate(child);
	        newPopulations.push(child);
	      }
	      this.populations = newPopulations;
	      this.makeFitnesses();
	      this.onGeneration(this.currentGeneration, this.populations);
	      this.select();
	    }
	  }, {
	    key: "crossOver",
	    value: function crossOver(father, mother) {
	      var pos = Math.floor(father.length * Math.random());
	      var child1 = father.substring(0, pos) + mother.substring(pos);
	      var child2 = mother.substring(0, pos) + father.substring(pos);
	      return this.getFitness(child1) > this.getFitness(child2) ? child1 : child2;
	    }
	  }, {
	    key: "mutate",
	    value: function mutate(child) {
	      var mutateProbability = Math.random();
	      if (mutateProbability < this.mutateProbability) return child;
	      var pos = Math.floor(Math.random() * this.geneLength);
	      var arr = child.split("");
	      arr[pos] = +child[pos] ^ 1;
	      return arr.join("");
	    }
	  }, {
	    key: "rotate",
	    value: function rotate() {
	      var pos = Math.random(); // let's roll!
	      var soFar = 0;
	      for (var i = 0, len = this.fitnesses.length; i < len; i++) {
	        var fitness = this.fitnesses[i];
	        soFar += fitness;
	        if (soFar / this.totalFitness >= pos) {
	          return this.populations[i];
	        }
	      }
	    }
	  }, {
	    key: "done",
	    value: function done() {}
	  }, {
	    key: "onGeneration",
	    value: function onGeneration() {}
	  }, {
	    key: "outOfGenerationsSize",
	    value: function outOfGenerationsSize() {}
	  }]);

	  return Genea;
	}();

	function getRandomGene(len) {
	  var gene = "";
	  for (var i = 0; i < len; i++) {
	    gene += Math.floor(Math.random() * 100) % 2 === 0 ? "1" : "0";
	  }
	  return gene;
	}

	module.exports = Genea;

/***/ }
]);

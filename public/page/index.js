define('page/index', function(require, exports, module) {

  var $ = require('components/jquery/jquery');
  var alert = require('static/libs/alert');
  
  module.exports = function(selector) {
    $(selector).on('click', function() {
      alert('~Duang 的一下，我就弹出来了。');
      return false;
    });
  };
  

});

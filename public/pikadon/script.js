new Vue({
  el: '#app',
  data: {
  	nickname: '',
    show_success: false,
    show_danger: false,
  },
  methods: {
  	check: function () {
    	this.init();
      
      if (this.nickname == '') {
      	alert('יש להכניס כינוי!!!');
        return;
      }

			var result = Math.floor(Math.random() * 2) + 1;
    	
      if (result == 1) {
      	this.show_danger = true;
      } else {
      	this.show_success = true;
      }
    },
    
    init: function () {
    	this.show_success = false;
  	  this.show_danger = false;
    }
  }
});

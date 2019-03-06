(function(){

	var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper'),
		link = document.querySelector('.nav-link'),
		link2 = document.querySelector('.nav-link2'),
		link3 = document.querySelector('.nav-link3'),
		link4 = document.querySelector('.nav-link4'),
		link5 = document.querySelector('.nav-link5');

    //open and close menu when the button is clicked
	var open = false;
	button.addEventListener('click', handler, false);
	link.addEventListener('click', handler, false);
	link2.addEventListener('click', handler, false);
	link3.addEventListener('click', handler, false);
	link4.addEventListener('click', handler, false);
	link5.addEventListener('click', handler, false);

	function handler(){
	  if(!open){
	    button.innerHTML = "Close";
	    classie.add(wrapper, 'opened-nav');
	  }
	  else{
	    button.innerHTML = "Menu";
		classie.remove(wrapper, 'opened-nav');
	  }
	  open = !open;
	}
	function closeWrapper(){
		classie.remove(wrapper, 'opened-nav');
	}

})();

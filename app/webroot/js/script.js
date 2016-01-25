$(document).ready(function() {
	var menu = document.querySelector(".m_menu");
	var mob_part = document.querySelector(".mob_part");
	var close = document.querySelector(".mob_close");
	var m_sub = document.querySelector(".m_sub");
	menu.addEventListener("click", function(){
		mob_part.classList.add("m_show"); 
	});
	close.addEventListener("click", function(){
		mob_part.classList.remove("m_show"); 
	});
	m_sub.addEventListener("click", function(){
		m_sub.classList.add("sub_show"); 
	});

});

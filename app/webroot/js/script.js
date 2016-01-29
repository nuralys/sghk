$(document).ready(function() {
	var menu = document.querySelector(".m_menu");
	var mob_part = document.querySelector(".mob_part");
	var close = document.querySelector(".mob_close");
	menu.addEventListener("click", function(){
		mob_part.classList.add("m_show"); 
	});
	close.addEventListener("click", function(){
		mob_part.classList.remove("m_show"); 
	});
	$('.m_sub').on('click', function(){
        $(this).addClass('sub_show');
    });

});

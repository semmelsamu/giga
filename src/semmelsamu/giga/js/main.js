function update_scroll_position() {
    $("html").attr("scroll-position",$(document).scrollTop());
}

$(document).scroll(function(){
	update_scroll_position();
});

update_scroll_position();
$(".pergunta").click(function(){$pergunta=$(this);$resposta=$pergunta.next();$resposta.slideToggle(500,function(){$pergunta.text(function(){});});});function evitarSeleccion(target){if(typeof target.onselectstart!="undefined"){target.onselectstart=function(){return false;}}
else if(typeof target.style.MozUserSelect!="undefined"){target.style.MozUserSelect="none"}
else{target.onmousedown=function(){return false;}}
target.style.cursor="default"}
evitarSeleccion(document.body);jQuery(document).ready(function($){$(".scroll").click(function(event){event.preventDefault();$('html,body').animate({scrollTop:$(this.hash).offset().top},800);});});

$('.pergunta').click(function(){
    $('i',this).toggleClass('fa-times').fadeIn('slow');
});

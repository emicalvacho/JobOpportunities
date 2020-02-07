(function(){
    "use strict";

    document.addEventListener("DOMContentLoaded",function(){
        console.log("Listo");
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);

        obtener_registros_e();
        obtener_registros_p();
        
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");

        if (output != null) {
            output.innerHTML = slider.value;
        }

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    });

})(); // DOM CONTENT LOADED

$(function(){
    // Titulo del sitio
    $('.nombre-sitio').lettering();

    // Menu Fijo
    var windowsHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowsHeight){
            $(".barra").addClass("fixed");
            $(".body").css({"margin-top":barraAltura+"px"});
        } else{
            $(".barra").removeClass("fixed");
            $(".body").css({"margin-top":"0px"});
        }
    });

    //Menu movil
    $('.menu-movil').on('click',function(){
        $('.navegacion-principal').slideToggle();
    });

    // Animacion de numeros
    $('.resumen-pagina li:nth-child(1) p').animateNumber({number:10},4800);
    $('.resumen-pagina li:nth-child(2) p').animateNumber({number:90},4000);
    $('.resumen-pagina li:nth-child(3) p').animateNumber({number:180},6000);
    $('.resumen-pagina li:nth-child(4) p').animateNumber({number:900},4000);
})

function obtener_registros_p(productos)
{
	$.ajax({
		url : 'buscar_avisos.php',
		type : 'POST',
		dataType : 'html',
		data : { productos: productos },
	})
	.done(function(resultado){
		$("#datos").html(resultado);
	})
}

$(document).on('keyup', '#termino', function()
{
	var valorBusqueda=$(this).val();
	
	if (valorBusqueda!="")
	{
		obtener_registros_p(valorBusqueda);
	}
	else
	{
		obtener_registros_p();
	}
});

function obtener_registros_e(productos)
{
	$.ajax({
		url : 'buscar_avisos_empresa.php',
		type : 'POST',
		dataType : 'html',
		data : { productos: productos },
	})
	.done(function(resultado){
		$("#mis_avisos").html(resultado);
	})
}

$(document).on('keyup', '#nombre_aviso', function()
{
	var valorBusqueda=$(this).val();
	
	if (valorBusqueda!="")
	{
		obtener_registros_e(valorBusqueda);
	}
	else
	{
		obtener_registros_e();
	}
});


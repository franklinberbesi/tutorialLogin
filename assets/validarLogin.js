const formulario = document.querySelector('#formLogin');
const inputs = document.querySelectorAll('#formLogin input');
const spanCerrar = document.querySelector('.span-cerrar');

if(spanCerrar !== null){
    spanCerrar.addEventListener('click',()=>{
        // console.log(spanCerrar.parentElement);
         spanCerrar.parentElement.style.display= 'none';
        });
}

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{8,20}$/,
    clave: /^[a-zA-Z0-9\.\s]{8,20}$/ // 8 a 40 digitos.
}

   const  validar_campos = {
    usuario: false,
    clave: false
}


//empezamos a validar los campos
const validarFormulario = (e)=>{
    switch(e.target.name){

       case 'usuario':
        validarCampo(expresiones.usuario, e.target, 'usuario'); 
       break; 

       case 'clave':
        validarCampo(expresiones.clave, e.target, 'clave'); 
       break; 
    
    }
}

//funcion validar campo
 const validarCampo = (expresion, input, campo) => {
  
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('grupo__input-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('grupo__input-correcto');
          validar_campos[campo] = true;
    }
    else{
         document.getElementById(`grupo__${campo}`).classList.remove('grupo__input-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('grupo__input-incorrecto');
         validar_campos[campo] = false;
    }

}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e)=>{
  
    if((validar_campos.usuario && validar_campos.clave) == false){
           e.preventDefault();
    }
  
});





          



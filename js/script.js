window.addEventListener("load",()=>{
    document.querySelector('.formulario').addEventListener('submit',validarFormulario);
});

function  validarFormulario(e){
    e.preventDefault();
    //alert("Validando.....");
    let nombre=document.querySelector('#nombre');
    let email=document.querySelector('#email');
    if (!nombre.value){
         nombre.style.backgroundColor='pink';
         return;
    }
    if (!email.value){
        email.style.backgroundColor='pink';
       return;
     }

    // otra forma
    // let input=document.querySelectorAll(".entradas");
    // input.forEach(item =>{
    //     if (!item.value){
    //         item.style.backgroundColor="pink";
    //         let valida=false;
    //     }
    // })
    // if (!valida){
    //     return;
    // }

   this.submit();
}
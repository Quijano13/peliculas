window.onload = () =>{
    let div =  document.querySelector('#msj');
    if(div != undefined){
        setTimeout(() => {
            div.remove();
        }, 5000);
    }
}
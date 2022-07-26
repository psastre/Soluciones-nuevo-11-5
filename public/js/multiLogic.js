function localStorageFunc(){
    console.log(document.querySelector('#descripcionServicio').textContent)
    console.log(document.querySelector('.detallePedido').value )
   localStorage.setItem(
    document.querySelector('#descripcionServicio').textContent, 
    document.querySelector('.detallePedido').value )
 }
 
 
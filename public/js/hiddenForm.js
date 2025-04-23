const UpdatePasswordButton=document.getElementById('UpdatePasswordButton')
const formUpdatePassword=document.getElementById('formUpdatePassword')
const buttonForm=document.getElementById('buttonForm')
const alertUpdate=document.getElementById('alertUpdate')
UpdatePasswordButton.addEventListener("click",function(){
    formUpdatePassword.classList.toggle('hidden')
    formUpdatePassword.style.opacity='1'
    formUpdatePassword.style.zIndex='10'
   
})
buttonForm.addEventListener('click',function(){
    formUpdatePassword.classList.remove('hidden')
})

setTimeout(()=>{
    alertUpdate.classList.add('alertUpdate')
},2000)

// document.body.addEventListener('click',function(){
//     if(formUpdatePassword.hasAttribute('class')!=="hidden"){
//         formUpdatePassword.classList.add('hidden') 
//     }
   
// })

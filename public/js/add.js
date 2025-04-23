const InputPhone=document.getElementById("InputPhone")
const spanNbrChiffre=document.querySelector(".spanNbrChiffre")
const iconNbrPhone=document.querySelector(".iconNbrPhone")
const cancelButton=document.getElementById('cancel')
console.log(InputPhone)
InputPhone.addEventListener("input",function(){
       
        spanNbrChiffre.innerHTML=InputPhone.value.length
        if(InputPhone.value.length>2){
            iconNbrPhone.innerHTML=`<i class="fa-solid fa-x text-red-800 "></i>`
        }
        if(InputPhone.value.length==10){
            iconNbrPhone.innerHTML=`<i class="fa-solid  fa-check text-green-800 "></i>`
        }
})

cancelButton.addEventListener('click',function(){
    document.getElementById('messageBox').remove()
    document.getElementById('messageBox').style.display='none'
    document.getElementById('messageBox').style.width='0px'
    document.getElementById('messageBox').style.height='0px'
     document.getElementById('messageBox').style.opacity='0' 
})


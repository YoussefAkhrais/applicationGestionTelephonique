
  // filtrage by phone number
function filtreDataWithPhone(){
  
let phoneValue=document.getElementById('phone')

const tableValue=document.querySelectorAll('#userTable tbody tr')
   
  
    if(phoneValue.value.length>0){
        for(let i=0;i<tableValue.length;i++){
            let phone=tableValue[i].cells[2].textContent;
         
            if(phone.includes(phoneValue.value)){
               
                tableValue[i].style.display=""
                   
            }else{
                tableValue[i].style.display='none'
            }
         
    
        } 
     
    }else{
        window.location.reload();
    }

}

  // filtrage by name
  function filtreDataWithName(){
  
    let nameValue=document.getElementById('name')
    
    const tableValue=document.querySelectorAll('#userTable tbody tr')
        if(nameValue.value.length>0){
            for(let i=0;i<tableValue.length;i++){
                let name=tableValue[i].cells[1].textContent;
                console.log(tableValue[i].cells[1].textContent)
                if(name.includes(nameValue.value)){
                    console.log(name)
                    tableValue[i].style.display=""      
                }else{
                    tableValue[i].style.display='none'
                }
            } 
         
        }else{
            window.location.reload();
        }
    
    }
    // filtrage with select name
   function filterWithSelectPhone(){
        const phone_filter=document.getElementById('phone_filter')

        const tableValue=document.querySelectorAll('#userTable tbody tr')
        if(phone_filter.value!==0){
            for(let i=0;i<tableValue.length;i++){
                let phone=tableValue[i].cells[2].textContent;
                console.log(tableValue[i].cells[2].textContent)
                if(phone.includes(phone_filter.value)){
                  
                    tableValue[i].style.display=""      
                }else{
                    tableValue[i].style.display='none'
                }
            } 
         
        }else{
            window.location.reload();
        }
   }

// filter with select name
function filterWithSelectName(){
    const name_filter=document.getElementById('name_filter')

    const tableValue=document.querySelectorAll('#userTable tbody tr')
    if(name_filter.value!==0){
        for(let i=0;i<tableValue.length;i++){
            let name=tableValue[i].cells[1].textContent;
            console.log(tableValue[i].cells[1].textContent)
            if(name.includes(name_filter.value)){
                tableValue[i].style.display=""      
            }else{
                tableValue[i].style.display='none'
            }
        } 
     
    }else{
        window.location.reload();
    }
}

//show message box
function showMessageBox(){
    return `
            <h1 class="z-10 bg-red-800 text-center">hello</h1>
    `
}
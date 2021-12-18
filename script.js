let table = document.querySelector("tbody");

table.onclick=function (e){

    const request = new XMLHttpRequest();
    request.open("post","backend/insert.php");
    request.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=utf-8");
    request.addEventListener("readystatechange", () => {
        if(request.readyState === 4 && request.status === 200) {
            console.log(request.responseText);
        }
    });
   if(e.target.classList.contains('to-hide')){
       e.target.closest('tr').remove();
       request.send('id='+e.target.id);
   }

   if(e.target.classList.contains('add')){
       changeQuantity(e.target,'add',request)

   }
    if(e.target.classList.contains('del')){
        changeQuantity(e.target,'del',request)
    }
}

function changeQuantity(elem,action,request){
    let val=elem.closest('td').firstElementChild;
    let num = Number(val.textContent);
    if(action=='add'){
        val.textContent=num+1;
        request.send('add_id='+val.id);
    }else{
        val.textContent=num-1;
        request.send('del_id='+val.id);
    }

}
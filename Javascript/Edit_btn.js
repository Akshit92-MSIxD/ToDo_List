
let edit_btns = document.getElementsByClassName('edit');  

        var edit_btns_arr = Array.from(edit_btns);   

        edit_btns_arr.forEach((element)=>{
    

            element.addEventListener("click",(e)=>{  // e indicates the event occured at a particular target(element)!!!

            let target_btn = e.target;

            let tr = target_btn.parentNode.parentNode;
            
            let SnoFetch = target_btn.id;
            let titleFetch = tr.getElementsByTagName("td")[0].innerText ; 
            let descFetch = tr.getElementsByTagName("td")[1].innerText ; 

              editTitle.value = titleFetch;
              editdesc.value = descFetch;
              SnoEdit.value = SnoFetch;
              console.log("Sno : ",SnoFetch);

              
              $('#editModal').modal('toggle');
              
            });
      });
let delete_btns = document.getElementsByClassName('delete');

    let delete_btns_arr = Array.from(delete_btns);

    delete_btns_arr.forEach((element)=>
    {
      element.addEventListener("click",(e)=>{

        let target_delete_btn = e.target;

        let sibling_edit_btn =  target_delete_btn.previousElementSibling;

        SnoDelete.value = sibling_edit_btn.id;

        $('#deleteModal').modal('toggle');
          
      });

    });
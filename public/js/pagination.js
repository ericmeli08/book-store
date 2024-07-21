// document.addEventListener("DOMContentLoaded", function() {
    const table = document.getElementsByClassName('ligne');
    const previous = document.getElementById('previous');
    const next = document.getElementById('next');
    var itemsPerPage;
    
    if (typeof nombre !== "undefined" && nombre)
        itemsPerPage = 9;
    else
        itemsPerPage = 6;

    let currentPage = 0;
    const btn_pag = document.getElementsByClassName('page');
    const totalItems = table.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    setupPagination();
    goToPage(currentPage);

    for (let index = 0; index < btn_pag.length; index++) {
        // action pour chaque button
        btn_pag[index].addEventListener('click',function(){
            goToPage(index);
        });    
    }
    
    function displayRows(start, end) {
        const rows = table;
        for (let i = 0; i < table.length; i++) {
            if (i < start || i > end) {
                rows[i].style.display = 'none';
            } else {
                rows[i].style.display = '';
            }
        }
    }

    
    function setupPagination() {
        const pagination = document.getElementById('pagination');
        let buttons = '';

        for (let i = 1; i <= totalPages; i++) {
            const active = (i == 1) ? "active_page":"";
            buttons += "<button class=\"page  "+active+"\" >"+i+"</button>";
        }
        pagination.innerHTML = buttons;
        
    }
    
    
    function wichBtnIsPrint(){
        if (totalPages>5) {
            if (currentPage==0 || currentPage==1 ) {
                printBtn([1,2,3,4,totalPages]);
            }else if (currentPage==totalPages-1 || currentPage==totalPages-2 ){
                printBtn([1,totalPages-1,totalPages-2,totalPages-3,totalPages]);
            }else{
                printBtn([1,currentPage,currentPage+1,currentPage+2,totalPages]);
            }
        }
    }
    
    function printBtn(index){
        for (let i = 1; i <= totalPages; i++) {
            const element = btn_pag[i-1];
            if(index.includes(i))
                element.style.display = '';
            else
            element.style.display = 'none';          
        }
    }
    function goToPage(page) {
        currentPage = page;
        const start = (currentPage) * itemsPerPage;
        const end = currentPage * itemsPerPage +itemsPerPage-1 ;
        displayRows(start, end);
        active(page);
        wichBtnIsPrint();
    }
    
    function active(index){
        // metre active pag
        for (let i = 0; i < btn_pag.length; i++) {
            const element = btn_pag[i];
            if (index!=i) {
                element.classList.remove('active_page');
            }else{
                element.classList.add('active_page');                
            }
        }
    }
    
    

    previous.addEventListener('click', function(){
        if(currentPage != 0){
            goToPage(currentPage - 1);
        }
    });
    next.addEventListener('click', function(){
        if (currentPage != totalPages-1) {
            goToPage(currentPage + 1);
        }
    });

// });

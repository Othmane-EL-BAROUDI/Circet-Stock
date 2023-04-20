    let btn = document.querySelector("#btn")
    let sidebar = document.querySelector(".sidebar")
    
    
    btn.addEventListener('click',()=>{
        sidebar.classList.toggle("active");
    })
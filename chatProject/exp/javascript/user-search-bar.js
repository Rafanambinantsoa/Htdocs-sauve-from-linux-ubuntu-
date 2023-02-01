const searchBar = document.querySelector(".users .search input"),
searchBtn  = document.querySelector(".users .search button"),
user_list  = document.querySelector(".users .users-list");

searchBar.onkeyup = ()=>{
    let ser = "";
    ser = searchBar.value;
    if(ser!=""){
        searchBar.classList.add("active")
    }
    else{
        searchBar.classList.remove("active")
    }
    // alert(ser)
    let xhr = new  XMLHttpRequest();
    xhr.open("POST" , "php/search.php" ,true)
    xhr.onload = () =>{
        if(xhr.readyState ===  XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                user_list.innerHTML = data;
                // console.log(data)
            }
        }
    }
    xhr.setRequestHeader("Content-type" , "application/x-www-form-urlencoded")
    //strict be le javascript amin reska espacement
    xhr.send("rech="+ser)
}

searchBtn.onclick = ()=>{
    // alert()
    searchBar.classList.toggle("active")
    searchBar.focus()
    searchBtn.classList.toggle("active")
}



setInterval(() =>{
    let xhr = new XMLHttpRequest();                                       
    xhr.open("GET","php/ida.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                if(!searchBar.classList.contains("active")){
                    //raha tsy misy anle class active le search bar de aseho eo ilay liste par default 
                    user_list.innerHTML = data;
                }
                // console.log(data)
            }
        }
    }
    xhr.send();
} ,500);


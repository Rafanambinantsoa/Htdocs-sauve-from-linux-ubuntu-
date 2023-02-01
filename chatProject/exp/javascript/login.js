const form = document.querySelector(".login form"),
continuBtn = form.querySelector(".submit input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
    e.preventDefault();
}

continuBtn.onclick = () =>{
    //ajax
    //CREATING AN XML OBJECT
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , "php/login.php" , true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                if(data == "success"){
                    location.href= "user.php";
                }
                else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
                //console.log(data);
            }
        }

    }
    let formData = new FormData(form); //creating  new form data Object        
    xhr.send(formData); 
}
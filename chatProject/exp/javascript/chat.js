const form = document.querySelector(".typing-area"),
inputField = document.querySelector(" .input-field"),
sendBtn = form.querySelector('button'),
chatBox = document.querySelector('.chat-box');

form.onsubmit = (e) =>{
    e.preventDefault();
}

sendBtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , "php/insert-chat.php" , true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                inputField.value  = ""
                //console.log(data);
            }
        }

    }
    let formData = new FormData(form); //creating  new form data Object        
    xhr.send(formData);
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();                                       
    xhr.open("POST","php/get-chat.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                // console.log(data)
            }
        }
    }
    let formData = new FormData(form); //creating  new form data Object        
    xhr.send(formData);
} ,500);
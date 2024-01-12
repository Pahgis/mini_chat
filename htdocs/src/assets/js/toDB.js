let btnMessage = document.querySelector(".btnMessage")
let id= document.querySelector("input[name='id']")
let text = document.querySelector(".textcontent")
const form = document.querySelector(".form")


form.addEventListener("submit" , function(e){

    e.preventDefault();
    let formData = new FormData();
    formData.append("id", id.value)
    formData.append("content", text.value)
    console.log(formData)
    toDB(formData);
    
    
})







function toDB(datas){

    fetch("./process/post/message-to-DB.php", {
        method: "POST",
        body: datas
    }).then((response)=>{
        return response.text()
    }).then((data)=>{
       
        text.value ='' 
        getPost()
    })


}

async function getPost(){
    const res = await fetch("./process/post/get_message.php");
    const data = await res.json();
    console.log(data)
    let ul = document.querySelector(".mess")
    ul.innerHTML=""
    data.forEach(post => {
        ul.innerHTML += `
        <li><strong style="color:#${post['color']}">${post["pseudo"]}</strong> : ${post["postUser"]}</li>
        `
    });
    let chat = document.querySelector(".mess")
    chat.scrollTop = chat.scrollHeight
}


setInterval(() => {
    getPost()
}, 3000);


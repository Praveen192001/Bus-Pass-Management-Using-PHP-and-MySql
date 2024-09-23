console.log("payment_display file is connected")
console.log("hii")

let display=document.querySelector("#display")
display.textContent=localStorage.getItem("amount")
let id=localStorage.getItem("id")
console.log("id is  "+id)



let run=()=>{

    alert("payment successful ")
    window.location="add-pass.php"
    
}
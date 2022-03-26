
// document.querySelector(".alone input[type='checkbox']").addEventListener("click",function(){
//     document.querySelector(".robot").style.display="flex";
// })

let three = document.getElementById("one");
three.onclick=() =>{
    document.getElementById("first").style.display="block";
    document.getElementById("second").style.display="none";

} 
document.getElementById("two").addEventListener("click",function(){
    document.getElementById("second").style.display="block";
    document.getElementById("first").style.display="none";

})


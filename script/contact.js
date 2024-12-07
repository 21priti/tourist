
function func1(e){
    // e.prevenDefault();
    let fname=document.querySelector(".fname").value;
    let lname=document.querySelector(".lname").value;
    let email=document.querySelector(".email").value;
    let ph=document.querySelector(".ph").value;
    let addr=document.querySelector(".addr").value;
    if(fname==="" || lname==="" ||email==="" || ph==="" || addr===""){
        alert("Please enter details before submitting!");
        return false;
    }
    else{
        alert("We will reach you soon!")
        return true;
    }
}
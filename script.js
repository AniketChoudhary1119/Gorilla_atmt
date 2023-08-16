window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popupt").style.display = "block";
        },
        1000
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popupt").style.display = "none";
});
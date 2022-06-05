let count = 0;

const value = document.querySelector("#value");
const btns = document.querySelectorAll(".btn");

btns.forEach(function(btn) {
    btn.addEventListener('click', function(e){
        console.log(e.currentTarget);
    })
});

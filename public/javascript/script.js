//  register page password show and hide

let passinputs = document.querySelectorAll(".passinput");
let eyebtns = document.querySelectorAll(".eyeicon");

eyebtns.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        let passinput = passinputs[index];
        if (passinput.type === "password") {
            passinput.type = "text";
            btn.src = "images/icons/eye-visible.png";
        } else {
            passinput.type = "password";
            btn.src = "images/icons/eye-invisible.png";
        }
    });
});

//



const form = document.querySelector(".contactform");

form.addEventListener("submit", e => {
    e.preventDefault();

    const info = form.name.value;
    const phone = form.phone.value;
    const email = form.email.value;
    

    if (info == ""){
        alert("Enter a Valid Name!")
        form.name.style.borderColor = "red";
        return false;
    }

    if (phone == ""){
        alert("Enter a Valid phone Address!");
        form.phone.style.borderColor = "red";
        return false;
    }

    if (email == ""){
        alert("Enter a Valid Email Address!");
        form.email.style.borderColor = "red";
        return false;
    }

    form.submit();
});

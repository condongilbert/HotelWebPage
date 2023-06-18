const forms = document.querySelector(".formBook");

forms.addEventListener("submit", e=>{
    e.preventDefault();

    const bookDate=forms.bookDate.value;
    const bookDated=forms.bookDated.value;
    const bookEmail=forms.bookEmail.value;
    const bookMessage=forms.bookMessage.value;
    const room=forms.room.value

    if(bookDate == ""){
        alert("Enter a Valid Arrival Date!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }
    if(bookDated == ""){
        alert("Enter a Valid Departure Date!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }
    if(room == ""){
        alert("Enter a Valid Arrival Date!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }

    if(bookDate == ""){
        alert("Enter a Valid Arrival Date!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }
    if(guest == ""){
        alert("Enter a Valid Guest!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }
    if(bookEmail == ""){
        alert("Enter a Valid Email!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }
    if(bookMessage == ""){
        alert("Enter a Valid Arrival Date!");
        forms.bookDate.style.borderColor = "red"
        return false;
    }
    forms.submit();
    
});
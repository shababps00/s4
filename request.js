document.getElementById("requestForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const phoneNumber = document.getElementById("number").value;
    if (!isValidPhoneNumber(phoneNumber)) {
        alert("Please enter a valid phone number.");
        return;
    }

    const requestConfirmationMessage = document.getElementById("requestConfirmationMessage");
    const successMessage = document.getElementById("requestSuccessMessage");
    requestConfirmationMessage.style.display = "block";
    successMessage.style.display = "block";

    setTimeout(function() {
        document.getElementById("requestForm").reset();
        requestConfirmationMessage.style.display = "none";
        successMessage.style.display = "none";
    }, 3000);
});

function isValidPhoneNumber(phoneNumber) {
    const cleanedNumber = phoneNumber.replace(/\D/g, '');
    return /^\d{7,15}$/.test(cleanedNumber);
}

// Mobile navigation toggle
document.querySelector('.mobile-nav-button').addEventListener('click', function() {
    const nav = document.querySelector('header nav');
    if (nav.style.display === 'block') {
        nav.style.display = 'none';
    } else {
        nav.style.display = 'block';
    }
});

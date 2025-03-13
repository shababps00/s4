document.getElementById("donationForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const phoneNumber = document.getElementById("location").value;
    if (!isValidPhoneNumber(phoneNumber)) {
        alert("Please enter a valid phone number.");
        return;
    }

    const confirmationMessage = document.getElementById("confirmationMessage");
    const successMessage = document.getElementById("successMessage");
    confirmationMessage.style.display = "block";
    successMessage.style.display = "block";

    setTimeout(function() {
        document.getElementById("donationForm").reset();
        confirmationMessage.style.display = "none";
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

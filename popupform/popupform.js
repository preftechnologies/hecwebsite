document.addEventListener("DOMContentLoaded", function () {
    // Load Popup Form
    fetch("popupform/popupform.html")
        .then(response => response.text())
        .then(data => {
            document.body.insertAdjacentHTML("beforeend", data);
            setTimeout(() => {
                document.getElementById("popupForm").classList.add("show-popup");
            }, 3000);
        });

    // Function to Close the Popup
    window.closePopup = function () {
        document.getElementById("popupForm").classList.remove("show-popup");
    };
});

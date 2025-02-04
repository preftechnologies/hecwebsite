
// Auto Open the Popup Form After 3 Seconds
window.onload = function () {
  setTimeout(function () {
      document.getElementById("popupForm").classList.add("show-popup");
  }, 3000);
};

// Close Popup
function closePopup() {
  document.getElementById("popupForm").classList.remove("show-popup");
}







// Open the popup card
function openPopup() {
  const popup = document.getElementById('popup');
  popup.style.display = 'block';
  document.body.classList.add('popup-active');
}

// Close the popup card
function closePopup() {
  const popup = document.getElementById('popup');
  popup.style.display = 'none';
  document.body.classList.remove('popup-active');
}






document.addEventListener("DOMContentLoaded", function () {
  function onEntry(entry) {
    entry.forEach((change) => {
      if (change.isIntersecting) {
        change.target.classList.add("visible");
      }
    });
  }

  let options = {
    threshold: [0.1]
  };

  let observer = new IntersectionObserver(onEntry, options);

  let elements = document.querySelectorAll(
    ".info-boxes .box, .partners-section .partner-box"
  );

  elements.forEach((element) => {
    observer.observe(element);
  });

  const partnersList = document.querySelector(".partners-list");
  const leftArrow = document.querySelector(".left-arrow");
  const rightArrow = document.querySelector(".right-arrow");
  const scrollStep = 200; // Adjust based on the width of each partner box and margin

  // Function to scroll the partners list horizontally
  function scrollHorizontally(amount) {
    partnersList.scrollBy({
      left: amount,
      behavior: "smooth"
    });
  }

  // Event listener for left arrow
  leftArrow.addEventListener("click", function () {
    scrollHorizontally(-scrollStep);
  });

  // Event listener for right arrow
  rightArrow.addEventListener("click", function () {
    scrollHorizontally(scrollStep);
  });

  // Automatic sliding
  setInterval(() => {
    scrollHorizontally(scrollStep);
  }, 3000); // Adjust delay time as needed
});
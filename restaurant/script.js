/* Toggle backoffice buttons */
function toggleContact() {
    phpContact.classList.remove("hidden");
    phpBookings.classList.add("hidden");
    phpGallery.classList.add("hidden");
    btnContact.classList.add("active");
    btnBookings.classList.remove("active");
    btnGallery.classList.remove("active");
}
function toggleBookings() {
    phpContact.classList.add("hidden");
    phpBookings.classList.remove("hidden");
    phpGallery.classList.add("hidden");
    btnContact.classList.remove("active");
    btnBookings.classList.add("active");
    btnGallery.classList.remove("active");
}
function toggleGallery() {
    phpContact.classList.add("hidden");
    phpBookings.classList.add("hidden");
    phpGallery.classList.remove("hidden");
    btnContact.classList.remove("active");
    btnBookings.classList.remove("active");
    btnGallery.classList.add("active");
}
btnContact.addEventListener("click", toggleContact);
btnBookings.addEventListener("click", toggleBookings);
btnGallery.addEventListener("click", toggleGallery);
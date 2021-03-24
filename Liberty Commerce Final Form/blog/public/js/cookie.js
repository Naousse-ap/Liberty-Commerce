const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("check_popup", "Accepté");
});

setTimeout(() => {
    if (!localStorage.getItem("check_popup")) {
        cookieContainer.classList.add("active");
    }
}, 2000);

function test() {
    var expires = (function(days) {
        date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        return date.toUTCString();

    })(5);
    document.cookie = "check_popup=Miam; expires=" + expires + "; path=/";
    location.reload();
}
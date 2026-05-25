const intro = document.getElementById("introScreen");
const loading = document.getElementById("loadingScreen");
const portfolio = document.getElementById("portfolioScreen");

const startBtn = document.getElementById("startBtn");

const line1 = document.getElementById("line1");
const line2 = document.getElementById("line2");
const line3 = document.getElementById("line3");

startBtn.addEventListener("click", () => {

    // switch screens
    intro.classList.remove("active");
    loading.classList.add("active");

    // loading text
    setTimeout(() => {
        line1.innerText = "Loading Kiba Shadow System Portfolio...";
    }, 500);

    setTimeout(() => {
        line2.innerText = "Access Granted...";
    }, 2000);

    setTimeout(() => {
        line3.innerText = "Welcome to Kiba Shadow Portfolio";
    }, 3500);

    // final switch
    setTimeout(() => {
        loading.classList.remove("active");
        portfolio.classList.add("active");
    }, 5000);

});